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
class __TwigTemplate_3261f4e45763eaa131b2bd9da214c7bd87d318e774853519bc092e068f7753f0 extends Template
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
        // line 28
        echo "  </head>
  <body>
";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 37
        echo "    <div id=\"principal\" class=\"principal\">
";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "    </div>
      <footer class=\"bg-dark text-white align-self-end\">
";
        // line 41
        $this->displayBlock('footer', $context, $blocks);
        // line 84
        echo "      </footer>
";
        // line 85
        $this->displayBlock('scripts', $context, $blocks);
        // line 112
        echo "      <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
      <link rel=\"stylesheet\" href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\">
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/lightbox2/css/lightbox.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/nouislider/nouislider.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap-select/css/bootstrap-select.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl.carousel2/assets/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl.carousel2/assets/owl.theme.default.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.gold.min.css"), "html", null, true);
        echo "\" id=\"theme-stylesheet\">
    <link rel=\"shortcut icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imgs/logo.jpg"), "html", null, true);
        echo "\">
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 31
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 32
            echo "      ";
            $this->loadTemplate($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend.html.twig"), "base.html.twig", 32)->display($context);
            // line 33
            echo "    ";
        } else {
            // line 34
            echo "      ";
            $this->loadTemplate($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontend.html.twig"), "base.html.twig", 34)->display($context);
            // line 35
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
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

    // line 41
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 42
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

    // line 85
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 86
        echo "      <!-- JavaScript files-->
      <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/lightbox2/js/lightbox.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/nouislider/nouislider.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap-select/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl.carousel2/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/front.js"), "html", null, true);
        echo "\"></script>
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
        injectSvgSprite('/icons/orion-svg-sprite.svg'); 
        
      </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 94,  329 => 93,  325 => 92,  321 => 91,  317 => 90,  313 => 89,  309 => 88,  305 => 87,  302 => 86,  292 => 85,  241 => 42,  231 => 41,  212 => 38,  201 => 35,  198 => 34,  195 => 33,  192 => 32,  189 => 31,  179 => 30,  164 => 22,  160 => 21,  154 => 18,  150 => 17,  146 => 16,  142 => 15,  138 => 14,  132 => 12,  113 => 11,  105 => 5,  95 => 4,  81 => 113,  78 => 112,  76 => 85,  73 => 84,  71 => 41,  67 => 39,  65 => 38,  62 => 37,  60 => 30,  56 => 28,  54 => 4,  49 => 1,);
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
    <link rel=\"stylesheet\" href=\"{{asset('vendor/bootstrap/css/bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"{{asset('vendor/lightbox2/css/lightbox.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('vendor/nouislider/nouislider.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('vendor/bootstrap-select/css/bootstrap-select.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('vendor/owl.carousel2/assets/owl.carousel.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('vendor/owl.carousel2/assets/owl.theme.default.css')}}\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap\">
    <link rel=\"stylesheet\" href=\"{{asset('css/style.gold.min.css')}}\" id=\"theme-stylesheet\">
    <link rel=\"shortcut icon\" href=\"{{asset('imgs/logo.jpg')}}\">
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
{% endblock %}
{% endblock %}
  </head>
  <body>
{% block header %}
    {% if is_granted('ROLE_ADMIN') %}
      {% include(asset('backend.html.twig')) %}
    {% else %}
      {% include(asset('frontend.html.twig')) %}
    {% endif %}
{% endblock %}
    <div id=\"principal\" class=\"principal\">
{% block body%} {% endblock%}
    </div>
      <footer class=\"bg-dark text-white align-self-end\">
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
      <script src=\"{{asset('vendor/jquery/jquery.min.js')}}\"></script>
      <script src=\"{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
      <script src=\"{{asset('vendor/lightbox2/js/lightbox.min.js')}}\"></script>
      <script src=\"{{asset('vendor/nouislider/nouislider.min.js')}}\"></script>
      <script src=\"{{asset('vendor/bootstrap-select/js/bootstrap-select.min.js')}}\"></script>
      <script src=\"{{asset('vendor/owl.carousel2/owl.carousel.min.js')}}\"></script>
      <script src=\"{{asset('vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')}}\"></script>
      <script src=\"{{asset('js/front.js')}}\"></script>
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
        injectSvgSprite('/icons/orion-svg-sprite.svg'); 
        
      </script>
{% endblock %}
      <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
      <link rel=\"stylesheet\" href=\"{{asset('css/custom.css')}}\">
    </div>
  </body>
</html>", "base.html.twig", "C:\\wamp64\\www\\Interfaces web\\diweb\\proyectoFinal\\templates\\base.html.twig");
    }
}
