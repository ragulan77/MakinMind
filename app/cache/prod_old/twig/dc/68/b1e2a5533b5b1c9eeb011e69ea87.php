<?php

/* MakinMindEditorBundle:Editor:editor.html.twig */
class __TwigTemplate_dc68b1e2a5533b5b1c9eeb011e69ea87 extends Twig_Template
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
            'resources' => array($this, 'block_resources'),
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
        echo " :: Editeur de text";
    }

    // line 3
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Editeur en ligne";
    }

    // line 4
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <span>Editeur en ligne</span>
";
    }

    // line 7
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 8
    public function block_content_type($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("content_type", $context, $blocks);
        echo " ";
    }

    // line 10
    public function block_resources($context, array $blocks = array())
    {
        // line 11
        $this->displayParentBlock("resources", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"layout/style.css\" type=\"text/css\">
<script src=\"ckeditor/ckeditor.js\"></script>
<script type=\"text/javascript\" src=\"layout/js/jquery.js\"></script>
<script src=\"http://d1n0x3qji82z53.cloudfront.net/src-min-noconflict/ace.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script type=\"text/javascript\" src=\"/js/fos_js_routes.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>

<!-- sert à charger un fichier, après double clique dans le tree -->
<script type=\"text/javascript\">\$(document).bind('yourproject', function(e,eventData) {
          window.location=eventData;
    });</script> 
";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "\t<h3>Editeur du projet ";
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "name"), "html", null, true);
        echo "</h3>
\t<!-- Form de textarea  -->
<style type=\"text/css\" media=\"screen\">
    #editor { 
    position: relative;
    width: 600px;
    height: 400px;
    }
</style>
\t\t<!--<textarea name=\"newd\" cols=\"70%\" rows=\"50\" id=\"testEdit\">";
        // line 36
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $_data_, "html", null, true);
        echo "</textarea>-->
\t\t<p id=\"fileName\" hidden=\"true\">";
        // line 37
        if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
        echo twig_escape_filter($this->env, $_file_, "html", null, true);
        echo "</p>
\t\t<div id=\"editor\">";
        // line 38
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        echo twig_escape_filter($this->env, $_data_, "html", null, true);
        echo "</div>
\t\t<div class=\"separator\" style=\"height:37px;\"></div>
\t\t<div>
\t\t\t<button class=\"btn\">Changer</button>
\t\t</div>
\t<script>
\t\tvar editor = ace.edit(\"editor\");
    \teditor.getSession().setMode(\"ace/mode/javascript\");
\t</script>

\t<script type=\"text/javascript\">
\t\t\$(\".btn\").click(function(){
\t\t\tvar filename = \$('#fileName').text();
\t\t\talert(Routing.generate('EditorBundle_modifyFile', {\"id\": ";
        // line 51
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "id"), "html", null, true);
        echo ", \"fileName\": \"";
        if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
        echo twig_escape_filter($this->env, $_file_, "html", null, true);
        echo "\"}));
\t\t\t\$.ajax({
\t            type: \"POST\",
\t            url: Routing.generate('EditorBundle_modifyFile', {\"id\": ";
        // line 54
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_project_, "id"), "html", null, true);
        echo ", \"fileName\": \"";
        if (isset($context["file"])) { $_file_ = $context["file"]; } else { $_file_ = null; }
        echo twig_escape_filter($this->env, $_file_, "html", null, true);
        echo "\"}),
\t            data: \"newdata=\"+\$('#editor').text(),
\t            cache: false,
\t            dataType : 'text',
\t            success: function(data){
\t                \$('#editor').text(data);
\t            },
\t            beforeSend: function(){
\t            \t//\$('#ApplyTermsForm p').show();
\t            \t//\$('#ApplyTermsForm div').hide();
\t            },
\t            complete: function(){
\t            \t//\$('#ApplyTermsForm p').hide();
\t            \t//\$('#ApplyTermsForm div').show();
\t            \t//\$('#ApplyTermsForm .modal-footer > button.btn').trigger('click');
\t            }
        \t});
        \treturn false;
\t\t});
\t</script>
";
    }

    // line 76
    public function block_right($context, array $blocks = array())
    {
        // line 77
        echo "\t<!-- Partie appel de index2 dans iframe pour la création des projets -->
\t<div class=\"sidebar\">
\t\t<div class=\"block_categories\">
\t\t\t<h6>Projects</h6>
\t\t\t<iframe width=\"200px\" src=\"";
        // line 81
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EditorBundle_editorTree", array("id" => $_project_)), "html", null, true);
        echo "\" width=\"50%\" height=\"50%\" ></iframe>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "MakinMindEditorBundle:Editor:editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 38,  40 => 3,  769 => 348,  766 => 347,  762 => 345,  759 => 344,  662 => 248,  642 => 246,  624 => 245,  615 => 243,  607 => 242,  592 => 231,  584 => 230,  569 => 227,  559 => 219,  539 => 217,  521 => 216,  512 => 214,  501 => 205,  494 => 200,  491 => 199,  485 => 195,  476 => 191,  473 => 190,  468 => 189,  456 => 181,  452 => 180,  438 => 174,  429 => 169,  420 => 164,  411 => 159,  406 => 156,  396 => 153,  388 => 149,  379 => 144,  359 => 128,  348 => 125,  336 => 121,  331 => 120,  326 => 119,  319 => 116,  314 => 115,  302 => 111,  297 => 110,  292 => 109,  280 => 105,  275 => 104,  263 => 100,  258 => 99,  253 => 97,  248 => 96,  230 => 84,  225 => 81,  215 => 78,  207 => 74,  169 => 56,  105 => 21,  190 => 48,  183 => 45,  168 => 42,  163 => 39,  103 => 20,  100 => 19,  196 => 60,  181 => 60,  128 => 31,  174 => 36,  93 => 19,  142 => 39,  139 => 38,  114 => 37,  162 => 39,  159 => 54,  148 => 49,  125 => 39,  97 => 26,  164 => 55,  151 => 46,  145 => 44,  137 => 38,  308 => 82,  303 => 81,  286 => 76,  279 => 73,  274 => 72,  245 => 63,  240 => 62,  223 => 57,  218 => 56,  189 => 57,  184 => 81,  177 => 43,  167 => 42,  133 => 31,  59 => 8,  157 => 67,  149 => 51,  116 => 28,  106 => 21,  76 => 16,  69 => 10,  98 => 20,  349 => 122,  342 => 119,  328 => 113,  310 => 99,  305 => 98,  300 => 97,  294 => 95,  289 => 94,  284 => 93,  278 => 91,  268 => 101,  262 => 68,  257 => 67,  246 => 83,  241 => 82,  236 => 81,  192 => 63,  187 => 46,  171 => 60,  160 => 38,  155 => 37,  131 => 28,  126 => 27,  120 => 41,  110 => 33,  72 => 11,  49 => 5,  41 => 3,  81 => 17,  21 => 3,  469 => 238,  466 => 237,  461 => 184,  458 => 229,  453 => 226,  450 => 225,  444 => 220,  424 => 200,  403 => 182,  399 => 154,  395 => 180,  384 => 172,  380 => 171,  370 => 164,  366 => 163,  361 => 161,  353 => 126,  350 => 154,  343 => 124,  340 => 141,  334 => 115,  322 => 144,  320 => 141,  313 => 83,  309 => 114,  306 => 134,  301 => 71,  296 => 78,  291 => 77,  285 => 106,  281 => 27,  277 => 26,  273 => 90,  269 => 71,  265 => 23,  260 => 21,  256 => 20,  252 => 66,  243 => 95,  233 => 237,  226 => 232,  221 => 80,  205 => 48,  203 => 68,  200 => 153,  198 => 45,  135 => 36,  75 => 23,  53 => 6,  70 => 11,  209 => 78,  206 => 52,  201 => 46,  194 => 49,  191 => 48,  186 => 61,  180 => 63,  176 => 59,  166 => 45,  158 => 44,  153 => 55,  143 => 32,  134 => 33,  123 => 40,  118 => 28,  90 => 26,  87 => 15,  66 => 12,  60 => 8,  146 => 54,  136 => 51,  122 => 25,  107 => 34,  101 => 28,  95 => 27,  82 => 14,  73 => 11,  67 => 9,  52 => 6,  109 => 36,  104 => 29,  96 => 17,  84 => 20,  80 => 18,  26 => 3,  34 => 5,  112 => 24,  102 => 19,  89 => 17,  63 => 7,  56 => 7,  43 => 13,  92 => 26,  79 => 13,  57 => 7,  46 => 4,  37 => 5,  33 => 2,  29 => 4,  19 => 1,  44 => 4,  27 => 5,  55 => 7,  45 => 5,  36 => 5,  50 => 5,  47 => 5,  30 => 343,  25 => 4,  249 => 17,  239 => 90,  235 => 61,  228 => 58,  224 => 73,  219 => 72,  217 => 79,  214 => 71,  211 => 53,  208 => 49,  202 => 72,  199 => 71,  193 => 49,  182 => 37,  178 => 77,  175 => 76,  172 => 42,  165 => 55,  161 => 68,  156 => 51,  154 => 52,  150 => 43,  147 => 47,  132 => 35,  127 => 71,  117 => 36,  113 => 29,  86 => 17,  83 => 16,  78 => 13,  68 => 10,  64 => 11,  61 => 8,  48 => 5,  39 => 3,  32 => 2,  24 => 11,  22 => 4,  23 => 3,  20 => 2,  17 => 1,  144 => 50,  138 => 32,  130 => 35,  124 => 24,  121 => 29,  115 => 36,  111 => 36,  108 => 22,  99 => 18,  94 => 25,  91 => 16,  88 => 14,  85 => 31,  77 => 13,  74 => 11,  71 => 10,  65 => 10,  62 => 8,  58 => 12,  54 => 7,  51 => 5,  42 => 12,  38 => 12,  35 => 5,  31 => 2,  28 => 1,);
    }
}
