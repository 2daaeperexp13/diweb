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

/* frontend.html.twig */
class __TwigTemplate_752aa0765c485ef293865dc175a8c540950d2e2490c521c81c495205351fcad5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        // line 26
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "    <!-- navbar-->
     <header class=\"header bg-primary \">
        <div class=\"container px-0 px-lg-3 \">
          <nav class=\"navbar navbar-expand-lg navbar-light py-5 px-lg-0\"><div class=\"navbar-brand\"><a  href=\"index.html\"><img id=\"logo\" class=\"img-fluid\" src=\"/imgs/logo.jpg\"><span class=\"font-weight-bold text-uppercase text-warning h1\">XRACING</span></img></a></div>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
              <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                  <!-- Link--><a class=\"nav-link text-white\" href=\"#\">Inicio</a>
                </li>
                <li class=\"nav-item\">
                  <!-- Link--><a class=\"nav-link text-white\" href=\"#\">Productos</a>
                </li>
              </ul>
              <ul class=\"navbar-nav ml-auto\">               
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"cart.html\"> <i class=\"fas fa-dolly-flatbed mr-1 text-gray\"></i>Cart<small class=\"text-gray\">(2)</small></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"> <i class=\"fas fa-user-alt mr-1 text-gray\"></i>Login</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </header>
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontend.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 2,  57 => 1,  46 => 26,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header%}
    <!-- navbar-->
     <header class=\"header bg-primary \">
        <div class=\"container px-0 px-lg-3 \">
          <nav class=\"navbar navbar-expand-lg navbar-light py-5 px-lg-0\"><div class=\"navbar-brand\"><a  href=\"index.html\"><img id=\"logo\" class=\"img-fluid\" src=\"/imgs/logo.jpg\"><span class=\"font-weight-bold text-uppercase text-warning h1\">XRACING</span></img></a></div>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
              <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                  <!-- Link--><a class=\"nav-link text-white\" href=\"#\">Inicio</a>
                </li>
                <li class=\"nav-item\">
                  <!-- Link--><a class=\"nav-link text-white\" href=\"#\">Productos</a>
                </li>
              </ul>
              <ul class=\"navbar-nav ml-auto\">               
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"cart.html\"> <i class=\"fas fa-dolly-flatbed mr-1 text-gray\"></i>Cart<small class=\"text-gray\">(2)</small></a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"> <i class=\"fas fa-user-alt mr-1 text-gray\"></i>Login</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </header>
 
{% endblock %}

", "frontend.html.twig", "C:\\wamp64\\www\\Interfaces web\\diweb\\proyectoFinal\\templates\\frontend.html.twig");
    }
}
