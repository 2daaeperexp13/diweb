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

/* localidad/index.html.twig */
class __TwigTemplate_4c59b6c2e034ad8762640eca452eeaa9fb7d4367d95e037fa3b340b4f2811d78 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "localidad/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "localidad/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "localidad/index.html.twig", 1);
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

        echo "LOCALIDADES";
        
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
    <div class=\"container-fluid border p-0 miheader2 rounded shadow\">
        <div class=\"encabezadoBack pl-3 text-dark mb-auto rounded\">
            <h1>LOCALIDADES</h1>
        </div>
        <div class=\"m-1 p-3 \">
            <table class=\"table table-striped bg-white\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Código</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localidades"]) || array_key_exists("localidades", $context) ? $context["localidades"] : (function () { throw new RuntimeError('Variable "localidades" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["localidad"]) {
            // line 22
            echo "                    <tr>
                        <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localidad"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localidad"], "codLoc", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["localidad"], "nombre", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btnform2 btn rounded-circle\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("localidad_show", ["id" => twig_get_attribute($this->env, $this->source, $context["localidad"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">DATOS</a>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("localidad_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["localidad"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" CLASS=\"ml-5\">EDITAR<img class=\"interaccionesBackend\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgs/editar.png"), "html", null, true);
            echo "\"></img></a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "                    <tr>
                        <td colspan=\"4\">No hay registros en la base de datos</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
            </table>
        </div>
    </div>
    <div class=\"mt-3\">
        <a class=\"ml-auto p-5\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("localidad_new");
        echo "\">
            <h4 class=\"float-left m-0\">AÑADIR<img class=\"interaccionesBackend m-o\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgs/añadir.png"), "html", null, true);
        echo "\"></img></h4>
        </a>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "localidad/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 42,  157 => 41,  150 => 36,  141 => 32,  130 => 28,  126 => 27,  121 => 25,  117 => 24,  113 => 23,  110 => 22,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}LOCALIDADES{% endblock %}

{% block body %}
<div class=\"container mb-5\">
    <div class=\"container-fluid border p-0 miheader2 rounded shadow\">
        <div class=\"encabezadoBack pl-3 text-dark mb-auto rounded\">
            <h1>LOCALIDADES</h1>
        </div>
        <div class=\"m-1 p-3 \">
            <table class=\"table table-striped bg-white\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Código</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                {% for localidad in localidades %}
                    <tr>
                        <td>{{ localidad.id }}</td>
                        <td>{{ localidad.codLoc }}</td>
                        <td>{{ localidad.nombre }}</td>
                        <td>
                            <a class=\"btnform2 btn rounded-circle\" href=\"{{ path('localidad_show', {'id': localidad.id}) }}\">DATOS</a>
                            <a href=\"{{ path('localidad_edit', {'id': localidad.id}) }}\" CLASS=\"ml-5\">EDITAR<img class=\"interaccionesBackend\" src=\"{{asset('imgs/editar.png')}}\"></img></a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"4\">No hay registros en la base de datos</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    <div class=\"mt-3\">
        <a class=\"ml-auto p-5\" href=\"{{ path('localidad_new') }}\">
            <h4 class=\"float-left m-0\">AÑADIR<img class=\"interaccionesBackend m-o\" src=\"{{asset('imgs/añadir.png')}}\"></img></h4>
        </a>
    </div>
</div>
{% endblock %}
", "localidad/index.html.twig", "C:\\wamp64\\www\\Interfaces web\\diweb\\proyectoFinal\\templates\\localidad\\index.html.twig");
    }
}
