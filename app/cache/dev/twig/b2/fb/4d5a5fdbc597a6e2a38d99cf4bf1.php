<?php

/* MakinMindProjectBundle:Project:list_projects.html.twig */
class __TwigTemplate_b2fb4d5a5fdbc597a6e2a38d99cf4bf1 extends Twig_Template
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
        echo " :: Liste des projets";
    }

    // line 3
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Les projets";
    }

    // line 4
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <span>Les projets</span>
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
        echo "\t<div id=\"filtered_container\" class=\"block_portfolio_3 c_3\">

\t<h2 class=\"heading_w_icon\">Projets auxquels je participe</h2>
\t<div class=\"line_1\" style=\"margin:0px 0px 19px;\"></div>

\t";
        // line 18
        if ((!(null === $this->getContext($context, "projects")))) {
            // line 19
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projects"));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 20
                echo "
\t\t<div class=\"item web\">
\t\t\t<div class=\"image\">
\t\t\t\t";
                // line 23
                if ((!(null === $this->getAttribute($this->getContext($context, "project"), "logo")))) {
                    // line 24
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute($this->getAttribute($this->getContext($context, "project"), "logo"), "localStoring") == 1)) {
                        // line 25
                        echo "\t\t\t\t\t\t<img style=\"width:290px; height:180px;\" src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "logo"), "url"), "html", null, true);
                        echo ".";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "logo"), "extension"), "html", null, true);
                        echo "\" alt=\"project logo\">
\t\t\t\t\t";
                    } else {
                        // line 27
                        echo "\t\t\t\t\t\t<img style=\"width:290px; height:180px;\" src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "logo"), "url"), "html", null, true);
                        echo "\" alt=\"project logo\">
\t\t\t\t\t";
                    }
                    // line 29
                    echo "\t\t\t\t";
                } else {
                    // line 30
                    echo "\t\t\t\t\t<img style=\"witdh:290px; height:180px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown_project.jpg"), "html", null, true);
                    echo "\" alt=\"project logo\">
\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t<div class=\"info\">
\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                // line 35
                if ((!(null === $this->getAttribute($this->getContext($context, "project"), "logo")))) {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "logo"), "url"), "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "logo"), "extension"), "html", null, true);
                    echo "\" data-rel=\"prettyPhoto\" class=\"icon_zoom\" title=\"\">Zoom</a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown_project.jpg"), "html", null, true);
                    echo "\" data-rel=\"prettyPhoto\" class=\"icon_zoom\" title=\"\">Zoom</a></li>
\t\t\t\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"description\">
\t\t\t\t<h6><span>";
                // line 46
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "name")), "html", null, true);
                echo "</span></h6>
\t\t\t\t<p class=\"tags\">
\t\t\t\t\t<a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_project", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
                echo "\">Voir le projet</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>

\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 54
            echo "\t";
        }
        // line 55
        echo "
\t<div class=\"separator\" style=\"height:15px;\"></div>

\t<h2 class=\"heading_w_icon\">Autres projets</h2>
\t<div class=\"line_1\" style=\"margin:0px 0px 19px;\"></div>

\t<div class=\"general_info_box info demo\">
\t\t<a href=\"#\" class=\"close\">Fermer</a>
\t\t<p>Aucun autre projet n'est encore repertorié sur MakinMind...</p>
\t</div>


</div>
";
    }

    public function getTemplateName()
    {
        return "MakinMindProjectBundle:Project:list_projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 55,  167 => 54,  155 => 48,  150 => 46,  142 => 40,  136 => 38,  128 => 36,  126 => 35,  121 => 32,  115 => 30,  112 => 29,  106 => 27,  98 => 25,  95 => 24,  93 => 23,  88 => 20,  83 => 19,  81 => 18,  74 => 13,  71 => 12,  65 => 10,  60 => 8,  55 => 7,  48 => 5,  45 => 4,  39 => 3,  32 => 2,);
    }
}
