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

/* admin_calendar/index.html.twig */
class __TwigTemplate_2d9545e9cf23054ffa61b0b9ee4b7d8b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_calendar/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_calendar/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_calendar/index.html.twig", 1);
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

        echo "Calendar index";
        
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
        echo "    <h1>Calendar index</h1>
      ";
        // line 8
        echo "    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Staff</th>
                <th>Start</th>
                <th>End</th>
                <th>actions</th>
            </tr>
        </thead>
   ";
        // line 83
        echo "
        <tbody>
        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calendars"]) || array_key_exists("calendars", $context) ? $context["calendars"] : (function () { throw new RuntimeError('Variable "calendars" does not exist.', 85, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["calendar"]) {
            // line 86
            echo "            <tr>
                <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "title", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>

                <td>";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["calendar"], "staffs", [], "any", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["staff"]) {
                // line 91
                echo "                        Staff:  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["staff"], "fullName", [], "any", false, false, false, 91), "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['staff'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "</td>

                <td>";
            // line 94
            ((twig_get_attribute($this->env, $this->source, $context["calendar"], "formattedStartDate", [], "any", false, false, false, 94)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["calendar"], "formattedStartDate", [], "any", false, false, false, 94)), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 95
            ((twig_get_attribute($this->env, $this->source, $context["calendar"], "formattedEndDate", [], "any", false, false, false, 95)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["calendar"], "formattedEndDate", [], "any", false, false, false, 95)), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_calendar_show", ["id" => twig_get_attribute($this->env, $this->source, $context["calendar"], "id", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_calendar_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["calendar"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 102
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "        </tbody>

    </table>

    <a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_formChooseCalendar");
        echo "\">Create new</a>


    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin_calendar/index.html.twig";
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
        return array (  179 => 110,  173 => 106,  164 => 102,  155 => 98,  151 => 97,  146 => 95,  142 => 94,  138 => 92,  129 => 91,  125 => 90,  120 => 88,  116 => 87,  113 => 86,  108 => 85,  104 => 83,  91 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Calendar index{% endblock %}

{% block body %}
    <h1>Calendar index</h1>
      {#  {{dump(calendars) }} #}
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Staff</th>
                <th>Start</th>
                <th>End</th>
                <th>actions</th>
            </tr>
        </thead>
   {# <tbody>
        {% for activitie in activities %}
            <tr>
                <td>{{ activitie.id }}</td>
                <td>{{ activitie.title }}</td>
                <td>{{ activitie.category }}</td>
                <td>{{ activitie.category.categorySetting.borderColor }}</td>

        <td>  {% for staff in activitie.staffs %}
                {{ staff.fullName }}
            {% endfor %}
        </td>
        <td>{{ activitie.formattedStartDate ? activitie.formattedStartDate| trans : '' }}</td>
        <td>{{ activitie.formattedEndDate ? activitie.formattedEndDate| trans : ''}}</td>
        <td>
            <a href=\"{{ path('app_admin_calendar_show', {'id': activitie.id}) }}\">show</a>
            <a href=\"{{ path('app_admin_calendar_edit', {'id': activitie.id}) }}\">edit</a>
        </td>
        </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

<table class=\"table\">
    <thead>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Category</th>
        <th>BorderColor</th>
        <th>Staff</th>
        <th>Start</th>
        <th>End</th>
        <th>actions</th>
    </tr>
    </thead>
    <tbody>
    {% for staffSchedule in staffSchedules %}
        <tr>
            <td>{{ staffSchedule.id }}</td>
            <td>{{ staffSchedule.title }}</td>
            <td>{{ staffSchedule.category }}</td>
            <td>{{ staffSchedule.category.categorySetting.borderColor }}</td>
            <td>{% for staff in staffSchedule.staffs %}
                    Staff:  {{ staff.fullName }}
                {% endfor %}</td>

            <td>{{ staffSchedule.formattedStartDate ? staffSchedule.formattedEndDate| trans : '' }}</td>
            <td>{{ staffSchedule.formattedEndDate ? staffSchedule.formattedEndDate| trans : '' }}</td>
            <td>
                <a href=\"{{ path('app_admin_calendar_show', {'id': staffSchedule.id}) }}\">show</a>
                <a href=\"{{ path('app_admin_calendar_edit', {'id': staffSchedule.id}) }}\">edit</a>
            </td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"5\">no records found</td>
        </tr>
    {% endfor %}
    </tbody> #}

        <tbody>
        {% for calendar in calendars %}
            <tr>
                <td>{{ calendar.id }}</td>
                <td>{{ calendar.title }}</td>

                <td>{% for staff in calendar.staffs %}
                        Staff:  {{ staff.fullName }}
                    {% endfor %}</td>

                <td>{{ calendar.formattedStartDate ? calendar.formattedStartDate| trans : '' }}</td>
                <td>{{ calendar.formattedEndDate ? calendar.formattedEndDate| trans : '' }}</td>
                <td>
                    <a href=\"{{ path('app_admin_calendar_show', {'id': calendar.id}) }}\">show</a>
                    <a href=\"{{ path('app_admin_calendar_edit', {'id': calendar.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>

    </table>

    <a href=\"{{ path('app_admin_formChooseCalendar') }}\">Create new</a>


    {% endblock %}
", "admin_calendar/index.html.twig", "C:\\wamp64\\www\\symfony\\eolia-symfo-calendar - Copie\\templates\\admin_calendar\\index.html.twig");
    }
}
