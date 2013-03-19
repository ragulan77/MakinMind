<?php

/* MakinMindProjectBundle:Project:owner_project_list_developers.html.twig */
class __TwigTemplate_2b20d233854782d957234bf89a3fa1f1 extends Twig_Template
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
        echo " :: Développeurs embauchés";
    }

    // line 3
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Développeurs embauchés";
    }

    // line 4
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <span>Développeurs</span>
";
    }

    // line 7
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 8
    public function block_content_type($context, array $blocks = array())
    {
        $this->displayParentBlock("content_type", $context, $blocks);
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "contracts"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 13
            echo "\t";
            if (($this->getAttribute($this->getContext($context, "loop"), "index") % 2 == 1)) {
                // line 14
                echo "\t<div class=\"one_half\">
\t";
            } else {
                // line 16
                echo "\t<div class=\"one_half last\">
\t";
            }
            // line 18
            echo "\t\t<div class=\"block_testimonials_1\">
\t\t\t";
            // line 19
            if ((!(null === $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "picture")))) {
                // line 20
                echo "\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "picture"), "localStoring") == 0)) {
                    // line 21
                    echo "\t\t\t\t\t<div class=\"avatar\"><a href=\"#\"><img style=\"width:45px; height:45px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "picture"), "url"), "html", null, true);
                    echo "\" alt=\"user avatar\"></a></div>
\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t<div class=\"avatar\"><a href=\"#\"><img style=\"width:45px; height:45px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "picture"), "url"), "html", null, true);
                    echo ".";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "picture"), "extension"), "html", null, true);
                    echo "\" alt=\"user avatar\"></a></div>
\t\t\t\t";
                }
                // line 25
                echo "\t\t\t";
            } else {
                // line 26
                echo "\t\t\t\t<div class=\"avatar\"><a href=\"#\"><img style=\"width:45px; height:45px;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown.gif"), "html", null, true);
                echo "\" alt=\"user unknown avatar\"></a></div>
\t\t\t";
            }
            // line 28
            echo "\t\t\t<div class=\"content\">
\t\t\t\t<div class=\"text\">
\t\t\t\t\t<p>Travaille chez ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "company"), "html", null, true);
            echo "</p>
\t\t\t\t\t<p>Date de votre signature ";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "contract"), "creaDate"), "d/m/y"), "html", null, true);
            echo "</p>
\t\t\t\t\t<p>Date de sa signature ";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "contract"), "signDate"), "d/m/y"), "html", null, true);
            echo "</p>
\t\t\t\t\t<div class=\"tail\"></div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"author\"><p><a href=\"#\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "lastName"), "html", null, true);
            echo " </a> <span class=\"position\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "job"), "html", null, true);
            echo "</span></p></div>
\t\t\t</div>
\t\t\t<div class=\"clearboth\"></div>
\t\t</div>
\t</div>

\t";
            // line 42
            if (($this->getAttribute($this->getContext($context, "loop"), "index") % 2 == 0)) {
                // line 43
                echo "\t<div class=\"clearboth\"></div>
\t<div class=\"separator\" style=\"height:34px;\"></div>
\t";
            }
            // line 46
            echo "\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 49
    public function block_right($context, array $blocks = array())
    {
        // line 50
        echo "<div class=\"sidebar\">
\t<div class=\"separator\" style=\"height:37px;\"></div>
\t\t";
        // line 52
        $this->env->loadTemplate("MakinMindProjectBundle:Project:sidebar_owner_project.html.twig")->display(array_merge($context, array("project" => $this->getContext($context, "project"))));
        // line 53
        echo "\t<div class=\"separator\" style=\"height:40px;\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "MakinMindProjectBundle:Project:owner_project_list_developers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 53,  191 => 52,  187 => 50,  184 => 49,  168 => 46,  163 => 43,  161 => 42,  148 => 36,  141 => 32,  137 => 31,  133 => 30,  129 => 28,  123 => 26,  120 => 25,  112 => 23,  106 => 21,  103 => 20,  101 => 19,  98 => 18,  94 => 16,  90 => 14,  87 => 13,  69 => 12,  66 => 11,  60 => 8,  55 => 7,  48 => 5,  45 => 4,  39 => 3,  32 => 2,);
    }
}
