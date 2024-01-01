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

/* ticket/indexAll.html.twig */
class __TwigTemplate_73b6a9f781f9e0c9aa38ff42155b6cd8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/indexAll.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ticket/indexAll.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ticket index";
        
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
<div class=\"card mb-4\">
    <div class=\"card-header\">
        <i class=\"fas fa-table me-1\"></i>
        <h1 class=\"text-center mb-4 text-center\">Ticket table</h1>
    </div>
    <div class=\"card-body\">
        <table class=\"table text-center\">
            <theader>
                <tr>
                    <th>Username</th>
                    <th>Date de creation</th>
                    <th>Numero de parking</th>
                    <th>Agent</th>
                    <th>actions</th>
                </tr>
            </theader>
            <tfoot>
                <tr>
                    <th>Username</th>
                    <th>Date de creation</th>
                    <th>Numero de parking</th>
                    <th>Agent</th>
                    <th>actions</th>
                </tr>
            </tfoot>
            <tbody>
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 34
            echo "                <tr>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "username", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            ((twig_get_attribute($this->env, $this->source, $context["ticket"], "dateDeCreation", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "dateDeCreation", [], "any", false, false, false, 36), "Y-m-d h:i"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "numeroDeParking", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ticket"], "Agent", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
                // line 39
                echo "                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "username", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                    <td class='d-flex justify-content-evenly flex-grow-1 flex-basis-200'>
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class='btn btn-primary'>Show</a>
                        ";
            // line 44
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class='btn btn-danger'>Delete</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "                <tr>
                    <td colspan=\"5\" class=\"text-center\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </tbody>
        </table>
    </div>
</div>

    <div class='d-flex justify-content-evenly'>
        <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_new");
        echo "\">Create new</a>
        <a class='btn btn-primary' href='";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("retour");
        echo "'>Retour</a>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ticket/indexAll.html.twig";
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
        return array (  173 => 59,  169 => 58,  161 => 52,  152 => 48,  142 => 44,  138 => 42,  135 => 41,  126 => 39,  122 => 38,  118 => 37,  114 => 36,  110 => 35,  107 => 34,  102 => 33,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ticket index{% endblock %}

{% block body %}

<div class=\"card mb-4\">
    <div class=\"card-header\">
        <i class=\"fas fa-table me-1\"></i>
        <h1 class=\"text-center mb-4 text-center\">Ticket table</h1>
    </div>
    <div class=\"card-body\">
        <table class=\"table text-center\">
            <theader>
                <tr>
                    <th>Username</th>
                    <th>Date de creation</th>
                    <th>Numero de parking</th>
                    <th>Agent</th>
                    <th>actions</th>
                </tr>
            </theader>
            <tfoot>
                <tr>
                    <th>Username</th>
                    <th>Date de creation</th>
                    <th>Numero de parking</th>
                    <th>Agent</th>
                    <th>actions</th>
                </tr>
            </tfoot>
            <tbody>
            {% for ticket in tickets %}
                <tr>
                    <td>{{ ticket.username }}</td>
                    <td>{{ ticket.dateDeCreation ? ticket.dateDeCreation|date('Y-m-d h:i') : '' }}</td>
                    <td>{{ ticket.numeroDeParking }}</td>
                    {% for agent in ticket.Agent %}
                        <td>{{ agent.username }}</td>
                    {% endfor %}
                    <td class='d-flex justify-content-evenly flex-grow-1 flex-basis-200'>
                        <a href=\"{{ path('app_ticket_show', {'id': ticket.id}) }}\" class='btn btn-primary'>Show</a>
                        {# <a href=\"{{ path('app_ticket_edit', {'id': ticket.id}) }}\" class='btn btn-light'>Edit</a> #}
                        <a href=\"{{ path('app_ticket_delete', {'id': ticket.id}) }}\" class='btn btn-danger'>Delete</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\" class=\"text-center\">no records found</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>

    <div class='d-flex justify-content-evenly'>
        <a href=\"{{ path('app_ticket_new') }}\">Create new</a>
        <a class='btn btn-primary' href='{{ path('retour')}}'>Retour</a>
    </div>

{% endblock %}
", "ticket/indexAll.html.twig", "D:\\IPNET\\PROJET\\PPE Groupe ASSIH-TCHANGAI\\App\\tickets\\templates\\ticket\\indexAll.html.twig");
    }
}
