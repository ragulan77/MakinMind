<?php

/* MakinMindProjectBundle:Project:confidentiality.html.twig */
class __TwigTemplate_533b2582b002c71dc0ea0b7558b547d3 extends Twig_Template
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
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " :: Confidentialité ";
    }

    // line 5
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Clause de confidentialité";
    }

    // line 6
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <span>Clause de confidentialité</span>
";
    }

    // line 10
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 11
    public function block_content_type($context, array $blocks = array())
    {
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "<h1>Clause de confidentialité</h1>
<p>
\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at turpis tortor, sollicitudin consequat turpis. Phasellus vitae sem mi. Vestibulum non nisi ligula, nec tristique nibh. Nunc pellentesque pretium dolor a iaculis. Donec condimentum ligula ut felis convallis dictum. Duis sem massa, viverra et consequat sed, imperdiet vel nisl. In at adipiscing lacus. Nunc id sodales lacus. Curabitur sed felis et arcu euismod pellentesque.<br/>

\tVivamus in orci ante, et malesuada neque. Nulla est massa, consectetur at fringilla ac, condimentum non magna. Donec sit amet mauris in libero porttitor semper. Etiam imperdiet, leo a malesuada rhoncus, erat ipsum aliquam erat, non feugiat diam lacus molestie dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin non nulla et felis ultricies gravida. Ut tincidunt adipiscing augue, vitae bibendum nulla consequat non. Nulla facilisi. Phasellus varius, nulla et laoreet luctus, dolor quam aliquam eros, a varius mi leo sit amet nisi. Mauris cursus massa sit amet enim pellentesque nec egestas quam eleifend. Duis quis odio est. Nulla facilisi. Aliquam porta condimentum mauris, in lacinia quam molestie id.<br/>

\tPraesent iaculis neque nec velit pretium non commodo felis dictum. Nullam in molestie felis. Nam eleifend lobortis enim quis laoreet. Nulla consequat, massa at euismod imperdiet, lorem est ultrices neque, sit amet fermentum sem augue a nisi. Integer vestibulum accumsan pellentesque. Etiam diam ligula, fringilla vitae congue sed, mattis vitae risus. Quisque nec arcu quis lorem mattis cursus eu ornare tortor. Suspendisse non gravida diam. Sed tempus arcu nisi. Curabitur ac ante non risus dictum pellentesque.<br/>

\tPellentesque nisi neque, feugiat non luctus at, vehicula ut odio. Maecenas vitae faucibus ante. Nunc mollis nibh et ipsum sollicitudin rutrum vehicula dui consectetur. Pellentesque vulputate nisi fringilla tortor feugiat dignissim. Donec non justo enim. Nulla ipsum enim, imperdiet quis laoreet eu, congue at sem. Cras sed est diam, eget scelerisque turpis. Aenean quis elit a diam accumsan pulvinar eget at urna. Curabitur eros risus, interdum et dapibus eleifend, condimentum semper dui. Nulla nec erat vitae felis hendrerit interdum. In hac habitasse platea dictumst. Mauris convallis posuere rhoncus.<br/>

\tSuspendisse ac ultrices nunc. Maecenas vulputate velit id leo dignissim aliquam. Aliquam feugiat, nisi a placerat vulputate, sapien leo varius massa, quis sollicitudin purus ante vitae metus. Vivamus a ante porta dui malesuada imperdiet id vitae felis. Sed tincidunt rhoncus dolor et semper. Suspendisse potenti. Ut accumsan lobortis arcu, ut euismod lectus porta at. Aenean condimentum metus nec sapien lobortis fringilla. Nunc sit amet ante et massa placerat rhoncus. Sed eget nisi a lorem ultrices imperdiet eu ac eros. Curabitur vel leo eget lacus sagittis tincidunt. In non libero non ligula viverra malesuada sit amet ac nunc.
</p>

<form method=\"post\" action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_confidentiality", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
        echo "\">
\t<p>
       <input type=\"checkbox\" name=\"contract_accpt\" id=\"contract_accpt\" required=\"required\"/> <label for=\"contract_accpt\">J'atteste avoir pris connaissance la clause de condifentialité ci-dessus</label><br /><br/>
       <input type=\"submit\" value=\"valider\"/>
\t</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "MakinMindProjectBundle:Project:confidentiality.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 68,  128 => 52,  118 => 45,  76 => 30,  85 => 31,  296 => 122,  290 => 119,  278 => 113,  261 => 99,  257 => 98,  253 => 97,  248 => 95,  244 => 94,  240 => 93,  235 => 91,  227 => 89,  218 => 86,  214 => 85,  186 => 72,  182 => 71,  173 => 68,  169 => 67,  164 => 65,  160 => 64,  151 => 61,  147 => 60,  143 => 59,  138 => 57,  130 => 55,  100 => 40,  96 => 39,  83 => 35,  61 => 13,  45 => 7,  66 => 17,  65 => 17,  21 => 2,  467 => 238,  464 => 237,  459 => 230,  456 => 229,  451 => 226,  448 => 225,  442 => 220,  422 => 200,  401 => 182,  397 => 181,  393 => 180,  382 => 172,  378 => 171,  368 => 164,  364 => 163,  359 => 161,  351 => 155,  348 => 154,  341 => 142,  338 => 141,  332 => 137,  320 => 144,  318 => 141,  311 => 137,  307 => 135,  304 => 134,  299 => 71,  294 => 37,  289 => 31,  283 => 115,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  263 => 23,  258 => 21,  254 => 20,  250 => 18,  247 => 17,  241 => 5,  233 => 334,  231 => 90,  222 => 87,  219 => 228,  217 => 225,  203 => 216,  201 => 81,  198 => 153,  125 => 71,  58 => 12,  56 => 11,  36 => 5,  91 => 37,  68 => 18,  43 => 6,  209 => 83,  205 => 82,  196 => 134,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 61,  141 => 55,  134 => 56,  132 => 53,  127 => 46,  123 => 44,  109 => 43,  93 => 38,  90 => 31,  54 => 10,  133 => 74,  124 => 41,  111 => 37,  107 => 58,  80 => 24,  69 => 19,  63 => 16,  60 => 13,  52 => 11,  97 => 39,  95 => 31,  88 => 27,  78 => 30,  75 => 23,  71 => 20,  25 => 4,  82 => 28,  72 => 16,  64 => 14,  53 => 10,  34 => 5,  92 => 20,  86 => 30,  79 => 24,  46 => 7,  37 => 5,  19 => 2,  44 => 6,  27 => 3,  49 => 11,  42 => 6,  40 => 8,  33 => 8,  29 => 4,  26 => 5,  224 => 232,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 73,  188 => 77,  185 => 76,  179 => 72,  177 => 69,  171 => 67,  162 => 63,  158 => 61,  156 => 63,  153 => 67,  146 => 55,  142 => 60,  137 => 51,  131 => 48,  126 => 46,  120 => 39,  117 => 45,  103 => 36,  99 => 52,  77 => 25,  74 => 21,  57 => 20,  47 => 7,  39 => 11,  32 => 5,  24 => 11,  22 => 3,  30 => 3,  23 => 3,  20 => 2,  17 => 1,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 43,  108 => 40,  104 => 41,  102 => 37,  94 => 32,  89 => 32,  87 => 36,  84 => 26,  81 => 31,  73 => 21,  70 => 31,  67 => 15,  62 => 13,  59 => 11,  55 => 12,  51 => 19,  48 => 9,  41 => 12,  38 => 5,  35 => 9,  31 => 3,  28 => 1,);
    }
}
