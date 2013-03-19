<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'EditorBundle_editorTree' => true,
       'EditorBundle_editor' => true,
       'EditorBundle_structManage' => true,
       'EditorBundle_modifyFile' => true,
       'MakinMindResourceBundle_homepage' => true,
       'show_project' => true,
       'project_confidentiality' => true,
       'project_contract' => true,
       'projects' => true,
       'project_list_developpers' => true,
       'project_retained_candidates' => true,
       'project_candidates' => true,
       'project_modifyResume' => true,
       'project_modifyApplyTerms' => true,
       'project_status' => true,
       'project_createProject' => true,
       'portal_home' => true,
       'fos_user_security_login' => true,
       'fos_user_security_check' => true,
       'fos_user_security_logout' => true,
       'fos_user_profile_edit' => true,
       'fos_user_change_password' => true,
       'fos_user_profile_show' => true,
       'fos_user_profile_showUser' => true,
       'fos_user_registration_register' => true,
       'fos_user_registration_check_email' => true,
       'fos_user_registration_confirm' => true,
       'fos_user_registration_confirmed' => true,
       'fos_user_resetting_request' => true,
       'fos_user_resetting_send_email' => true,
       'fos_user_resetting_check_email' => true,
       'fos_user_resetting_reset' => true,
       'fos_js_routing_js' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getEditorBundle_editorTreeRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MakinMind\\EditorBundle\\Controller\\EditorController::treeManagerAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/editorTree',  ),));
    }

    private function getEditorBundle_editorRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MakinMind\\EditorBundle\\Controller\\EditorController::editorAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/editor',  ),));
    }

    private function getEditorBundle_structManageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\EditorBundle\\Controller\\EditorController::manageStructureAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/structManager',  ),));
    }

    private function getEditorBundle_modifyFileRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'fileName',), array (  '_controller' => 'MakinMind\\EditorBundle\\Controller\\EditorController::modifyFileAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'fileName',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/modifyFile',  ),));
    }

    private function getMakinMindResourceBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MakinMind\\ResourceBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getshow_projectRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'url',), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::showProjectAction',), array (  'id' => '\\d+',  'url' => '[a-zA-Z0-9-]+',), array (  0 =>   array (    0 => 'variable',    1 => '-',    2 => '[a-zA-Z0-9-]+',    3 => 'url',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/project',  ),));
    }

    private function getproject_confidentialityRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'url',), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::confidentialityAction',), array (  'id' => '\\d+',  'url' => '[a-zA-Z0-9-]+',), array (  0 =>   array (    0 => 'text',    1 => '/confidentiality',  ),  1 =>   array (    0 => 'variable',    1 => '-',    2 => '[a-zA-Z0-9-]+',    3 => 'url',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/project',  ),));
    }

    private function getproject_contractRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'url',), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectContractAction',), array (  'id' => '\\d+',  'url' => '[a-zA-Z0-9-]+',), array (  0 =>   array (    0 => 'text',    1 => '/contract',  ),  1 =>   array (    0 => 'variable',    1 => '-',    2 => '[a-zA-Z0-9-]+',    3 => 'url',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/project',  ),));
    }

    private function getprojectsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectsListAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/projects/',  ),));
    }

    private function getproject_list_developpersRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'url',), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectDevelopersListAction',), array (  'id' => '\\d+',  'url' => '[a-zA-Z0-9-]+',), array (  0 =>   array (    0 => 'text',    1 => '/developers',  ),  1 =>   array (    0 => 'variable',    1 => '-',    2 => '[a-zA-Z0-9-]+',    3 => 'url',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/project',  ),));
    }

    private function getproject_retained_candidatesRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'url',), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectRetainedCandidatesListAction',), array (  'id' => '\\d+',  'url' => '[a-zA-Z0-9-]+',), array (  0 =>   array (    0 => 'text',    1 => '/candidates/retained',  ),  1 =>   array (    0 => 'variable',    1 => '-',    2 => '[a-zA-Z0-9-]+',    3 => 'url',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  3 =>   array (    0 => 'text',    1 => '/project',  ),));
    }

    private function getproject_candidatesRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'url',), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectCandidatesListAction',), array (  'id' => '\\d+',  'url' => '[a-zA-Z0-9-]+',), array (  0 =>   array (    0 => 'text',    1 => '/candidates',  ),  1 =>   array (    0 => 'variable',    1 => '-',    2 => '[a-zA-Z0-9-]+',    3 => 'url',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),));
    }

    private function getproject_modifyResumeRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectModifyResumeAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'text',    1 => '/modifyResume',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),));
    }

    private function getproject_modifyApplyTermsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectModifyApplyTermsAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'text',    1 => '/modifyApplyTerms',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),));
    }

    private function getproject_statusRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'url',), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::projectStatusAction',), array (  'id' => '\\d+',  'url' => '[a-zA-Z0-9-]+',), array (  0 =>   array (    0 => 'text',    1 => '/status',  ),  1 =>   array (    0 => 'variable',    1 => '-',    2 => '[a-zA-Z0-9-]+',    3 => 'url',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),));
    }

    private function getproject_createProjectRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\ProjectBundle\\Controller\\ProjectController::createProjectAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/create-project',  ),));
    }

    private function getportal_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\PortalBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getfos_user_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\UserBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getfos_user_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\UserBundle\\Controller\\SecurityController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getfos_user_security_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\UserBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getfos_user_profile_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\UserBundle\\Controller\\ProfileController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/edit',  ),));
    }

    private function getfos_user_change_passwordRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/profile/password',  ),));
    }

    private function getfos_user_profile_showRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MakinMind\\UserBundle\\Controller\\ProfileController::showAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/profile/',  ),));
    }

    private function getfos_user_profile_showUserRouteInfo()
    {
        return array(array (  0 => 'username',), array (  '_controller' => 'MakinMind\\UserBundle\\Controller\\ProfileController::showUserAction',), array (  '_method' => 'GET',  'username' => '.+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '.+',    3 => 'username',  ),  1 =>   array (    0 => 'text',    1 => '/profile',  ),));
    }

    private function getfos_user_registration_registerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register/',  ),));
    }

    private function getfos_user_registration_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/check-email',  ),));
    }

    private function getfos_user_registration_confirmRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/register/confirm',  ),));
    }

    private function getfos_user_registration_confirmedRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/confirmed',  ),));
    }

    private function getfos_user_resetting_requestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/request',  ),));
    }

    private function getfos_user_resetting_send_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/send-email',  ),));
    }

    private function getfos_user_resetting_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/check-email',  ),));
    }

    private function getfos_user_resetting_resetRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/resetting/reset',  ),));
    }

    private function getfos_js_routing_jsRouteInfo()
    {
        return array(array (  0 => '_format',), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',), array (  '_format' => 'js|json',), array (  0 =>   array (    0 => 'variable',    1 => '.',    2 => 'js|json',    3 => '_format',  ),  1 =>   array (    0 => 'text',    1 => '/js/routing',  ),));
    }
}
