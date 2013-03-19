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
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo $this->env->getExtension('form')->setTheme($_form_, array($_theme_, ));
        // line 2
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($_form_);
        echo "

<div class=\"form\">
\t<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_change_password"), "html", null, true);
        echo "\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderEnctype($_form_);
        echo " method=\"POST\" class=\"fos_user_change_password\" style=\"width: 400px;\">
\t\t
\t\t";
        // line 7
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_form_, "current"));
        echo "
\t\t    <p class=\"label\">Mot de passe actuel : <span>(requis)</span></p>
\t\t    <div class=\"field\">";
        // line 9
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "current"));
        echo "</div>

\t\t";
        // line 11
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($_form_, "new"), "first"));
        echo "
\t\t    <p class=\"label\">Nouveau mot de passe : <span>(requis)</span></p>
\t\t    <div class=\"field\">";
        // line 13
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($_form_, "new"), "first"));
        echo "</div>

\t\t";
        // line 15
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($_form_, "new"), "second"));
        echo "
\t\t    <p class=\"label\">Confirmation : <span>(requis)</span></p>
\t\t    <div class=\"field\">";
        // line 17
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($_form_, "new"), "second"));
        echo "</div>
\t    
\t    <div class=\"separator\" style=\"height:20px;\"></div>

\t    ";
        // line 21
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderRest($_form_);
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
        return array (  81 => 24,  21 => 2,  469 => 238,  466 => 237,  461 => 230,  458 => 229,  453 => 226,  450 => 225,  444 => 220,  424 => 200,  403 => 182,  399 => 181,  395 => 180,  384 => 172,  380 => 171,  370 => 164,  366 => 163,  361 => 161,  353 => 155,  350 => 154,  343 => 142,  340 => 141,  334 => 137,  322 => 144,  320 => 141,  313 => 137,  309 => 135,  306 => 134,  301 => 71,  296 => 37,  291 => 31,  285 => 28,  281 => 27,  277 => 26,  273 => 25,  269 => 24,  265 => 23,  260 => 21,  256 => 20,  252 => 18,  243 => 5,  233 => 237,  226 => 232,  221 => 228,  205 => 216,  203 => 154,  200 => 153,  198 => 134,  135 => 74,  75 => 45,  53 => 30,  70 => 13,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 49,  134 => 44,  123 => 40,  118 => 39,  90 => 28,  87 => 29,  66 => 17,  60 => 15,  146 => 50,  136 => 41,  122 => 37,  107 => 34,  101 => 52,  95 => 29,  82 => 25,  73 => 20,  67 => 17,  52 => 11,  109 => 58,  104 => 34,  96 => 50,  84 => 14,  80 => 24,  26 => 4,  34 => 6,  112 => 21,  102 => 19,  89 => 16,  63 => 13,  56 => 31,  43 => 6,  92 => 28,  79 => 40,  57 => 10,  46 => 7,  37 => 5,  33 => 5,  29 => 6,  19 => 1,  44 => 8,  27 => 3,  55 => 9,  45 => 6,  36 => 7,  50 => 9,  47 => 10,  30 => 1,  25 => 3,  249 => 17,  239 => 90,  235 => 334,  228 => 84,  224 => 229,  219 => 225,  217 => 79,  214 => 79,  211 => 220,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  132 => 39,  127 => 71,  117 => 36,  113 => 34,  86 => 47,  83 => 25,  78 => 46,  68 => 17,  64 => 37,  61 => 15,  48 => 11,  39 => 7,  32 => 5,  24 => 4,  22 => 4,  23 => 3,  20 => 2,  17 => 1,  144 => 46,  138 => 46,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 36,  108 => 31,  99 => 33,  94 => 29,  91 => 49,  88 => 16,  85 => 26,  77 => 23,  74 => 21,  71 => 19,  65 => 14,  62 => 15,  58 => 33,  54 => 13,  51 => 17,  42 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 5,);
    }
}
