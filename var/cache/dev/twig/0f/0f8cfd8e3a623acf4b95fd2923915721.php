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

/* landing.html.twig */
class __TwigTemplate_e2962acee938ad4e67c943ce9a94baca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/fav.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
\t<title>Accueil</title>

\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "</head>
";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "<div class=\"container\">
\t<div class=\"hero_area\">
\t\t<header class=\"header_section long_section px-0\">
\t\t\t<nav class=\"navbar navbar-expand-lg custom_nav-container \">
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_landing");
        echo "\">
\t\t\t\t\t<span> TICKETING </span>
\t\t\t\t</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\t\t\taria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"\"> </span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<div class=\"d-flex mx-auto flex-column flex-lg-row align-items-center\">
\t\t\t\t\t\t<ul class=\"navbar-nav  \">
\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#home\">Home <span class=\"sr-only\">(current)</span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#about\"> About</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#blog\">Blog</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"quote_btn-container\">
\t\t\t\t\t\t<a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">
\t\t\t\t\t\t\t<span> Login </span>
\t\t\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<form class=\"form-inline\">
\t\t\t\t\t\t\t<button class=\"btn  my-2 my-sm-0 nav_search-btn\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>
\t\t<section id=\"home\" class=\"slider_section long_section\">
\t\t\t<div id=\"customCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t<div class=\"container \">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t\t<h1>Ticket Express</h1>
\t\t\t\t\t\t\t\t\t\t<p>Obtenez vos billets en un clin d'œil, sans tracas ! Ne perdez plus de temps à faire la queue ! Avec Ticket Express, notre application de billetterie révolutionnaire, vous pouvez acheter vos billets en quelques secondes seulement.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-box\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn1\">Generer un ticket</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#about\" class=\"btn2\">A propos de nous</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ticket_phone.png"), "html", null, true);
        echo "\" alt=\"ticket Phone\" title=\"--- TICKETING ---\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<div class=\"container \">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t\t<h1>Ticket Tracker</h1>
\t\t\t\t\t\t\t\t\t\t<p>Suivez vos événements en temps réel, ne ratez rien ! Restez informé à tout moment avec Ticket Tracker !</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-box\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn1\">Generer un ticket</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#about\" class=\"btn2\">A propos de nous</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ticket_phone2.png"), "html", null, true);
        echo "\" alt=\"ticket Phone\" title=\"--- TICKETING ---\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<div class=\"container \">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t\t<h1>Ticket Pro</h1>
\t\t\t\t\t\t\t\t\t\t<p>Simplifiez votre expérience d'achat de billets, profitez pleinement ! Notre application vous offre une expérience de generation de billets simplifiée et sécurisée.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-box\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"btn1\">Generer un ticket</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#about\" class=\"btn2\">A propos de nous</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ticket_phone3.png"), "html", null, true);
        echo "\" alt=\"ticket Phone\" title=\"--- TICKETING ---\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t<li data-target=\"#customCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t<li data-target=\"#customCarousel\" data-slide-to=\"1\"></li>
\t\t\t\t\t<li data-target=\"#customCarousel\" data-slide-to=\"2\"></li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</section>
\t</div>

\t<section id=\"about\" class=\"about_section layout_padding long_section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t<img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ticket.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t<div class=\"heading_container\">
\t\t\t\t\t\t\t<h2>A propos de nous</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tBienvenue sur TICKETING ! Nous sommes là pour simplifier la billetterie. Notre plateforme conviviale permet aux organisateurs d'événements et aux participants de bénéficier d'une expérience transparente en matière de billetterie.
\t\t\t\t\t\t\t<span class=\"hidden-content\">Avec une configuration d'événement facile, des paiements sécurisés et des analyses en temps réel, nous faisons de la gestion et de la participation à des événements un jeu d'enfant. Notre équipe d'assistance est là pour vous aider à chaque étape.
\t\t\t\t\t\t\tRejoignez les milliers d'utilisateurs satisfaits qui font confiance à TICKETING pour une billetterie sans souci. Découvrez le confort d'une solution de billetterie fiable et riche en fonctionnalités.
\t\t\t\t\t\t\tMerci d'avoir choisi TICKETING. Créons ensemble des événements inoubliables !</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<a href=\"#\" id=\"voir-plus\">
\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section id=\"blog\" class=\"blog_section layout_padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading_container\">
\t\t\t\t<h2>
\t\t\t\t\tLatest Blog
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-lg-4 mx-auto\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t<img src=\"";
        // line 172
        echo "img/agent_ticket.png";
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t<h5>Gain de temps et d'efficacité</h5>
\t\t\t\t\t\t\t<p>les agents peuvent traiter les tickets de manière plus efficace grâce à des fonctionnalités</p>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-lg-4 mx-auto\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t<img src=\"";
        // line 186
        echo "img/agent_ticket2.png";
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t<h5>Suivi transparent</h5>
\t\t\t\t\t\t\t<p>Les clients ont accès à des mises à jour en temps réel, des notifications et des historiques de communication</p>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-lg-4 mx-auto\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t<img src=\"";
        // line 200
        echo "img/agent_ticket3.png";
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t<h5>Amélioration de la communication</h5>
\t\t\t\t\t\t\t<p>Cette application favorise une communication fluide et efficace, réduisant les malentendus et améliorant la résolution des problèmes.</p>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"info_section long_section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"contact_nav\">
\t\t\t\t<div class=\"info_links col-lg-4\">
\t\t\t\t\t<h4>QUICK LINKS</h4>
\t\t\t\t\t<div class=\"info_links_menu\">
\t\t\t\t\t\t<a class=\"\" href=\"#home\">Home <span class=\"sr-only\">(current)</span></a>
\t\t\t\t\t\t<a class=\"\" href=\"#about\"> About</a>
\t\t\t\t\t\t<a class=\"\" href=\"#blog\">Blog</a>
\t\t\t\t\t\t<a class=\"\" href=\"";
        // line 224
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Generer un Ticket</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"info_form\">
\t\t\t\t\t<div class=\"social_box\">
\t\t\t\t\t\t<a href=\"https://www.facebook.com\">
\t\t\t\t\t\t\t<i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"https://www.twitter.com\">
\t\t\t\t\t\t\t<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"https://www.linkedin.com\">
\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"https://www.instagram.com\">
\t\t\t\t\t\t\t<i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<footer class=\"footer_section\">
\t\t<div class=\"container\">
\t\t\t<p> &copy; <span id=\"displayYear\"></span> All Rights Reserved By <a href=\"";
        // line 249
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_landing");
        echo "\">TICKETING</a> Distribution <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_landing");
        echo "\">HOLY</a> </p>
\t\t</div>
\t</footer>
</div>

";
        // line 254
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 255
        echo "\t<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
\t<script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\t\$(document).ready(function() {
\t\t\t\$('#voir-plus').click(function(e) {
\t\t\t\te.preventDefault();
\t\t\t\tsetTimeout(() => {
\t\t\t\t\t\$('.hidden-content').slideDown();
\t\t\t\t\t\$(this).hide();
\t\t\t\t}, 3000);
\t\t\t});
\t\t});


\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "landing.html.twig";
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
        return array (  407 => 257,  403 => 256,  400 => 255,  387 => 254,  377 => 249,  349 => 224,  322 => 200,  305 => 186,  288 => 172,  251 => 138,  227 => 117,  217 => 110,  200 => 96,  190 => 89,  173 => 75,  163 => 68,  136 => 44,  111 => 22,  105 => 18,  98 => 17,  89 => 14,  85 => 13,  81 => 12,  75 => 10,  68 => 9,  61 => 17,  58 => 16,  56 => 9,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<link rel=\"shortcut icon\" href=\"{{ asset('img/fav.ico') }}\" type=\"image/x-icon\">
\t<title>Accueil</title>

\t{% block stylesheets %}
\t<link href=\"{{ asset('css/bootstrap.css') }}\" rel=\"stylesheet\" />
\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap\" rel=\"stylesheet\" />
\t<link href=\"{{ asset('css/font-awesome.min.css') }}\" rel=\"stylesheet\" />
\t<link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" />
\t<link href=\"{{ asset('css/responsive.css') }}\" rel=\"stylesheet\" />
\t{% endblock %}
</head>
{% block body %}
<div class=\"container\">
\t<div class=\"hero_area\">
\t\t<header class=\"header_section long_section px-0\">
\t\t\t<nav class=\"navbar navbar-expand-lg custom_nav-container \">
\t\t\t\t<a class=\"navbar-brand\" href=\"{{ path('app_landing') }}\">
\t\t\t\t\t<span> TICKETING </span>
\t\t\t\t</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\t\t\taria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"\"> </span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<div class=\"d-flex mx-auto flex-column flex-lg-row align-items-center\">
\t\t\t\t\t\t<ul class=\"navbar-nav  \">
\t\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#home\">Home <span class=\"sr-only\">(current)</span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#about\"> About</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#blog\">Blog</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"quote_btn-container\">
\t\t\t\t\t\t<a href=\"{{ path('app_login') }}\">
\t\t\t\t\t\t\t<span> Login </span>
\t\t\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<form class=\"form-inline\">
\t\t\t\t\t\t\t<button class=\"btn  my-2 my-sm-0 nav_search-btn\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>
\t\t<section id=\"home\" class=\"slider_section long_section\">
\t\t\t<div id=\"customCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t<div class=\"container \">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t\t<h1>Ticket Express</h1>
\t\t\t\t\t\t\t\t\t\t<p>Obtenez vos billets en un clin d'œil, sans tracas ! Ne perdez plus de temps à faire la queue ! Avec Ticket Express, notre application de billetterie révolutionnaire, vous pouvez acheter vos billets en quelques secondes seulement.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-box\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_login') }}\" class=\"btn1\">Generer un ticket</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#about\" class=\"btn2\">A propos de nous</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/ticket_phone.png')}}\" alt=\"ticket Phone\" title=\"--- TICKETING ---\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<div class=\"container \">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t\t<h1>Ticket Tracker</h1>
\t\t\t\t\t\t\t\t\t\t<p>Suivez vos événements en temps réel, ne ratez rien ! Restez informé à tout moment avec Ticket Tracker !</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-box\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_login') }}\" class=\"btn1\">Generer un ticket</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#about\" class=\"btn2\">A propos de nous</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/ticket_phone2.png') }}\" alt=\"ticket Phone\" title=\"--- TICKETING ---\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<div class=\"container \">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t\t\t\t<h1>Ticket Pro</h1>
\t\t\t\t\t\t\t\t\t\t<p>Simplifiez votre expérience d'achat de billets, profitez pleinement ! Notre application vous offre une expérience de generation de billets simplifiée et sécurisée.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-box\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_login') }}\" class=\"btn1\">Generer un ticket</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#about\" class=\"btn2\">A propos de nous</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('img/ticket_phone3.png') }}\" alt=\"ticket Phone\" title=\"--- TICKETING ---\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t<li data-target=\"#customCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t<li data-target=\"#customCarousel\" data-slide-to=\"1\"></li>
\t\t\t\t\t<li data-target=\"#customCarousel\" data-slide-to=\"2\"></li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</section>
\t</div>

\t<section id=\"about\" class=\"about_section layout_padding long_section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t<img src=\"{{ asset('img/ticket.png') }}\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t<div class=\"heading_container\">
\t\t\t\t\t\t\t<h2>A propos de nous</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tBienvenue sur TICKETING ! Nous sommes là pour simplifier la billetterie. Notre plateforme conviviale permet aux organisateurs d'événements et aux participants de bénéficier d'une expérience transparente en matière de billetterie.
\t\t\t\t\t\t\t<span class=\"hidden-content\">Avec une configuration d'événement facile, des paiements sécurisés et des analyses en temps réel, nous faisons de la gestion et de la participation à des événements un jeu d'enfant. Notre équipe d'assistance est là pour vous aider à chaque étape.
\t\t\t\t\t\t\tRejoignez les milliers d'utilisateurs satisfaits qui font confiance à TICKETING pour une billetterie sans souci. Découvrez le confort d'une solution de billetterie fiable et riche en fonctionnalités.
\t\t\t\t\t\t\tMerci d'avoir choisi TICKETING. Créons ensemble des événements inoubliables !</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<a href=\"#\" id=\"voir-plus\">
\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section id=\"blog\" class=\"blog_section layout_padding\">
\t\t<div class=\"container\">
\t\t\t<div class=\"heading_container\">
\t\t\t\t<h2>
\t\t\t\t\tLatest Blog
\t\t\t\t</h2>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-lg-4 mx-auto\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t<img src=\"{{ ('img/agent_ticket.png') }}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t<h5>Gain de temps et d'efficacité</h5>
\t\t\t\t\t\t\t<p>les agents peuvent traiter les tickets de manière plus efficace grâce à des fonctionnalités</p>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-lg-4 mx-auto\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t<img src=\"{{ ('img/agent_ticket2.png') }}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t<h5>Suivi transparent</h5>
\t\t\t\t\t\t\t<p>Les clients ont accès à des mises à jour en temps réel, des notifications et des historiques de communication</p>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-lg-4 mx-auto\">
\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t<div class=\"img-box\">
\t\t\t\t\t\t\t<img src=\"{{ ('img/agent_ticket3.png') }}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"detail-box\">
\t\t\t\t\t\t\t<h5>Amélioration de la communication</h5>
\t\t\t\t\t\t\t<p>Cette application favorise une communication fluide et efficace, réduisant les malentendus et améliorant la résolution des problèmes.</p>
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"info_section long_section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"contact_nav\">
\t\t\t\t<div class=\"info_links col-lg-4\">
\t\t\t\t\t<h4>QUICK LINKS</h4>
\t\t\t\t\t<div class=\"info_links_menu\">
\t\t\t\t\t\t<a class=\"\" href=\"#home\">Home <span class=\"sr-only\">(current)</span></a>
\t\t\t\t\t\t<a class=\"\" href=\"#about\"> About</a>
\t\t\t\t\t\t<a class=\"\" href=\"#blog\">Blog</a>
\t\t\t\t\t\t<a class=\"\" href=\"{{ path('app_login') }}\">Generer un Ticket</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"info_form\">
\t\t\t\t\t<div class=\"social_box\">
\t\t\t\t\t\t<a href=\"https://www.facebook.com\">
\t\t\t\t\t\t\t<i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"https://www.twitter.com\">
\t\t\t\t\t\t\t<i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"https://www.linkedin.com\">
\t\t\t\t\t\t\t<i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"https://www.instagram.com\">
\t\t\t\t\t\t\t<i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<footer class=\"footer_section\">
\t\t<div class=\"container\">
\t\t\t<p> &copy; <span id=\"displayYear\"></span> All Rights Reserved By <a href=\"{{ path('app_landing') }}\">TICKETING</a> Distribution <a href=\"{{ path('app_landing') }}\">HOLY</a> </p>
\t\t</div>
\t</footer>
</div>

{% block javascripts %}
\t<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
\t<script src=\"{{ asset('js/bootstrap.js') }}\"></script>
\t<script src=\"{{ asset('js/custom.js') }}\"></script>
\t<script>
\t\t\$(document).ready(function() {
\t\t\t\$('#voir-plus').click(function(e) {
\t\t\t\te.preventDefault();
\t\t\t\tsetTimeout(() => {
\t\t\t\t\t\$('.hidden-content').slideDown();
\t\t\t\t\t\$(this).hide();
\t\t\t\t}, 3000);
\t\t\t});
\t\t});


\t</script>
{% endblock %}
{% endblock body %}", "landing.html.twig", "D:\\IPNET\\PROJET\\PPE Groupe ASSIH-TCHANGAI\\App\\tickets\\templates\\landing.html.twig");
    }
}
