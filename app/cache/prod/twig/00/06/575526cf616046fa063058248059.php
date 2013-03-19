<?php

/* ::layout.html.twig */
class __TwigTemplate_0006575526cf616046fa063058248059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'resources' => array($this, 'block_resources'),
            'resources_slider' => array($this, 'block_resources_slider'),
            'jsBodyTag' => array($this, 'block_jsBodyTag'),
            'projects' => array($this, 'block_projects'),
            'titlebar' => array($this, 'block_titlebar'),
            'titlebar_title' => array($this, 'block_titlebar_title'),
            'titlebar_ariane' => array($this, 'block_titlebar_ariane'),
            'slider' => array($this, 'block_slider'),
            'content_type' => array($this, 'block_content_type'),
            'content' => array($this, 'block_content'),
            'right' => array($this, 'block_right'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

<meta name=\"keywords\" content=\"\">
<meta name=\"description\" content=\"\">

<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

<!--[if lt IE 9]>
<script type=\"text/javascript\" src=\"layout/plugins/html5.js\"></script>
<![endif]-->

";
        // line 17
        $this->displayBlock('resources', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('resources_slider', $context, $blocks);
        // line 33
        echo "

</head>

<body class=\"theme_color_green\"";
        // line 37
        $this->displayBlock('jsBodyTag', $context, $blocks);
        echo ">
    <div class=\"wrapper sticky_footer\">

        <header>
            <div id=\"header\">

                <section class=\"section_top section_slider_1\" style=\"height: 25px; text-align: right;\">
                    <nav class=\"inner\">
                        ";
        // line 45
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") && (!twig_test_empty($this->getAttribute($this->getContext($context, "app"), "session"))))) {
            // line 46
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
            echo "\" class=\"general_button small\"><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo "</span></a>  
                            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\" class=\"general_button small type_3\"><span>Quitter</span></a>
                        ";
        } else {
            // line 49
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_login"), "html", null, true);
            echo "\" class=\"general_button small\"><span>Se connecter</span></a>  
                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
            echo "\" class=\"general_button small\"><span>S'inscrire</span></a>
                        ";
        }
        // line 52
        echo "
                    </nav>
                </section>

                <section class=\"section_top\">
                    <div class=\"inner\">
                        <div id=\"logo\"><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portal_home"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/logo1.png"), "html", null, true);
        echo "\" alt=\"MakinMind\" title=\"MakinMind\"></a></div>
                        
                        <nav class=\"main_menu\">
                            <ul>
                                <li><a href=\"index.html\">LE PRINCIPE<span class=\"subtext\">comment ça marche ?</span></a>
                                    
                                    <ul>
                                        <li><a href=\"index.html\">Présentation de MakinMind</a></li>
                                        <li><a href=\"index_2.html\">Vous avez un projet</a></li>
                                        <li><a href=\"index_3.html\">Vous avez des compétences</a></li>
                                        <li><a href=\"index_4.html\">Foire aux questions</a></li>
                                    </ul>
                                </li>
                                <li";
        // line 71
        $this->displayBlock('projects', $context, $blocks);
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projects"), "html", null, true);
        echo "\">LES PROJETS<span class=\"subtext\">les projets en cours</span></a>
                                    
                                    <ul>
                                        <li><a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projects"), "html", null, true);
        echo "\">Voir les projets</a>
                                        <li><a href=\"portfolio_1_1_c.html\">Par thème...</a>
                                            
                                            <ul>
                                                <li><a href=\"portfolio_1_1_c.html\">Développement web</a></li>
                                                <li><a href=\"portfolio_1_2_c.html\">Développement logiciel</a></li>
                                                <li><a href=\"portfolio_1_3_c.html\">Recherche scientifique</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"portfolio_3_4_c.html\">Recherche avancée</a>
                                    </ul>
                                </li>
                                <li><a href=\"#\">ENTREPRENEURS<span class=\"subtext\">vous avez un projet ?</span></a>
                                    
                                    <ul>
                                        <li><a href=\"#\">Créer un nouveau projet...</a>
                                            
                                                <ul>
                                                <li><a href=\"portfolio_1_1_c.html\">Développement web</a></li>
                                                <li><a href=\"portfolio_1_2_c.html\">Développement logiciel</a></li>
                                                <li><a href=\"portfolio_1_3_c.html\">Recherche scientifique</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"#\">Outils de conception</a></li>
                                        <li><a href=\"#\">Outils de protection</a></li>
                                        <li><a href=\"#\">Outils de création</a></li>
                                        
                                    </ul>
                                </li>
                                <li><a href=\"blog.html\">TRAVAILLEURS<span class=\"subtext\">vous avez des compétences ?</span></a>
                                    
                                    <ul>
                                        <li><a href=\"blog.html\">Rejoindre un projet...</a>
                                        <ul>
                                                <li><a href=\"portfolio_1_1_c.html\">Développement web</a></li>
                                                <li><a href=\"portfolio_1_2_c.html\">Développement logiciel</a></li>
                                                <li><a href=\"portfolio_1_3_c.html\">Recherche scientifique</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"blog_post.html\">Compétences</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"contact.html\">A PROPOS<span class=\"subtext\">qui sommes nous ?</span></a>
                                    <ul>
                                        <li><a href=\"blog.html\">Qui sommes-nous ?</a></li>
                                        <li><a href=\"blog_post.html\">Contact</a></li>
                                        <li><a href=\"blog_post.html\">Conditions générales</a></li>
                                        <li><a href=\"portfolio_1_2_c.html\">Mentions légales</a></li>
                                        <li><a href=\"portfolio_1_3_c.html\">Respect de la vie privée</a></li>
                                            
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        
                        <div class=\"clearboth\"></div>
                    </div>
                </section>

                ";
        // line 134
        $this->displayBlock('titlebar', $context, $blocks);
        // line 153
        echo "                
                ";
        // line 154
        $this->displayBlock('slider', $context, $blocks);
        // line 216
        echo "
            </div>
        </header>
        
        <div id=\"content\"";
        // line 220
        $this->displayBlock('content_type', $context, $blocks);
        echo ">
            <div class=\"inner\">
                <div class=\"general_content\">
                    <div class=\"main_content\">
                        <div class=\"separator\" style=\"height:35px;\"></div>
                        ";
        // line 225
        $this->displayBlock('content', $context, $blocks);
        // line 228
        echo "                        </div>
                        ";
        // line 229
        $this->displayBlock('right', $context, $blocks);
        // line 232
        echo "                    <div class=\"clearboth\"></div>
                </div>
            </div>
        </div>

        ";
        // line 237
        $this->displayBlock('footer', $context, $blocks);
        // line 334
        echo "        <!-- FOOTER END -->
    </div>
</body>

</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "MakinMind";
    }

    // line 17
    public function block_resources($context, array $blocks = array())
    {
        // line 18
        echo "<link href=\"http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800,800italic\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/prettyphoto/css/prettyPhoto.css"), "html", null, true);
        echo "\" type=\"text/css\">

<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/prettyphoto/jquery.prettyPhoto.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/tools/jquery.tools.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/scrollto/jquery.scroll.to.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/plugins/ajaxform/jquery.form.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/layout/js/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 31
    public function block_resources_slider($context, array $blocks = array())
    {
    }

    // line 37
    public function block_jsBodyTag($context, array $blocks = array())
    {
    }

    // line 71
    public function block_projects($context, array $blocks = array())
    {
    }

    // line 134
    public function block_titlebar($context, array $blocks = array())
    {
        // line 135
        echo "                <section class=\"section_title\">
                    <div class=\"inner\">
                        <div class=\"block_title\"><h1>";
        // line 137
        $this->displayBlock('titlebar_title', $context, $blocks);
        echo "</h1></div>
                        
                        <div class=\"block_breadcrumbs\">
                            <p>
                                ";
        // line 141
        $this->displayBlock('titlebar_ariane', $context, $blocks);
        // line 144
        echo "                            </p>
                        </div>
                        
                        <div class=\"clearboth\"></div>
                    </div>
                </section>
                <div class=\"line_3\"></div>
                
                ";
    }

    // line 137
    public function block_titlebar_title($context, array $blocks = array())
    {
        echo "Mon titre";
    }

    // line 141
    public function block_titlebar_ariane($context, array $blocks = array())
    {
        // line 142
        echo "                                    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portal_home"), "html", null, true);
        echo "\">Index</a> / 
                                ";
    }

    // line 154
    public function block_slider($context, array $blocks = array())
    {
        // line 155
        echo "                <section class=\"section_slider_1\">
                    <div class=\"slider_line_1\"></div>
                    <div class=\"slider_line_2\"></div>
                    
                    <div id=\"slider\" class=\"slider\">
                        <div class=\"oneByOne_item\">
                            <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/pic_slider_1_1_1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"pic_1_1\" data-ease-type=\"bounceInRight\">

                            <img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/pic_slider_1_1_2.png"), "html", null, true);
        echo "\" alt=\"\" class=\"pic_1_2\" data-ease-type=\"bounceInRight\">
                            <img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/pic_slider_1_1_3.png"), "html", null, true);
        echo "\" alt=\"\" class=\"pic_1_3\" data-ease-type=\"bounceInRight\">
                            <div class=\"text_1_1\" data-ease-type=\"fadeInUp\">MakinMind.com</div>
                            <div class=\"text_1_2\" data-ease-type=\"fadeInUp\">le projet, autrement</div>
                            <div class=\"text_1_3\" data-ease-type=\"fadeInUp\">MakinMind vous protège, vous assiste, et vous permet de réussir vos projets aux côtés de passionnés voulant s'investir.</div>
                        </div>
                        
                        <div class=\"oneByOne_item\">
                            <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/pic_slider_1_2_1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"pic_2_1\" data-ease-type=\"fadeInRight\">
                            <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/pic_slider_1_2_2.png"), "html", null, true);
        echo "\" alt=\"\" class=\"pic_2_2\" data-ease-type=\"fadeInRight\">
                            <div class=\"text_2_1\" data-ease-type=\"fadeIn\">Entourez-vous de passionnés</div>
                            <div class=\"text_2_2\" data-ease-type=\"fadeIn\">Développez avec eux en toute sécurité</div>
                            <div class=\"text_2_3\" data-ease-type=\"fadeIn\">Nous nous chargeons de protéger votre idée tout en vous permettant de menez à bien votre projet sans aucune crainte !</div>
                            <div class=\"text_2_4\" data-ease-type=\"fadeIn\"><a href=\"#\" class=\"general_button big arrow_right\"><span>En savoir plus</span></a></div>
                        </div>
                        
                        <div class=\"oneByOne_item\">
                            <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/pic_slider_1_3_1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"pic_3_1\" data-ease-type=\"bounceInDown\">
                            <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/pic_slider_1_3_2.png"), "html", null, true);
        echo "\" alt=\"\" class=\"pic_3_2\" data-ease-type=\"bounceInDown\">
                            <img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/pic_slider_1_3_3.png"), "html", null, true);
        echo "\" alt=\"\" class=\"pic_3_3\" data-ease-type=\"bounceInDown\">
                            <div class=\"text_3_1\" data-ease-type=\"fadeInLeft\">Trois thèmes</div>
                            <div class=\"text_3_2\" data-ease-type=\"fadeInLeft\">pour vos projets</div>
                            <div class=\"text_3_3\" data-ease-type=\"fadeInLeft\">Classez votre projet dans une catégorie</div>
                            <div class=\"text_3_4\" data-ease-type=\"fadeInLeft\">Les travailleurs pourront alors y avoir accès plus rapidement et votre idée aura alors davantage de chance d'intéresser.</div>
                            <div class=\"text_3_5\" data-ease-type=\"fadeInLeft\"><a href=\"#\" class=\"general_button big arrow_right\"><span>En savoir plus</span></a></div>
                        </div>
                        
                        <div class=\"oneByOne_item\">
                            <div class=\"video_4_1\" data-ease-type=\"fadeIn\"><iframe src=\"http://player.vimeo.com/video/36778012?badge=0\" width=\"512\" height=\"288\" frameborder=\"0\" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
                            <div class=\"text_4_1\" data-ease-type=\"fadeInLeft\">MakinMind <b>répond</b> à toutes</div>
                            <div class=\"text_4_2\" data-ease-type=\"fadeInLeft\">vos <b>questions</b> en vidéo</div>
                            <div class=\"text_4_3\" data-ease-type=\"fadeInLeft\">Présentation des services disponibles</div>
                            <div class=\"text_4_4\" data-ease-type=\"fadeInLeft\">pourquoi utiliser MakinMind ? Quels gains pour votre projet ? Quels outils sont proposés ? Comment suis-je rémunéré ?</div>
                            <div class=\"text_4_5\" data-ease-type=\"fadeInLeft\"><a href=\"#\" class=\"general_button big arrow_right\"><span>En savoir plus</span></a></div>
                        </div>
                    </div>
                    
                    <div class=\"static_pic\"><img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("skydream/images/pic_slider_1_static.jpg"), "html", null, true);
        echo "\" alt=\"\"></div>
                    
                    <script type=\"text/javascript\">
                        \$(function() {
                            \$('#slider').oneByOne({
                                width : 2000,
                                className : 'oneByOne1',                 
                                easeType : 'bounceInRight',
                                slideShow : false,
                                showArrow : true,
                                showButton : false
                            });
                        });
                    </script>
                </section>
                ";
    }

    // line 220
    public function block_content_type($context, array $blocks = array())
    {
        echo " class=\"right_sidebar\"";
    }

    // line 225
    public function block_content($context, array $blocks = array())
    {
        // line 226
        echo "                
                        ";
    }

    // line 229
    public function block_right($context, array $blocks = array())
    {
        // line 230
        echo "
                        ";
    }

    // line 237
    public function block_footer($context, array $blocks = array())
    {
        // line 238
        echo "        <footer>
            <div id=\"footer\">
                <section class=\"section_top\">
                    <div class=\"inner\">
                        <div class=\"block_to_top\">
                            <a href=\"#\">RETOUR EN HAUT</a>                     
                        </div>
                        
                        <div class=\"block_footer_widgets\">
                            <div class=\"column\">
                                <h3>A propos</h3>
                                
                                <div class=\"block_footer_about\">
                                    <p>Equipe commerciale MakinMind France.</p>
                                    <p>&nbsp;</p>
                                    <p>Address: 46, rue Saint Charles, 78000 Versailles, France</p>
                                    <p>Telephone: +33 687757602</p>
                                    <p>Email: info@makinmind.com</p>
                                </div>
                                
                                <div class=\"block_footer_social_1\">
                                    <ul>
                                        <li><a href=\"#\" class=\"twitter\">Twitter</a></li>
                                        <li><a href=\"#\" class=\"facebook\">Facebook</a></li>
                                        <li><a href=\"#\" class=\"pinterest\">Pinterest</a></li>
                                        <li><a href=\"#\" class=\"vimeo\">Vimeo</a></li>
                                        <li><a href=\"#\" class=\"rss\">RSS</a></li>
                                        <li><a href=\"#\" class=\"flickr\">Flickr</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            
                            <div class=\"column\">
                                <h3>Derniers projets</h3>
                                
                                <div class=\"block_footer_recent_posts\">
                                    <ul>
                                        <li><a href=\"blog_post.html\">Super projet #1</a></li>
                                        <li><a href=\"blog_post.html\">Très bon projet #2</a></li>
                                        <li><a href=\"blog_post.html\">Mega cool projet #3</a></li>
                                        <li><a href=\"blog_post.html\">Petit porjet sympa #5</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            
                            <div class=\"column\">
                                <h3>Latest Tweets</h3>
                                
                                <div class=\"block_footer_tweets\">
                                   
                                </div>
                            </div>
                            
                            <div class=\"column\">
                                <h3>Flickr Stream</h3>
                                <!--
                                <div class=\"block_flickr_footer\">
                                    <ul>
                                        <li><a href=\"http://www.flickr.com/\" target=\"_blank\"><img src=\"images/pic_flickr_1.jpg\" alt=\"\"></a></li>
                                        <li><a href=\"http://www.flickr.com/\" target=\"_blank\"><img src=\"images/pic_flickr_2.jpg\" alt=\"\"></a></li>
                                        <li><a href=\"http://www.flickr.com/\" target=\"_blank\"><img src=\"images/pic_flickr_3.jpg\" alt=\"\"></a></li>
                                        <li><a href=\"http://www.flickr.com/\" target=\"_blank\"><img src=\"images/pic_flickr_4.jpg\" alt=\"\"></a></li>
                                        <li><a href=\"http://www.flickr.com/\" target=\"_blank\"><img src=\"images/pic_flickr_5.jpg\" alt=\"\"></a></li>
                                        <li><a href=\"http://www.flickr.com/\" target=\"_blank\"><img src=\"images/pic_flickr_6.jpg\" alt=\"\"></a></li>
                                        <li><a href=\"http://www.flickr.com/\" target=\"_blank\"><img src=\"images/pic_flickr_7.jpg\" alt=\"\"></a></li>
                                        <li><a href=\"http://www.flickr.com/\" target=\"_blank\"><img src=\"images/pic_flickr_8.jpg\" alt=\"\"></a></li>
                                    </ul>
                                </div>
                            -->
                            </div>
                            
                            <div class=\"clearboth\"></div>
                        </div>
                    </div>
                </section>
                
                <section class=\"section_bottom\">
                    <div class=\"inner\">
                        <div class=\"block_bottom_menu\">
                            <ul>
                                <li><a href=\"#\">Plan du site</a></li>
                                <li><a href=\"#\">Conditions</a></li>
                                <li><a href=\"#\">Confidentialité</a></li>
                            </ul>
                        </div>
                        
                        <div class=\"block_copyrights\"><p>Copyright &copy; 2013 MakinMind Corporation. All rights reserved.</p></div>
                        
                        <div class=\"clearboth\"></div>
                    </div>
                </section>
            </div>
        </footer>
        ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  467 => 238,  464 => 237,  459 => 230,  456 => 229,  451 => 226,  448 => 225,  442 => 220,  422 => 200,  401 => 182,  397 => 181,  393 => 180,  382 => 172,  378 => 171,  368 => 164,  364 => 163,  359 => 161,  351 => 155,  348 => 154,  341 => 142,  338 => 141,  332 => 137,  320 => 144,  318 => 141,  311 => 137,  307 => 135,  304 => 134,  299 => 71,  294 => 37,  289 => 31,  283 => 28,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  263 => 23,  258 => 21,  254 => 20,  250 => 18,  247 => 17,  241 => 5,  233 => 334,  231 => 237,  222 => 229,  219 => 228,  217 => 225,  203 => 216,  201 => 154,  198 => 153,  125 => 71,  58 => 33,  56 => 31,  36 => 5,  91 => 30,  68 => 17,  43 => 8,  209 => 220,  205 => 82,  196 => 134,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 14,  133 => 74,  124 => 41,  111 => 37,  107 => 58,  80 => 24,  69 => 20,  63 => 18,  60 => 13,  52 => 12,  97 => 34,  95 => 21,  88 => 29,  78 => 25,  75 => 45,  71 => 14,  25 => 4,  82 => 27,  72 => 16,  64 => 37,  53 => 30,  34 => 5,  92 => 20,  86 => 28,  79 => 40,  46 => 7,  37 => 5,  19 => 2,  44 => 11,  27 => 4,  49 => 11,  42 => 10,  40 => 7,  33 => 5,  29 => 5,  26 => 3,  224 => 232,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  131 => 48,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  99 => 52,  77 => 46,  74 => 27,  57 => 12,  47 => 19,  39 => 7,  32 => 11,  24 => 3,  22 => 3,  30 => 1,  23 => 3,  20 => 2,  17 => 1,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 50,  89 => 49,  87 => 29,  84 => 47,  81 => 26,  73 => 21,  70 => 18,  67 => 13,  62 => 14,  59 => 23,  55 => 14,  51 => 17,  48 => 9,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
