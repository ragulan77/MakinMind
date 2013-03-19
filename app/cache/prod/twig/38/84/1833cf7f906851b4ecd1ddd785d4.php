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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_contract", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
        echo "\">Contrat</a></li>
\t\t<li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_list_developpers", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
        echo "\">Développeurs</a></li>
\t</ul>

\t<p>&nbsp;</p>

\t<h6>Modifier</h6>
\t<ul class=\"list_5\">
\t\t<li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_candidates", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
        echo "\">Candidats</a></li>
\t\t<li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_retained_candidates", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
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
        return array (  698 => 348,  696 => 347,  692 => 345,  689 => 344,  592 => 248,  574 => 246,  557 => 245,  550 => 243,  544 => 242,  530 => 231,  524 => 230,  512 => 227,  502 => 219,  484 => 217,  460 => 214,  449 => 205,  439 => 199,  433 => 195,  425 => 191,  423 => 190,  419 => 189,  412 => 184,  407 => 181,  405 => 180,  392 => 174,  384 => 169,  376 => 164,  363 => 156,  357 => 154,  355 => 153,  340 => 144,  321 => 128,  316 => 126,  312 => 125,  308 => 124,  302 => 121,  298 => 120,  288 => 116,  284 => 115,  280 => 114,  274 => 111,  270 => 110,  266 => 109,  260 => 106,  256 => 105,  252 => 104,  246 => 101,  242 => 100,  238 => 99,  212 => 84,  170 => 60,  166 => 59,  139 => 50,  50 => 6,  180 => 49,  174 => 61,  149 => 38,  98 => 19,  181 => 49,  175 => 46,  172 => 45,  112 => 28,  191 => 49,  167 => 53,  121 => 27,  115 => 34,  101 => 21,  150 => 39,  140 => 49,  136 => 32,  119 => 39,  114 => 29,  249 => 76,  243 => 73,  239 => 72,  229 => 96,  225 => 95,  221 => 66,  207 => 81,  197 => 57,  187 => 53,  183 => 52,  159 => 43,  155 => 42,  106 => 24,  157 => 68,  128 => 52,  118 => 45,  76 => 13,  85 => 16,  296 => 122,  290 => 119,  278 => 113,  261 => 99,  257 => 78,  253 => 77,  248 => 95,  244 => 94,  240 => 93,  235 => 71,  227 => 89,  218 => 86,  214 => 85,  186 => 72,  182 => 45,  173 => 48,  169 => 47,  164 => 65,  160 => 56,  151 => 39,  147 => 52,  143 => 51,  138 => 44,  130 => 38,  100 => 22,  96 => 25,  83 => 15,  61 => 8,  45 => 4,  66 => 12,  65 => 8,  21 => 2,  467 => 216,  464 => 237,  459 => 230,  456 => 229,  451 => 226,  448 => 225,  442 => 200,  422 => 200,  401 => 182,  397 => 181,  393 => 180,  382 => 172,  378 => 171,  368 => 159,  364 => 163,  359 => 161,  351 => 155,  348 => 149,  341 => 142,  338 => 141,  332 => 137,  320 => 144,  318 => 141,  311 => 137,  307 => 135,  304 => 134,  299 => 71,  294 => 119,  289 => 31,  283 => 115,  279 => 27,  275 => 26,  271 => 83,  267 => 82,  263 => 81,  258 => 21,  254 => 20,  250 => 18,  247 => 17,  241 => 5,  233 => 97,  231 => 90,  222 => 87,  219 => 228,  217 => 225,  203 => 216,  201 => 58,  198 => 153,  125 => 28,  58 => 12,  56 => 7,  36 => 12,  91 => 17,  68 => 18,  43 => 5,  209 => 83,  205 => 80,  196 => 134,  192 => 78,  189 => 48,  178 => 48,  176 => 70,  165 => 46,  161 => 36,  152 => 54,  148 => 38,  145 => 38,  141 => 43,  134 => 56,  132 => 53,  127 => 36,  123 => 31,  109 => 26,  93 => 18,  90 => 15,  54 => 7,  133 => 39,  124 => 35,  111 => 23,  107 => 29,  80 => 16,  69 => 11,  63 => 16,  60 => 8,  52 => 6,  97 => 39,  95 => 18,  88 => 19,  78 => 14,  75 => 13,  71 => 11,  25 => 4,  82 => 16,  72 => 16,  64 => 10,  53 => 7,  34 => 5,  92 => 25,  86 => 17,  79 => 18,  46 => 4,  37 => 5,  19 => 2,  44 => 4,  27 => 3,  49 => 5,  42 => 6,  40 => 13,  33 => 8,  29 => 4,  26 => 5,  224 => 232,  215 => 63,  211 => 62,  204 => 84,  200 => 78,  195 => 80,  193 => 74,  190 => 73,  188 => 77,  185 => 46,  179 => 63,  177 => 69,  171 => 45,  162 => 63,  158 => 53,  156 => 55,  153 => 45,  146 => 55,  142 => 60,  137 => 36,  131 => 38,  126 => 33,  120 => 31,  117 => 25,  103 => 21,  99 => 28,  77 => 14,  74 => 12,  57 => 7,  47 => 5,  39 => 3,  32 => 2,  24 => 11,  22 => 4,  30 => 343,  23 => 3,  20 => 2,  17 => 1,  135 => 32,  129 => 29,  122 => 46,  116 => 34,  113 => 37,  108 => 29,  104 => 22,  102 => 27,  94 => 17,  89 => 17,  87 => 16,  84 => 16,  81 => 24,  73 => 15,  70 => 10,  67 => 12,  62 => 13,  59 => 8,  55 => 7,  51 => 19,  48 => 5,  41 => 12,  38 => 3,  35 => 9,  31 => 2,  28 => 1,);
    }
}
