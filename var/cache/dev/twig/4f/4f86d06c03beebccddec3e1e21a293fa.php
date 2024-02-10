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

/* admin/purchase_item/index.html.twig */
class __TwigTemplate_a8c97411256edb6a14077b5c4fbe35ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase_item/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/purchase_item/index.html.twig"));

        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/purchase_item/index.html.twig", 1);
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

        echo "purchaseItem index";
        
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
        echo "    <h1>purchaseItem index Back-office</h1>

    <div class=\"onlydesktop\">
     <table class=\"tableau\">
        <thead class=\"tableau\">
            <tr>
              

            
                <th>PurchaseId</th>
                 <th>PurchaseItemId</th>
                <th>Activité</th>
                <th>Status</th>
                <th>Prix</th>
                <th>total</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchaseItems"]) || array_key_exists("purchaseItems", $context) ? $context["purchaseItems"] : (function () { throw new RuntimeError('Variable "purchaseItems" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["purchaseItem"]) {
            // line 26
            echo "            <tr>
               
             
                <td class=\"tableau\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchaseItem"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td class=\"tableau\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["purchaseItem"], "purchase", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td class=\"tableau\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchaseItem"], "activityName", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td class=\"tableau\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["purchaseItem"], "purchase", [], "any", false, false, false, 32), "status", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                 <td class=\"tableau\">";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, $context["purchaseItem"], "activityPrice", [], "any", false, false, false, 33)), "html", null, true);
            // line 34
            echo "</td>
                <td class=\"tableau\">";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, $context["purchaseItem"], "total", [], "any", false, false, false, 35)), "html", null, true);
            echo "</td>
               

                  <td class=\"tableau\">
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_purchaseitem", ["id" => twig_get_attribute($this->env, $this->source, $context["purchaseItem"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" data-confirm=\"Êtes-vous sûr de vouloir supprimer la commande de cette commande?\">Supprimer la commande</a>

                </td>
            </tr>

      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "           
                <p>Aucune correspondance trouvée</p>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['purchaseItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "

        </tbody>
    </table>
   </div>



   <div class=\"onlymobil\">

       ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchaseItems"]) || array_key_exists("purchaseItems", $context) ? $context["purchaseItems"] : (function () { throw new RuntimeError('Variable "purchaseItems" does not exist.', 59, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["purchaseItem"]) {
            // line 60
            echo "           
                <h3>Activité</h3>
                  <p>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchaseItem"], "activityName", [], "any", false, false, false, 62), "html", null, true);
            echo "</p>
          
                <h3>Statut</h3>
                <p>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["purchaseItem"], "purchase", [], "any", false, false, false, 65), "status", [], "any", false, false, false, 65), "html", null, true);
            echo "</p>
          
                <h3>Prix</h3>
                 <p>";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, $context["purchaseItem"], "activityPrice", [], "any", false, false, false, 68)), "html", null, true);
            // line 69
            echo "</p>

                <h3>Total</h3>
                <p>";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, $context["purchaseItem"], "total", [], "any", false, false, false, 72)), "html", null, true);
            echo "  </p>

            
                <h3>action</h3>
                <p>
                    <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_purchaseitem", ["id" => twig_get_attribute($this->env, $this->source, $context["purchaseItem"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\" data-confirm=\"Êtes-vous sûr de vouloir supprimer la commande de cette commande?\">Supprimer la commande</a>
                </p>
          
         <hr>


    
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 85
            echo "           
                <p>Aucune correspondance trouvée</p>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['purchaseItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
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
        return "admin/purchase_item/index.html.twig";
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
        return array (  237 => 89,  228 => 85,  215 => 77,  207 => 72,  202 => 69,  200 => 68,  194 => 65,  188 => 62,  184 => 60,  179 => 59,  167 => 49,  158 => 45,  147 => 39,  140 => 35,  137 => 34,  135 => 33,  131 => 32,  127 => 31,  123 => 30,  119 => 29,  114 => 26,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.admin.html.twig' %}

{% block title %}purchaseItem index{% endblock %}

{% block body %}
    <h1>purchaseItem index Back-office</h1>

    <div class=\"onlydesktop\">
     <table class=\"tableau\">
        <thead class=\"tableau\">
            <tr>
              

            
                <th>PurchaseId</th>
                 <th>PurchaseItemId</th>
                <th>Activité</th>
                <th>Status</th>
                <th>Prix</th>
                <th>total</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        {% for purchaseItem in purchaseItems %}
            <tr>
               
             
                <td class=\"tableau\">{{ purchaseItem.id  }}</td>
                <td class=\"tableau\">{{ purchaseItem.purchase.id  }}</td>
                <td class=\"tableau\">{{ purchaseItem.activityName }}</td>
                <td class=\"tableau\">{{ purchaseItem.purchase.status }}</td>
                 <td class=\"tableau\">{{ purchaseItem.activityPrice | amount
                     }}</td>
                <td class=\"tableau\">{{ purchaseItem.total |amount }}</td>
               

                  <td class=\"tableau\">
                    <a href=\"{{ path('delete_purchaseitem', {'id':purchaseItem.id} ) }}\" data-confirm=\"Êtes-vous sûr de vouloir supprimer la commande de cette commande?\">Supprimer la commande</a>

                </td>
            </tr>

      {% else %}
           
                <p>Aucune correspondance trouvée</p>
            
        {% endfor %}


        </tbody>
    </table>
   </div>



   <div class=\"onlymobil\">

       {% for purchaseItem in purchaseItems %}
           
                <h3>Activité</h3>
                  <p>{{ purchaseItem.activityName }}</p>
          
                <h3>Statut</h3>
                <p>{{ purchaseItem.purchase.status }}</p>
          
                <h3>Prix</h3>
                 <p>{{ purchaseItem.activityPrice | amount
                     }}</p>

                <h3>Total</h3>
                <p>{{ purchaseItem.total | amount }}  </p>

            
                <h3>action</h3>
                <p>
                    <a href=\"{{ path('delete_purchaseitem', {'id':purchaseItem.id} ) }}\" data-confirm=\"Êtes-vous sûr de vouloir supprimer la commande de cette commande?\">Supprimer la commande</a>
                </p>
          
         <hr>


    
        {% else %}
           
                <p>Aucune correspondance trouvée</p>
            
        {% endfor %}
    
   </div>
  
{% endblock %}

", "admin/purchase_item/index.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\admin\\purchase_item\\index.html.twig");
    }
}
