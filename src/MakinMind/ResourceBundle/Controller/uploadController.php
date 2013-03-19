<?php

namespace MakinMind\ResourceBundle\Controller;

use JMS\SecurityExtraBundle\Annotation\Secure;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use MakinMind\ResourceBundle\Entity\Resource;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class UploadController extends Controller
{
	/**
     * @Secure(roles="IS_AUTHENTICATED_REMEMBERED")
     */
	public function uploadAction()
	{
	    $form = $this->createFormBuilder($resource)->add('file')->getForm();

	    if ($this->getRequest()->isMethod('POST')) {
        $form->bind($this->getRequest());
        if ($form->isValid()) {
		    $em = $this->getDoctrine()->getManager();

		    $em->persist($resource);
		    $em->flush();

            $this->redirect($this->generateUrl(...));
        }
    }

    return array('form' => $form->createView());
	}

}