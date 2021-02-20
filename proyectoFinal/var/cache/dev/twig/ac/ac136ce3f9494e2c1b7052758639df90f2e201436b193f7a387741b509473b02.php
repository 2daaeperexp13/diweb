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
class __TwigTemplate_ba3fd9d7ddbe379d96005ef1d649158a67657fbb17f0a4b328f85a8e5cef2685 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Identifícate";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container mb-5\">
    <form method=\"post\">
        ";
        // line 8
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "            <div class=\"alert alert-danger\">Usuario o contraseña incorrectos</div>
        ";
        }
        // line 11
        echo "
        ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12)) {
            // line 13
            echo "            <div class=\"mb-3\">
                Iniciado sesión como ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "username", [], "any", false, false, false, 14), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Cerrar  sesión</a>
            </div>
        ";
        }
        // line 17
        echo "        ";
        if ((isset($context["registrado"]) || array_key_exists("registrado", $context) ? $context["registrado"] : (function () { throw new RuntimeError('Variable "registrado" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "            <h2 class=\"text-center text-seconary\">Ya estás registrado! Se ha enviado un correo de confirmación a su dirección de correo</h2>
        ";
        }
        // line 20
        echo "        <div class=\"container-fluid border p-0\">
            <div class=\"miheader2 h-25 py-1 mb-2 pl-2\"><h2 class=\"h3  font-weight-bold text-secondary\">Introduce una dirección de correo y contraseña</h2></div>
            <div class=\"container-fluid ml-1\">
                <label for=\"inputEmail\">Email</label>
                <input type=\"email\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
                <label for=\"inputPassword\">Contraseña</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                <div class=\"checkbox mb-3\">
                    <label>
                        <input type=\"checkbox\" name=\"_remember_me\"> Recuérdame
                    </label>
                </div>
            </div>
            <div class=\"row m-1\">
                <button class=\"btn btn-lg miheader2 col-2 ml-2 rounded  btn-outline-info btn-sm\" type=\"submit\">Iniciar sesión</button>
                <a href=\"/register\" class=\"btn btn-outline-danger  miheader2 btn-sm mr-2  col-2 offset-6 rounded \">Registrarme</a>
            </div>
        </div>
    </form>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 28,  127 => 24,  121 => 20,  117 => 18,  114 => 17,  106 => 14,  103 => 13,  101 => 12,  98 => 11,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Identifícate{% endblock %}

{% block body %}
<div class=\"container mb-5\">
    <form method=\"post\">
        {% if error %}
            <div class=\"alert alert-danger\">Usuario o contraseña incorrectos</div>
        {% endif %}

        {% if app.user %}
            <div class=\"mb-3\">
                Iniciado sesión como {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Cerrar  sesión</a>
            </div>
        {% endif %}
        {% if registrado %}
            <h2 class=\"text-center text-seconary\">Ya estás registrado! Se ha enviado un correo de confirmación a su dirección de correo</h2>
        {% endif %}
        <div class=\"container-fluid border p-0\">
            <div class=\"miheader2 h-25 py-1 mb-2 pl-2\"><h2 class=\"h3  font-weight-bold text-secondary\">Introduce una dirección de correo y contraseña</h2></div>
            <div class=\"container-fluid ml-1\">
                <label for=\"inputEmail\">Email</label>
                <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
                <label for=\"inputPassword\">Contraseña</label>
                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                <div class=\"checkbox mb-3\">
                    <label>
                        <input type=\"checkbox\" name=\"_remember_me\"> Recuérdame
                    </label>
                </div>
            </div>
            <div class=\"row m-1\">
                <button class=\"btn btn-lg miheader2 col-2 ml-2 rounded  btn-outline-info btn-sm\" type=\"submit\">Iniciar sesión</button>
                <a href=\"/register\" class=\"btn btn-outline-danger  miheader2 btn-sm mr-2  col-2 offset-6 rounded \">Registrarme</a>
            </div>
        </div>
    </form>
</div>
{% endblock %}
", "security/login.html.twig", "C:\\wamp64\\www\\Interfaces web\\diweb\\proyectoFinal\\templates\\security\\login.html.twig");
    }
}
