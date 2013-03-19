<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_841e7c8e2263bad1bee052701585eaa9 extends Twig_Template
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
        return array (  76 => 30,  85 => 31,  296 => 122,  290 => 119,  278 => 113,  261 => 99,  257 => 98,  253 => 97,  248 => 95,  244 => 94,  240 => 93,  235 => 91,  227 => 89,  218 => 86,  214 => 85,  186 => 72,  182 => 71,  173 => 68,  169 => 67,  164 => 65,  160 => 64,  151 => 61,  147 => 60,  143 => 59,  138 => 57,  130 => 55,  100 => 40,  96 => 39,  83 => 35,  61 => 16,  45 => 14,  66 => 17,  65 => 18,  21 => 3,  467 => 238,  464 => 237,  459 => 230,  456 => 229,  451 => 226,  448 => 225,  442 => 220,  422 => 200,  401 => 182,  397 => 181,  393 => 180,  382 => 172,  378 => 171,  368 => 164,  364 => 163,  359 => 161,  351 => 155,  348 => 154,  341 => 142,  338 => 141,  332 => 137,  320 => 144,  318 => 141,  311 => 137,  307 => 135,  304 => 134,  299 => 71,  294 => 37,  289 => 31,  283 => 115,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  263 => 23,  258 => 21,  254 => 20,  250 => 18,  247 => 17,  241 => 5,  233 => 334,  231 => 90,  222 => 87,  219 => 228,  217 => 225,  203 => 216,  201 => 81,  198 => 153,  125 => 71,  58 => 11,  56 => 11,  36 => 6,  91 => 37,  68 => 25,  43 => 6,  209 => 83,  205 => 82,  196 => 134,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 56,  132 => 49,  127 => 46,  123 => 44,  109 => 43,  93 => 38,  90 => 31,  54 => 14,  133 => 74,  124 => 41,  111 => 37,  107 => 58,  80 => 24,  69 => 20,  63 => 23,  60 => 13,  52 => 15,  97 => 39,  95 => 21,  88 => 29,  78 => 30,  75 => 23,  71 => 14,  25 => 5,  82 => 27,  72 => 16,  64 => 21,  53 => 10,  34 => 5,  92 => 20,  86 => 30,  79 => 40,  46 => 7,  37 => 5,  19 => 2,  44 => 6,  27 => 3,  49 => 11,  42 => 11,  40 => 8,  33 => 8,  29 => 4,  26 => 3,  224 => 232,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 73,  188 => 77,  185 => 76,  179 => 72,  177 => 69,  171 => 67,  162 => 63,  158 => 61,  156 => 63,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 39,  117 => 45,  103 => 36,  99 => 52,  77 => 25,  74 => 24,  57 => 20,  47 => 13,  39 => 11,  32 => 7,  24 => 11,  22 => 6,  30 => 3,  23 => 3,  20 => 1,  17 => 1,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 44,  108 => 40,  104 => 41,  102 => 37,  94 => 32,  89 => 32,  87 => 36,  84 => 47,  81 => 31,  73 => 21,  70 => 31,  67 => 19,  62 => 13,  59 => 23,  55 => 10,  51 => 17,  48 => 9,  41 => 9,  38 => 8,  35 => 7,  31 => 3,  28 => 1,);
    }
}
