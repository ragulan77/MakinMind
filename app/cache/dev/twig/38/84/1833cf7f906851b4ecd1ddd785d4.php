<?php

/* MakinMindProjectBundle:Project:sidebar_owner_project.html.twig */
class __TwigTemplate_38841833cf7f906851b4ecd1ddd785d4 extends Twig_Template
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
        echo "<div class=\"block_categories\">
\t<h6>Catégories</h6>
\t<ul class=\"list_5\">
\t\t<li><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_contract", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
        echo "\">Contrat</a></li>
\t\t<li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_list_developpers", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
        echo "\">Développeurs</a></li>
\t</ul>

\t<p>&nbsp;</p>

\t<h6>Modifier</h6>
\t<ul class=\"list_5\">
\t\t<li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_candidates", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
        echo "\">Candidats</a></li>
\t\t<li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_retained_candidates", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
        echo "\">Candidats choisis</a></li>
\t</ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "MakinMindProjectBundle:Project:sidebar_owner_project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 13,  36 => 12,  26 => 5,  22 => 4,  17 => 1,);
    }
}
