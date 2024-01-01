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

/* privacy_policy.html.twig */
class __TwigTemplate_b4d3759f39dbb6ed7055183755a28eaa extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "privacy_policy.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "privacy_policy.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\">
    <h1 class=\"mt-4\">Politique de confidentialité</h1>
    <p>Dernière mise à jour : [Date]</p>

    <h2>Informations collectées</h2>
    <p>Nous collectons les informations suivantes :</p>
    <ul>
        <li>Données personnelles telles que le nom, l'adresse e-mail, etc.</li>
        <li>Données de contact et d'identification</li>
        <li>Informations sur les préférences et les intérêts</li>
    </ul>

    <h2>Utilisation des informations</h2>
    <p>Nous utilisons les informations collectées pour :</p>
    <ul>
        <li>Fournir nos services et gérer les comptes utilisateurs</li>
        <li>Personnaliser l'expérience utilisateur</li>
        <li>Améliorer nos produits et services</li>
    </ul>

    <h2>Divulgation à des tiers</h2>
    <p>Nous ne divulguons pas vos informations personnelles à des tiers sans votre consentement explicite, sauf dans les cas suivants :</p>
    <ul>
        <li>Lorsque cela est nécessaire pour fournir les services demandés</li>
        <li>En cas d'obligation légale ou de demande d'une autorité compétente</li>
    </ul>

    <h2>Sécurité</h2>
    <p>Nous prenons des mesures de sécurité pour protéger vos informations personnelles contre tout accès non autorisé, perte ou divulgation.</p>

    <h2>Nous contacter</h2>
    <p>Si vous avez des questions ou des suggestions concernant notre politique de confidentialité, veuillez nous contacter à l'adresse suivante : [email protected]</p>
</div>

<a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("retour");
        echo "\" class=\"btn btn-primary d-flex justify-content-center mt-3\">Retour</a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "privacy_policy.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  110 => 41,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{ title }}{% endblock title %}

{% block body %}

<div class=\"container\">
    <h1 class=\"mt-4\">Politique de confidentialité</h1>
    <p>Dernière mise à jour : [Date]</p>

    <h2>Informations collectées</h2>
    <p>Nous collectons les informations suivantes :</p>
    <ul>
        <li>Données personnelles telles que le nom, l'adresse e-mail, etc.</li>
        <li>Données de contact et d'identification</li>
        <li>Informations sur les préférences et les intérêts</li>
    </ul>

    <h2>Utilisation des informations</h2>
    <p>Nous utilisons les informations collectées pour :</p>
    <ul>
        <li>Fournir nos services et gérer les comptes utilisateurs</li>
        <li>Personnaliser l'expérience utilisateur</li>
        <li>Améliorer nos produits et services</li>
    </ul>

    <h2>Divulgation à des tiers</h2>
    <p>Nous ne divulguons pas vos informations personnelles à des tiers sans votre consentement explicite, sauf dans les cas suivants :</p>
    <ul>
        <li>Lorsque cela est nécessaire pour fournir les services demandés</li>
        <li>En cas d'obligation légale ou de demande d'une autorité compétente</li>
    </ul>

    <h2>Sécurité</h2>
    <p>Nous prenons des mesures de sécurité pour protéger vos informations personnelles contre tout accès non autorisé, perte ou divulgation.</p>

    <h2>Nous contacter</h2>
    <p>Si vous avez des questions ou des suggestions concernant notre politique de confidentialité, veuillez nous contacter à l'adresse suivante : [email protected]</p>
</div>

<a href=\"{{ path('retour') }}\" class=\"btn btn-primary d-flex justify-content-center mt-3\">Retour</a>

{% endblock body %}", "privacy_policy.html.twig", "D:\\IPNET\\PROJET\\PPE Groupe ASSIH-TCHANGAI\\App\\tickets\\templates\\privacy_policy.html.twig");
    }
}
