<?php

/* MakinMindProjectBundle:Project:owner_project_list_developers.html.twig */
class __TwigTemplate_4cf5c48b5744e8c8ed5b49494aab8365 extends Twig_Template
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
        echo " :: Développeurs embauchés";
    }

    // line 3
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Développeurs embauchés";
    }

    // line 4
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <span>Développeurs</span>
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

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t";
        if (isset($context["contracts"])) { $_contracts_ = $context["contracts"]; } else { $_contracts_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_contracts_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 13
            echo "\t";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if (($this->getAttribute($_loop_, "index") % 2 == 1)) {
                // line 14
                echo "\t<div class=\"one_half\">
\t";
            } else {
                // line 16
                echo "\t<div class=\"one_half last\">
\t";
            }
            // line 18
            echo "\t\t<div class=\"block_testimonials_1\">
\t\t\t";
            // line 19
            if (isset($context["contract"])) { $_contract_ = $context["contract"]; } else { $_contract_ = null; }
            if ((!(null === $this->getAttribute($this->getAttribute($_contract_, "worker"), "picture")))) {
                // line 20
                echo "\t\t\t\t<div class=\"avatar\"><a href=\"#\"><img style=\"width:45px; height:45px;\" src=\"";
                if (isset($context["contract"])) { $_contract_ = $context["contract"]; } else { $_contract_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_contract_, "worker"), "picture"), "url"), "html", null, true);
                echo ".";
                if (isset($context["contract"])) { $_contract_ = $context["contract"]; } else { $_contract_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_contract_, "worker"), "picture"), "extension"), "html", null, true);
                echo "\" alt=\"user avatar\"></a></div>
\t\t\t";
            } else {
                // line 22
                echo "\t\t\t\t<div class=\"avatar\"><a href=\"#\"><img style=\"width:45px; height:45px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown.gif"), "html", null, true);
                echo "\" alt=\"user unknown avatar\"></a></div>
\t\t\t";
            }
            // line 24
            echo "\t\t\t<div class=\"content\">
\t\t\t\t<div class=\"text\">
\t\t\t\t\t<p>Travaille chez ";
            // line 26
            if (isset($context["contract"])) { $_contract_ = $context["contract"]; } else { $_contract_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_contract_, "worker"), "company"), "html", null, true);
            echo "</p>
\t\t\t\t\t<p>Date de votre signature ";
            // line 27
            if (isset($context["contract"])) { $_contract_ = $context["contract"]; } else { $_contract_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_contract_, "creaDate"), "d/m/y"), "html", null, true);
            echo "</p>
\t\t\t\t\t<p>Date de sa signature ";
            // line 28
            if (isset($context["contract"])) { $_contract_ = $context["contract"]; } else { $_contract_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_contract_, "signDate"), "d/m/y"), "html", null, true);
            echo "</p>
\t\t\t\t\t<div class=\"tail\"></div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"author\"><p><a href=\"#\">";
            // line 32
            if (isset($context["contract"])) { $_contract_ = $context["contract"]; } else { $_contract_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_contract_, "worker"), "firstName"), "html", null, true);
            echo " ";
            if (isset($context["contract"])) { $_contract_ = $context["contract"]; } else { $_contract_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_contract_, "worker"), "lastName"), "html", null, true);
            echo " </a> <span class=\"position\">";
            if (isset($context["contract"])) { $_contract_ = $context["contract"]; } else { $_contract_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_contract_, "worker"), "job"), "html", null, true);
            echo "</span></p></div>
\t\t\t</div>
\t\t\t<div class=\"clearboth\"></div>
\t\t</div>
\t</div>

\t";
            // line 38
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if (($this->getAttribute($_loop_, "index") % 2 == 0)) {
                // line 39
                echo "\t<div class=\"clearboth\"></div>
\t<div class=\"separator\" style=\"height:34px;\"></div>
\t";
            }
            // line 42
            echo "\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 45
    public function block_right($context, array $blocks = array())
    {
        // line 46
        echo "<div class=\"sidebar\">
\t<div class=\"separator\" style=\"height:37px;\"></div>
\t\t";
        // line 48
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        $this->env->loadTemplate("MakinMindProjectBundle:Project:sidebar_owner_project.html.twig")->display(array_merge($context, array("project" => $_project_)));
        // line 49
        echo "\t<div class=\"separator\" style=\"height:40px;\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MakinMindProjectBundle:Project:owner_project_list_developers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 42,  163 => 39,  103 => 19,  100 => 18,  196 => 60,  181 => 53,  128 => 31,  174 => 36,  93 => 19,  142 => 39,  139 => 38,  114 => 25,  162 => 54,  159 => 53,  148 => 49,  125 => 39,  97 => 29,  164 => 52,  151 => 46,  145 => 44,  137 => 38,  308 => 82,  303 => 81,  286 => 76,  279 => 73,  274 => 72,  245 => 63,  240 => 62,  223 => 57,  218 => 56,  189 => 57,  184 => 45,  177 => 43,  167 => 53,  133 => 31,  59 => 8,  157 => 67,  149 => 61,  116 => 22,  106 => 20,  76 => 21,  69 => 12,  98 => 20,  349 => 122,  342 => 119,  328 => 113,  310 => 99,  305 => 98,  300 => 97,  294 => 95,  289 => 94,  284 => 93,  278 => 91,  268 => 89,  262 => 68,  257 => 67,  246 => 83,  241 => 82,  236 => 81,  192 => 65,  187 => 46,  171 => 60,  160 => 38,  155 => 37,  131 => 27,  126 => 26,  120 => 41,  110 => 33,  72 => 10,  49 => 20,  41 => 3,  81 => 14,  21 => 3,  469 => 238,  466 => 237,  461 => 230,  458 => 229,  453 => 226,  450 => 225,  444 => 220,  424 => 200,  403 => 182,  399 => 181,  395 => 180,  384 => 172,  380 => 171,  370 => 164,  366 => 163,  361 => 161,  353 => 155,  350 => 154,  343 => 142,  340 => 141,  334 => 115,  322 => 144,  320 => 141,  313 => 83,  309 => 135,  306 => 134,  301 => 71,  296 => 78,  291 => 77,  285 => 28,  281 => 27,  277 => 26,  273 => 90,  269 => 71,  265 => 23,  260 => 21,  256 => 20,  252 => 66,  243 => 5,  233 => 237,  226 => 232,  221 => 228,  205 => 48,  203 => 68,  200 => 153,  198 => 45,  135 => 36,  75 => 23,  53 => 6,  70 => 11,  209 => 78,  206 => 52,  201 => 46,  194 => 49,  191 => 48,  186 => 56,  180 => 63,  176 => 61,  166 => 45,  158 => 44,  153 => 55,  143 => 48,  134 => 33,  123 => 40,  118 => 28,  90 => 26,  87 => 30,  66 => 11,  60 => 8,  146 => 60,  136 => 28,  122 => 24,  107 => 34,  101 => 52,  95 => 29,  82 => 28,  73 => 20,  67 => 9,  52 => 6,  109 => 24,  104 => 23,  96 => 16,  84 => 16,  80 => 14,  26 => 3,  34 => 5,  112 => 24,  102 => 19,  89 => 17,  63 => 7,  56 => 7,  43 => 6,  92 => 14,  79 => 14,  57 => 7,  46 => 7,  37 => 5,  33 => 5,  29 => 4,  19 => 1,  44 => 4,  27 => 5,  55 => 7,  45 => 4,  36 => 5,  50 => 5,  47 => 5,  30 => 3,  25 => 4,  249 => 17,  239 => 90,  235 => 61,  228 => 58,  224 => 73,  219 => 72,  217 => 79,  214 => 71,  211 => 53,  208 => 49,  202 => 72,  199 => 71,  193 => 59,  182 => 37,  178 => 61,  175 => 60,  172 => 42,  165 => 55,  161 => 68,  156 => 51,  154 => 50,  150 => 43,  147 => 47,  132 => 35,  127 => 71,  117 => 36,  113 => 29,  86 => 17,  83 => 16,  78 => 13,  68 => 8,  64 => 11,  61 => 13,  48 => 5,  39 => 3,  32 => 2,  24 => 11,  22 => 2,  23 => 3,  20 => 2,  17 => 1,  144 => 32,  138 => 32,  130 => 35,  124 => 24,  121 => 29,  115 => 36,  111 => 36,  108 => 31,  99 => 21,  94 => 21,  91 => 17,  88 => 13,  85 => 31,  77 => 13,  74 => 11,  71 => 10,  65 => 10,  62 => 8,  58 => 12,  54 => 7,  51 => 5,  42 => 12,  38 => 3,  35 => 5,  31 => 2,  28 => 1,);
    }
}
