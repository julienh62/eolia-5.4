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

/* activity/index.html.twig */
class __TwigTemplate_8e02e3ac80116510d4874aeed3b1220d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activity/index.html.twig", 1);
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

        echo "activity index";
        
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

";
        // line 9
        echo "
    <div class=\"onlydesktop\">

      <table class=\"tableau\">
        <thead class=\"tableau\">
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Start</th>
                <th>End</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>action</th>
                 <th>action</th>

            </tr>
        </thead>
        <tbody>
          ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 28
            echo "            <tr>
                <td class=\"tableau\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td class=\"tableau\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td class=\"tableau\">  ";
            // line 31
            ((twig_get_attribute($this->env, $this->source, $context["activity"], "formattedStartDate", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["activity"], "formattedStartDate", [], "any", false, false, false, 31)), "html", null, true))) : (print ("")));
            echo "</td>
                <td class=\"tableau\">";
            // line 32
            ((twig_get_attribute($this->env, $this->source, $context["activity"], "formattedEndDate", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["activity"], "formattedEndDate", [], "any", false, false, false, 32)), "html", null, true))) : (print ("")));
            echo "</td>

                <td class=\"tableau\">";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, $context["activity"], "price", [], "any", false, false, false, 34)), "html", null, true);
            echo "</td>
                <td class=\"tableau\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "stock", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td class=\"tableau\">
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitie_show", ["id" => twig_get_attribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">détails</a>
                </td>
                 <td class=\"tableau\">
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">ajouter au panier</a>
                </td>

            </tr>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "                 <tr>
                     <td>Aucune correspondance trouvée</td>
                 </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "          
        </tbody>
      </table>
    </div>
    <div class=\"onlymobil\">
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 54, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 55
            echo "

          

            <h3>Start</h3>
            <p>";
            // line 60
            ((twig_get_attribute($this->env, $this->source, $context["activity"], "start", [], "any", false, false, false, 60)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "start", [], "any", false, false, false, 60), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</p>

            <h3>End</h3>
            <p>";
            // line 63
            ((twig_get_attribute($this->env, $this->source, $context["activity"], "end", [], "any", false, false, false, 63)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "end", [], "any", false, false, false, 63), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</p>

            <h3>Prix</h3>
            <p>";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, $context["activity"], "price", [], "any", false, false, false, 66)), "html", null, true);
            echo "</p>

            <h3>Stock</h3>
            <p>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "stock", [], "any", false, false, false, 69), "html", null, true);
            echo "</p>





            <hr>



        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 80
            echo "
            <p>Aucune correspondance trouvée</p>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
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
        return "activity/index.html.twig";
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
        return array (  233 => 84,  224 => 80,  208 => 69,  202 => 66,  196 => 63,  190 => 60,  183 => 55,  178 => 54,  171 => 49,  162 => 45,  152 => 40,  146 => 37,  141 => 35,  137 => 34,  132 => 32,  128 => 31,  124 => 30,  120 => 29,  117 => 28,  112 => 27,  92 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}activity index{% endblock %}

{% block body %}
    <h1>Les séances</h1>

{#  {{ dump(activities) }}#}

    <div class=\"onlydesktop\">

      <table class=\"tableau\">
        <thead class=\"tableau\">
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Start</th>
                <th>End</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>action</th>
                 <th>action</th>

            </tr>
        </thead>
        <tbody>
          {% for  activity in activities %}
            <tr>
                <td class=\"tableau\">{{ activity.id }}</td>
                <td class=\"tableau\">{{ activity.title }}</td>
                <td class=\"tableau\">  {{ activity.formattedStartDate ? activity.formattedStartDate| trans : '' }}</td>
                <td class=\"tableau\">{{ activity.formattedEndDate ? activity.formattedEndDate| trans : '' }}</td>

                <td class=\"tableau\">{{ activity.price | amount }}</td>
                <td class=\"tableau\">{{ activity.stock }}</td>
                <td class=\"tableau\">
                    <a href=\"{{ path('app_activitie_show', {'id': activity.id}) }}\">détails</a>
                </td>
                 <td class=\"tableau\">
                    <a href=\"{{ path('cart_add', {'id': activity.id}) }}\">ajouter au panier</a>
                </td>

            </tr>
          {% else %}
                 <tr>
                     <td>Aucune correspondance trouvée</td>
                 </tr>
          {% endfor %}
          
        </tbody>
      </table>
    </div>
    <div class=\"onlymobil\">
        {% for activity in activities %}


          

            <h3>Start</h3>
            <p>{{ activity.start ? activity.start|date('Y-m-d H:i:s') : '' }}</p>

            <h3>End</h3>
            <p>{{ activity.end ? activity.end|date('Y-m-d H:i:s') : '' }}</p>

            <h3>Prix</h3>
            <p>{{ activity.price | amount }}</p>

            <h3>Stock</h3>
            <p>{{ activity.stock }}</p>





            <hr>



        {% else %}

            <p>Aucune correspondance trouvée</p>

        {% endfor %}

    </div>

{% endblock %}
", "activity/index.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\activity\\index.html.twig");
    }
}
