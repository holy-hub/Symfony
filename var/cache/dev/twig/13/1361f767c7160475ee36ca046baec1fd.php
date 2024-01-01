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

/* exception/404.html.twig */
class __TwigTemplate_81ae28922724be08591b550656ad6f26 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exception/404.html.twig"));

        // line 1
        echo "<div id=\"layoutError\">
    <div id=\"layoutError_content\">
        <main>
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"text-center mt-4\">
                            <img class=\"mb-4 img-error\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/error-404-monochrome.svg"), "html", null, true);
        echo "\" />
                            <p class=\"lead\">This requested URL was not found on this server.</p>
                            <a href=\"";
        // line 10
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
        return "exception/404.html.twig";
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
        return array (  54 => 10,  49 => 8,  40 => 1,);
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
                            <img class=\"mb-4 img-error\" src=\"{{ asset('assets/img/error-404-monochrome.svg') }}\" />
                            <p class=\"lead\">This requested URL was not found on this server.</p>
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
</div>", "exception/404.html.twig", "D:\\IPNET\\PROJET\\PPE Groupe ASSIH-TCHANGAI\\App\\tickets\\templates\\exception\\404.html.twig");
    }
}
