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

/* calendarFilter/index.html.twig */
class __TwigTemplate_42106df95e21a5ab35c18925b090c35c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendarFilter/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendarFilter/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "calendarFilter/index.html.twig", 1);
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

        echo "calendar index";
        
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
        echo "    <h1>Les séances</h1>

    <div id=\"search\">
        <form id=\"searchForm\">
            <div id=\"formsearch\">
                <div>
                    <label for=\"valeurMin\">Nombre de place recherché minimum:</label>
                    <input type=\"number\" id=\"min-price\" name=\"min\" min=\"0\" value=\"1\" max=\"100\" step=\"1\">
                    <label for=\"calendar-select\">Choisis une activité:</label>
                    <select name=\"category\" id=\"calendar-select\">
                        <option value=\"all\" selected>Toutes les activités</option>
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 18
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, $context["categorie"], "activity", [], "any", false, false, false, 18)) {
                // line 19
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "titleCategory", [], "any", false, false, false, 19), "html", null, true);
                echo "\">
                                    ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "titleCategory", [], "any", false, false, false, 20), "html", null, true);
                echo "
                                </option>
                            ";
            }
            // line 23
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                    </select>    
                </div>
                <div>
                    <label for=\"begin\">Date début recherche</label>
                    <input type=\"date\" id=\"begin\" name=\"begin\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
                </div>
                <div>
                    <label for=\"end\">Date fin de recherche</label>
                    ";
        // line 32
        $context["nextDay"] = twig_date_modify_filter($this->env, "now", "+15 day");
        // line 33
        echo "                    <input type=\"date\" id=\"end\" name=\"end\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["nextDay"]) || array_key_exists("nextDay", $context) ? $context["nextDay"] : (function () { throw new RuntimeError('Variable "nextDay" does not exist.', 33, $this->source); })()), "Y-m-d"), "html", null, true);
        echo "\">
                </div>
                <div>
                    <button class =\"button\" type=\"submit\">Valider</button>
                </div>
            </div>
        </form>
    </div>
    
    <div id=\"calendarList\">
        <div id=\"loadingIndicator\">
            <p>Veuillez patienter, nous lançons la recherche...</p>
            <div class=\"loader\"></div>
        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    
        
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/formsearchactivity.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "calendarFilter/index.html.twig";
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
        return array (  184 => 55,  180 => 53,  170 => 52,  141 => 33,  139 => 32,  132 => 28,  126 => 24,  120 => 23,  114 => 20,  109 => 19,  106 => 18,  102 => 17,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}calendar index{% endblock %}

{% block body %}
    <h1>Les séances</h1>

    <div id=\"search\">
        <form id=\"searchForm\">
            <div id=\"formsearch\">
                <div>
                    <label for=\"valeurMin\">Nombre de place recherché minimum:</label>
                    <input type=\"number\" id=\"min-price\" name=\"min\" min=\"0\" value=\"1\" max=\"100\" step=\"1\">
                    <label for=\"calendar-select\">Choisis une activité:</label>
                    <select name=\"category\" id=\"calendar-select\">
                        <option value=\"all\" selected>Toutes les activités</option>
                        {% for categorie in categories %}
                            {% if categorie.activity %}
                                <option value=\"{{ categorie.titleCategory }}\">
                                    {{ categorie.titleCategory }}
                                </option>
                            {% endif %}
                        {% endfor %}
                    </select>    
                </div>
                <div>
                    <label for=\"begin\">Date début recherche</label>
                    <input type=\"date\" id=\"begin\" name=\"begin\" value=\"{{ \"now\"|date(\"Y-m-d\") }}\">
                </div>
                <div>
                    <label for=\"end\">Date fin de recherche</label>
                    {% set nextDay = \"now\"|date_modify(\"+15 day\") %}
                    <input type=\"date\" id=\"end\" name=\"end\" value=\"{{ nextDay|date(\"Y-m-d\") }}\">
                </div>
                <div>
                    <button class =\"button\" type=\"submit\">Valider</button>
                </div>
            </div>
        </form>
    </div>
    
    <div id=\"calendarList\">
        <div id=\"loadingIndicator\">
            <p>Veuillez patienter, nous lançons la recherche...</p>
            <div class=\"loader\"></div>
        </div>

    </div>

{% endblock %}

{% block javascripts %}
    
        
        <script src=\"{{ asset('assets/js/formsearchactivity.js') }}\"></script>

    {% endblock %}
", "calendarFilter/index.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\calendarFilter\\index.html.twig");
    }
}
