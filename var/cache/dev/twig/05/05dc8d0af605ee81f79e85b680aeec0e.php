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
class __TwigTemplate_b2c7c42fae49c8bfa1efd510249ae2a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"image/logoclub.jpg\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css\" integrity=\"sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=\" crossorigin=\"anonymous\" />
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </head>
    <body>
 ";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 85
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('footer', $context, $blocks);
        // line 152
        echo "</body>        
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "AMIENS  BOXING CLUB";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <link rel=\"stylesheet\" href=\"1.css\">

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\"></script>
        <script src=\"\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "   
        
   
    <nav class=\"navbar navbar-expand-xlg bg-secondary\">
  <div class=\"container-fluid\">
  <img src=\"image/logoclub.jpg\" alt=\"\" width=\"75px\">
    <a class=\"navbar-brand\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        echo "\">Amiens BC</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_club");
        echo "\">club
            <span class=\"visually-hidden\">(current)</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_horaire");
        echo "\">Horaire</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inscription");
        echo "\">inscription</a>
        </li>
<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t\t\t";
        // line 47
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47)) {
            // line 48
            echo "\t\t\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 49
                echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 50
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
                echo "\">
\t\t\t\t\t\t\t\tAdministration
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 55
            echo "                  <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">déconnexion</a>
        </li>
        ";
        } else {
            // line 59
            echo "          <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_connexion");
            echo "\">connexion</a>
        </li>
        ";
        }
        // line 63
        echo "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        echo "\">
    Panier (";
        // line 65
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "session", [], "any", false, false, false, 65), "get", ["cart"], "method", false, false, false, 65)), "html", null, true);
        echo ")
</a>

        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_formedeboxe");
        echo "\" role=\"button btn-dark\" aria-haspopup=\"true\" aria-expanded=\"false\">Forme de Boxe</a>
          <div class=\"dropdown-menu\">
            <a class=\"dropdown-item\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bea");
        echo "\">Boxe Educative</a>
            <a class=\"dropdown-item\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ba");
        echo "\">Boxe Amateur</a>
            <a class=\"dropdown-item\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bp");
        echo "\">Boxe PRO</a>
            <a class=\"dropdown-item\" href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_aeroboxe");
        echo "\">Aeroboxe</a>
          
          </div>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 87
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 88
        echo "  <footer id=\"footer\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
                      <div class=\"footer-about\">
                          <p></p>
                      </div>

          </div>
          <div class=\"col-md-3\">
            <div class=\"useful-link\">
              <h2>renseignement</h2>
              <img src=\"./assets/images/about/home_line.png\" alt=\"\" class=\"img-fluid\">
              <div class=\"use-links\">
                <li><a href=\"index.html\"><i class=\"fa-solid fa-angles-right\"></i>AMIENS BC</a></li>
                <li><a href=\"about.html\"><i class=\"fa-solid fa-angles-right\"></i>GYMNASE LA  VEILLIERE </a></li>
                <li><a href=\"gallery.html\"><i class=\"fa-solid fa-angles-right\"></i>SALLE JACQUE BATAILLE</a></li>
                <li><a href=\"contact.html\"><i class=\"fa-solid fa-angles-right\"></i> RUE DU MOULIN  NEUF 80000 AMIENS</a></li>
                <li><a href=\"contact.html\"><i class=\"fa-solid fa-angles-right\"></i> JEROME FOUACHE 0625269768</a></li>
              </div>
            </div>

          </div>
                    <div class=\"col-md-3\">
                        <div class=\"social-links\">
              <h2>NOS RESEAUX</h2>
              <img src=\"./assets/images/about/home_line.png\" alt=\"\">
              <div class=\"social-icons\">
                <li><a href=\"\"><i class=\"fa-brands fa-facebook-f\"></i> Facebook</a></li>
                <li><a href=\"\"><i class=\"fa-brands fa-instagram\"></i> Instagram</a></li>
                <li><a href=\"\"><i class=\"fa-brands fa-linkedin-in\"></i> Linkedin</a></li>
              </div>
            </div>
                    

                    </div>
          <div class=\"col-md-3\">
            <div class=\"address\">
              <h2>PARTENAIRES</h2>
              <img src=\"./assets/images/about/home_line.png\" alt=\"\" class=\"img-fluid\">
              <div class=\"address-links\">
                <li class=\"address1\"><i class=\"fa-solid fa-location-dot\"></i> AMIENS METROPOLE</li>
                   <li><a href=\"\"><i class=\"fa-solid fa-phone\"></i>VILLE  D'AMIENS</a></li>
                   <li><a href=\"\"><i class=\"fa-solid fa-phone\"></i>ES DEMENAGEMENT</a></li>
              </div>
            </div>
          </div>
                  
        </div>
      </div>

    </footer>
    <!-- footer section end -->
    <!-- footer copy right section start -->
    <section id=\"copy-right\">
      <div class=\"copy-right-sec\"><i class=\"fa-solid fa-copyright\"></i>  
       ld/atkn <a href=\"#\">copyright</a> 


      </div>

    </section>
    <!-- footer copy right section end -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  321 => 88,  311 => 87,  293 => 85,  273 => 75,  269 => 74,  265 => 73,  261 => 72,  256 => 70,  248 => 65,  244 => 64,  241 => 63,  235 => 60,  232 => 59,  226 => 56,  223 => 55,  215 => 50,  212 => 49,  209 => 48,  207 => 47,  201 => 44,  195 => 41,  187 => 36,  177 => 29,  169 => 23,  159 => 22,  147 => 17,  137 => 16,  125 => 12,  115 => 11,  96 => 6,  85 => 152,  83 => 87,  80 => 86,  77 => 85,  75 => 22,  71 => 20,  69 => 16,  66 => 15,  64 => 11,  56 => 6,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1\">
        <title>{% block title %}AMIENS  BOXING CLUB{% endblock %}</title>
        <link rel=\"icon\" href=\"image/logoclub.jpg\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css\" integrity=\"sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=\" crossorigin=\"anonymous\" />
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"1.css\">

        {% endblock %}

        {% block javascripts %}
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\"></script>
        <script src=\"\"></script>
        {% endblock %}
    </head>
    <body>
 {% block header %}
   
        
   
    <nav class=\"navbar navbar-expand-xlg bg-secondary\">
  <div class=\"container-fluid\">
  <img src=\"image/logoclub.jpg\" alt=\"\" width=\"75px\">
    <a class=\"navbar-brand\" href=\"{{path(\"app_accueil\")}}\">Amiens BC</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"{{path(\"app_club\")}}\">club
            <span class=\"visually-hidden\">(current)</span>
          </a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{path(\"app_horaire\")}}\">Horaire</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{path(\"app_inscription\")}}\">inscription</a>
        </li>
<ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
\t\t\t\t{% if app.user %}
\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('admin_index')}}\">
\t\t\t\t\t\t\t\tAdministration
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
                  <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{path(\"app_logout\")}}\">déconnexion</a>
        </li>
        {% else %}
          <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{path(\"app_connexion\")}}\">connexion</a>
        </li>
        {% endif %}
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_cart')}}\">
    Panier ({{ app.session.get('cart') | length}})
</a>

        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"{{path(\"app_formedeboxe\")}}\" role=\"button btn-dark\" aria-haspopup=\"true\" aria-expanded=\"false\">Forme de Boxe</a>
          <div class=\"dropdown-menu\">
            <a class=\"dropdown-item\" href=\"{{path(\"app_bea\")}}\">Boxe Educative</a>
            <a class=\"dropdown-item\" href=\"{{path('app_ba')}}\">Boxe Amateur</a>
            <a class=\"dropdown-item\" href=\"{{path(\"app_bp\")}}\">Boxe PRO</a>
            <a class=\"dropdown-item\" href=\"{{path(\"app_aeroboxe\")}}\">Aeroboxe</a>
          
          </div>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
    {% endblock %}
        {% block body %}{% endblock %}

{% block footer %}
  <footer id=\"footer\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-3\">
                      <div class=\"footer-about\">
                          <p></p>
                      </div>

          </div>
          <div class=\"col-md-3\">
            <div class=\"useful-link\">
              <h2>renseignement</h2>
              <img src=\"./assets/images/about/home_line.png\" alt=\"\" class=\"img-fluid\">
              <div class=\"use-links\">
                <li><a href=\"index.html\"><i class=\"fa-solid fa-angles-right\"></i>AMIENS BC</a></li>
                <li><a href=\"about.html\"><i class=\"fa-solid fa-angles-right\"></i>GYMNASE LA  VEILLIERE </a></li>
                <li><a href=\"gallery.html\"><i class=\"fa-solid fa-angles-right\"></i>SALLE JACQUE BATAILLE</a></li>
                <li><a href=\"contact.html\"><i class=\"fa-solid fa-angles-right\"></i> RUE DU MOULIN  NEUF 80000 AMIENS</a></li>
                <li><a href=\"contact.html\"><i class=\"fa-solid fa-angles-right\"></i> JEROME FOUACHE 0625269768</a></li>
              </div>
            </div>

          </div>
                    <div class=\"col-md-3\">
                        <div class=\"social-links\">
              <h2>NOS RESEAUX</h2>
              <img src=\"./assets/images/about/home_line.png\" alt=\"\">
              <div class=\"social-icons\">
                <li><a href=\"\"><i class=\"fa-brands fa-facebook-f\"></i> Facebook</a></li>
                <li><a href=\"\"><i class=\"fa-brands fa-instagram\"></i> Instagram</a></li>
                <li><a href=\"\"><i class=\"fa-brands fa-linkedin-in\"></i> Linkedin</a></li>
              </div>
            </div>
                    

                    </div>
          <div class=\"col-md-3\">
            <div class=\"address\">
              <h2>PARTENAIRES</h2>
              <img src=\"./assets/images/about/home_line.png\" alt=\"\" class=\"img-fluid\">
              <div class=\"address-links\">
                <li class=\"address1\"><i class=\"fa-solid fa-location-dot\"></i> AMIENS METROPOLE</li>
                   <li><a href=\"\"><i class=\"fa-solid fa-phone\"></i>VILLE  D'AMIENS</a></li>
                   <li><a href=\"\"><i class=\"fa-solid fa-phone\"></i>ES DEMENAGEMENT</a></li>
              </div>
            </div>
          </div>
                  
        </div>
      </div>

    </footer>
    <!-- footer section end -->
    <!-- footer copy right section start -->
    <section id=\"copy-right\">
      <div class=\"copy-right-sec\"><i class=\"fa-solid fa-copyright\"></i>  
       ld/atkn <a href=\"#\">copyright</a> 


      </div>

    </section>
    <!-- footer copy right section end -->
{% endblock %}
</body>        
</html>", "base.html.twig", "/home/mary/Documents/stageApi3/templates/base.html.twig");
    }
}
