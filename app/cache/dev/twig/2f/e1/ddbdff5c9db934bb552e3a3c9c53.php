<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_2fe1ddbdff5c9db934bb552e3a3c9c53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('form')->setTheme($this->getContext($context, "form"), array($this->getContext($context, "theme"), ));
        // line 2
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "

<div class=\"form\">
\t<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_change_password"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " method=\"POST\" class=\"fos_user_change_password\" style=\"width: 400px;\">
\t\t
\t\t";
        // line 7
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "current"));
        echo "
\t\t    <p class=\"label\">Mot de passe actuel : <span>(requis)</span></p>
\t\t    <div class=\"field\">";
        // line 9
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "current"));
        echo "</div>

\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "new"), "first"));
        echo "
\t\t    <p class=\"label\">Nouveau mot de passe : <span>(requis)</span></p>
\t\t    <div class=\"field\">";
        // line 13
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "new"), "first"));
        echo "</div>

\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "new"), "second"));
        echo "
\t\t    <p class=\"label\">Confirmation : <span>(requis)</span></p>
\t\t    <div class=\"field\">";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "new"), "second"));
        echo "</div>
\t    
\t    <div class=\"separator\" style=\"height:20px;\"></div>

\t    ";
        // line 21
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
\t    
\t    <div class=\"button\">
\t\t\t<input type=\"submit\" class=\"general_button\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
</div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 24,  64 => 21,  57 => 17,  52 => 15,  47 => 13,  42 => 11,  37 => 9,  32 => 7,  25 => 5,  19 => 2,  17 => 1,);
    }
}
