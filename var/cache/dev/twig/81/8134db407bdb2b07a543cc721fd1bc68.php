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

/* purchase/payment.html.twig */
class __TwigTemplate_18519b7edf8cea425b046185d38818a1 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/payment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/payment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "purchase/payment.html.twig", 1);
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

        // line 4
        echo "    Paiement stripe
";
        
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
        echo "    <h1>Payez votre acompte avec Stripe</h1>
    <div class=\"indicationpaiement\">
        <p>Numéro de carte bancaire test : 4242 4242 4242 4242</p>
        <p>Numéro à 3 chiffres et code postal</p>
    </div>


<form id=\"payment-form\">
    <div id=\"card-element\"></div>

    <!-- Champ pour le numéro d'échéance 
    <div class=\"form-group\">
        <label for=\"installment-number\">Numéro d'échéance :</label>
        <input type=\"number\" id=\"installment-number\" name=\"installment-number\" min=\"1\" required>
    </div>-->

    <button id=\"submit\" class=\"btn btn-success\">
        <div class=\"spinner hidden\" id=\"spinner\"></div>
        <span id=\"button-text\">Payer avec Stripe</span>
    </button>
    <p id=\"card-error\" role=\"alert\"></p>
</form>




  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://js.stripe.com/v3/\"></script>

    <script>
        const clientSecret = '";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["clientSecret"]) || array_key_exists("clientSecret", $context) ? $context["clientSecret"] : (function () { throw new RuntimeError('Variable "clientSecret" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "';
        const stripePublicKey = '";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["stripePublicKey"]) || array_key_exists("stripePublicKey", $context) ? $context["stripePublicKey"] : (function () { throw new RuntimeError('Variable "stripePublicKey" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "';
        const redirectAfterSuccesUrl = \"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("purchase_payment_success", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        echo "\";
    </script>
    <script src=\"/assets/js/payment.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "purchase/payment.html.twig";
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
        return array (  154 => 44,  150 => 43,  146 => 42,  138 => 38,  128 => 37,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}
    Paiement stripe
{% endblock %}

{% block body %}
    <h1>Payez votre acompte avec Stripe</h1>
    <div class=\"indicationpaiement\">
        <p>Numéro de carte bancaire test : 4242 4242 4242 4242</p>
        <p>Numéro à 3 chiffres et code postal</p>
    </div>


<form id=\"payment-form\">
    <div id=\"card-element\"></div>

    <!-- Champ pour le numéro d'échéance 
    <div class=\"form-group\">
        <label for=\"installment-number\">Numéro d'échéance :</label>
        <input type=\"number\" id=\"installment-number\" name=\"installment-number\" min=\"1\" required>
    </div>-->

    <button id=\"submit\" class=\"btn btn-success\">
        <div class=\"spinner hidden\" id=\"spinner\"></div>
        <span id=\"button-text\">Payer avec Stripe</span>
    </button>
    <p id=\"card-error\" role=\"alert\"></p>
</form>




  
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://js.stripe.com/v3/\"></script>

    <script>
        const clientSecret = '{{ clientSecret }}';
        const stripePublicKey = '{{ stripePublicKey }}';
        const redirectAfterSuccesUrl = \"{{ url('purchase_payment_success', {'id': purchase.id }) }}\";
    </script>
    <script src=\"/assets/js/payment.js\"></script>
{% endblock %}
", "purchase/payment.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\purchase\\payment.html.twig");
    }
}
