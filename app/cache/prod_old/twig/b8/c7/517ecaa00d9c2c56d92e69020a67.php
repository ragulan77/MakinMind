<?php

/* MakinMindProjectBundle:Project:owner_project_status.html.twig */
class __TwigTemplate_b8c7517ecaa00d9c2c56d92e69020a67 extends Twig_Template
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
        echo " :: Status recrutement";
    }

    // line 3
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Status du recrutement";
    }

    // line 4
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <span>Recrutement</span>
";
    }

    // line 7
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 8
    public function block_content_type($context, array $blocks = array())
    {
        $this->displayParentBlock("content_type", $context, $blocks);
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
\t<h1>Etat du recrutement</h1>
\t";
        // line 15
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        if (($this->getAttribute($_project_, "recruitment") == 0)) {
            // line 16
            echo "\t<p>Le recrutement est actuellement <span style=\"color:red\">fermé</span>.</p>
\t";
        } else {
            // line 18
            echo "\t<p>Le recrutement est actuellement <span style=\"color:green\">ouvert</span>.</p>
\t";
        }
        // line 20
        echo "\t<form method=\"post\" action=\"";
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_project_status", array("id" => $this->getAttribute($_project_, "id"), "url" => $this->getAttribute($_project_, "url"))), "html", null, true);
        echo "\">
\t\t<p><input type=\"submit\" value=\"changer !\"/></p>
\t</form>
";
    }

    // line 25
    public function block_right($context, array $blocks = array())
    {
        // line 26
        echo "<div class=\"sidebar\">
\t<div class=\"separator\" style=\"height:37px;\"></div>
\t\t";
        // line 28
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        $this->env->loadTemplate("MakinMindProjectBundle:Project:sidebar_owner_project.html.twig")->display(array_merge($context, array("project" => $_project_)));
        // line 29
        echo "\t<div class=\"separator\" style=\"height:40px;\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MakinMindProjectBundle:Project:owner_project_status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 48,  183 => 45,  168 => 42,  163 => 39,  103 => 20,  100 => 19,  196 => 60,  181 => 53,  128 => 31,  174 => 36,  93 => 19,  142 => 39,  139 => 38,  114 => 25,  162 => 39,  159 => 38,  148 => 49,  125 => 39,  97 => 26,  164 => 52,  151 => 46,  145 => 44,  137 => 38,  308 => 82,  303 => 81,  286 => 76,  279 => 73,  274 => 72,  245 => 63,  240 => 62,  223 => 57,  218 => 56,  189 => 57,  184 => 45,  177 => 43,  167 => 42,  133 => 31,  59 => 8,  157 => 67,  149 => 61,  116 => 23,  106 => 21,  76 => 16,  69 => 13,  98 => 20,  349 => 122,  342 => 119,  328 => 113,  310 => 99,  305 => 98,  300 => 97,  294 => 95,  289 => 94,  284 => 93,  278 => 91,  268 => 89,  262 => 68,  257 => 67,  246 => 83,  241 => 82,  236 => 81,  192 => 65,  187 => 46,  171 => 60,  160 => 38,  155 => 37,  131 => 28,  126 => 27,  120 => 41,  110 => 33,  72 => 10,  49 => 20,  41 => 3,  81 => 14,  21 => 3,  469 => 238,  466 => 237,  461 => 230,  458 => 229,  453 => 226,  450 => 225,  444 => 220,  424 => 200,  403 => 182,  399 => 181,  395 => 180,  384 => 172,  380 => 171,  370 => 164,  366 => 163,  361 => 161,  353 => 155,  350 => 154,  343 => 142,  340 => 141,  334 => 115,  322 => 144,  320 => 141,  313 => 83,  309 => 135,  306 => 134,  301 => 71,  296 => 78,  291 => 77,  285 => 28,  281 => 27,  277 => 26,  273 => 90,  269 => 71,  265 => 23,  260 => 21,  256 => 20,  252 => 66,  243 => 5,  233 => 237,  226 => 232,  221 => 228,  205 => 48,  203 => 68,  200 => 153,  198 => 45,  135 => 36,  75 => 23,  53 => 6,  70 => 11,  209 => 78,  206 => 52,  201 => 46,  194 => 49,  191 => 48,  186 => 46,  180 => 63,  176 => 61,  166 => 45,  158 => 44,  153 => 55,  143 => 32,  134 => 33,  123 => 40,  118 => 28,  90 => 26,  87 => 30,  66 => 12,  60 => 8,  146 => 60,  136 => 29,  122 => 25,  107 => 34,  101 => 28,  95 => 29,  82 => 28,  73 => 15,  67 => 9,  52 => 6,  109 => 24,  104 => 29,  96 => 17,  84 => 20,  80 => 18,  26 => 3,  34 => 5,  112 => 24,  102 => 19,  89 => 17,  63 => 7,  56 => 7,  43 => 6,  92 => 15,  79 => 14,  57 => 7,  46 => 7,  37 => 5,  33 => 5,  29 => 4,  19 => 1,  44 => 4,  27 => 5,  55 => 7,  45 => 4,  36 => 5,  50 => 5,  47 => 5,  30 => 3,  25 => 4,  249 => 17,  239 => 90,  235 => 61,  228 => 58,  224 => 73,  219 => 72,  217 => 79,  214 => 71,  211 => 53,  208 => 49,  202 => 72,  199 => 71,  193 => 49,  182 => 37,  178 => 61,  175 => 60,  172 => 42,  165 => 55,  161 => 68,  156 => 51,  154 => 50,  150 => 43,  147 => 47,  132 => 35,  127 => 71,  117 => 36,  113 => 29,  86 => 17,  83 => 16,  78 => 13,  68 => 8,  64 => 11,  61 => 13,  48 => 5,  39 => 3,  32 => 2,  24 => 11,  22 => 2,  23 => 3,  20 => 2,  17 => 1,  144 => 32,  138 => 32,  130 => 35,  124 => 24,  121 => 29,  115 => 36,  111 => 36,  108 => 31,  99 => 21,  94 => 25,  91 => 17,  88 => 14,  85 => 31,  77 => 13,  74 => 11,  71 => 10,  65 => 10,  62 => 8,  58 => 12,  54 => 7,  51 => 5,  42 => 12,  38 => 3,  35 => 5,  31 => 2,  28 => 1,);
    }
}
