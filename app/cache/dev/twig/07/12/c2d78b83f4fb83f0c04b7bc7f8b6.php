<?php

/* MakinMindEditorBundle:Editor:tree.html.twig */
class __TwigTemplate_0712c2d78b83f4fb83f0c04b7bc7f8b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
<meta name=\"keywords\"  content=\"\" />
<meta name=\"description\" content=\"\" />
<title>Editable jquery tree with php codes</title>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/makinmindeditor/js/jquery/plugins/simpleTree/style.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/makinmindeditor/css/style.css"), "html", null, true);
        echo "\" />

<!-- for routing in js file -->
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData")), "html", null, true);
        echo "\"></script>

<!-- default tree manager's js files -->
<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/makinmindeditor/js/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/makinmindeditor/js/jquery/plugins/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/makinmindeditor/js/jquery/plugins/simpleTree/jquery.simple.tree.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/makinmindeditor/js/langManager.js"), "html", null, true);
        echo "\" ></script>
<!--<script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/makinmindeditor/js/treeOperations.js"), "html", null, true);
        echo "\"></script>-->
<script type=\"text/javascript\">
var simpleTree;
var structureManagerURL = Routing.generate('EditorBundle_structManage', {'id': ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "id"), "html", null, true);
        echo "});
var dragOperation = true;
var operationFailed = -1;

function TreeOperations()
{
\t
\ttreeOps = this;
\tthis.ajaxActive = true;
\tthis.treeBusy = false;
\tthis.timer = 0;
\tthis.folderElement = false;
\tthis.lookAtFolderElement = false;

\t
\tthis.inputText = \"<input type='text' id='inputText' maxlength='30'>\";
\tthis.inputId = '#inputText';
//*******************************************************\t
\tfor (var n in arguments[0]) 
\t{ 
\t\tthis[n] = arguments[0][n]; 
\t}
//*******************************************************
\tthis.isTreeBusy = function()
\t{
\t\tif (this.treeBusy == true){
\t\t\talert(langManager.doOneOperationAtATime);
\t\t}
\t\treturn (this.treeBusy);
\t}
\tthis.setTreeBusy = function(busy)
\t{
\t\tthis.treeBusy = busy;
\t}
//**************************************************************
\tthis.showOperationInfo = function (text){
\t\t
\t\t\$('#processing').html(text);\t\t
\t\t
\t\t\$('#processing').fadeIn(1, function(){\t\t\t
\t\t\ttreeOps.timer = setTimeout(\"\$('#processing').fadeOut(1000)\", 1000);\t\t\t
\t\t});
\t\t
\t}
//********************************************************
\tthis.escapeChars = function(str) {\t
//\t\tvar ch = Array();\t
//\t\tch[0] = '.';
//\t\tch[1] = '[';
//\t\tch[2] = ']';
//\t\tch[3] = '/';
//\t\tch[4] = '@';
//\t\tch[5] = ' ';
//\t\tvar i = 0;
//\t\tfor (i = 0; i < ch.length; i++) 
//\t\t{
//\t\t\tstr = str.replace(ch[i], '\\\\' + ch[i]);
//\t\t}\t\t
\t\t
\t\tstr = str.replace(/\\./g, '\\\\.');
\t\tstr = str.replace(/\\[/g, '\\\\[');
\t\tstr = str.replace(/\\]/g, '\\\\]');
\t\tstr = str.replace(/\\//g, '\\\\/');
\t\tstr = str.replace(/ /g, '\\\\ ');
\t\tstr = str.replace(/,/g, '\\\\,');
\t\t
\t\treturn str;
\t}
//*******************************************************
\tthis.showInProcessInfo = function(show)
\t{
\t\tif (show == true) {
\t\t\tclearTimeout(treeOps.timer);
\t\t\t\$('#processing').hide();
\t\t\t\$('#processing').html(langManager.operationInProcess);
\t\t\t\$('#processing').show();
\t\t\t
\t\t}
\t\telse {
\t\t\t\$('#processing').hide();
\t\t}\t\t
\t}
//*******************************************************
\tthis.trGetSelected = function()
\t{
\t\treturn simpleTree.get(0).getSelected();
\t}


\tthis.trGetSelectedWithAlert = function()
\t{
\t\tvar selectedNode = treeOps.trGetSelected();
\t\tif (selectedNode.html() == null){
\t\t\talert(langManager.selectNode2MakeOperation);
\t\t\treturn null;
\t\t}
\t\treturn selectedNode;
\t}
//**********************************************************
//         YENI ELEMAN EKLEME FONKSIYONLARI
//**********************************************************
\tthis.trAddElement = function(result)
\t{
\t\t//treeOps.treeBusy = false; ajax makes it false
\t\tvar info;
\t\tif (typeof(result) == \"undefined\")
\t\t{
\t\t\tinfo.id = \"null\";
\t\t\tinfo.name = \"undefined\";
\t\t}
\t\telse {
\t\t\tinfo = eval(result);
\t\t}\t
\t\t\$('#inputText').parent().attr('id', info.elementId);
\t\t\$('#inputText').replaceWith(\"<span>\"+info.elementName+\"</span>\");
\t\t
\t\tvar elementId = treeOps.escapeChars(info.elementId);
\t\t
\t\tsimpleTree.get(0).setTreeNodes(\$('#' + elementId).get(0));
\t\tif (info.slave == 0) { // eger dosya doc degilse klas�r yapiliyor.
\t\t\tsimpleTree.get(0).convertToFolder(\$(\"#\" + elementId));
\t\t}
\t}    
\t/////////////////////////////////////////////////////////////
\tthis.addElementReq = function(folder)
\t{    // Menu de yeni eleman ekle se�enegi tiklandiginda ilk bura �agrilir 
\t\t // ve yeni bir yazi alani eklenir.
\t\t
\t\tif ( treeOps.isTreeBusy() == true ||  
\t\t\t treeOps.trGetSelectedWithAlert() == null
\t\t\t) 
\t\t{
\t\t\t// aga�ta baska bir islem yapiliyorsa veya se�ili eleman 
\t\t\t// yok ise islem yapilmasi engelleniyor
\t\t\treturn;
\t\t}\t\t\t
\t\tdragOperation = false;\t\t
\t\t
\t\tif (treeOps.trGetSelected().get(0).className.indexOf('close') >= 0)
\t\t{
\t\t\tvar childUl = \$('>ul', treeOps.trGetSelected().get(0));
\t\t\tif (childUl.is('.ajax')) {
\t\t\t\tsimpleTree.get(0).nodeToggle(treeOps.trGetSelected().get(0), treeOps.addElementReq);
\t\t\t\ttreeOps.lookAtFolderElement = true;
\t\t\t\ttreeOps.folderElement = folder;\t\t\t\t
\t\t\t\treturn;
\t\t\t}
\t\t\telse {\t\t\t\t
\t\t\t\tsimpleTree.get(0).nodeToggle(treeOps.trGetSelected().get(0));
\t\t\t}
\t\t}
\t\t
\t\t
\t\ttreeOps.treeBusy = true;\t
\t\tvar content = \$.trim(\$('ul', treeOps.trGetSelected()).html());

\t\tif (content == \"\") 
\t\t{
\t\t\t// Klas�r�n alti bosken altina yeni eleman eklenemiyordu bu y�zden asagidaki kodlar yazildi.
\t\t\t// eger IE de fazladan g�z�ken dosyanin g�z�kmemesi i�in son iki silme (remove) satiri eklendi.
\t\t\t\$('ul', treeOps.trGetSelected()).html('<li class=\"line\">&nbsp;</li><li class=\"doc-last\"></li><li class=\"line-last\"/>');
\t\t\t
\t\t\tsimpleTree.get(0).addNode(\"newElement\", \"name\", null);
\t\t\ttreeOps.trGetSelected().prev().remove();
\t\t\ttreeOps.trGetSelected().prev().remove();
\t\t}
\t\telse {
\t\t\tsimpleTree.get(0).addNode(\"newElement\", \"name\", null);\t\t\t
\t\t}
\t\t
\t\t
\t\tvar slave = 1;
\t\t
\t\tif (treeOps.lookAtFolderElement == true){
\t\t\tfolder = treeOps.folderElement;
\t\t}
\t\ttreeOps.lookAtFolderElement = false;
\t\t
\t\tif (folder == true) {
\t\t\tsimpleTree.get(0).convertToFolder(treeOps.trGetSelected());
\t\t\tslave = 0;
\t\t}
\t\t
\t\ttreeOps.trGetSelected().html(treeOps.inputText);
\t\t\$('#inputText').focus();
\t\t
\t\t\$('#inputText').bind(\"keypress\", 
\t\t\t function(evt)
\t\t\t {\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\tif (evt.keyCode == 13) // when pressed enter 
\t\t\t\t{\t
\t\t\t\t    var name = \$('#inputText').attr('value');\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\tvar ownerEl = \$('#inputText').parent().parent().parent().attr('id');
\t\t\t\t\tvar params = \"action=insertElement\"+\"&name=\"+name+\"&ownerEl=\"+ownerEl+\"&slave=\"+slave;
\t\t\t\t\talert(params);
\t\t\t\t\ttreeOps.ajaxReq(params, structureManagerURL, treeOps.trAddElement);
\t\t\t\t\tdragOperation = true;
\t\t\t\t}
\t\t\t\telse if (evt.keyCode == 27) // when pressed esc 
\t\t\t\t{\t
\t\t\t\t    
\t\t\t\t\ttreeOps.setTreeBusy(false);
\t\t\t\t\tdragOperation = true;
\t\t\t\t\tif (\$('#inputText').parent().attr('class').indexOf('last')>=0) {
\t\t\t\t\t\tvar className = \$('#inputText').parent().prev().prev().attr('class');
\t\t\t\t\t\t\$('#inputText').parent().prev().prev().attr('class',className+'-last');\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t\t//\$('#inputText').parent().prev().remove();
\t\t\t\t\t\$('#inputText').parent().remove();
\t\t\t\t}
\t\t\t\t//\$('#inputText').unbind(\"keypress\");
\t\t\t}
\t\t\t);\t\t
\t}
/*******************************************************
\tELEMAN SILME FONKSIYONLARI
********************************************************/
\tthis.trDeleteElement = function(result)
\t{
\t\tif (result != operationFailed)\t{\t\t
\t\t\tsimpleTree.get(0).delNode();\t\t\t\t
\t\t}
\t\telse{
\t\t\talert(\"Error in operation\");
\t\t}
\t}
\t/////////////////////////////////////////////////////
\tthis.deleteElementReq = function()
\t{\t
\t\tif ( treeOps.isTreeBusy() == true ||  
\t\t\t treeOps.trGetSelectedWithAlert() == null
\t\t\t) 
\t\t{
\t\t\t// aga�ta baska bir islem yapiliyorsa veya se�ili eleman 
\t\t\t// yok ise islem yapilmasi engelleniyor
\t\t\treturn;
\t\t}\t
\t
\t\tif (confirm(langManager.deleteConfirm))
\t\t{
\t\t\ttreeOps.treeBusy = true;
\t\t\tvar ownerEl = treeOps.trGetSelected().parent().parent().attr('id');
\t\t \tvar params = \"action=deleteElement&elementId=\"+treeOps.trGetSelected().attr('id')
\t\t \t\t\t\t + \"&ownerEl=\" + ownerEl;
\t\t\ttreeOps.ajaxReq(params, structureManagerURL, treeOps.trDeleteElement);
\t\t}\t
\t}
/*******************************************************\t
\tELEMANIN ISMINI DEGISTIRME FONKSIYONLARI
*******************************************************/
\tthis.trUpdateElementName = function(result)
\t{
\t\tvar info = eval('('+result +')');
\t\tvar tmp_node = \"<span>\"+info.elementName+\"</span>\";
\t\t\$('#inputText').parent().attr('id', info.elementId);

\t\tvar elementId = treeOps.escapeChars(info.elementId);
\t\t
\t\t\$('#inputText', '#'+ elementId).replaceWith(tmp_node);
\t\t
\t\t\$('ul.ajax>li.doc-last', '#' + elementId).attr('id', info.elementId).html(\"{url:\"+ structureManagerURL +\"?action=getElementList&ownerEl=\"+ info.elementId +\"}\");
\t\tsimpleTree.get(0).setTreeNodes2(\$('#' + elementId));
\t}

\tthis.updateElementNameReq = function()
\t{
\t\tif ( treeOps.isTreeBusy() == true ||  
\t\t\t treeOps.trGetSelectedWithAlert() == null
\t\t\t) 
\t\t{
\t\t\treturn;
\t\t}\t\t\t
\t\ttreeOps.treeBusy = true;
\t\t
\t\tvar elementName = \$('span.active').text();
\t\tvar elementId = treeOps.trGetSelected().attr('id');\t
\t\t
\t\t\$('span:first', treeOps.trGetSelected()).replaceWith(\"<input type='text' id='inputText' value='\"+elementName+\"'/>\");\t
\t\t\$('#inputText').focus();
\t\t\$('#inputText').bind(\"keypress\",
\t\t\t\t\t\t\t\t function(evt)
\t\t\t\t\t\t\t\t {
\t\t\t\t\t\t\t\t\t if (evt.keyCode == 13) { //pressed enter
\t\t\t\t\t\t\t\t\t\tvar name = \$('#inputText').attr('value'); \t
\t\t\t\t\t\t\t\t\t\tvar ownerEl = \$('#inputText').parent().parent().parent().attr('id');
\t\t\t\t\t\t\t\t\t \tvar params = \"action=updateElementName&name=\"+name+\"&elementId=\"+elementId+\"&ownerEl=\"+ownerEl;
\t\t\t\t\t\t\t\t\t \t
\t\t\t\t\t\t\t\t\t\ttreeOps.ajaxReq (params, structureManagerURL, treeOps.trUpdateElementName);\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t }
\t\t\t\t\t\t\t\t\t else if (evt.keyCode == 27) { // pressed esc
\t\t\t\t\t\t\t\t\t \ttreeOps.setTreeBusy(false);
\t\t\t\t\t\t\t\t\t    \$('#inputText').replaceWith(\"<span>\"+elementName+\"</span>\");
\t\t\t\t\t\t\t\t\t \tsimpleTree.get(0).setTreeNodes2(\$('#'+elementId))
\t\t\t\t\t\t\t\t\t }
\t\t\t\t\t\t\t\t }
\t\t\t\t\t\t\t);
\t\t
\t}
/**********************************
 * Expand All
***********************************/\t 
\tthis.expandAll = function (obj)
\t    {
\t\t\tvar folder = \$('.folder-close, .folder-close-last',obj);\t\t\t\t
\t\t\t
\t\t\t\$(folder).each(function(){
\t\t\t\tsimpleTree.get(0).nodeToggle(this, treeOps.expandAll);
\t\t\t});\t\t\t\t
\t\t}
/**********************************
 * Collapse All
***********************************/\t
\tthis.collapseAll = function (){
\t\t\t\$('.folder-open, .folder-open-last').each(function(){
\t\t\t\tsimpleTree.get(0).nodeToggle(this);
\t\t\t});
\t}

//*******************************************************
\tthis.trReload = function()
\t{
\t\t//simpleTree.get(0).setAjaxNodes(getSelected(), null, null);
\t}
//*******************************************************
\tthis.isInt = function(t) {
\t\ttry {
\t\t\t//var t = eval(x);
\t\t\tvar y = parseInt(t);
\t\t\t
\t\t\tif (isNaN(y)) {
\t\t\t\treturn false;
\t\t\t}
\t\t\treturn t == y && t.toString() == y.toString();
\t\t}
\t\tcatch(ex){
\t\t\t
\t\t}
\t\treturn false;
 \t} 
//*******************************************************\t
\tthis.ajaxReq = function(params, url, callback, overrideSuccessFunc)
\t{
\t\tif (treeOps.ajaxActive == true)
\t\t{
\t\t\tvar successFunction = function(result){\t
\t\t\t\t\t\t
\t\t\t\t\t\t\ttreeOps.treeBusy = false;
\t\t\t\t\t\t\ttreeOps.showInProcessInfo(false);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\tvar t = eval(result);
\t\t\t\t\t\t\t\t// if result is less than 0, it means an error occured\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tif (treeOps.isInt(t) == true  && t < 0) { 
\t\t\t\t\t\t\t\t\talert(eval(\"langManager.error_\" + Math.abs(t)));\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t}\t
\t\t\t\t\t\t\t\telse{ // if result is greater than 0 it means operation is succesfull
\t\t\t\t\t\t\t\t\tcallback(result);
\t\t\t\t\t\t\t\t\ttreeOps.showOperationInfo(langManager.missionCompleted);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tcatch(ex) {\t// if result is string it means operation is succesfull\t\t\t\t
\t\t\t\t\t\t\t\tcallback(result);
\t\t\t\t\t\t\t\ttreeOps.showOperationInfo(langManager.missionCompleted);\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t}
\t\t\t};
\t\t\t
\t\t\tif (typeof overrideSuccessFunc == 'function') {
\t\t\t\tsuccessFunction = overrideSuccessFunc;\t
\t\t\t}
\t\t \t\$.ajax({
   \t\t\t\t\ttype: 'POST',
\t\t\t\t\turl: url,
\t\t\t\t\tdata: params,
\t\t\t\t\tdataType: 'script',
\t\t\t\t\ttimeout:100000,
\t\t\t\t\tbeforeSend: function(){ treeOps.showInProcessInfo(true);  },
\t\t\t\t\tsuccess: successFunction,
\t\t\t\t\tfailure: function(result) {
\t\t\t\t\talert(result);\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\ttreeOps.treeBusy = false;
\t\t\t\t\t\t\ttreeOps.showInProcessInfo(false);
\t\t\t\t\t\t\tif (result == operationFailed) {
\t\t\t\t\t\t\t\talert(\"Error in ajax.\")
\t\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(par1, par2, par3){
\t\t\t\t\t\ttreeOps.showInProcessInfo(false);
\t\t\t\t\t\talert(\"Error in ajax..\")
\t\t\t\t\t}
\t\t\t});
\t\t}
\t\telse {
\t\t\tcallback();
\t\t\ttreeOps.treeBusy = false;
\t\t}
\t}
}

</script>
<script type=\"text/javascript\" src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/makinmindeditor/js/init.js"), "html", null, true);
        echo "\"></script>

</head>
<body>
\t<p id=\"idProject\" hidden=\"true\">";
        // line 426
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "id"), "html", null, true);
        echo "</p>
\t<div class=\"contextMenu\" id=\"myMenu1\">\t
\t\t\t<li class=\"addFolder\">
\t\t\t\t<img src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/makinmindeditor/js/jquery/plugins/simpleTree/images/folder_add.png"), "html", null, true);
        echo "\" /> </li>
\t\t\t<li class=\"addDoc\"><img src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/makinmindeditor/js/jquery/plugins/simpleTree/images/page_add.png"), "html", null, true);
        echo "\" /> </li>\t
\t\t\t<li class=\"edit\"><img src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/makinmindeditor/js/jquery/plugins/simpleTree/images/folder_edit.png"), "html", null, true);
        echo "\" /> </li>
\t\t\t<li class=\"delete\"><img src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/makinmindeditor/js/jquery/plugins/simpleTree/images/folder_delete.png"), "html", null, true);
        echo "\" /> </li>
\t\t\t<li class=\"expandAll\"><img src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/makinmindeditor/js/jquery/plugins/simpleTree/images/expand.png"), "html", null, true);
        echo "\"/> </li>
\t\t\t<li class=\"collapseAll\"><img src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/makinmindeditor/js/jquery/plugins/simpleTree/images/collapse.png"), "html", null, true);
        echo "\"/> </li>\t
\t</div>
\t<div class=\"contextMenu\" id=\"myMenu2\">
\t\t\t<li class=\"edit\"><img src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/makinmindeditor/js/jquery/plugins/simpleTree/images/page_edit.png"), "html", null, true);
        echo "\" /> </li>
\t\t\t<li class=\"delete\"><img src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/makinmindeditor/js/jquery/plugins/simpleTree/images/page_delete.png"), "html", null, true);
        echo "\" /> </li>
\t</div>

\t<div id=\"wrap\">
\t\t<div id=\"annualWizard\">\t
\t\t\t\t<ul class=\"simpleTree\" id='pdfTree'>\t\t
\t\t\t\t\t\t<li class=\"root\" id='";
        // line 444
        echo twig_escape_filter($this->env, $this->getContext($context, "rootId"), "html", null, true);
        echo "'><span>";
        echo twig_escape_filter($this->env, $this->getContext($context, "rootName"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t<ul>";
        // line 445
        echo $this->getContext($context, "treeElements");
        echo "</ul>\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t</ul>\t\t\t\t\t\t
\t\t</div>\t
\t\t
\t</div> 
\t<div id='processing'></div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "MakinMindEditorBundle:Editor:tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 445,  522 => 444,  513 => 438,  509 => 437,  503 => 434,  499 => 433,  495 => 432,  491 => 431,  487 => 430,  483 => 429,  477 => 426,  470 => 422,  68 => 23,  62 => 20,  58 => 19,  54 => 18,  50 => 17,  46 => 16,  40 => 13,  36 => 12,  30 => 9,  26 => 8,  17 => 1,);
    }
}
