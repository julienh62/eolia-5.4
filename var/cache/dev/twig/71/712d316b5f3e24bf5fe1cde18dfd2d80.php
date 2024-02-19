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

/* admin/admin_agenda/detail.html.twig */
class __TwigTemplate_5b9cb9be2194bf4934d988cb8f05cc15 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_agenda/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_agenda/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/admin_agenda/detail.html.twig", 1);
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
        if ((isset($context["activitie"]) || array_key_exists("activitie", $context) ? $context["activitie"] : (function () { throw new RuntimeError('Variable "activitie" does not exist.', 7, $this->source); })())) {
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
      ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 13, $this->source); })()), "staffs", [], "any", false, false, false, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["staff"]) {
                // line 14
                echo "                    <h2> Staff:  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["staff"], "fullName", [], "any", false, false, false, 14), "html", null, true);
                echo " </h2>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['staff'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    <h3>Disponibilité ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 16, $this->source); })()), "stock", [], "any", false, false, false, 16), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 16, $this->source); })()), "stock", [], "any", false, false, false, 16) + (isset($context["sommequantitecommande"]) || array_key_exists("sommequantitecommande", $context) ? $context["sommequantitecommande"] : (function () { throw new RuntimeError('Variable "sommequantitecommande" does not exist.', 16, $this->source); })())), "html", null, true);
            echo "</h3>

    <div class =\"show-detail\">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 20
                echo "            ";
                // line 21
                echo "            ";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 21))) {
                    // line 22
                    echo "                <img class=\"imgsite\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 22), "html", null, true);
                    echo "\" alt=\"Image de ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
                    echo "\">
            ";
                }
                // line 24
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    <h2> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_agenda_list_print", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">Liste des utilisateurs à imprimer </a></h2>

    </div>

    </tr>
    <table class=\"table\">
        <tbody>


     


    
         ";
            // line 42
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
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clientTotals"]) || array_key_exists("clientTotals", $context) ? $context["clientTotals"] : (function () { throw new RuntimeError('Variable "clientTotals" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["clientName"] => $context["totals"]) {
                // line 53
                echo "                    <tr>
                        <td>";
                // line 54
                echo twig_escape_filter($this->env, $context["clientName"], "html", null, true);
                echo "</td>
                        <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["totals"], "totalQuantity", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
                     <!--   <td>";
                // line 56
                echo "</td> -->
                        <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["totals"], "userId", [], "any", false, false, false, 57), "html", null, true);
                echo "</td>

                <td>
                    <a href=\"  ";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_add_user", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 60, $this->source); })())]), "html", null, true);
                echo "\">Ajouter </a>
                </td>
                  ";
                // line 64
                echo "                      <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all_userid_show", ["id" => twig_get_attribute($this->env, $this->source, $context["totals"], "userId", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\"> ouvrir les commandes du client </a></td>
                    </tr>


                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['clientName'], $context['totals'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "



<hr>
           <tr>
            <th>Total </th>
          <td>  ";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["sommequantitecommande"]) || array_key_exists("sommequantitecommande", $context) ? $context["sommequantitecommande"] : (function () { throw new RuntimeError('Variable "sommequantitecommande" does not exist.', 76, $this->source); })()), "html", null, true);
            echo " </td>
          </tr>
  <tr>
            <th>Quantité-restante</th>
            <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 80, $this->source); })()), "stock", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
        </tr>
       
        <tr>
            <th>Titre</th>
            <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 85, $this->source); })()), "title", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
        </tr>

        <tr>
            <th>Date de début</th>
            <td>";
            // line 90
            (((isset($context["formattedStartDate"]) || array_key_exists("formattedStartDate", $context) ? $context["formattedStartDate"] : (function () { throw new RuntimeError('Variable "formattedStartDate" does not exist.', 90, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["formattedStartDate"]) || array_key_exists("formattedStartDate", $context) ? $context["formattedStartDate"] : (function () { throw new RuntimeError('Variable "formattedStartDate" does not exist.', 90, $this->source); })())), "html", null, true))) : (print ("")));
            echo "</td>
        </tr>
        <tr>
            <th>Date de fin</th>
            <td>";
            // line 94
            (((isset($context["formattedEndDate"]) || array_key_exists("formattedEndDate", $context) ? $context["formattedEndDate"] : (function () { throw new RuntimeError('Variable "formattedEndDate" does not exist.', 94, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["formattedEndDate"]) || array_key_exists("formattedEndDate", $context) ? $context["formattedEndDate"] : (function () { throw new RuntimeError('Variable "formattedEndDate" does not exist.', 94, $this->source); })())), "html", null, true))) : (print ("")));
            echo "</td>
        </tr>
        <tr>
            <th>Prix</th>
            <td>";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 98, $this->source); })()), "price", [], "any", false, false, false, 98)), "html", null, true);
            echo "</td>
        </tr>



        <tr>
            <th>Id activité</th>
            <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
        </tr>
   


        </tbody>
    </table>




    <div class=\"action\">
                

                <a href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_add_user", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 119, $this->source); })())]), "html", null, true);
            echo "\">Ajouter un utilisateur</a>

              
    </div>







           ";
        } else {
            // line 131
            echo "


  <table class=\"table\">
        <tbody>


     


    
         ";
            // line 146
            echo "        

        

<hr>
          
        <tr>
            <th>Titre</th>
            <td>";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 154, $this->source); })()), "title", [], "any", false, false, false, 154), "html", null, true);
            echo "</td>
        </tr>

        <tr>
            <th>Date de début</th>
            <td>";
            // line 159
            (((isset($context["formattedStartDate"]) || array_key_exists("formattedStartDate", $context) ? $context["formattedStartDate"] : (function () { throw new RuntimeError('Variable "formattedStartDate" does not exist.', 159, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["formattedStartDate"]) || array_key_exists("formattedStartDate", $context) ? $context["formattedStartDate"] : (function () { throw new RuntimeError('Variable "formattedStartDate" does not exist.', 159, $this->source); })())), "html", null, true))) : (print ("")));
            echo "</td>
        </tr>
        <tr>
            <th>Date de fin</th>
            <td>";
            // line 163
            (((isset($context["formattedEndDate"]) || array_key_exists("formattedEndDate", $context) ? $context["formattedEndDate"] : (function () { throw new RuntimeError('Variable "formattedEndDate" does not exist.', 163, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["formattedEndDate"]) || array_key_exists("formattedEndDate", $context) ? $context["formattedEndDate"] : (function () { throw new RuntimeError('Variable "formattedEndDate" does not exist.', 163, $this->source); })())), "html", null, true))) : (print ("")));
            echo "</td>
        </tr>
      


   


        </tbody>
    </table>









";
        }
        // line 183
        echo "




   
     
    <div class=\"action\"> 
        <a href=\"";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_agenda");
        echo "\">Retour au calendrier</a>

        <a href=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activity_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 193, $this->source); })()), "id", [], "any", false, false, false, 193)]), "html", null, true);
        echo "\">Modifier</a>      
               ";
        // line 195
        echo "    </div>





";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 203
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 204
        echo "<script>
    // Sélectionnez tous les éléments avec l'attribut data-confirm
    const confirmButtons = document.querySelectorAll('[data-confirm]');

    // Attachez un gestionnaire d'événements clic à chaque bouton
    confirmButtons.forEach(button => {
        button.addEventListener('click', function (e) {

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
        return "admin/admin_agenda/detail.html.twig";
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
        return array (  416 => 204,  406 => 203,  390 => 195,  386 => 193,  381 => 191,  371 => 183,  348 => 163,  341 => 159,  333 => 154,  323 => 146,  310 => 131,  295 => 119,  278 => 105,  268 => 98,  261 => 94,  254 => 90,  246 => 85,  238 => 80,  231 => 76,  222 => 69,  210 => 64,  205 => 60,  199 => 57,  196 => 56,  192 => 55,  188 => 54,  185 => 53,  181 => 52,  169 => 42,  152 => 25,  146 => 24,  138 => 22,  135 => 21,  133 => 20,  129 => 19,  120 => 16,  111 => 14,  107 => 13,  103 => 12,  99 => 11,  94 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.admin.html.twig' %}

{% block title %}Calendar{% endblock %}

{% block body %}

{% if activitie  %}



    <h1> Détail de la séances {{ calendar.title }} </h1>
    <h2> {{  formattedStartDate  }}</h2>
      {% for staff in calendar.staffs %}
                    <h2> Staff:  {{ staff.fullName }} </h2>
                  {% endfor %}
    <h3>Disponibilité {{ calendar.stock }}/{{ calendar.stock + sommequantitecommande }}</h3>

    <div class =\"show-detail\">
        {% for item in image %}
            {#   {{ dump(pimage) }}   #}
            {% if item.image is not null %}
                <img class=\"imgsite\" src=\"{{ item.image }}\" alt=\"Image de {{ calendar.title }}\">
            {% endif %}
        {% endfor %}
    <h2> <a href=\"{{ path('admin_agenda_list_print', {'id': calendar.id}) }}\">Liste des utilisateurs à imprimer </a></h2>

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
                    <a href=\"  {{ path('admin_calendar_add_user', {'id': id}) }}\">Ajouter </a>
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
            <td>{{ formattedEndDate ? formattedEndDate| trans : '' }}</td>
        </tr>
        <tr>
            <th>Prix</th>
            <td>{{ calendar.price | amount   }}</td>
        </tr>



        <tr>
            <th>Id activité</th>
            <td>{{ calendar.id }}</td>
        </tr>
   


        </tbody>
    </table>




    <div class=\"action\">
                

                <a href=\"{{ path('admin_calendar_add_user', {'id': id}) }}\">Ajouter un utilisateur</a>

              
    </div>







           {% else %}



  <table class=\"table\">
        <tbody>


     


    
         {#   <th>Quantité-commandée</th>
         
           {{ dump(calendarQuantityClient.quantity) }} 
           <td>{{ calendarQuantityClient.quantity }}</td> #}
        

        

<hr>
          
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
            <td>{{ formattedEndDate ? formattedEndDate| trans : '' }}</td>
        </tr>
      


   


        </tbody>
    </table>









{% endif %}





   
     
    <div class=\"action\"> 
        <a href=\"{{ path('app_admin_agenda') }}\">Retour au calendrier</a>

        <a href=\"{{ path('admin_activity_edit', {'id': calendar.id}) }}\">Modifier</a>      
               {#  {{ include('admin/calendar/_delete_form.html.twig') }}  #}
    </div>





{% endblock %}

{% block javascripts %}
<script>
    // Sélectionnez tous les éléments avec l'attribut data-confirm
    const confirmButtons = document.querySelectorAll('[data-confirm]');

    // Attachez un gestionnaire d'événements clic à chaque bouton
    confirmButtons.forEach(button => {
        button.addEventListener('click', function (e) {

            }
        });
    });
</script>
{% endblock %}", "admin/admin_agenda/detail.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\admin\\admin_agenda\\detail.html.twig");
    }
}
