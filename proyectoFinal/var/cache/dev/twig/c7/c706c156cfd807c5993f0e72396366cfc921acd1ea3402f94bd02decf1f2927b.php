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

/* producto/show.html.twig */
class __TwigTemplate_c35392f3fc5acbbc292d132383d0d744d13b6b94d0d5dcdbb52d073ed509ba77 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "producto/show.html.twig", 1);
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

        echo "Producto";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"container mb-5\">
    <div class=\"container-fluid border p-0 miheader2 rounded shadow mb-5 pb-2\">
        <div class=\"encabezadoBack pl-3 text-dark mb-auto rounded\">
            <h1>PRODUCTOS</h1>
        </div>
        <div class=\"m-1 p-3 \">
            <table class=\"table table-striped bg-white\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 22, $this->source); })()), "nombre", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Descripcion</th>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 26, $this->source); })()), "descripcion", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Precio</th>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 30, $this->source); })()), "precio", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Existencias</th>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 34, $this->source); })()), "stock", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Imágenes</th>
                        <td>
                            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 39, $this->source); })()), "imgProductos", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["imgs"]) {
            // line 40
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["imgs"], "img", [], "any", false, false, false, 40), "html", null, true);
            echo "\" width=\"150px\" height=\"150px\"  class=\"rounded img-fluid\"/>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imgs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                        </td>
                </tbody>
            </table>
        </div>
        <div class=\"d-flex justify-content-around\">
            <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("producto_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["producto"]) || array_key_exists("producto", $context) ? $context["producto"] : (function () { throw new RuntimeError('Variable "producto" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\" class=\"btn btnform2 rounded\">EDITAR<img class=\"interaccionesBackend\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/imgs/editar.png"), "html", null, true);
        echo "\"></img></a> 
            ";
        // line 48
        echo twig_include($this->env, $context, "producto/_delete_form.html.twig");
        echo "
        </div>
    </div>
    <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("producto_index");
        echo "\"><h4>INICIO<img class=\"interaccionesBackend\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/imgs/volver.png"), "html", null, true);
        echo "\"></img></h4></a>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "producto/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 51,  162 => 48,  156 => 47,  149 => 42,  140 => 40,  136 => 39,  128 => 34,  121 => 30,  114 => 26,  107 => 22,  100 => 18,  88 => 8,  78 => 7,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Producto{% endblock %}



{% block body %}
<div class=\"container mb-5\">
    <div class=\"container-fluid border p-0 miheader2 rounded shadow mb-5 pb-2\">
        <div class=\"encabezadoBack pl-3 text-dark mb-auto rounded\">
            <h1>PRODUCTOS</h1>
        </div>
        <div class=\"m-1 p-3 \">
            <table class=\"table table-striped bg-white\">
                <tbody>
                    <tr>
                        <th>Id</th>
                        <td>{{ producto.id }}</td>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <td>{{ producto.nombre }}</td>
                    </tr>
                    <tr>
                        <th>Descripcion</th>
                        <td>{{ producto.descripcion }}</td>
                    </tr>
                    <tr>
                        <th>Precio</th>
                        <td>{{ producto.precio }}</td>
                    </tr>
                    <tr>
                        <th>Existencias</th>
                        <td>{{ producto.stock }}</td>
                    </tr>
                    <tr>
                        <th>Imágenes</th>
                        <td>
                            {% for  imgs in producto.imgProductos %}
                            <img src=\"{{imgs.img}}\" width=\"150px\" height=\"150px\"  class=\"rounded img-fluid\"/>
                            {% endfor %}
                        </td>
                </tbody>
            </table>
        </div>
        <div class=\"d-flex justify-content-around\">
            <a href=\"{{ path('producto_edit', {'id': producto.id}) }}\" class=\"btn btnform2 rounded\">EDITAR<img class=\"interaccionesBackend\" src=\"{{asset('/imgs/editar.png')}}\"></img></a> 
            {{ include('producto/_delete_form.html.twig') }}
        </div>
    </div>
    <a href=\"{{ path('producto_index') }}\"><h4>INICIO<img class=\"interaccionesBackend\" src=\"{{asset('/imgs/volver.png')}}\"></img></h4></a>
</div>
{% endblock %}
", "producto/show.html.twig", "C:\\wamp64\\www\\Interfaces web\\diweb\\proyectoFinal\\templates\\producto\\show.html.twig");
    }
}
