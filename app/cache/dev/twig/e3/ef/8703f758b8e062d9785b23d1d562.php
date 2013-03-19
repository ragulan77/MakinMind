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
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "shortDescription"), "Résumé du projet");
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
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "longDescription"), "Déscription détaillée du projet");
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
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "beginDate"), "Date de début");
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
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "endingDate"), "Date de fin");
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
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "logo"), "Bannière du projet");
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
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "domains"), "Domaine(s)");
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
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "pbStudies"), "Niveau d'étude en année");
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
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "firstDiploma"), "Diplôme requis");
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
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "secondDiploma"), "Dexième diplôme requis (optionnel)");
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
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "specialization"), "Spécialisation");
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
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "numberWorkedYears"), "Expérience professionnelle en année");
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
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "hoursPerWeek"), "Expérience professionnelle en année");
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
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "formProject"), "applyTerms"), "paralleleContract"), "Contrat parallèle autorisé");
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
        return array (  271 => 83,  267 => 82,  263 => 81,  257 => 78,  253 => 77,  249 => 76,  243 => 73,  239 => 72,  235 => 71,  229 => 68,  225 => 67,  221 => 66,  215 => 63,  211 => 62,  207 => 61,  201 => 58,  197 => 57,  193 => 56,  187 => 53,  183 => 52,  179 => 51,  173 => 48,  169 => 47,  165 => 46,  159 => 43,  155 => 42,  151 => 41,  145 => 38,  141 => 37,  137 => 36,  131 => 33,  127 => 32,  123 => 31,  117 => 28,  113 => 27,  109 => 26,  103 => 23,  99 => 22,  94 => 20,  88 => 17,  84 => 16,  80 => 15,  74 => 13,  71 => 12,  65 => 10,  60 => 8,  55 => 7,  48 => 5,  45 => 4,  39 => 3,  32 => 2,);
    }
}
