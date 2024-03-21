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

/* formedeboxe/_form.html.twig */
class __TwigTemplate_463ab2debcf6a1c37d2c2a40b46735ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formedeboxe/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formedeboxe/_form.html.twig"));

        // line 1
        echo "
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formedeboxeForm"]) || array_key_exists("formedeboxeForm", $context) ? $context["formedeboxeForm"] : (function () { throw new RuntimeError('Variable "formedeboxeForm" does not exist.', 2, $this->source); })()), 'form_start');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formedeboxeForm"]) || array_key_exists("formedeboxeForm", $context) ? $context["formedeboxeForm"] : (function () { throw new RuntimeError('Variable "formedeboxeForm" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formedeboxeForm"]) || array_key_exists("formedeboxeForm", $context) ? $context["formedeboxeForm"] : (function () { throw new RuntimeError('Variable "formedeboxeForm" does not exist.', 4, $this->source); })()), "description", [], "any", false, false, false, 4), 'row');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formedeboxeForm"]) || array_key_exists("formedeboxeForm", $context) ? $context["formedeboxeForm"] : (function () { throw new RuntimeError('Variable "formedeboxeForm" does not exist.', 5, $this->source); })()), "photo", [], "any", false, false, false, 5), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formedeboxeForm"]) || array_key_exists("formedeboxeForm", $context) ? $context["formedeboxeForm"] : (function () { throw new RuntimeError('Variable "formedeboxeForm" does not exist.', 6, $this->source); })()), "prix", [], "any", false, false, false, 6), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formedeboxeForm"]) || array_key_exists("formedeboxeForm", $context) ? $context["formedeboxeForm"] : (function () { throw new RuntimeError('Variable "formedeboxeForm" does not exist.', 7, $this->source); })()), "quantite", [], "any", false, false, false, 7), 'row');
        echo "
    <button type=\"submit\" class=\"btn btn-dark\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 8, $this->source); })()), "Ajouter")) : ("Ajouter")), "html", null, true);
        echo "</button>
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formedeboxeForm"]) || array_key_exists("formedeboxeForm", $context) ? $context["formedeboxeForm"] : (function () { throw new RuntimeError('Variable "formedeboxeForm" does not exist.', 9, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "formedeboxe/_form.html.twig";
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
        return array (  74 => 9,  70 => 8,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{{ form_start(formedeboxeForm) }}
    {{ form_row(formedeboxeForm.nom) }}
    {{ form_row(formedeboxeForm.description) }}
    {{ form_row(formedeboxeForm.photo) }}
    {{ form_row(formedeboxeForm.prix) }}
    {{ form_row(formedeboxeForm.quantite) }}
    <button type=\"submit\" class=\"btn btn-dark\">{{ button_label|default('Ajouter') }}</button>
{{ form_end(formedeboxeForm) }}", "formedeboxe/_form.html.twig", "/home/mary/Documents/stageApi3/templates/formedeboxe/_form.html.twig");
    }
}
