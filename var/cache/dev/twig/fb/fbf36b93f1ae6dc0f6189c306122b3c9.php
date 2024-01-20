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

/* admin/user/show_purchase.html.twig */
class __TwigTemplate_184e371ed1f91f6350c5ecd220aacd03 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/show_purchase.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/show_purchase.html.twig"));

        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/user/show_purchase.html.twig", 1);
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

        echo "Commande user";
        
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
        echo "
 ";
        // line 10
        echo "<div class =\"purchasedesktop\">
  <h1>Commandes ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "fullName", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
    <table class=\"tableau\">
    <thead>
    <tr>

      <th>Titre  </th>
       
       <th>Quantité  </th>

        <th>Début de la séance</th>
       
        <th>Fin de la séance</th>

        <th>Statut</th>
    </tr>
    </thead>
   
";
        // line 29
        echo "
       
             ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["purchase"]) {
            // line 32
            echo "            <tr>
              <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "title", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "quantity", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "start", [], "any", false, false, false, 35), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "end", [], "any", false, false, false, 36), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                 <td> ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 37) == "PENDING")) {
                // line 38
                echo "                        Non payé
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 39
$context["purchase"], "status", [], "any", false, false, false, 39) == "PAID")) {
                // line 40
                echo "                        Payé
                    ";
            }
            // line 41
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['purchase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "   
    
    </table>
  </div>  

 <div class =\"purchasemobil\">
   <h1>Mes commandes</h1>

            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["purchase"]) {
            // line 53
            echo "          
                <p  class=\"item-mobile\">Titre</p>
                <p class=\"datatitem\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "title", [], "any", false, false, false, 55), "html", null, true);
            echo "</p>
           
                <p  class=\"item-mobile\">Début</p>
                <p class=\"datatitem\">";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "start", [], "any", false, false, false, 58), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>
           
                <p  class=\"item-mobile\">Fin</h3>
                <p class=\"datatitem\">";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "end", [], "any", false, false, false, 61), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>
          
                  <p  class=\"item-mobile\">Unité</h3>
                <p class=\"datatitem\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "quantity", [], "any", false, false, false, 64), "html", null, true);
            echo "</p>
         
                <p  class=\"item-mobile\">Total</h3>

                <p class=\"datatitem\">";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, $context["purchase"], "total", [], "any", false, false, false, 68)), "html", null, true);
            echo "</p>

                  <p  class=\"item-mobile\">Date de création</h3>

                <p  class=\"item-mobile\">Statut</h3>

                <p class=\"datatitem\">";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 74) == "PENDING")) {
                // line 75
                echo "                        Non payé
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 76
$context["purchase"], "status", [], "any", false, false, false, 76) == "PAID")) {
                // line 77
                echo "                        Payé
                    ";
            }
            // line 78
            echo "</p>
                 <hr>  



         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['purchase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "

 
";
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
        return "admin/user/show_purchase.html.twig";
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
        return array (  239 => 89,  234 => 84,  223 => 78,  219 => 77,  217 => 76,  214 => 75,  212 => 74,  203 => 68,  196 => 64,  190 => 61,  184 => 58,  178 => 55,  174 => 53,  170 => 52,  160 => 44,  152 => 41,  148 => 40,  146 => 39,  143 => 38,  141 => 37,  137 => 36,  133 => 35,  129 => 34,  125 => 33,  122 => 32,  118 => 31,  114 => 29,  94 => 11,  91 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.admin.html.twig' %}
 
{% block title %}Commande user{% endblock %}

{% block body %}

 {#    {{ dump(purchases) }} 
  #}
{#}<main class=\"container\">#}
<div class =\"purchasedesktop\">
  <h1>Commandes {{user.fullName}}</h1>
    <table class=\"tableau\">
    <thead>
    <tr>

      <th>Titre  </th>
       
       <th>Quantité  </th>

        <th>Début de la séance</th>
       
        <th>Fin de la séance</th>

        <th>Statut</th>
    </tr>
    </thead>
   
{#    {{ dump(purchases) }}#}

       
             {% for purchase in purchases %}
            <tr>
              <td>{{ purchase.title }}</td>
                <td>{{ purchase.quantity }}</td>
                <td>{{ purchase.start|date('Y-m-d H:i:s') }}</td>
                <td>{{ purchase.end|date('Y-m-d H:i:s') }}</td>
                 <td> {% if purchase.status == 'PENDING' %}
                        Non payé
                    {% elseif purchase.status == 'PAID' %}
                        Payé
                    {% endif %}</td>
            </tr>
        {% endfor %}
   
    
    </table>
  </div>  

 <div class =\"purchasemobil\">
   <h1>Mes commandes</h1>

            {% for purchase in purchases %}
          
                <p  class=\"item-mobile\">Titre</p>
                <p class=\"datatitem\">{{ purchase.title  }}</p>
           
                <p  class=\"item-mobile\">Début</p>
                <p class=\"datatitem\">{{ purchase.start|date('Y-m-d H:i:s')  }}</p>
           
                <p  class=\"item-mobile\">Fin</h3>
                <p class=\"datatitem\">{{ purchase.end|date('Y-m-d H:i:s') }}</p>
          
                  <p  class=\"item-mobile\">Unité</h3>
                <p class=\"datatitem\">{{ purchase.quantity }}</p>
         
                <p  class=\"item-mobile\">Total</h3>

                <p class=\"datatitem\">{{ purchase.total | amount }}</p>

                  <p  class=\"item-mobile\">Date de création</h3>

                <p  class=\"item-mobile\">Statut</h3>

                <p class=\"datatitem\">{% if purchase.status == 'PENDING' %}
                        Non payé
                    {% elseif purchase.status == 'PAID' %}
                        Payé
                    {% endif %}</p>
                 <hr>  



         {%  endfor %}


 
{#    {{ dump(purchases) }}
#}
         
       
        
  </div>  
</main>
{% endblock %}
", "admin/user/show_purchase.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\admin\\user\\show_purchase.html.twig");
    }
}
