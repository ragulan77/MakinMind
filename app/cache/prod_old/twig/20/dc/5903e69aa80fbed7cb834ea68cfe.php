<?php

/* MakinMindProjectBundle:Project:contract.html.twig */
class __TwigTemplate_20dc5903e69aa80fbed7cb834ea68cfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titlebar_title' => array($this, 'block_titlebar_title'),
            'titlebar_ariane' => array($this, 'block_titlebar_ariane'),
            'slider' => array($this, 'block_slider'),
            'content_type' => array($this, 'block_content_type'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " :: Conditions du projet";
    }

    // line 3
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Conditions du projet ";
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($_project_, "name")), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <span>Conditions du projet</span>
";
    }

    // line 7
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 8
    public function block_content_type($context, array $blocks = array())
    {
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"main_content\">
\t<h1>Conditions pour postuler</h1>
\t<p><strong>années d'étude requises : </strong>bac+";
        // line 13
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_project_, "applyTerms"), "pbStudies"), "html", null, true);
        echo "</p>
\t<p><strong>diplome requis : </strong>";
        // line 14
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_project_, "applyTerms"), "firstDiploma"), "html", null, true);
        echo "</p>
\t<p><strong>spécialité : </strong> ";
        // line 15
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_project_, "applyTerms"), "specialization"), "html", null, true);
        echo "</p>
\t<p><strong>expérience proféssionnel : </strong>";
        // line 16
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_project_, "applyTerms"), "numberWorkedYears"), "html", null, true);
        echo " année(s)</p>
\t<p><strong>heure de travail par semaine pour le projet : </strong>";
        // line 17
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_project_, "applyTerms"), "hoursPerWeek"), "html", null, true);
        echo " heure(s)</p>
\t<p><strong>contrat parallèle autorisé : </strong>";
        // line 18
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        if (($this->getAttribute($this->getAttribute($_project_, "applyTerms"), "paralleleContract") == 1)) {
            echo "oui ";
        } else {
            echo " non ";
        }
        echo "</p>
\t<div class=\"line_2\" style=\"margin:12px 0px 33px;\"></div>
\t<h1>Le contrat</h1>
\t<object width=\"400\" height=\"400\" data=\"helloworld.swf\"></object>
\t<div class=\"line_2\" style=\"margin:12px 0px 33px;\"></div>
\t<p>Lettre de motivation</p>
\t<form method=\"post\" action=\"";
        // line 24
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MakinMindProjectBundle_contract", array("id" => $this->getAttribute($_project_, "id"))), "html", null, true);
        echo "\">
\t\t<textarea cols=\"50\" rows=\"20\" name=\"motivations\"/></textarea><br/>
\t\t<input type=\"checkbox\" name=\"contract_accpt\" id=\"contract_accpt\" required=\"required\"/> <label for=\"contract_accpt\">J'accepte les conditions et le contrat pour postuler</label><br /><br/>
\t\t<input type=\"submit\" value=\"postuler\"/>
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "MakinMindProjectBundle:Project:contract.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  157 => 67,  149 => 61,  116 => 43,  106 => 36,  76 => 21,  69 => 18,  98 => 31,  349 => 122,  342 => 119,  328 => 113,  310 => 99,  305 => 98,  300 => 97,  294 => 95,  289 => 94,  284 => 93,  278 => 91,  268 => 89,  262 => 87,  257 => 86,  246 => 83,  241 => 82,  236 => 81,  192 => 65,  187 => 64,  171 => 60,  160 => 57,  155 => 56,  131 => 44,  126 => 43,  120 => 41,  110 => 39,  72 => 23,  49 => 20,  41 => 5,  81 => 24,  21 => 3,  469 => 238,  466 => 237,  461 => 230,  458 => 229,  453 => 226,  450 => 225,  444 => 220,  424 => 200,  403 => 182,  399 => 181,  395 => 180,  384 => 172,  380 => 171,  370 => 164,  366 => 163,  361 => 161,  353 => 155,  350 => 154,  343 => 142,  340 => 141,  334 => 115,  322 => 144,  320 => 141,  313 => 137,  309 => 135,  306 => 134,  301 => 71,  296 => 37,  291 => 31,  285 => 28,  281 => 27,  277 => 26,  273 => 90,  269 => 24,  265 => 23,  260 => 21,  256 => 20,  252 => 85,  243 => 5,  233 => 237,  226 => 232,  221 => 228,  205 => 216,  203 => 68,  200 => 153,  198 => 67,  135 => 74,  75 => 23,  53 => 10,  70 => 11,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 59,  158 => 56,  153 => 55,  143 => 49,  134 => 44,  123 => 40,  118 => 39,  90 => 27,  87 => 30,  66 => 17,  60 => 10,  146 => 60,  136 => 53,  122 => 37,  107 => 34,  101 => 52,  95 => 29,  82 => 28,  73 => 20,  67 => 10,  52 => 19,  109 => 58,  104 => 37,  96 => 50,  84 => 15,  80 => 24,  26 => 3,  34 => 5,  112 => 21,  102 => 19,  89 => 16,  63 => 16,  56 => 11,  43 => 6,  92 => 28,  79 => 14,  57 => 7,  46 => 7,  37 => 5,  33 => 5,  29 => 4,  19 => 1,  44 => 6,  27 => 5,  55 => 12,  45 => 7,  36 => 5,  50 => 5,  47 => 4,  30 => 3,  25 => 4,  249 => 17,  239 => 90,  235 => 334,  228 => 84,  224 => 73,  219 => 72,  217 => 79,  214 => 71,  211 => 220,  208 => 69,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 68,  156 => 51,  154 => 50,  150 => 55,  147 => 47,  132 => 52,  127 => 71,  117 => 36,  113 => 24,  86 => 26,  83 => 32,  78 => 25,  68 => 18,  64 => 14,  61 => 13,  48 => 11,  39 => 6,  32 => 7,  24 => 11,  22 => 2,  23 => 3,  20 => 2,  17 => 1,  144 => 46,  138 => 46,  130 => 46,  124 => 24,  121 => 45,  115 => 40,  111 => 36,  108 => 31,  99 => 18,  94 => 17,  91 => 49,  88 => 33,  85 => 31,  77 => 25,  74 => 13,  71 => 20,  65 => 20,  62 => 8,  58 => 12,  54 => 10,  51 => 14,  42 => 12,  38 => 3,  35 => 5,  31 => 2,  28 => 1,);
    }
}
