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

/* producto/index.html.twig */
class __TwigTemplate_15106a857a73d4ae4b28665050e94ac1c9fc0e7404fa4d5e20435966ea3b0a3b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "producto/index.html.twig", 1);
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

        echo "Producto index";
        
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
            <h1>PRODUCTOS</h1>
        </div>
        <div class=\"m-1 p-3 \">
            <table class=\"table table-striped bg-white\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 25
            echo "                    <tr>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "descripcion", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                        <td>
                        <a class=\"btnform2 btn rounded\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("producto_show", ["id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">DATOS</a>
                                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("producto_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" CLASS=\"ml-5 \">EDITAR<img class=\"interaccionesBackend\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgs/editar.png"), "html", null, true);
            echo "\"></img></a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "                    <tr>
                        <td colspan=\"4\">No hay registros en la base de datos</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </tbody>
            </table>
        </div>
    </div>
    <div class=\"mt-3\">
        <a class=\"ml-auto p-5\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("producto_new");
        echo "\">
            <h4 class=\"float-left m-0\">AÑADIR<img class=\"interaccionesBackend m-o\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgs/añadir.png"), "html", null, true);
        echo "\"></img></h4>
        </a>
    </div>
    <div class=\"navigation\"> 
        ";
        // line 51
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 51, $this->source); })()));
        echo " 
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "producto/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 51,  172 => 47,  168 => 46,  161 => 41,  152 => 37,  141 => 33,  137 => 32,  132 => 30,  128 => 29,  124 => 28,  120 => 27,  116 => 26,  113 => 25,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Producto index{% endblock %}

{% block body %}
<div class=\"container mb-5\">
    <div class=\"container-fluid border p-0 miheader2 rounded shadow\">
        <div class=\"encabezadoBack pl-3 text-dark mb-auto rounded\">
            <h1>PRODUCTOS</h1>
        </div>
        <div class=\"m-1 p-3 \">
            <table class=\"table table-striped bg-white\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tbody>
                {% for producto in productos %}
                    <tr>
                        <td>{{ producto.id }}</td>
                        <td>{{ producto.nombre }}</td>
                        <td>{{ producto.descripcion }}</td>
                        <td>{{ producto.precio }}</td>
                        <td>{{ producto.stock }}</td>
                        <td>
                        <a class=\"btnform2 btn rounded\" href=\"{{ path('producto_show', {'id': producto.id}) }}\">DATOS</a>
                                    <a href=\"{{ path('producto_edit', {'id': producto.id}) }}\" CLASS=\"ml-5 \">EDITAR<img class=\"interaccionesBackend\" src=\"{{asset('imgs/editar.png')}}\"></img></a>
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
        <a class=\"ml-auto p-5\" href=\"{{ path('producto_new') }}\">
            <h4 class=\"float-left m-0\">AÑADIR<img class=\"interaccionesBackend m-o\" src=\"{{asset('imgs/añadir.png')}}\"></img></h4>
        </a>
    </div>
    <div class=\"navigation\"> 
        {{ knp_pagination_render(productos) }} 
    </div>
</div>
{% endblock %}
", "producto/index.html.twig", "C:\\wamp64\\www\\Interfaces web\\diweb\\proyectoFinal\\templates\\producto\\index.html.twig");
    }
}
