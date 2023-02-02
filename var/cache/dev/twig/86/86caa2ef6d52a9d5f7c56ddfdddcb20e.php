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

/* back/partial/back_nav_bar.html.twig */
class __TwigTemplate_d9e20dacb9d249a07257876596fa5b5e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partial/back_nav_bar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/partial/back_nav_bar.html.twig"));

        // line 1
        echo "
        <!-- Nav -->
        <nav class=\"navbar navbar-expand-lg back_nav navbar-dark bg-dark\">
            <div class=\"container-fluid\">
                <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_question_answer_index");
        echo "\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none header-logo\">
                    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" height=\"50\" alt=\"Logo O'flix\">
                    <span class=\"header-logo__title text-uppercase mx-3\" style=\"color: #dc3545;\">Back Réponse D</span>
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarSupportedContent\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0 text-center\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 16
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "get", [0 => "_route"], "method", false, false, false, 16), [0 => "app_back_question_index", 1 => "app_back_question_new", 2 => "app_back_question_show", 3 => "app_back_question_edit"])) {
            echo " active ";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_question_index");
        echo "\">Question</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 19
        if (twig_in_filter("app_back_answer", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "get", [0 => "_route"], "method", false, false, false, 19))) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_answer_index");
        echo "\"><i class=\"bi bi-film\"></i>Réponse</a>
                        </li>

                    
                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 24
        if (twig_in_filter("app_back_game", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "get", [0 => "_route"], "method", false, false, false, 24))) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_game_index");
        echo "\">Jeu</a>
                        </li>
                    
                        
                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 29
        if (twig_in_filter("app_back_level", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "get", [0 => "_route"], "method", false, false, false, 29))) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_level_index");
        echo "\"><i class=\"bi bi-bookmark\"></i>Difficulté</a>
                        </li>
                        
                        
                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 34
        if (twig_in_filter("app_back_category", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "get", [0 => "_route"], "method", false, false, false, 34))) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_category_index");
        echo "\"><i class=\"bi bi-bookmark\"></i>Catégorie</a>
                        </li>
                    
                        
                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 39
        if ((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "get", [0 => "_route"], "method", false, false, false, 39)) && is_string($__internal_compile_1 = "app_back_question_answer") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)))) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_question_answer_index");
        echo "\"><i class=\"bi bi-bookmark\"></i>QuestionRéponse</a>
                        </li>
                    
                        
                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 44
        if ((is_string($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "get", [0 => "_route"], "method", false, false, false, 44)) && is_string($__internal_compile_3 = "app_back_user_game_answer") && ('' === $__internal_compile_3 || 0 === strpos($__internal_compile_2, $__internal_compile_3)))) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_user_game_answer_index");
        echo "\"><i class=\"bi bi-bookmark\"></i>UserJeuRéponse</a>
                        </li>
                    
                        
                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 49
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "get", [0 => "_route"], "method", false, false, false, 49), [0 => "app_back_user_index", 1 => "app_back_user_new", 2 => "app_back_user_show", 3 => "app_back_user_edit"])) {
            echo " active ";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_user_index");
        echo "\"><i class=\"bi bi-bookmark\"></i>Membre</a>
                        </li>
                    
                       
                    </ul>
                    
                            ";
        // line 77
        echo "
                    

                    ";
        // line 84
        echo "                </div>
            </div>
        </nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "back/partial/back_nav_bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 84,  161 => 77,  148 => 49,  136 => 44,  124 => 39,  112 => 34,  100 => 29,  88 => 24,  76 => 19,  66 => 16,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
        <!-- Nav -->
        <nav class=\"navbar navbar-expand-lg back_nav navbar-dark bg-dark\">
            <div class=\"container-fluid\">
                <a href=\"{{ path('app_back_question_answer_index') }}\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none header-logo\">
                    <img src=\"{{ asset('favicon.png') }}\" height=\"50\" alt=\"Logo O'flix\">
                    <span class=\"header-logo__title text-uppercase mx-3\" style=\"color: #dc3545;\">Back Réponse D</span>
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarSupportedContent\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0 text-center\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if app.request.get('_route') in ['app_back_question_index','app_back_question_new','app_back_question_show','app_back_question_edit'] %} active {% endif %}\" href=\"{{ path('app_back_question_index') }}\">Question</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if 'app_back_answer' in app.request.get('_route')%}active{% endif %}\" href=\"{{ path('app_back_answer_index') }}\"><i class=\"bi bi-film\"></i>Réponse</a>
                        </li>

                    
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if 'app_back_game' in app.request.get('_route')%}active{% endif %}\" href=\"{{ path('app_back_game_index') }}\">Jeu</a>
                        </li>
                    
                        
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if 'app_back_level' in app.request.get('_route')%}active{% endif %}\" href=\"{{ path('app_back_level_index') }}\"><i class=\"bi bi-bookmark\"></i>Difficulté</a>
                        </li>
                        
                        
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if 'app_back_category' in app.request.get('_route')%}active{% endif %}\" href=\"{{ path('app_back_category_index') }}\"><i class=\"bi bi-bookmark\"></i>Catégorie</a>
                        </li>
                    
                        
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if app.request.get('_route') starts with 'app_back_question_answer' %}active{% endif %}\" href=\"{{ path('app_back_question_answer_index') }}\"><i class=\"bi bi-bookmark\"></i>QuestionRéponse</a>
                        </li>
                    
                        
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if app.request.get('_route') starts with 'app_back_user_game_answer' %}active{% endif %}\" href=\"{{ path('app_back_user_game_answer_index') }}\"><i class=\"bi bi-bookmark\"></i>UserJeuRéponse</a>
                        </li>
                    
                        
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if app.request.get('_route') in ['app_back_user_index','app_back_user_new','app_back_user_show','app_back_user_edit'] %} active {% endif %}\" href=\"{{ path('app_back_user_index') }}\"><i class=\"bi bi-bookmark\"></i>Membre</a>
                        </li>
                    
                       
                    </ul>
                    
                            {# {% if app.user == null %}
                                <a href=\"{{ path('app_login')}}\" class=\"btn btn-danger me-2\">Connexion</a>
                            {% else %}
                                <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                                    data-bs-toggle=\"dropdown\">
                                    <span>{{ app.user.pseudo }}</span>
                                    <i class=\"bi bi-person-square\"></i>
                                </a>
                                
                                <ul class=\"dropdown-menu\">
                                    <li><a class=\"dropdown-item\" href=\"{{ path('app_back_question_index') }}\">Backoffice</a></li>
                                    <li>
                                        <hr class=\"dropdown-divider\">
                                    </li>
                                    <li><a class=\"dropdown-item\" href=\"{{ path('app_logout')}}\">Déconnexion</a></li>
                                </ul>
                            </li>
                            {% endif %}


                    </ul> #}

                    

                    {# <form class=\"d-flex\" action=\"list.html\">
                        <input class=\"form-control form-control-sm me-2\" name=\"search\" type=\"search\" placeholder=\"Rechercher...\">
                        <button class=\"btn btn-outline-danger\" type=\"submit\"><i class=\"bi bi-search\"></i></button>
                    </form> #}
                </div>
            </div>
        </nav>", "back/partial/back_nav_bar.html.twig", "/var/www/oh.my03.com/templates/back/partial/back_nav_bar.html.twig");
    }
}
