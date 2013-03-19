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
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "name")), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "pbStudies"), "html", null, true);
        echo "</p>
\t<p><strong>diplome requis : </strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "firstDiploma"), "html", null, true);
        echo "</p>
\t<p><strong>spécialité : </strong> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "specialization"), "html", null, true);
        echo "</p>
\t<p><strong>expérience proféssionnel : </strong>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "numberWorkedYears"), "html", null, true);
        echo " année(s)</p>
\t<p><strong>heure de travail par semaine pour le projet : </strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "hoursPerWeek"), "html", null, true);
        echo " heure(s)</p>
\t<p><strong>contrat parallèle autorisé : </strong>";
        // line 18
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "paralleleContract") == 1)) {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MakinMindProjectBundle_contract", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"))), "html", null, true);
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
        return array (  106 => 24,  157 => 68,  128 => 52,  118 => 45,  76 => 30,  85 => 16,  296 => 122,  290 => 119,  278 => 113,  261 => 99,  257 => 98,  253 => 97,  248 => 95,  244 => 94,  240 => 93,  235 => 91,  227 => 89,  218 => 86,  214 => 85,  186 => 72,  182 => 71,  173 => 68,  169 => 67,  164 => 65,  160 => 64,  151 => 61,  147 => 60,  143 => 59,  138 => 57,  130 => 55,  100 => 40,  96 => 39,  83 => 35,  61 => 8,  45 => 7,  66 => 10,  65 => 17,  21 => 2,  467 => 238,  464 => 237,  459 => 230,  456 => 229,  451 => 226,  448 => 225,  442 => 220,  422 => 200,  401 => 182,  397 => 181,  393 => 180,  382 => 172,  378 => 171,  368 => 164,  364 => 163,  359 => 161,  351 => 155,  348 => 154,  341 => 142,  338 => 141,  332 => 137,  320 => 144,  318 => 141,  311 => 137,  307 => 135,  304 => 134,  299 => 71,  294 => 37,  289 => 31,  283 => 115,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  263 => 23,  258 => 21,  254 => 20,  250 => 18,  247 => 17,  241 => 5,  233 => 334,  231 => 90,  222 => 87,  219 => 228,  217 => 225,  203 => 216,  201 => 81,  198 => 153,  125 => 71,  58 => 12,  56 => 7,  36 => 5,  91 => 37,  68 => 18,  43 => 6,  209 => 83,  205 => 82,  196 => 134,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 61,  141 => 55,  134 => 56,  132 => 53,  127 => 46,  123 => 44,  109 => 43,  93 => 18,  90 => 31,  54 => 10,  133 => 74,  124 => 41,  111 => 37,  107 => 58,  80 => 24,  69 => 11,  63 => 16,  60 => 13,  52 => 11,  97 => 39,  95 => 31,  88 => 27,  78 => 30,  75 => 23,  71 => 20,  25 => 4,  82 => 28,  72 => 16,  64 => 14,  53 => 10,  34 => 5,  92 => 20,  86 => 30,  79 => 24,  46 => 4,  37 => 5,  19 => 2,  44 => 6,  27 => 3,  49 => 5,  42 => 6,  40 => 8,  33 => 8,  29 => 4,  26 => 5,  224 => 232,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 73,  188 => 77,  185 => 76,  179 => 72,  177 => 69,  171 => 67,  162 => 63,  158 => 61,  156 => 63,  153 => 67,  146 => 55,  142 => 60,  137 => 51,  131 => 48,  126 => 46,  120 => 39,  117 => 45,  103 => 36,  99 => 52,  77 => 14,  74 => 21,  57 => 20,  47 => 7,  39 => 11,  32 => 5,  24 => 11,  22 => 3,  30 => 3,  23 => 3,  20 => 2,  17 => 1,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 43,  108 => 40,  104 => 41,  102 => 37,  94 => 32,  89 => 17,  87 => 36,  84 => 26,  81 => 15,  73 => 13,  70 => 31,  67 => 15,  62 => 13,  59 => 11,  55 => 12,  51 => 19,  48 => 9,  41 => 12,  38 => 3,  35 => 9,  31 => 2,  28 => 1,);
    }
}
