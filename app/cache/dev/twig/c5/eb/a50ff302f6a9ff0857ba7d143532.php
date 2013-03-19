<?php

/* MakinMindProjectBundle:Project:owner_project_list_candidates.html.twig */
class __TwigTemplate_c5eba50ff302f6a9ff0857ba7d143532 extends Twig_Template
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
        echo " :: Les candidats";
    }

    // line 3
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Les candidats";
    }

    // line 4
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 5
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " 
\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MakinMindProjectBundle_owner_projects"), "html", null, true);
        echo "\">Mes projets</a> / 
\t<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MakinMindProjectBundle_owner_project_description", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "name")), "html", null, true);
        echo "</a> / <span>Candidats</span>
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
        echo "<div class=\"separator\" style=\"height:37px;\"></div>
<div class=\"block_portfolio_w_sidebar c_3\">
\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "requests"));
        foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
            // line 17
            echo "\t\t<div class=\"item\">
\t\t\t<div class=\"image\">
\t\t\t\t";
            // line 19
            if ((!(null === $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "picture")))) {
                // line 20
                echo "\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "picture"), "localStoring") == 1)) {
                    // line 21
                    echo "\t\t\t\t\t<img style=\"height:200px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "picture"), "url"), "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "picture"), "extension"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "lastname"), "html", null, true);
                    echo " picture\"/>
\t\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t<img style=\"height:200px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "picture"), "url"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "lastname"), "html", null, true);
                    echo " picture\"/>
\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t";
            } else {
                // line 26
                echo "\t\t\t\t\t<img style=\"height:200px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown.gif"), "html", null, true);
                echo "\" alt=\"unknown picture\"/>
\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t<div class=\"info\">
\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
            // line 32
            if ((!(null === $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "picture")))) {
                // line 33
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "picture"), "localStoring") == 1)) {
                    // line 34
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "picture"), "url"), "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "picture"), "extension"), "html", null, true);
                    echo "\" data-rel=\"prettyPhoto\" class=\"icon_zoom\" title=\"\">Zoom</a>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "picture"), "url"), "html", null, true);
                    echo "\" data-rel=\"prettyPhoto\" class=\"icon_zoom\" title=\"\">Zoom</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t\t\t\t";
            } else {
                // line 39
                echo "\t\t\t\t\t\t\t\t\t<img style=\"height:240px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown.gif"), "html", null, true);
                echo "\" alt=\"unknown picture\"/>
\t\t\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"url page user .html\" class=\"icon_link\">Link</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"description\">
\t\t\t\t<h6>";
            // line 49
            echo twig_escape_filter($this->env, ((twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "firstname")) . " ") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "lastname"))), "html", null, true);
            echo "</h6>
\t\t\t\t<!--<p class=\"tags\"><a href=\"#\">Web Design</a></p>-->
\t\t\t\t<p>Né(e) le ";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "birthdate"), "d/m/Y"), "html", null, true);
            echo " en ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "country"), "html", null, true);
            echo "</p>
\t\t\t\t<p>";
            // line 52
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "job")), "html", null, true);
            echo " chez ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "company"), "html", null, true);
            echo "</p>
\t\t\t\t<p>Tél : ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "phone"), "html", null, true);
            echo "</p> 
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"line_2\"></div>
\t\t\t
\t\t\t<div class=\"clearboth\"></div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['request'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 61
        echo "</div>
";
    }

    // line 64
    public function block_right($context, array $blocks = array())
    {
        // line 65
        echo "<div class=\"sidebar\">
\t<div class=\"separator\" style=\"height:37px;\"></div>
\t\t";
        // line 67
        $this->env->loadTemplate("MakinMindProjectBundle:Project:sidebar_owner_project.html.twig")->display(array_merge($context, array("project" => $this->getContext($context, "project"))));
        // line 68
        echo "\t<div class=\"separator\" style=\"height:40px;\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MakinMindProjectBundle:Project:owner_project_list_candidates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 68,  209 => 67,  205 => 65,  202 => 64,  197 => 61,  183 => 53,  177 => 52,  171 => 51,  166 => 49,  156 => 41,  150 => 39,  147 => 38,  141 => 36,  133 => 34,  130 => 33,  128 => 32,  122 => 28,  116 => 26,  113 => 25,  105 => 23,  95 => 21,  92 => 20,  90 => 19,  86 => 17,  82 => 16,  78 => 14,  75 => 13,  69 => 10,  64 => 9,  56 => 7,  52 => 6,  48 => 5,  45 => 4,  39 => 3,  32 => 2,);
    }
}
