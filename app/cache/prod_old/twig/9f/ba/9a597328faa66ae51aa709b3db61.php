<?php

/* FOSUserBundle::form.html.twig */
class __TwigTemplate_9fba9a597328faa66ae51aa709b3db61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'field_label' => array($this, 'block_field_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_errors', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('field_label', $context, $blocks);
    }

    // line 1
    public function block_form_errors($context, array $blocks = array())
    {
        // line 2
        echo "\t";
        ob_start();
        // line 3
        echo "\t\t";
        if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
        if ((twig_length_filter($this->env, $_errors_) > 0)) {
            // line 4
            echo "\t\t\t<div class=\"general_info_box error demo\"><a href=\"#\" class=\"close\">Fermer</a>
\t\t\t\t";
            // line 5
            if (isset($context["errors"])) { $_errors_ = $context["errors"]; } else { $_errors_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_errors_);
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 6
                echo "\t\t\t\t\t<p>";
                if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($_error_, "messageTemplate"), $this->getAttribute($_error_, "messageParameters"), "validators"), "html", null, true);
                echo "</p>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 8
            echo "\t\t\t</div>
\t\t";
        }
        // line 10
        echo "\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 13
    public function block_field_label($context, array $blocks = array())
    {
        // line 14
        echo "\t";
        ob_start();
        // line 15
        echo "\t    <label for=\"";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $_id_, "html", null, true);
        echo "\">";
        if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_id_, array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  81 => 24,  21 => 12,  469 => 238,  466 => 237,  461 => 230,  458 => 229,  453 => 226,  450 => 225,  444 => 220,  424 => 200,  403 => 182,  399 => 181,  395 => 180,  384 => 172,  380 => 171,  370 => 164,  366 => 163,  361 => 161,  353 => 155,  350 => 154,  343 => 142,  340 => 141,  334 => 137,  322 => 144,  320 => 141,  313 => 137,  309 => 135,  306 => 134,  301 => 71,  296 => 37,  291 => 31,  285 => 28,  281 => 27,  277 => 26,  273 => 25,  269 => 24,  265 => 23,  260 => 21,  256 => 20,  252 => 18,  243 => 5,  233 => 237,  226 => 232,  221 => 228,  205 => 216,  203 => 154,  200 => 153,  198 => 134,  135 => 74,  75 => 45,  53 => 30,  70 => 13,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 49,  134 => 44,  123 => 40,  118 => 39,  90 => 28,  87 => 29,  66 => 17,  60 => 10,  146 => 50,  136 => 41,  122 => 37,  107 => 34,  101 => 52,  95 => 29,  82 => 25,  73 => 20,  67 => 17,  52 => 11,  109 => 58,  104 => 34,  96 => 50,  84 => 14,  80 => 24,  26 => 4,  34 => 3,  112 => 21,  102 => 19,  89 => 16,  63 => 13,  56 => 8,  43 => 6,  92 => 28,  79 => 40,  57 => 10,  46 => 6,  37 => 5,  33 => 5,  29 => 6,  19 => 1,  44 => 8,  27 => 3,  55 => 9,  45 => 6,  36 => 7,  50 => 9,  47 => 10,  30 => 1,  25 => 3,  249 => 17,  239 => 90,  235 => 334,  228 => 84,  224 => 229,  219 => 225,  217 => 79,  214 => 79,  211 => 220,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  132 => 39,  127 => 71,  117 => 36,  113 => 34,  86 => 47,  83 => 25,  78 => 46,  68 => 14,  64 => 37,  61 => 15,  48 => 11,  39 => 7,  32 => 5,  24 => 13,  22 => 4,  23 => 3,  20 => 2,  17 => 1,  144 => 46,  138 => 46,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 36,  108 => 31,  99 => 33,  94 => 29,  91 => 49,  88 => 16,  85 => 26,  77 => 23,  74 => 21,  71 => 15,  65 => 13,  62 => 15,  58 => 33,  54 => 13,  51 => 17,  42 => 9,  38 => 4,  35 => 7,  31 => 2,  28 => 1,);
    }
}
