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

/* welcome/index.html.twig */
class __TwigTemplate_c2ae8f55ff788a4977ab28e913804402 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "welcome/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "welcome/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "welcome/index.html.twig", 1);
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

        echo "presentation provisoire
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
        echo "        ";
        $this->loadTemplate("partial/back_nav_bar.html.twig", "welcome/index.html.twig", 7)->display($context);
        // line 8
        echo "
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .blinkblink {
    .blink { animation: blinker 1.5s linear infinite; color: orange; font-family: sans-serif;
    }
</style>

<div class=\"example-wrapper\">
    <h1 class=\"blinkblink\">Hello!!! This friendly message is coming from oh.my03.com! ✅</h1>
    <div>
        <div class=\"example-wrapper\">
            <h2>Lettre de motivation</h2>
            <div>
                <p>
                    Bonjour,<br>
                    Je me permets de vous solliciter pour le poste de \"Développeur PHP (H/F)\" pour lequel je souhaite vous proposer ma candidature.
                    J'ai été formé au CNAM et par Aliptic. J'ai étudié la conception des bases de données façon Meurise et accès en Php via Pdo, MySqli.
                    Je sais générer du pdf en php, J'ai un goût pour l'algorithmique, et je sors d'une formation sur Symfony...<br>
                    J'héberge chez moi sur un raspberry Pi un site pour présenter de futures maquettes (j'ai obtenu des sous domaines ainsi que des certificats SSL par Letsencrypt...<br>
                    voici l'adresse: <a href=\"https://oh.my03.com\">oh.my03.com</a><div>";
        // line 29
        echo "</div>(c'est là en fait...)  je ne montre rien pour l'instant à part la version de Symfony avant d'aboutir
                à quelque chose de consistant mais cela témoigne du fait que je peux initier des projets Symfony...
                j'ai travaillé plusieurs langages et je me forme moi même sur Node et React... Je vis sans doute loin du siège de votre entreprise, mais je peux travailler en télé-travail avec visio et partage d'écran toute la journée via Discord ou autre...<br>
                Je peux bénéficier d'une mesure POEI via Pôle Emploi : possibilité de me former régulièrement pour monter en compétence par Aliptic ou le CNAM.
                Vous verrez que sur mon CV que j'ai été professeur de Musique (pendant 26 ans) et Technicien son  mais suite à des problèmes de santé j'ai arrêté car beaucoup de route. Je me suis remis...
                <br>
                Veuillez trouver en pièce jointe mon CV.
                Je me tiens à votre disposition pour toutes questions relatives à mon profil.
                Bien cordialement.<br>

                Signé: <br>
                <strong>Mon Nom</strong>
                </p>
<iframe id=\"inlineFrameExample\"
    title=\"Exemple Rnbo\"
    width=\"300\"
    height=\"200\"
    src=\"http://18.115.129.73:8080\">
</iframe>
                <!--https://www.w3schools.com/css/css3_animations.asp-->
            </div>
            <div class=\"example-wrapper\">
";
        // line 58
        echo "            </div>
        </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "welcome/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 58,  115 => 29,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}presentation provisoire
{% endblock %}

{% block body %}
        {% include 'partial/back_nav_bar.html.twig' %}

<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    .blinkblink {
    .blink { animation: blinker 1.5s linear infinite; color: orange; font-family: sans-serif;
    }
</style>

<div class=\"example-wrapper\">
    <h1 class=\"blinkblink\">Hello!!! This friendly message is coming from oh.my03.com! ✅</h1>
    <div>
        <div class=\"example-wrapper\">
            <h2>Lettre de motivation</h2>
            <div>
                <p>
                    Bonjour,<br>
                    Je me permets de vous solliciter pour le poste de \"Développeur PHP (H/F)\" pour lequel je souhaite vous proposer ma candidature.
                    J'ai été formé au CNAM et par Aliptic. J'ai étudié la conception des bases de données façon Meurise et accès en Php via Pdo, MySqli.
                    Je sais générer du pdf en php, J'ai un goût pour l'algorithmique, et je sors d'une formation sur Symfony...<br>
                    J'héberge chez moi sur un raspberry Pi un site pour présenter de futures maquettes (j'ai obtenu des sous domaines ainsi que des certificats SSL par Letsencrypt...<br>
                    voici l'adresse: <a href=\"https://oh.my03.com\">oh.my03.com</a><div>{# <img src=\"{{ asset('rasp.gif') }}\" height=\"50\" alt=\"Raspi alive\">O'flix\"> #}</div>(c'est là en fait...)  je ne montre rien pour l'instant à part la version de Symfony avant d'aboutir
                à quelque chose de consistant mais cela témoigne du fait que je peux initier des projets Symfony...
                j'ai travaillé plusieurs langages et je me forme moi même sur Node et React... Je vis sans doute loin du siège de votre entreprise, mais je peux travailler en télé-travail avec visio et partage d'écran toute la journée via Discord ou autre...<br>
                Je peux bénéficier d'une mesure POEI via Pôle Emploi : possibilité de me former régulièrement pour monter en compétence par Aliptic ou le CNAM.
                Vous verrez que sur mon CV que j'ai été professeur de Musique (pendant 26 ans) et Technicien son  mais suite à des problèmes de santé j'ai arrêté car beaucoup de route. Je me suis remis...
                <br>
                Veuillez trouver en pièce jointe mon CV.
                Je me tiens à votre disposition pour toutes questions relatives à mon profil.
                Bien cordialement.<br>

                Signé: <br>
                <strong>Mon Nom</strong>
                </p>
<iframe id=\"inlineFrameExample\"
    title=\"Exemple Rnbo\"
    width=\"300\"
    height=\"200\"
    src=\"http://18.115.129.73:8080\">
</iframe>
                <!--https://www.w3schools.com/css/css3_animations.asp-->
            </div>
            <div class=\"example-wrapper\">
{#                <h1>Hello {{ controller_name }}! ✅</h1>

                This friendly message is coming from:
                <ul>
                    <li>Your controller at <code><a href=\"{{ '/var/www/docker_sf/src/Controller/WelcomeController.php'|file_link(0) }}\">src/Controller/WelcomeController.php</a></code></li>
                    <li>Your template at <code><a href=\"{{ '/var/www/docker_sf/templates/welcome/index.html.twig'|file_link(0) }}\">templates/welcome/index.html.twig</a></code></li>
                </ul>  #}
            </div>
        </div>

{% endblock %}
", "welcome/index.html.twig", "/var/www/oh.my03.com/templates/welcome/index.html.twig");
    }
}
