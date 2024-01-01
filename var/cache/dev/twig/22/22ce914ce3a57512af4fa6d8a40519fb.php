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

/* user/index.html.twig */
class __TwigTemplate_35bdf54580a36fea5aa65b17b73a6457 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Admin Dashboard";
        
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
                    <li><a class=\"dropdown-item\" href=\"#!\">Activity Log</a></li>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_admin_index");
        echo "\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                            Dashboard
                        </a>
                        <div class=\"sb-sidenav-menu-heading\">Interface</div>
                        <a class=\"nav-link\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_index");
        echo "\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                            Liste de tous les tickets
                        </a>
                        <div class=\"sb-sidenav-menu-heading\">Addons</div>
                        <a class=\"nav-link\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_agent");
        echo "\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                            Ajouter Agent
                        </a>
                        <a class=\"nav-link\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_table_view");
        echo "\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                            Tables agents
                        </a>
                    </div>
                </div>
                <div class=\"sb-sidenav-footer\" style=\"position: sticky; bottom: 0;\">
                    <div class=\"small\">Logged in as:</div>
                    ";
        // line 55
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "username", [], "any", false, false, false, 55)), "html", null, true);
        echo "
                </div>
            </nav>
        </div>

        <div id=\"layoutSidenav_content\">
            </main>
                <div class=\"container-fluid px-4\">
                    <h1 class=\"mt-4\">Dashboard</h1>
                    <ol class=\"breadcrumb mb-4\">
                        <li class=\"breadcrumb-item active\">";
        // line 65
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "username", [], "any", false, false, false, 65)), "html", null, true);
        echo "</li>
                    </ol>
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-md-6\">
                            <div class=\"card bg-primary text-white mb-4\">
                                <div class=\"card-body\">Liste Agent</div>
                                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                    <a class=\"small text-white stretched-link\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_agent_index");
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
        // line 81
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
                            <h1>agents Tables</h1>
                        </div>
                        <div class=\"card-body\">
                            <table id=\"datatablesSimple\" class='table text-center'>
                                <thead>
                                    <tr>
                                        ";
        // line 97
        echo "                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>CodeAgent</th>
                                        <th>actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        ";
        // line 106
        echo "                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>CodeAgent</th>
                                        <th>actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agents"]) || array_key_exists("agents", $context) ? $context["agents"] : (function () { throw new RuntimeError('Variable "agents" does not exist.', 113, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 114
            echo "                                        <tr>
                                            <td> ";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "username", [], "any", false, false, false, 115), "html", null, true);
            echo " </td>
                                            <td> ";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "email", [], "any", false, false, false, 116), "html", null, true);
            echo " </td>
                                            <td> ";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agent"], "codeAgent", [], "any", false, false, false, 117), "html", null, true);
            echo " </td>
                                            <td class='d-flex gap-5 justify-content-center'>
                                                <a class='btn btn-primary' href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 119)]), "html", null, true);
            echo "\">Show</a>
                                                <a class='btn btn-dark' href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 120)]), "html", null, true);
            echo "\">Edit</a>
                                            </td>
                                        </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 124
            echo "                                        <tr>
                                            <td colspan='4'>
                                                <center><p style='color:red'>Aucun Agent enregistré !</p></center>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
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
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privacy");
        echo " \">Privacy Policy</a>
                            &middot;
                            <a href=\" ";
        // line 143
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
        return "user/index.html.twig";
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
        return array (  277 => 143,  272 => 141,  259 => 130,  248 => 124,  239 => 120,  235 => 119,  230 => 117,  226 => 116,  222 => 115,  219 => 114,  214 => 113,  205 => 106,  195 => 97,  177 => 81,  165 => 72,  155 => 65,  142 => 55,  131 => 47,  124 => 43,  116 => 38,  108 => 33,  94 => 22,  76 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin Dashboard{% endblock %}

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
                    <li><a class=\"dropdown-item\" href=\"#!\">Activity Log</a></li>
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
                        <a class=\"nav-link\" href=\"{{ path('app_user_admin_index') }}\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                            Dashboard
                        </a>
                        <div class=\"sb-sidenav-menu-heading\">Interface</div>
                        <a class=\"nav-link\" href=\"{{ path('app_ticket_index') }}\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                            Liste de tous les tickets
                        </a>
                        <div class=\"sb-sidenav-menu-heading\">Addons</div>
                        <a class=\"nav-link\" href=\"{{ path('app_register_agent') }}\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                            Ajouter Agent
                        </a>
                        <a class=\"nav-link\" href=\"{{ path('app_table_view') }}\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                            Tables agents
                        </a>
                    </div>
                </div>
                <div class=\"sb-sidenav-footer\" style=\"position: sticky; bottom: 0;\">
                    <div class=\"small\">Logged in as:</div>
                    {{ user.username|upper }}
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
                                <div class=\"card-body\">Liste Agent</div>
                                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                    <a class=\"small text-white stretched-link\" href=\"{{ path('app_user_agent_index') }}\">View Details</a>
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
                            <h1>agents Tables</h1>
                        </div>
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
", "user/index.html.twig", "D:\\IPNET\\PROJET\\PPE Groupe ASSIH-TCHANGAI\\App\\tickets\\templates\\user\\index.html.twig");
    }
}
