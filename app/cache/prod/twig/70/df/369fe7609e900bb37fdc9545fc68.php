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
        return array (  66 => 17,  65 => 14,  21 => 3,  467 => 238,  464 => 237,  459 => 230,  456 => 229,  451 => 226,  448 => 225,  442 => 220,  422 => 200,  401 => 182,  397 => 181,  393 => 180,  382 => 172,  378 => 171,  368 => 164,  364 => 163,  359 => 161,  351 => 155,  348 => 154,  341 => 142,  338 => 141,  332 => 137,  320 => 144,  318 => 141,  311 => 137,  307 => 135,  304 => 134,  299 => 71,  294 => 37,  289 => 31,  283 => 28,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  263 => 23,  258 => 21,  254 => 20,  250 => 18,  247 => 17,  241 => 5,  233 => 334,  231 => 237,  222 => 229,  219 => 228,  217 => 225,  203 => 216,  201 => 154,  198 => 153,  125 => 71,  58 => 11,  56 => 31,  36 => 6,  91 => 30,  68 => 18,  43 => 6,  209 => 220,  205 => 82,  196 => 134,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 31,  54 => 14,  133 => 74,  124 => 41,  111 => 37,  107 => 58,  80 => 24,  69 => 20,  63 => 18,  60 => 13,  52 => 15,  97 => 34,  95 => 21,  88 => 29,  78 => 24,  75 => 23,  71 => 14,  25 => 4,  82 => 27,  72 => 16,  64 => 21,  53 => 8,  34 => 3,  92 => 20,  86 => 30,  79 => 40,  46 => 7,  37 => 5,  19 => 2,  44 => 6,  27 => 4,  49 => 11,  42 => 11,  40 => 5,  33 => 5,  29 => 4,  26 => 3,  224 => 232,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  99 => 52,  77 => 46,  74 => 27,  57 => 10,  47 => 13,  39 => 7,  32 => 7,  24 => 13,  22 => 3,  30 => 3,  23 => 3,  20 => 2,  17 => 1,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 32,  89 => 49,  87 => 29,  84 => 47,  81 => 26,  73 => 21,  70 => 24,  67 => 13,  62 => 13,  59 => 23,  55 => 10,  51 => 17,  48 => 9,  41 => 9,  38 => 8,  35 => 7,  31 => 5,  28 => 1,);
    }
}
