<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_9658128d2df7b8968140936c1dd2ca1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Group:new_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  21 => 3,  467 => 238,  464 => 237,  459 => 230,  456 => 229,  451 => 226,  448 => 225,  442 => 220,  422 => 200,  401 => 182,  397 => 181,  393 => 180,  382 => 172,  378 => 171,  368 => 164,  364 => 163,  359 => 161,  351 => 155,  348 => 154,  341 => 142,  338 => 141,  332 => 137,  320 => 144,  318 => 141,  311 => 137,  307 => 135,  304 => 134,  299 => 71,  294 => 37,  289 => 31,  283 => 28,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  263 => 23,  258 => 21,  254 => 20,  250 => 18,  247 => 17,  241 => 5,  233 => 334,  231 => 237,  222 => 229,  219 => 228,  217 => 225,  203 => 216,  201 => 154,  198 => 153,  125 => 71,  58 => 33,  56 => 31,  36 => 6,  91 => 30,  68 => 15,  43 => 8,  209 => 220,  205 => 82,  196 => 134,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 14,  133 => 74,  124 => 41,  111 => 37,  107 => 58,  80 => 24,  69 => 20,  63 => 18,  60 => 13,  52 => 15,  97 => 34,  95 => 21,  88 => 29,  78 => 25,  75 => 45,  71 => 14,  25 => 4,  82 => 27,  72 => 16,  64 => 21,  53 => 8,  34 => 3,  92 => 20,  86 => 28,  79 => 40,  46 => 7,  37 => 4,  19 => 2,  44 => 6,  27 => 4,  49 => 11,  42 => 11,  40 => 5,  33 => 5,  29 => 4,  26 => 3,  224 => 232,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  99 => 52,  77 => 46,  74 => 27,  57 => 10,  47 => 13,  39 => 7,  32 => 7,  24 => 13,  22 => 3,  30 => 1,  23 => 3,  20 => 2,  17 => 1,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 50,  89 => 49,  87 => 29,  84 => 47,  81 => 26,  73 => 21,  70 => 24,  67 => 13,  62 => 13,  59 => 23,  55 => 14,  51 => 17,  48 => 9,  41 => 9,  38 => 8,  35 => 7,  31 => 5,  28 => 1,);
    }
}
