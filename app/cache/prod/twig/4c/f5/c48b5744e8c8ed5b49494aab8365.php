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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "contracts"));
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
            if (($this->getAttribute($this->getContext($context, "loop"), "index") % 2 == 1)) {
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
            if ((!(null === $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "picture")))) {
                // line 20
                echo "\t\t\t\t<div class=\"avatar\"><a href=\"#\"><img style=\"width:45px; height:45px;\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "picture"), "url"), "html", null, true);
                echo ".";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "picture"), "extension"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "company"), "html", null, true);
            echo "</p>
\t\t\t\t\t<p>Date de votre signature ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "contract"), "creaDate"), "d/m/y"), "html", null, true);
            echo "</p>
\t\t\t\t\t<p>Date de sa signature ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "contract"), "signDate"), "d/m/y"), "html", null, true);
            echo "</p>
\t\t\t\t\t<div class=\"tail\"></div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"author\"><p><a href=\"#\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "lastName"), "html", null, true);
            echo " </a> <span class=\"position\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "job"), "html", null, true);
            echo "</span></p></div>
\t\t\t</div>
\t\t\t<div class=\"clearboth\"></div>
\t\t</div>
\t</div>

\t";
            // line 38
            if (($this->getAttribute($this->getContext($context, "loop"), "index") % 2 == 0)) {
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
        $this->env->loadTemplate("MakinMindProjectBundle:Project:sidebar_owner_project.html.twig")->display(array_merge($context, array("project" => $this->getContext($context, "project"))));
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
        return array (  149 => 38,  98 => 18,  181 => 49,  175 => 46,  172 => 45,  112 => 28,  191 => 49,  167 => 53,  121 => 26,  115 => 34,  101 => 19,  150 => 53,  140 => 49,  136 => 32,  119 => 39,  114 => 29,  249 => 76,  243 => 73,  239 => 72,  229 => 68,  225 => 67,  221 => 66,  207 => 61,  197 => 57,  187 => 53,  183 => 52,  159 => 43,  155 => 52,  106 => 24,  157 => 68,  128 => 52,  118 => 45,  76 => 13,  85 => 16,  296 => 122,  290 => 119,  278 => 113,  261 => 99,  257 => 78,  253 => 77,  248 => 95,  244 => 94,  240 => 93,  235 => 71,  227 => 89,  218 => 86,  214 => 85,  186 => 72,  182 => 45,  173 => 48,  169 => 47,  164 => 65,  160 => 64,  151 => 39,  147 => 44,  143 => 46,  138 => 44,  130 => 38,  100 => 22,  96 => 25,  83 => 25,  61 => 8,  45 => 4,  66 => 11,  65 => 8,  21 => 2,  467 => 238,  464 => 237,  459 => 230,  456 => 229,  451 => 226,  448 => 225,  442 => 220,  422 => 200,  401 => 182,  397 => 181,  393 => 180,  382 => 172,  378 => 171,  368 => 164,  364 => 163,  359 => 161,  351 => 155,  348 => 154,  341 => 142,  338 => 141,  332 => 137,  320 => 144,  318 => 141,  311 => 137,  307 => 135,  304 => 134,  299 => 71,  294 => 37,  289 => 31,  283 => 115,  279 => 27,  275 => 26,  271 => 83,  267 => 82,  263 => 81,  258 => 21,  254 => 20,  250 => 18,  247 => 17,  241 => 5,  233 => 334,  231 => 90,  222 => 87,  219 => 228,  217 => 225,  203 => 216,  201 => 58,  198 => 153,  125 => 27,  58 => 12,  56 => 7,  36 => 5,  91 => 21,  68 => 18,  43 => 6,  209 => 83,  205 => 82,  196 => 134,  192 => 78,  189 => 48,  178 => 71,  176 => 70,  165 => 46,  161 => 36,  152 => 58,  148 => 57,  145 => 38,  141 => 43,  134 => 56,  132 => 53,  127 => 36,  123 => 31,  109 => 26,  93 => 18,  90 => 14,  54 => 7,  133 => 39,  124 => 35,  111 => 22,  107 => 29,  80 => 16,  69 => 12,  63 => 16,  60 => 8,  52 => 6,  97 => 39,  95 => 22,  88 => 19,  78 => 14,  75 => 13,  71 => 11,  25 => 4,  82 => 16,  72 => 16,  64 => 9,  53 => 6,  34 => 5,  92 => 20,  86 => 17,  79 => 14,  46 => 4,  37 => 5,  19 => 2,  44 => 4,  27 => 3,  49 => 5,  42 => 6,  40 => 3,  33 => 8,  29 => 4,  26 => 5,  224 => 232,  215 => 63,  211 => 62,  204 => 84,  200 => 83,  195 => 80,  193 => 56,  190 => 73,  188 => 77,  185 => 46,  179 => 48,  177 => 69,  171 => 67,  162 => 63,  158 => 53,  156 => 42,  153 => 45,  146 => 55,  142 => 60,  137 => 36,  131 => 38,  126 => 33,  120 => 31,  117 => 24,  103 => 20,  99 => 23,  77 => 14,  74 => 12,  57 => 7,  47 => 5,  39 => 3,  32 => 2,  24 => 11,  22 => 3,  30 => 3,  23 => 3,  20 => 2,  17 => 1,  135 => 50,  129 => 28,  122 => 46,  116 => 34,  113 => 37,  108 => 29,  104 => 41,  102 => 27,  94 => 16,  89 => 17,  87 => 13,  84 => 16,  81 => 24,  73 => 13,  70 => 10,  67 => 12,  62 => 13,  59 => 8,  55 => 7,  51 => 19,  48 => 5,  41 => 12,  38 => 3,  35 => 9,  31 => 2,  28 => 1,);
    }
}
