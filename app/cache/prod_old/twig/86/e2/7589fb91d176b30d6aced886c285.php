<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_86e27589fb91d176b30d6aced886c285 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
        echo "\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderEnctype($_form_);
        echo " method=\"POST\" class=\"fos_user_profile_edit\">

\t<div class=\"block_tabs_type_1\">
\t\t<div class=\"tabs\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"#1\" class=\"current\">Général</a></li>
\t\t\t\t<li><a href=\"#2\">Personnel</a></li>
\t\t\t\t<li><a href=\"#3\">Professionnel</a></li>
\t\t\t</ul>
\t\t</div>
\t\t
\t\t<div class=\"tab_content\">
\t\t\t<div style=\"text-align: center;margin: auto;float: right; width: 150px;\">
\t\t\t\t<h6>Ma photo</h6>
       \t\t\t<a href=\"#\">
       \t\t\t\t<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/team3.jpg"), "html", null, true);
        echo "\" alt=\"Photo de ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "username"), "html", null, true);
        echo "\" style=\"border: 1px solid #CCCCCC; padding: 2px;\" />
       \t\t\t</a>
        \t</div>

\t\t\t<div class=\"oh\" style=\"padding-top:1px; width: 450px;\">
\t\t\t\t<h4 class=\"fw_n\">Informations générales</h4>
\t\t\t\t
\t\t\t\t";
        // line 27
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($_form_, "user"), "username"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 28
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($_form_, "user"), "username"), array("attr" => array("class" => "req")));
        echo " <span>(requis)</span></p>
\t\t\t\t \t<div class=\"field\">";
        // line 29
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($_form_, "user"), "username"));
        echo "</div>

\t\t\t\t";
        // line 31
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($_form_, "user"), "email"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 32
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($_form_, "user"), "email"), array("attr" => array("class" => "req")));
        echo " <span>(requis)</span></p>
\t\t\t\t \t<div class=\"field\">";
        // line 33
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($_form_, "user"), "email"));
        echo "</div>

\t\t\t\t";
        // line 35
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($_form_, "user"), "firstname"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 36
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($_form_, "user"), "firstname"), array("attr" => array("class" => "req")));
        echo " <span>(requis)</span></p>
\t\t\t\t    <div class=\"field\">";
        // line 37
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($_form_, "user"), "firstname"));
        echo "</div>

\t\t\t\t";
        // line 39
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($_form_, "user"), "lastname"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 40
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($_form_, "user"), "lastname"), array("attr" => array("class" => "req")));
        echo " <span>(requis)</span></p>
\t\t\t\t \t<div class=\"field\">";
        // line 41
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($_form_, "user"), "lastname"));
        echo "</div>

\t\t\t\t";
        // line 43
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($_form_, "user"), "birthdate"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 44
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($_form_, "user"), "birthdate"));
        echo "</p>
\t\t\t\t    <div class=\"field\">";
        // line 45
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($_form_, "user"), "birthdate"));
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"clearboth\"></div>
\t\t</div>


\t\t<div class=\"tab_content\">
\t\t\t<div class=\"oh\" style=\"padding-top:1px; width: 450px;\">
\t\t\t\t<h4 class=\"fw_n\">Informations personnelles</h4>

\t\t\t\t";
        // line 55
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($_form_, "user"), "phone"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 56
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($_form_, "user"), "phone"));
        echo "</p>
\t\t\t\t    <div class=\"field\">";
        // line 57
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($_form_, "user"), "phone"));
        echo "</div>

\t\t\t\t";
        // line 59
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($_form_, "user"), "address"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 60
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($_form_, "user"), "address"));
        echo "</p>
\t\t\t\t    <div class=\"field\">";
        // line 61
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($_form_, "user"), "address"));
        echo "</div>

\t\t\t\t";
        // line 63
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($_form_, "user"), "city"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 64
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($_form_, "user"), "city"));
        echo "</p>
\t\t\t\t \t<div class=\"field\">";
        // line 65
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($_form_, "user"), "city"));
        echo "</div>

\t\t\t\t";
        // line 67
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($_form_, "user"), "zipcode"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 68
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($_form_, "user"), "zipcode"));
        echo "</p>
\t\t\t\t    <div class=\"field\">";
        // line 69
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($_form_, "user"), "zipcode"));
        echo "</div>

\t\t\t\t";
        // line 71
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($_form_, "user"), "country"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 72
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($_form_, "user"), "country"));
        echo "</p>
\t\t\t\t    <div class=\"label\">";
        // line 73
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($_form_, "user"), "country"));
        echo "</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"tab_content\">
\t\t\t<div class=\"oh\" style=\"padding-top:1px; width: 450px;\">
\t\t\t\t<h4 class=\"fw_n\">Informations professionnelles</h4>

\t\t\t\t\t";
        // line 81
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($_form_, "user"), "job"));
        echo "
\t\t\t\t\t    <p class=\"label\">";
        // line 82
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($_form_, "user"), "job"));
        echo "</p>
\t\t\t\t\t    <div class=\"field\">";
        // line 83
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($_form_, "user"), "job"));
        echo "</div>

\t\t\t\t\t";
        // line 85
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($_form_, "user"), "company"));
        echo "
\t\t\t\t\t    <p class=\"label\">";
        // line 86
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($_form_, "user"), "company"));
        echo "</p>
\t\t\t\t\t    <div class=\"field\">";
        // line 87
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($_form_, "user"), "company"));
        echo "</div>

\t\t\t\t\t";
        // line 89
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($_form_, "user"), "workSocialURL"));
        echo "
\t\t\t\t\t    <p class=\"label\">";
        // line 90
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($_form_, "user"), "workSocialURL"));
        echo "</p>
\t\t\t\t\t    <div class=\"field\">";
        // line 91
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($_form_, "user"), "workSocialURL"));
        echo "</div>

\t\t\t\t\t";
        // line 93
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($_form_, "user"), "facebookURL"));
        echo "
\t\t\t\t\t    <p class=\"label\">";
        // line 94
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($_form_, "user"), "facebookURL"));
        echo "</p>
\t\t\t\t\t    <div class=\"field\">";
        // line 95
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($_form_, "user"), "facebookURL"));
        echo "</div>

\t\t\t\t\t";
        // line 97
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($_form_, "user"), "twitterURL"));
        echo "
\t\t\t\t\t    <p class=\"label\">";
        // line 98
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($_form_, "user"), "twitterURL"));
        echo "</p>
\t\t\t\t\t    <div class=\"field\">";
        // line 99
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($_form_, "user"), "twitterURL"));
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script type=\"text/javascript\">
\t\t\$('.block_tabs_type_1 .tabs').tabs('.block_tabs_type_1 .tab_content', {
\t\t\tinitialIndex : 0
\t\t});
\t</script>

\t<div style=\"padding-top: 15px;width: 450px;\">
\t\t<h4 class=\"fw_n\">Validation</h4>

\t\t";
        // line 113
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_form_, "current"));
        echo "
\t\t\t<p class=\"label\">Mot de passe :</p>
\t\t\t<div class=\"field\">";
        // line 115
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_form_, "current"));
        echo "</div>
\t\t\t<div class=\"separator\" style=\"height:20px;\"></div>
\t</div>

\t";
        // line 119
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderRest($_form_);
        echo "

    <div class=\"button\">
\t\t<input type=\"submit\" class=\"general_button\" value=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
\t</div>

\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 122,  342 => 119,  328 => 113,  310 => 99,  305 => 98,  300 => 97,  294 => 95,  289 => 94,  284 => 93,  278 => 91,  268 => 89,  262 => 87,  257 => 86,  246 => 83,  241 => 82,  236 => 81,  192 => 65,  187 => 64,  171 => 60,  160 => 57,  155 => 56,  131 => 44,  126 => 43,  120 => 41,  110 => 39,  72 => 29,  49 => 20,  41 => 5,  81 => 24,  21 => 2,  469 => 238,  466 => 237,  461 => 230,  458 => 229,  453 => 226,  450 => 225,  444 => 220,  424 => 200,  403 => 182,  399 => 181,  395 => 180,  384 => 172,  380 => 171,  370 => 164,  366 => 163,  361 => 161,  353 => 155,  350 => 154,  343 => 142,  340 => 141,  334 => 115,  322 => 144,  320 => 141,  313 => 137,  309 => 135,  306 => 134,  301 => 71,  296 => 37,  291 => 31,  285 => 28,  281 => 27,  277 => 26,  273 => 90,  269 => 24,  265 => 23,  260 => 21,  256 => 20,  252 => 85,  243 => 5,  233 => 237,  226 => 232,  221 => 228,  205 => 216,  203 => 68,  200 => 153,  198 => 67,  135 => 74,  75 => 23,  53 => 30,  70 => 13,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 59,  158 => 56,  153 => 55,  143 => 49,  134 => 44,  123 => 40,  118 => 39,  90 => 31,  87 => 29,  66 => 17,  60 => 10,  146 => 50,  136 => 45,  122 => 37,  107 => 34,  101 => 52,  95 => 29,  82 => 25,  73 => 20,  67 => 28,  52 => 11,  109 => 58,  104 => 37,  96 => 50,  84 => 14,  80 => 24,  26 => 3,  34 => 3,  112 => 21,  102 => 19,  89 => 16,  63 => 13,  56 => 8,  43 => 6,  92 => 28,  79 => 40,  57 => 10,  46 => 7,  37 => 5,  33 => 5,  29 => 4,  19 => 1,  44 => 8,  27 => 3,  55 => 10,  45 => 6,  36 => 5,  50 => 9,  47 => 10,  30 => 3,  25 => 3,  249 => 17,  239 => 90,  235 => 334,  228 => 84,  224 => 73,  219 => 72,  217 => 79,  214 => 71,  211 => 220,  208 => 69,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 55,  147 => 47,  132 => 39,  127 => 71,  117 => 36,  113 => 34,  86 => 30,  83 => 32,  78 => 31,  68 => 18,  64 => 37,  61 => 15,  48 => 11,  39 => 6,  32 => 5,  24 => 13,  22 => 4,  23 => 3,  20 => 2,  17 => 1,  144 => 46,  138 => 46,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 36,  108 => 31,  99 => 36,  94 => 35,  91 => 49,  88 => 33,  85 => 26,  77 => 23,  74 => 21,  71 => 15,  65 => 13,  62 => 27,  58 => 11,  54 => 13,  51 => 17,  42 => 9,  38 => 4,  35 => 5,  31 => 2,  28 => 5,);
    }
}
