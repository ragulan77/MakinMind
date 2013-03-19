<?php

namespace MakinMind\EditorBundle\Controller;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use MakinMind\ProjectBundle\Entity\Project;
use MakinMind\ProjectBundle\Entity\Contract;
use MakinMind\UserBundle\Entity\User;

use MakinMind\ProjectBundle\Entity\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use MakinMind\EditorBundle\Entity\Editor;
use MakinMind\EditorBundle\Entity\FileTreeManager;
use MakinMind\EditorBundle\Entity\File;


class EditorController extends Controller
{
	/**
     * @Secure(roles="IS_AUTHENTICATED_REMEMBERED")
     */
	public function editorAction(Project $project)
	{
		//$user = $this->container->get('security.context')->getToken()->getUser();
		//if($user != $project)

		$request = $this->getRequest();
		$data = '';
		if ($request->getMethod() == 'GET' || $request->getMethod() == 'POST') {
			$dir = $this->get('kernel')->getRootDir();
 			$dir = str_replace('/app', '/src/MakinMind/ProjectBundle/Resources/Projects', $dir);
 			$dir .= '/P'.$project->getId();
			$fichier = $request->query->get('fichier');
			if(!empty($fichier))
			{
				
				$filename =$dir.str_replace('FOLDER_SEPARATOR', '/', $fichier);
				$newdata = $request->request->get("newd");
		    	if(!empty($newdata))
		    	{
					// open file 
					$fw = fopen($filename, 'w') or die('Could not open file');
					// write to file
					// added stripslashes to $newdata
					$fb = fwrite($fw,stripslashes($newdata)) or die('Could not write to file');
					// close file
					fclose($fw);
		    	}
				// open file
				$fh = fopen($filename, "r") or die("Could not open file!");
				// read file contents
				 

				if(filesize($filename)>0)
					$data = fread($fh, filesize($filename)) or die("Could not read file!");
				else
					$data="";
				// close file
				fclose($fh);
			}
	    }
		return $this->render('MakinMindEditorBundle:Editor:editor.html.twig', array('data'=>$data, 'project'=> $project, 'file'=> $fichier));
	}

	/**
     * @Secure(roles="IS_AUTHENTICATED_REMEMBERED")
     */
	public function treeManagerAction(Project $project)
	{
		define("IN_PHP", true);
		$numProject = $project->getId();
		define ("DATABASE_PLATFORM", 0); // Don't edit
		define ("FILE_SYSTEM_PLATFORM", 1); // Don't edit
		define ("TARGET_PLATFORM", FILE_SYSTEM_PLATFORM);
		$dir = $this->get('kernel')->getRootDir();
	 	$dir = str_replace('/app', '/src/MakinMind/ProjectBundle/Resources/Projects', $dir);
		$dir .= '/P'.$numProject;
		define("FILE_ROOT", $dir); 
		define ("SUCCESS", 1);  // Don't edit
		define ("FAILED", -1);  // Don't edit
		define ("FAILED_FILE_WITH_SAME_NAME_EXIST", -2); // Don't edit, it is only used in FILE_SYSTEM_PLATFORM

		error_reporting(0); 
		require_once('TreeManager/includes/functions.php');
		$treeManager = new FileTreeManager(FILE_ROOT);

		$rootName = "Root";
		$pageName = $this->generateUrl('EditorBundle_structManage', array('id'=>$project->getId()) );
		$treeElements = $treeManager->getElementList(null, $pageName);
		$rootId = $treeManager->getRootId();
		return $this->render('MakinMindEditorBundle:Editor:tree.html.twig', array('project'=> $project, 'rootName'=>$rootName, 'treeElements'=>$treeElements, 'rootId'=>$rootId));
	}

	
	/**
     * @Secure(roles="IS_AUTHENTICATED_REMEMBERED")
     */
	public function manageStructureAction(Project $project)
	{
		if (isset($_REQUEST['action']) && !empty($_REQUEST['action'])) 
		{
			$action = $_REQUEST['action'];	
		}
		else 
		{
			die("FAILED");
		}
		define("IN_PHP", true);

		require_once("TreeManager/common.php");

		$out = NULL;

		$request = $this->getRequest();
		switch($action)
		{
			case "insertElement":
			{	
				$ownerEl = $request->request->get('ownerEl');
				$slave = $request->request->get('slave');
				$name = $request->request->get('name');
				/**
				 * insert new element
				 */	
				if ( ( isset($name) === true && $name != NULL )  &&
				     ( isset($ownerEl) === true && $ownerEl != NULL )  &&
			         ( isset($slave ) === true && $slave != NULL )		   
				   )
				{				
					$ownerEl = checkVariable($ownerEl);
					$slave = (int) checkVariable($slave);
					$name = checkVariable($name);			
				  
					$out = $treeManager->insertElement($name, $ownerEl, $slave);

					//insert in DB if element is a file
					
					if($slave)
					{
						$date = new \Datetime();
						$author = $this->container->get('security.context')->getToken()->getUser();
						$fileName = str_replace("FOLDER_SEPARATOR", "/", $ownerEl) . '/' . $name;
						$file = new File();
						$file->setProject($project);
						$file->setAuthor($author);
						$file->setPrivileges(0);
						$file->setTime($date);
						$file->setName($fileName);
						$em = $this->get('doctrine.orm.entity_manager');
	    				$em->persist($file);
	    				$em->flush();
					}

				}
				else {
					$out = FAILED; 
				}
			}
			break;	
			case  "getElementList":  
			{
				$ownerEl = $request->query->get('ownerEl');

				/**
				 * getting element list
				 */
		        if( isset($ownerEl) == true && $ownerEl != NULL ) {  	
					$ownerEl = checkVariable($ownerEl); 
				}
				else {
					$ownerEl = 0;
				}
				$pageName = $this->generateUrl('EditorBundle_structManage', array('id'=>$project->getId()));
		  		$out = $treeManager->getElementList($ownerEl, $pageName);
		    }
			break;		
		    case "updateElementName":
		    {
				$ownerEl = $request->request->get('ownerEl');
				$elementId = $request->request->get('elementId');
				$name = $request->request->get('name');
		    	/**
		    	 * Changing element name
		    	 */
				if (isset($name) && !empty($name) &&
				    isset($elementId) && !empty($elementId) &&
				    isset($ownerEl ) && $ownerEl  != NULL)
				{			
					$name = checkVariable($name);
					$elementId = checkVariable($elementId); 			
					$ownerEl = checkVariable($ownerEl);
					$out = $treeManager->updateElementName($name, $elementId, $ownerEl);
				}                         
				else {
					$out = FAILED;	
				}
		    }    
		    break;

			case "deleteElement":
			{
				$ownerEl = $request->request->get('ownerEl');
				$elementId = $request->request->get('elementId');
				/**
				 * deleting an element and elements under it if exists
				 */
				if (isset($elementId) && !empty($elementId) &&
				    isset($ownerEl) && $ownerEl != NULL)
				{
		        	$elementId =  checkVariable($elementId);	 
		        	$ownerEl = checkVariable($ownerEl); 			 
		        	$index = 0;
					
					// delete in DB
					
					$fileName = str_replace("FOLDER_SEPARATOR", "/", $elementId);
					echo $fileName;
					// element is not a directory, remove it from database
					if(!is_dir($fileName))
					{
						$author = $this->container->get('security.context')->getToken()->getUser();
						$em = $this->get('doctrine.orm.entity_manager');
						$file = $em->getRepository('MakinMindEditorBundle:File')->findOneBy( array('author' => $author->getId()), array('name' => $fileName) );
						if($file)
						{
							$em->remove($file);
							$em->flush();
							$out = $treeManager->deleteElement($elementId, $index, $ownerEl);
						}
					}
					
			    }
		        else {
					$out = FAILED;	
				}
			}
			break;
			case "changeOrder":
			{	
				$elementId = $request->request->get('elementId');
				$destOwnerEl = $request->request->get('destOwnerEl');	
				$position = $request->request->get('position');
				$oldOwnerEl = $request->request->get('oldOwnerEl');	
				/**
				 * Change the order of an element
				 */
				if ((isset($elementId) && $elementId != NULL) &&
					(isset($destOwnerEl) && $destOwnerEl != NULL) &&
					(isset($position) && $position != NULL) &&
					(isset($oldOwnerEl) && $oldOwnerEl != NULL) 
					)			
				{			
					$oldOwnerEl = checkVariable($oldOwnerEl);
					$elementId = checkVariable($elementId);
					$destOwnerEl = checkVariable($destOwnerEl);
					$position = (int) checkVariable($position);
				
					$out = $treeManager->changeOrder($elementId, $oldOwnerEl, $destOwnerEl, $position);
				}			
				else{		
					$out = FAILED;
				}			
			}
			break;		
		    default:
		    	/**
		    	 * if an unsupported action is requested, reply it with FAILED
		    	 */
		      	$out = FAILED;
			break;
		}
		return new Response($out);
	}

	/**
     * @Secure(roles="IS_AUTHENTICATED_REMEMBERED")
     */
	public function modifyFileAction(Project $project, $file)
	{
		$request = $this->getRequest();
		$newdata="";
		if($request->getMethod() == 'POST')
		{
			$newdata = $request->request->get('newdata');
			$dir = $this->get('kernel')->getRootDir();
			$dir = str_replace('/app', '/src/MakinMind/ProjectBundle/Resources/Projects', $dir);
			$dir .= '/P'.$project->getId();
			$filename =$dir.str_replace('FOLDER_SEPARATOR', '/', $file);
			// open file 
			$fw = fopen($filename, 'w') or die('Could not open file');
			// write to file
			// added stripslashes to $newdata
			$fb = fwrite($fw,stripslashes($newdata)) or die('Could not write to file');
			// close file
			fclose($fw);
		}

		return new Response($newdata);
	}
}