<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_70df369fe7609e900bb37fdc9545fc68 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " :: Edition du profil ";
    }

    // line 5
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Mon profil";
    }

    // line 6
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
        echo "\">Profil</a> / <span>Modifier</span>
";
    }

    // line 10
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 11
        echo "
<div class=\"block_contact_us_type_1\">
    <div class=\"send_message\">
        <h4>Editer le profil</h4>
        <p class=\"text_subtitle_1\">Merci d'éditer votre profil si celui-ci demeure incomplet.</p>

            ";
        // line 17
        $this->env->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig")->display($context);
        // line 18
        echo "
    </div>
</div>
";
    }

    // line 23
    public function block_right($context, array $blocks = array())
    {
        // line 24
        echo "<div class=\"sidebar\">
    <div class=\"separator\" style=\"height:37px;\"></div>
        <div class=\"block_categories\">
            <p>
                <h6>Ou alors !</h6>
                <ul class=\"list_5\">
                    <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_change_password"), "html", null, true);
        echo "\">Modifier mot de passe</a></li>
                    <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
        echo "\">Voir mon profil</a></li>
                    <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
        echo "\">Supprimer mon compte</a></li>
                </ul>
            </p>
        </div>
    <div class=\"clearboth\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  81 => 24,  21 => 2,  469 => 238,  466 => 237,  461 => 230,  458 => 229,  453 => 226,  450 => 225,  444 => 220,  424 => 200,  403 => 182,  399 => 181,  395 => 180,  384 => 172,  380 => 171,  370 => 164,  366 => 163,  361 => 161,  353 => 155,  350 => 154,  343 => 142,  340 => 141,  334 => 137,  322 => 144,  320 => 141,  313 => 137,  309 => 135,  306 => 134,  301 => 71,  296 => 37,  291 => 31,  285 => 28,  281 => 27,  277 => 26,  273 => 25,  269 => 24,  265 => 23,  260 => 21,  256 => 20,  252 => 18,  243 => 5,  233 => 237,  226 => 232,  221 => 228,  205 => 216,  203 => 154,  200 => 153,  198 => 134,  135 => 74,  75 => 23,  53 => 30,  70 => 13,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 58,  158 => 56,  153 => 55,  143 => 49,  134 => 44,  123 => 40,  118 => 39,  90 => 31,  87 => 29,  66 => 17,  60 => 10,  146 => 50,  136 => 41,  122 => 37,  107 => 34,  101 => 52,  95 => 29,  82 => 25,  73 => 20,  67 => 17,  52 => 11,  109 => 58,  104 => 34,  96 => 50,  84 => 14,  80 => 24,  26 => 3,  34 => 3,  112 => 21,  102 => 19,  89 => 16,  63 => 13,  56 => 8,  43 => 6,  92 => 28,  79 => 40,  57 => 10,  46 => 7,  37 => 5,  33 => 5,  29 => 4,  19 => 1,  44 => 8,  27 => 3,  55 => 10,  45 => 6,  36 => 5,  50 => 9,  47 => 10,  30 => 3,  25 => 3,  249 => 17,  239 => 90,  235 => 334,  228 => 84,  224 => 229,  219 => 225,  217 => 79,  214 => 79,  211 => 220,  208 => 76,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 57,  156 => 51,  154 => 50,  150 => 48,  147 => 47,  132 => 39,  127 => 71,  117 => 36,  113 => 34,  86 => 30,  83 => 25,  78 => 24,  68 => 18,  64 => 37,  61 => 15,  48 => 11,  39 => 6,  32 => 5,  24 => 13,  22 => 4,  23 => 3,  20 => 2,  17 => 1,  144 => 46,  138 => 46,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 36,  108 => 31,  99 => 33,  94 => 32,  91 => 49,  88 => 16,  85 => 26,  77 => 23,  74 => 21,  71 => 15,  65 => 13,  62 => 15,  58 => 11,  54 => 13,  51 => 17,  42 => 9,  38 => 4,  35 => 5,  31 => 2,  28 => 1,);
    }
}
