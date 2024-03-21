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

/* admin/licenciés/index.html.twig */
class __TwigTemplate_565dbf615d3f8237c2d4866cbc530ea3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/licenciés/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/licenciés/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/licenciés/index.html.twig", 1);
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

        echo "Liste des licenciés";
        
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
        $this->loadTemplate("_adminnav.html.twig", "admin/licenciés/index.html.twig", 8)->display($context);
        // line 9
        echo "        <main class=\"col-9 border border-white p-2\">
            <h1>Liste des licenciés</h1>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom de licence</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Code postal</th>
                        <th>Ville</th>
                        <th>Pays</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                        <th>Sexe</th>
                        <th>Date de naissance</th>
                        <!-- Ajoutez d'autres colonnes pour afficher d'autres informations de l'utilisateur -->
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["licences"]) || array_key_exists("licences", $context) ? $context["licences"] : (function () { throw new RuntimeError('Variable "licences" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["licence"]) {
            // line 31
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["licence"], "users", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 32
                echo "                            <tr>
                                <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["licence"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                                <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["licence"], "nomlicence", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                                <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getNom", [], "method", false, false, false, 35), "html", null, true);
                echo "</td>
                                <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getPrenom", [], "method", false, false, false, 36), "html", null, true);
                echo "</td>
                                <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getAdresse", [], "method", false, false, false, 37), "html", null, true);
                echo "</td>
                                <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getCodepostal", [], "method", false, false, false, 38), "html", null, true);
                echo "</td>
                                <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getVille", [], "method", false, false, false, 39), "html", null, true);
                echo "</td>
                                <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getPays", [], "method", false, false, false, 40), "html", null, true);
                echo "</td>
                                <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getTelephone", [], "method", false, false, false, 41), "html", null, true);
                echo "</td>
                                <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getEmail", [], "method", false, false, false, 42), "html", null, true);
                echo "</td>
                                <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getSexe", [], "method", false, false, false, 43), "html", null, true);
                echo "</td>
                                <td>";
                // line 44
                ((twig_get_attribute($this->env, $this->source, $context["user"], "getDatenaiss", [], "method", false, false, false, 44)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getDatenaiss", [], "method", false, false, false, 44), "Y-m-d"), "html", null, true))) : (print ("")));
                echo "</td>
                                <!-- Ajoutez d'autres cellules pour afficher d'autres informations de l'utilisateur -->
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['licence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                </tbody>
            </table>

            <!-- Ajouter une section pour afficher les utilisateurs sélectionnés -->
            ";
        // line 53
        if (array_key_exists("selectedUsers", $context)) {
            // line 54
            echo "                <h2>Utilisateurs sélectionnés dans le formulaire de création de licence :</h2>
                <ul>
                    ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["selectedUsers"]) || array_key_exists("selectedUsers", $context) ? $context["selectedUsers"] : (function () { throw new RuntimeError('Variable "selectedUsers" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["selectedUser"]) {
                // line 57
                echo "                        <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["selectedUser"], "prenom", [], "any", false, false, false, 57), "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selectedUser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                </ul>
            ";
        }
        // line 61
        echo "        </main>
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
        return "admin/licenciés/index.html.twig";
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
        return array (  218 => 61,  214 => 59,  205 => 57,  201 => 56,  197 => 54,  195 => 53,  189 => 49,  183 => 48,  173 => 44,  169 => 43,  165 => 42,  161 => 41,  157 => 40,  153 => 39,  149 => 38,  145 => 37,  141 => 36,  137 => 35,  133 => 34,  129 => 33,  126 => 32,  121 => 31,  117 => 30,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des licenciés{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"row\">
        {% include \"_adminnav.html.twig\" %}
        <main class=\"col-9 border border-white p-2\">
            <h1>Liste des licenciés</h1>
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom de licence</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Code postal</th>
                        <th>Ville</th>
                        <th>Pays</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                        <th>Sexe</th>
                        <th>Date de naissance</th>
                        <!-- Ajoutez d'autres colonnes pour afficher d'autres informations de l'utilisateur -->
                    </tr>
                </thead>
                <tbody>
                    {% for licence in licences %}
                        {% for user in licence.users %}
                            <tr>
                                <td>{{ licence.id }}</td>
                                <td>{{ licence.nomlicence }}</td>
                                <td>{{ user.getNom() }}</td>
                                <td>{{ user.getPrenom() }}</td>
                                <td>{{ user.getAdresse() }}</td>
                                <td>{{ user.getCodepostal() }}</td>
                                <td>{{ user.getVille() }}</td>
                                <td>{{ user.getPays() }}</td>
                                <td>{{ user.getTelephone() }}</td>
                                <td>{{ user.getEmail() }}</td>
                                <td>{{ user.getSexe() }}</td>
                                <td>{{ user.getDatenaiss() ? user.getDatenaiss()|date('Y-m-d') : '' }}</td>
                                <!-- Ajoutez d'autres cellules pour afficher d'autres informations de l'utilisateur -->
                            </tr>
                        {% endfor %}
                    {% endfor %}
                </tbody>
            </table>

            <!-- Ajouter une section pour afficher les utilisateurs sélectionnés -->
            {% if selectedUsers is defined %}
                <h2>Utilisateurs sélectionnés dans le formulaire de création de licence :</h2>
                <ul>
                    {% for selectedUser in selectedUsers %}
                        <li>{{ selectedUser.prenom }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
        </main>
    </div>
</div>
{% endblock %}
", "admin/licenciés/index.html.twig", "/home/mary/Documents/stageApi3/templates/admin/licenciés/index.html.twig");
    }
}
