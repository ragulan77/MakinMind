<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_b77a59e990fa15e2909263249c2ac078 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titlebar_title' => array($this, 'block_titlebar_title'),
            'titlebar_ariane' => array($this, 'block_titlebar_ariane'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'right' => array($this, 'block_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " :: Mot de passe ";
    }

    // line 5
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Mot de passe";
    }

    // line 6
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
        echo "\">Profil</a> / <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
        echo "\">Modifier</a> / <span>Mot de passe</span>
";
    }

    // line 10
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"block_contact_us_type_1\">
    <div class=\"send_message\">
        <h4>Modifier le mot de passe</h4>
        <p class=\"text_subtitle_1\">Utiliser ce formulaire pour modifier votre mot de passe. L'ancien mot de passe est requis.</p>

            ";
        // line 17
        $this->env->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig")->display($context);
        // line 18
        echo "
    </div>
</div>
";
    }

    // line 23
    public function block_right($context, array $blocks = array())
    {
        // line 24
        echo "<div class=\"sidebar\">
    <div class=\"separator\" style=\"height:37px;\"></div>
        <div class=\"block_categories\">
            <h6>Ou alors !</h6>
            <ul class=\"list_5\">
            \t<li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
        echo "\">Voir mon profil</a></li>
                <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
        echo "\">Modifier mon profil</a></li>
         </ul>
    </div>
    <div class=\"clearboth\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 30,  87 => 29,  80 => 24,  77 => 23,  70 => 18,  68 => 17,  60 => 11,  57 => 10,  46 => 7,  43 => 6,  37 => 5,  30 => 3,);
    }
}
