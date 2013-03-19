<?php

/* MakinMindProjectBundle:Project:owner_project_list_candidates.html.twig */
class __TwigTemplate_a352f0dba97eb8d2b1b2b622779e3b0d extends Twig_Template
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
                echo "\t\t\t\t\t<img style=\"height:200px;\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "picture"), "url"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "lastname"), "html", null, true);
                echo " picture\"/
\t\t\t\t";
            } else {
                // line 22
                echo "\t\t\t\t\t<img style=\"height:200px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown.gif"), "html", null, true);
                echo "\" alt=\"unknown picture\"/>
\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t<div class=\"info\">
\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
            // line 28
            if ((!(null === $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "picture")))) {
                // line 29
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "picture"), "url"), "html", null, true);
                echo "\" data-rel=\"prettyPhoto\" class=\"icon_zoom\" title=\"\">Zoom</a>
\t\t\t\t\t\t\t\t";
            } else {
                // line 31
                echo "\t\t\t\t\t\t\t\t\t<img style=\"height:240px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown.gif"), "html", null, true);
                echo "\" alt=\"unknown picture\"/>
\t\t\t\t\t\t\t\t";
            }
            // line 33
            echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"url page user .html\" class=\"icon_link\">Link</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"description\">
\t\t\t\t<h6>";
            // line 41
            echo twig_escape_filter($this->env, ((twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "firstname")) . " ") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "lastname"))), "html", null, true);
            echo "</h6>
\t\t\t\t<!--<p class=\"tags\"><a href=\"#\">Web Design</a></p>-->
\t\t\t\t<p>Né(e) le ";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "birthdate"), "d/m/Y"), "html", null, true);
            echo " en ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "country"), "html", null, true);
            echo "</p>
\t\t\t\t<p>";
            // line 44
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "job")), "html", null, true);
            echo " chez ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "request"), "user"), "company"), "html", null, true);
            echo "</p>
\t\t\t\t<p>Tél : ";
            // line 45
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
        // line 53
        echo "</div>
";
    }

    // line 56
    public function block_right($context, array $blocks = array())
    {
        // line 57
        echo "<div class=\"sidebar\">
\t<div class=\"separator\" style=\"height:37px;\"></div>
\t\t";
        // line 59
        $this->env->loadTemplate("MakinMindProjectBundle:Project:sidebar_owner_project.html.twig")->display(array_merge($context, array("project" => $this->getContext($context, "project"))));
        // line 60
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
        return array (  181 => 60,  175 => 57,  172 => 56,  112 => 28,  191 => 49,  167 => 53,  121 => 35,  115 => 34,  101 => 26,  150 => 53,  140 => 49,  136 => 41,  119 => 39,  114 => 29,  249 => 76,  243 => 73,  239 => 72,  229 => 68,  225 => 67,  221 => 66,  207 => 61,  197 => 57,  187 => 53,  183 => 52,  159 => 43,  155 => 52,  106 => 24,  157 => 68,  128 => 52,  118 => 45,  76 => 13,  85 => 16,  296 => 122,  290 => 119,  278 => 113,  261 => 99,  257 => 78,  253 => 77,  248 => 95,  244 => 94,  240 => 93,  235 => 71,  227 => 89,  218 => 86,  214 => 85,  186 => 72,  182 => 45,  173 => 48,  169 => 47,  164 => 65,  160 => 64,  151 => 41,  147 => 44,  143 => 46,  138 => 44,  130 => 38,  100 => 22,  96 => 25,  83 => 25,  61 => 8,  45 => 4,  66 => 10,  65 => 8,  21 => 2,  467 => 238,  464 => 237,  459 => 230,  456 => 229,  451 => 226,  448 => 225,  442 => 220,  422 => 200,  401 => 182,  397 => 181,  393 => 180,  382 => 172,  378 => 171,  368 => 164,  364 => 163,  359 => 161,  351 => 155,  348 => 154,  341 => 142,  338 => 141,  332 => 137,  320 => 144,  318 => 141,  311 => 137,  307 => 135,  304 => 134,  299 => 71,  294 => 37,  289 => 31,  283 => 115,  279 => 27,  275 => 26,  271 => 83,  267 => 82,  263 => 81,  258 => 21,  254 => 20,  250 => 18,  247 => 17,  241 => 5,  233 => 334,  231 => 90,  222 => 87,  219 => 228,  217 => 225,  203 => 216,  201 => 58,  198 => 153,  125 => 41,  58 => 12,  56 => 7,  36 => 5,  91 => 21,  68 => 18,  43 => 6,  209 => 83,  205 => 82,  196 => 134,  192 => 78,  189 => 48,  178 => 71,  176 => 70,  165 => 46,  161 => 36,  152 => 58,  148 => 57,  145 => 38,  141 => 43,  134 => 56,  132 => 53,  127 => 36,  123 => 31,  109 => 26,  93 => 18,  90 => 19,  54 => 7,  133 => 39,  124 => 35,  111 => 36,  107 => 29,  80 => 16,  69 => 10,  63 => 16,  60 => 7,  52 => 6,  97 => 39,  95 => 22,  88 => 19,  78 => 14,  75 => 13,  71 => 11,  25 => 4,  82 => 16,  72 => 16,  64 => 9,  53 => 6,  34 => 5,  92 => 20,  86 => 17,  79 => 14,  46 => 4,  37 => 5,  19 => 2,  44 => 4,  27 => 3,  49 => 5,  42 => 6,  40 => 3,  33 => 8,  29 => 4,  26 => 5,  224 => 232,  215 => 63,  211 => 62,  204 => 84,  200 => 83,  195 => 80,  193 => 56,  190 => 73,  188 => 77,  185 => 46,  179 => 59,  177 => 69,  171 => 67,  162 => 63,  158 => 53,  156 => 63,  153 => 45,  146 => 55,  142 => 60,  137 => 36,  131 => 38,  126 => 33,  120 => 31,  117 => 28,  103 => 24,  99 => 23,  77 => 14,  74 => 12,  57 => 7,  47 => 5,  39 => 3,  32 => 2,  24 => 11,  22 => 3,  30 => 3,  23 => 3,  20 => 2,  17 => 1,  135 => 50,  129 => 47,  122 => 46,  116 => 34,  113 => 37,  108 => 29,  104 => 41,  102 => 27,  94 => 21,  89 => 17,  87 => 20,  84 => 16,  81 => 24,  73 => 13,  70 => 10,  67 => 12,  62 => 13,  59 => 8,  55 => 7,  51 => 19,  48 => 5,  41 => 12,  38 => 3,  35 => 9,  31 => 2,  28 => 1,);
    }
}
