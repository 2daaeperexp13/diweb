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
        echo "<link href=\"https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.css\" rel=\"stylesheet\">

<script src=\"https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.js\"></script>
<div class=\"container mb-5\">
    <div class=\"container-fluid border p-0 miheader2 rounded shadow\">
        <div class=\"encabezadoBack pl-3 text-dark mb-auto rounded\">
            <h1>PRODUCTOS</h1>
        </div>
        <div class=\"m-1 p-3 \">
            <table class=\"table table-striped bg-white\" id=\"table\"   data-toggle=\"table\"
                data-sort-class=\"table-active\"
                data-sortable=\"true\"
                data-height=\"460\"
                data-url=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["prodjson"]) || array_key_exists("prodjson", $context) ? $context["prodjson"] : (function () { throw new RuntimeError('Variable "prodjson" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\">
                <thead>
                    <tr>
                        <th  data-field=\"id\" data-sortable=\"true\">Id</th>
                        <th  data-field=\"nombre\" data-sortable=\"true\">Nombre</th>
                        <th  data-field=\"precio\" data-sortable=\"true\">Precio</th>
                        <th  data-field=\"istock\" data-sortable=\"true\">Stock</th
                    </tr>
                </thead>
                <tbody>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 30
            echo "                    <tr>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "precio", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "stock", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                        <td>
                        <a class=\"btnform2 btn rounded\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("producto_show", ["id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">DATOS</a>
                        <a class=\"btn btnform2 rounded\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("producto_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["producto"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">EDITAR <img class=\"interaccionesBackend\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgs/editar.png"), "html", null, true);
            echo "\"></img></a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "                    <tr>
                        <td colspan=\"4\">No hay registros en la base de datos</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </tbody>
            </table>
        </div>
    </div>
    <div class=\"mt-3\">
        <a class=\"ml-auto p-5\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("producto_new");
        echo "\">
            <h4 class=\"float-left m-0\">AÑADIR<img class=\"interaccionesBackend m-o\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgs/añadir.png"), "html", null, true);
        echo "\"></img></h4>
        </a>
    </div>
    <div class=\"navigation float-right\"> 
        ";
        // line 55
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 55, $this->source); })()));
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
        return array (  183 => 55,  176 => 51,  172 => 50,  165 => 45,  156 => 41,  145 => 37,  141 => 36,  136 => 34,  132 => 33,  128 => 32,  124 => 31,  121 => 30,  116 => 29,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Producto index{% endblock %}

{% block body %}
<link href=\"https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.css\" rel=\"stylesheet\">

<script src=\"https://unpkg.com/bootstrap-table@1.18.2/dist/bootstrap-table.min.js\"></script>
<div class=\"container mb-5\">
    <div class=\"container-fluid border p-0 miheader2 rounded shadow\">
        <div class=\"encabezadoBack pl-3 text-dark mb-auto rounded\">
            <h1>PRODUCTOS</h1>
        </div>
        <div class=\"m-1 p-3 \">
            <table class=\"table table-striped bg-white\" id=\"table\"   data-toggle=\"table\"
                data-sort-class=\"table-active\"
                data-sortable=\"true\"
                data-height=\"460\"
                data-url=\"{{prodjson}}\">
                <thead>
                    <tr>
                        <th  data-field=\"id\" data-sortable=\"true\">Id</th>
                        <th  data-field=\"nombre\" data-sortable=\"true\">Nombre</th>
                        <th  data-field=\"precio\" data-sortable=\"true\">Precio</th>
                        <th  data-field=\"istock\" data-sortable=\"true\">Stock</th
                    </tr>
                </thead>
                <tbody>
                {% for producto in productos %}
                    <tr>
                        <td>{{ producto.id }}</td>
                        <td>{{ producto.nombre }}</td>
                        <td>{{ producto.precio }}</td>
                        <td>{{ producto.stock }}</td>
                        <td>
                        <a class=\"btnform2 btn rounded\" href=\"{{ path('producto_show', {'id': producto.id}) }}\">DATOS</a>
                        <a class=\"btn btnform2 rounded\" href=\"{{ path('producto_edit', {'id': producto.id}) }}\">EDITAR <img class=\"interaccionesBackend\" src=\"{{asset('imgs/editar.png')}}\"></img></a>
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
    <div class=\"navigation float-right\"> 
        {{ knp_pagination_render(productos) }} 
    </div>
</div>



{% endblock %}
", "producto/index.html.twig", "C:\\wamp64\\www\\Interfaces web\\diweb\\proyectoFinal\\templates\\producto\\index.html.twig");
    }
}
