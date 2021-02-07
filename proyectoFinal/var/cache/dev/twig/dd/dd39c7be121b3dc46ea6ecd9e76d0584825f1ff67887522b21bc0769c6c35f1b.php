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

/* usuario/new.html.twig */
class __TwigTemplate_6e8ed53813cbc7fe295b4ddc58feacc7c9ca54ae05cda923a31a13a060db1d3d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'header' => [$this, 'block_header'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "usuario/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "usuario/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 3
        echo "    <!-- Bootstrap CSS-->
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "vendor/bootstrap/css/bootstrap.min.css\">
    <!-- Lightbox-->
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "vendor/lightbox2/css/lightbox.min.css\">
    <!-- Range slider-->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "vendor/nouislider/nouislider.min.css\">
    <!-- Bootstrap select-->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "vendor/bootstrap-select/css/bootstrap-select.min.css\">
    <!-- Owl Carousel-->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "vendor/owl.carousel2/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "vendor/owl.carousel2/assets/owl.theme.default.css\">
    <!-- Google fonts-->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap\">
    <!-- theme stylesheet-->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "css/style.blue.css\" id=\"theme-stylesheet\">
    <!-- Custom stylesheet - for your changes-->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "css/custom.css\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "img/favicon.png\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        echo twig_include($this->env, $context, "frontend.html.twig");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Usuario";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "    <h1>AÑADIR USUARIO</h1>

    ";
        // line 31
        echo twig_include($this->env, $context, "usuario/_form.html.twig");
        echo "

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuario_index");
        echo "\">back to list</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "usuario/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 33,  182 => 31,  178 => 29,  168 => 28,  149 => 26,  129 => 25,  116 => 22,  111 => 20,  106 => 18,  98 => 13,  94 => 12,  89 => 10,  84 => 8,  79 => 6,  74 => 4,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block css %}
    <!-- Bootstrap CSS-->
    <link rel=\"stylesheet\" href=\"{{ruta}}vendor/bootstrap/css/bootstrap.min.css\">
    <!-- Lightbox-->
    <link rel=\"stylesheet\" href=\"{{ruta}}vendor/lightbox2/css/lightbox.min.css\">
    <!-- Range slider-->
    <link rel=\"stylesheet\" href=\"{{ruta}}vendor/nouislider/nouislider.min.css\">
    <!-- Bootstrap select-->
    <link rel=\"stylesheet\" href=\"{{ruta}}vendor/bootstrap-select/css/bootstrap-select.min.css\">
    <!-- Owl Carousel-->
    <link rel=\"stylesheet\" href=\"{{ruta}}vendor/owl.carousel2/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"{{ruta}}vendor/owl.carousel2/assets/owl.theme.default.css\">
    <!-- Google fonts-->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap\">
    <!-- theme stylesheet-->
    <link rel=\"stylesheet\" href=\"{{ruta}}css/style.blue.css\" id=\"theme-stylesheet\">
    <!-- Custom stylesheet - for your changes-->
    <link rel=\"stylesheet\" href=\"{{ruta}}css/custom.css\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"{{ruta}}img/favicon.png\">

{% endblock %}
{% block header %} {{ include('frontend.html.twig') }}{% endblock %}
{% block title %}New Usuario{% endblock %}

{% block body %}
    <h1>AÑADIR USUARIO</h1>

    {{ include('usuario/_form.html.twig') }}

    <a href=\"{{ path('usuario_index') }}\">back to list</a>
{% endblock %}
", "usuario/new.html.twig", "C:\\wamp64\\www\\Interfaces web\\diweb\\proyectoFinal\\templates\\usuario\\new.html.twig");
    }
}
