<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_ee0599fd6c51c979e7badfcbee5c2a03 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " method=\"POST\" style=\"width: 400px;\">

\t    <p class=\"label\">Votre nom d'utilisateur : <span>(requis)</span></p>
\t \t<div class=\"field\">";
        // line 8
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "username"), array("attr" => array("class" => "req")));
        echo "</div>

\t \t<p class=\"label\">Votre nom : <span>(requis)</span></p>
\t \t<div class=\"field\">";
        // line 11
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "lastname"), array("attr" => array("class" => "req")));
        echo "</div>

\t \t<p class=\"label\">Votre prénom : <span>(requis)</span></p>
\t \t<div class=\"field\">";
        // line 14
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "firstname"), array("attr" => array("class" => "req")));
        echo "</div>

\t \t<p class=\"label\">Votre e-mail : <span>(requis)</span></p>
\t \t<div class=\"field\">";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "email"), array("attr" => array("class" => "req")));
        echo "</div>

\t \t<p class=\"label\">Votre mot de passe : <span>(requis)</span></p>
\t \t<div class=\"field\">";
        // line 20
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "first"), array("attr" => array("class" => "req")));
        echo "</div>

\t \t<p class=\"label\">Confirmation : <span>(requis)</span></p>
\t \t<div class=\"field\">";
        // line 23
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "second"), array("attr" => array("class" => "req")));
        echo "</div>

\t \t";
        // line 25
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
\t \t
\t    <div class=\"separator\" style=\"height:20px;\"></div>

\t    <div class=\"button\">
\t\t\t<input type=\"submit\" class=\"general_button\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
\t\t</div>
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 30,  68 => 25,  63 => 23,  57 => 20,  51 => 17,  45 => 14,  39 => 11,  33 => 8,  25 => 5,  19 => 2,  17 => 1,);
    }
}
