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

/* club/commande/index.html.twig */
class __TwigTemplate_b520b74422965d406b5f6143f8091a92 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/commande/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/commande/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "club/commande/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Création de la commande
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"commande\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_prepare")]);
        echo "
\t\t\t\t<h1 class=\"h2 pb-2\">Création de la commande</h1>
\t\t\t\t
\t\t\t<div class=\"col-lg-5 offset-lg-1 pt-1\">
\t\t\t\t<h2 class=\"pb-2 pt-md-2 my-4 mt-lg-5\">Récapitulatif de la commande
\t\t\t\t\t
\t\t\t\t</h2>
\t\t\t\t";
        // line 17
        $context["total"] = null;
        // line 18
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recapCart"]) || array_key_exists("recapCart", $context) ? $context["recapCart"] : (function () { throw new RuntimeError('Variable "recapCart" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formedeboxe"]) {
            // line 19
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 19, $this->source); })()) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "formedeboxe", [], "any", false, false, false, 19), "prix", [], "any", false, false, false, 19));
            // line 20
            echo "\t\t\t\t

\t\t\t\t\t<div class=\"d-sm-flex align-items-center border-top-4\">
\t\t\t\t\t\t<a class=\"d-inline-block flex-shrink-0  rounded-1 p-sm-2 p-xl-3 mb-2 mb-sm-0\"></a>
\t\t\t\t\t\t\t<img src=\"/image/";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "formedeboxe", [], "any", false, false, false, 24), "photo", [], "any", false, false, false, 24), "html", null, true);
            echo "\" width=\"150\" height=\"150\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "formedeboxe", [], "any", false, false, false, 24), "photo", [], "any", false, false, false, 24), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<div class=\"w-100 pt-1 ps-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"d-block\">
\t\t\t\t\t\t\t\t\t<div class=\"me-3\" style=\"position: relative; top: 15px;\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"h5 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "formedeboxe", [], "any", false, false, false, 29), "nom", [], "any", false, false, false, 29), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "formedeboxe", [], "any", false, false, false, 32), "description", [], "any", false, false, false, 32), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
<p class=\"mb-2\"> Prix du formedeboxe :";
            // line 36
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "formedeboxe", [], "any", false, false, false, 36), "prix", [], "any", false, false, false, 36), 2, ",", "."), "html", null, true);
            echo "€</p>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"nav justify-content-end mt-n4\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formedeboxe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between border-top fs-xl pt-4 mb-4\">
\t\t\t\t\t\tTotal:
\t\t\t\t\t\t<span class=\"fs-3 fw-semibold text-dark ms-2\">";
        // line 50
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 50, $this->source); })()), 2, ",", "."), "html", null, true);
        echo "
\t\t\t\t\t\t\t€</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mt-5 text-center\">
\t\t\t\t\t\t<button class=\"btn btn-lg btn-dark\" type=\"submit\" style=\"border-radius: 6px; position: relative; top: 20px;\">Valider votre commande
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "club/commande/index.html.twig";
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
        return array (  178 => 61,  164 => 50,  159 => 47,  142 => 36,  135 => 32,  129 => 29,  119 => 24,  113 => 20,  111 => 19,  106 => 18,  104 => 17,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Création de la commande
{% endblock %}

{% block body %}
\t<div class=\"commande\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t{{ form_start(form, {action:path('order_prepare')}) }}
\t\t\t\t<h1 class=\"h2 pb-2\">Création de la commande</h1>
\t\t\t\t
\t\t\t<div class=\"col-lg-5 offset-lg-1 pt-1\">
\t\t\t\t<h2 class=\"pb-2 pt-md-2 my-4 mt-lg-5\">Récapitulatif de la commande
\t\t\t\t\t
\t\t\t\t</h2>
\t\t\t\t{% set total = null %}
\t\t\t\t{% for formedeboxe in recapCart %}
{% set total = total + formedeboxe.formedeboxe.prix %}
\t\t\t\t

\t\t\t\t\t<div class=\"d-sm-flex align-items-center border-top-4\">
\t\t\t\t\t\t<a class=\"d-inline-block flex-shrink-0  rounded-1 p-sm-2 p-xl-3 mb-2 mb-sm-0\"></a>
\t\t\t\t\t\t\t<img src=\"/image/{{ formedeboxe.formedeboxe.photo }}\" width=\"150\" height=\"150\" alt=\"{{ formedeboxe.formedeboxe.photo}}\">
\t\t\t\t\t\t\t<div class=\"w-100 pt-1 ps-sm-4\">
\t\t\t\t\t\t\t\t<div class=\"d-block\">
\t\t\t\t\t\t\t\t\t<div class=\"me-3\" style=\"position: relative; top: 15px;\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"h5 mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t{{formedeboxe.formedeboxe.nom}}</a>
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t{{formedeboxe.formedeboxe.description}}
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
<p class=\"mb-2\"> Prix du formedeboxe :{{ (formedeboxe.formedeboxe.prix)|number_format(2, ',', '.') }}€</p>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"nav justify-content-end mt-n4\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}

\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between border-top fs-xl pt-4 mb-4\">
\t\t\t\t\t\tTotal:
\t\t\t\t\t\t<span class=\"fs-3 fw-semibold text-dark ms-2\">{{ (total)|number_format(2, ',', '.') }}
\t\t\t\t\t\t\t€</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mt-5 text-center\">
\t\t\t\t\t\t<button class=\"btn btn-lg btn-dark\" type=\"submit\" style=\"border-radius: 6px; position: relative; top: 20px;\">Valider votre commande
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t{{ form_end(form) }}</div>
{% endblock %}
", "club/commande/index.html.twig", "/home/mary/Documents/stageApi2/templates/club/commande/index.html.twig");
    }
}
