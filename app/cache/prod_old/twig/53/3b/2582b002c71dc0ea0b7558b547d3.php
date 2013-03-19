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
        if (isset($context["project"])) { $_project_ = $context["project"]; } else { $_project_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_confidentiality", array("id" => $this->getAttribute($_project_, "id"), "url" => $this->getAttribute($_project_, "url"))), "html", null, true);
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
        return array (  59 => 11,  157 => 67,  149 => 61,  116 => 43,  106 => 36,  76 => 21,  69 => 18,  98 => 31,  349 => 122,  342 => 119,  328 => 113,  310 => 99,  305 => 98,  300 => 97,  294 => 95,  289 => 94,  284 => 93,  278 => 91,  268 => 89,  262 => 87,  257 => 86,  246 => 83,  241 => 82,  236 => 81,  192 => 65,  187 => 64,  171 => 60,  160 => 57,  155 => 56,  131 => 44,  126 => 43,  120 => 41,  110 => 39,  72 => 23,  49 => 20,  41 => 5,  81 => 24,  21 => 3,  469 => 238,  466 => 237,  461 => 230,  458 => 229,  453 => 226,  450 => 225,  444 => 220,  424 => 200,  403 => 182,  399 => 181,  395 => 180,  384 => 172,  380 => 171,  370 => 164,  366 => 163,  361 => 161,  353 => 155,  350 => 154,  343 => 142,  340 => 141,  334 => 115,  322 => 144,  320 => 141,  313 => 137,  309 => 135,  306 => 134,  301 => 71,  296 => 37,  291 => 31,  285 => 28,  281 => 27,  277 => 26,  273 => 90,  269 => 24,  265 => 23,  260 => 21,  256 => 20,  252 => 85,  243 => 5,  233 => 237,  226 => 232,  221 => 228,  205 => 216,  203 => 68,  200 => 153,  198 => 67,  135 => 74,  75 => 23,  53 => 10,  70 => 13,  209 => 78,  206 => 77,  201 => 76,  194 => 71,  191 => 70,  186 => 67,  180 => 63,  176 => 61,  166 => 59,  158 => 56,  153 => 55,  143 => 49,  134 => 44,  123 => 40,  118 => 39,  90 => 27,  87 => 30,  66 => 17,  60 => 10,  146 => 60,  136 => 53,  122 => 37,  107 => 34,  101 => 52,  95 => 29,  82 => 28,  73 => 20,  67 => 15,  52 => 19,  109 => 58,  104 => 37,  96 => 50,  84 => 14,  80 => 24,  26 => 3,  34 => 5,  112 => 21,  102 => 19,  89 => 32,  63 => 16,  56 => 11,  43 => 6,  92 => 28,  79 => 30,  57 => 10,  46 => 7,  37 => 5,  33 => 5,  29 => 4,  19 => 1,  44 => 6,  27 => 5,  55 => 12,  45 => 7,  36 => 5,  50 => 11,  47 => 7,  30 => 3,  25 => 4,  249 => 17,  239 => 90,  235 => 334,  228 => 84,  224 => 73,  219 => 72,  217 => 79,  214 => 71,  211 => 220,  208 => 69,  202 => 72,  199 => 71,  193 => 67,  182 => 63,  178 => 61,  175 => 60,  172 => 59,  165 => 55,  161 => 68,  156 => 51,  154 => 50,  150 => 55,  147 => 47,  132 => 52,  127 => 71,  117 => 36,  113 => 34,  86 => 26,  83 => 32,  78 => 25,  68 => 18,  64 => 14,  61 => 13,  48 => 11,  39 => 6,  32 => 7,  24 => 11,  22 => 2,  23 => 3,  20 => 2,  17 => 1,  144 => 46,  138 => 46,  130 => 46,  124 => 24,  121 => 45,  115 => 40,  111 => 36,  108 => 31,  99 => 36,  94 => 38,  91 => 49,  88 => 33,  85 => 31,  77 => 25,  74 => 24,  71 => 20,  65 => 20,  62 => 27,  58 => 12,  54 => 10,  51 => 14,  42 => 12,  38 => 5,  35 => 5,  31 => 3,  28 => 1,);
    }
}
