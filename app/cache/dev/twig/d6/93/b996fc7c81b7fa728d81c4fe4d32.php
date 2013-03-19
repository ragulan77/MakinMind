<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_d693b996fc7c81b7fa728d81c4fe4d32 extends Twig_Template
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
        echo " :: Inscription ";
    }

    // line 5
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Inscription";
    }

    // line 6
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <span>S'inscrire</span>
";
    }

    // line 10
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"block_contact_us_type_1\">
\t<div class=\"send_message\">
\t\t<h4>S'inscrire</h4>
\t\t<p class=\"text_subtitle_1\">Merci de remplir le formulaire afin de créer votre compte.</p>


";
        // line 18
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
        // line 19
        echo "
\t</div>
</div>
";
    }

    // line 24
    public function block_right($context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"sidebar\">
\t<div class=\"separator\" style=\"height:37px;\"></div>

\t\t<div class=\"block_categories\">
\t\t\t<h6>Ou alors !</h6>
\t\t\t<ul class=\"list_5\">
\t\t\t\t<li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
        echo "\">Se connecter</a></li>
\t<li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_request"), "html", null, true);
        echo "\">Mot de passe oublié</a></li>
\t\t</ul>
\t</div>
\t<div class=\"clearboth\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  85 => 31,  77 => 25,  74 => 24,  67 => 19,  65 => 18,  56 => 11,  53 => 10,  46 => 7,  43 => 6,  37 => 5,  30 => 3,);
    }
}
