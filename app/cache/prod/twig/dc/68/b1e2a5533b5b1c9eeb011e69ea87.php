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
<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData")), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "name"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getContext($context, "data"), "html", null, true);
        echo "</textarea>-->
\t\t<p id=\"fileName\" hidden=\"true\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getContext($context, "file"), "html", null, true);
        echo "</p>
\t\t<div id=\"editor\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getContext($context, "data"), "html", null, true);
        echo "</div>
\t\t<div class=\"separator\" style=\"height:37px;\"></div>
\t\t<div>
\t\t\t<button class=\"btn\">Sauvegarder</button>
\t\t</div>
\t<script type=\"text/javascript\">
\t\t//var ace = require(\"lib/ace\");
\t\tvar editor = ace.edit(\"editor\");
\t\t//var modelist = require(\"ace/modelist\");
\t\t//var mode = modelist.getModeFromPath(";
        // line 47
        echo twig_escape_filter($this->env, $this->getContext($context, "file"), "html", null, true);
        echo ");

    \teditor.getSession().setMode(\"ace/mode/javascript\");
    \t//editor.getSession().setMode(mode.mode);
    \talert(";
        // line 51
        echo twig_escape_filter($this->env, $this->getContext($context, "file"), "html", null, true);
        echo ")
\t\t\$(\".btn\").click(function(){
\t\t\tvar filename = \$('#fileName').text();
\t\t\tvar code = editor.getSession().getValue();
\t\t\t\$.ajax({
\t            type: \"POST\",
\t            url: Routing.generate('EditorBundle_modifyFile', {\"id\": ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "id"), "html", null, true);
        echo ", \"file\": \"";
        echo twig_escape_filter($this->env, $this->getContext($context, "file"), "html", null, true);
        echo "\"}),
\t            data: \"newdata=\"+code,
\t            cache: false,
\t            dataType : 'text',
\t            success: function(data){
\t                editor.getSession().setValue(data);
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

    // line 79
    public function block_right($context, array $blocks = array())
    {
        // line 80
        echo "\t<!-- Partie appel de index2 dans iframe pour la création des projets -->
\t<div class=\"sidebar\">
\t\t<div class=\"block_categories\">
\t\t\t<h6>Projects</h6>
\t\t\t<iframe width=\"200px\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EditorBundle_editorTree", array("id" => $this->getContext($context, "project"))), "html", null, true);
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
        return array (  698 => 348,  696 => 347,  692 => 345,  689 => 344,  592 => 248,  574 => 246,  557 => 245,  550 => 243,  544 => 242,  530 => 231,  524 => 230,  512 => 227,  502 => 219,  484 => 217,  460 => 214,  449 => 205,  439 => 199,  433 => 195,  425 => 191,  423 => 190,  419 => 189,  412 => 184,  407 => 181,  405 => 180,  392 => 174,  384 => 169,  376 => 164,  363 => 156,  357 => 154,  355 => 153,  340 => 144,  321 => 128,  316 => 126,  312 => 125,  308 => 124,  302 => 121,  298 => 120,  288 => 116,  284 => 115,  280 => 114,  274 => 111,  270 => 110,  266 => 109,  260 => 106,  256 => 105,  252 => 104,  246 => 101,  242 => 100,  238 => 99,  212 => 84,  170 => 60,  166 => 59,  139 => 50,  50 => 6,  180 => 49,  174 => 79,  149 => 38,  98 => 27,  181 => 49,  175 => 46,  172 => 45,  112 => 28,  191 => 49,  167 => 53,  121 => 27,  115 => 37,  101 => 21,  150 => 39,  140 => 49,  136 => 32,  119 => 38,  114 => 29,  249 => 76,  243 => 73,  239 => 72,  229 => 96,  225 => 95,  221 => 66,  207 => 81,  197 => 57,  187 => 53,  183 => 84,  159 => 43,  155 => 42,  106 => 24,  157 => 68,  128 => 52,  118 => 45,  76 => 13,  85 => 16,  296 => 122,  290 => 119,  278 => 113,  261 => 99,  257 => 78,  253 => 77,  248 => 95,  244 => 94,  240 => 93,  235 => 71,  227 => 89,  218 => 86,  214 => 85,  186 => 72,  182 => 45,  173 => 48,  169 => 47,  164 => 65,  160 => 56,  151 => 39,  147 => 57,  143 => 51,  138 => 51,  130 => 38,  100 => 22,  96 => 25,  83 => 15,  61 => 8,  45 => 4,  66 => 12,  65 => 8,  21 => 2,  467 => 216,  464 => 237,  459 => 230,  456 => 229,  451 => 226,  448 => 225,  442 => 200,  422 => 200,  401 => 182,  397 => 181,  393 => 180,  382 => 172,  378 => 171,  368 => 159,  364 => 163,  359 => 161,  351 => 155,  348 => 149,  341 => 142,  338 => 141,  332 => 137,  320 => 144,  318 => 141,  311 => 137,  307 => 135,  304 => 134,  299 => 71,  294 => 119,  289 => 31,  283 => 115,  279 => 27,  275 => 26,  271 => 83,  267 => 82,  263 => 81,  258 => 21,  254 => 20,  250 => 18,  247 => 17,  241 => 5,  233 => 97,  231 => 90,  222 => 87,  219 => 228,  217 => 225,  203 => 216,  201 => 58,  198 => 153,  125 => 28,  58 => 12,  56 => 7,  36 => 12,  91 => 17,  68 => 18,  43 => 5,  209 => 83,  205 => 80,  196 => 134,  192 => 78,  189 => 48,  178 => 48,  176 => 70,  165 => 46,  161 => 36,  152 => 54,  148 => 38,  145 => 38,  141 => 43,  134 => 56,  132 => 53,  127 => 36,  123 => 31,  109 => 26,  93 => 18,  90 => 15,  54 => 7,  133 => 39,  124 => 35,  111 => 36,  107 => 29,  80 => 16,  69 => 10,  63 => 16,  60 => 8,  52 => 6,  97 => 39,  95 => 26,  88 => 19,  78 => 14,  75 => 13,  71 => 11,  25 => 4,  82 => 16,  72 => 11,  64 => 10,  53 => 7,  34 => 5,  92 => 25,  86 => 17,  79 => 18,  46 => 4,  37 => 5,  19 => 2,  44 => 4,  27 => 3,  49 => 5,  42 => 6,  40 => 3,  33 => 2,  29 => 4,  26 => 5,  224 => 232,  215 => 63,  211 => 62,  204 => 84,  200 => 78,  195 => 80,  193 => 74,  190 => 73,  188 => 77,  185 => 46,  179 => 63,  177 => 80,  171 => 45,  162 => 63,  158 => 53,  156 => 55,  153 => 45,  146 => 55,  142 => 60,  137 => 36,  131 => 47,  126 => 33,  120 => 31,  117 => 25,  103 => 21,  99 => 28,  77 => 14,  74 => 12,  57 => 7,  47 => 5,  39 => 3,  32 => 2,  24 => 11,  22 => 4,  30 => 343,  23 => 3,  20 => 2,  17 => 1,  135 => 32,  129 => 29,  122 => 46,  116 => 34,  113 => 37,  108 => 29,  104 => 22,  102 => 27,  94 => 17,  89 => 17,  87 => 16,  84 => 17,  81 => 24,  73 => 15,  70 => 10,  67 => 12,  62 => 13,  59 => 8,  55 => 7,  51 => 19,  48 => 5,  41 => 12,  38 => 3,  35 => 9,  31 => 2,  28 => 1,);
    }
}
