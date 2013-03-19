<?php

/* MakinMindProjectBundle:Project:list_projects.html.twig */
class __TwigTemplate_23875e45fd895644116849feb80271cd extends Twig_Template
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
        if (isset($context["projects"])) { $_projects_ = $context["projects"]; } else { $_projects_ = null; }
        if ((!(null === $_projects_))) {
            // line 19
            echo "\t\t";
            if (isset($context["projects"])) { $_projects_ = $context["projects"]; } else { $_projects_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_projects_);
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 20
                echo "
\t\t<div class=\"item web\">
\t\t\t<div class=\"image\">

\t\t\t\t";
                // line 24
                if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
                if ((!(null === $this->getAttribute($_project_, "logo")))) {
                    // line 25
                    echo "\t\t\t\t\t<img style=\"width:290px; height:180px;\" src=\"";
                    if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_project_, "logo"), "url"), "html", null, true);
                    echo "\" alt=\"Project logo\">
\t\t\t\t";
                } else {
                    // line 27
                    echo "\t\t\t\t\t<img style=\"witdh:290px; height:180px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown_project.jpg"), "html", null, true);
                    echo "\" alt=\"project logo\">
\t\t\t\t";
                }
                // line 29
                echo "
\t\t\t\t<div class=\"info\">
\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                // line 33
                if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
                if ((!(null === $this->getAttribute($_project_, "logo")))) {
                    // line 34
                    echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                    if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_project_, "logo"), "url"), "html", null, true);
                    echo ".";
                    if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_project_, "logo"), "extension"), "html", null, true);
                    echo "\" data-rel=\"prettyPhoto\" class=\"icon_zoom\" title=\"\">Zoom</a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown_project.jpg"), "html", null, true);
                    echo "\" data-rel=\"prettyPhoto\" class=\"icon_zoom\" title=\"\">Zoom</a></li>
\t\t\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"description\">
\t\t\t\t<h6><span>";
                // line 44
                if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($_project_, "name")), "html", null, true);
                echo "</span></h6>
\t\t\t\t<p class=\"tags\">
\t\t\t\t\t<a href=\"";
                // line 46
                if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_project", array("id" => $this->getAttribute($_project_, "id"), "url" => $this->getAttribute($_project_, "url"))), "html", null, true);
                echo "\">Voir le projet</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>

\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 52
            echo "\t";
        }
        // line 53
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
        return array (  164 => 52,  151 => 46,  145 => 44,  137 => 38,  308 => 82,  303 => 81,  286 => 76,  279 => 73,  274 => 72,  245 => 63,  240 => 62,  223 => 57,  218 => 56,  189 => 47,  184 => 46,  177 => 43,  167 => 53,  133 => 31,  59 => 11,  157 => 67,  149 => 61,  116 => 26,  106 => 27,  76 => 21,  69 => 18,  98 => 20,  349 => 122,  342 => 119,  328 => 113,  310 => 99,  305 => 98,  300 => 97,  294 => 95,  289 => 94,  284 => 93,  278 => 91,  268 => 89,  262 => 68,  257 => 67,  246 => 83,  241 => 82,  236 => 81,  192 => 65,  187 => 64,  171 => 60,  160 => 38,  155 => 37,  131 => 36,  126 => 28,  120 => 41,  110 => 39,  72 => 23,  49 => 20,  41 => 5,  81 => 18,  21 => 3,  469 => 238,  466 => 237,  461 => 230,  458 => 229,  453 => 226,  450 => 225,  444 => 220,  424 => 200,  403 => 182,  399 => 181,  395 => 180,  384 => 172,  380 => 171,  370 => 164,  366 => 163,  361 => 161,  353 => 155,  350 => 154,  343 => 142,  340 => 141,  334 => 115,  322 => 144,  320 => 141,  313 => 83,  309 => 135,  306 => 134,  301 => 71,  296 => 78,  291 => 77,  285 => 28,  281 => 27,  277 => 26,  273 => 90,  269 => 71,  265 => 23,  260 => 21,  256 => 20,  252 => 66,  243 => 5,  233 => 237,  226 => 232,  221 => 228,  205 => 216,  203 => 68,  200 => 153,  198 => 67,  135 => 74,  75 => 23,  53 => 10,  70 => 11,  209 => 78,  206 => 52,  201 => 51,  194 => 48,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 59,  158 => 56,  153 => 55,  143 => 33,  134 => 44,  123 => 40,  118 => 33,  90 => 20,  87 => 30,  66 => 17,  60 => 8,  146 => 60,  136 => 53,  122 => 37,  107 => 34,  101 => 52,  95 => 29,  82 => 28,  73 => 20,  67 => 10,  52 => 19,  109 => 23,  104 => 22,  96 => 24,  84 => 19,  80 => 24,  26 => 3,  34 => 5,  112 => 29,  102 => 19,  89 => 16,  63 => 16,  56 => 11,  43 => 6,  92 => 28,  79 => 14,  57 => 7,  46 => 7,  37 => 5,  33 => 5,  29 => 4,  19 => 1,  44 => 6,  27 => 5,  55 => 7,  45 => 4,  36 => 5,  50 => 5,  47 => 4,  30 => 3,  25 => 4,  249 => 17,  239 => 90,  235 => 61,  228 => 58,  224 => 73,  219 => 72,  217 => 79,  214 => 71,  211 => 53,  208 => 69,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 42,  165 => 55,  161 => 68,  156 => 51,  154 => 50,  150 => 36,  147 => 47,  132 => 52,  127 => 71,  117 => 36,  113 => 24,  86 => 16,  83 => 32,  78 => 25,  68 => 18,  64 => 14,  61 => 13,  48 => 5,  39 => 3,  32 => 2,  24 => 11,  22 => 2,  23 => 3,  20 => 2,  17 => 1,  144 => 46,  138 => 32,  130 => 46,  124 => 24,  121 => 34,  115 => 40,  111 => 36,  108 => 31,  99 => 25,  94 => 17,  91 => 17,  88 => 33,  85 => 31,  77 => 25,  74 => 13,  71 => 12,  65 => 10,  62 => 8,  58 => 12,  54 => 10,  51 => 14,  42 => 12,  38 => 3,  35 => 5,  31 => 2,  28 => 1,);
    }
}
