<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_640bd4c4e5afb7b38e1cba138dbf97d8 extends Twig_Template
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
        $this->env->loadTemplate("FOSUserBundle:Group:list_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  81 => 24,  21 => 2,  469 => 238,  466 => 237,  461 => 230,  458 => 229,  453 => 226,  450 => 225,  444 => 220,  424 => 200,  403 => 182,  399 => 181,  395 => 180,  384 => 172,  380 => 171,  370 => 164,  366 => 163,  361 => 161,  353 => 155,  350 => 154,  343 => 142,  340 => 141,  334 => 137,  322 => 144,  320 => 141,  313 => 137,  309 => 135,  306 => 134,  301 => 71,  296 => 37,  291 => 31,  285 => 28,  281 => 27,  277 => 26,  273 => 25,  269 => 24,  265 => 23,  260 => 21,  256 => 20,  252 => 18,  243 => 5,  233 => 237,  226 => 232,  221 => 228,  205 => 216,  203 => 154,  200 => 153,  198 => 134,  135 => 74,  75 => 45,  53 => 30,  70 => 13,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 49,  134 => 44,  123 => 40,  118 => 39,  90 => 28,  87 => 29,  66 => 17,  60 => 10,  146 => 50,  136 => 41,  122 => 37,  107 => 34,  101 => 52,  95 => 29,  82 => 25,  73 => 20,  67 => 17,  52 => 11,  109 => 58,  104 => 34,  96 => 50,  84 => 14,  80 => 24,  26 => 3,  34 => 3,  112 => 21,  102 => 19,  89 => 16,  63 => 13,  56 => 8,  43 => 6,  92 => 28,  79 => 40,  57 => 10,  46 => 6,  37 => 5,  33 => 5,  29 => 4,  19 => 1,  44 => 8,  27 => 3,  55 => 9,  45 => 6,  36 => 5,  50 => 9,  47 => 10,  30 => 3,  25 => 3,  249 => 17,  239 => 90,  235 => 334,  228 => 84,  224 => 229,  219 => 225,  217 => 79,  214 => 79,  211 => 220,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  132 => 39,  127 => 71,  117 => 36,  113 => 34,  86 => 47,  83 => 25,  78 => 46,  68 => 14,  64 => 37,  61 => 15,  48 => 11,  39 => 7,  32 => 5,  24 => 13,  22 => 4,  23 => 3,  20 => 2,  17 => 1,  144 => 46,  138 => 46,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 36,  108 => 31,  99 => 33,  94 => 29,  91 => 49,  88 => 16,  85 => 26,  77 => 23,  74 => 21,  71 => 15,  65 => 13,  62 => 15,  58 => 33,  54 => 13,  51 => 17,  42 => 9,  38 => 4,  35 => 7,  31 => 2,  28 => 1,);
    }
}
