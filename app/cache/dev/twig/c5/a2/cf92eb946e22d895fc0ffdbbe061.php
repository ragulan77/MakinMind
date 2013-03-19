<?php

/* MakinMindProjectBundle:Project:show_project.html.twig */
class __TwigTemplate_c5a2cf92eb946e22d895fc0ffdbbe061 extends Twig_Template
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
        // line 176
        if (($this->getAttribute($this->getContext($context, "project"), "owner") == $this->getAttribute($this->getContext($context, "app"), "user"))) {
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " :: Affichage du projet ";
    }

    // line 5
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "name")), "html", null, true);
        echo " ";
    }

    // line 6
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        $this->displayParentBlock("titlebar_ariane", $context, $blocks);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projects"), "html", null, true);
        echo "\">Projets</a> / <span>";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "name")), "html", null, true);
        echo "</span>
";
    }

    // line 10
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 11
    public function block_content_type($context, array $blocks = array())
    {
        $this->displayParentBlock("content_type", $context, $blocks);
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
\t<div class=\"block_blog_post_type_2\">
\t\t<article>
\t\t\t<div class=\"content\">

\t\t\t\t<div class=\"f_pic\">
\t\t\t\t\t<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown_project.jpg"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "name")), "html", null, true);
        echo "\">
\t\t\t\t</div>

\t\t\t\t<div class=\"separator\" style=\"height:20px;\"></div>

\t\t\t\t<div class=\"block_tabs_type_3\">
\t\t\t\t\t<div class=\"tabs\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"#1\" class=\"current\">Informations générales</a></li>
\t\t\t\t\t\t\t<li><a href=\"#2\">Candidater au projet</a></li>
\t\t\t\t\t\t\t<li><a href=\"#3\">A propos...</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"tab_content\">
\t\t\t\t\t\t<div class=\"oh\" style=\"padding-top:1px;\">
\t\t\t\t\t\t\t<h3 class=\"heading_w_icon\">Résumé</h3>
\t\t\t\t\t\t\t<blockquote class=\"full\" style=\"text-align: justify;\">";
        // line 37
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "shortDescription")), "html", null, true);
        echo "</blockquote>

\t\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t\t<h3 class=\"heading_w_icon\">Description</h3>
\t\t\t\t\t\t\t<blockquote class=\"full\" style=\"text-align: justify;\">";
        // line 41
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "longDescription")), "html", null, true);
        echo "</blockquote>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab_content\">
\t\t\t\t\t\t<h3 class=\"heading_w_icon\">Conditions pour candidater</h3>

\t\t\t\t\t\t<div class=\"block_accordeon_type_1\">
\t\t\t\t\t\t\t<div class=\"button_outer first\">
\t\t\t\t\t\t\t\t<div class=\"button_inner\">Niveau d'étude minimum : Bac + ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "pbStudies"), "html", null, true);
        echo "</div></div>
\t\t\t\t\t\t\t<div class=\"accordeon_content\">
\t\t\t\t\t\t\t\t<p>Le niveau d'étude minimum permet d'adapter la difficulté de chaque projet à chaque développeur et ainsi éviter les abandons en cours de projet.</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Diplôme requis : ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "firstDiploma"), "html", null, true);
        echo "</div></div>
\t\t\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<p>Le diplôme permet de cibler les connaissance et les capacités des développeurs. Certains seront spécialisé dans un domaine qui ne se prêtera pas forcément à tel ou tel projet.

\t\t\t\t\t\t\t\t";
        // line 60
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "secondDiploma") != "")) {
            // line 61
            echo "\t\t\t\t\t\t\t\t\t<h6>Autre diplôme valable : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "secondDiploma"), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Spécialisation requise : ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "specialization"), "html", null, true);
        echo "</div></div>
\t\t\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<p>Tout comme le diplôme, la spécialité d'un cursus permet d'obtenir des connaissances pointues dans un domaine en particulier qui peu (ou non) se prêter à un projet ou à une tâche d'un projet en particulier.</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Expérience professionnelle requise : ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "numberWorkedYears"), "html", null, true);
        echo " année(s)</div></div>
\t\t\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<p>Certains projet nécessite des personnes ayant déjà travaillé avec une technologie ou avec un outil en particulier. Ces expériences professionnelles peuvent apporter maîtrise et gain de temps au projet.</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Temps de travail hebdomadaire : ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "hoursPerWeek"), "html", null, true);
        echo " heure(s)</div></div>
\t\t\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<p>Le bénéficiaire du projet annonce une approximation du temps que vous devrez consacrer au projet si vous le rejoingnez. En postulant au projet, vous vous engagez à être disponible pendant cette durée hebdomadaire.</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"button_outer\"><div class=\"button_inner\">Contrat parallèle autorisé : ";
        // line 81
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "project"), "applyTerms"), "paralleleContract") == 1)) {
            echo "oui ";
        } else {
            echo " non ";
        }
        echo "</div></div>
\t\t\t\t\t\t\t<div class=\"accordeon_content\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<p>En tant qu'employeur temporaire, le bénéficiaire du projet peut ou non décider de si vous avez le droit d'être engagé ailleurs, c'est-à-dire qu'il peut vouloir votre exclusivité durant le développement du projet.</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\t\$('.block_accordeon_type_1').tabs('.block_accordeon_type_1 div.accordeon_content', {
\t\t\t\t\t\t\t\t\ttabs : '.button_outer',
\t\t\t\t\t\t\t\t\teffect : 'slide',
\t\t\t\t\t\t\t\t\tcurrentClose: false,
\t\t\t\t\t\t\t\t\tinitialIndex : 0
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t<h3 class=\"heading_w_icon\">Candidater</h3>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t";
        // line 100
        if (($this->getAttribute($this->getContext($context, "project"), "recruitment") == 1)) {
            echo " 
\t\t\t\t\t\t\t\t\t";
            // line 101
            if ((null === $this->getContext($context, "request"))) {
                // line 102
                echo "\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_project", array("id" => $this->getAttribute($this->getContext($context, "project"), "id"), "url" => $this->getAttribute($this->getContext($context, "project"), "url"))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<p><input type=\"submit\" value=\"Postuler pour ce projet\"/></p>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 106
                echo "\t\t\t\t\t\t\t\t\t<div class=\"general_info_box success\">
\t\t\t\t\t\t\t\t\t\t<p>Félicitations, vous faites déjà partie de ce projet.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 110
            echo "\t\t\t\t\t\t\t\t";
        } else {
            // line 111
            echo "\t\t\t\t\t\t\t\t\t<div class=\"general_info_box warning\">
\t\t\t\t\t\t\t\t\t\t<p>Ce projet ne recrute pas actuellement.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        }
        // line 116
        echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"tab_content\">
\t\t\t\t\t\t<div class=\"oh\" style=\"padding-top:1px;\">

\t\t\t\t\t\t\t<h3 class=\"heading_w_icon\">Le projet</h3>
\t\t\t\t\t\t\t<ul class=\"list_2\" style=\"padding-left: 25px;\">
\t\t\t\t\t\t\t\t<li>Dates :
\t\t\t\t\t\t\t\t\tdu ";
        // line 125
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "beginDate"), "d M Y"), "html", null, true);
        echo " au ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "endingDate"), "d M Y"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t\t<li>Domaines :
\t\t\t\t\t\t\t\t\t";
        // line 127
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "project"), "domains"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 128
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "domain"), "name"), "html", null, true);
            echo (((!$this->getAttribute($this->getContext($context, "loop"), "last"))) ? (",") : (""));
            echo "
\t\t\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 130
        echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>Rémunération : entre 99 et 1000 EUR.</li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t\t\t<h3 class=\"heading_w_icon\">Le porteur du projet</h3>
\t\t\t\t\t\t\t<div class=\"about_author\">
\t\t\t\t\t\t\t\t\t<div class=\"userpic\">
\t\t\t\t\t\t\t\t\t\t<img style=\"width:45px; height:45px;\" src=\"";
        // line 138
        if ((!(null === $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "owner"), "picture")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "picture"), "url"), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "contract"), "worker"), "picture"), "extension"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/unknown.gif"), "html", null, true);
        }
        echo "\" alt=\"user avatar\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"about\">
\t\t\t\t\t\t\t\t\t\t<p class=\"title\">Ce projet a été créé par <a href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_showUser", array("username" => $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "owner"), "username"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "owner"), "name"), "html", null, true);
        echo "</a></p>
\t\t\t\t\t\t\t\t\t\t<p>";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "owner"), "description"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"separator\" style=\"height:20px;\"></div>

\t\t\t\t\t<div class=\"links\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Auteur : <a href=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_showUser", array("username" => $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "owner"), "username"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "project"), "owner"), "name"), "html", null, true);
        echo "</a></li>
\t\t\t\t\t\t\t<li>Dates : du ";
        // line 154
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "beginDate"), "d M Y"), "html", null, true);
        echo " au ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "project"), "endingDate"), "d M Y"), "html", null, true);
        echo "</li>
\t\t\t\t\t\t\t<li>Domaines : 
\t\t\t\t\t\t\t\t";
        // line 156
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "project"), "domains"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 157
            echo "\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "domain"), "name"), "html", null, true);
            echo (((!$this->getAttribute($this->getContext($context, "loop"), "last"))) ? (",") : (""));
            echo "
\t\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 159
        echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\$('.block_tabs_type_3 .tabs').tabs('.block_tabs_type_3 .tab_content', {
\t\t\t\t\t\t\tinitialIndex : 0
\t\t\t\t\t\t});
\t\t\t\t\t</script>

\t\t\t\t</div>
\t\t\t</div>
\t\t</article>
\t</div>

";
    }

    // line 177
    public function block_right($context, array $blocks = array())
    {
        // line 178
        echo "\t<div class=\"sidebar\">
\t\t<div class=\"separator\" style=\"height:37px;\"></div>
\t\t\t";
        // line 180
        $this->env->loadTemplate("MakinMindProjectBundle:Project:sidebar_owner_project.html.twig")->display(array_merge($context, array("project" => $this->getContext($context, "project"))));
        // line 181
        echo "\t\t<div class=\"separator\" style=\"height:40px;\"></div>
\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "MakinMindProjectBundle:Project:show_project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 181,  404 => 180,  400 => 178,  397 => 177,  378 => 159,  360 => 157,  343 => 156,  336 => 154,  330 => 153,  316 => 142,  310 => 141,  298 => 138,  288 => 130,  270 => 128,  253 => 127,  246 => 125,  235 => 116,  228 => 111,  225 => 110,  219 => 106,  211 => 102,  209 => 101,  205 => 100,  179 => 81,  171 => 76,  163 => 71,  155 => 66,  150 => 63,  144 => 61,  142 => 60,  135 => 56,  127 => 51,  114 => 41,  107 => 37,  85 => 20,  77 => 14,  74 => 13,  68 => 11,  63 => 10,  52 => 7,  49 => 6,  42 => 5,  35 => 3,  29 => 176,);
    }
}
