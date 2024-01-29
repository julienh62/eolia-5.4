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

/* cart/index.html.twig */
class __TwigTemplate_84f8bfb2ea7951330e7155586b12750c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "panier";
        
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
    <h1>Mon panier</h1>
 ";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 8, $this->source); })())) > 0)) {
            // line 9
            echo "  


<div class=\"onlydesktop\">
    <table class=\"tableau\">
        <thead class=\"tableau\">
            <tr>
                <th>Titre</th> 
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Prix</th>
                <th>Unité</th>
                <th>Stock</th>
                <th>Total</th>
                <th> Ajouter </th>
                <th> Enlever </th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 30
                echo "         
            <tr>
                <td class=\"tableaucart\">";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
            
                <td class=\"tableaucart\">";
                // line 34
                ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 34), "start", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 34), "start", [], "any", false, false, false, 34), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "</td>
           
                <td class=\"tableaucart\">";
                // line 36
                ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 36), "end", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 36), "end", [], "any", false, false, false, 36), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "</td>
           
                <td class=\"tableaucart\">";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 38), "price", [], "any", false, false, false, 38)), "html", null, true);
                echo "</td>
           
                <td class=\"tableaucart\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>

              <td class=\"tableaucart\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "stock", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
           
                <td class=\"tableaucart\">";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 44)), "html", null, true);
                echo "</td>

                   <td>
                        <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\" class=\"success\">
                            🛒+
                        </a>
                    </td>
                          <td>
                        <a href=\" ";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_decrement", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\" class=\"warning\">
                          🛒-
                        </a>
                    </td>
                       <td>
                       
                        <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\" class=\"danger\">
                            <i class=\"fas fa-trash-alt\">Supprimer</i>
                        </a>
                    </td>
            </tr>
            
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "      
        </tbody>


           <tfoot>
            <tr>
                <td>Total </td>
                <td class=\"text-start\">";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 72, $this->source); })())), "html", null, true);
            echo " </td>
                <td>
                    <a href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete_all");
            echo "\" class=\"danger\">
                           Vider le panier
                    </a>
                   
                </td>
            </tr>
        </tfoot>
    </table>
</div>
<div class=\"onlymobil\">
  ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 84, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 85
                echo "       
                <h3>Titre</h3>
                <p>";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 87), "title", [], "any", false, false, false, 87), "html", null, true);
                echo "</p>
           
                <h3>Date de début</h3>
                <p>";
                // line 90
                ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 90), "start", [], "any", false, false, false, 90)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 90), "start", [], "any", false, false, false, 90), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "</p>
           
                <h3>Date de fin</h3>
                <p>";
                // line 93
                ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 93), "end", [], "any", false, false, false, 93)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 93), "end", [], "any", false, false, false, 93), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
                echo "</p>
        
                <h3>Prix</h3>
                <p class=\"tableau\">";
                // line 96
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 96), "price", [], "any", false, false, false, 96)), "html", null, true);
                echo "</p>
          
                  <h3>Unité</h3>
                <p class=\"tableau\">";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 99), "html", null, true);
                echo "</p>
         
                <h3>Total</h3>
                <p class=\"tableau\">";
                // line 102
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 102)), "html", null, true);
                echo "</p>
          
                <h3>Ajouter</h3>
                   <p> <a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105)]), "html", null, true);
                echo "\" class=\"success\">
                            🛒 + 1
                        </a>
                        </p>
        
                <h3>Soustraire</h3>
                   <p>  <a href=\" ";
                // line 111
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_decrement", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111)]), "html", null, true);
                echo "\" class=\"warning\">
                          🛒 - 1
                        </a>
                        </p>
         
                <h3>Supprimer</h3>
                   <p>  <a href=\"";
                // line 117
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 117), "id", [], "any", false, false, false, 117)]), "html", null, true);
                echo "\" class=\"danger\">
                            <i class=\"fas fa-trash-alt\">Supprimer</i>
                        </a>
                        </p>
          
                <p>
                    <a class=\"milieu\" href=\"";
                // line 123
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete_all");
                echo "\" class=\"danger\">
                           Vider le panier
                    </a>
                </p>

        <p class=\"milieu\">
                Total ";
                // line 129
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 129, $this->source); })())), "html", null, true);
                echo " 
            </p>

   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "

</div>
<div class=\"milieu\">
    <a class=\"success\" href=\"";
            // line 137
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agenda");
            echo "\">
           Compléter votre panier
       </a>
 </div>      
      
       <hr>
      ";
            // line 143
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "user", [], "any", false, false, false, 143)) {
                // line 144
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["cartService"]) || array_key_exists("cartService", $context) ? $context["cartService"] : (function () { throw new RuntimeError('Variable "cartService" does not exist.', 144, $this->source); })()), "validateOrder", [], "method", false, false, false, 144)) {
                    // line 145
                    echo "                <form method=\"post\" action=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_purchase_confirm");
                    echo "\">
                    ";
                    // line 146
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 146, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 147
                        echo "                        <input type=\"hidden\" name=\"items[";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 147), "id", [], "any", false, false, false, 147), "html", null, true);
                        echo "][quantity]\" value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 147), "html", null, true);
                        echo "\">
                        <input type=\"hidden\" name=\"items[";
                        // line 148
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 148), "id", [], "any", false, false, false, 148), "html", null, true);
                        echo "][activity]\" value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "activity", [], "any", false, false, false, 148), "title", [], "any", false, false, false, 148), "html", null, true);
                        echo "\">
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 150
                    echo "                    <button type=\"submit\" class=\"success\">Valider la commande</button>
                </form>
            ";
                } else {
                    // line 152
                    echo " 
                 <h2> \"Stock insuffisant\"</h2>
            ";
                }
                // line 154
                echo " 
        ";
            } else {
                // line 156
                echo "            <div class=\"d-flex align-items-center\">
                <h2>Pour valider votre panier, vous devez vous inscrire </h2>
                <a href=\"";
                // line 158
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
                echo "\" class=\"secondary\">Créer un compte</a>
            </div>
            <div class=\"d-flex align-items-center\">
                <h2>Si vous avez déja un compte, vous devez vous connecter pour valider votre panier</h2>
                <a href=\"";
                // line 162
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo "\" class=\"success\">Connexion</a>
            </div>
        ";
            }
            // line 165
            echo "
    ";
        } else {
            // line 167
            echo "        <p>Aucune séance dans le panier </p> 
        <p> Si un lien de paiement vous a été envoyé , il vous faut tout d'abord vous connecter via l'email de confirmation de création de votre compte </p>
        
        <a class=\"btn btn-primary\" href=\"";
            // line 170
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agenda");
            echo "\">
            Retour aux séances
        </a>
    ";
        }
        // line 174
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
        return "cart/index.html.twig";
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
        return array (  400 => 174,  393 => 170,  388 => 167,  384 => 165,  378 => 162,  371 => 158,  367 => 156,  363 => 154,  358 => 152,  353 => 150,  343 => 148,  336 => 147,  332 => 146,  327 => 145,  324 => 144,  322 => 143,  313 => 137,  307 => 133,  297 => 129,  288 => 123,  279 => 117,  270 => 111,  261 => 105,  255 => 102,  249 => 99,  243 => 96,  237 => 93,  231 => 90,  225 => 87,  221 => 85,  217 => 84,  204 => 74,  199 => 72,  190 => 65,  177 => 58,  168 => 52,  160 => 47,  154 => 44,  149 => 42,  144 => 40,  139 => 38,  134 => 36,  129 => 34,  124 => 32,  120 => 30,  116 => 29,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}panier{% endblock %}

{% block body %}

    <h1>Mon panier</h1>
 {% if items | length > 0 %}
  


<div class=\"onlydesktop\">
    <table class=\"tableau\">
        <thead class=\"tableau\">
            <tr>
                <th>Titre</th> 
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Prix</th>
                <th>Unité</th>
                <th>Stock</th>
                <th>Total</th>
                <th> Ajouter </th>
                <th> Enlever </th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
        {% for item in items %}
         
            <tr>
                <td class=\"tableaucart\">{{ item.activity.title }}</td>
            
                <td class=\"tableaucart\">{{ item.activity.start ? item.activity.start|date('Y-m-d H:i:s') : '' }}</td>
           
                <td class=\"tableaucart\">{{ item.activity.end ? item.activity.end|date('Y-m-d H:i:s') : '' }}</td>
           
                <td class=\"tableaucart\">{{  item.activity.price | amount }}</td>
           
                <td class=\"tableaucart\">{{ item.quantity }}</td>

              <td class=\"tableaucart\">{{ item.stock }}</td>
           
                <td class=\"tableaucart\">{{ item.total | amount }}</td>

                   <td>
                        <a href=\"{{path(\"cart_add\", {'id': item.activity.id})}}\" class=\"success\">
                            🛒+
                        </a>
                    </td>
                          <td>
                        <a href=\" {{path(\"cart_decrement\", {'id': item.activity.id})}}\" class=\"warning\">
                          🛒-
                        </a>
                    </td>
                       <td>
                       
                        <a href=\"{{path(\"cart_delete\", {'id': item.activity.id})}}\" class=\"danger\">
                            <i class=\"fas fa-trash-alt\">Supprimer</i>
                        </a>
                    </td>
            </tr>
            
          {% endfor %}
      
        </tbody>


           <tfoot>
            <tr>
                <td>Total </td>
                <td class=\"text-start\">{{ total | amount }} </td>
                <td>
                    <a href=\"{{path(\"cart_delete_all\")}}\" class=\"danger\">
                           Vider le panier
                    </a>
                   
                </td>
            </tr>
        </tfoot>
    </table>
</div>
<div class=\"onlymobil\">
  {% for item in items %}
       
                <h3>Titre</h3>
                <p>{{ item.activity.title }}</p>
           
                <h3>Date de début</h3>
                <p>{{ item.activity.start ? item.activity.start|date('Y-m-d H:i:s') : '' }}</p>
           
                <h3>Date de fin</h3>
                <p>{{ item.activity.end ? item.activity.end|date('Y-m-d H:i:s') : '' }}</p>
        
                <h3>Prix</h3>
                <p class=\"tableau\">{{  item.activity.price | amount }}</p>
          
                  <h3>Unité</h3>
                <p class=\"tableau\">{{ item.quantity }}</p>
         
                <h3>Total</h3>
                <p class=\"tableau\">{{ item.total | amount }}</p>
          
                <h3>Ajouter</h3>
                   <p> <a href=\"{{path(\"cart_add\", {'id': item.activity.id})}}\" class=\"success\">
                            🛒 + 1
                        </a>
                        </p>
        
                <h3>Soustraire</h3>
                   <p>  <a href=\" {{path(\"cart_decrement\", {'id': item.activity.id})}}\" class=\"warning\">
                          🛒 - 1
                        </a>
                        </p>
         
                <h3>Supprimer</h3>
                   <p>  <a href=\"{{path(\"cart_delete\", {'id': item.activity.id})}}\" class=\"danger\">
                            <i class=\"fas fa-trash-alt\">Supprimer</i>
                        </a>
                        </p>
          
                <p>
                    <a class=\"milieu\" href=\"{{path(\"cart_delete_all\")}}\" class=\"danger\">
                           Vider le panier
                    </a>
                </p>

        <p class=\"milieu\">
                Total {{ total | amount }} 
            </p>

   {% endfor %}


</div>
<div class=\"milieu\">
    <a class=\"success\" href=\"{{path(\"app_agenda\")}}\">
           Compléter votre panier
       </a>
 </div>      
      
       <hr>
      {% if app.user %}
          {% if cartService.validateOrder() %}
                <form method=\"post\" action=\"{{ path('app_purchase_confirm') }}\">
                    {% for item in items %}
                        <input type=\"hidden\" name=\"items[{{ item.activity.id }}][quantity]\" value=\"{{ item.quantity }}\">
                        <input type=\"hidden\" name=\"items[{{ item.activity.id }}][activity]\" value=\"{{ item.activity.title }}\">
                    {% endfor %}
                    <button type=\"submit\" class=\"success\">Valider la commande</button>
                </form>
            {% else %} 
                 <h2> \"Stock insuffisant\"</h2>
            {% endif %} 
        {% else %}
            <div class=\"d-flex align-items-center\">
                <h2>Pour valider votre panier, vous devez vous inscrire </h2>
                <a href=\"{{ path('app_registration') }}\" class=\"secondary\">Créer un compte</a>
            </div>
            <div class=\"d-flex align-items-center\">
                <h2>Si vous avez déja un compte, vous devez vous connecter pour valider votre panier</h2>
                <a href=\"{{ path('app_login') }}\" class=\"success\">Connexion</a>
            </div>
        {% endif %}

    {% else %}
        <p>Aucune séance dans le panier </p> 
        <p> Si un lien de paiement vous a été envoyé , il vous faut tout d'abord vous connecter via l'email de confirmation de création de votre compte </p>
        
        <a class=\"btn btn-primary\" href=\"{{ path('app_agenda') }}\">
            Retour aux séances
        </a>
    {% endif %}

{% endblock %}", "cart/index.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\cart\\index.html.twig");
    }
}
