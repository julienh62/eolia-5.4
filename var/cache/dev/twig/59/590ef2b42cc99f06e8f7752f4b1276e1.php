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

/* admin/admin_activitie/show.html.twig */
class __TwigTemplate_3a72160bd9d35989ceef767fe187beb3 extends Template
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
        return "base.admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_activitie/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_activitie/show.html.twig"));

        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/admin_activitie/show.html.twig", 1);
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

        echo "Activity";
        
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
        echo "    <h1>Activity</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Activity"]) || array_key_exists("Activity", $context) ? $context["Activity"] : (function () { throw new RuntimeError('Variable "Activity" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Activity"]) || array_key_exists("Activity", $context) ? $context["Activity"] : (function () { throw new RuntimeError('Variable "Activity" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Start</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["Activity"]) || array_key_exists("Activity", $context) ? $context["Activity"] : (function () { throw new RuntimeError('Variable "Activity" does not exist.', 20, $this->source); })()), "start", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Activity"]) || array_key_exists("Activity", $context) ? $context["Activity"] : (function () { throw new RuntimeError('Variable "Activity" does not exist.', 20, $this->source); })()), "start", [], "any", false, false, false, 20), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>End</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["Activity"]) || array_key_exists("Activity", $context) ? $context["Activity"] : (function () { throw new RuntimeError('Variable "Activity" does not exist.', 24, $this->source); })()), "end", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Activity"]) || array_key_exists("Activity", $context) ? $context["Activity"] : (function () { throw new RuntimeError('Variable "Activity" does not exist.', 24, $this->source); })()), "end", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Stock</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Activity"]) || array_key_exists("Activity", $context) ? $context["Activity"] : (function () { throw new RuntimeError('Variable "Activity" does not exist.', 28, $this->source); })()), "stock", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Activity"]) || array_key_exists("Activity", $context) ? $context["Activity"] : (function () { throw new RuntimeError('Variable "Activity" does not exist.', 32, $this->source); })()), "price", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>ModifiedPrice</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Activity"]) || array_key_exists("Activity", $context) ? $context["Activity"] : (function () { throw new RuntimeError('Variable "Activity" does not exist.', 36, $this->source); })()), "modifiedPrice", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_activitie_index");
        echo "\">Retour à la liste</a>

    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_activitie_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Activity"]) || array_key_exists("Activity", $context) ? $context["Activity"] : (function () { throw new RuntimeError('Variable "Activity" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\">modifier</a>

    ";
        // line 45
        echo twig_include($this->env, $context, "admin_activitie/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/admin_activitie/show.html.twig";
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
        return array (  156 => 45,  151 => 43,  146 => 41,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.admin.html.twig' %}

{% block title %}Activity{% endblock %}

{% block body %}
    <h1>Activity</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ Activity.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ Activity.title }}</td>
            </tr>
            <tr>
                <th>Start</th>
                <td>{{ Activity.start ? Activity.start|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>End</th>
                <td>{{ Activity.end ? Activity.end|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Stock</th>
                <td>{{ Activity.stock }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ Activity.price }}</td>
            </tr>
            <tr>
                <th>ModifiedPrice</th>
                <td>{{ Activity.modifiedPrice }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_admin_activitie_index') }}\">Retour à la liste</a>

    <a href=\"{{ path('app_admin_activitie_edit', {'id': Activity.id}) }}\">modifier</a>

    {{ include('admin_activitie/_delete_form.html.twig') }}
{% endblock %}
", "admin/admin_activitie/show.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\admin\\admin_activitie\\show.html.twig");
    }
}
