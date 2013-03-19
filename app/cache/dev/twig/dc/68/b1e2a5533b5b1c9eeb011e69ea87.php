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
        return array (  183 => 84,  177 => 80,  174 => 79,  147 => 57,  138 => 51,  131 => 47,  119 => 38,  115 => 37,  111 => 36,  98 => 27,  95 => 26,  84 => 17,  80 => 16,  72 => 11,  69 => 10,  61 => 8,  56 => 7,  49 => 5,  46 => 4,  40 => 3,  33 => 2,);
    }
}
