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

/* provincia/_form.html.twig */
class __TwigTemplate_c34a7961933d1333b96943bba8f66bf5ce9767f8cbb9cef00912c704cace6bda extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "provincia/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "provincia/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    <div class=\"container-fluid form row p-3\">
        <div class=\"col-3\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "codProv", [], "any", false, false, false, 4), 'row', ["label" => "Código provincia"]);
        // line 6
        echo "
            
        </div>
        <div class=\"col-3\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "nombre", [], "any", false, false, false, 10), 'row', ["label" => "Nombre"]);
        // line 12
        echo "
            
        </div>
        <div class=\"d-flex justify-content-end mr-1\">
            <button class=\"btn btnform2 rounded\">";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 16, $this->source); })()), "GUARDAR")) : ("GUARDAR")), "html", null, true);
        echo " <img class=\"interaccionesBackend rounded \" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgs/guardar.png"), "html", null, true);
        echo "\"></img></button>
        </div>
    </div>
    
";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "provincia/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  65 => 16,  59 => 12,  57 => 10,  51 => 6,  49 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    <div class=\"container-fluid form row p-3\">
        <div class=\"col-3\">
            {{ form_row(form.codProv,{
                label:'Código provincia'
            })}}
            
        </div>
        <div class=\"col-3\">
            {{ form_row(form.nombre,{
                label:'Nombre'
            })}}
            
        </div>
        <div class=\"d-flex justify-content-end mr-1\">
            <button class=\"btn btnform2 rounded\">{{ button_label|default('GUARDAR') }} <img class=\"interaccionesBackend rounded \" src=\"{{asset('imgs/guardar.png')}}\"></img></button>
        </div>
    </div>
    
{{ form_end(form) }}
", "provincia/_form.html.twig", "C:\\wamp64\\www\\Interfaces web\\diweb\\proyectoFinal\\templates\\provincia\\_form.html.twig");
    }
}
