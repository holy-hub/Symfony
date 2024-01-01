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

/* conditionEtTermes.html.twig */
class __TwigTemplate_e63614335a03ca8ac7234f3a275ed03c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conditionEtTermes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conditionEtTermes.html.twig", 1);
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
    <h1 class=\"mt-4\">Conditions et termes</h1>

    <h2>Acceptation des conditions</h2>
    <p>En utilisant cette application, vous acceptez les conditions et termes suivants :</p>
    <ul>
        <li>Vous êtes responsable de la confidentialité de vos informations d'identification.</li>
        <li>Vous ne devez pas utiliser cette application à des fins illégales ou non autorisées.</li>
        <li>Toute violation de ces conditions peut entraîner la résiliation de votre compte.</li>
    </ul>

    <h2>Propriété intellectuelle</h2>
    <p>Tous les contenus présents dans cette application sont protégés par des droits de propriété intellectuelle.</p>
    <ul>
        <li>Vous ne pouvez pas copier, reproduire ou distribuer ces contenus sans autorisation.</li>
        <li>Toute utilisation non autorisée peut entraîner des poursuites judiciaires.</li>
    </ul>

    <h2>Limitation de responsabilité</h2>
    <p>Nous ne pouvons pas garantir l'exactitude, l'exhaustivité ou la fiabilité des informations présentes dans cette application.</p>
    <ul>
        <li>Nous ne sommes pas responsables des dommages directs, indirects ou consécutifs résultant de l'utilisation de cette application.</li>
        <li>Nous nous réservons le droit de modifier, suspendre ou interrompre cette application à tout moment.</li>
    </ul>

    <h2>Modification des conditions</h2>
    <p>Nous nous réservons le droit de modifier ces conditions à tout moment sans préavis.</p>
    <ul>
        <li>Il est de votre responsabilité de consulter régulièrement les conditions mises à jour.</li>
        <li>En continuant à utiliser cette application, vous acceptez les conditions modifiées.</li>
    </ul>

    <h2>Nous contacter</h2>
    <p>Si vous avez des questions ou des préoccupations concernant les conditions et termes, veuillez nous contacter à l'adresse suivante : [email protected]</p>
</div>
\\
<a href=\"";
        // line 43
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
        return "conditionEtTermes.html.twig";
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
        return array (  112 => 43,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}{{ title }}{% endblock title %}

{% block body %}

<div class=\"container\">
    <h1 class=\"mt-4\">Conditions et termes</h1>

    <h2>Acceptation des conditions</h2>
    <p>En utilisant cette application, vous acceptez les conditions et termes suivants :</p>
    <ul>
        <li>Vous êtes responsable de la confidentialité de vos informations d'identification.</li>
        <li>Vous ne devez pas utiliser cette application à des fins illégales ou non autorisées.</li>
        <li>Toute violation de ces conditions peut entraîner la résiliation de votre compte.</li>
    </ul>

    <h2>Propriété intellectuelle</h2>
    <p>Tous les contenus présents dans cette application sont protégés par des droits de propriété intellectuelle.</p>
    <ul>
        <li>Vous ne pouvez pas copier, reproduire ou distribuer ces contenus sans autorisation.</li>
        <li>Toute utilisation non autorisée peut entraîner des poursuites judiciaires.</li>
    </ul>

    <h2>Limitation de responsabilité</h2>
    <p>Nous ne pouvons pas garantir l'exactitude, l'exhaustivité ou la fiabilité des informations présentes dans cette application.</p>
    <ul>
        <li>Nous ne sommes pas responsables des dommages directs, indirects ou consécutifs résultant de l'utilisation de cette application.</li>
        <li>Nous nous réservons le droit de modifier, suspendre ou interrompre cette application à tout moment.</li>
    </ul>

    <h2>Modification des conditions</h2>
    <p>Nous nous réservons le droit de modifier ces conditions à tout moment sans préavis.</p>
    <ul>
        <li>Il est de votre responsabilité de consulter régulièrement les conditions mises à jour.</li>
        <li>En continuant à utiliser cette application, vous acceptez les conditions modifiées.</li>
    </ul>

    <h2>Nous contacter</h2>
    <p>Si vous avez des questions ou des préoccupations concernant les conditions et termes, veuillez nous contacter à l'adresse suivante : [email protected]</p>
</div>
\\
<a href=\"{{ path('retour') }}\" class=\"btn btn-primary d-flex justify-content-center mt-3\">Retour</a>

{% endblock body %}", "conditionEtTermes.html.twig", "D:\\IPNET\\PROJET\\PPE Groupe ASSIH-TCHANGAI\\App\\tickets\\templates\\conditionEtTermes.html.twig");
    }
}
