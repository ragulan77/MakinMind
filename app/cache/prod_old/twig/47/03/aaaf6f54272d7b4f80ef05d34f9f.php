<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_4703aaaf6f54272d7b4f80ef05d34f9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titlebar_title' => array($this, 'block_titlebar_title'),
            'titlebar_ariane' => array($this, 'block_titlebar_ariane'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'right' => array($this, 'block_right'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " :: Inscription validée ";
    }

    // line 6
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Inscription";
    }

    // line 7
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <span>S'inscrire</span>
";
    }

    // line 12
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"block_contact_us_type_1\">
\t
\t<div class=\"general_info_box success\"><a href=\"#\" class=\"close\">Fermer</a>
\t\t<p>";
        // line 16
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute($_user_, "username")), "FOSUserBundle"), "html", null, true);
        echo "</p>
\t</div>

\t<div class=\"separator\" style=\"height:37px;\"></div>

\t<ul class=\"list_2\">
\t\t<li><a href=\"#\">Créer un nouveau projet</a></li>
\t\t<li><a href=\"#\">Rechercher un projet</a></li>
\t</ul>

</div>

";
    }

    // line 30
    public function block_right($context, array $blocks = array())
    {
        // line 31
        echo "<div class=\"sidebar\">
\t<div class=\"separator\" style=\"height:37px;\"></div>

\t\t<div class=\"block_categories\">
\t\t\t<h6>Ou alors !</h6>
\t\t\t<ul class=\"list_5\">
\t\t\t\t<li><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
        echo "\">Editer mon profil</a></li>
\t\t\t\t<li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_request"), "html", null, true);
        echo "\">Rechercher un ami</a></li>
\t\t\t\t<li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
        echo "\">Se déconnecter</a></li>
\t\t\t</ul>
\t\t</div>
\t<div class=\"clearboth\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 39,  349 => 122,  342 => 119,  328 => 113,  310 => 99,  305 => 98,  300 => 97,  294 => 95,  289 => 94,  284 => 93,  278 => 91,  268 => 89,  262 => 87,  257 => 86,  246 => 83,  241 => 82,  236 => 81,  192 => 65,  187 => 64,  171 => 60,  160 => 57,  155 => 56,  131 => 44,  126 => 43,  120 => 41,  110 => 39,  72 => 29,  49 => 20,  41 => 5,  81 => 24,  21 => 2,  469 => 238,  466 => 237,  461 => 230,  458 => 229,  453 => 226,  450 => 225,  444 => 220,  424 => 200,  403 => 182,  399 => 181,  395 => 180,  384 => 172,  380 => 171,  370 => 164,  366 => 163,  361 => 161,  353 => 155,  350 => 154,  343 => 142,  340 => 141,  334 => 115,  322 => 144,  320 => 141,  313 => 137,  309 => 135,  306 => 134,  301 => 71,  296 => 37,  291 => 31,  285 => 28,  281 => 27,  277 => 26,  273 => 90,  269 => 24,  265 => 23,  260 => 21,  256 => 20,  252 => 85,  243 => 5,  233 => 237,  226 => 232,  221 => 228,  205 => 216,  203 => 68,  200 => 153,  198 => 67,  135 => 74,  75 => 23,  53 => 12,  70 => 13,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 59,  158 => 56,  153 => 55,  143 => 49,  134 => 44,  123 => 40,  118 => 39,  90 => 37,  87 => 29,  66 => 17,  60 => 10,  146 => 50,  136 => 45,  122 => 37,  107 => 34,  101 => 52,  95 => 29,  82 => 31,  73 => 20,  67 => 28,  52 => 11,  109 => 58,  104 => 37,  96 => 50,  84 => 14,  80 => 24,  26 => 3,  34 => 5,  112 => 21,  102 => 19,  89 => 16,  63 => 13,  56 => 13,  43 => 7,  92 => 28,  79 => 30,  57 => 10,  46 => 8,  37 => 6,  33 => 5,  29 => 4,  19 => 1,  44 => 8,  27 => 3,  55 => 10,  45 => 6,  36 => 5,  50 => 9,  47 => 10,  30 => 4,  25 => 3,  249 => 17,  239 => 90,  235 => 334,  228 => 84,  224 => 73,  219 => 72,  217 => 79,  214 => 71,  211 => 220,  208 => 69,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 55,  147 => 47,  132 => 39,  127 => 71,  117 => 36,  113 => 34,  86 => 30,  83 => 32,  78 => 31,  68 => 18,  64 => 37,  61 => 16,  48 => 11,  39 => 6,  32 => 5,  24 => 13,  22 => 4,  23 => 3,  20 => 2,  17 => 1,  144 => 46,  138 => 46,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 36,  108 => 31,  99 => 36,  94 => 38,  91 => 49,  88 => 33,  85 => 26,  77 => 23,  74 => 21,  71 => 15,  65 => 13,  62 => 27,  58 => 11,  54 => 13,  51 => 17,  42 => 9,  38 => 4,  35 => 5,  31 => 2,  28 => 5,);
    }
}
