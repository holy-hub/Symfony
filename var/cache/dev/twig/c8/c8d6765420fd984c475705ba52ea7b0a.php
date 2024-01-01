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

/* ticket/show.html.twig */
class __TwigTemplate_12c72e379a3b704feda4c556308fdf00 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ticket/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "User";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<body class=\"bg-primary\">
    <div id=\"layoutAuthentication\">
        <div id=\"layoutAuthentication_content\">
            <main>
                <div class=\"container\">
                    <div class=\"row justify-content-center align-items-center\">
                        <div class=\"col-lg-7\">
                            <div class=\"card shadow-lg border-0 rounded-lg mt-5\">
                                <div class=\"card mb-4\">
                                        <div class=\"card-header\">
                                            <i class=\"fas fa-table me-1\"></i>
                                            <h1>Ticket client ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "username", [], "any", false, false, false, 17), "html", null, true);
        echo " </h1>
                                        </div>
                                        <div class=\"card-body\">
                                            <table id=\"datatablesSimple\" class='table text-center'>
                                                <tbody>
                                                    <tr>
                                                        <th>Username</th>
                                                        <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 24, $this->source); })()), "username", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                                                    </tr>
                                                    <tr>
                                                        <th>DateDeCreation</th>
                                                        <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 28, $this->source); })()), "dateDeCreation", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 28, $this->source); })()), "dateDeCreation", [], "any", false, false, false, 28), "Y-m-d h:i"), "html", null, true))) : (print ("")));
        echo "</td>
                                                    </tr>
                                                    <tr>
                                                        <th>NumeroDeParking</th>
                                                        <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 32, $this->source); })()), "numeroDeParking", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Code Agent</th>
                                                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 36, $this->source); })()), "Agent", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 37
            echo "                                                            <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "username", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class=\"d-flex align-items-center justify-content-evenly mt-4 mb-0\">
                                            <a class=\"btn btn-light\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_index");
        echo "\">Back to list</a>
                                            <a class=\"btn btn-primary\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("retour");
        echo "\">Return ←</a>
                                        </div>
                                        <div class=\"d-flex align-items-center justify-content-center mt-4 mb-0\">
                                            ";
        // line 48
        echo twig_include($this->env, $context, "ticket/_delete_form.html.twig");
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ticket/show.html.twig";
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
        return array (  147 => 48,  141 => 45,  137 => 44,  130 => 39,  121 => 37,  117 => 36,  110 => 32,  103 => 28,  96 => 24,  86 => 17,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User{% endblock %}

{% block body %}
<body class=\"bg-primary\">
    <div id=\"layoutAuthentication\">
        <div id=\"layoutAuthentication_content\">
            <main>
                <div class=\"container\">
                    <div class=\"row justify-content-center align-items-center\">
                        <div class=\"col-lg-7\">
                            <div class=\"card shadow-lg border-0 rounded-lg mt-5\">
                                <div class=\"card mb-4\">
                                        <div class=\"card-header\">
                                            <i class=\"fas fa-table me-1\"></i>
                                            <h1>Ticket client {{ user.username}} </h1>
                                        </div>
                                        <div class=\"card-body\">
                                            <table id=\"datatablesSimple\" class='table text-center'>
                                                <tbody>
                                                    <tr>
                                                        <th>Username</th>
                                                        <td>{{ ticket.username }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>DateDeCreation</th>
                                                        <td>{{ ticket.dateDeCreation ? ticket.dateDeCreation|date('Y-m-d h:i') : '' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>NumeroDeParking</th>
                                                        <td>{{ ticket.numeroDeParking }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Code Agent</th>
                                                        {% for agent in ticket.Agent %}
                                                            <td>{{ agent.username }}</td>
                                                        {% endfor %}
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class=\"d-flex align-items-center justify-content-evenly mt-4 mb-0\">
                                            <a class=\"btn btn-light\" href=\"{{ path('app_ticket_index') }}\">Back to list</a>
                                            <a class=\"btn btn-primary\" href=\"{{ path('retour') }}\">Return ←</a>
                                        </div>
                                        <div class=\"d-flex align-items-center justify-content-center mt-4 mb-0\">
                                            {{ include('ticket/_delete_form.html.twig') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
{% endblock %}", "ticket/show.html.twig", "D:\\IPNET\\PROJET\\PPE Groupe ASSIH-TCHANGAI\\App\\tickets\\templates\\ticket\\show.html.twig");
    }
}
