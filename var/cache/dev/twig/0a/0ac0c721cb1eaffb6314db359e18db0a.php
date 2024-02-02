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

/* admin/admin_user/show/purchaseuserid.html.twig */
class __TwigTemplate_76955dbb97bddc5f97e6636eb7b8d281 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_user/show/purchaseuserid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_user/show/purchaseuserid.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin_user/show/purchaseuserid.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello Allusershow!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

 <main class=\"container\">
    
                                
      <div class =\"purchasedesktop\">
        <h1>Les commandes ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["fullname"]) || array_key_exists("fullname", $context) ? $context["fullname"] : (function () { throw new RuntimeError('Variable "fullname" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</h1>
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
        // line 28
        echo "
                      <th>Action</th>

                       <th>supprimer commande  </th>
                  </tr>
                </thead>
      
                               ";
        // line 36
        echo "
          
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["purchase"]) {
            echo " 
                          <tr>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "title", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "quantity", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                           

                                      
                         ";
            // line 46
            echo "                            <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "start", [], "any", false, false, false, 46), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "end", [], "any", false, false, false, 47), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, $context["purchase"], "total", [], "any", false, false, false, 48)), "html", null, true);
            echo "</td>
                          ";
            // line 50
            echo "                            <td> ";
            if ((twig_get_attribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 50) == "PENDING")) {
                // line 51
                echo "                                  Non payé
                                  ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 52
$context["purchase"], "status", [], "any", false, false, false, 52) == "PAID")) {
                // line 53
                echo "                                      Payé
                                  ";
            }
            // line 55
            echo "                            </td>
                      ";
            // line 57
            echo "
                              <td>";
            // line 58
            if ((twig_get_attribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 58) == "PENDING")) {
                // line 59
                echo "                                      <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_show_lien_paiement", ["purchaseId" => twig_get_attribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 59), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 59, $this->source); })())]), "html", null, true);
                echo "\" class=\"bouton-paiement\">Envoyer lien de paiement</a>
                                  ";
            }
            // line 61
            echo "                              </td>
                       
                            <td><a href=\"";
            // line 63
            echo "\" data-confirm=\"Êtes-vous sûr de vouloir supprimer la commande de cet utilisateur?\">Supprimer </a></td>
         
                          </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['purchase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        
          </table>
      </div>  

    <div class =\"purchasemobil\">
      <h1>Mes commandes</h1>

                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["purchases"]) || array_key_exists("purchases", $context) ? $context["purchases"] : (function () { throw new RuntimeError('Variable "purchases" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["purchase"]) {
            // line 75
            echo "              
                    <p  class=\"item-mobile\">Titre</p>
                    <p class=\"datatitem\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "title", [], "any", false, false, false, 77), "html", null, true);
            echo "</p>
              
                    <p  class=\"item-mobile\">Date de début</p>
                    <p class=\"datatitem\">";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "start", [], "any", false, false, false, 80), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>
              
                    <p  class=\"item-mobile\">Date de fin</h3>
                    <p class=\"datatitem\">";
            // line 83
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "end", [], "any", false, false, false, 83), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>
              
                      <p  class=\"item-mobile\">Unité</h3>
                    <p class=\"datatitem\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["purchase"], "quantity", [], "any", false, false, false, 86), "html", null, true);
            echo "</p>
            
                    <p  class=\"item-mobile\">Total</h3>

                    <p class=\"datatitem\">";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, $context["purchase"], "total", [], "any", false, false, false, 90)), "html", null, true);
            echo "</p>

                    <p  class=\"item-mobile\">";
            // line 92
            if ((twig_get_attribute($this->env, $this->source, $context["purchase"], "status", [], "any", false, false, false, 92) == "PENDING")) {
                // line 93
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_show_lien_paiement", ["purchaseId" => twig_get_attribute($this->env, $this->source, $context["purchase"], "id", [], "any", false, false, false, 93), "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 93, $this->source); })())]), "html", null, true);
                echo "\" class=\"bouton-paiement\">Envoyer lien de paiement</a>
                        ";
            }
            // line 95
            echo "                    </p>
                    <hr>  



                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['purchase'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
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
        return "admin/admin_user/show/purchaseuserid.html.twig";
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
        return array (  265 => 101,  254 => 95,  248 => 93,  246 => 92,  241 => 90,  234 => 86,  228 => 83,  222 => 80,  216 => 77,  212 => 75,  208 => 74,  199 => 67,  190 => 63,  186 => 61,  180 => 59,  178 => 58,  175 => 57,  172 => 55,  168 => 53,  166 => 52,  163 => 51,  160 => 50,  156 => 48,  152 => 47,  147 => 46,  140 => 41,  136 => 40,  129 => 38,  125 => 36,  116 => 28,  96 => 10,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Hello Allusershow!{% endblock %}
{% block body %}


 <main class=\"container\">
    
                                
      <div class =\"purchasedesktop\">
        <h1>Les commandes {{ fullname }}</h1>
          <table class=\"tableau\">
                <thead>
                  <tr>

                      <th>Titre  </th>
              
                      <th>Quantité  </th>

                      <th>Début de la séance</th>
              
                      <th>Fin de la séance</th>
                    
                      <th>Total </th>

                      <th>Statut</th>

                      {#  <th>PurchaseItemId</th> #}

                      <th>Action</th>

                       <th>supprimer commande  </th>
                  </tr>
                </thead>
      
                               {# {{ dump(purchases) }} #}

          
                {% for purchase in purchases %} 
                          <tr>
                            <td>{{ purchase.title }}</td>
                            <td>{{ purchase.quantity }}</td>
                           

                                      
                         {#  <td>{{ purchase.calendarIds }}</td>#}
                            <td>{{ purchase.start|date('Y-m-d H:i:s') }}</td>
                            <td>{{ purchase.end|date('Y-m-d H:i:s') }}</td>
                            <td>{{ purchase.total | amount }}</td>
                          {#  <td>{{ purchase.created_at }}</td>#}
                            <td> {% if purchase.status == 'PENDING' %}
                                  Non payé
                                  {% elseif purchase.status == 'PAID' %}
                                      Payé
                                  {% endif %}
                            </td>
                      {#     <td>{{ purchase.id }}</td> #}

                              <td>{% if purchase.status == \"PENDING\" %}
                                      <a href=\"{{ path('admin_calendar_show_lien_paiement', {'purchaseId': purchase.id, 'id':id}) }}\" class=\"bouton-paiement\">Envoyer lien de paiement</a>
                                  {% endif %}
                              </td>
                       
                            <td><a href=\"{#{{ path('delete_purchaseitem', {'id':purchase.id} ) }}#}\" data-confirm=\"Êtes-vous sûr de vouloir supprimer la commande de cet utilisateur?\">Supprimer </a></td>
         
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

                    <p  class=\"item-mobile\">{% if purchase.status == \"PENDING\" %}
                            <a href=\"{{ path('admin_calendar_show_lien_paiement', {'purchaseId': purchase.id, 'id':id}) }}\" class=\"bouton-paiement\">Envoyer lien de paiement</a>
                        {% endif %}
                    </p>
                    <hr>  



                {%  endfor %}

         



            
          
            
      </div>  
</main>
{% endblock %}", "admin/admin_user/show/purchaseuserid.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\admin\\admin_user\\show\\purchaseuserid.html.twig");
    }
}
