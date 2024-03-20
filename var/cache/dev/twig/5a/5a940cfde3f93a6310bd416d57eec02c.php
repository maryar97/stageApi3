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

/* club/commande/recap.html.twig */
class __TwigTemplate_ade03b430b78a54caecabf4727c85d98 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/commande/recap.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/commande/recap.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "club/commande/recap.html.twig", 1);
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

        echo "Vérifier la commande";
        
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
        echo "    <div class=\"container position-relative zindex-2 pt-5 pb-lg-5 pb-md-4 pb-2\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <h1 class=\"h2 pb-2\"> Vérifier la commande</h1>


                <hr />
                <h2 class=\"pb-2 pt-md-2 my-4 mt-lg-5\">Récapitulatif de la commande
                    <span class='fs-base fw-normal text-muted'>(";
        // line 14
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["recapCart"]) || array_key_exists("recapCart", $context) ? $context["recapCart"] : (function () { throw new RuntimeError('Variable "recapCart" does not exist.', 14, $this->source); })())), "html", null, true);
        echo " formedeboxe)
                    </span>
                </h2>
                ";
        // line 17
        $context["total"] = null;
        // line 18
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recapCart"]) || array_key_exists("recapCart", $context) ? $context["recapCart"] : (function () { throw new RuntimeError('Variable "recapCart" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formedeboxe"]) {
            // line 19
            echo "                    ";
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 19, $this->source); })()) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "formedeboxe", [], "any", false, false, false, 19), "prix", [], "any", false, false, false, 19));
            // line 20
            echo "
                    <div class=\"d-sm-flex align-items-center border-top-4\">
                        <a class=\"d-inline-block flex-shrink-0  rounded-1 p-sm-2 p-xl-3 mb-2 mb-sm-0\"></a>
                        <img src=\"/image/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "formedeboxe", [], "any", false, false, false, 23), "photo", [], "any", false, false, false, 23), "html", null, true);
            echo "\" width=\"150\" height=\"150\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "formedeboxe", [], "any", false, false, false, 23), "photo", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
                        <div class=\"w-100 pt-1 ps-sm-4\">
                            <div class=\"d-block\">
                                <div class=\"me-3\" style=\"position: top: 15px;\">
                                    <h3 class=\"h5 mb-2\">
                                        ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "formedeboxe", [], "any", false, false, false, 28), "nom", [], "any", false, false, false, 28), "html", null, true);
            echo "
                                    </h3>
                                    <p>
                                        ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "formedeboxe", [], "any", false, false, false, 31), "description", [], "any", false, false, false, 31), "html", null, true);
            echo "
                                    </p>
                                </div>
                            </div>
                            <div class=\"nav justify-content-end mt-n4\">
                                <a class=\"nav-link fs-xl p-2\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formedeboxe"], "formedeboxe", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" title=\"Remove\">
                                    <i class=\"ai-trash\"></i> <!-- Correction de la fermeture de la balise <i> -->
                                </a>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formedeboxe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
                <ul class=\"list-unstyled py-3 mb-0\">
                    <li class=\"d-flex justify-content-between mb-2\"> Sous-Total: <span class=\"fw-semibold ms-2\">";
        // line 45
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 45, $this->source); })()), 2, ",", "."), "html", null, true);
        echo " € </span></li>
                </ul>
                <div class=\"mt-4 text-center\">
                    ";
        // line 48
        if (((isset($context["methode"]) || array_key_exists("methode", $context) ? $context["methode"] : (function () { throw new RuntimeError('Variable "methode" does not exist.', 48, $this->source); })()) == "stripe")) {
            // line 49
            echo "                        ";
            if (array_key_exists("commande", $context)) {
                // line 50
                echo "                            <form method=\"POST\" action=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payment_stripe", ["reference" => twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 50, $this->source); })()), "reference", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\">
                                <input type='hidden' name='stripeToken' id='stripe-token-id' value=\"";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 51, $this->source); })()), "stripeSessionId", [], "any", false, false, false, 51), "html", null, true);
                echo "\">
                                <button class=\"btn btn-lg btn-dark\" type=\"submit\" style=\"border-radius: 6px; position: relative; top: 20px;\">Payer en stripe | ";
                // line 52
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 52, $this->source); })()), 2, ",", "."), "html", null, true);
                echo "€</button>
                            </form>
                        ";
            } else {
                // line 55
                echo "                            <p>La variable \"commande\" n'est pas définie.</p>
                        ";
            }
            // line 57
            echo "                    ";
        }
        // line 58
        echo "                </div>
            </div>
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
        return "club/commande/recap.html.twig";
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
        return array (  193 => 58,  190 => 57,  186 => 55,  180 => 52,  176 => 51,  171 => 50,  168 => 49,  166 => 48,  160 => 45,  156 => 43,  143 => 36,  135 => 31,  129 => 28,  119 => 23,  114 => 20,  111 => 19,  106 => 18,  104 => 17,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Vérifier la commande{% endblock %}

{% block body %}
    <div class=\"container position-relative zindex-2 pt-5 pb-lg-5 pb-md-4 pb-2\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <h1 class=\"h2 pb-2\"> Vérifier la commande</h1>


                <hr />
                <h2 class=\"pb-2 pt-md-2 my-4 mt-lg-5\">Récapitulatif de la commande
                    <span class='fs-base fw-normal text-muted'>({{ recapCart|length }} formedeboxe)
                    </span>
                </h2>
                {% set total = null %}
                {% for formedeboxe in recapCart %}
                    {% set total = total + (formedeboxe.formedeboxe.prix) %}

                    <div class=\"d-sm-flex align-items-center border-top-4\">
                        <a class=\"d-inline-block flex-shrink-0  rounded-1 p-sm-2 p-xl-3 mb-2 mb-sm-0\"></a>
                        <img src=\"/image/{{ formedeboxe.formedeboxe.photo }}\" width=\"150\" height=\"150\" alt=\"{{ formedeboxe.formedeboxe.photo}}\">
                        <div class=\"w-100 pt-1 ps-sm-4\">
                            <div class=\"d-block\">
                                <div class=\"me-3\" style=\"position: top: 15px;\">
                                    <h3 class=\"h5 mb-2\">
                                        {{ formedeboxe.formedeboxe.nom }}
                                    </h3>
                                    <p>
                                        {{ formedeboxe.formedeboxe.description }}
                                    </p>
                                </div>
                            </div>
                            <div class=\"nav justify-content-end mt-n4\">
                                <a class=\"nav-link fs-xl p-2\" href=\"{{ path('cart_remove', {id: formedeboxe.formedeboxe.id}) }}\" data-bs-toggle=\"tooltip\" title=\"Remove\">
                                    <i class=\"ai-trash\"></i> <!-- Correction de la fermeture de la balise <i> -->
                                </a>
                            </div>
                        </div>
                    </div>
                {% endfor %}

                <ul class=\"list-unstyled py-3 mb-0\">
                    <li class=\"d-flex justify-content-between mb-2\"> Sous-Total: <span class=\"fw-semibold ms-2\">{{ total|number_format(2, ',', '.') }} € </span></li>
                </ul>
                <div class=\"mt-4 text-center\">
                    {% if methode =='stripe' %}
                        {% if commande is defined %}
                            <form method=\"POST\" action=\"{{ path('payment_stripe', {reference:commande.reference}) }}\">
                                <input type='hidden' name='stripeToken' id='stripe-token-id' value=\"{{ commande.stripeSessionId }}\">
                                <button class=\"btn btn-lg btn-dark\" type=\"submit\" style=\"border-radius: 6px; position: relative; top: 20px;\">Payer en stripe | {{ total|number_format(2, ',', '.') }}€</button>
                            </form>
                        {% else %}
                            <p>La variable \"commande\" n'est pas définie.</p>
                        {% endif %}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "club/commande/recap.html.twig", "/home/mary/Documents/stageApi2/templates/club/commande/recap.html.twig");
    }
}
