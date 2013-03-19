<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_8550618010d3ee5570e59b3d5fc1f7a8 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" style=\"display: none\"></div>
<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        var wdt, xhr;
        wdt = document.getElementById('sfwdt";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "');
        if (window.XMLHttpRequest) {
            xhr = new XMLHttpRequest();
        } else {
            xhr = new ActiveXObject('Microsoft.XMLHTTP');
        }
        xhr.open('GET', '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "', true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onreadystatechange = function(state) {
            if (4 === xhr.readyState && 200 === xhr.status && -1 !== xhr.responseText.indexOf('sf-toolbarreset')) {
                wdt.innerHTML = xhr.responseText;
                wdt.style.display = 'block';
            }
        };
        xhr.send('');
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  17 => 1,  484 => 238,  481 => 237,  476 => 230,  473 => 229,  468 => 226,  465 => 225,  459 => 220,  439 => 200,  418 => 182,  414 => 181,  410 => 180,  399 => 172,  395 => 171,  385 => 164,  381 => 163,  376 => 161,  368 => 155,  365 => 154,  358 => 142,  355 => 141,  349 => 137,  337 => 144,  335 => 141,  328 => 137,  324 => 135,  321 => 134,  316 => 37,  311 => 31,  305 => 28,  301 => 27,  297 => 26,  293 => 25,  289 => 24,  285 => 23,  280 => 21,  276 => 20,  272 => 18,  269 => 17,  263 => 5,  255 => 334,  253 => 237,  246 => 232,  244 => 229,  241 => 228,  239 => 225,  231 => 220,  225 => 216,  223 => 154,  220 => 153,  218 => 134,  200 => 118,  196 => 117,  179 => 105,  157 => 88,  140 => 74,  134 => 73,  129 => 71,  114 => 61,  106 => 58,  98 => 52,  93 => 50,  88 => 49,  83 => 47,  74 => 45,  63 => 37,  57 => 33,  55 => 31,  52 => 30,  35 => 5,  76 => 46,  73 => 17,  68 => 15,  62 => 12,  58 => 11,  54 => 10,  50 => 17,  46 => 8,  42 => 7,  37 => 6,  34 => 11,  29 => 1,);
    }
}
