<?php

/* MakinMindProjectBundle:Project:owner_project_contract.html.twig */
class __TwigTemplate_fbcd12b4aac2637ceb328733b656c2ba extends Twig_Template
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
            'right' => array($this, 'block_right'),
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
        echo " :: Conditions";
    }

    // line 3
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Les conditions";
    }

    // line 4
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " 
\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_projects"), "html", null, true);
        echo "\">Mes projets</a> / 
\t<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_project", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "name")), "html", null, true);
        echo "</a> / <span>Conditions</span>
";
    }

    // line 9
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 10
    public function block_content_type($context, array $blocks = array())
    {
        $this->displayParentBlock("content_type", $context, $blocks);
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"block_blog_post_type_1\">
\t<article>
\t\t<div class=\"content\">
\t\t\t<h4>Contrat et Conditions</h4>
\t\t\t<h6 style=\"padding-bottom:13px;\">Conditions pour postuler</h6>
\t\t\t<p>
\t\t\t\t<strong>Années d'étude requises : </strong>bac+";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "pbStudies"), "html", null, true);
        echo "<br/>
\t\t\t\t<strong>Diplome requis : </strong>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "firstDiploma"), "html", null, true);
        echo "<br/>
\t\t\t\t<strong>Spécialité : </strong> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "specialization"), "html", null, true);
        echo "<br/>
\t\t\t\t<strong>Expérience proféssionnel : </strong>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "numberWorkedYears"), "html", null, true);
        echo " année(s)<br/>
\t\t\t\t<strong>Heure de travail par semaine pour le projet : </strong>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "hoursPerWeek"), "html", null, true);
        echo " heure(s)<br/>
\t\t\t\t<strong>Contrat parallèle autorisé : </strong>";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "paralleleContract") == 1)) {
            echo "oui ";
        } else {
            echo " non ";
        }
        echo "<br/>
\t\t\t</p>

\t\t\t<h6 style=\"padding-bottom:13px;\">Le contrat</h6>
\t\t\t<p><a href=\"./def.pdf\">Afficher le contrat</a></p>
\t\t</div>
\t</article>
</div>
";
    }

    // line 35
    public function block_right($context, array $blocks = array())
    {
        // line 36
        echo "<div class=\"sidebar\">
\t<div class=\"separator\" style=\"height:37px;\"></div>
\t";
        // line 38
        $this->env->loadTemplate("MakinMindProjectBundle:Project:sidebar_owner_project.html.twig")->display(array_merge($context, array("project" => $this->getContext($context, "project"))));
        // line 39
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "MakinMindProjectBundle:Project:owner_project_contract.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 39,  131 => 38,  127 => 36,  124 => 35,  107 => 25,  103 => 24,  99 => 23,  95 => 22,  91 => 21,  87 => 20,  79 => 14,  76 => 13,  70 => 10,  65 => 9,  57 => 7,  53 => 6,  48 => 5,  45 => 4,  39 => 3,  32 => 2,);
    }
}
