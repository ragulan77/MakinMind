<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_47e6cb3910761a3fdc7b1db07e0dcdd3 extends Twig_Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " method=\"POST\" class=\"fos_user_resetting_reset\">
    ";
        // line 3
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 30,  85 => 31,  296 => 122,  290 => 119,  278 => 113,  261 => 99,  257 => 98,  253 => 97,  248 => 95,  244 => 94,  240 => 93,  235 => 91,  227 => 89,  218 => 86,  214 => 85,  186 => 72,  182 => 71,  173 => 68,  169 => 67,  164 => 65,  160 => 64,  151 => 61,  147 => 60,  143 => 59,  138 => 57,  130 => 55,  100 => 40,  96 => 39,  83 => 35,  61 => 13,  45 => 7,  66 => 17,  65 => 18,  21 => 3,  467 => 238,  464 => 237,  459 => 230,  456 => 229,  451 => 226,  448 => 225,  442 => 220,  422 => 200,  401 => 182,  397 => 181,  393 => 180,  382 => 172,  378 => 171,  368 => 164,  364 => 163,  359 => 161,  351 => 155,  348 => 154,  341 => 142,  338 => 141,  332 => 137,  320 => 144,  318 => 141,  311 => 137,  307 => 135,  304 => 134,  299 => 71,  294 => 37,  289 => 31,  283 => 115,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  263 => 23,  258 => 21,  254 => 20,  250 => 18,  247 => 17,  241 => 5,  233 => 334,  231 => 90,  222 => 87,  219 => 228,  217 => 225,  203 => 216,  201 => 81,  198 => 153,  125 => 71,  58 => 12,  56 => 11,  36 => 5,  91 => 37,  68 => 25,  43 => 6,  209 => 83,  205 => 82,  196 => 134,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 56,  132 => 49,  127 => 46,  123 => 44,  109 => 43,  93 => 38,  90 => 31,  54 => 14,  133 => 74,  124 => 41,  111 => 37,  107 => 58,  80 => 24,  69 => 19,  63 => 23,  60 => 13,  52 => 11,  97 => 39,  95 => 21,  88 => 29,  78 => 30,  75 => 23,  71 => 20,  25 => 4,  82 => 27,  72 => 16,  64 => 19,  53 => 10,  34 => 5,  92 => 20,  86 => 30,  79 => 40,  46 => 7,  37 => 5,  19 => 2,  44 => 6,  27 => 3,  49 => 11,  42 => 6,  40 => 8,  33 => 8,  29 => 4,  26 => 3,  224 => 232,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 73,  188 => 77,  185 => 76,  179 => 72,  177 => 69,  171 => 67,  162 => 63,  158 => 61,  156 => 63,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 39,  117 => 45,  103 => 36,  99 => 52,  77 => 25,  74 => 24,  57 => 20,  47 => 13,  39 => 11,  32 => 5,  24 => 11,  22 => 3,  30 => 3,  23 => 3,  20 => 2,  17 => 1,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 44,  108 => 40,  104 => 41,  102 => 37,  94 => 32,  89 => 32,  87 => 36,  84 => 47,  81 => 31,  73 => 21,  70 => 31,  67 => 19,  62 => 13,  59 => 23,  55 => 12,  51 => 19,  48 => 9,  41 => 12,  38 => 8,  35 => 9,  31 => 5,  28 => 1,);
    }
}
