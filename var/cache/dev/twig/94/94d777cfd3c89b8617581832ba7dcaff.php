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

/* user/indexAgent.html.twig */
class __TwigTemplate_2f8c6bbec13b0b191aad6827de13f322 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/indexAgent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/indexAgent.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Agent Dashboard";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_agent_index");
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_agent_index");
        echo "\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                            Dashboard
                        </a>
                        <div class=\"sb-sidenav-menu-heading\">Addons</div>
                        <a class=\"nav-link\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_index");
        echo "\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                            Tables Tickets
                        </a>
                        <div class=\"sb-sidenav-menu-heading\">Personnel</div>
                        <a class=\"nav-link\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                            Mes informations
                        </a>
                    </div>
                </div>
                <div class=\"sb-sidenav-footer\">
                    <div class=\"small\">Logged in as:</div>
                    ";
        // line 51
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "username", [], "any", false, false, false, 51)), "html", null, true);
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
        // line 61
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "username", [], "any", false, false, false, 61)), "html", null, true);
        echo "</li>
                    </ol>
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-md-6\">
                            <div class=\"card bg-primary text-white mb-4\">
                                <div class=\"card-body\">Info Agent</div>
                                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                    <a class=\"small text-white stretched-link\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)]), "html", null, true);
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
        // line 77
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
                            <table id=\"datatablesSimple\" class='table'>
                                <thead>
                                    <tr>
                                        ";
        // line 93
        echo "                                        <th>username</th>
                                        <th>date de creation</th>
                                        <th>numero de parking</th>
                                        <th>agent</th>
                                        <th>actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        ";
        // line 103
        echo "                                        <th>username</th>
                                        <th>date de creation</th>
                                        <th>numero de parking</th>
                                        <th>agent</th>
                                        <th>actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
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
                            <a href=\" ";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privacy");
        echo " \">Privacy Policy</a>
                            &middot;
                            <a href=\" ";
        // line 124
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
        return "user/indexAgent.html.twig";
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
        return array (  225 => 124,  220 => 122,  199 => 103,  188 => 93,  170 => 77,  158 => 68,  148 => 61,  135 => 51,  124 => 43,  116 => 38,  108 => 33,  94 => 22,  76 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Agent Dashboard{% endblock %}

{% block body %}
    <nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
        <a class=\"navbar-brand ps-3\" href=\"{{ path('app_user_agent_index') }}\">TICKETING</a>
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
                        <a class=\"nav-link\" href=\"{{ path('app_user_agent_index') }}\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                            Dashboard
                        </a>
                        <div class=\"sb-sidenav-menu-heading\">Addons</div>
                        <a class=\"nav-link\" href=\"{{ path('app_ticket_index') }}\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                            Tables Tickets
                        </a>
                        <div class=\"sb-sidenav-menu-heading\">Personnel</div>
                        <a class=\"nav-link\" href=\"{{ path('app_user_show', {'id': user.id}) }}\">
                            <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                            Mes informations
                        </a>
                    </div>
                </div>
                <div class=\"sb-sidenav-footer\">
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
                                <div class=\"card-body\">Info Agent</div>
                                <div class=\"card-footer d-flex align-items-center justify-content-between\">
                                    <a class=\"small text-white stretched-link\" href=\"{{ path('app_user_show', {'id': user.id}) }}\">View Details</a>
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
                            <table id=\"datatablesSimple\" class='table'>
                                <thead>
                                    <tr>
                                        {# <th>Id</th> #}
                                        <th>username</th>
                                        <th>date de creation</th>
                                        <th>numero de parking</th>
                                        <th>agent</th>
                                        <th>actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        {# <th>Id</th> #}
                                        <th>username</th>
                                        <th>date de creation</th>
                                        <th>numero de parking</th>
                                        <th>agent</th>
                                        <th>actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
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
", "user/indexAgent.html.twig", "D:\\IPNET\\PROJET\\PPE Groupe ASSIH-TCHANGAI\\App\\tickets\\templates\\user\\indexAgent.html.twig");
    }
}
