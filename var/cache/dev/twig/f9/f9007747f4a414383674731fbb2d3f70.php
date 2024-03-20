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

/* _adminnav.html.twig */
class __TwigTemplate_0143b269b5af4eff42777e42fea60511 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_adminnav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_adminnav.html.twig"));

        // line 1
        echo "
<aside class=\"col-3 border border-light bg-white p-2\">

\t<article class=\"card mb-3\">
\t\t<div class=\"card-header\">
\t\t\tLicenciés
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<p>
\t\t\t\t<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_licenciés_index");
        echo "\">
\t\t\t\t\tListe des licenciés</a>
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<a href=\"#\">
\t\t\t\t\tAjouter une licencié</a>
\t\t\t</p>

\t\t</div>
\t</article>

    <article class=\"card mb-3\">
\t\t<div class=\"card-header\">
\t\t\tForme de boxe
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<p>
\t\t\t\t<a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste");
        echo "\"\">
\t\t\t\t\tListe des formes de boxe</a>
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<a href=\"#\">
\t\t\t\t\tAjouter une forme de boxe</a>
\t\t\t</p>

\t\t</div>
\t</article>

    <article class=\"card mb-3\">
\t\t<div class=\"card-header\">
\t\t\tUtilisateurs
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<p>
\t\t\t\t<a href=\"#\">
\t\t\t\t\tListe des utilisateurs</a>
\t\t\t</p>
\t\t</div>
\t</article>
</aside> ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_adminnav.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  74 => 27,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<aside class=\"col-3 border border-light bg-white p-2\">

\t<article class=\"card mb-3\">
\t\t<div class=\"card-header\">
\t\t\tLicenciés
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<p>
\t\t\t\t<a href=\"{{ path('admin_licenciés_index')}}\">
\t\t\t\t\tListe des licenciés</a>
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<a href=\"#\">
\t\t\t\t\tAjouter une licencié</a>
\t\t\t</p>

\t\t</div>
\t</article>

    <article class=\"card mb-3\">
\t\t<div class=\"card-header\">
\t\t\tForme de boxe
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<p>
\t\t\t\t<a href=\"{{ path('liste')}}\"\">
\t\t\t\t\tListe des formes de boxe</a>
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<a href=\"#\">
\t\t\t\t\tAjouter une forme de boxe</a>
\t\t\t</p>

\t\t</div>
\t</article>

    <article class=\"card mb-3\">
\t\t<div class=\"card-header\">
\t\t\tUtilisateurs
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<p>
\t\t\t\t<a href=\"#\">
\t\t\t\t\tListe des utilisateurs</a>
\t\t\t</p>
\t\t</div>
\t</article>
</aside> ", "_adminnav.html.twig", "/home/mary/Documents/stageApi3/templates/_adminnav.html.twig");
    }
}
