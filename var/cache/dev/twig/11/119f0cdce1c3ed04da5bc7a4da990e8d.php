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

/* purchase/index.html.twig */
class __TwigTemplate_9be7e17e647bfe4665756412706f6c9f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "purchase/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "purchase/index.html.twig", 1);
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

        echo "Mes commandes";
        
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
        echo "  <main class=\"container\">
      ";
        // line 8
        echo "    
                                
      <div class =\"purchasedesktop\">
        <h1>Mes commandes</h1>
          <table class=\"tableau\">
                <thead>
                  <tr>

                      <th>Titre  </th>
              
                      <th>Quantité  </th>

                      <th>Début de la séance</th>
              
                      <th>Fin de la séance</th>
                    
                      <th>Total </th>

                      <th>Statut</th>



                    ";
        // line 31
        echo "                  </tr>
                </thead>
      
                               ";
        // line 35
        echo "
          
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["purchase"]) {
            echo " 
                          <tr>
                            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "title", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "quantity", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                           

                                      
                         ";
            // line 45
            echo "                            <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "start", [], "any", false, false, false, 45), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "end", [], "any", false, false, false, 46), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, $context["purchase"], "total", [], "any", false, false, false, 47)), "html", null, true);
            echo "</td>
                            <td> ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 48) == "PENDING")) {
                // line 49
                echo "                                  Non payé
                                  ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 50
$context["purchase"], "status", [], "any", false, false, false, 50) == "PAID")) {
                // line 51
                echo "                                      Payé
                                  ";
            }
            // line 53
            echo "                            </td>

                       ";
            // line 56
            echo "
                          </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['purchase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        
          </table>
      </div>  

    <div class =\"purchasemobil\">
      <h1>Mes commandes</h1>

                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["purchase"]) {
            // line 67
            echo "              
                    <p  class=\"item-mobile\">Titre</p>
                    <p class=\"datatitem\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "title", [], "any", false, false, false, 69), "html", null, true);
            echo "</p>
              
                    <p  class=\"item-mobile\">Date de début</p>
                    <p class=\"datatitem\">";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "start", [], "any", false, false, false, 72), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>
              
                    <p  class=\"item-mobile\">Date de fin</h3>
                    <p class=\"datatitem\">";
            // line 75
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "end", [], "any", false, false, false, 75), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>
              
                      <p  class=\"item-mobile\">Unité</h3>
                    <p class=\"datatitem\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "quantity", [], "any", false, false, false, 78), "html", null, true);
            echo "</p>
            
                    <p  class=\"item-mobile\">Total</h3>

                    <p class=\"datatitem\">";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, $context["purchase"], "total", [], "any", false, false, false, 82)), "html", null, true);
            echo "</p>

                    <hr>  
                    ";
            // line 86
            echo "                    <p class=\"datatitem\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "activitieIds", [], "any", false, false, false, 86), "html", null, true);
            echo "</p>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['purchase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
         



            
          
            
      </div>  
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "purchase/index.html.twig";
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
        return array (  236 => 89,  226 => 86,  220 => 82,  213 => 78,  207 => 75,  201 => 72,  195 => 69,  191 => 67,  187 => 66,  178 => 59,  170 => 56,  166 => 53,  162 => 51,  160 => 50,  157 => 49,  155 => 48,  151 => 47,  147 => 46,  142 => 45,  135 => 40,  131 => 39,  124 => 37,  120 => 35,  115 => 31,  91 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes commandes{% endblock %}

{% block body %}
  <main class=\"container\">
      {#    {{ dump(listpurchase) }} #}
    
                                
      <div class =\"purchasedesktop\">
        <h1>Mes commandes</h1>
          <table class=\"tableau\">
                <thead>
                  <tr>

                      <th>Titre  </th>
              
                      <th>Quantité  </th>

                      <th>Début de la séance</th>
              
                      <th>Fin de la séance</th>
                    
                      <th>Total </th>

                      <th>Statut</th>



                    {#   <th>purchaseItemId</th> #}
                  </tr>
                </thead>
      
                               {# {{ dump(purchases) }} #}

          
                {% for purchase in purchases %} 
                          <tr>
                            <td>{{ purchase.title }}</td>
                            <td>{{ purchase.quantity }}</td>
                           

                                      
                         {#  <td>{{ purchase.activitieIds }}</td>#}
                            <td>{{ purchase.start|date('Y-m-d H:i:s') }}</td>
                            <td>{{ purchase.end|date('Y-m-d H:i:s') }}</td>
                            <td>{{ purchase.total | amount }}</td>
                            <td> {% if purchase.status == 'PENDING' %}
                                  Non payé
                                  {% elseif purchase.status == 'PAID' %}
                                      Payé
                                  {% endif %}
                            </td>

                       {# <td>{{ purchase.activitieIds }}</td> #}

                          </tr>
                {% endfor %}
        
          </table>
      </div>  

    <div class =\"purchasemobil\">
      <h1>Mes commandes</h1>

                {% for purchase in purchases %}
              
                    <p  class=\"item-mobile\">Titre</p>
                    <p class=\"datatitem\">{{ purchase.title  }}</p>
              
                    <p  class=\"item-mobile\">Date de début</p>
                    <p class=\"datatitem\">{{ purchase.start|date('Y-m-d H:i:s')  }}</p>
              
                    <p  class=\"item-mobile\">Date de fin</h3>
                    <p class=\"datatitem\">{{ purchase.end|date('Y-m-d H:i:s') }}</p>
              
                      <p  class=\"item-mobile\">Unité</h3>
                    <p class=\"datatitem\">{{ purchase.quantity }}</p>
            
                    <p  class=\"item-mobile\">Total</h3>

                    <p class=\"datatitem\">{{ purchase.total | amount }}</p>

                    <hr>  
                    {# <p  class=\"item-mobile\">purchaseItemId</p> #}
                    <p class=\"datatitem\">{{ purchase.activitieIds }}</p>

                {%  endfor %}

         



            
          
            
      </div>  
</main>
{% endblock %}
", "purchase/index.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\purchase\\index.html.twig");
    }
}
