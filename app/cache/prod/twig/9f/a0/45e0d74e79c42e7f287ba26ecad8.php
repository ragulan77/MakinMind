<?php

/* MakinMindPortalBundle:Default:index.html.twig */
class __TwigTemplate_9fa045e0d74e79c42e7f287ba26ecad8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'titlebar' => array($this, 'block_titlebar'),
            'resources_slider' => array($this, 'block_resources_slider'),
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

    // line 3
    public function block_titlebar($context, array $blocks = array())
    {
    }

    // line 5
    public function block_resources_slider($context, array $blocks = array())
    {
        // line 6
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/flexslider/flexslider.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/nivo/nivo-slider.css"), "html", null, true);
        echo "\" type=\"text/css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/onebyone/css/jquery.onebyone.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/onebyone/css/animate.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/sort/jquery.sort.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/nivo/jquery.nivo.slider.pack.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/onebyone/jquery.onebyone.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 15
    public function block_content_type($context, array $blocks = array())
    {
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "
\t\t<div class=\"block_slogan_1\">
\t\t\t<p class=\"text_1\">Bienvenue sur la communauté de projets MakinMind !</p>
\t\t\t<p class=\"text_2\">
\t\t\t\tVous êtes détenteur d'une création ou d'un projet débutant ? Nous <strong>protégeons votre projet</strong> tout en vous permettant de <strong>travailler avec des professionnels</strong> triés selon leurs compétences. <br />Vous souhaitez <strong>intégrer un projet innovant</strong> aux côtés de passionnées, nous vous proposons de tenter l'aventure maintenant. Il y a forcément un projet qui saura vous intéresser !
\t\t\t</p>
\t\t</div>
\t\t<div class=\"line_2\" style=\"margin:0px 0px 37px;\"></div>  


";
    }

    public function getTemplateName()
    {
        return "MakinMindPortalBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 445,  522 => 444,  513 => 438,  509 => 437,  503 => 434,  499 => 433,  495 => 432,  491 => 431,  487 => 430,  483 => 429,  477 => 426,  470 => 422,  698 => 348,  696 => 347,  692 => 345,  689 => 344,  592 => 248,  574 => 246,  557 => 245,  550 => 243,  544 => 242,  530 => 231,  524 => 230,  512 => 227,  502 => 219,  484 => 217,  460 => 214,  449 => 205,  439 => 199,  433 => 195,  425 => 191,  423 => 190,  419 => 189,  412 => 184,  407 => 181,  405 => 180,  392 => 174,  384 => 169,  376 => 164,  363 => 156,  357 => 154,  355 => 153,  340 => 144,  321 => 128,  316 => 126,  312 => 125,  308 => 124,  302 => 121,  298 => 120,  288 => 116,  284 => 115,  280 => 114,  274 => 111,  270 => 110,  266 => 109,  260 => 106,  256 => 105,  252 => 104,  246 => 101,  242 => 100,  238 => 99,  212 => 84,  170 => 60,  166 => 59,  139 => 50,  50 => 9,  180 => 49,  174 => 79,  149 => 38,  98 => 27,  181 => 49,  175 => 46,  172 => 45,  112 => 28,  191 => 49,  167 => 53,  121 => 27,  115 => 37,  101 => 21,  150 => 39,  140 => 49,  136 => 32,  119 => 38,  114 => 29,  249 => 76,  243 => 73,  239 => 72,  229 => 96,  225 => 95,  221 => 66,  207 => 81,  197 => 57,  187 => 53,  183 => 84,  159 => 43,  155 => 42,  106 => 24,  157 => 68,  128 => 52,  118 => 45,  76 => 18,  85 => 16,  296 => 122,  290 => 119,  278 => 113,  261 => 99,  257 => 78,  253 => 77,  248 => 95,  244 => 94,  240 => 93,  235 => 71,  227 => 89,  218 => 86,  214 => 85,  186 => 72,  182 => 45,  173 => 48,  169 => 47,  164 => 65,  160 => 56,  151 => 39,  147 => 57,  143 => 51,  138 => 51,  130 => 38,  100 => 22,  96 => 25,  83 => 15,  61 => 8,  45 => 4,  66 => 12,  65 => 8,  21 => 2,  467 => 216,  464 => 237,  459 => 230,  456 => 229,  451 => 226,  448 => 225,  442 => 200,  422 => 200,  401 => 182,  397 => 181,  393 => 180,  382 => 172,  378 => 171,  368 => 159,  364 => 163,  359 => 161,  351 => 155,  348 => 149,  341 => 142,  338 => 141,  332 => 137,  320 => 144,  318 => 141,  311 => 137,  307 => 135,  304 => 134,  299 => 71,  294 => 119,  289 => 31,  283 => 115,  279 => 27,  275 => 26,  271 => 83,  267 => 82,  263 => 81,  258 => 21,  254 => 20,  250 => 18,  247 => 17,  241 => 5,  233 => 97,  231 => 90,  222 => 87,  219 => 228,  217 => 225,  203 => 216,  201 => 58,  198 => 153,  125 => 28,  58 => 11,  56 => 7,  36 => 12,  91 => 17,  68 => 15,  43 => 5,  209 => 83,  205 => 80,  196 => 134,  192 => 78,  189 => 48,  178 => 48,  176 => 70,  165 => 46,  161 => 36,  152 => 54,  148 => 38,  145 => 38,  141 => 43,  134 => 56,  132 => 53,  127 => 36,  123 => 31,  109 => 26,  93 => 18,  90 => 15,  54 => 10,  133 => 39,  124 => 35,  111 => 36,  107 => 29,  80 => 16,  69 => 10,  63 => 16,  60 => 8,  52 => 6,  97 => 39,  95 => 26,  88 => 19,  78 => 14,  75 => 13,  71 => 11,  25 => 4,  82 => 16,  72 => 11,  64 => 10,  53 => 7,  34 => 5,  92 => 25,  86 => 17,  79 => 18,  46 => 8,  37 => 6,  19 => 2,  44 => 4,  27 => 3,  49 => 5,  42 => 7,  40 => 13,  33 => 2,  29 => 3,  26 => 8,  224 => 232,  215 => 63,  211 => 62,  204 => 84,  200 => 78,  195 => 80,  193 => 74,  190 => 73,  188 => 77,  185 => 46,  179 => 63,  177 => 80,  171 => 45,  162 => 63,  158 => 53,  156 => 55,  153 => 45,  146 => 55,  142 => 60,  137 => 36,  131 => 47,  126 => 33,  120 => 31,  117 => 25,  103 => 21,  99 => 28,  77 => 14,  74 => 12,  57 => 7,  47 => 5,  39 => 3,  32 => 2,  24 => 11,  22 => 4,  30 => 9,  23 => 3,  20 => 2,  17 => 1,  135 => 32,  129 => 29,  122 => 46,  116 => 34,  113 => 37,  108 => 29,  104 => 22,  102 => 27,  94 => 17,  89 => 17,  87 => 16,  84 => 17,  81 => 24,  73 => 17,  70 => 10,  67 => 12,  62 => 12,  59 => 8,  55 => 7,  51 => 19,  48 => 5,  41 => 12,  38 => 3,  35 => 9,  31 => 2,  28 => 1,);
    }
}
