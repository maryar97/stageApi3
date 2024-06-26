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

/* admin/users/index.html.twig */
class __TwigTemplate_666aa324b42b952d69d9320a10e8bd6c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/users/index.html.twig", 1);
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

        echo "Liste des utilisateurs
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
        echo "\t<div class=\"container\">
\t\t<div class=\"row\">

\t\t\t\t\t";
        // line 10
        $this->loadTemplate("_adminnav.html.twig", "admin/users/index.html.twig", 10)->display($context);
        // line 11
        echo "
\t\t\t<main class=\"col-9 border border-white p-2\">

\t\t\t\t<h1>
\t\t\t\t\tListe des utilisateurs
\t\t\t\t</h1>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Prénom</th>
\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t<th>Rôles</th>
\t\t\t\t\t\t\t<th>Vérifié</th>
\t\t\t\t\t\t\t<th>Actions</th>

\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 34
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 42
                echo "\t\t\t\t\t\t\t\t\t";
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 43
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["nom"] = "Administrateur";
                    // line 44
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["color"] = "warning";
                    // line 45
                    echo "\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 46
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["nom"] = "membre";
                    // line 47
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["color"] = "success";
                    // line 48
                    echo "
\t\t\t\t\t\t\t\t\t";
                }
                // line 50
                echo "\t\t\t\t\t\t\t\t\t<span class=\"badge bg-";
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 50, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 50, $this->source); })()), "html", null, true);
                echo "</span>


\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" 
\t\t\t\t\t\t\t\t\tid=\"switch";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 58)) ? ("checked") : (""));
            echo " disabled>
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"switch";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "\"></label>
\t\t\t\t\t\t\t\t</div>




\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-danger\">Modifier
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t\t</tbody>


\t\t\t</main>


\t\t</div>


\t</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/users/index.html.twig";
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
        return array (  215 => 72,  196 => 59,  190 => 58,  184 => 54,  171 => 50,  167 => 48,  164 => 47,  161 => 46,  158 => 45,  155 => 44,  152 => 43,  149 => 42,  145 => 41,  140 => 39,  135 => 37,  131 => 36,  127 => 35,  124 => 34,  120 => 33,  96 => 11,  94 => 10,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des utilisateurs
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"row\">

\t\t\t\t\t{% include \"_adminnav.html.twig\" %}

\t\t\t<main class=\"col-9 border border-white p-2\">

\t\t\t\t<h1>
\t\t\t\t\tListe des utilisateurs
\t\t\t\t</h1>
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Prénom</th>
\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t<th>Rôles</th>
\t\t\t\t\t\t\t<th>Vérifié</th>
\t\t\t\t\t\t\t<th>Actions</th>

\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for user in users %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{user.id}}</td>
\t\t\t\t\t\t\t<td>{{user.nom}}</td>
\t\t\t\t\t\t\t<td>{{user.prenom}}</td>

\t\t\t\t\t\t\t<td>{{user.email}}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% for role in user.roles %}
\t\t\t\t\t\t\t\t\t{% if role == \"ROLE_ADMIN\" %}
\t\t\t\t\t\t\t\t\t\t{% set nom = \"Administrateur\" %}
\t\t\t\t\t\t\t\t\t\t{% set color = \"warning\" %}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{% set nom = \"membre\" %}
\t\t\t\t\t\t\t\t\t\t{% set color = \"success\" %}

\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<span class=\"badge bg-{{ color }}\">{{nom}}</span>


\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" 
\t\t\t\t\t\t\t\t\tid=\"switch{{ user.id }}\" {{user.isVerified ? \"checked\" : \"\" }} disabled>
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"switch{{ user.id }}\"></label>
\t\t\t\t\t\t\t\t</div>




\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-danger\">Modifier
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>


\t\t\t</main>


\t\t</div>


\t</div>


{% endblock %}", "admin/users/index.html.twig", "/home/mary/Documents/stageApi3/templates/admin/users/index.html.twig");
    }
}
