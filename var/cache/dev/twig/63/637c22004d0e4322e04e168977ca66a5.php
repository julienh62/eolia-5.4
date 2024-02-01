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

/* admin/staffplanning/staffplanningshow.html.twig */
class __TwigTemplate_3993fff8324d63ffeef267e71d3dd9e2 extends Template
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
        return "base.admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/staffplanning/staffplanningshow.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/staffplanning/staffplanningshow.html.twig"));

        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/staffplanning/staffplanningshow.html.twig", 1);
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

        echo "Calendarstaffplanning";
        
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
        // line 7
        if ((isset($context["Activity"]) || array_key_exists("Activity", $context) ? $context["Activity"] : (function () { throw new RuntimeError('Variable "Activity" does not exist.', 7, $this->source); })())) {
            echo "  
 
    <h1> Détail de la séances ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
            echo " </h1>
   <h2>Date: ";
            // line 10
            ((twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 10, $this->source); })()), "start", [], "any", false, false, false, 10)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 10, $this->source); })()), "start", [], "any", false, false, false, 10), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</h2>
    <div class =\"show-detail\">
    <img class=\"imgsite\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 12, $this->source); })()), "picture", [], "any", false, false, false, 12), "html", null, true);
            echo "\" alt=\"Image de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
    <h2> <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_show_list_user_purchase", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">Liste des utilisateurs à imprimer </a></h2>

    </div>

    </tr>
    <table class=\"table\">
        <tbody>


     


    
         ";
            // line 30
            echo "        

        <tr>
            <th>Nom du client</th>
            <th>Quantité commandée</th>
          <!--  <th>numero commande client</th>-->
            <th>Id client</th>
            <th>supprimer commande client</th>
        </tr>
                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clientTotals"]) || array_key_exists("clientTotals", $context) ? $context["clientTotals"] : (function () { throw new RuntimeError('Variable "clientTotals" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["clientName"] => $context["totals"]) {
                // line 40
                echo "                    <tr>
                        <td>";
                // line 41
                echo twig_escape_filter($this->env, $context["clientName"], "html", null, true);
                echo "</td>
                        <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["totals"], "totalQuantity", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                     <!--   <td>";
                // line 43
                echo "</td> -->
                        <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["totals"], "userId", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                       <td><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_show_delete_user_purchase", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 45, $this->source); })()), "userId" => twig_get_attribute($this->env, $this->source, $context["totals"], "userId", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\" data-confirm=\"Êtes-vous sûr de vouloir supprimer la commande de cet utilisateur?\">Supprimer </a></td>
                      <td><a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all_userid_show", ["id" => twig_get_attribute($this->env, $this->source, $context["totals"], "userId", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\"> ouvrir la commande </a></td>
                    </tr>


                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['clientName'], $context['totals'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "



<hr>
           <tr>
            <th>Total </th>
          <td>  ";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["sommequantitecommande"]) || array_key_exists("sommequantitecommande", $context) ? $context["sommequantitecommande"] : (function () { throw new RuntimeError('Variable "sommequantitecommande" does not exist.', 58, $this->source); })()), "html", null, true);
            echo " </td>
          </tr>
  <tr>
            <th>Quantité-restante</th>
            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 62, $this->source); })()), "stock", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
        </tr>
       
        <tr>
            <th>Titre</th>
            <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 67, $this->source); })()), "title", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
        </tr>

        <tr>
            <th>Date de début</th>
            <td>";
            // line 72
            ((twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 72, $this->source); })()), "start", [], "any", false, false, false, 72)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 72, $this->source); })()), "start", [], "any", false, false, false, 72), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
        </tr>
        <tr>
            <th>Date de fin</th>
            <td>";
            // line 76
            ((twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 76, $this->source); })()), "end", [], "any", false, false, false, 76)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 76, $this->source); })()), "end", [], "any", false, false, false, 76), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
        </tr>
        <tr>
            <th>Prix</th>
            <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 80, $this->source); })()), "price", [], "any", false, false, false, 80)), "html", null, true);
            echo "</td>
        </tr>

        <tr>
            <th>Id activité</th>
            <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
        </tr>
   


        </tbody>
    </table>

   


    <div class=\"action\">
 

                <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_show_add_user", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 99, $this->source); })())]), "html", null, true);
            echo "\">Ajouter un utilisateur</a>

    </div>

";
        }
        // line 104
        echo "   <h1> Détail de la séance ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 104, $this->source); })()), "title", [], "any", false, false, false, 104), "html", null, true);
        echo " </h1>
     <h2>Date: ";
        // line 105
        ((twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 105, $this->source); })()), "start", [], "any", false, false, false, 105)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 105, $this->source); })()), "start", [], "any", false, false, false, 105), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</h2>
      <h2>Date: ";
        // line 106
        ((twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 106, $this->source); })()), "end", [], "any", false, false, false, 106)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 106, $this->source); })()), "end", [], "any", false, false, false, 106), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</h2>
       ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 107, $this->source); })()), "staffs", [], "any", false, false, false, 107));
        foreach ($context['_seq'] as $context["_key"] => $context["staff"]) {
            // line 108
            echo "        <h1> Staff:  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["staff"], "fullName", [], "any", false, false, false, 108), "html", null, true);
            echo " </h1>

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['staff'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "

     <div class=\"action\">
 

              

                <a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_main_calendar");
        echo "\">Retour au calendrier</a>

                <a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_staffplanning_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 120, $this->source); })()), "id", [], "any", false, false, false, 120)]), "html", null, true);
        echo "\">modifier</a>
                ";
        // line 121
        echo twig_include($this->env, $context, "admin/calendar/_delete_form.html.twig");
        echo "
    </div>  
       
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 127
        echo "<script>
    // Sélectionnez tous les éléments avec l'attribut data-confirm
    const confirmButtons = document.querySelectorAll('[data-confirm]');

    // Attachez un gestionnaire d'événements clic à chaque bouton
    confirmButtons.forEach(button => {
        button.addEventListener('click', function (e) {
            const confirmationMessage = this.getAttribute('data-confirm');
            if (!window.confirm(confirmationMessage)) {
                e.preventDefault(); // Annule le clic si l'utilisateur n'a pas confirmé
            }
        });
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/staffplanning/staffplanningshow.html.twig";
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
        return array (  324 => 127,  314 => 126,  300 => 121,  296 => 120,  291 => 118,  282 => 111,  272 => 108,  268 => 107,  264 => 106,  260 => 105,  255 => 104,  247 => 99,  230 => 85,  222 => 80,  215 => 76,  208 => 72,  200 => 67,  192 => 62,  185 => 58,  176 => 51,  165 => 46,  161 => 45,  157 => 44,  154 => 43,  150 => 42,  146 => 41,  143 => 40,  139 => 39,  128 => 30,  112 => 13,  106 => 12,  101 => 10,  97 => 9,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.admin.html.twig' %}

{% block title %}Calendarstaffplanning{% endblock %}

{% block body %}

{% if Activity  %}  
 
    <h1> Détail de la séances {{ calendar.title }} </h1>
   <h2>Date: {{ calendar.start ? calendar.start|date('Y-m-d H:i:s') : '' }}</h2>
    <div class =\"show-detail\">
    <img class=\"imgsite\" src=\"{{ calendar.picture }}\" alt=\"Image de {{ calendar.title }}\">
    <h2> <a href=\"{{ path('admin_calendar_show_list_user_purchase', {'id': calendar.id}) }}\">Liste des utilisateurs à imprimer </a></h2>

    </div>

    </tr>
    <table class=\"table\">
        <tbody>


     


    
         {#   <th>Quantité-commandée</th>
         
           {{ dump(calendarQuantityClient.quantity) }} 
           <td>{{ calendarQuantityClient.quantity }}</td> #}
        

        <tr>
            <th>Nom du client</th>
            <th>Quantité commandée</th>
          <!--  <th>numero commande client</th>-->
            <th>Id client</th>
            <th>supprimer commande client</th>
        </tr>
                {% for clientName, totals in clientTotals %}
                    <tr>
                        <td>{{ clientName }}</td>
                        <td>{{totals.totalQuantity }}</td>
                     <!--   <td>{#  {{  totals.purchaseId}}#}</td> -->
                        <td>{{  totals.userId}}</td>
                       <td><a href=\"{{ path('admin_calendar_show_delete_user_purchase', {'id':id, 'userId':totals.userId} ) }}\" data-confirm=\"Êtes-vous sûr de vouloir supprimer la commande de cet utilisateur?\">Supprimer </a></td>
                      <td><a href=\"{{ path('all_userid_show', { 'id':totals.userId }) }}\"> ouvrir la commande </a></td>
                    </tr>


                        {% endfor %}




<hr>
           <tr>
            <th>Total </th>
          <td>  {{ sommequantitecommande }} </td>
          </tr>
  <tr>
            <th>Quantité-restante</th>
            <td>{{ calendar.stock }}</td>
        </tr>
       
        <tr>
            <th>Titre</th>
            <td>{{ calendar.title }}</td>
        </tr>

        <tr>
            <th>Date de début</th>
            <td>{{ calendar.start ? calendar.start|date('Y-m-d H:i:s') : '' }}</td>
        </tr>
        <tr>
            <th>Date de fin</th>
            <td>{{ calendar.end ? calendar.end|date('Y-m-d H:i:s') : '' }}</td>
        </tr>
        <tr>
            <th>Prix</th>
            <td>{{ calendar.price | amount }}</td>
        </tr>

        <tr>
            <th>Id activité</th>
            <td>{{ calendar.id }}</td>
        </tr>
   


        </tbody>
    </table>

   


    <div class=\"action\">
 

                <a href=\"{{ path('admin_calendar_show_add_user', {'id': id}) }}\">Ajouter un utilisateur</a>

    </div>

{% endif %}
   <h1> Détail de la séance {{ calendar.title }} </h1>
     <h2>Date: {{ calendar.start ? calendar.start|date('Y-m-d H:i:s') : '' }}</h2>
      <h2>Date: {{ calendar.end ? calendar.end|date('Y-m-d H:i:s') : '' }}</h2>
       {% for staff in calendar.staffs %}
        <h1> Staff:  {{ staff.fullName }} </h1>

      {% endfor %}


     <div class=\"action\">
 

              

                <a href=\"{{ path('admin_main_calendar') }}\">Retour au calendrier</a>

                <a href=\"{{ path('admin_staffplanning_edit', {'id': calendar.id}) }}\">modifier</a>
                {{ include('admin/calendar/_delete_form.html.twig') }}
    </div>  
       
{% endblock %}

{% block javascripts %}
<script>
    // Sélectionnez tous les éléments avec l'attribut data-confirm
    const confirmButtons = document.querySelectorAll('[data-confirm]');

    // Attachez un gestionnaire d'événements clic à chaque bouton
    confirmButtons.forEach(button => {
        button.addEventListener('click', function (e) {
            const confirmationMessage = this.getAttribute('data-confirm');
            if (!window.confirm(confirmationMessage)) {
                e.preventDefault(); // Annule le clic si l'utilisateur n'a pas confirmé
            }
        });
    });
</script>
{% endblock %}", "admin/staffplanning/staffplanningshow.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\admin\\staffplanning\\staffplanningshow.html.twig");
    }
}
