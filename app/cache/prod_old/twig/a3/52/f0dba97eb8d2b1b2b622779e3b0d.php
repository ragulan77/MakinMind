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
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("MakinMindProjectBundle_owner_project_description", array("id" => $this->getAttribute($_project_, "id"))), "html", null, true);
        echo "\">";
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($_project_, "name")), "html", null, true);
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
        if (isset($context["requests"])) { $_requests_ = $context["requests"]; } else { $_requests_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_requests_);
        foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
            // line 17
            echo "\t\t<div class=\"item\">
\t\t\t<div class=\"image\">
\t\t\t\t";
            // line 19
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if ((!(null === $this->getAttribute($this->getAttribute($_request_, "user"), "picture")))) {
                // line 20
                echo "\t\t\t\t\t<img style=\"height:200px;\" src=\"";
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_request_, "user"), "picture"), "url"), "html", null, true);
                echo "\" alt=\"";
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_request_, "user"), "lastname"), "html", null, true);
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
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if ((!(null === $this->getAttribute($this->getAttribute($_request_, "user"), "picture")))) {
                // line 29
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_request_, "user"), "picture"), "url"), "html", null, true);
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
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, ((twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($_request_, "user"), "firstname")) . " ") . twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($_request_, "user"), "lastname"))), "html", null, true);
            echo "</h6>
\t\t\t\t<!--<p class=\"tags\"><a href=\"#\">Web Design</a></p>-->
\t\t\t\t<p>Né(e) le ";
            // line 43
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($_request_, "user"), "birthdate"), "d/m/Y"), "html", null, true);
            echo " en ";
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_request_, "user"), "country"), "html", null, true);
            echo "</p>
\t\t\t\t<p>";
            // line 44
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute($_request_, "user"), "job")), "html", null, true);
            echo " chez ";
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_request_, "user"), "company"), "html", null, true);
            echo "</p>
\t\t\t\t<p>Tél : ";
            // line 45
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_request_, "user"), "phone"), "html", null, true);
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
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        $this->env->loadTemplate("MakinMindProjectBundle:Project:sidebar_owner_project.html.twig")->display(array_merge($context, array("project" => $_project_)));
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
        return array (  196 => 60,  181 => 53,  128 => 31,  174 => 36,  93 => 19,  142 => 39,  139 => 38,  114 => 25,  162 => 54,  159 => 53,  148 => 49,  125 => 39,  97 => 29,  164 => 52,  151 => 46,  145 => 44,  137 => 38,  308 => 82,  303 => 81,  286 => 76,  279 => 73,  274 => 72,  245 => 63,  240 => 62,  223 => 57,  218 => 56,  189 => 57,  184 => 46,  177 => 43,  167 => 53,  133 => 31,  59 => 8,  157 => 67,  149 => 61,  116 => 26,  106 => 22,  76 => 21,  69 => 18,  98 => 20,  349 => 122,  342 => 119,  328 => 113,  310 => 99,  305 => 98,  300 => 97,  294 => 95,  289 => 94,  284 => 93,  278 => 91,  268 => 89,  262 => 68,  257 => 67,  246 => 83,  241 => 82,  236 => 81,  192 => 65,  187 => 64,  171 => 60,  160 => 38,  155 => 37,  131 => 41,  126 => 28,  120 => 41,  110 => 33,  72 => 10,  49 => 20,  41 => 3,  81 => 14,  21 => 3,  469 => 238,  466 => 237,  461 => 230,  458 => 229,  453 => 226,  450 => 225,  444 => 220,  424 => 200,  403 => 182,  399 => 181,  395 => 180,  384 => 172,  380 => 171,  370 => 164,  366 => 163,  361 => 161,  353 => 155,  350 => 154,  343 => 142,  340 => 141,  334 => 115,  322 => 144,  320 => 141,  313 => 83,  309 => 135,  306 => 134,  301 => 71,  296 => 78,  291 => 77,  285 => 28,  281 => 27,  277 => 26,  273 => 90,  269 => 71,  265 => 23,  260 => 21,  256 => 20,  252 => 66,  243 => 5,  233 => 237,  226 => 232,  221 => 228,  205 => 48,  203 => 68,  200 => 153,  198 => 45,  135 => 36,  75 => 23,  53 => 6,  70 => 11,  209 => 78,  206 => 52,  201 => 46,  194 => 48,  191 => 70,  186 => 56,  180 => 63,  176 => 61,  166 => 45,  158 => 44,  153 => 55,  143 => 48,  134 => 33,  123 => 40,  118 => 28,  90 => 26,  87 => 30,  66 => 9,  60 => 8,  146 => 60,  136 => 53,  122 => 34,  107 => 34,  101 => 52,  95 => 29,  82 => 28,  73 => 20,  67 => 9,  52 => 6,  109 => 24,  104 => 23,  96 => 20,  84 => 16,  80 => 14,  26 => 3,  34 => 5,  112 => 24,  102 => 19,  89 => 17,  63 => 7,  56 => 7,  43 => 6,  92 => 28,  79 => 14,  57 => 7,  46 => 7,  37 => 5,  33 => 5,  29 => 4,  19 => 1,  44 => 4,  27 => 5,  55 => 7,  45 => 4,  36 => 5,  50 => 5,  47 => 5,  30 => 3,  25 => 4,  249 => 17,  239 => 90,  235 => 61,  228 => 58,  224 => 73,  219 => 72,  217 => 79,  214 => 71,  211 => 53,  208 => 49,  202 => 72,  199 => 71,  193 => 59,  182 => 37,  178 => 61,  175 => 60,  172 => 42,  165 => 55,  161 => 68,  156 => 51,  154 => 50,  150 => 43,  147 => 47,  132 => 35,  127 => 71,  117 => 36,  113 => 29,  86 => 17,  83 => 16,  78 => 13,  68 => 8,  64 => 11,  61 => 13,  48 => 5,  39 => 3,  32 => 2,  24 => 11,  22 => 2,  23 => 3,  20 => 2,  17 => 1,  144 => 41,  138 => 32,  130 => 35,  124 => 24,  121 => 29,  115 => 36,  111 => 36,  108 => 31,  99 => 21,  94 => 21,  91 => 17,  88 => 33,  85 => 31,  77 => 13,  74 => 11,  71 => 10,  65 => 10,  62 => 8,  58 => 12,  54 => 7,  51 => 5,  42 => 12,  38 => 3,  35 => 5,  31 => 2,  28 => 1,);
    }
}
