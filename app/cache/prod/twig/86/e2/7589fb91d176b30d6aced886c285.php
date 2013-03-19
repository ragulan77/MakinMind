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
        echo $this->env->getExtension('form')->setTheme($this->getContext($context, "form"), array($this->getContext($context, "theme"), ));
        // line 2
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "

<div class=\"form\">
\t<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
        echo "\" style=\"border: 1px solid #CCCCCC; padding: 2px;\" />
       \t\t\t</a>
        \t</div>

\t\t\t<div class=\"oh\" style=\"padding-top:1px; width: 450px;\">
\t\t\t\t<h4 class=\"fw_n\">Informations générales</h4>
\t\t\t\t
\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "username"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 28
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "username"), array("attr" => array("class" => "req")));
        echo " <span>(requis)</span></p>
\t\t\t\t \t<div class=\"field\">";
        // line 29
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "username"));
        echo "</div>

\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "email"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 32
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "email"), array("attr" => array("class" => "req")));
        echo " <span>(requis)</span></p>
\t\t\t\t \t<div class=\"field\">";
        // line 33
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "email"));
        echo "</div>

\t\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "firstname"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 36
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "firstname"), array("attr" => array("class" => "req")));
        echo " <span>(requis)</span></p>
\t\t\t\t    <div class=\"field\">";
        // line 37
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "firstname"));
        echo "</div>

\t\t\t\t";
        // line 39
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "lastname"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 40
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "lastname"), array("attr" => array("class" => "req")));
        echo " <span>(requis)</span></p>
\t\t\t\t \t<div class=\"field\">";
        // line 41
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "lastname"));
        echo "</div>

\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "birthdate"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 44
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "birthdate"));
        echo "</p>
\t\t\t\t    <div class=\"field\">";
        // line 45
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "birthdate"));
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"clearboth\"></div>
\t\t</div>


\t\t<div class=\"tab_content\">
\t\t\t<div class=\"oh\" style=\"padding-top:1px; width: 450px;\">
\t\t\t\t<h4 class=\"fw_n\">Informations personnelles</h4>

\t\t\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "phone"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 56
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "phone"));
        echo "</p>
\t\t\t\t    <div class=\"field\">";
        // line 57
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "phone"));
        echo "</div>

\t\t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "address"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 60
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "address"));
        echo "</p>
\t\t\t\t    <div class=\"field\">";
        // line 61
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "address"));
        echo "</div>

\t\t\t\t";
        // line 63
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "city"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 64
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "city"));
        echo "</p>
\t\t\t\t \t<div class=\"field\">";
        // line 65
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "city"));
        echo "</div>

\t\t\t\t";
        // line 67
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "zipcode"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 68
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "zipcode"));
        echo "</p>
\t\t\t\t    <div class=\"field\">";
        // line 69
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "zipcode"));
        echo "</div>

\t\t\t\t";
        // line 71
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "country"));
        echo "
\t\t\t\t    <p class=\"label\">";
        // line 72
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "country"));
        echo "</p>
\t\t\t\t    <div class=\"label\">";
        // line 73
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "country"));
        echo "</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"tab_content\">
\t\t\t<div class=\"oh\" style=\"padding-top:1px; width: 450px;\">
\t\t\t\t<h4 class=\"fw_n\">Informations professionnelles</h4>

\t\t\t\t\t";
        // line 81
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "job"));
        echo "
\t\t\t\t\t    <p class=\"label\">";
        // line 82
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "job"));
        echo "</p>
\t\t\t\t\t    <div class=\"field\">";
        // line 83
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "job"));
        echo "</div>

\t\t\t\t\t";
        // line 85
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "company"));
        echo "
\t\t\t\t\t    <p class=\"label\">";
        // line 86
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "company"));
        echo "</p>
\t\t\t\t\t    <div class=\"field\">";
        // line 87
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "company"));
        echo "</div>

\t\t\t\t\t";
        // line 89
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "workSocialURL"));
        echo "
\t\t\t\t\t    <p class=\"label\">";
        // line 90
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "workSocialURL"));
        echo "</p>
\t\t\t\t\t    <div class=\"field\">";
        // line 91
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "workSocialURL"));
        echo "</div>

\t\t\t\t\t";
        // line 93
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "facebookURL"));
        echo "
\t\t\t\t\t    <p class=\"label\">";
        // line 94
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "facebookURL"));
        echo "</p>
\t\t\t\t\t    <div class=\"field\">";
        // line 95
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "facebookURL"));
        echo "</div>

\t\t\t\t\t";
        // line 97
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "twitterURL"));
        echo "
\t\t\t\t\t    <p class=\"label\">";
        // line 98
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "twitterURL"));
        echo "</p>
\t\t\t\t\t    <div class=\"field\">";
        // line 99
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "user"), "twitterURL"));
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
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "current"));
        echo "
\t\t\t<p class=\"label\">Mot de passe :</p>
\t\t\t<div class=\"field\">";
        // line 115
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "current"));
        echo "</div>
\t\t\t<div class=\"separator\" style=\"height:20px;\"></div>
\t</div>

\t";
        // line 119
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
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
        return array (  296 => 122,  290 => 119,  278 => 113,  261 => 99,  257 => 98,  253 => 97,  248 => 95,  244 => 94,  240 => 93,  235 => 91,  227 => 89,  218 => 86,  214 => 85,  186 => 72,  182 => 71,  173 => 68,  169 => 67,  164 => 65,  160 => 64,  151 => 61,  147 => 60,  143 => 59,  138 => 57,  130 => 55,  100 => 40,  96 => 39,  83 => 35,  61 => 28,  45 => 20,  66 => 17,  65 => 29,  21 => 3,  467 => 238,  464 => 237,  459 => 230,  456 => 229,  451 => 226,  448 => 225,  442 => 220,  422 => 200,  401 => 182,  397 => 181,  393 => 180,  382 => 172,  378 => 171,  368 => 164,  364 => 163,  359 => 161,  351 => 155,  348 => 154,  341 => 142,  338 => 141,  332 => 137,  320 => 144,  318 => 141,  311 => 137,  307 => 135,  304 => 134,  299 => 71,  294 => 37,  289 => 31,  283 => 115,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  263 => 23,  258 => 21,  254 => 20,  250 => 18,  247 => 17,  241 => 5,  233 => 334,  231 => 90,  222 => 87,  219 => 228,  217 => 225,  203 => 216,  201 => 81,  198 => 153,  125 => 71,  58 => 11,  56 => 31,  36 => 6,  91 => 37,  68 => 18,  43 => 6,  209 => 83,  205 => 82,  196 => 134,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 56,  132 => 49,  127 => 46,  123 => 44,  109 => 43,  93 => 33,  90 => 31,  54 => 14,  133 => 74,  124 => 41,  111 => 37,  107 => 58,  80 => 24,  69 => 20,  63 => 18,  60 => 13,  52 => 15,  97 => 34,  95 => 21,  88 => 29,  78 => 33,  75 => 23,  71 => 14,  25 => 5,  82 => 27,  72 => 16,  64 => 21,  53 => 8,  34 => 3,  92 => 20,  86 => 30,  79 => 40,  46 => 7,  37 => 5,  19 => 2,  44 => 6,  27 => 4,  49 => 11,  42 => 11,  40 => 5,  33 => 5,  29 => 4,  26 => 3,  224 => 232,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 73,  188 => 77,  185 => 76,  179 => 72,  177 => 69,  171 => 67,  162 => 63,  158 => 61,  156 => 63,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 39,  117 => 45,  103 => 36,  99 => 52,  77 => 46,  74 => 32,  57 => 27,  47 => 13,  39 => 7,  32 => 7,  24 => 13,  22 => 3,  30 => 3,  23 => 3,  20 => 2,  17 => 1,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 44,  108 => 40,  104 => 41,  102 => 37,  94 => 32,  89 => 49,  87 => 36,  84 => 47,  81 => 26,  73 => 21,  70 => 31,  67 => 13,  62 => 13,  59 => 23,  55 => 10,  51 => 17,  48 => 9,  41 => 9,  38 => 8,  35 => 7,  31 => 5,  28 => 1,);
    }
}
