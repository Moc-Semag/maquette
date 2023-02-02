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

/* back/answer/show.html.twig */
class __TwigTemplate_eb2b126e110a388fafb506ed16e0755d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/answer/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/answer/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back/answer/show.html.twig", 1);
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

        echo "Answer
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
        $this->loadTemplate("back/partial/back_nav_bar.html.twig", "back/answer/show.html.twig", 7)->display($context);
        // line 8
        echo "\t<div class=\"container pt-5\">
\t\t<div class=\"row mb-2\">
\t\t\t<div class=\"col-8 mx-auto\">
\t\t\t\t<h1 class=\"text-center my-5\">Réponse</h1>
\t\t\t\t<div class=\"col  fw-bold\">
\t\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 13, $this->source); })()), "questionAnswers", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["questions"]) {
            // line 14
            echo "\t\t\t\t\t\t<h2 class=\"response_quesion fw-bold\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["questions"], "question", [], "any", false, false, false, 14), "content", [], "any", false, false, false, 14), "html", null, true);
            echo " <span class=\"response_good_";
            echo ((twig_get_attribute($this->env, $this->source, $context["questions"], "isGood", [], "any", false, false, false, 14)) ? ("true") : ("false"));
            echo " mx-3\">  ";
            echo ((twig_get_attribute($this->env, $this->source, $context["questions"], "isGood", [], "any", false, false, false, 14)) ? ("Réponse Vrai") : ("Réponse Fausse"));
            echo "</span></h2>
\t\t\t\t\t\t<div class=\"col mb-3 d-flex justify-content-center mb-5 my-3\">
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn_show text-center mx-3\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_question_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["questions"], "question", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\">Voir</a>
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn_edit text-center mx-3\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_question_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["questions"], "question", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\">Modifier</a>
\t\t\t\t\t\t\t<a class=\"btn btn-sm btn_delete text-center mx-3\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_question_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["questions"], "question", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">Supprimer</a>
\t\t\t\t\t\t</div
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['questions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t\t</div>
\t\t\t\t<a class=\"btn btn_return mb-5\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_answer_index");
        echo "\">Retour à  la liste</a>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t<td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Content</th>
\t\t\t\t\t\t\t<td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 31, $this->source); })()), "content", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>CreatedAt</th>
\t\t\t\t\t\t\t<td>";
        // line 36
        ((twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 36, $this->source); })()), "createdAt", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 36, $this->source); })()), "createdAt", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"col d-flex justify-content-center\">
\t\t\t\t\t<a class=\"btn btn-sm btn_edit\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_answer_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\">Modifier</a>
\t\t\t\t\t";
        // line 42
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
        return "back/answer/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 42,  164 => 41,  156 => 36,  148 => 31,  141 => 27,  133 => 22,  130 => 21,  121 => 18,  117 => 17,  113 => 16,  103 => 14,  99 => 13,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Answer
{% endblock %}

{% block body %}
\t{% include 'back/partial/back_nav_bar.html.twig' %}
\t<div class=\"container pt-5\">
\t\t<div class=\"row mb-2\">
\t\t\t<div class=\"col-8 mx-auto\">
\t\t\t\t<h1 class=\"text-center my-5\">Réponse</h1>
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
\t\t\t\t<a class=\"btn btn_return mb-5\" href=\"{{ path('app_back_answer_index') }}\">Retour à  la liste</a>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t<td>{{ answer.id }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Content</th>
\t\t\t\t\t\t\t<td>{{ answer.content }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>CreatedAt</th>
\t\t\t\t\t\t\t<td>{{ answer.createdAt ? answer.createdAt|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t<div class=\"col d-flex justify-content-center\">
\t\t\t\t\t<a class=\"btn btn-sm btn_edit\" href=\"{{ path('app_back_answer_edit', {'id': answer.id}) }}\">Modifier</a>
\t\t\t\t\t{{ include('back/answer/_delete_form.html.twig') }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "back/answer/show.html.twig", "/var/www/oh.my03.com/templates/back/answer/show.html.twig");
    }
}
