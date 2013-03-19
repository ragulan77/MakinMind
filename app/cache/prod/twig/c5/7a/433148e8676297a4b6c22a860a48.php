<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_c57a433148e8676297a4b6c22a860a48 extends Twig_Template
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
        return array (  467 => 238,  464 => 237,  459 => 230,  456 => 229,  451 => 226,  448 => 225,  442 => 220,  422 => 200,  401 => 182,  397 => 181,  393 => 180,  382 => 172,  378 => 171,  368 => 164,  364 => 163,  359 => 161,  351 => 155,  348 => 154,  341 => 142,  338 => 141,  332 => 137,  320 => 144,  318 => 141,  311 => 137,  307 => 135,  304 => 134,  299 => 71,  294 => 37,  289 => 31,  283 => 28,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  263 => 23,  258 => 21,  254 => 20,  250 => 18,  247 => 17,  241 => 5,  233 => 334,  231 => 237,  222 => 229,  219 => 228,  217 => 225,  203 => 216,  201 => 154,  198 => 153,  125 => 71,  58 => 33,  56 => 31,  36 => 5,  91 => 30,  68 => 17,  43 => 8,  209 => 220,  205 => 82,  196 => 134,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 14,  133 => 74,  124 => 41,  111 => 37,  107 => 58,  80 => 24,  69 => 20,  63 => 18,  60 => 13,  52 => 15,  97 => 34,  95 => 21,  88 => 29,  78 => 25,  75 => 45,  71 => 14,  25 => 5,  82 => 27,  72 => 16,  64 => 21,  53 => 30,  34 => 5,  92 => 20,  86 => 28,  79 => 40,  46 => 7,  37 => 9,  19 => 2,  44 => 11,  27 => 4,  49 => 11,  42 => 11,  40 => 7,  33 => 5,  29 => 5,  26 => 3,  224 => 232,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  99 => 52,  77 => 46,  74 => 27,  57 => 17,  47 => 13,  39 => 7,  32 => 7,  24 => 3,  22 => 3,  30 => 1,  23 => 3,  20 => 2,  17 => 1,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 50,  89 => 49,  87 => 29,  84 => 47,  81 => 26,  73 => 21,  70 => 24,  67 => 13,  62 => 14,  59 => 23,  55 => 14,  51 => 17,  48 => 9,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
