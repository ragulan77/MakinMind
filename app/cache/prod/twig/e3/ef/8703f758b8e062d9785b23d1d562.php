<?php

/* MakinMindProjectBundle:Project:createProject.html.twig */
class __TwigTemplate_e3ef8703f758b8e062d9785b23d1d562 extends Twig_Template
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
            'projects' => array($this, 'block_projects'),
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
        echo " :: Création de projet";
    }

    // line 3
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Créer un projet";
    }

    // line 4
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <span>Créer un projet</span>
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
    public function block_projects($context, array $blocks = array())
    {
        echo " class=\"current_page_item\"";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "\t<form method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "formProject"));
        echo ">
\t\t<div>
\t\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "name"), "Nom du projet");
        echo "
\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "formProject"), "name"));
        echo "
\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formProject"), "name"));
        echo "
\t\t</div>\t
   \t\t<div>
\t\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "shortDescription"), "Résumé du projet :");
        echo "
\t\t\t<p>&nbsp;</p>
\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "formProject"), "shortDescription"));
        echo "
\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formProject"), "shortDescription"));
        echo "
\t\t</div>
\t\t<div>
\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "longDescription"), "Déscription détaillée du projet :");
        echo "
\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "formProject"), "longDescription"));
        echo "
\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formProject"), "longDescription"));
        echo "
\t\t</div>
\t\t<div>
\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "beginDate"), "Date de début :");
        echo "
\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "formProject"), "beginDate"));
        echo "
\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formProject"), "beginDate"));
        echo "
\t\t</div>
\t\t<div>
\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "endingDate"), "Date de fin :");
        echo "
\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "formProject"), "endingDate"));
        echo "
\t\t\t";
        // line 38
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formProject"), "endingDate"));
        echo "
\t\t</div>
\t\t<div>
\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "logo"), "Bannière du projet :");
        echo "
\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "formProject"), "logo"));
        echo "
\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formProject"), "logo"));
        echo "
\t\t</div>
\t\t<div>
\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "domains"), "Domaine(s) :");
        echo "
\t\t\t";
        // line 47
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "formProject"), "domains"));
        echo "
\t\t\t";
        // line 48
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formProject"), "domains"));
        echo "
\t\t</div>
\t\t<div>
\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "pbStudies"), "Niveau d'étude en année :");
        echo "
\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "pbStudies"));
        echo "
\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "pbStudies"));
        echo "
\t\t</div>
\t\t<div>
\t\t\t";
        // line 56
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "firstDiploma"), "Diplôme requis :");
        echo "
\t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "firstDiploma"));
        echo "
\t\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "firstDiploma"));
        echo "
\t\t</div>
\t\t<div>
\t\t\t";
        // line 61
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "secondDiploma"), "Dexième diplôme requis (optionnel) :");
        echo "
\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "secondDiploma"));
        echo "
\t\t\t";
        // line 63
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "secondDiploma"));
        echo "
\t\t</div>
\t\t<div>
\t\t\t";
        // line 66
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "specialization"), "Spécialisation :");
        echo "
\t\t\t";
        // line 67
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "specialization"));
        echo "
\t\t\t";
        // line 68
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "specialization"));
        echo "
\t\t</div>
\t\t<div>
\t\t\t";
        // line 71
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "numberWorkedYears"), "Expérience professionnelle en année :");
        echo "
\t\t\t";
        // line 72
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "numberWorkedYears"));
        echo "
\t\t\t";
        // line 73
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "numberWorkedYears"));
        echo "
\t\t</div>
\t\t<div>
\t\t\t";
        // line 76
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "hoursPerWeek"), "Expérience professionnelle en année :");
        echo "
\t\t\t";
        // line 77
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "hoursPerWeek"));
        echo "
\t\t\t";
        // line 78
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "hoursPerWeek"));
        echo "
\t\t</div>
\t\t<div>
\t\t\t";
        // line 81
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "paralleleContract"), "Contrat parallèle autorisé :");
        echo "
\t\t\t";
        // line 82
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "paralleleContract"));
        echo "
\t\t\t";
        // line 83
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "paralleleContract"));
        echo "
\t\t</div>\t
    \t<input type=\"submit\" class=\"btn btn-primary\" />
  \t</form>
";
    }

    public function getTemplateName()
    {
        return "MakinMindProjectBundle:Project:createProject.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 76,  243 => 73,  239 => 72,  229 => 68,  225 => 67,  221 => 66,  207 => 61,  197 => 57,  187 => 53,  183 => 52,  159 => 43,  155 => 42,  106 => 24,  157 => 68,  128 => 52,  118 => 45,  76 => 30,  85 => 16,  296 => 122,  290 => 119,  278 => 113,  261 => 99,  257 => 78,  253 => 77,  248 => 95,  244 => 94,  240 => 93,  235 => 71,  227 => 89,  218 => 86,  214 => 85,  186 => 72,  182 => 71,  173 => 48,  169 => 47,  164 => 65,  160 => 64,  151 => 41,  147 => 60,  143 => 59,  138 => 57,  130 => 55,  100 => 40,  96 => 39,  83 => 35,  61 => 8,  45 => 4,  66 => 10,  65 => 10,  21 => 2,  467 => 238,  464 => 237,  459 => 230,  456 => 229,  451 => 226,  448 => 225,  442 => 220,  422 => 200,  401 => 182,  397 => 181,  393 => 180,  382 => 172,  378 => 171,  368 => 164,  364 => 163,  359 => 161,  351 => 155,  348 => 154,  341 => 142,  338 => 141,  332 => 137,  320 => 144,  318 => 141,  311 => 137,  307 => 135,  304 => 134,  299 => 71,  294 => 37,  289 => 31,  283 => 115,  279 => 27,  275 => 26,  271 => 83,  267 => 82,  263 => 81,  258 => 21,  254 => 20,  250 => 18,  247 => 17,  241 => 5,  233 => 334,  231 => 90,  222 => 87,  219 => 228,  217 => 225,  203 => 216,  201 => 58,  198 => 153,  125 => 71,  58 => 12,  56 => 7,  36 => 5,  91 => 37,  68 => 18,  43 => 6,  209 => 83,  205 => 82,  196 => 134,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 46,  161 => 61,  152 => 58,  148 => 57,  145 => 38,  141 => 37,  134 => 56,  132 => 53,  127 => 32,  123 => 31,  109 => 26,  93 => 18,  90 => 31,  54 => 10,  133 => 74,  124 => 41,  111 => 37,  107 => 58,  80 => 15,  69 => 11,  63 => 16,  60 => 8,  52 => 11,  97 => 39,  95 => 31,  88 => 17,  78 => 30,  75 => 23,  71 => 12,  25 => 4,  82 => 28,  72 => 16,  64 => 14,  53 => 10,  34 => 5,  92 => 20,  86 => 30,  79 => 24,  46 => 4,  37 => 5,  19 => 2,  44 => 6,  27 => 3,  49 => 5,  42 => 6,  40 => 8,  33 => 8,  29 => 4,  26 => 5,  224 => 232,  215 => 63,  211 => 62,  204 => 84,  200 => 83,  195 => 80,  193 => 56,  190 => 73,  188 => 77,  185 => 76,  179 => 51,  177 => 69,  171 => 67,  162 => 63,  158 => 61,  156 => 63,  153 => 67,  146 => 55,  142 => 60,  137 => 36,  131 => 33,  126 => 46,  120 => 39,  117 => 28,  103 => 23,  99 => 22,  77 => 14,  74 => 13,  57 => 20,  47 => 7,  39 => 3,  32 => 2,  24 => 11,  22 => 3,  30 => 3,  23 => 3,  20 => 2,  17 => 1,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 27,  108 => 40,  104 => 41,  102 => 37,  94 => 20,  89 => 17,  87 => 36,  84 => 16,  81 => 15,  73 => 13,  70 => 31,  67 => 15,  62 => 13,  59 => 11,  55 => 7,  51 => 19,  48 => 5,  41 => 12,  38 => 3,  35 => 9,  31 => 2,  28 => 1,);
    }
}
