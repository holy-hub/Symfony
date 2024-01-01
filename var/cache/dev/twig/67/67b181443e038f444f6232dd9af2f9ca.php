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

/* user/tableAgent.html.twig */
class __TwigTemplate_6af1f5a1dd479569ee82809b5986bec5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/tableAgent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/tableAgent.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"layoutSidenav_content\">
    <main>
        <h1 class='text-center m-1 p-1'>Table Agent</h1>
        <div class=\"container-fluid px-4\">
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <table id=\"datatablesSimple\" class='table text-center'>
                        <thead>
                            <tr>
                                ";
        // line 14
        echo "                                <th>Username</th>
                                <th>Email</th>
                                <th>CodeAgent</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                ";
        // line 23
        echo "                                <th>Username</th>
                                <th>Email</th>
                                <th>CodeAgent</th>
                                <th>actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agents"]) || array_key_exists("agents", $context) ? $context["agents"] : (function () { throw new RuntimeError('Variable "agents" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 31
            echo "                                <tr>
                                    <td> ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "username", [], "any", false, false, false, 32), "html", null, true);
            echo " </td>
                                    <td> ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "email", [], "any", false, false, false, 33), "html", null, true);
            echo " </td>
                                    <td> ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "codeAgent", [], "any", false, false, false, 34), "html", null, true);
            echo " </td>
                                    <td class='d-flex gap-5 justify-content-center'>
                                        <a class='btn btn-primary' href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">Show</a>
                                        <a class='btn btn-dark' href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">Edit</a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "                                <tr>
                                    <td colspan='4'>
                                        <center><p style='color:red'>Aucun Agent enregistré !</p></center>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                        </tbody>
                    </table>
                </div><hr>
                <a class='d-block mx-auto w-100 btn btn-primary' href='";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_admin_index");
        echo "'>Retour</a>
            </div>
        </div>
    </main>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/tableAgent.html.twig";
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
        return array (  139 => 50,  134 => 47,  123 => 41,  114 => 37,  110 => 36,  105 => 34,  101 => 33,  97 => 32,  94 => 31,  89 => 30,  80 => 23,  70 => 14,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div id=\"layoutSidenav_content\">
    <main>
        <h1 class='text-center m-1 p-1'>Table Agent</h1>
        <div class=\"container-fluid px-4\">
            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <table id=\"datatablesSimple\" class='table text-center'>
                        <thead>
                            <tr>
                                {# <th>Id</th> #}
                                <th>Username</th>
                                <th>Email</th>
                                <th>CodeAgent</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                {# <th>Id</th> #}
                                <th>Username</th>
                                <th>Email</th>
                                <th>CodeAgent</th>
                                <th>actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            {% for agent in agents %}
                                <tr>
                                    <td> {{ agent.username}} </td>
                                    <td> {{ agent.email}} </td>
                                    <td> {{ agent.codeAgent}} </td>
                                    <td class='d-flex gap-5 justify-content-center'>
                                        <a class='btn btn-primary' href=\"{{ path('app_user_show', {'id': agent.id}) }}\">Show</a>
                                        <a class='btn btn-dark' href=\"{{ path('app_user_edit', {'id': agent.id}) }}\">Edit</a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan='4'>
                                        <center><p style='color:red'>Aucun Agent enregistré !</p></center>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div><hr>
                <a class='d-block mx-auto w-100 btn btn-primary' href='{{ path('app_user_admin_index')}}'>Retour</a>
            </div>
        </div>
    </main>
</div>

{% endblock %}", "user/tableAgent.html.twig", "D:\\IPNET\\PROJET\\PPE Groupe ASSIH-TCHANGAI\\App\\tickets\\templates\\user\\tableAgent.html.twig");
    }
}
