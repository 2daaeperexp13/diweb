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

/* /backend.html.twig */
class __TwigTemplate_0c397284683fd07c64b856a0e681dee2642d47fa172c56b82d3f70982b44de6b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/backend.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/backend.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "    <!-- navbar-->
     <header class=\"header miheader2 overflow-scroll mb-5 shadow\">
        <div class=\"container px-0 px-lg-3 \">
          <nav class=\"navbar navbar-expand-lg navbar-light py-5 px-lg-0 \"><div class=\"navbar-brand \"><a  href=\"/producto\"><div id=\"titulo\" class=\" position-relative  mr-5 \"><span class=\"font-weight-bold text-uppercase text-dark h1 \">XRACING</span><img id=\"logo\" class=\"img-fluid \" src=\"/imgs/logo.jpg\"></img></div></a></div>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
            <div class=\"collapse navbar-collapse row\" id=\"navbarSupportedContent\">
              <ul class=\"navbar-nav mr-auto col-2\">
                <li class=\"nav-item\">
                    <a class=\"text-white dropdown-toggle h4\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"#\">Gestion</a>
                      <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                        <a class=\"dropdown-item\" href=\"/provincia\">Provincias</a>
                        <a class=\"dropdown-item\" href=\"/localidad\">Localidades</a>
                        <a class=\"dropdown-item\" href=\"/categoria\">Categorías</a>
                        <a class=\"dropdown-item\" href=\"/tipo/producto\">Tipos de productos</a>
                        <a class=\"dropdown-item\" href=\"/producto\">Productos</a>
                      </div>
                </li>
                <li class=\"nav-item ml-2 col-4\">
                  <!-- Link--><a class=\" text-white h4\" href=\"#\">Pedidos</a>
                </li>
              </ul>
               <ul class=\"navbar-nav ml-auto\">               
                <li class=\"nav-item\"><a id=\"login\" class=\"h4\" href=\"/logout\"> <i class=\"fas fa-user-alt mr-1 text-gray\"></i>Cerrar sesión</a></li>
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
        return "/backend.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header%}
    <!-- navbar-->
     <header class=\"header miheader2 overflow-scroll mb-5 shadow\">
        <div class=\"container px-0 px-lg-3 \">
          <nav class=\"navbar navbar-expand-lg navbar-light py-5 px-lg-0 \"><div class=\"navbar-brand \"><a  href=\"/producto\"><div id=\"titulo\" class=\" position-relative  mr-5 \"><span class=\"font-weight-bold text-uppercase text-dark h1 \">XRACING</span><img id=\"logo\" class=\"img-fluid \" src=\"/imgs/logo.jpg\"></img></div></a></div>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
            <div class=\"collapse navbar-collapse row\" id=\"navbarSupportedContent\">
              <ul class=\"navbar-nav mr-auto col-2\">
                <li class=\"nav-item\">
                    <a class=\"text-white dropdown-toggle h4\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"#\">Gestion</a>
                      <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                        <a class=\"dropdown-item\" href=\"/provincia\">Provincias</a>
                        <a class=\"dropdown-item\" href=\"/localidad\">Localidades</a>
                        <a class=\"dropdown-item\" href=\"/categoria\">Categorías</a>
                        <a class=\"dropdown-item\" href=\"/tipo/producto\">Tipos de productos</a>
                        <a class=\"dropdown-item\" href=\"/producto\">Productos</a>
                      </div>
                </li>
                <li class=\"nav-item ml-2 col-4\">
                  <!-- Link--><a class=\" text-white h4\" href=\"#\">Pedidos</a>
                </li>
              </ul>
               <ul class=\"navbar-nav ml-auto\">               
                <li class=\"nav-item\"><a id=\"login\" class=\"h4\" href=\"/logout\"> <i class=\"fas fa-user-alt mr-1 text-gray\"></i>Cerrar sesión</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </header>
 
{% endblock %}
", "/backend.html.twig", "C:\\wamp64\\www\\Interfaces web\\diweb\\proyectoFinal\\templates\\backend.html.twig");
    }
}
