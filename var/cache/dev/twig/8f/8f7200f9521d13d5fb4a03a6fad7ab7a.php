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

/* exception/401.html.twig */
class __TwigTemplate_5a0aedff0ebaf13f21ac242e17239696 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exception/401.html.twig"));

        // line 1
        echo "<div id=\"layoutError\">
    <div id=\"layoutError_content\">
        <main>
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"text-center mt-4\">
                            <h1 class=\"display-1\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["statusCode"]) || array_key_exists("statusCode", $context) ? $context["statusCode"] : (function () { throw new RuntimeError('Variable "statusCode" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</h1>
                            <p class=\"lead\">Unauthorized</p>
                            <p>Access to this resource is denied.</p>
                            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">
                                <i class=\"fas fa-arrow-left me-1\"></i>
                                Return to Dashboard
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id=\"layoutError_footer\">
        <footer class=\"py-4 bg-light mt-auto\">
            <div class=\"container-fluid px-4\">
                <div class=\"d-flex align-items-center justify-content-between small\">
                    <div class=\"text-muted\">Copyright &copy; TICKETING 2023</div>
                    <div>
                        <a href=\"#\">Privacy Policy</a>
                        &middot;
                        <a href=\"#\">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "exception/401.html.twig";
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
        return array (  55 => 11,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"layoutError\">
    <div id=\"layoutError_content\">
        <main>
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"text-center mt-4\">
                            <h1 class=\"display-1\">{{ statusCode }}</h1>
                            <p class=\"lead\">Unauthorized</p>
                            <p>Access to this resource is denied.</p>
                            <a href=\"{{ path('app_login') }}\">
                                <i class=\"fas fa-arrow-left me-1\"></i>
                                Return to Dashboard
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id=\"layoutError_footer\">
        <footer class=\"py-4 bg-light mt-auto\">
            <div class=\"container-fluid px-4\">
                <div class=\"d-flex align-items-center justify-content-between small\">
                    <div class=\"text-muted\">Copyright &copy; TICKETING 2023</div>
                    <div>
                        <a href=\"#\">Privacy Policy</a>
                        &middot;
                        <a href=\"#\">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>", "exception/401.html.twig", "D:\\IPNET\\PROJET\\PPE Groupe ASSIH-TCHANGAI\\App\\tickets\\templates\\exception\\401.html.twig");
    }
}
