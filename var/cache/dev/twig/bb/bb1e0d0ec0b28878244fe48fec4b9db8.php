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

/* formedeboxe/liste.html.twig */
class __TwigTemplate_bf30154318ab9700dc7f656de17d6b1a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formedeboxe/liste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formedeboxe/liste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formedeboxe/liste.html.twig", 1);
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

        echo "Liste des formes de boxe";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <div class=\"row\">
        ";
        // line 8
        $this->loadTemplate("_adminnav.html.twig", "formedeboxe/liste.html.twig", 8)->display($context);
        // line 9
        echo "        <main class=\"col-9 border border-white p-2\">
            <h1>Liste des formes de boxe</h1>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>ID</th>
\t\t\t\t\t\t<th>Nom</th>
                        <th>Description</th>
\t\t\t\t\t\t<th>Photo</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formedeboxes"]) || array_key_exists("formedeboxes", $context) ? $context["formedeboxes"] : (function () { throw new RuntimeError('Variable "formedeboxes" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formedeboxe"]) {
            // line 25
            echo "                        <tr>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "nom", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
\t\t\t\t\t\t   \t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "description", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><img src=\"/image/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "photo", [], "any", false, false, false, 29), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\"></td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "prix", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "quantite", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>

                            <!-- Ajoutez d'autres cellules pour afficher d'autres informations de l'utilisateur -->
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formedeboxe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
            </table>
        </main>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "formedeboxe/liste.html.twig";
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
        return array (  149 => 36,  138 => 31,  134 => 30,  130 => 29,  126 => 28,  122 => 27,  118 => 26,  115 => 25,  111 => 24,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des formes de boxe{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        {% include \"_adminnav.html.twig\" %}
        <main class=\"col-9 border border-white p-2\">
            <h1>Liste des formes de boxe</h1>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>ID</th>
\t\t\t\t\t\t<th>Nom</th>
                        <th>Description</th>
\t\t\t\t\t\t<th>Photo</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        
                    </tr>
                </thead>
                <tbody>
                    {% for formedeboxe in formedeboxes %}
                        <tr>
                            <td>{{ formedeboxe.id }}</td>
                            <td>{{ formedeboxe.nom }}</td>
\t\t\t\t\t\t   \t<td>{{ formedeboxe.description }}</td>
\t\t\t\t\t\t\t<td><img src=\"/image/{{ formedeboxe.photo }}\" class=\"card-img-top\" alt=\"...\"></td>
                            <td>{{ formedeboxe.prix }}</td>
                            <td>{{ formedeboxe.quantite }}</td>

                            <!-- Ajoutez d'autres cellules pour afficher d'autres informations de l'utilisateur -->
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </main>
    </div>
</div>
{% endblock %}
", "formedeboxe/liste.html.twig", "/home/mary/Documents/stageApi3/templates/formedeboxe/liste.html.twig");
    }
}
