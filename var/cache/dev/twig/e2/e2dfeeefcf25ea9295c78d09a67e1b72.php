<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Front/home/index.html.twig */
class __TwigTemplate_8abeb73e2bd649e21053e180f71a6a8d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Front/home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Front/home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "La réponse D !";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <header>
        <img src=\"logo.jpg\" alt=\"LOGO\" id=\"logo\">

        <!-- ";
        // line 9
        echo " -->
            <nav class=\"front_nav\">
                <a href=\"#\" class=\"navLink\">Classement</a>
                <a href=\"#\" class=\"navLink\">Désinscription</a>
                <a href=\"#\" class=\"navLink\">Déconnexion</a>
            </nav>
        <!-- ";
        // line 15
        echo " -->
            <!--
            <nav class=\"front_nav\">
                <a href=\"#\" class=\"navLink\">Classement</a>
                <a href=\"#\" class=\"navLink\">Inscription</a>
                <a href=\"#\" class=\"navLink\">Connexion</a>
            </nav>
            -->
        <!-- ";
        // line 23
        echo " -->
    </header>

    <main class=\"front_main\">
        <section id=\"titles\">
            <h1>La réponse D !</h1>
            <!-- ";
        // line 29
        echo " -->
                <h2>Bienvenue <span style=\"color: red\">&lt;User&gt;</span>, nous sommes heureux de vous
                accueillir&nbsp;!</h2>
                <h2>Vous avez actuellement <span style=\"color: red\">&lt;Score&gt;</span>&nbsp;points
                <br>et vous êtes en <span style=\"color: red\">&lt;Place&gt;</span><sup>ème</sup>&nbsp;position
                dans le classement général...</h2>
            <!-- ";
        // line 35
        echo " -->
                <!--
                <h2>Bienvenue dans ce jeu de quizz en&nbsp;ligne&nbsp;!</h2>
                <h2>
                    N'hésitez pas à vous inscrire dès maintenant pour découvrir le jeu complet ou simplement
                    à jouer à la mini&#8209;partie de 5 questions qui vous est offerte ci&#8209;dessous...-->
                    <!-- Le caractère \"&#8209;\" est le trait d'union insécable. -->
                <!--
                </h2>
                -->
            <!-- ";
        // line 45
        echo " -->
        </section>

        <!-- ";
        // line 48
        echo " -->
        <section id=\"level_categ\">
            <div id=\"game_choice\">
                <div id=\"level_div\">
                    <label for=\"level\">Niveau</label>
                    <select id=\"level\">
                        <option>Facile</option>
                        <option>Moyen</option>
                        <option>Difficile</option>
                    </select>
                </div>
                <div id=\"categ_div\">
                    <label for=\"categ\">Catégorie</label>
                    <select id=\"categ\">
                        <option>Cinéma</option>
                        <option>Culture générale</option>
                        <option>Géographie</option>
                        <option>Histoire</option>
                        <option>Musique</option>
                        <option>Sports</option>
                    </select>
                </div>
            </div>
            <div id=\"game_validate\">Valider</div>
        </section>
        <!-- ";
        // line 73
        echo " -->

        <section id=\"explain\">
            <h3>Comment jouer ?</h3>
            <!-- ";
        // line 77
        echo " -->
            <p>En tant que joueur connecté, vous pouvez choisir ci&#8209;dessus le niveau de difficulté et la
            catégorie de la partie complète de 15 questions présente ci&#8209;dessous.</p>
            <!-- ";
        // line 80
        echo " -->
            <p>Cliquer sur le bouton de la question ci&#8209;dessous déclenche le compteur et fait apparaître
            la question et ses réponses.</p>
            <p>Cliquer sur une réponse la valide et fait disparaître l'ensemble. Il n'est alors plus
            possible de modifier ce choix.</p>
            <p>Si vous n'avez pas répondu dans le temps imparti, la question et les réponses disparaissent
            aussi...</p>
        </section>

        <section id=\"buttons\">
            <!-- Ici se trouvent des boutons créés dans une boucle JS. -->
        </section>

        <!-- ";
        // line 93
        echo " -->
            <!-- ";
        // line 94
        echo " --> <!-- Par défaut -->
                <div id=\"count-down-timer\">20 secondes</div>
            <!-- ";
        // line 96
        echo " -->
                <!--
                <div id=\"count-down-timer\">15 secondes</div>
                -->
            <!-- ";
        // line 100
        echo " --> <!-- Niveau difficile -->
                <!--
                <div id=\"count-down-timer\">10 secondes</div>
                -->
            <!-- ";
        // line 104
        echo " -->
        <!-- ";
        // line 105
        echo " -->
            <!--
            <div id=\"count-down-timer\">20 secondes</div>
            -->
        <!-- ";
        // line 109
        echo " -->

        <section>
            <article id=\"question1\">
                <div class=\"question\">
                    Quelle est la plus grande planète de notre système solaire&nbsp;?
                </div>
                <div class=\"reponses\">
                    <div class=\"repLigne\">
                        <span class=\"reponse\" id=\"rep1-1\">Jupiter</span>
                        <span class=\"reponse\" id=\"rep1-2\">Saturne</span>
                    </div>
                    <div class=\"repLigne\">
                        <span class=\"reponse\" id=\"rep1-3\">Uranus</span>
                        <span class=\"reponse\" id=\"rep1-4\">Neptune</span>
                    </div>
                </div>
            </article>

            <article id=\"question2\">
                <div class=\"question\">
                    De quel groupe musical Rob Bourdon est-il le batteur&nbsp;?
                </div>
                <div class=\"reponses\">
                    <div class=\"repLigne\">
                        <span class=\"reponse\" id=\"rep2-1\">Deep Purple</span>
                        <span class=\"reponse\" id=\"rep2-2\">Guns N' Roses</span>
                    </div>
                    <div class=\"repLigne\">
                        <span class=\"reponse\" id=\"rep2-3\">Linkin Park</span>
                        <span class=\"reponse\" id=\"rep2-4\">Motörhead</span>
                    </div>
                </div>
            </article>

            <article id=\"question3\">
                <div class=\"question\">
                    Qui était le Président de la République Française en 1971&nbsp;?
                </div>
                <div class=\"reponses\">
                    <div class=\"repLigne\">
                        <span class=\"reponse\" id=\"rep3-1\">Charles de Gaulle</span>
                        <span class=\"reponse\" id=\"rep3-2\">Georges Pompidou</span>
                    </div>
                    <div class=\"repLigne\">
                        <span class=\"reponse\" id=\"rep3-3\">Valéry Giscard d'Estaing</span>
                        <span class=\"reponse\" id=\"rep3-4\">Alain Poher</span>
                    </div>
                </div>
            </article>

            <article id=\"question4\">
                <div class=\"question\">
                    Lequel de ces noms n'est pas celui d'un des bateaux de Christophe Colomb lors de sa
                \"découverte\" de l'Amérique&nbsp;?
                </div>
                <div class=\"reponses\">
                    <div class=\"repLigne\">
                        <span class=\"reponse\" id=\"rep4-1\">La Guardia</span>
                        <span class=\"reponse\" id=\"rep4-2\">La Niña</span>
                    </div>
                    <div class=\"repLigne\">
                        <span class=\"reponse\" id=\"rep4-3\">La Pinta</span>
                        <span class=\"reponse\" id=\"rep4-4\">La Santa Maria</span>
                    </div>
                </div>
            </article>

            <article id=\"question5\">
                <div class=\"question\">
                    Quand est décédé Ayrton Senna&nbsp;?
                </div>
                <div class=\"reponses\">
                    <div class=\"repLigne\">
                        <span class=\"reponse\" id=\"rep5-1\">3 novembre 1993</span>
                        <span class=\"reponse\" id=\"rep5-2\">15 février 1994</span>
                    </div>
                    <div class=\"repLigne\">
                        <span class=\"reponse\" id=\"rep5-3\">1er mai 1994</span>
                        <span class=\"reponse\" id=\"rep5-4\">4 mai 1995</span>
                    </div>
                </div>
            </article>

            <article id=\"result\">
                <p>La partie est terminée !</p>
                <p>Vous avez obtenu <span style=\"color: red\">&lt;Score&gt;</span>&nbsp;points.</p>
                <p>N'hésitez pas à rejouer ou à vous inscrire pour des parties plus longues !</p>
            </article>
        </section>

        <!-- ";
        // line 200
        echo " -->
        <!-- Ce bouton ne fait que recharger la page. -->
            <div id=\"new_game\" onClick=\"window.location.reload()\">Nouvelle partie</div>
        <!-- ";
        // line 203
        echo " -->

        <div id=\"hidden\"></div>
    </main>

    <footer>
        <img src=\"logo.jpg\" alt=\"LOGO\" id=\"footer_logo\">
        <div class=\"names\">
            <span class=\"eachName\">Christophe NEDAUD</span>
            <span class=\"eachName\">Gilbert&nbsp;FRADET</span>
            <span class=\"eachName\">Jérôme&nbsp;FROMANTIN</span>
        </div>
    </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "Front/home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 203,  318 => 200,  225 => 109,  219 => 105,  216 => 104,  210 => 100,  204 => 96,  200 => 94,  197 => 93,  182 => 80,  177 => 77,  171 => 73,  144 => 48,  139 => 45,  127 => 35,  119 => 29,  111 => 23,  101 => 15,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}La réponse D !{% endblock %}

{% block body %}
    <header>
        <img src=\"logo.jpg\" alt=\"LOGO\" id=\"logo\">

        <!-- {# if app.user #} -->
            <nav class=\"front_nav\">
                <a href=\"#\" class=\"navLink\">Classement</a>
                <a href=\"#\" class=\"navLink\">Désinscription</a>
                <a href=\"#\" class=\"navLink\">Déconnexion</a>
            </nav>
        <!-- {# else #} -->
            <!--
            <nav class=\"front_nav\">
                <a href=\"#\" class=\"navLink\">Classement</a>
                <a href=\"#\" class=\"navLink\">Inscription</a>
                <a href=\"#\" class=\"navLink\">Connexion</a>
            </nav>
            -->
        <!-- {# endif #} -->
    </header>

    <main class=\"front_main\">
        <section id=\"titles\">
            <h1>La réponse D !</h1>
            <!-- {# if app.user #} -->
                <h2>Bienvenue <span style=\"color: red\">&lt;User&gt;</span>, nous sommes heureux de vous
                accueillir&nbsp;!</h2>
                <h2>Vous avez actuellement <span style=\"color: red\">&lt;Score&gt;</span>&nbsp;points
                <br>et vous êtes en <span style=\"color: red\">&lt;Place&gt;</span><sup>ème</sup>&nbsp;position
                dans le classement général...</h2>
            <!-- {# else #} -->
                <!--
                <h2>Bienvenue dans ce jeu de quizz en&nbsp;ligne&nbsp;!</h2>
                <h2>
                    N'hésitez pas à vous inscrire dès maintenant pour découvrir le jeu complet ou simplement
                    à jouer à la mini&#8209;partie de 5 questions qui vous est offerte ci&#8209;dessous...-->
                    <!-- Le caractère \"&#8209;\" est le trait d'union insécable. -->
                <!--
                </h2>
                -->
            <!-- {# endif #} -->
        </section>

        <!-- {# if app.user #} -->
        <section id=\"level_categ\">
            <div id=\"game_choice\">
                <div id=\"level_div\">
                    <label for=\"level\">Niveau</label>
                    <select id=\"level\">
                        <option>Facile</option>
                        <option>Moyen</option>
                        <option>Difficile</option>
                    </select>
                </div>
                <div id=\"categ_div\">
                    <label for=\"categ\">Catégorie</label>
                    <select id=\"categ\">
                        <option>Cinéma</option>
                        <option>Culture générale</option>
                        <option>Géographie</option>
                        <option>Histoire</option>
                        <option>Musique</option>
                        <option>Sports</option>
                    </select>
                </div>
            </div>
            <div id=\"game_validate\">Valider</div>
        </section>
        <!-- {# endif #} -->

        <section id=\"explain\">
            <h3>Comment jouer ?</h3>
            <!-- {# if app.user #} -->
            <p>En tant que joueur connecté, vous pouvez choisir ci&#8209;dessus le niveau de difficulté et la
            catégorie de la partie complète de 15 questions présente ci&#8209;dessous.</p>
            <!-- {# endif #} -->
            <p>Cliquer sur le bouton de la question ci&#8209;dessous déclenche le compteur et fait apparaître
            la question et ses réponses.</p>
            <p>Cliquer sur une réponse la valide et fait disparaître l'ensemble. Il n'est alors plus
            possible de modifier ce choix.</p>
            <p>Si vous n'avez pas répondu dans le temps imparti, la question et les réponses disparaissent
            aussi...</p>
        </section>

        <section id=\"buttons\">
            <!-- Ici se trouvent des boutons créés dans une boucle JS. -->
        </section>

        <!-- {# if app.user #} -->
            <!-- {# if \"Niveau facile\" #} --> <!-- Par défaut -->
                <div id=\"count-down-timer\">20 secondes</div>
            <!-- {# elseif \"Niveau moyen\" #} -->
                <!--
                <div id=\"count-down-timer\">15 secondes</div>
                -->
            <!-- {# else #} --> <!-- Niveau difficile -->
                <!--
                <div id=\"count-down-timer\">10 secondes</div>
                -->
            <!-- {# endif #} -->
        <!-- {# else #} -->
            <!--
            <div id=\"count-down-timer\">20 secondes</div>
            -->
        <!-- {# endif #} -->

        <section>
            <article id=\"question1\">
                <div class=\"question\">
                    Quelle est la plus grande planète de notre système solaire&nbsp;?
                </div>
                <div class=\"reponses\">
                    <div class=\"repLigne\">
                        <span class=\"reponse\" id=\"rep1-1\">Jupiter</span>
                        <span class=\"reponse\" id=\"rep1-2\">Saturne</span>
                    </div>
                    <div class=\"repLigne\">
                        <span class=\"reponse\" id=\"rep1-3\">Uranus</span>
                        <span class=\"reponse\" id=\"rep1-4\">Neptune</span>
                    </div>
                </div>
            </article>

            <article id=\"question2\">
                <div class=\"question\">
                    De quel groupe musical Rob Bourdon est-il le batteur&nbsp;?
                </div>
                <div class=\"reponses\">
                    <div class=\"repLigne\">
                        <span class=\"reponse\" id=\"rep2-1\">Deep Purple</span>
                        <span class=\"reponse\" id=\"rep2-2\">Guns N' Roses</span>
                    </div>
                    <div class=\"repLigne\">
                        <span class=\"reponse\" id=\"rep2-3\">Linkin Park</span>
                        <span class=\"reponse\" id=\"rep2-4\">Motörhead</span>
                    </div>
                </div>
            </article>

            <article id=\"question3\">
                <div class=\"question\">
                    Qui était le Président de la République Française en 1971&nbsp;?
                </div>
                <div class=\"reponses\">
                    <div class=\"repLigne\">
                        <span class=\"reponse\" id=\"rep3-1\">Charles de Gaulle</span>
                        <span class=\"reponse\" id=\"rep3-2\">Georges Pompidou</span>
                    </div>
                    <div class=\"repLigne\">
                        <span class=\"reponse\" id=\"rep3-3\">Valéry Giscard d'Estaing</span>
                        <span class=\"reponse\" id=\"rep3-4\">Alain Poher</span>
                    </div>
                </div>
            </article>

            <article id=\"question4\">
                <div class=\"question\">
                    Lequel de ces noms n'est pas celui d'un des bateaux de Christophe Colomb lors de sa
                \"découverte\" de l'Amérique&nbsp;?
                </div>
                <div class=\"reponses\">
                    <div class=\"repLigne\">
                        <span class=\"reponse\" id=\"rep4-1\">La Guardia</span>
                        <span class=\"reponse\" id=\"rep4-2\">La Niña</span>
                    </div>
                    <div class=\"repLigne\">
                        <span class=\"reponse\" id=\"rep4-3\">La Pinta</span>
                        <span class=\"reponse\" id=\"rep4-4\">La Santa Maria</span>
                    </div>
                </div>
            </article>

            <article id=\"question5\">
                <div class=\"question\">
                    Quand est décédé Ayrton Senna&nbsp;?
                </div>
                <div class=\"reponses\">
                    <div class=\"repLigne\">
                        <span class=\"reponse\" id=\"rep5-1\">3 novembre 1993</span>
                        <span class=\"reponse\" id=\"rep5-2\">15 février 1994</span>
                    </div>
                    <div class=\"repLigne\">
                        <span class=\"reponse\" id=\"rep5-3\">1er mai 1994</span>
                        <span class=\"reponse\" id=\"rep5-4\">4 mai 1995</span>
                    </div>
                </div>
            </article>

            <article id=\"result\">
                <p>La partie est terminée !</p>
                <p>Vous avez obtenu <span style=\"color: red\">&lt;Score&gt;</span>&nbsp;points.</p>
                <p>N'hésitez pas à rejouer ou à vous inscrire pour des parties plus longues !</p>
            </article>
        </section>

        <!-- {# if app.user #} -->
        <!-- Ce bouton ne fait que recharger la page. -->
            <div id=\"new_game\" onClick=\"window.location.reload()\">Nouvelle partie</div>
        <!-- {# endif #} -->

        <div id=\"hidden\"></div>
    </main>

    <footer>
        <img src=\"logo.jpg\" alt=\"LOGO\" id=\"footer_logo\">
        <div class=\"names\">
            <span class=\"eachName\">Christophe NEDAUD</span>
            <span class=\"eachName\">Gilbert&nbsp;FRADET</span>
            <span class=\"eachName\">Jérôme&nbsp;FROMANTIN</span>
        </div>
    </footer>
{% endblock %}", "Front/home/index.html.twig", "/var/www/oh.my03.com/templates/Front/home/index.html.twig");
    }
}
