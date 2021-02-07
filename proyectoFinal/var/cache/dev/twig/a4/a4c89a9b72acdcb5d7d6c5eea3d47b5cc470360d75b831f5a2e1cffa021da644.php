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

/* base.html.twig */
class __TwigTemplate_ac6c426d9d4792de69d764b92914c39d119626e652cedaa866f3e576d0242aa1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'css' => [$this, 'block_css'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 34
        echo "  </head>
  <body>
";
        // line 36
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "    <div id=\"principal\">
";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "    </div>
      <footer class=\"bg-dark text-white\">
";
        // line 43
        $this->displayBlock('footer', $context, $blocks);
        // line 86
        echo "      </footer>
";
        // line 87
        $this->displayBlock('scripts', $context, $blocks);
        // line 114
        echo "      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
    </div>
  </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>XRACING</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"all,follow\">
";
        // line 11
        $this->displayBlock('css', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 12
        echo "  <!-- Bootstrap CSS-->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "vendor/bootstrap/css/bootstrap.min.css\">
    <!-- Lightbox-->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "vendor/lightbox2/css/lightbox.min.css\">
    <!-- Range slider-->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "vendor/nouislider/nouislider.min.css\">
    <!-- Bootstrap select-->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "vendor/bootstrap-select/css/bootstrap-select.min.css\">
    <!-- Owl Carousel-->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "vendor/owl.carousel2/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "vendor/owl.carousel2/assets/owl.theme.default.css\">
    <!-- Google fonts-->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap\">
    <!-- theme stylesheet-->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "css/style.blue.css\" id=\"theme-stylesheet\">
    <!-- Custom stylesheet - for your changes-->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "css/custom.css\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "img/favicon.png\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 37
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 44
        echo "        <div class=\"container py-4\">
          <div class=\"row py-5\">
            <div class=\"col-md-4 mb-3 mb-md-0\">
              <h6 class=\"text-uppercase mb-3\">Customer services</h6>
              <ul class=\"list-unstyled mb-0\">
                <li><a class=\"footer-link\" href=\"#\">Help &amp; Contact Us</a></li>
                <li><a class=\"footer-link\" href=\"#\">Returns &amp; Refunds</a></li>
                <li><a class=\"footer-link\" href=\"#\">Online Stores</a></li>
                <li><a class=\"footer-link\" href=\"#\">Terms &amp; Conditions</a></li>
              </ul>
            </div>
            <div class=\"col-md-4 mb-3 mb-md-0\">
              <h6 class=\"text-uppercase mb-3\">Company</h6>
              <ul class=\"list-unstyled mb-0\">
                <li><a class=\"footer-link\" href=\"#\">What We Do</a></li>
                <li><a class=\"footer-link\" href=\"#\">Available Services</a></li>
                <li><a class=\"footer-link\" href=\"#\">Latest Posts</a></li>
                <li><a class=\"footer-link\" href=\"#\">FAQs</a></li>
              </ul>
            </div>
            <div class=\"col-md-4\">
              <h6 class=\"text-uppercase mb-3\">Social media</h6>
              <ul class=\"list-unstyled mb-0\">
                <li><a class=\"footer-link\" href=\"#\">Twitter</a></li>
                <li><a class=\"footer-link\" href=\"#\">Instagram</a></li>
                <li><a class=\"footer-link\" href=\"#\">Tumblr</a></li>
                <li><a class=\"footer-link\" href=\"#\">Pinterest</a></li>
              </ul>
            </div>
          </div>
          <div class=\"border-top pt-4\" style=\"border-color: #1d1d1d !important\">
            <div class=\"row\">
              <div class=\"col-lg-6\">
                <p class=\"small text-muted mb-0\">&copy; 2020 All rights reserved.</p>
              </div>
              <div class=\"col-lg-6 text-lg-right\">
                <p class=\"small text-muted mb-0\">Template designed by <a class=\"text-white reset-anchor\" href=\"https://bootstraptemple.com/p/bootstrap-ecommerce\">Bootstrap Temple</a></p>
              </div>
            </div>
          </div>
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 88
        echo "      <!-- JavaScript files-->
      <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 89, $this->source); })()), "html", null, true);
        echo "vendor/jquery/jquery.min.js\"></script>
      <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 90, $this->source); })()), "html", null, true);
        echo "vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
      <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "vendor/lightbox2/js/lightbox.min.js\"></script>
      <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 92, $this->source); })()), "html", null, true);
        echo "vendor/nouislider/nouislider.min.js\"></script>
      <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 93, $this->source); })()), "html", null, true);
        echo "vendor/bootstrap-select/js/bootstrap-select.min.js\"></script>
      <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 94, $this->source); })()), "html", null, true);
        echo "vendor/owl.carousel2/owl.carousel.min.js\"></script>
      <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 95, $this->source); })()), "html", null, true);
        echo "vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js\"></script>
      <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["ruta"]) || array_key_exists("ruta", $context) ? $context["ruta"] : (function () { throw new RuntimeError('Variable "ruta" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "js/front.js\"></script>
      <script>
        function injectSvgSprite(path) {
        
            var ajax = new XMLHttpRequest();
            ajax.open(\"GET\", path, true);
            ajax.send();
            ajax.onload = function(e) {
            var div = document.createElement(\"div\");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
        
      </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  328 => 96,  324 => 95,  320 => 94,  316 => 93,  312 => 92,  308 => 91,  304 => 90,  300 => 89,  297 => 88,  287 => 87,  236 => 44,  226 => 43,  207 => 40,  196 => 37,  186 => 36,  174 => 31,  169 => 29,  164 => 27,  156 => 22,  152 => 21,  147 => 19,  142 => 17,  137 => 15,  132 => 13,  129 => 12,  110 => 11,  102 => 5,  92 => 4,  78 => 114,  76 => 87,  73 => 86,  71 => 43,  67 => 41,  65 => 40,  62 => 39,  60 => 36,  56 => 34,  54 => 4,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
{% block head %}
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>XRACING</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"all,follow\">
{% block css %}
  <!-- Bootstrap CSS-->
    <link rel=\"stylesheet\" href=\"{{ruta}}vendor/bootstrap/css/bootstrap.min.css\">
    <!-- Lightbox-->
    <link rel=\"stylesheet\" href=\"{{ruta}}vendor/lightbox2/css/lightbox.min.css\">
    <!-- Range slider-->
    <link rel=\"stylesheet\" href=\"{{ruta}}vendor/nouislider/nouislider.min.css\">
    <!-- Bootstrap select-->
    <link rel=\"stylesheet\" href=\"{{ruta}}vendor/bootstrap-select/css/bootstrap-select.min.css\">
    <!-- Owl Carousel-->
    <link rel=\"stylesheet\" href=\"{{ruta}}vendor/owl.carousel2/assets/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"{{ruta}}vendor/owl.carousel2/assets/owl.theme.default.css\">
    <!-- Google fonts-->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap\">
    <!-- theme stylesheet-->
    <link rel=\"stylesheet\" href=\"{{ruta}}css/style.blue.css\" id=\"theme-stylesheet\">
    <!-- Custom stylesheet - for your changes-->
    <link rel=\"stylesheet\" href=\"{{ruta}}css/custom.css\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"{{ruta}}img/favicon.png\">
{% endblock %}
{% endblock %}
  </head>
  <body>
{% block header %}
    
{% endblock %}
    <div id=\"principal\">
{% block body%} {% endblock%}
    </div>
      <footer class=\"bg-dark text-white\">
{% block footer%}
        <div class=\"container py-4\">
          <div class=\"row py-5\">
            <div class=\"col-md-4 mb-3 mb-md-0\">
              <h6 class=\"text-uppercase mb-3\">Customer services</h6>
              <ul class=\"list-unstyled mb-0\">
                <li><a class=\"footer-link\" href=\"#\">Help &amp; Contact Us</a></li>
                <li><a class=\"footer-link\" href=\"#\">Returns &amp; Refunds</a></li>
                <li><a class=\"footer-link\" href=\"#\">Online Stores</a></li>
                <li><a class=\"footer-link\" href=\"#\">Terms &amp; Conditions</a></li>
              </ul>
            </div>
            <div class=\"col-md-4 mb-3 mb-md-0\">
              <h6 class=\"text-uppercase mb-3\">Company</h6>
              <ul class=\"list-unstyled mb-0\">
                <li><a class=\"footer-link\" href=\"#\">What We Do</a></li>
                <li><a class=\"footer-link\" href=\"#\">Available Services</a></li>
                <li><a class=\"footer-link\" href=\"#\">Latest Posts</a></li>
                <li><a class=\"footer-link\" href=\"#\">FAQs</a></li>
              </ul>
            </div>
            <div class=\"col-md-4\">
              <h6 class=\"text-uppercase mb-3\">Social media</h6>
              <ul class=\"list-unstyled mb-0\">
                <li><a class=\"footer-link\" href=\"#\">Twitter</a></li>
                <li><a class=\"footer-link\" href=\"#\">Instagram</a></li>
                <li><a class=\"footer-link\" href=\"#\">Tumblr</a></li>
                <li><a class=\"footer-link\" href=\"#\">Pinterest</a></li>
              </ul>
            </div>
          </div>
          <div class=\"border-top pt-4\" style=\"border-color: #1d1d1d !important\">
            <div class=\"row\">
              <div class=\"col-lg-6\">
                <p class=\"small text-muted mb-0\">&copy; 2020 All rights reserved.</p>
              </div>
              <div class=\"col-lg-6 text-lg-right\">
                <p class=\"small text-muted mb-0\">Template designed by <a class=\"text-white reset-anchor\" href=\"https://bootstraptemple.com/p/bootstrap-ecommerce\">Bootstrap Temple</a></p>
              </div>
            </div>
          </div>
        </div>
{% endblock %}
      </footer>
{% block scripts%}
      <!-- JavaScript files-->
      <script src=\"{{ruta}}vendor/jquery/jquery.min.js\"></script>
      <script src=\"{{ruta}}vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
      <script src=\"{{ruta}}vendor/lightbox2/js/lightbox.min.js\"></script>
      <script src=\"{{ruta}}vendor/nouislider/nouislider.min.js\"></script>
      <script src=\"{{ruta}}vendor/bootstrap-select/js/bootstrap-select.min.js\"></script>
      <script src=\"{{ruta}}vendor/owl.carousel2/owl.carousel.min.js\"></script>
      <script src=\"{{ruta}}vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js\"></script>
      <script src=\"{{ruta}}js/front.js\"></script>
      <script>
        function injectSvgSprite(path) {
        
            var ajax = new XMLHttpRequest();
            ajax.open(\"GET\", path, true);
            ajax.send();
            ajax.onload = function(e) {
            var div = document.createElement(\"div\");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
        
      </script>
{% endblock %}
      <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
      <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
    </div>
  </body>
</html>", "base.html.twig", "C:\\wamp64\\www\\Interfaces web\\diweb\\proyectoFinal\\templates\\base.html.twig");
    }
}
