<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_a5ec217247afebdb793388b1a39c56be extends Twig_Template
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
        echo "
";
        // line 2
        if (array_key_exists("invalid_username", $context)) {
            // line 3
            echo "    <div class=\"general_info_box error demo\"><a href=\"#\" class=\"close\">Fermer</a>
        <p>";
            // line 4
            if (isset($context["invalid_username"])) { $_invalid_username_ = $context["invalid_username"]; } else { $_invalid_username_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => $_invalid_username_), "FOSUserBundle"), "html", null, true);
            echo "</p>
    </div>
";
        }
        // line 7
        echo "
<div class=\"form\">
    <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email"), "html", null, true);
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">

            <div class=\"one_third\">
                <p class=\"label\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
                <div class=\"field\"><input type=\"text\" id=\"username\" name=\"username\" class=\"req\" /></div>
            </div>

             <div class=\"one_third\">
                <p class=\"label\">&nbsp;</p>
                <div class=\"button\">
                <input type=\"submit\" class=\"general_button\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
            </div>
            </div>

            
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  98 => 39,  349 => 122,  342 => 119,  328 => 113,  310 => 99,  305 => 98,  300 => 97,  294 => 95,  289 => 94,  284 => 93,  278 => 91,  268 => 89,  262 => 87,  257 => 86,  246 => 83,  241 => 82,  236 => 81,  192 => 65,  187 => 64,  171 => 60,  160 => 57,  155 => 56,  131 => 44,  126 => 43,  120 => 41,  110 => 39,  72 => 23,  49 => 20,  41 => 5,  81 => 24,  21 => 2,  469 => 238,  466 => 237,  461 => 230,  458 => 229,  453 => 226,  450 => 225,  444 => 220,  424 => 200,  403 => 182,  399 => 181,  395 => 180,  384 => 172,  380 => 171,  370 => 164,  366 => 163,  361 => 161,  353 => 155,  350 => 154,  343 => 142,  340 => 141,  334 => 115,  322 => 144,  320 => 141,  313 => 137,  309 => 135,  306 => 134,  301 => 71,  296 => 37,  291 => 31,  285 => 28,  281 => 27,  277 => 26,  273 => 90,  269 => 24,  265 => 23,  260 => 21,  256 => 20,  252 => 85,  243 => 5,  233 => 237,  226 => 232,  221 => 228,  205 => 216,  203 => 68,  200 => 153,  198 => 67,  135 => 74,  75 => 23,  53 => 10,  70 => 13,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 59,  158 => 56,  153 => 55,  143 => 49,  134 => 44,  123 => 40,  118 => 39,  90 => 37,  87 => 30,  66 => 17,  60 => 10,  146 => 50,  136 => 45,  122 => 37,  107 => 34,  101 => 52,  95 => 29,  82 => 31,  73 => 20,  67 => 19,  52 => 19,  109 => 58,  104 => 37,  96 => 50,  84 => 14,  80 => 24,  26 => 3,  34 => 5,  112 => 21,  102 => 19,  89 => 32,  63 => 13,  56 => 11,  43 => 6,  92 => 28,  79 => 30,  57 => 10,  46 => 7,  37 => 5,  33 => 5,  29 => 3,  19 => 1,  44 => 11,  27 => 3,  55 => 12,  45 => 7,  36 => 9,  50 => 11,  47 => 10,  30 => 3,  25 => 4,  249 => 17,  239 => 90,  235 => 334,  228 => 84,  224 => 73,  219 => 72,  217 => 79,  214 => 71,  211 => 220,  208 => 69,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 55,  147 => 47,  132 => 39,  127 => 71,  117 => 36,  113 => 34,  86 => 30,  83 => 32,  78 => 25,  68 => 18,  64 => 19,  61 => 13,  48 => 11,  39 => 6,  32 => 7,  24 => 11,  22 => 3,  23 => 3,  20 => 2,  17 => 1,  144 => 46,  138 => 46,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 36,  108 => 31,  99 => 36,  94 => 38,  91 => 49,  88 => 33,  85 => 31,  77 => 25,  74 => 24,  71 => 20,  65 => 20,  62 => 27,  58 => 12,  54 => 13,  51 => 14,  42 => 12,  38 => 4,  35 => 5,  31 => 3,  28 => 1,);
    }
}
