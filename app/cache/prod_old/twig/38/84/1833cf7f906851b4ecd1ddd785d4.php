<?php

/* MakinMindProjectBundle:Project:sidebar_owner_project.html.twig */
class __TwigTemplate_38841833cf7f906851b4ecd1ddd785d4 extends Twig_Template
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
        echo "<div class=\"block_categories\">
\t<h6>Catégories</h6>
\t<ul class=\"list_5\">
\t\t<li><a href=\"";
        // line 4
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_contract", array("id" => $this->getAttribute($_project_, "id"), "url" => $this->getAttribute($_project_, "url"))), "html", null, true);
        echo "\">Contrat</a></li>
\t\t<li><a href=\"";
        // line 5
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_list_developpers", array("id" => $this->getAttribute($_project_, "id"), "url" => $this->getAttribute($_project_, "url"))), "html", null, true);
        echo "\">Développeurs</a></li>
\t</ul>

\t<p>&nbsp;</p>

\t<h6>Modifier</h6>
\t<ul class=\"list_5\">
\t\t<li><a href=\"";
        // line 12
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_candidates", array("id" => $this->getAttribute($_project_, "id"), "url" => $this->getAttribute($_project_, "url"))), "html", null, true);
        echo "\">Candidats</a></li>
\t\t<li><a href=\"";
        // line 13
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_retained_candidates", array("id" => $this->getAttribute($_project_, "id"), "url" => $this->getAttribute($_project_, "url"))), "html", null, true);
        echo "\">Candidats choisis</a></li>
\t</ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "MakinMindProjectBundle:Project:sidebar_owner_project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  769 => 348,  766 => 347,  762 => 345,  759 => 344,  662 => 248,  642 => 246,  624 => 245,  615 => 243,  607 => 242,  592 => 231,  584 => 230,  569 => 227,  559 => 219,  539 => 217,  521 => 216,  512 => 214,  501 => 205,  494 => 200,  491 => 199,  485 => 195,  476 => 191,  473 => 190,  468 => 189,  456 => 181,  452 => 180,  438 => 174,  429 => 169,  420 => 164,  411 => 159,  406 => 156,  396 => 153,  388 => 149,  379 => 144,  359 => 128,  348 => 125,  336 => 121,  331 => 120,  326 => 119,  319 => 116,  314 => 115,  302 => 111,  297 => 110,  292 => 109,  280 => 105,  275 => 104,  263 => 100,  258 => 99,  253 => 97,  248 => 96,  230 => 84,  225 => 81,  215 => 78,  207 => 74,  169 => 56,  105 => 21,  190 => 48,  183 => 45,  168 => 42,  163 => 39,  103 => 20,  100 => 19,  196 => 60,  181 => 60,  128 => 31,  174 => 36,  93 => 19,  142 => 39,  139 => 38,  114 => 25,  162 => 39,  159 => 54,  148 => 49,  125 => 39,  97 => 26,  164 => 55,  151 => 46,  145 => 44,  137 => 38,  308 => 82,  303 => 81,  286 => 76,  279 => 73,  274 => 72,  245 => 63,  240 => 62,  223 => 57,  218 => 56,  189 => 57,  184 => 45,  177 => 43,  167 => 42,  133 => 31,  59 => 8,  157 => 67,  149 => 51,  116 => 28,  106 => 21,  76 => 16,  69 => 13,  98 => 20,  349 => 122,  342 => 119,  328 => 113,  310 => 99,  305 => 98,  300 => 97,  294 => 95,  289 => 94,  284 => 93,  278 => 91,  268 => 101,  262 => 68,  257 => 67,  246 => 83,  241 => 82,  236 => 81,  192 => 63,  187 => 46,  171 => 60,  160 => 38,  155 => 37,  131 => 28,  126 => 27,  120 => 41,  110 => 33,  72 => 10,  49 => 20,  41 => 3,  81 => 14,  21 => 3,  469 => 238,  466 => 237,  461 => 184,  458 => 229,  453 => 226,  450 => 225,  444 => 220,  424 => 200,  403 => 182,  399 => 154,  395 => 180,  384 => 172,  380 => 171,  370 => 164,  366 => 163,  361 => 161,  353 => 126,  350 => 154,  343 => 124,  340 => 141,  334 => 115,  322 => 144,  320 => 141,  313 => 83,  309 => 114,  306 => 134,  301 => 71,  296 => 78,  291 => 77,  285 => 106,  281 => 27,  277 => 26,  273 => 90,  269 => 71,  265 => 23,  260 => 21,  256 => 20,  252 => 66,  243 => 95,  233 => 237,  226 => 232,  221 => 80,  205 => 48,  203 => 68,  200 => 153,  198 => 45,  135 => 36,  75 => 23,  53 => 6,  70 => 11,  209 => 78,  206 => 52,  201 => 46,  194 => 49,  191 => 48,  186 => 61,  180 => 63,  176 => 59,  166 => 45,  158 => 44,  153 => 55,  143 => 32,  134 => 33,  123 => 40,  118 => 28,  90 => 26,  87 => 15,  66 => 12,  60 => 8,  146 => 60,  136 => 29,  122 => 25,  107 => 34,  101 => 28,  95 => 17,  82 => 14,  73 => 11,  67 => 9,  52 => 6,  109 => 24,  104 => 29,  96 => 17,  84 => 20,  80 => 18,  26 => 3,  34 => 5,  112 => 24,  102 => 19,  89 => 17,  63 => 7,  56 => 7,  43 => 13,  92 => 15,  79 => 13,  57 => 7,  46 => 7,  37 => 5,  33 => 5,  29 => 4,  19 => 1,  44 => 4,  27 => 5,  55 => 7,  45 => 5,  36 => 5,  50 => 5,  47 => 5,  30 => 343,  25 => 4,  249 => 17,  239 => 90,  235 => 61,  228 => 58,  224 => 73,  219 => 72,  217 => 79,  214 => 71,  211 => 53,  208 => 49,  202 => 72,  199 => 71,  193 => 49,  182 => 37,  178 => 61,  175 => 60,  172 => 42,  165 => 55,  161 => 68,  156 => 51,  154 => 52,  150 => 43,  147 => 47,  132 => 35,  127 => 71,  117 => 36,  113 => 29,  86 => 17,  83 => 16,  78 => 13,  68 => 10,  64 => 11,  61 => 13,  48 => 5,  39 => 3,  32 => 2,  24 => 11,  22 => 4,  23 => 3,  20 => 2,  17 => 1,  144 => 50,  138 => 32,  130 => 35,  124 => 24,  121 => 29,  115 => 36,  111 => 36,  108 => 22,  99 => 18,  94 => 25,  91 => 16,  88 => 14,  85 => 31,  77 => 13,  74 => 11,  71 => 10,  65 => 10,  62 => 8,  58 => 12,  54 => 7,  51 => 5,  42 => 12,  38 => 12,  35 => 5,  31 => 2,  28 => 1,);
    }
}
