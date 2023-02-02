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

/* back/answer/edit.html.twig */
class __TwigTemplate_c852f40e10ef8a4df120089538ca00a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/answer/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/answer/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back/answer/edit.html.twig", 1);
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

        echo "Édition Réponse
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t";
        $this->loadTemplate("back/partial/back_nav_bar.html.twig", "back/answer/edit.html.twig", 7)->display($context);
        // line 8
        echo "\t<div class=\"container pt-5\">
\t\t<div class=\"row mb-2\">
\t\t\t<div class=\"col-8 mx-auto\">
\t\t\t\t<h1 class=\"text-center my-5\">Modifier la réponse à la ou les questions suivantes</h1>
\t\t\t\t<a class=\"btn btn_return mb-5\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_answer_index");
        echo "\">Retour à la liste</a>
\t\t\t\t<div class=\"col  fw-bold\">
\t\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 14, $this->source); })()), "questionAnswers", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["questions"]) {
            // line 15
            echo "\t\t\t\t\t\t<h2 class=\"response_quesion fw-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["questions"], "question", [], "any", false, false, false, 15), "content", [], "any", false, false, false, 15), "html", null, true);
            echo " <span class=\"response_good_";
            echo ((twig_get_attribute($this->env, $this->source, $context["questions"], "isGood", [], "any", false, false, false, 15)) ? ("true") : ("false"));
            echo " mx-3\">  ";
            echo ((twig_get_attribute($this->env, $this->source, $context["questions"], "isGood", [], "any", false, false, false, 15)) ? ("Réponse Vrai") : ("Réponse Fausse"));
            echo "</span></h2>
\t\t\t\t\t\t<div class=\"col mb-3 d-flex justify-content-center mb-5 my-3\">
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn_show text-center mx-3\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_question_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["questions"], "question", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">Voir</a>
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn_edit text-center mx-3\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_question_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["questions"], "question", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">Modifier</a>
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn_delete text-center mx-3\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_question_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["questions"], "question", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\">Supprimer</a>
\t\t\t\t\t\t</div
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col\">
\t\t\t\t\t";
        // line 25
        echo twig_include($this->env, $context, "back/answer/_form.html.twig", ["button_label" => "Sauvegarder"]);
        echo "
\t\t\t\t\t";
        // line 26
        echo twig_include($this->env, $context, "back/answer/_delete_form.html.twig");
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "back/answer/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 26,  139 => 25,  134 => 22,  125 => 19,  121 => 18,  117 => 17,  107 => 15,  103 => 14,  98 => 12,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Édition Réponse
{% endblock %}

{% block body %}
\t{% include 'back/partial/back_nav_bar.html.twig' %}
\t<div class=\"container pt-5\">
\t\t<div class=\"row mb-2\">
\t\t\t<div class=\"col-8 mx-auto\">
\t\t\t\t<h1 class=\"text-center my-5\">Modifier la réponse à la ou les questions suivantes</h1>
\t\t\t\t<a class=\"btn btn_return mb-5\" href=\"{{ path('app_back_answer_index') }}\">Retour à la liste</a>
\t\t\t\t<div class=\"col  fw-bold\">
\t\t\t\t\t{% for questions in answer.questionAnswers %}
\t\t\t\t\t\t<h2 class=\"response_quesion fw-bold\">{{ questions.question.content }} <span class=\"response_good_{{ questions.isGood ? 'true' : 'false'}} mx-3\">  {{ questions.isGood ? 'Réponse Vrai' : 'Réponse Fausse'}}</span></h2>
\t\t\t\t\t\t<div class=\"col mb-3 d-flex justify-content-center mb-5 my-3\">
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn_show text-center mx-3\" href=\"{{ path('app_back_question_show', {'id': questions.question.id}) }}\">Voir</a>
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn_edit text-center mx-3\" href=\"{{ path('app_back_question_edit', {'id': questions.question.id}) }}\">Modifier</a>
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn_delete text-center mx-3\" href=\"{{ path('app_back_question_delete', {'id': questions.question.id}) }}\">Supprimer</a>
\t\t\t\t\t\t</div
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col\">
\t\t\t\t\t{{ include('back/answer/_form.html.twig', {'button_label': 'Sauvegarder'}) }}
\t\t\t\t\t{{ include('back/answer/_delete_form.html.twig') }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "back/answer/edit.html.twig", "/var/www/oh.my03.com/templates/back/answer/edit.html.twig");
    }
}