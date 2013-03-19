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
        return array (  528 => 445,  522 => 444,  513 => 438,  509 => 437,  503 => 434,  499 => 433,  495 => 432,  491 => 431,  487 => 430,  483 => 429,  477 => 426,  470 => 422,  698 => 348,  696 => 347,  692 => 345,  689 => 344,  592 => 248,  574 => 246,  557 => 245,  550 => 243,  544 => 242,  530 => 231,  524 => 230,  512 => 227,  502 => 219,  484 => 217,  460 => 214,  449 => 205,  439 => 199,  433 => 195,  425 => 191,  423 => 190,  419 => 189,  412 => 184,  407 => 181,  405 => 180,  392 => 174,  384 => 169,  376 => 164,  363 => 156,  357 => 154,  355 => 153,  340 => 144,  321 => 128,  316 => 126,  312 => 125,  308 => 124,  302 => 121,  298 => 120,  288 => 116,  284 => 115,  280 => 114,  274 => 111,  270 => 110,  266 => 109,  260 => 106,  256 => 105,  252 => 104,  246 => 101,  242 => 100,  238 => 99,  212 => 84,  170 => 60,  166 => 59,  139 => 50,  50 => 17,  180 => 49,  174 => 79,  149 => 38,  98 => 27,  181 => 49,  175 => 46,  172 => 45,  112 => 28,  191 => 49,  167 => 53,  121 => 27,  115 => 37,  101 => 21,  150 => 39,  140 => 49,  136 => 32,  119 => 38,  114 => 29,  249 => 76,  243 => 73,  239 => 72,  229 => 96,  225 => 95,  221 => 66,  207 => 81,  197 => 57,  187 => 53,  183 => 84,  159 => 43,  155 => 42,  106 => 24,  157 => 68,  128 => 52,  118 => 45,  76 => 13,  85 => 16,  296 => 122,  290 => 119,  278 => 113,  261 => 99,  257 => 78,  253 => 77,  248 => 95,  244 => 94,  240 => 93,  235 => 71,  227 => 89,  218 => 86,  214 => 85,  186 => 72,  182 => 45,  173 => 48,  169 => 47,  164 => 65,  160 => 56,  151 => 39,  147 => 57,  143 => 51,  138 => 51,  130 => 38,  100 => 22,  96 => 25,  83 => 15,  61 => 8,  45 => 4,  66 => 12,  65 => 8,  21 => 2,  467 => 216,  464 => 237,  459 => 230,  456 => 229,  451 => 226,  448 => 225,  442 => 200,  422 => 200,  401 => 182,  397 => 181,  393 => 180,  382 => 172,  378 => 171,  368 => 159,  364 => 163,  359 => 161,  351 => 155,  348 => 149,  341 => 142,  338 => 141,  332 => 137,  320 => 144,  318 => 141,  311 => 137,  307 => 135,  304 => 134,  299 => 71,  294 => 119,  289 => 31,  283 => 115,  279 => 27,  275 => 26,  271 => 83,  267 => 82,  263 => 81,  258 => 21,  254 => 20,  250 => 18,  247 => 17,  241 => 5,  233 => 97,  231 => 90,  222 => 87,  219 => 228,  217 => 225,  203 => 216,  201 => 58,  198 => 153,  125 => 28,  58 => 19,  56 => 7,  36 => 12,  91 => 17,  68 => 23,  43 => 5,  209 => 83,  205 => 80,  196 => 134,  192 => 78,  189 => 48,  178 => 48,  176 => 70,  165 => 46,  161 => 36,  152 => 54,  148 => 38,  145 => 38,  141 => 43,  134 => 56,  132 => 53,  127 => 36,  123 => 31,  109 => 26,  93 => 18,  90 => 15,  54 => 18,  133 => 39,  124 => 35,  111 => 36,  107 => 29,  80 => 16,  69 => 10,  63 => 16,  60 => 8,  52 => 6,  97 => 39,  95 => 26,  88 => 19,  78 => 14,  75 => 13,  71 => 11,  25 => 4,  82 => 16,  72 => 11,  64 => 10,  53 => 7,  34 => 5,  92 => 25,  86 => 17,  79 => 18,  46 => 16,  37 => 5,  19 => 2,  44 => 4,  27 => 3,  49 => 5,  42 => 6,  40 => 13,  33 => 2,  29 => 4,  26 => 8,  224 => 232,  215 => 63,  211 => 62,  204 => 84,  200 => 78,  195 => 80,  193 => 74,  190 => 73,  188 => 77,  185 => 46,  179 => 63,  177 => 80,  171 => 45,  162 => 63,  158 => 53,  156 => 55,  153 => 45,  146 => 55,  142 => 60,  137 => 36,  131 => 47,  126 => 33,  120 => 31,  117 => 25,  103 => 21,  99 => 28,  77 => 14,  74 => 12,  57 => 7,  47 => 5,  39 => 3,  32 => 2,  24 => 11,  22 => 4,  30 => 9,  23 => 3,  20 => 2,  17 => 1,  135 => 32,  129 => 29,  122 => 46,  116 => 34,  113 => 37,  108 => 29,  104 => 22,  102 => 27,  94 => 17,  89 => 17,  87 => 16,  84 => 17,  81 => 24,  73 => 15,  70 => 10,  67 => 12,  62 => 20,  59 => 8,  55 => 7,  51 => 19,  48 => 5,  41 => 12,  38 => 3,  35 => 9,  31 => 2,  28 => 1,);
    }
}
