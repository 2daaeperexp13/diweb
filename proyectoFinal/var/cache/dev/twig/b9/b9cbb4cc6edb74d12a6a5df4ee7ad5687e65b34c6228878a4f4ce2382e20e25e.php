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

/* /frontend.html.twig */
class __TwigTemplate_6e93a41b2c4cc4b0974a137a2987145042d7623f21bbf839e53d128973c390e8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/frontend.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/frontend.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        // line 41
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
     <header class=\"header  shadow  mb-5 miheader\">
        <div class=\"container px-0 px-lg-3 \">
          <nav class=\"navbar navbar-expand-lg navbar-light py-5  px-lg-0 h-100\"><div class=\"navbar-brand mr-2 py-4\"><a  href=\"/\" ><div id=\"titulo\" class=\" position-relative  mr-5 align-items-center\"><span class=\"font-weight-bold text-uppercase  mititulo z-index-50 text-shadows\">XRACING</span><img id=\"logo\" class=\"img-fluid \" src=\"/imgs/logo.jpg\"></img></div></a></div>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
            <div class=\"collapse navbar-collapse \" id=\"navbarSupportedContent\">
              <ul class=\"navbar-nav  menu\">
                <li class=\"nav-item mr-4\">
                  <!-- Link--><a class=\"h4 \" href=\"/inicio\">Inicio</a>
                </li>
                <li class=\"nav-item\">
                  <!-- Link--><a class=\"h4 \" href=\"#\">Productos</a>
                </li>
              </ul>
              <ul class=\"navbar-nav ml-auto row\">               
                
                ";
        // line 18
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 19
            echo "                <li class=\"nav-item position-absolute ml-5 col\">
                  <div>
                    <a class= \"dropdown-toggle h4\"  type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"#\"> Mi perfil</a>
                      <div class=\"dropdown-menu  m-0 p-0 position-relative z-index-50 \"  aria-labelledby=\"dropdownMenuButton\">
                        <a class=\"dropdown-item\" href=\"#\">Métodos de pago</a>
                        <a class=\"dropdown-item\" href=\"#\">Mis datos</a>
                        <a class=\"dropdown-item\" href=\"/logout\">Cerrar sesión</a>
                      </div>
                  </div>
                </li>
                <li class=\" nav-item col\" id=\"carro\"><a class=\"h4\" href=\"cart.html\"> <i class=\"fas fa-dolly-flatbed  text-gray\"></i><small class=\"text-gray\">(0)</small></a></li>
              
                ";
        } else {
            // line 32
            echo "                <li class=\"nav-item\"><a id=\"login\" class=\"h4\" href=\"/login\"> <i class=\"fas fa-user-alt mr-1 text-gray\"></i>Log in</a></li>
                ";
        }
        // line 34
        echo "              </ul>
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
        return "/frontend.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  102 => 32,  87 => 19,  85 => 18,  67 => 2,  57 => 1,  46 => 41,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header%}
    <!-- navbar-->
     <header class=\"header  shadow  mb-5 miheader\">
        <div class=\"container px-0 px-lg-3 \">
          <nav class=\"navbar navbar-expand-lg navbar-light py-5  px-lg-0 h-100\"><div class=\"navbar-brand mr-2 py-4\"><a  href=\"/\" ><div id=\"titulo\" class=\" position-relative  mr-5 align-items-center\"><span class=\"font-weight-bold text-uppercase  mititulo z-index-50 text-shadows\">XRACING</span><img id=\"logo\" class=\"img-fluid \" src=\"/imgs/logo.jpg\"></img></div></a></div>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
            <div class=\"collapse navbar-collapse \" id=\"navbarSupportedContent\">
              <ul class=\"navbar-nav  menu\">
                <li class=\"nav-item mr-4\">
                  <!-- Link--><a class=\"h4 \" href=\"/inicio\">Inicio</a>
                </li>
                <li class=\"nav-item\">
                  <!-- Link--><a class=\"h4 \" href=\"#\">Productos</a>
                </li>
              </ul>
              <ul class=\"navbar-nav ml-auto row\">               
                
                {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                <li class=\"nav-item position-absolute ml-5 col\">
                  <div>
                    <a class= \"dropdown-toggle h4\"  type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" href=\"#\"> Mi perfil</a>
                      <div class=\"dropdown-menu  m-0 p-0 position-relative z-index-50 \"  aria-labelledby=\"dropdownMenuButton\">
                        <a class=\"dropdown-item\" href=\"#\">Métodos de pago</a>
                        <a class=\"dropdown-item\" href=\"#\">Mis datos</a>
                        <a class=\"dropdown-item\" href=\"/logout\">Cerrar sesión</a>
                      </div>
                  </div>
                </li>
                <li class=\" nav-item col\" id=\"carro\"><a class=\"h4\" href=\"cart.html\"> <i class=\"fas fa-dolly-flatbed  text-gray\"></i><small class=\"text-gray\">(0)</small></a></li>
              
                {% else %}
                <li class=\"nav-item\"><a id=\"login\" class=\"h4\" href=\"/login\"> <i class=\"fas fa-user-alt mr-1 text-gray\"></i>Log in</a></li>
                {% endif %}
              </ul>
            </div>
          </nav>
        </div>
      </header>
 
{% endblock %}

", "/frontend.html.twig", "C:\\wamp64\\www\\Interfaces web\\diweb\\proyectoFinal\\templates\\frontend.html.twig");
    }
}
