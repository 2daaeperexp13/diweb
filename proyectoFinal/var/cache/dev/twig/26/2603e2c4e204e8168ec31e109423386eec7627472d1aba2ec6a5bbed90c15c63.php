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

/* producto/_form.html.twig */
class __TwigTemplate_2456358890a9a9eb31631780ddcc1951be3df83bbc72fd9ede7f26c920a76089 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/_form.html.twig"));

        // line 1
        echo "<div class=\"container \">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        echo "
    <div class=\"\">
        <div class=\"form-group\">
            <div class=\"\">
                ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "categoria", [], "any", false, false, false, 6), 'row', ["label" => "Categoría"]);
        // line 8
        echo "
                
            </div>
            <div class=\"\">
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "tipoProducto", [], "any", false, false, false, 12), 'row', ["label" => "Tipo de producto"]);
        // line 14
        echo "
                
            </div>
            <div class=\"\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "nombre", [], "any", false, false, false, 18), 'row', ["label" => "nombre"]);
        // line 20
        echo "
                
            </div>
        </div>
        <div class=\"formgroup\">
            <div class=\"l\">
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "descripcion", [], "any", false, false, false, 26), 'row', ["label" => "Descripción detallada"]);
        // line 28
        echo "
                
            </div>
            <div class=\"\">
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "stock", [], "any", false, false, false, 32), 'row', ["label" => "Existencias del producto"]);
        // line 34
        echo "
                
            </div>
            <div class=\"\">
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "precio", [], "any", false, false, false, 38), 'row', ["label" => "Precio"]);
        // line 40
        echo "
                
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"\">
                <span class=\"btn btn-default btn-file\">
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "imgProductos", [], "any", false, false, false, 47), 'row', ["label" => "Imágenes del producto"]);
        // line 49
        echo "
                </span>
            </div>
            <button class=\"btn miheader\">";
        // line 52
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 52, $this->source); })()), "GUARDAR")) : ("GUARDAR")), "html", null, true);
        echo "</button>
        </div>
    </div>
    

    ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
        echo "
</div>

    
    

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "producto/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 57,  113 => 52,  108 => 49,  106 => 47,  97 => 40,  95 => 38,  89 => 34,  87 => 32,  81 => 28,  79 => 26,  71 => 20,  69 => 18,  63 => 14,  61 => 12,  55 => 8,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container \">
    {{ form_start(form) }}
    <div class=\"\">
        <div class=\"form-group\">
            <div class=\"\">
                {{ form_row(form.categoria,{
                    label:'Categoría'
                })}}
                
            </div>
            <div class=\"\">
                {{ form_row(form.tipoProducto,{
                    label:'Tipo de producto'
                })}}
                
            </div>
            <div class=\"\">
                {{ form_row(form.nombre,{
                    label:'nombre'
                })}}
                
            </div>
        </div>
        <div class=\"formgroup\">
            <div class=\"l\">
                {{ form_row(form.descripcion,{
                    label:'Descripción detallada'
                })}}
                
            </div>
            <div class=\"\">
                {{ form_row(form.stock,{
                    label:'Existencias del producto'
                })}}
                
            </div>
            <div class=\"\">
                {{ form_row(form.precio,{
                    label:'Precio'
                })}}
                
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"\">
                <span class=\"btn btn-default btn-file\">
                    {{ form_row(form.imgProductos,{
                        label:'Imágenes del producto'
                    })}}
                </span>
            </div>
            <button class=\"btn miheader\">{{ button_label|default('GUARDAR') }}</button>
        </div>
    </div>
    

    {{ form_end(form) }}
</div>

    
    

", "producto/_form.html.twig", "C:\\wamp64\\www\\Interfaces web\\diweb\\proyectoFinal\\templates\\producto\\_form.html.twig");
    }
}
