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

/* user/indexClient.html.twig */
class __TwigTemplate_c05f01c446d93491c4312e231df1fb9a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/indexClient.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/indexClient.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Client Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
        <a class=\"navbar-brand ps-3\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_admin_index");
        echo "\">TICKETING</a>
        <button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\"><i class=\"fas fa-bars\"></i></button>
        <form class=\"d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0\">
            <div class=\"input-group\">
                <input class=\"form-control\" type=\"text\" placeholder=\"Search for...\" aria-label=\"Search for...\" aria-describedby=\"btnNavbarSearch\" />
                <button class=\"btn btn-primary\" id=\"btnNavbarSearch\" type=\"button\"><i class=\"fas fa-search\"></i></button>
            </div>
        </form>
        <ul class=\"navbar-nav ms-auto ms-md-0 me-3 me-lg-4\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fas fa-user fa-fw\"></i></a>
                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                    <li><a class=\"dropdown-item\" href=\"#!\">Settings</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_client_ticket");
        echo "\">Activity Log</a></li>
                    <li><hr class=\"dropdown-divider\" /></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id=\"layoutSidenav\">
        <div id=\"layoutSidenav_nav\">
            <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
                <div class=\"sb-sidenav-menu\">
                    <div class=\"nav\">
                        <div class=\"sb-sidenav-menu-heading\">Core</div>
                        <a class=\"nav-link\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_client_index");
        echo "\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                            Dashboard
                        </a>
                        <div class=\"sb-sidenav-menu-heading\">Interface</div>
                        <a class=\"nav-link\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_new");
        echo "l\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                            Creer ticket
                        </a>
                        <a class=\"nav-link\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_index");
        echo "\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                            Mes Tickets
                        </a>
                        <div class=\"sb-sidenav-menu-heading\">Addons</div>
                        <a class=\"nav-link\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                            Information Presonnelle
                        </a>
                    </div>
                </div>
                <div class=\"sb-sidenav-footer\">
                    <a class=\"nav-link\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">
                    <div class=\"small\">Logged in as:</div>
                    ";
        // line 56
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "username", [], "any", false, false, false, 56)), "html", null, true);
        echo "</a>
                </div>
            </nav>
        </div>

        <div id=\"layoutSidenav_content\">
            </main>
                <div class=\"container-fluid px-4\">
                    <h1 class=\"mt-4\">Dashboard</h1>
                    <ol class=\"breadcrumb mb-4\">
                        <li class=\"breadcrumb-item active\">";
        // line 66
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "username", [], "any", false, false, false, 66)), "html", null, true);
        echo "</li>
                    </ol>
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-md-6\">
                            <div class=\"card bg-primary text-white mb-4\">
                                <div class=\"card-body\">Creer ticket</div>
                                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                    <a class=\"small text-white stretched-link\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_new");
        echo "\">View Details</a>
                                    <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-md-6\">
                            <div class=\"card bg-warning text-white mb-4\">
                                <div class=\"card-body\">Liste des Tickets</div>
                                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                    <a class=\"small text-white stretched-link\" href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_index");
        echo "\">View Details</a>
                                    <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card mb-4\">
                        <div class=\"card-header\">
                            <i class=\"fas fa-table me-1\"></i>
                            <h1>Tickets Tables</h1>
                        </div>
                        <div class=\"card-body\">
                            <table id=\"datatablesSimple\" class='table text-center'>
                                <thead>
                                    <tr>
                                        ";
        // line 98
        echo "                                        <th>Username</th>
                                        <th>DateDeCreation</th>
                                        <th>NumeroDeParking</th>
                                        <th>Agent</th>
                                        <th>actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        ";
        // line 108
        echo "                                        <th>Username</th>
                                        <th>Date De Creation</th>
                                        <th>Numero De Parking</th>
                                        <th>Agent</th>
                                        <th>actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) || array_key_exists("tickets", $context) ? $context["tickets"] : (function () { throw new RuntimeError('Variable "tickets" does not exist.', 116, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 117
            echo "                                    <tr>
                                        <td>";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "username", [], "any", false, false, false, 118), "html", null, true);
            echo "</td>
                                        <td>";
            // line 119
            ((twig_get_attribute($this->env, $this->source, $context["ticket"], "dateDeCreation", [], "any", false, false, false, 119)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "dateDeCreation", [], "any", false, false, false, 119), "Y-m-d h:i"), "html", null, true))) : (print ("")));
            echo "</td>
                                        <td>";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ticket"], "numeroDeParking", [], "any", false, false, false, 120), "html", null, true);
            echo "</td>
                                        ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ticket"], "Agent", [], "any", false, false, false, 121));
            foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
                // line 122
                echo "                                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "username", [], "any", false, false, false, 122), "html", null, true);
                echo "</td>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                                        <td>
                                            <a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_show", ["id" => twig_get_attribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 125)]), "html", null, true);
            echo "\" class='btn btn-primary'>Show</a>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 129
            echo "                                    <tr>
                                        <td colspan='5'>
                                            <center><p style='color:red'>Aucun Ticket enregistré !</p></center>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class=\"py-4 bg-light mt-auto\">
                <div class=\"container-fluid px-4\">
                    <div class=\"d-flex align-items-center justify-content-between small\">
                        <div class=\"text-muted\">Copyright &copy; TICKETING 2023</div>
                        <div>
                            <a href=\" ";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privacy");
        echo " \">Privacy Policy</a>
                            &middot;
                            <a href=\" ";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conditionEtTerme");
        echo " \">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/indexClient.html.twig";
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
        return array (  297 => 148,  292 => 146,  279 => 135,  268 => 129,  259 => 125,  256 => 124,  247 => 122,  243 => 121,  239 => 120,  235 => 119,  231 => 118,  228 => 117,  223 => 116,  213 => 108,  202 => 98,  184 => 82,  172 => 73,  162 => 66,  149 => 56,  144 => 54,  134 => 47,  126 => 42,  119 => 38,  111 => 33,  97 => 22,  92 => 20,  76 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Client Dashboard{% endblock %}

{% block body %}
    <nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
        <a class=\"navbar-brand ps-3\" href=\"{{ path('app_user_admin_index') }}\">TICKETING</a>
        <button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\"><i class=\"fas fa-bars\"></i></button>
        <form class=\"d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0\">
            <div class=\"input-group\">
                <input class=\"form-control\" type=\"text\" placeholder=\"Search for...\" aria-label=\"Search for...\" aria-describedby=\"btnNavbarSearch\" />
                <button class=\"btn btn-primary\" id=\"btnNavbarSearch\" type=\"button\"><i class=\"fas fa-search\"></i></button>
            </div>
        </form>
        <ul class=\"navbar-nav ms-auto ms-md-0 me-3 me-lg-4\">
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fas fa-user fa-fw\"></i></a>
                <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                    <li><a class=\"dropdown-item\" href=\"#!\">Settings</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('app_user_client_ticket') }}\">Activity Log</a></li>
                    <li><hr class=\"dropdown-divider\" /></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id=\"layoutSidenav\">
        <div id=\"layoutSidenav_nav\">
            <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
                <div class=\"sb-sidenav-menu\">
                    <div class=\"nav\">
                        <div class=\"sb-sidenav-menu-heading\">Core</div>
                        <a class=\"nav-link\" href=\"{{ path('app_user_client_index') }}\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                            Dashboard
                        </a>
                        <div class=\"sb-sidenav-menu-heading\">Interface</div>
                        <a class=\"nav-link\" href=\"{{ path('app_ticket_new') }}l\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                            Creer ticket
                        </a>
                        <a class=\"nav-link\" href=\"{{ path('app_ticket_index') }}\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                            Mes Tickets
                        </a>
                        <div class=\"sb-sidenav-menu-heading\">Addons</div>
                        <a class=\"nav-link\" href=\"{{ path('app_user_show', {'id': user.id}) }}\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                            Information Presonnelle
                        </a>
                    </div>
                </div>
                <div class=\"sb-sidenav-footer\">
                    <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">
                    <div class=\"small\">Logged in as:</div>
                    {{ user.username|upper }}</a>
                </div>
            </nav>
        </div>

        <div id=\"layoutSidenav_content\">
            </main>
                <div class=\"container-fluid px-4\">
                    <h1 class=\"mt-4\">Dashboard</h1>
                    <ol class=\"breadcrumb mb-4\">
                        <li class=\"breadcrumb-item active\">{{ user.username|capitalize }}</li>
                    </ol>
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-md-6\">
                            <div class=\"card bg-primary text-white mb-4\">
                                <div class=\"card-body\">Creer ticket</div>
                                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                    <a class=\"small text-white stretched-link\" href=\"{{ path('app_ticket_new') }}\">View Details</a>
                                    <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-md-6\">
                            <div class=\"card bg-warning text-white mb-4\">
                                <div class=\"card-body\">Liste des Tickets</div>
                                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                    <a class=\"small text-white stretched-link\" href=\"{{ path('app_ticket_index') }}\">View Details</a>
                                    <div class=\"small text-white\"><i class=\"fas fa-angle-right\"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card mb-4\">
                        <div class=\"card-header\">
                            <i class=\"fas fa-table me-1\"></i>
                            <h1>Tickets Tables</h1>
                        </div>
                        <div class=\"card-body\">
                            <table id=\"datatablesSimple\" class='table text-center'>
                                <thead>
                                    <tr>
                                        {# <th>Id</th> #}
                                        <th>Username</th>
                                        <th>DateDeCreation</th>
                                        <th>NumeroDeParking</th>
                                        <th>Agent</th>
                                        <th>actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        {# <th>Id</th> #}
                                        <th>Username</th>
                                        <th>Date De Creation</th>
                                        <th>Numero De Parking</th>
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
                                        <td>
                                            <a href=\"{{ path('app_ticket_show', {'id': ticket.id}) }}\" class='btn btn-primary'>Show</a>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan='5'>
                                            <center><p style='color:red'>Aucun Ticket enregistré !</p></center>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class=\"py-4 bg-light mt-auto\">
                <div class=\"container-fluid px-4\">
                    <div class=\"d-flex align-items-center justify-content-between small\">
                        <div class=\"text-muted\">Copyright &copy; TICKETING 2023</div>
                        <div>
                            <a href=\" {{ path('privacy') }} \">Privacy Policy</a>
                            &middot;
                            <a href=\" {{ path('conditionEtTerme') }} \">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
{% endblock %}
", "user/indexClient.html.twig", "D:\\IPNET\\PROJET\\PPE Groupe ASSIH-TCHANGAI\\App\\tickets\\templates\\user\\indexClient.html.twig");
    }
}
