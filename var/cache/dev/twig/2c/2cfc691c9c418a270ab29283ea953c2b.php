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

/* partial/back_nav_bar.html.twig */
class __TwigTemplate_e3aaaa891e1aaac22f96d5e7ec252fce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/back_nav_bar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/back_nav_bar.html.twig"));

        // line 1
        echo "
        <!-- Nav -->
        <nav class=\"navbar navbar-expand-lg back_nav navbar-dark bg-dark\">
            <div class=\"container-fluid\">
                <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_welcome");
        echo "\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none header-logo\">
";
        // line 7
        echo "          ";
        // line 8
        echo "                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarSupportedContent\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                </div>
            </div>
        </nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partial/back_nav_bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  53 => 7,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
        <!-- Nav -->
        <nav class=\"navbar navbar-expand-lg back_nav navbar-dark bg-dark\">
            <div class=\"container-fluid\">
                <a href=\"{{ path('app_welcome') }}\" class=\"d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none header-logo\">
{#                    <img src=\"{{ asset('favicon.png') }}\" height=\"50\" alt=\"Logo O'flix\">  #}
          {#          <span class=\"header-logo__title text-uppercase mx-3\">rasp.gif</span> #}
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarSupportedContent\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                </div>
            </div>
        </nav>
", "partial/back_nav_bar.html.twig", "/var/www/oh.my03.com/templates/partial/back_nav_bar.html.twig");
    }
}
