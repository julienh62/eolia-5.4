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

/* admin/admin_calendar/show_add_user_quantity.html.twig */
class __TwigTemplate_d40604e37c95234c9d0ab681fb80a96a extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "base.admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_calendar/show_add_user_quantity.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_calendar/show_add_user_quantity.html.twig"));

        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/admin_calendar/show_add_user_quantity.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter quantité";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Ajouter un utilisateur/quantité</h1>
    
 <div id=\"stockErrorMessage\"></div>

    ";
        // line 13
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["id" => "quantityForm"]]);
        echo "
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'widget');
        echo "

    ";
        // line 17
        echo "    <button id=\"submitButton\" type=\"submit\" disabled>Enregistrer</button>
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_end');
        echo "

<p>Un mail avec un lien de paiement sera envoyé à l'utilisateur</p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_show_user", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
        echo "\">Retour à la séance</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get references to the elements
    var quantityInput = document.getElementById('";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "quantity", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "html", null, true);
        echo "');
    var form = document.getElementById('quantityForm');
    var submitButton = document.getElementById('submitButton');
    var errorMessage = document.getElementById('stockErrorMessage');

    // Initial validation check
    validateForm();

    // Listen for changes in the quantity input
    quantityInput.addEventListener('input', function() {
        validateForm();
    });

    function validateForm() {
        var quantity = parseInt(quantityInput.value, 10);
        var isFormValid = quantity > 0 && quantity <= ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 42, $this->source); })()), "stock", [], "any", false, false, false, 42), "html", null, true);
        echo " && ";
        echo (((isset($context["isStockValid"]) || array_key_exists("isStockValid", $context) ? $context["isStockValid"] : (function () { throw new RuntimeError('Variable "isStockValid" does not exist.', 42, $this->source); })())) ? ("true") : ("false"));
        echo ";
        submitButton.disabled = !isFormValid;

        // Update error message
        if (quantity > ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 46, $this->source); })()), "stock", [], "any", false, false, false, 46), "html", null, true);
        echo ") {
            errorMessage.textContent = 'Stock insuffisant';
        } else {
            errorMessage.textContent = '';
        }
    }
});
</script>

</script>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/admin_calendar/show_add_user_quantity.html.twig";
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
        return array (  168 => 46,  159 => 42,  141 => 27,  136 => 24,  126 => 23,  114 => 21,  108 => 18,  105 => 17,  100 => 14,  95 => 13,  89 => 8,  79 => 7,  60 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends 'base.admin.html.twig' %}

{% block title %}Ajouter quantité{% endblock %}

{% block body %}
    <h1>Ajouter un utilisateur/quantité</h1>
    
 <div id=\"stockErrorMessage\"></div>

    {# Show the form here with only one 'Enregistrer' button #}
    {{ form_start(form, {'attr': {'id': 'quantityForm'}}) }}
    {{ form_widget(form) }}

    {# Disable the submit button if the validation conditions are not met #}
    <button id=\"submitButton\" type=\"submit\" disabled>Enregistrer</button>
    {{ form_end(form) }}

<p>Un mail avec un lien de paiement sera envoyé à l'utilisateur</p>
    <a href=\"{{ path('admin_calendar_show_user', {'id': calendar.id}) }}\">Retour à la séance</a>
{% endblock %}
{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get references to the elements
    var quantityInput = document.getElementById('{{ form.quantity.vars.id }}');
    var form = document.getElementById('quantityForm');
    var submitButton = document.getElementById('submitButton');
    var errorMessage = document.getElementById('stockErrorMessage');

    // Initial validation check
    validateForm();

    // Listen for changes in the quantity input
    quantityInput.addEventListener('input', function() {
        validateForm();
    });

    function validateForm() {
        var quantity = parseInt(quantityInput.value, 10);
        var isFormValid = quantity > 0 && quantity <= {{ calendar.stock }} && {{ isStockValid ? 'true' : 'false' }};
        submitButton.disabled = !isFormValid;

        // Update error message
        if (quantity > {{ calendar.stock }}) {
            errorMessage.textContent = 'Stock insuffisant';
        } else {
            errorMessage.textContent = '';
        }
    }
});
</script>

</script>


{% endblock %}", "admin/admin_calendar/show_add_user_quantity.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\admin\\admin_calendar\\show_add_user_quantity.html.twig");
    }
}
