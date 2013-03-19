<?php

/* MakinMindProjectBundle:Project:owner_projects.html.twig */
class __TwigTemplate_f835af1e837ad81374e2071cd175ea00 extends Twig_Template
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
        echo " :: Mes projets";
    }

    // line 3
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Mes projets";
    }

    // line 4
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <span>Mes projets</span>
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

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
\t<!-- block pour le filtrage il faudra le modifier ! -->
\t<div id=\"filter\" class=\"block_filter_1\">
\t\t<ul>
\t\t\t<li class=\"active\"><a href=\"all\">All</a></li>
\t\t\t<!--<li><a href=\"web\">Web Design</a></li>
\t\t\t<li><a href=\"branding\">Branding</a></li>
\t\t\t<li><a href=\"video\">Video</a></li> -->
\t\t</ul>
\t</div>

\t<div id=\"filtered_container\" class=\"block_portfolio_3 c_3\">
\t";
        // line 24
        if ((!(null === $this->getContext($context, "projects")))) {
            // line 25
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "projects"));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 26
                echo "\t\t<div class=\"item web\">
\t\t\t<div class=\"image\">
\t\t\t\t";
                // line 28
                if ((!(null === $this->getAttribute($this->getContext($context, "project"), "logo")))) {
                    // line 29
                    echo "\t\t\t\t\t<img style=\"width:290px; height:180px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "logo"), "url"), "html", null, true);
                    echo "\" alt=\"project logo\">
\t\t\t\t";
                } else {
                    // line 31
                    echo "\t\t\t\t\t<img style=\"witdh:290px; height:180px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown_project.jpg"), "html", null, true);
                    echo "\" alt=\"project logo\">
\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t<div class=\"info\">
\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                // line 36
                if ((!(null === $this->getAttribute($this->getContext($context, "project"), "logo")))) {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "logo"), "url"), "html", null, true);
                    echo "\" data-rel=\"prettyPhoto\" class=\"icon_zoom\" title=\"\">Zoom</a></li>
\t\t\t\t\t\t\t";
                } else {
                    // line 39
                    echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown_project.jpg"), "html", null, true);
                    echo "\" data-rel=\"prettyPhoto\" class=\"icon_zoom\" title=\"\">Zoom</a></li>
\t\t\t\t\t\t\t";
                }
                // line 41
                echo "\t\t\t\t\t\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_project", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
                echo "\" class=\"icon_link\">Link</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"description\">
\t\t\t\t<h6><span>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "shortDescription"), "html", null, true);
                echo "</span></h6>
\t\t\t\t<p class=\"tags\"><a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_project", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
                echo "\">Voir le projet</a></p>
\t\t\t</div>
\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 53
            echo "\t";
        }
        // line 54
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "MakinMindProjectBundle:Project:owner_projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 53,  140 => 49,  136 => 48,  119 => 39,  114 => 33,  249 => 76,  243 => 73,  239 => 72,  229 => 68,  225 => 67,  221 => 66,  207 => 61,  197 => 57,  187 => 53,  183 => 52,  159 => 43,  155 => 52,  106 => 33,  157 => 68,  128 => 52,  118 => 45,  76 => 30,  85 => 16,  296 => 122,  290 => 119,  278 => 113,  261 => 99,  257 => 78,  253 => 77,  248 => 95,  244 => 94,  240 => 93,  235 => 71,  227 => 89,  218 => 86,  214 => 85,  186 => 72,  182 => 71,  173 => 48,  169 => 47,  164 => 65,  160 => 64,  151 => 41,  147 => 60,  143 => 46,  138 => 44,  130 => 38,  100 => 31,  96 => 25,  83 => 25,  61 => 8,  45 => 4,  66 => 10,  65 => 10,  21 => 2,  467 => 238,  464 => 237,  459 => 230,  456 => 229,  451 => 226,  448 => 225,  442 => 220,  422 => 200,  401 => 182,  397 => 181,  393 => 180,  382 => 172,  378 => 171,  368 => 164,  364 => 163,  359 => 161,  351 => 155,  348 => 154,  341 => 142,  338 => 141,  332 => 137,  320 => 144,  318 => 141,  311 => 137,  307 => 135,  304 => 134,  299 => 71,  294 => 37,  289 => 31,  283 => 115,  279 => 27,  275 => 26,  271 => 83,  267 => 82,  263 => 81,  258 => 21,  254 => 20,  250 => 18,  247 => 17,  241 => 5,  233 => 334,  231 => 90,  222 => 87,  219 => 228,  217 => 225,  203 => 216,  201 => 58,  198 => 153,  125 => 41,  58 => 12,  56 => 7,  36 => 5,  91 => 37,  68 => 18,  43 => 6,  209 => 83,  205 => 82,  196 => 134,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 46,  161 => 61,  152 => 58,  148 => 57,  145 => 38,  141 => 37,  134 => 56,  132 => 53,  127 => 32,  123 => 31,  109 => 26,  93 => 18,  90 => 31,  54 => 7,  133 => 74,  124 => 36,  111 => 36,  107 => 58,  80 => 15,  69 => 11,  63 => 16,  60 => 8,  52 => 11,  97 => 39,  95 => 31,  88 => 26,  78 => 30,  75 => 23,  71 => 12,  25 => 4,  82 => 28,  72 => 16,  64 => 11,  53 => 10,  34 => 5,  92 => 28,  86 => 30,  79 => 24,  46 => 4,  37 => 5,  19 => 2,  44 => 4,  27 => 3,  49 => 5,  42 => 6,  40 => 8,  33 => 8,  29 => 4,  26 => 5,  224 => 232,  215 => 63,  211 => 62,  204 => 84,  200 => 83,  195 => 80,  193 => 56,  190 => 73,  188 => 77,  185 => 76,  179 => 51,  177 => 69,  171 => 67,  162 => 63,  158 => 53,  156 => 63,  153 => 54,  146 => 55,  142 => 60,  137 => 36,  131 => 33,  126 => 46,  120 => 39,  117 => 28,  103 => 23,  99 => 22,  77 => 14,  74 => 13,  57 => 20,  47 => 5,  39 => 3,  32 => 2,  24 => 11,  22 => 3,  30 => 3,  23 => 3,  20 => 2,  17 => 1,  135 => 50,  129 => 47,  122 => 46,  116 => 34,  113 => 37,  108 => 29,  104 => 41,  102 => 27,  94 => 29,  89 => 17,  87 => 36,  84 => 16,  81 => 24,  73 => 13,  70 => 31,  67 => 12,  62 => 13,  59 => 8,  55 => 7,  51 => 19,  48 => 5,  41 => 12,  38 => 3,  35 => 9,  31 => 2,  28 => 1,);
    }
}
