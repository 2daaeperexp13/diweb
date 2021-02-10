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

/* principal/index.html.twig */
class __TwigTemplate_d94f9f517edde18c2ed8b7e4359b1a6716465d929cc165e8245dc16115d5c750 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "principal/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "principal/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "principal/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!--  Modal -->
      <div class=\"modal fade\" id=\"productView\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
          <div class=\"modal-content\">
            <div class=\"modal-body p-0\">
              <div class=\"row align-items-stretch\">
                <div class=\"col-lg-6 p-lg-0\"><a class=\"product-view d-block h-100 bg-cover bg-center\" style=\"background: url(img/product-5.jpg)\" href=\"img/product-5.jpg\" data-lightbox=\"productview\" title=\"Red digital smartwatch\"></a><a class=\"d-none\" href=\"img/product-5-alt-1.jpg\" title=\"Red digital smartwatch\" data-lightbox=\"productview\"></a><a class=\"d-none\" href=\"img/product-5-alt-2.jpg\" title=\"Red digital smartwatch\" data-lightbox=\"productview\"></a></div>
                <div class=\"col-lg-6\">
                  <button class=\"close p-4\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                  <div class=\"p-5 my-md-4\">
                    <h2 class=\"h4\">Red digital smartwatch</h2>
                    <p class=\"text-muted\">\$250</p>
                    <p class=\"text-small mb-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                    <div class=\"row align-items-stretch mb-4\">
                      <div class=\"col-sm-7 pr-sm-0\">
                        <div class=\"border d-flex align-items-center justify-content-between py-1 px-3\"><span class=\"small text-uppercase text-gray mr-4 no-select\">Quantity</span>
                          <div class=\"quantity\">
                            <button class=\"dec-btn p-0\"><i class=\"fas fa-caret-left\"></i></button>
                            <input class=\"form-control border-0 shadow-0 p-0\" type=\"text\" value=\"1\">
                            <button class=\"inc-btn p-0\"><i class=\"fas fa-caret-right\"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-sm-5 pl-sm-0\"><a class=\"btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0\" href=\"cart.html\">Add to cart</a></div>
                    </div><a class=\"btn btn-link text-dark p-0\" href=\"#\"><i class=\"far fa-heart mr-2\"></i>Add to wish list</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- HERO SECTION-->
      <div class=\"container\">
        <section class=\"hero pb-3 bg-cover bg-center d-flex align-items-center\" style=\"background: url(imgs/fondoindex.jpg)\">
          <div class=\"container py-5\">
            <div class=\"row px-4 px-lg-5\">
              <div class=\"col-lg-6\">
                <p class=\"text-muted small text-uppercase mb-2\">2021</p>
                <h1 class=\"h2 text-uppercase mb-1 text-white\">TU MEJOR EQUIPAMIENTO</h1>
              </div>
            </div>
          </div>
        </section>
        <!-- CATEGORIES SECTION-->
        <section class=\"pt-5\">
          <header class=\"text-center\">
            <p class=\"small text-muted small text-uppercase mb-1\">TODO TIPO DE ARTÍCULOS A SU DISPOSICIÓN</p>
            <h2 class=\"h5 text-uppercase mb-4\">EXPLORE NUESTRAS CATEGORÍAS DE PRODUCTOS</h2>
          </header>
          <div class=\"row\">
            <div class=\"col-md-4 mb-4 mb-md-0\"><a class=\"category-item\" href=\"shop.html\"><img class=\"img-fluid\" src=\"img/cat-img-1.jpg\" alt=\"\"><strong class=\"category-item-title\">Clothes</strong></a></div>
            <div class=\"col-md-4 mb-4 mb-md-0\"><a class=\"category-item mb-4\" href=\"shop.html\"><img class=\"img-fluid\" src=\"img/cat-img-2.jpg\" alt=\"\"><strong class=\"category-item-title\">Shoes</strong></a><a class=\"category-item\" href=\"shop.html\"><img class=\"img-fluid\" src=\"img/cat-img-3.jpg\" alt=\"\"><strong class=\"category-item-title\">Watches</strong></a></div>
            <div class=\"col-md-4\"><a class=\"category-item\" href=\"shop.html\"><img class=\"img-fluid\" src=\"img/cat-img-4.jpg\" alt=\"\"><strong class=\"category-item-title\">Electronics</strong></a></div>
          </div>
        </section>
        <!-- TRENDING PRODUCTS-->
        <section class=\"py-5\">
          <header>
            <p class=\"small text-muted small text-uppercase mb-1\">Made the hard way</p>
            <h2 class=\"h5 text-uppercase mb-4\">Top trending products</h2>
          </header>
          <div class=\"row\">
            <!-- PRODUCT-->
            <div class=\"col-xl-3 col-lg-4 col-sm-6\">
              <div class=\"product text-center\">
                <div class=\"position-relative mb-3\">
                  <div class=\"badge text-white badge-\"></div><a class=\"d-block\" href=\"detail.html\"><img class=\"img-fluid w-100\" src=\"img/product-1.jpg\" alt=\"...\"></a>
                  <div class=\"product-overlay\">
                    <ul class=\"mb-0 list-inline\">
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-dark\" href=\"cart.html\">Add to cart</a></li>
                      <li class=\"list-inline-item mr-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#productView\" data-toggle=\"modal\"><i class=\"fas fa-expand\"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class=\"reset-anchor\" href=\"detail.html\">Kui Ye Chen’s AirPods</a></h6>
                <p class=\"small text-muted\">\$250</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class=\"col-xl-3 col-lg-4 col-sm-6\">
              <div class=\"product text-center\">
                <div class=\"position-relative mb-3\">
                  <div class=\"badge text-white badge-primary\">Sale</div><a class=\"d-block\" href=\"detail.html\"><img class=\"img-fluid w-100\" src=\"img/product-2.jpg\" alt=\"...\"></a>
                  <div class=\"product-overlay\">
                    <ul class=\"mb-0 list-inline\">
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-dark\" href=\"cart.html\">Add to cart</a></li>
                      <li class=\"list-inline-item mr-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#productView\" data-toggle=\"modal\"><i class=\"fas fa-expand\"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class=\"reset-anchor\" href=\"detail.html\">Air Jordan 12 gym red</a></h6>
                <p class=\"small text-muted\">\$300</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class=\"col-xl-3 col-lg-4 col-sm-6\">
              <div class=\"product text-center\">
                <div class=\"position-relative mb-3\">
                  <div class=\"badge text-white badge-\"></div><a class=\"d-block\" href=\"detail.html\"><img class=\"img-fluid w-100\" src=\"img/product-3.jpg\" alt=\"...\"></a>
                  <div class=\"product-overlay\">
                    <ul class=\"mb-0 list-inline\">
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-dark\" href=\"cart.html\">Add to cart</a></li>
                      <li class=\"list-inline-item mr-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#productView\" data-toggle=\"modal\"><i class=\"fas fa-expand\"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class=\"reset-anchor\" href=\"detail.html\">Cyan cotton t-shirt</a></h6>
                <p class=\"small text-muted\">\$25</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class=\"col-xl-3 col-lg-4 col-sm-6\">
              <div class=\"product text-center\">
                <div class=\"position-relative mb-3\">
                  <div class=\"badge text-white badge-info\">New</div><a class=\"d-block\" href=\"detail.html\"><img class=\"img-fluid w-100\" src=\"img/product-4.jpg\" alt=\"...\"></a>
                  <div class=\"product-overlay\">
                    <ul class=\"mb-0 list-inline\">
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-dark\" href=\"cart.html\">Add to cart</a></li>
                      <li class=\"list-inline-item mr-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#productView\" data-toggle=\"modal\"><i class=\"fas fa-expand\"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class=\"reset-anchor\" href=\"detail.html\">Timex Unisex Originals</a></h6>
                <p class=\"small text-muted\">\$351</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class=\"col-xl-3 col-lg-4 col-sm-6\">
              <div class=\"product text-center\">
                <div class=\"position-relative mb-3\">
                  <div class=\"badge text-white badge-danger\">Sold</div><a class=\"d-block\" href=\"detail.html\"><img class=\"img-fluid w-100\" src=\"img/product-5.jpg\" alt=\"...\"></a>
                  <div class=\"product-overlay\">
                    <ul class=\"mb-0 list-inline\">
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-dark\" href=\"cart.html\">Add to cart</a></li>
                      <li class=\"list-inline-item mr-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#productView\" data-toggle=\"modal\"><i class=\"fas fa-expand\"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class=\"reset-anchor\" href=\"detail.html\">Red digital smartwatch</a></h6>
                <p class=\"small text-muted\">\$250</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class=\"col-xl-3 col-lg-4 col-sm-6\">
              <div class=\"product text-center\">
                <div class=\"position-relative mb-3\">
                  <div class=\"badge text-white badge-\"></div><a class=\"d-block\" href=\"detail.html\"><img class=\"img-fluid w-100\" src=\"img/product-6.jpg\" alt=\"...\"></a>
                  <div class=\"product-overlay\">
                    <ul class=\"mb-0 list-inline\">
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-dark\" href=\"cart.html\">Add to cart</a></li>
                      <li class=\"list-inline-item mr-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#productView\" data-toggle=\"modal\"><i class=\"fas fa-expand\"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class=\"reset-anchor\" href=\"detail.html\">Nike air max 95</a></h6>
                <p class=\"small text-muted\">\$300</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class=\"col-xl-3 col-lg-4 col-sm-6\">
              <div class=\"product text-center\">
                <div class=\"position-relative mb-3\">
                  <div class=\"badge text-white badge-\"></div><a class=\"d-block\" href=\"detail.html\"><img class=\"img-fluid w-100\" src=\"img/product-7.jpg\" alt=\"...\"></a>
                  <div class=\"product-overlay\">
                    <ul class=\"mb-0 list-inline\">
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-dark\" href=\"cart.html\">Add to cart</a></li>
                      <li class=\"list-inline-item mr-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#productView\" data-toggle=\"modal\"><i class=\"fas fa-expand\"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class=\"reset-anchor\" href=\"detail.html\">Joemalone Women prefume</a></h6>
                <p class=\"small text-muted\">\$25</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class=\"col-xl-3 col-lg-4 col-sm-6\">
              <div class=\"product text-center\">
                <div class=\"position-relative mb-3\">
                  <div class=\"badge text-white badge-\"></div><a class=\"d-block\" href=\"detail.html\"><img class=\"img-fluid w-100\" src=\"img/product-8.jpg\" alt=\"...\"></a>
                  <div class=\"product-overlay\">
                    <ul class=\"mb-0 list-inline\">
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-dark\" href=\"cart.html\">Add to cart</a></li>
                      <li class=\"list-inline-item mr-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#productView\" data-toggle=\"modal\"><i class=\"fas fa-expand\"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class=\"reset-anchor\" href=\"detail.html\">Apple Watch</a></h6>
                <p class=\"small text-muted\">\$351</p>
              </div>
            </div>
          </div>
        </section>
        <!-- SERVICES-->
        <section class=\"py-5 bg-light\">
          <div class=\"container\">
            <div class=\"row text-center\">
              <div class=\"col-lg-4 mb-3 mb-lg-0\">
                <div class=\"d-inline-block\">
                  <div class=\"media align-items-end\">
                    <svg class=\"svg-icon svg-icon-big svg-icon-light\">
                      <use xlink:href=\"#delivery-time-1\"> </use>
                    </svg>
                    <div class=\"media-body text-left ml-3\">
                      <h6 class=\"text-uppercase mb-1\">Free shipping</h6>
                      <p class=\"text-small mb-0 text-muted\">Free shipping worlwide</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-4 mb-3 mb-lg-0\">
                <div class=\"d-inline-block\">
                  <div class=\"media align-items-end\">
                    <svg class=\"svg-icon svg-icon-big svg-icon-light\">
                      <use xlink:href=\"#helpline-24h-1\"> </use>
                    </svg>
                    <div class=\"media-body text-left ml-3\">
                      <h6 class=\"text-uppercase mb-1\">24 x 7 service</h6>
                      <p class=\"text-small mb-0 text-muted\">Free shipping worlwide</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-4\">
                <div class=\"d-inline-block\">
                  <div class=\"media align-items-end\">
                    <svg class=\"svg-icon svg-icon-big svg-icon-light\">
                      <use xlink:href=\"#label-tag-1\"> </use>
                    </svg>
                    <div class=\"media-body text-left ml-3\">
                      <h6 class=\"text-uppercase mb-1\">Festival offer</h6>
                      <p class=\"text-small mb-0 text-muted\">Free shipping worlwide</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- NEWSLETTER-->
        <section class=\"py-5\">
          <div class=\"container p-0\">
            <div class=\"row\">
              <div class=\"col-lg-6 mb-3 mb-lg-0\">
                <h5 class=\"text-uppercase\">Let's be friends!</h5>
                <p class=\"text-small text-muted mb-0\">Nisi nisi tempor consequat laboris nisi.</p>
              </div>
              <div class=\"col-lg-6\">
                <form action=\"#\">
                  <div class=\"input-group flex-column flex-sm-row mb-3\">
                    <input class=\"form-control form-control-lg py-3\" type=\"email\" placeholder=\"Enter your email address\" aria-describedby=\"button-addon2\">
                    <div class=\"input-group-append\">
                      <button class=\"btn btn-dark btn-block\" id=\"button-addon2\" type=\"submit\">Subscribe</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "principal/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<!--  Modal -->
      <div class=\"modal fade\" id=\"productView\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
          <div class=\"modal-content\">
            <div class=\"modal-body p-0\">
              <div class=\"row align-items-stretch\">
                <div class=\"col-lg-6 p-lg-0\"><a class=\"product-view d-block h-100 bg-cover bg-center\" style=\"background: url(img/product-5.jpg)\" href=\"img/product-5.jpg\" data-lightbox=\"productview\" title=\"Red digital smartwatch\"></a><a class=\"d-none\" href=\"img/product-5-alt-1.jpg\" title=\"Red digital smartwatch\" data-lightbox=\"productview\"></a><a class=\"d-none\" href=\"img/product-5-alt-2.jpg\" title=\"Red digital smartwatch\" data-lightbox=\"productview\"></a></div>
                <div class=\"col-lg-6\">
                  <button class=\"close p-4\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                  <div class=\"p-5 my-md-4\">
                    <h2 class=\"h4\">Red digital smartwatch</h2>
                    <p class=\"text-muted\">\$250</p>
                    <p class=\"text-small mb-4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
                    <div class=\"row align-items-stretch mb-4\">
                      <div class=\"col-sm-7 pr-sm-0\">
                        <div class=\"border d-flex align-items-center justify-content-between py-1 px-3\"><span class=\"small text-uppercase text-gray mr-4 no-select\">Quantity</span>
                          <div class=\"quantity\">
                            <button class=\"dec-btn p-0\"><i class=\"fas fa-caret-left\"></i></button>
                            <input class=\"form-control border-0 shadow-0 p-0\" type=\"text\" value=\"1\">
                            <button class=\"inc-btn p-0\"><i class=\"fas fa-caret-right\"></i></button>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-sm-5 pl-sm-0\"><a class=\"btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0\" href=\"cart.html\">Add to cart</a></div>
                    </div><a class=\"btn btn-link text-dark p-0\" href=\"#\"><i class=\"far fa-heart mr-2\"></i>Add to wish list</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- HERO SECTION-->
      <div class=\"container\">
        <section class=\"hero pb-3 bg-cover bg-center d-flex align-items-center\" style=\"background: url(imgs/fondoindex.jpg)\">
          <div class=\"container py-5\">
            <div class=\"row px-4 px-lg-5\">
              <div class=\"col-lg-6\">
                <p class=\"text-muted small text-uppercase mb-2\">2021</p>
                <h1 class=\"h2 text-uppercase mb-1 text-white\">TU MEJOR EQUIPAMIENTO</h1>
              </div>
            </div>
          </div>
        </section>
        <!-- CATEGORIES SECTION-->
        <section class=\"pt-5\">
          <header class=\"text-center\">
            <p class=\"small text-muted small text-uppercase mb-1\">TODO TIPO DE ARTÍCULOS A SU DISPOSICIÓN</p>
            <h2 class=\"h5 text-uppercase mb-4\">EXPLORE NUESTRAS CATEGORÍAS DE PRODUCTOS</h2>
          </header>
          <div class=\"row\">
            <div class=\"col-md-4 mb-4 mb-md-0\"><a class=\"category-item\" href=\"shop.html\"><img class=\"img-fluid\" src=\"img/cat-img-1.jpg\" alt=\"\"><strong class=\"category-item-title\">Clothes</strong></a></div>
            <div class=\"col-md-4 mb-4 mb-md-0\"><a class=\"category-item mb-4\" href=\"shop.html\"><img class=\"img-fluid\" src=\"img/cat-img-2.jpg\" alt=\"\"><strong class=\"category-item-title\">Shoes</strong></a><a class=\"category-item\" href=\"shop.html\"><img class=\"img-fluid\" src=\"img/cat-img-3.jpg\" alt=\"\"><strong class=\"category-item-title\">Watches</strong></a></div>
            <div class=\"col-md-4\"><a class=\"category-item\" href=\"shop.html\"><img class=\"img-fluid\" src=\"img/cat-img-4.jpg\" alt=\"\"><strong class=\"category-item-title\">Electronics</strong></a></div>
          </div>
        </section>
        <!-- TRENDING PRODUCTS-->
        <section class=\"py-5\">
          <header>
            <p class=\"small text-muted small text-uppercase mb-1\">Made the hard way</p>
            <h2 class=\"h5 text-uppercase mb-4\">Top trending products</h2>
          </header>
          <div class=\"row\">
            <!-- PRODUCT-->
            <div class=\"col-xl-3 col-lg-4 col-sm-6\">
              <div class=\"product text-center\">
                <div class=\"position-relative mb-3\">
                  <div class=\"badge text-white badge-\"></div><a class=\"d-block\" href=\"detail.html\"><img class=\"img-fluid w-100\" src=\"img/product-1.jpg\" alt=\"...\"></a>
                  <div class=\"product-overlay\">
                    <ul class=\"mb-0 list-inline\">
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-dark\" href=\"cart.html\">Add to cart</a></li>
                      <li class=\"list-inline-item mr-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#productView\" data-toggle=\"modal\"><i class=\"fas fa-expand\"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class=\"reset-anchor\" href=\"detail.html\">Kui Ye Chen’s AirPods</a></h6>
                <p class=\"small text-muted\">\$250</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class=\"col-xl-3 col-lg-4 col-sm-6\">
              <div class=\"product text-center\">
                <div class=\"position-relative mb-3\">
                  <div class=\"badge text-white badge-primary\">Sale</div><a class=\"d-block\" href=\"detail.html\"><img class=\"img-fluid w-100\" src=\"img/product-2.jpg\" alt=\"...\"></a>
                  <div class=\"product-overlay\">
                    <ul class=\"mb-0 list-inline\">
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-dark\" href=\"cart.html\">Add to cart</a></li>
                      <li class=\"list-inline-item mr-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#productView\" data-toggle=\"modal\"><i class=\"fas fa-expand\"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class=\"reset-anchor\" href=\"detail.html\">Air Jordan 12 gym red</a></h6>
                <p class=\"small text-muted\">\$300</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class=\"col-xl-3 col-lg-4 col-sm-6\">
              <div class=\"product text-center\">
                <div class=\"position-relative mb-3\">
                  <div class=\"badge text-white badge-\"></div><a class=\"d-block\" href=\"detail.html\"><img class=\"img-fluid w-100\" src=\"img/product-3.jpg\" alt=\"...\"></a>
                  <div class=\"product-overlay\">
                    <ul class=\"mb-0 list-inline\">
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-dark\" href=\"cart.html\">Add to cart</a></li>
                      <li class=\"list-inline-item mr-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#productView\" data-toggle=\"modal\"><i class=\"fas fa-expand\"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class=\"reset-anchor\" href=\"detail.html\">Cyan cotton t-shirt</a></h6>
                <p class=\"small text-muted\">\$25</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class=\"col-xl-3 col-lg-4 col-sm-6\">
              <div class=\"product text-center\">
                <div class=\"position-relative mb-3\">
                  <div class=\"badge text-white badge-info\">New</div><a class=\"d-block\" href=\"detail.html\"><img class=\"img-fluid w-100\" src=\"img/product-4.jpg\" alt=\"...\"></a>
                  <div class=\"product-overlay\">
                    <ul class=\"mb-0 list-inline\">
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-dark\" href=\"cart.html\">Add to cart</a></li>
                      <li class=\"list-inline-item mr-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#productView\" data-toggle=\"modal\"><i class=\"fas fa-expand\"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class=\"reset-anchor\" href=\"detail.html\">Timex Unisex Originals</a></h6>
                <p class=\"small text-muted\">\$351</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class=\"col-xl-3 col-lg-4 col-sm-6\">
              <div class=\"product text-center\">
                <div class=\"position-relative mb-3\">
                  <div class=\"badge text-white badge-danger\">Sold</div><a class=\"d-block\" href=\"detail.html\"><img class=\"img-fluid w-100\" src=\"img/product-5.jpg\" alt=\"...\"></a>
                  <div class=\"product-overlay\">
                    <ul class=\"mb-0 list-inline\">
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-dark\" href=\"cart.html\">Add to cart</a></li>
                      <li class=\"list-inline-item mr-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#productView\" data-toggle=\"modal\"><i class=\"fas fa-expand\"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class=\"reset-anchor\" href=\"detail.html\">Red digital smartwatch</a></h6>
                <p class=\"small text-muted\">\$250</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class=\"col-xl-3 col-lg-4 col-sm-6\">
              <div class=\"product text-center\">
                <div class=\"position-relative mb-3\">
                  <div class=\"badge text-white badge-\"></div><a class=\"d-block\" href=\"detail.html\"><img class=\"img-fluid w-100\" src=\"img/product-6.jpg\" alt=\"...\"></a>
                  <div class=\"product-overlay\">
                    <ul class=\"mb-0 list-inline\">
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-dark\" href=\"cart.html\">Add to cart</a></li>
                      <li class=\"list-inline-item mr-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#productView\" data-toggle=\"modal\"><i class=\"fas fa-expand\"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class=\"reset-anchor\" href=\"detail.html\">Nike air max 95</a></h6>
                <p class=\"small text-muted\">\$300</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class=\"col-xl-3 col-lg-4 col-sm-6\">
              <div class=\"product text-center\">
                <div class=\"position-relative mb-3\">
                  <div class=\"badge text-white badge-\"></div><a class=\"d-block\" href=\"detail.html\"><img class=\"img-fluid w-100\" src=\"img/product-7.jpg\" alt=\"...\"></a>
                  <div class=\"product-overlay\">
                    <ul class=\"mb-0 list-inline\">
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-dark\" href=\"cart.html\">Add to cart</a></li>
                      <li class=\"list-inline-item mr-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#productView\" data-toggle=\"modal\"><i class=\"fas fa-expand\"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class=\"reset-anchor\" href=\"detail.html\">Joemalone Women prefume</a></h6>
                <p class=\"small text-muted\">\$25</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class=\"col-xl-3 col-lg-4 col-sm-6\">
              <div class=\"product text-center\">
                <div class=\"position-relative mb-3\">
                  <div class=\"badge text-white badge-\"></div><a class=\"d-block\" href=\"detail.html\"><img class=\"img-fluid w-100\" src=\"img/product-8.jpg\" alt=\"...\"></a>
                  <div class=\"product-overlay\">
                    <ul class=\"mb-0 list-inline\">
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#\"><i class=\"far fa-heart\"></i></a></li>
                      <li class=\"list-inline-item m-0 p-0\"><a class=\"btn btn-sm btn-dark\" href=\"cart.html\">Add to cart</a></li>
                      <li class=\"list-inline-item mr-0\"><a class=\"btn btn-sm btn-outline-dark\" href=\"#productView\" data-toggle=\"modal\"><i class=\"fas fa-expand\"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class=\"reset-anchor\" href=\"detail.html\">Apple Watch</a></h6>
                <p class=\"small text-muted\">\$351</p>
              </div>
            </div>
          </div>
        </section>
        <!-- SERVICES-->
        <section class=\"py-5 bg-light\">
          <div class=\"container\">
            <div class=\"row text-center\">
              <div class=\"col-lg-4 mb-3 mb-lg-0\">
                <div class=\"d-inline-block\">
                  <div class=\"media align-items-end\">
                    <svg class=\"svg-icon svg-icon-big svg-icon-light\">
                      <use xlink:href=\"#delivery-time-1\"> </use>
                    </svg>
                    <div class=\"media-body text-left ml-3\">
                      <h6 class=\"text-uppercase mb-1\">Free shipping</h6>
                      <p class=\"text-small mb-0 text-muted\">Free shipping worlwide</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-4 mb-3 mb-lg-0\">
                <div class=\"d-inline-block\">
                  <div class=\"media align-items-end\">
                    <svg class=\"svg-icon svg-icon-big svg-icon-light\">
                      <use xlink:href=\"#helpline-24h-1\"> </use>
                    </svg>
                    <div class=\"media-body text-left ml-3\">
                      <h6 class=\"text-uppercase mb-1\">24 x 7 service</h6>
                      <p class=\"text-small mb-0 text-muted\">Free shipping worlwide</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-4\">
                <div class=\"d-inline-block\">
                  <div class=\"media align-items-end\">
                    <svg class=\"svg-icon svg-icon-big svg-icon-light\">
                      <use xlink:href=\"#label-tag-1\"> </use>
                    </svg>
                    <div class=\"media-body text-left ml-3\">
                      <h6 class=\"text-uppercase mb-1\">Festival offer</h6>
                      <p class=\"text-small mb-0 text-muted\">Free shipping worlwide</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- NEWSLETTER-->
        <section class=\"py-5\">
          <div class=\"container p-0\">
            <div class=\"row\">
              <div class=\"col-lg-6 mb-3 mb-lg-0\">
                <h5 class=\"text-uppercase\">Let's be friends!</h5>
                <p class=\"text-small text-muted mb-0\">Nisi nisi tempor consequat laboris nisi.</p>
              </div>
              <div class=\"col-lg-6\">
                <form action=\"#\">
                  <div class=\"input-group flex-column flex-sm-row mb-3\">
                    <input class=\"form-control form-control-lg py-3\" type=\"email\" placeholder=\"Enter your email address\" aria-describedby=\"button-addon2\">
                    <div class=\"input-group-append\">
                      <button class=\"btn btn-dark btn-block\" id=\"button-addon2\" type=\"submit\">Subscribe</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
{% endblock %}
", "principal/index.html.twig", "C:\\wamp64\\www\\Interfaces web\\diweb\\proyectoFinal\\templates\\principal\\index.html.twig");
    }
}
