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
        if (($this->getAttribute($this->getContext($context, "project"), "owner") == $this->getAttribute($this->getContext($context, "app"), "user"))) {
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
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "name")), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "name")), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "name")), "html", null, true);
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
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "formProject"));
        echo " id=\"projectForm\">
\t\t\t\t\t\t   \t\t\t ";
        // line 51
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "formProject"));
        echo "
\t\t\t\t\t\t   \t\t\t <p align=\"center\" hidden=\"true\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/images/ajax-loader.gif"), "html", null, true);
        echo "\" alt=\"loading\"/></p>
\t\t\t\t\t\t   \t\t\t <div>
\t\t\t\t\t\t   \t\t\t \t";
        // line 54
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "shortDescription"), "Résumé");
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "formProject"), "shortDescription"));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 56
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formProject"), "shortDescription"));
        echo "
\t\t\t\t\t\t   \t\t\t </div>
\t\t\t\t\t\t   \t\t\t <div>
\t\t\t\t\t\t   \t\t\t \t";
        // line 59
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formProject"), "longDescription"), "Déscription");
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 60
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "formProject"), "longDescription"));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 61
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formProject"), "longDescription"));
        echo "
\t\t\t\t\t\t   \t\t\t </div>
\t\t\t\t\t\t   \t\t\t ";
        // line 63
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "formProject"));
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
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "shortDescription")), "html", null, true);
        echo "</blockquote>

\t\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t\t<h3 class=\"heading_w_icon\">Description</h3>
\t\t\t\t\t\t\t<blockquote id=\"twigLongDescription\" class=\"full\" style=\"text-align: justify;\">";
        // line 78
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "longDescription")), "html", null, true);
        echo "</blockquote>

\t\t\t\t\t\t\t";
        // line 80
        if (($this->getAttribute($this->getContext($context, "app"), "user") == $this->getAttribute($this->getContext($context, "project"), "owner"))) {
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
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "formApplyTerms"));
        echo " id=\"ApplyTermsForm\">
\t\t\t\t\t\t   \t\t\t ";
        // line 96
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "formApplyTerms"));
        echo "
\t\t\t\t\t\t   \t\t\t <p align=\"center\" hidden=\"true\"><img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/images/ajax-loader.gif"), "html", null, true);
        echo "\" alt=\"loading\"/></p>
\t\t\t\t\t\t   \t\t\t<div>
\t\t\t\t\t\t   \t\t\t \t";
        // line 99
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formApplyTerms"), "pbStudies"), "Niveau d'étude minimum");
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 100
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "formApplyTerms"), "pbStudies"));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 101
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formApplyTerms"), "pbStudies"));
        echo "
\t\t\t\t\t\t   \t\t\t</div>
\t\t\t\t\t\t   \t\t\t<div>
\t\t\t\t\t\t   \t\t\t \t";
        // line 104
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formApplyTerms"), "firstDiploma"), "Dîplome requis");
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 105
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "formApplyTerms"), "firstDiploma"));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 106
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formApplyTerms"), "firstDiploma"));
        echo "
\t\t\t\t\t\t   \t\t\t</div>
\t\t\t\t\t\t   \t\t\t<div>
\t\t\t\t\t\t   \t\t\t \t";
        // line 109
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formApplyTerms"), "specialization"), "Spécialisation requise");
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 110
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "formApplyTerms"), "specialization"));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 111
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formApplyTerms"), "specialization"));
        echo "
\t\t\t\t\t\t   \t\t\t</div>
\t\t\t\t\t\t   \t\t\t<div>
\t\t\t\t\t\t   \t\t\t \t";
        // line 114
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formApplyTerms"), "numberWorkedYears"), "Expérience professionnelle requise");
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 115
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "formApplyTerms"), "numberWorkedYears"));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 116
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formApplyTerms"), "numberWorkedYears"));
        echo "
\t\t\t\t\t\t   \t\t\t</div>
\t\t\t\t\t\t   \t\t\t<div>
\t\t\t\t\t\t   \t\t\t \t";
        // line 119
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formApplyTerms"), "hoursPerWeek"), "Temps de travail hebdomadaire");
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 120
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "formApplyTerms"), "hoursPerWeek"));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 121
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formApplyTerms"), "hoursPerWeek"));
        echo "
\t\t\t\t\t\t   \t\t\t</div>
\t\t\t\t\t\t   \t\t\t<div>
\t\t\t\t\t\t   \t\t\t \t";
        // line 124
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "formApplyTerms"), "paralleleContract"), "Contrat parallèle autorisé");
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 125
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "formApplyTerms"), "paralleleContract"));
        echo "
\t\t\t\t\t\t\t\t\t\t";
        // line 126
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "formApplyTerms"), "paralleleContract"));
        echo "
\t\t\t\t\t\t   \t\t\t</div>
\t\t\t\t\t\t   \t\t\t ";
        // line 128
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "formApplyTerms"));
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "pbStudies"), "html", null, true);
        echo "</span></div></div>
\t\t\t\t\t\t\t<div class=\"accordeon_content\">
\t\t\t\t\t\t\t\t<p>Le niveau d'étude minimum permet d'adapter la difficulté de chaque projet à chaque développeur et ainsi éviter les abandons en cours de projet.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Diplôme requis : <span id=\"firstDiploma\">";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "firstDiploma"), "html", null, true);
        echo "</span></div></div>
\t\t\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<p>Le diplôme permet de cibler les connaissance et les capacités des développeurs. Certains seront spécialisé dans un domaine qui ne se prêtera pas forcément à tel ou tel projet.

\t\t\t\t\t\t\t\t";
        // line 153
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "secondDiploma") != "")) {
            // line 154
            echo "\t\t\t\t\t\t\t\t\t<h6>Autre diplôme valable : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "secondDiploma"), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t";
        }
        // line 156
        echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Spécialisation requise : <span id=\"specialization\">";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "specialization"), "html", null, true);
        echo "</span></div></div>
\t\t\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<p>Tout comme le diplôme, la spécialité d'un cursus permet d'obtenir des connaissances pointues dans un domaine en particulier qui peu (ou non) se prêter à un projet ou à une tâche d'un projet en particulier.</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Expérience professionnelle requise : <span id=\"numberWorkedYears\">";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "numberWorkedYears"), "html", null, true);
        echo "</span> année(s)</div></div>
\t\t\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<p>Certains projet nécessite des personnes ayant déjà travaillé avec une technologie ou avec un outil en particulier. Ces expériences professionnelles peuvent apporter maîtrise et gain de temps au projet.</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Temps de travail hebdomadaire : <span id=\"hoursPerWeek\">";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "hoursPerWeek"), "html", null, true);
        echo "</span> heure(s)</div></div>
\t\t\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<p>Le bénéficiaire du projet annonce une approximation du temps que vous devrez consacrer au projet si vous le rejoingnez. En postulant au projet, vous vous engagez à être disponible pendant cette durée hebdomadaire.</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Contrat parallèle autorisé : <span id=\"paralleleContract\">";
        // line 174
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "paralleleContract") == 1)) {
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
        if (($this->getAttribute($this->getContext($context, "app"), "user") == $this->getAttribute($this->getContext($context, "project"), "owner"))) {
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
        if (($this->getAttribute($this->getContext($context, "project"), "recruitment") == 1)) {
            echo " 
\t\t\t\t\t\t\t\t\t";
            // line 190
            if ((null === $this->getContext($context, "request"))) {
                // line 191
                echo "\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_project", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "beginDate"), "d M Y"), "html", null, true);
        echo " au ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "endingDate"), "d M Y"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t<li>Domaines :
\t\t\t\t\t\t\t\t\t";
        // line 216
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "project"), "domains"));
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "domain"), "name"), "html", null, true);
            echo (((!$this->getAttribute($this->getContext($context, "loop"), "last"))) ? (",") : (""));
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
        if ((!(null === $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "owner"), "picture")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "picture"), "url"), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "picture"), "extension"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown.gif"), "html", null, true);
        }
        echo "\" alt=\"user avatar\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"about\">
\t\t\t\t\t\t\t\t\t\t<p class=\"title\">Ce projet a été créé par <a href=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_showUser", array("username" => $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "owner"), "username"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "owner"), "name"), "html", null, true);
        echo "</a></p>
\t\t\t\t\t\t\t\t\t\t<p>";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "owner"), "description"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_showUser", array("username" => $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "owner"), "username"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "owner"), "name"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t<li>Dates : du ";
        // line 243
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "beginDate"), "d M Y"), "html", null, true);
        echo " au ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "endingDate"), "d M Y"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t<li>Domaines : 
\t\t\t\t\t\t\t\t";
        // line 245
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "project"), "domains"));
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "domain"), "name"), "html", null, true);
            echo (((!$this->getAttribute($this->getContext($context, "loop"), "last"))) ? (",") : (""));
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
        $this->env->loadTemplate("MakinMindProjectBundle:Project:sidebar_owner_project.html.twig")->display(array_merge($context, array("project" => $this->getContext($context, "project"))));
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
        return array (  698 => 348,  696 => 347,  692 => 345,  689 => 344,  592 => 248,  574 => 246,  557 => 245,  550 => 243,  544 => 242,  530 => 231,  524 => 230,  512 => 227,  502 => 219,  484 => 217,  460 => 214,  449 => 205,  439 => 199,  433 => 195,  425 => 191,  423 => 190,  419 => 189,  412 => 184,  407 => 181,  405 => 180,  392 => 174,  384 => 169,  376 => 164,  363 => 156,  357 => 154,  355 => 153,  340 => 144,  321 => 128,  316 => 126,  312 => 125,  308 => 124,  302 => 121,  298 => 120,  288 => 116,  284 => 115,  280 => 114,  274 => 111,  270 => 110,  266 => 109,  260 => 106,  256 => 105,  252 => 104,  246 => 101,  242 => 100,  238 => 99,  212 => 84,  170 => 60,  166 => 59,  139 => 50,  50 => 6,  180 => 49,  174 => 61,  149 => 38,  98 => 19,  181 => 49,  175 => 46,  172 => 45,  112 => 28,  191 => 49,  167 => 53,  121 => 27,  115 => 34,  101 => 21,  150 => 39,  140 => 49,  136 => 32,  119 => 39,  114 => 29,  249 => 76,  243 => 73,  239 => 72,  229 => 96,  225 => 95,  221 => 66,  207 => 81,  197 => 57,  187 => 53,  183 => 52,  159 => 43,  155 => 42,  106 => 24,  157 => 68,  128 => 52,  118 => 45,  76 => 13,  85 => 16,  296 => 122,  290 => 119,  278 => 113,  261 => 99,  257 => 78,  253 => 77,  248 => 95,  244 => 94,  240 => 93,  235 => 71,  227 => 89,  218 => 86,  214 => 85,  186 => 72,  182 => 45,  173 => 48,  169 => 47,  164 => 65,  160 => 56,  151 => 39,  147 => 52,  143 => 51,  138 => 44,  130 => 38,  100 => 22,  96 => 25,  83 => 15,  61 => 8,  45 => 4,  66 => 12,  65 => 8,  21 => 2,  467 => 216,  464 => 237,  459 => 230,  456 => 229,  451 => 226,  448 => 225,  442 => 200,  422 => 200,  401 => 182,  397 => 181,  393 => 180,  382 => 172,  378 => 171,  368 => 159,  364 => 163,  359 => 161,  351 => 155,  348 => 149,  341 => 142,  338 => 141,  332 => 137,  320 => 144,  318 => 141,  311 => 137,  307 => 135,  304 => 134,  299 => 71,  294 => 119,  289 => 31,  283 => 115,  279 => 27,  275 => 26,  271 => 83,  267 => 82,  263 => 81,  258 => 21,  254 => 20,  250 => 18,  247 => 17,  241 => 5,  233 => 97,  231 => 90,  222 => 87,  219 => 228,  217 => 225,  203 => 216,  201 => 58,  198 => 153,  125 => 28,  58 => 12,  56 => 7,  36 => 3,  91 => 17,  68 => 18,  43 => 5,  209 => 83,  205 => 80,  196 => 134,  192 => 78,  189 => 48,  178 => 48,  176 => 70,  165 => 46,  161 => 36,  152 => 54,  148 => 38,  145 => 38,  141 => 43,  134 => 56,  132 => 53,  127 => 36,  123 => 31,  109 => 26,  93 => 18,  90 => 15,  54 => 7,  133 => 39,  124 => 35,  111 => 23,  107 => 29,  80 => 16,  69 => 11,  63 => 16,  60 => 8,  52 => 6,  97 => 39,  95 => 18,  88 => 19,  78 => 14,  75 => 13,  71 => 11,  25 => 4,  82 => 16,  72 => 16,  64 => 10,  53 => 7,  34 => 5,  92 => 25,  86 => 17,  79 => 18,  46 => 4,  37 => 5,  19 => 2,  44 => 4,  27 => 3,  49 => 5,  42 => 6,  40 => 3,  33 => 8,  29 => 4,  26 => 5,  224 => 232,  215 => 63,  211 => 62,  204 => 84,  200 => 78,  195 => 80,  193 => 74,  190 => 73,  188 => 77,  185 => 46,  179 => 63,  177 => 69,  171 => 45,  162 => 63,  158 => 53,  156 => 55,  153 => 45,  146 => 55,  142 => 60,  137 => 36,  131 => 38,  126 => 33,  120 => 31,  117 => 25,  103 => 21,  99 => 28,  77 => 14,  74 => 12,  57 => 7,  47 => 5,  39 => 3,  32 => 2,  24 => 11,  22 => 3,  30 => 343,  23 => 3,  20 => 2,  17 => 1,  135 => 32,  129 => 29,  122 => 46,  116 => 34,  113 => 37,  108 => 29,  104 => 22,  102 => 27,  94 => 17,  89 => 17,  87 => 16,  84 => 16,  81 => 24,  73 => 15,  70 => 10,  67 => 12,  62 => 13,  59 => 8,  55 => 7,  51 => 19,  48 => 5,  41 => 12,  38 => 3,  35 => 9,  31 => 2,  28 => 1,);
    }
}
