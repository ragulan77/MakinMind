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
                // line 24
                if ((!(null === $this->getAttribute($this->getContext($context, "project"), "logo")))) {
                    // line 25
                    echo "\t\t\t\t\t<img style=\"width:290px; height:180px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "logo"), "url"), "html", null, true);
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
                if ((!(null === $this->getAttribute($this->getContext($context, "project"), "logo")))) {
                    // line 34
                    echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "logo"), "url"), "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "logo"), "extension"), "html", null, true);
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
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "name")), "html", null, true);
                echo "</span></h6>
\t\t\t\t<p class=\"tags\">
\t\t\t\t\t<a href=\"";
                // line 46
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
        return array (  114 => 33,  249 => 76,  243 => 73,  239 => 72,  229 => 68,  225 => 67,  221 => 66,  207 => 61,  197 => 57,  187 => 53,  183 => 52,  159 => 43,  155 => 52,  106 => 24,  157 => 68,  128 => 52,  118 => 45,  76 => 30,  85 => 16,  296 => 122,  290 => 119,  278 => 113,  261 => 99,  257 => 78,  253 => 77,  248 => 95,  244 => 94,  240 => 93,  235 => 71,  227 => 89,  218 => 86,  214 => 85,  186 => 72,  182 => 71,  173 => 48,  169 => 47,  164 => 65,  160 => 64,  151 => 41,  147 => 60,  143 => 46,  138 => 44,  130 => 38,  100 => 40,  96 => 25,  83 => 19,  61 => 8,  45 => 4,  66 => 10,  65 => 10,  21 => 2,  467 => 238,  464 => 237,  459 => 230,  456 => 229,  451 => 226,  448 => 225,  442 => 220,  422 => 200,  401 => 182,  397 => 181,  393 => 180,  382 => 172,  378 => 171,  368 => 164,  364 => 163,  359 => 161,  351 => 155,  348 => 154,  341 => 142,  338 => 141,  332 => 137,  320 => 144,  318 => 141,  311 => 137,  307 => 135,  304 => 134,  299 => 71,  294 => 37,  289 => 31,  283 => 115,  279 => 27,  275 => 26,  271 => 83,  267 => 82,  263 => 81,  258 => 21,  254 => 20,  250 => 18,  247 => 17,  241 => 5,  233 => 334,  231 => 90,  222 => 87,  219 => 228,  217 => 225,  203 => 216,  201 => 58,  198 => 153,  125 => 71,  58 => 12,  56 => 7,  36 => 5,  91 => 37,  68 => 18,  43 => 6,  209 => 83,  205 => 82,  196 => 134,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 46,  161 => 61,  152 => 58,  148 => 57,  145 => 38,  141 => 37,  134 => 56,  132 => 53,  127 => 32,  123 => 31,  109 => 26,  93 => 18,  90 => 31,  54 => 10,  133 => 74,  124 => 36,  111 => 37,  107 => 58,  80 => 15,  69 => 11,  63 => 16,  60 => 8,  52 => 11,  97 => 39,  95 => 31,  88 => 20,  78 => 30,  75 => 23,  71 => 12,  25 => 4,  82 => 28,  72 => 16,  64 => 14,  53 => 10,  34 => 5,  92 => 20,  86 => 30,  79 => 24,  46 => 4,  37 => 5,  19 => 2,  44 => 6,  27 => 3,  49 => 5,  42 => 6,  40 => 8,  33 => 8,  29 => 4,  26 => 5,  224 => 232,  215 => 63,  211 => 62,  204 => 84,  200 => 83,  195 => 80,  193 => 56,  190 => 73,  188 => 77,  185 => 76,  179 => 51,  177 => 69,  171 => 67,  162 => 63,  158 => 53,  156 => 63,  153 => 67,  146 => 55,  142 => 60,  137 => 36,  131 => 33,  126 => 46,  120 => 39,  117 => 28,  103 => 23,  99 => 22,  77 => 14,  74 => 13,  57 => 20,  47 => 7,  39 => 3,  32 => 2,  24 => 11,  22 => 3,  30 => 3,  23 => 3,  20 => 2,  17 => 1,  135 => 50,  129 => 47,  122 => 46,  116 => 34,  113 => 27,  108 => 29,  104 => 41,  102 => 27,  94 => 24,  89 => 17,  87 => 36,  84 => 16,  81 => 18,  73 => 13,  70 => 31,  67 => 15,  62 => 13,  59 => 11,  55 => 7,  51 => 19,  48 => 5,  41 => 12,  38 => 3,  35 => 9,  31 => 2,  28 => 1,);
    }
}
