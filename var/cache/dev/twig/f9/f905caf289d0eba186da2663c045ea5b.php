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

/* security/login.html.twig */
class __TwigTemplate_56b4b5dcf983b2345c190e407c8992e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "    ";
        // line 2
        echo "    ";
        $this->displayBlock('title', $context, $blocks);
        // line 3
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Log in!</title>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_landing");
        echo "\" class=\"btn btn-info text-warning nav-link m-3 p-2 text-center\">Page d'accueil</a>
        <form method=\"post\">
            ";
        // line 10
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "                <div id=\"alert\" class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })()), "messageKey", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })()), "messageData", [], "any", false, false, false, 11), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 13
        echo "            
            ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14)) {
            // line 15
            echo "                <div class=\"mb-3\">
                    You are logged in as ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "username", [], "any", false, false, false, 16), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo " \" class=\"btn btn-danger\">Logout</a>
                </div>
            ";
        }
        // line 19
        echo "            <body class=\"bg-primary\">
                <div id=\"layoutAuthentication\">
                    <div id=\"layoutAuthentication_content\">
                        <main>
                            <div class=\"container\">
                                <div class=\"row justify-content-center\">
                                    <div class=\"col-lg-5\">
                                        <div class=\"card shadow-lg border-0 rounded-lg mt-5\">
                                            <div class=\"card-header\"><h3 class=\"text-center font-weight-light my-4\">Login</h3></div>
                                            <div class=\"card-body\">
                                                <div class=\"form-floating mb-3\">
                                                    <input type=\"email\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"username\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                                    <label for=\"inputEmail\">Email address</label>
                                                </div>
                                                <div class=\"form-floating mb-3\">
                                                    <input class=\"form-control\" id=\"inputPassword\" name=\"password\" type=\"password\" placeholder=\"Password\" />
                                                    <label for=\"inputPassword\">Password</label>
                                                </div>
                                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                                <div class=\"form-check mb-3\">
                                                    <input class=\"form-check-input\" id=\"inputRememberPassword\" type=\"checkbox\" value=\"remenber\" name=\"remenber\" />
                                                    <label class=\"form-check-label\" for=\"inputRememberPassword\">Remember Password</label>
                                                </div>
                                                <div class=\"d-flex align-items-center justify-content-between mt-4 mb-0\">
                                                    <a class=\"small\" href=\"\">Forgot Password?</a>
                                                    ";
        // line 45
        echo "                                                    <button class=\"btn btn-primary\">Login</button>
                                                </div>
                                            </div>
                                            <div class=\"card-footer text-center py-3\">
                                                <div class=\"small\"><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_client");
        echo "\">Need an account? Sign up!</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <div id=\"layoutAuthentication_footer\">
                        <footer class=\"py-4 bg-light mt-auto\">
                            <div class=\"container-fluid px-4\">
                                <div class=\"d-flex align-items-center justify-content-between small\">
                                    <div class=\"text-muted\">Copyright &copy; TICKETING 2023</div>
                                    <div>
                                        <a href=\" ";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("privacy");
        echo " \">Privacy Policy</a>
                                        &middot;
                                        <a href=\" ";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("conditionEtTerme");
        echo " \">Terms &amp; Conditions</a>
                                        &middot;
                                        <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_admin");
        echo "\">Need Admin account</a>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </body>
        </form>
    ";
        // line 76
        $this->displayBlock('javascript', $context, $blocks);
        // line 89
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 76
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 77
        echo "        <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
        <script>
            // This code will display the div for 5 seconds
            var myDiv = document.getElementById(\"alert\");
            myDiv.style.display = \"block\";
            setTimeout(() => {
                myDiv.style.display = \"none\";
            }, 5000);
        </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  227 => 79,  223 => 77,  216 => 76,  209 => 89,  207 => 76,  195 => 67,  190 => 65,  185 => 63,  168 => 49,  162 => 45,  152 => 37,  142 => 30,  129 => 19,  121 => 16,  118 => 15,  116 => 14,  113 => 13,  107 => 11,  105 => 10,  99 => 8,  92 => 7,  82 => 4,  75 => 3,  62 => 2,  55 => 7,  52 => 6,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    {# {% extends 'base.html.twig' %} #}
    {% block title %}<title>Log in!</title>{% endblock %}
    {% block stylesheets %}
    <link href=\"{{ asset('css/styles.css') }}\" rel=\"stylesheet\" />
    {% endblock stylesheets %}

    {% block body %}
        <a href=\"{{ path('app_landing') }}\" class=\"btn btn-info text-warning nav-link m-3 p-2 text-center\">Page d'accueil</a>
        <form method=\"post\">
            {% if error %}
                <div id=\"alert\" class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}
            
            {% if app.user %}
                <div class=\"mb-3\">
                    You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }} \" class=\"btn btn-danger\">Logout</a>
                </div>
            {% endif %}
            <body class=\"bg-primary\">
                <div id=\"layoutAuthentication\">
                    <div id=\"layoutAuthentication_content\">
                        <main>
                            <div class=\"container\">
                                <div class=\"row justify-content-center\">
                                    <div class=\"col-lg-5\">
                                        <div class=\"card shadow-lg border-0 rounded-lg mt-5\">
                                            <div class=\"card-header\"><h3 class=\"text-center font-weight-light my-4\">Login</h3></div>
                                            <div class=\"card-body\">
                                                <div class=\"form-floating mb-3\">
                                                    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"username\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                                    <label for=\"inputEmail\">Email address</label>
                                                </div>
                                                <div class=\"form-floating mb-3\">
                                                    <input class=\"form-control\" id=\"inputPassword\" name=\"password\" type=\"password\" placeholder=\"Password\" />
                                                    <label for=\"inputPassword\">Password</label>
                                                </div>
                                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                                                <div class=\"form-check mb-3\">
                                                    <input class=\"form-check-input\" id=\"inputRememberPassword\" type=\"checkbox\" value=\"remenber\" name=\"remenber\" />
                                                    <label class=\"form-check-label\" for=\"inputRememberPassword\">Remember Password</label>
                                                </div>
                                                <div class=\"d-flex align-items-center justify-content-between mt-4 mb-0\">
                                                    <a class=\"small\" href=\"\">Forgot Password?</a>
                                                    {# <a class=\"small\" href=\"{{ path('email') }}\">Forgot Password?</a> #}
                                                    <button class=\"btn btn-primary\">Login</button>
                                                </div>
                                            </div>
                                            <div class=\"card-footer text-center py-3\">
                                                <div class=\"small\"><a href=\"{{ path('app_register_client') }}\">Need an account? Sign up!</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <div id=\"layoutAuthentication_footer\">
                        <footer class=\"py-4 bg-light mt-auto\">
                            <div class=\"container-fluid px-4\">
                                <div class=\"d-flex align-items-center justify-content-between small\">
                                    <div class=\"text-muted\">Copyright &copy; TICKETING 2023</div>
                                    <div>
                                        <a href=\" {{ path('privacy') }} \">Privacy Policy</a>
                                        &middot;
                                        <a href=\" {{ path('conditionEtTerme') }} \">Terms &amp; Conditions</a>
                                        &middot;
                                        <a href=\"{{ path('app_register_admin')}}\">Need Admin account</a>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </body>
        </form>
    {% block javascript %}
        <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
        <script src=\"{{ asset('js/scripts.js') }}\"></script>
        <script>
            // This code will display the div for 5 seconds
            var myDiv = document.getElementById(\"alert\");
            myDiv.style.display = \"block\";
            setTimeout(() => {
                myDiv.style.display = \"none\";
            }, 5000);
        </script>
    {% endblock javascript %}
    {% endblock %}
", "security/login.html.twig", "D:\\IPNET\\PROJET\\PPE Groupe ASSIH-TCHANGAI\\App\\tickets\\templates\\security\\login.html.twig");
    }
}
