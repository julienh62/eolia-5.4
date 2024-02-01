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

/* admin/admin_calendar/show_user.html.twig */
class __TwigTemplate_7b93d2b3b5acedf2f13f01ea38a8de31 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_calendar/show_user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_calendar/show_user.html.twig"));

        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/admin_calendar/show_user.html.twig", 1);
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

        echo "Calendar";
        
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
            // line 8
            echo "


    <h1> Détail de la séances ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
            echo " </h1>
    <h2> ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["formattedStartDate"]) || array_key_exists("formattedStartDate", $context) ? $context["formattedStartDate"] : (function () { throw new RuntimeError('Variable "formattedStartDate" does not exist.', 12, $this->source); })()), "html", null, true);
            echo "</h2>
    <h3>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 13, $this->source); })()), "stock", [], "any", false, false, false, 13), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 13, $this->source); })()), "stock", [], "any", false, false, false, 13) + (isset($context["sommequantitecommande"]) || array_key_exists("sommequantitecommande", $context) ? $context["sommequantitecommande"] : (function () { throw new RuntimeError('Variable "sommequantitecommande" does not exist.', 13, $this->source); })())), "html", null, true);
            echo "</h3>

    <div class =\"show-detail\">
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["picture"]) || array_key_exists("picture", $context) ? $context["picture"] : (function () { throw new RuntimeError('Variable "picture" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                echo "            ";
                // line 18
                echo "            ";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["item"], "picture", [], "any", false, false, false, 18))) {
                    // line 19
                    echo "                <img class=\"imgsite\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "picture", [], "any", false, false, false, 19), "html", null, true);
                    echo "\" alt=\"Image de ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), "html", null, true);
                    echo "\">
            ";
                }
                // line 21
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    <h2> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_show_list_user_purchase", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">Liste des utilisateurs à imprimer </a></h2>

    </div>

    </tr>
    <table class=\"table\">
        <tbody>


     


    
         ";
            // line 39
            echo "        

        <tr>
            <th>Nom du client</th>
            <th>Quantité commandée</th>
          <!--  <th>numero commande client</th>-->
            <th>Id client</th>
           <th>Action</th> 
           <th>Action</th> 
        </tr>
                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clientTotals"]) || array_key_exists("clientTotals", $context) ? $context["clientTotals"] : (function () { throw new RuntimeError('Variable "clientTotals" does not exist.', 49, $this->source); })()));
            foreach ($context['_seq'] as $context["clientName"] => $context["totals"]) {
                // line 50
                echo "                    <tr>
                        <td>";
                // line 51
                echo twig_escape_filter($this->env, $context["clientName"], "html", null, true);
                echo "</td>
                        <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["totals"], "totalQuantity", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
                     <!--   <td>";
                // line 53
                echo "</td> -->
                        <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["totals"], "userId", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>

                <td>
                    <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_show_add_user", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 57, $this->source); })())]), "html", null, true);
                echo "\">Ajouter </a>
                </td>
                  ";
                // line 61
                echo "                      <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all_userid_show", ["id" => twig_get_attribute($this->env, $this->source, $context["totals"], "userId", [], "any", false, false, false, 61)]), "html", null, true);
                echo "\"> ouvrir les commandes du client </a></td>
                    </tr>


                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['clientName'], $context['totals'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "



<hr>
           <tr>
            <th>Total </th>
          <td>  ";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["sommequantitecommande"]) || array_key_exists("sommequantitecommande", $context) ? $context["sommequantitecommande"] : (function () { throw new RuntimeError('Variable "sommequantitecommande" does not exist.', 73, $this->source); })()), "html", null, true);
            echo " </td>
          </tr>
  <tr>
            <th>Quantité-restante</th>
            <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 77, $this->source); })()), "stock", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
        </tr>
       
        <tr>
            <th>Titre</th>
            <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 82, $this->source); })()), "title", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
        </tr>

        <tr>
            <th>Date de début</th>
            <td>";
            // line 87
            (((isset($context["formattedStartDate"]) || array_key_exists("formattedStartDate", $context) ? $context["formattedStartDate"] : (function () { throw new RuntimeError('Variable "formattedStartDate" does not exist.', 87, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["formattedStartDate"]) || array_key_exists("formattedStartDate", $context) ? $context["formattedStartDate"] : (function () { throw new RuntimeError('Variable "formattedStartDate" does not exist.', 87, $this->source); })())), "html", null, true))) : (print ("")));
            echo "</td>
        </tr>
        <tr>
            <th>Date de fin</th>
            <td>";
            // line 91
            (((isset($context["formattedEndDate"]) || array_key_exists("formattedEndDate", $context) ? $context["formattedEndDate"] : (function () { throw new RuntimeError('Variable "formattedEndDate" does not exist.', 91, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["formattedStartDate"]) || array_key_exists("formattedStartDate", $context) ? $context["formattedStartDate"] : (function () { throw new RuntimeError('Variable "formattedStartDate" does not exist.', 91, $this->source); })())), "html", null, true))) : (print ("")));
            echo "</td>
        </tr>
        <tr>
            <th>Prix</th>
            <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount((isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 95, $this->source); })())), "html", null, true);
            echo "</td>
        </tr>



        <tr>
            <th>Id activité</th>
            <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 102, $this->source); })()), "id", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
        </tr>
   


        </tbody>
    </table>




    <div class=\"action\">
 

                <a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_show_add_user", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 116, $this->source); })())]), "html", null, true);
            echo "\">Ajouter un utilisateur</a>

              
    </div>

";
        }
        // line 122
        echo "


   <h1> Détail de la séances ";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 125, $this->source); })()), "title", [], "any", false, false, false, 125), "html", null, true);
        echo " </h1>
     <h2>Date: ";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["formattedStartDate"]) || array_key_exists("formattedStartDate", $context) ? $context["formattedStartDate"] : (function () { throw new RuntimeError('Variable "formattedStartDate" does not exist.', 126, $this->source); })()), "html", null, true);
        echo "</h2>
      <h2>Date: ";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["formattedEndDate"]) || array_key_exists("formattedEndDate", $context) ? $context["formattedEndDate"] : (function () { throw new RuntimeError('Variable "formattedEndDate" does not exist.', 127, $this->source); })()), "html", null, true);
        echo "</h2>
       ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 128, $this->source); })()), "staffs", [], "any", false, false, false, 128));
        foreach ($context['_seq'] as $context["_key"] => $context["staff"]) {
            // line 129
            echo "        <h1> Staff:  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["staff"], "fullName", [], "any", false, false, false, 129), "html", null, true);
            echo " </h1>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['staff'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "    <div class=\"action\"> 
        <a href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_main_calendar");
        echo "\">Retour au calendrier</a>

        <a href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 134, $this->source); })()), "id", [], "any", false, false, false, 134)]), "html", null, true);
        echo "\">modifier</a>
                ";
        // line 135
        echo twig_include($this->env, $context, "admin/calendar/_delete_form.html.twig");
        echo "  
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 140
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 141
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
        return "admin/admin_calendar/show_user.html.twig";
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
        return array (  356 => 141,  346 => 140,  332 => 135,  328 => 134,  323 => 132,  320 => 131,  311 => 129,  307 => 128,  303 => 127,  299 => 126,  295 => 125,  290 => 122,  281 => 116,  264 => 102,  254 => 95,  247 => 91,  240 => 87,  232 => 82,  224 => 77,  217 => 73,  208 => 66,  196 => 61,  191 => 57,  185 => 54,  182 => 53,  178 => 52,  174 => 51,  171 => 50,  167 => 49,  155 => 39,  138 => 22,  132 => 21,  124 => 19,  121 => 18,  119 => 17,  115 => 16,  107 => 13,  103 => 12,  99 => 11,  94 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.admin.html.twig' %}

{% block title %}Calendar{% endblock %}

{% block body %}

{% if Activity  %}



    <h1> Détail de la séances {{ calendar.title }} </h1>
    <h2> {{  formattedStartDate  }}</h2>
    <h3>{{ calendar.stock }}/{{ calendar.stock + sommequantitecommande }}</h3>

    <div class =\"show-detail\">
        {% for item in picture %}
            {#   {{ dump(picture) }}   #}
            {% if item.picture is not null %}
                <img class=\"imgsite\" src=\"{{ item.picture }}\" alt=\"Image de {{ calendar.title }}\">
            {% endif %}
        {% endfor %}
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
           <th>Action</th> 
           <th>Action</th> 
        </tr>
                {% for clientName, totals in clientTotals %}
                    <tr>
                        <td>{{ clientName }}</td>
                        <td>{{totals.totalQuantity }}</td>
                     <!--   <td>{#  {{  totals.purchaseId}}#}</td> -->
                        <td>{{  totals.userId}}</td>

                <td>
                    <a href=\"{{ path('admin_calendar_show_add_user', {'id': id}) }}\">Ajouter </a>
                </td>
                  {#     <td><a href=\"{{ path('delete_user_purchase', {'id':id, 'userId':totals.userId} ) }}\" data-confirm=
                  \"Êtes-vous sûr de vouloir supprimer la commande de cet utilisateur?\">Supprimer </a></td>#}
                      <td><a href=\"{{ path('all_userid_show', { 'id':totals.userId }) }}\"> ouvrir les commandes du client </a></td>
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
            <td>{{ formattedStartDate ? formattedStartDate| trans : ''  }}</td>
        </tr>
        <tr>
            <th>Date de fin</th>
            <td>{{ formattedEndDate ? formattedStartDate| trans : '' }}</td>
        </tr>
        <tr>
            <th>Prix</th>
            <td>{{ price | amount   }}</td>
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



   <h1> Détail de la séances {{ calendar.title }} </h1>
     <h2>Date: {{  formattedStartDate  }}</h2>
      <h2>Date: {{  formattedEndDate  }}</h2>
       {% for staff in calendar.staffs %}
        <h1> Staff:  {{ staff.fullName }} </h1>
      {% endfor %}
    <div class=\"action\"> 
        <a href=\"{{ path('admin_main_calendar') }}\">Retour au calendrier</a>

        <a href=\"{{ path('admin_calendar_edit', {'id': calendar.id}) }}\">modifier</a>
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
{% endblock %}", "admin/admin_calendar/show_user.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\admin\\admin_calendar\\show_user.html.twig");
    }
}
