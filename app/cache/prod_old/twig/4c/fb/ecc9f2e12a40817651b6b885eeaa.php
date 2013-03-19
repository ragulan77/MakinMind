<?php

/* MakinMindProjectBundle:Project:show_project.html.twig */
class __TwigTemplate_4cfbecc9f2e12a40817651b6b885eeaa extends Twig_Template
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
            'resources' => array($this, 'block_resources'),
            'content' => array($this, 'block_content'),
            'right' => array($this, 'block_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 343
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($_project_, "owner") == $this->getAttribute($_app_, "user"))) {
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " :: Affichage du projet ";
    }

    // line 5
    public function block_titlebar_title($context, array $blocks = array())
    {
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($_project_, "name")), "html", null, true);
        echo " ";
    }

    // line 6
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projects"), "html", null, true);
        echo "\">Projets</a> / <span>";
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($_project_, "name")), "html", null, true);
        echo "</span>
";
    }

    // line 10
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 11
    public function block_content_type($context, array $blocks = array())
    {
        $this->displayParentBlock("content_type", $context, $blocks);
    }

    // line 13
    public function block_resources($context, array $blocks = array())
    {
        // line 14
        echo "\t";
        $this->displayParentBlock("resources", $context, $blocks);
        echo " 
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fos_js_routes.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/fos_js_routes.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "
\t<div class=\"block_blog_post_type_2\">
\t\t<article>
\t\t\t<div class=\"content\">

\t\t\t\t<div class=\"f_pic\">
\t\t\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown_project.jpg"), "html", null, true);
        echo "\" alt=\"";
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($_project_, "name")), "html", null, true);
        echo "\">
\t\t\t\t</div>

\t\t\t\t<div class=\"separator\" style=\"height:20px;\"></div>

\t\t\t\t<div class=\"block_tabs_type_3\">
\t\t\t\t\t<div class=\"tabs\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#1\" class=\"current\">Informations générales</a></li>
\t\t\t\t\t\t\t<li><a href=\"#2\">Candidater au projet</a></li>
\t\t\t\t\t\t\t<li><a href=\"#3\">A propos...</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"tab_content\">
\t\t\t\t\t\t<!-- bootstrap Modal -->
\t\t\t\t\t\t<div id=\"modalChangeProject\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t  <div class=\"modal-header\">
\t\t\t\t\t\t    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t    <h3 id=\"myModalLabel\">Modifier les déscriptions</h3>
\t\t\t\t\t\t  </div>
\t\t\t\t\t\t \t <div class=\"modal-body\">
\t\t\t\t\t\t\t    <form method=\"post\" ";
        // line 50
        if (isset($context["formProject"])) { $_formProject_ = $context["formProject"]; } else { $_formProject_ = null; }
        echo $this->env->getExtension('form')->renderEnctype($_formProject_);
        echo " id=\"projectForm\">
\t\t\t\t\t\t   \t\t\t ";
        // line 51
        if (isset($context["formProject"])) { $_formProject_ = $context["formProject"]; } else { $_formProject_ = null; }
        echo $this->env->getExtension('form')->renderErrors($_formProject_);
        echo "
\t\t\t\t\t\t   \t\t\t <p align=\"center\" hidden=\"true\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/images/ajax-loader.gif"), "html", null, true);
        echo "\" alt=\"loading\"/></p>
\t\t\t\t\t\t   \t\t\t <div>
\t\t\t\t\t\t   \t\t\t \t";
        // line 54
        if (isset($context["formProject"])) { $_formProject_ = $context["formProject"]; } else { $_formProject_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_formProject_, "shortDescription"), "Résumé");
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 55
        if (isset($context["formProject"])) { $_formProject_ = $context["formProject"]; } else { $_formProject_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_formProject_, "shortDescription"));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 56
        if (isset($context["formProject"])) { $_formProject_ = $context["formProject"]; } else { $_formProject_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_formProject_, "shortDescription"));
        echo "
\t\t\t\t\t\t   \t\t\t </div>
\t\t\t\t\t\t   \t\t\t <div>
\t\t\t\t\t\t   \t\t\t \t";
        // line 59
        if (isset($context["formProject"])) { $_formProject_ = $context["formProject"]; } else { $_formProject_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_formProject_, "longDescription"), "Déscription");
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 60
        if (isset($context["formProject"])) { $_formProject_ = $context["formProject"]; } else { $_formProject_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_formProject_, "longDescription"));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 61
        if (isset($context["formProject"])) { $_formProject_ = $context["formProject"]; } else { $_formProject_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_formProject_, "longDescription"));
        echo "
\t\t\t\t\t\t   \t\t\t </div>
\t\t\t\t\t\t   \t\t\t ";
        // line 63
        if (isset($context["formProject"])) { $_formProject_ = $context["formProject"]; } else { $_formProject_ = null; }
        echo $this->env->getExtension('form')->renderRest($_formProject_);
        echo "
\t\t\t\t\t\t   \t\t\t <div class=\"modal-footer\">
\t\t\t\t\t\t   \t\t\t \t<button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
\t\t\t\t\t\t   \t\t\t \t<input type=\"submit\" class=\"btn btn-primary\" />
\t\t\t\t\t\t   \t\t\t </div>
\t\t\t\t\t\t \t\t</form>
\t\t\t\t\t\t   \t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t <!-- fin Modal-->
\t\t\t\t\t\t<div class=\"oh\" style=\"padding-top:1px;\">
\t\t\t\t\t\t\t<h3 class=\"heading_w_icon\">Résumé</h3>
\t\t\t\t\t\t\t<blockquote id=\"twigShortDescription\" class=\"full\" style=\"text-align: justify;\">";
        // line 74
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($_project_, "shortDescription")), "html", null, true);
        echo "</blockquote>

\t\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t\t<h3 class=\"heading_w_icon\">Description</h3>
\t\t\t\t\t\t\t<blockquote id=\"twigLongDescription\" class=\"full\" style=\"text-align: justify;\">";
        // line 78
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($_project_, "longDescription")), "html", null, true);
        echo "</blockquote>

\t\t\t\t\t\t\t";
        // line 80
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        if (($this->getAttribute($_app_, "user") == $this->getAttribute($_project_, "owner"))) {
            // line 81
            echo "\t\t\t\t\t\t\t<!-- bootstrap bouton -->
\t\t\t\t\t\t\t<a href=\"#modalChangeProject\" role=\"button\" class=\"btn\" data-toggle=\"modal\">modifier</a>
\t\t\t\t\t\t\t";
        }
        // line 84
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab_content\">
\t\t\t\t\t\t<!-- bootstrap Modal -->
\t\t\t\t\t\t<div id=\"modalChangeApplyTerms\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalChangeApplyTermsLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t  \t<div class=\"modal-header\">
\t\t\t\t\t\t    \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
\t\t\t\t\t\t   \t\t<h3 id=\"modalChangeApplyTermsLabel\">Modifier les déscriptions</h3>
\t\t\t\t\t\t \t</div>
\t\t\t\t\t \t \t<div class=\"modal-body\">
\t\t\t\t\t\t\t    <form method=\"post\" ";
        // line 95
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderEnctype($_formApplyTerms_);
        echo " id=\"ApplyTermsForm\">
\t\t\t\t\t\t   \t\t\t ";
        // line 96
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderErrors($_formApplyTerms_);
        echo "
\t\t\t\t\t\t   \t\t\t <p align=\"center\" hidden=\"true\"><img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/images/ajax-loader.gif"), "html", null, true);
        echo "\" alt=\"loading\"/></p>
\t\t\t\t\t\t   \t\t\t<div>
\t\t\t\t\t\t   \t\t\t \t";
        // line 99
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_formApplyTerms_, "pbStudies"), "Niveau d'étude minimum");
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 100
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_formApplyTerms_, "pbStudies"));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 101
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_formApplyTerms_, "pbStudies"));
        echo "
\t\t\t\t\t\t   \t\t\t</div>
\t\t\t\t\t\t   \t\t\t<div>
\t\t\t\t\t\t   \t\t\t \t";
        // line 104
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_formApplyTerms_, "firstDiploma"), "Dîplome requis");
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 105
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_formApplyTerms_, "firstDiploma"));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 106
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_formApplyTerms_, "firstDiploma"));
        echo "
\t\t\t\t\t\t   \t\t\t</div>
\t\t\t\t\t\t   \t\t\t<div>
\t\t\t\t\t\t   \t\t\t \t";
        // line 109
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_formApplyTerms_, "specialization"), "Spécialisation requise");
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 110
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_formApplyTerms_, "specialization"));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 111
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_formApplyTerms_, "specialization"));
        echo "
\t\t\t\t\t\t   \t\t\t</div>
\t\t\t\t\t\t   \t\t\t<div>
\t\t\t\t\t\t   \t\t\t \t";
        // line 114
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_formApplyTerms_, "numberWorkedYears"), "Expérience professionnelle requise");
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 115
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_formApplyTerms_, "numberWorkedYears"));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 116
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_formApplyTerms_, "numberWorkedYears"));
        echo "
\t\t\t\t\t\t   \t\t\t</div>
\t\t\t\t\t\t   \t\t\t<div>
\t\t\t\t\t\t   \t\t\t \t";
        // line 119
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_formApplyTerms_, "hoursPerWeek"), "Temps de travail hebdomadaire");
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 120
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_formApplyTerms_, "hoursPerWeek"));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 121
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_formApplyTerms_, "hoursPerWeek"));
        echo "
\t\t\t\t\t\t   \t\t\t</div>
\t\t\t\t\t\t   \t\t\t<div>
\t\t\t\t\t\t   \t\t\t \t";
        // line 124
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($_formApplyTerms_, "paralleleContract"), "Contrat parallèle autorisé");
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 125
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($_formApplyTerms_, "paralleleContract"));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 126
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($_formApplyTerms_, "paralleleContract"));
        echo "
\t\t\t\t\t\t   \t\t\t</div>
\t\t\t\t\t\t   \t\t\t ";
        // line 128
        if (isset($context["formApplyTerms"])) { $_formApplyTerms_ = $context["formApplyTerms"]; } else { $_formApplyTerms_ = null; }
        echo $this->env->getExtension('form')->renderRest($_formApplyTerms_);
        echo "


\t\t\t\t\t\t   \t\t\t <div class=\"modal-footer\">
\t\t\t\t\t\t   \t\t\t \t<button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
\t\t\t\t\t\t   \t\t\t \t<input type=\"submit\" class=\"btn btn-primary\" />
\t\t\t\t\t\t   \t\t\t </div>
\t\t\t\t\t\t \t\t</form>
\t\t\t\t\t   \t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- fin Modal-->

\t\t\t\t\t\t<h3 class=\"heading_w_icon\">Conditions pour candidater</h3>

\t\t\t\t\t\t<div class=\"block_accordeon_type_1\">
\t\t\t\t\t\t\t<div class=\"button_outer first\">
\t\t\t\t\t\t\t\t<div class=\"button_inner\">Niveau d'étude minimum : Bac + <span id=\"pbStudies\">";
        // line 144
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_project_, "applyTerms"), "pbStudies"), "html", null, true);
        echo "</span></div></div>
\t\t\t\t\t\t\t<div class=\"accordeon_content\">
\t\t\t\t\t\t\t\t<p>Le niveau d'étude minimum permet d'adapter la difficulté de chaque projet à chaque développeur et ainsi éviter les abandons en cours de projet.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Diplôme requis : <span id=\"firstDiploma\">";
        // line 149
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_project_, "applyTerms"), "firstDiploma"), "html", null, true);
        echo "</span></div></div>
\t\t\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<p>Le diplôme permet de cibler les connaissance et les capacités des développeurs. Certains seront spécialisé dans un domaine qui ne se prêtera pas forcément à tel ou tel projet.

\t\t\t\t\t\t\t\t";
        // line 153
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        if (($this->getAttribute($this->getAttribute($_project_, "applyTerms"), "secondDiploma") != "")) {
            // line 154
            echo "\t\t\t\t\t\t\t\t\t<h6>Autre diplôme valable : ";
            if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_project_, "applyTerms"), "secondDiploma"), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t";
        }
        // line 156
        echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Spécialisation requise : <span id=\"specialization\">";
        // line 159
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_project_, "applyTerms"), "specialization"), "html", null, true);
        echo "</span></div></div>
\t\t\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<p>Tout comme le diplôme, la spécialité d'un cursus permet d'obtenir des connaissances pointues dans un domaine en particulier qui peu (ou non) se prêter à un projet ou à une tâche d'un projet en particulier.</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Expérience professionnelle requise : <span id=\"numberWorkedYears\">";
        // line 164
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_project_, "applyTerms"), "numberWorkedYears"), "html", null, true);
        echo "</span> année(s)</div></div>
\t\t\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<p>Certains projet nécessite des personnes ayant déjà travaillé avec une technologie ou avec un outil en particulier. Ces expériences professionnelles peuvent apporter maîtrise et gain de temps au projet.</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Temps de travail hebdomadaire : <span id=\"hoursPerWeek\">";
        // line 169
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_project_, "applyTerms"), "hoursPerWeek"), "html", null, true);
        echo "</span> heure(s)</div></div>
\t\t\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<p>Le bénéficiaire du projet annonce une approximation du temps que vous devrez consacrer au projet si vous le rejoingnez. En postulant au projet, vous vous engagez à être disponible pendant cette durée hebdomadaire.</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Contrat parallèle autorisé : <span id=\"paralleleContract\">";
        // line 174
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        if (($this->getAttribute($this->getAttribute($_project_, "applyTerms"), "paralleleContract") == 1)) {
            echo "oui ";
        } else {
            echo " non ";
        }
        echo "</span></div></div>
\t\t\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<p>En tant qu'employeur temporaire, le bénéficiaire du projet peut ou non décider de si vous avez le droit d'être engagé ailleurs, c'est-à-dire qu'il peut vouloir votre exclusivité durant le développement du projet.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t <p>&nbsp;</p>
\t\t\t\t\t\t";
        // line 180
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        if (($this->getAttribute($_app_, "user") == $this->getAttribute($_project_, "owner"))) {
            // line 181
            echo "\t\t\t\t\t\t\t<!-- bootstrap bouton -->
\t\t\t\t\t\t\t<a href=\"#modalChangeApplyTerms\" role=\"button\" class=\"btn\" data-toggle=\"modal\" class=\"changeBtn\">modifier</a>
\t\t\t\t\t\t";
        }
        // line 184
        echo "
\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t<h3 class=\"heading_w_icon\">Candidater</h3>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
        // line 189
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        if (($this->getAttribute($_project_, "recruitment") == 1)) {
            echo " 
\t\t\t\t\t\t\t\t\t";
            // line 190
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if ((null === $_request_)) {
                // line 191
                echo "\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_project", array("id" => $this->getAttribute($_project_, "id"), "url" => $this->getAttribute($_project_, "url"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<p><input type=\"submit\" value=\"Postuler pour ce projet\"/></p>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 195
                echo "\t\t\t\t\t\t\t\t\t<div class=\"general_info_box success\">
\t\t\t\t\t\t\t\t\t\t<p>Félicitations, vous faites déjà partie de ce projet.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 199
            echo "\t\t\t\t\t\t\t\t";
        } else {
            // line 200
            echo "\t\t\t\t\t\t\t\t\t<div class=\"general_info_box warning\">
\t\t\t\t\t\t\t\t\t\t<p>Ce projet ne recrute pas actuellement.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        }
        // line 205
        echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab_content\">
\t\t\t\t\t\t<div class=\"oh\" style=\"padding-top:1px;\">

\t\t\t\t\t\t\t<h3 class=\"heading_w_icon\">Le projet</h3>
\t\t\t\t\t\t\t<ul class=\"list_2\" style=\"padding-left: 25px;\">
\t\t\t\t\t\t\t\t<li>Dates :
\t\t\t\t\t\t\t\t\tdu ";
        // line 214
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_project_, "beginDate"), "d M Y"), "html", null, true);
        echo " au ";
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_project_, "endingDate"), "d M Y"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t<li>Domaines :
\t\t\t\t\t\t\t\t\t";
        // line 216
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_project_, "domains"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 217
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (isset($context["domain"])) { $_domain_ = $context["domain"]; } else { $_domain_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_domain_, "name"), "html", null, true);
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo (((!$this->getAttribute($_loop_, "last"))) ? (",") : (""));
            echo "
\t\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 219
        echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>Rémunération : entre 99 et 1000 EUR.</li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t\t<h3 class=\"heading_w_icon\">Le porteur du projet</h3>
\t\t\t\t\t\t\t<div class=\"about_author\">
\t\t\t\t\t\t\t\t\t<div class=\"userpic\">
\t\t\t\t\t\t\t\t\t\t<img style=\"width:45px; height:45px;\" src=\"";
        // line 227
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        if ((!(null === $this->getAttribute($this->getAttribute($_project_, "owner"), "picture")))) {
            if (isset($context["contract"])) { $_contract_ = $context["contract"]; } else { $_contract_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_contract_, "worker"), "picture"), "url"), "html", null, true);
            echo ".";
            if (isset($context["contract"])) { $_contract_ = $context["contract"]; } else { $_contract_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_contract_, "worker"), "picture"), "extension"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown.gif"), "html", null, true);
        }
        echo "\" alt=\"user avatar\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"about\">
\t\t\t\t\t\t\t\t\t\t<p class=\"title\">Ce projet a été créé par <a href=\"";
        // line 230
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_showUser", array("username" => $this->getAttribute($this->getAttribute($_project_, "owner"), "username"))), "html", null, true);
        echo "\">";
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_project_, "owner"), "name"), "html", null, true);
        echo "</a></p>
\t\t\t\t\t\t\t\t\t\t<p>";
        // line 231
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_project_, "owner"), "description"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t<div class=\"separator\" style=\"height:20px;\"></div>

\t\t\t\t\t<div class=\"links\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Auteur : <a href=\"";
        // line 242
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_showUser", array("username" => $this->getAttribute($this->getAttribute($_project_, "owner"), "username"))), "html", null, true);
        echo "\">";
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_project_, "owner"), "name"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t<li>Dates : du ";
        // line 243
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_project_, "beginDate"), "d M Y"), "html", null, true);
        echo " au ";
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_project_, "endingDate"), "d M Y"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t<li>Domaines : 
\t\t\t\t\t\t\t\t";
        // line 245
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_project_, "domains"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 246
            echo "\t\t\t\t\t\t\t\t\t";
            if (isset($context["domain"])) { $_domain_ = $context["domain"]; } else { $_domain_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_domain_, "name"), "html", null, true);
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo (((!$this->getAttribute($_loop_, "last"))) ? (",") : (""));
            echo "
\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 248
        echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</article>
\t\t<script type=\"text/javascript\">
\t\t\t\$('.block_accordeon_type_1').tabs('.block_accordeon_type_1 div.accordeon_content', {
\t\t\t\t\t\t\t\t\t\ttabs : '.button_outer',
\t\t\t\t\t\t\t\t\t\teffect : 'slide',
\t\t\t\t\t\t\t\t\t\tcurrentClose: false,
\t\t\t\t\t\t\t\t\t\tinitialIndex : 0
\t\t\t});

\t\t\t\$('.block_tabs_type_3 .tabs').tabs('.block_tabs_type_3 .tab_content', {
\t\t\t\tinitialIndex : 0
\t\t\t});

\t\t\t//Routing.generate('project_modify', {\"id\":1})
\t\t\t\$('#projectForm').submit(function(e) {
\t\t\t\tvar url2 = '/site/web/app_dev.php/1/modifyResume';
\t\t\t\t\$.ajax({
\t\t            type: \"POST\",
\t\t            url: url2,
\t\t            data: \$(this).serialize(),
\t\t            cache: false,
\t\t            dataType : 'html',
\t\t            success: function(data){
\t\t            \tvar response=\$(data);
\t\t                \$('#twigShortDescription').text(\$(data).find(\"#resp_shortDesc\").text());
\t\t                \$('#twigLongDescription').text(\$(data).find(\"#resp_longDesc\").text());
\t\t                   
\t\t            },
\t\t            beforeSend: function(){
\t\t            \t\$('#projectForm p').show();
\t\t            \t\$('#projectForm div').hide();
\t\t            },
\t\t            complete: function(){
\t\t            \t\$('#projectForm p').hide();
\t\t            \t\$('#projectForm div').show();
\t\t            \t\$('#projectForm .modal-footer > button.btn').trigger('click');
\t\t            }
\t        \t});
\t        \treturn false;
\t\t\t});

\t\t\t\$('#ApplyTermsForm').submit(function(e) {
\t\t\t\tvar url2 = '/site/web/app_dev.php/1/modifyApplyTerms';
\t\t\t\t\$.ajax({
\t\t            type: \"POST\",
\t\t            url: url2,
\t\t            data: \$(this).serialize(),
\t\t            cache: false,
\t\t            dataType : 'json',
\t\t            success: function(data){
\t\t                \$('#pbStudies').text(data.pbStudies);
\t\t                \$('#firstDiploma').text(data.firstDiploma);
\t\t                \$('#specialization').text(data.specialization);
\t\t                \$('#numberWorkedYears').text(data.numberWorkedYears);
\t\t                \$('#hoursPerWeek').text(data.hoursPerWeek);
\t\t                if(data.paralleleContract)
\t\t                \t\$('#paralleleContract').text(\"oui\");
\t\t               \telse
\t\t               \t\t\$('#paralleleContract').text(\"non\");
\t\t            },
\t\t            beforeSend: function(){
\t\t            \t\$('#ApplyTermsForm p').show();
\t\t            \t\$('#ApplyTermsForm div').hide();
\t\t            },
\t\t            complete: function(){
\t\t            \t\$('#ApplyTermsForm p').hide();
\t\t            \t\$('#ApplyTermsForm div').show();
\t\t            \t\$('#ApplyTermsForm .modal-footer > button.btn').trigger('click');
\t\t            }
\t        \t});
\t        \treturn false;
\t\t\t});

\t\t\t//prevent backing on tab index 0 when the modal is popped
\t\t\t\$('#modalChangeProject').on('show', function () {
\t\t\t\t\$('.block_tabs_type_3 .tabs').tabs('.block_tabs_type_3 .tab_content', {
\t\t\t\t\tinitialIndex : 0
\t\t\t\t});
\t\t\t});

\t\t\t\$('#modalChangeApplyTerms').on('show', function () {
\t\t\t\t\$('.block_tabs_type_3 .tabs').tabs('.block_tabs_type_3 .tab_content', {
\t\t\t\t\tinitialIndex : 1
\t\t\t\t});
\t\t\t});
\t\t</script>
\t</div>

";
    }

    // line 344
    public function block_right($context, array $blocks = array())
    {
        // line 345
        echo "\t<div class=\"sidebar\">
\t\t<div class=\"separator\" style=\"height:37px;\"></div>
\t\t\t";
        // line 347
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        $this->env->loadTemplate("MakinMindProjectBundle:Project:sidebar_owner_project.html.twig")->display(array_merge($context, array("project" => $_project_)));
        // line 348
        echo "\t\t<div class=\"separator\" style=\"height:40px;\"></div>
\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "MakinMindProjectBundle:Project:show_project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  769 => 348,  766 => 347,  762 => 345,  759 => 344,  662 => 248,  642 => 246,  624 => 245,  615 => 243,  607 => 242,  592 => 231,  584 => 230,  569 => 227,  559 => 219,  539 => 217,  521 => 216,  512 => 214,  501 => 205,  494 => 200,  491 => 199,  485 => 195,  476 => 191,  473 => 190,  468 => 189,  456 => 181,  452 => 180,  438 => 174,  429 => 169,  420 => 164,  411 => 159,  406 => 156,  396 => 153,  388 => 149,  379 => 144,  359 => 128,  348 => 125,  336 => 121,  331 => 120,  326 => 119,  319 => 116,  314 => 115,  302 => 111,  297 => 110,  292 => 109,  280 => 105,  275 => 104,  263 => 100,  258 => 99,  253 => 97,  248 => 96,  230 => 84,  225 => 81,  215 => 78,  207 => 74,  169 => 56,  105 => 21,  190 => 48,  183 => 45,  168 => 42,  163 => 39,  103 => 20,  100 => 19,  196 => 60,  181 => 60,  128 => 31,  174 => 36,  93 => 19,  142 => 39,  139 => 38,  114 => 25,  162 => 39,  159 => 54,  148 => 49,  125 => 39,  97 => 26,  164 => 55,  151 => 46,  145 => 44,  137 => 38,  308 => 82,  303 => 81,  286 => 76,  279 => 73,  274 => 72,  245 => 63,  240 => 62,  223 => 57,  218 => 56,  189 => 57,  184 => 45,  177 => 43,  167 => 42,  133 => 31,  59 => 8,  157 => 67,  149 => 51,  116 => 28,  106 => 21,  76 => 16,  69 => 13,  98 => 20,  349 => 122,  342 => 119,  328 => 113,  310 => 99,  305 => 98,  300 => 97,  294 => 95,  289 => 94,  284 => 93,  278 => 91,  268 => 101,  262 => 68,  257 => 67,  246 => 83,  241 => 82,  236 => 81,  192 => 63,  187 => 46,  171 => 60,  160 => 38,  155 => 37,  131 => 28,  126 => 27,  120 => 41,  110 => 33,  72 => 10,  49 => 20,  41 => 3,  81 => 14,  21 => 3,  469 => 238,  466 => 237,  461 => 184,  458 => 229,  453 => 226,  450 => 225,  444 => 220,  424 => 200,  403 => 182,  399 => 154,  395 => 180,  384 => 172,  380 => 171,  370 => 164,  366 => 163,  361 => 161,  353 => 126,  350 => 154,  343 => 124,  340 => 141,  334 => 115,  322 => 144,  320 => 141,  313 => 83,  309 => 114,  306 => 134,  301 => 71,  296 => 78,  291 => 77,  285 => 106,  281 => 27,  277 => 26,  273 => 90,  269 => 71,  265 => 23,  260 => 21,  256 => 20,  252 => 66,  243 => 95,  233 => 237,  226 => 232,  221 => 80,  205 => 48,  203 => 68,  200 => 153,  198 => 45,  135 => 36,  75 => 23,  53 => 6,  70 => 11,  209 => 78,  206 => 52,  201 => 46,  194 => 49,  191 => 48,  186 => 61,  180 => 63,  176 => 59,  166 => 45,  158 => 44,  153 => 55,  143 => 32,  134 => 33,  123 => 40,  118 => 28,  90 => 26,  87 => 15,  66 => 12,  60 => 8,  146 => 60,  136 => 29,  122 => 25,  107 => 34,  101 => 28,  95 => 17,  82 => 14,  73 => 11,  67 => 9,  52 => 6,  109 => 24,  104 => 29,  96 => 17,  84 => 20,  80 => 18,  26 => 3,  34 => 5,  112 => 24,  102 => 19,  89 => 17,  63 => 7,  56 => 7,  43 => 6,  92 => 15,  79 => 13,  57 => 7,  46 => 7,  37 => 5,  33 => 5,  29 => 4,  19 => 1,  44 => 4,  27 => 5,  55 => 7,  45 => 5,  36 => 5,  50 => 5,  47 => 5,  30 => 343,  25 => 4,  249 => 17,  239 => 90,  235 => 61,  228 => 58,  224 => 73,  219 => 72,  217 => 79,  214 => 71,  211 => 53,  208 => 49,  202 => 72,  199 => 71,  193 => 49,  182 => 37,  178 => 61,  175 => 60,  172 => 42,  165 => 55,  161 => 68,  156 => 51,  154 => 52,  150 => 43,  147 => 47,  132 => 35,  127 => 71,  117 => 36,  113 => 29,  86 => 17,  83 => 16,  78 => 13,  68 => 10,  64 => 11,  61 => 13,  48 => 5,  39 => 3,  32 => 2,  24 => 11,  22 => 2,  23 => 3,  20 => 2,  17 => 1,  144 => 50,  138 => 32,  130 => 35,  124 => 24,  121 => 29,  115 => 36,  111 => 36,  108 => 22,  99 => 18,  94 => 25,  91 => 16,  88 => 14,  85 => 31,  77 => 13,  74 => 11,  71 => 10,  65 => 10,  62 => 8,  58 => 12,  54 => 7,  51 => 5,  42 => 12,  38 => 3,  35 => 5,  31 => 2,  28 => 1,);
    }
}
