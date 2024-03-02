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
        echo " <h2>Type de creneau  ; ";
        echo twig_escape_filter($this->env, (isset($context["typeCalendar"]) || array_key_exists("typeCalendar", $context) ? $context["typeCalendar"] : (function () { throw new RuntimeError('Variable "typeCalendar" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h2>
";
        // line 7
        if ((isset($context["activitie"]) || array_key_exists("activitie", $context) ? $context["activitie"] : (function () { throw new RuntimeError('Variable "activitie" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "
    <h1>Détail de la séance ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
            echo "</h1>
   
    <h2>";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["formattedStartDate"]) || array_key_exists("formattedStartDate", $context) ? $context["formattedStartDate"] : (function () { throw new RuntimeError('Variable "formattedStartDate" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "</h2>
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 12, $this->source); })()), "staffs", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["staff"]) {
                // line 13
                echo "        <h2> Staff: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["staff"], "fullName", [], "any", false, false, false, 13), "html", null, true);
                echo " </h2>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['staff'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    <h3>Disponibilité ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 15, $this->source); })()), "stock", [], "any", false, false, false, 15), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 15, $this->source); })()), "stock", [], "any", false, false, false, 15) + (isset($context["sommequantitecommande"]) || array_key_exists("sommequantitecommande", $context) ? $context["sommequantitecommande"] : (function () { throw new RuntimeError('Variable "sommequantitecommande" does not exist.', 15, $this->source); })())), "html", null, true);
            echo "</h3>

    <div class=\"show-detail\">
        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                echo "            ";
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 19))) {
                    // line 20
                    echo "                <img class=\"imgsite\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 20), "html", null, true);
                    echo "\" alt=\"Image de ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), "html", null, true);
                    echo "\">
            ";
                }
                // line 22
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        <h2><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_agenda_list_print", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">Liste des utilisateurs à imprimer</a></h2>
    </div>

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Nom du client</th>
            <th>Quantité commandée</th>
            <th>Id client</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clientTotals"]) || array_key_exists("clientTotals", $context) ? $context["clientTotals"] : (function () { throw new RuntimeError('Variable "clientTotals" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["clientName"] => $context["totals"]) {
                // line 36
                echo "            <tr>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, $context["clientName"], "html", null, true);
                echo "</td>
                <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["totals"], "totalQuantity", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["totals"], "userId", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                <td><a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_add_user", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 40, $this->source); })())]), "html", null, true);
                echo "\">Ajouter </a></td>
                <td><a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all_userid_show", ["id" => twig_get_attribute($this->env, $this->source, $context["totals"], "userId", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\"> ouvrir les commandes du client </a></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['clientName'], $context['totals'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        <hr>
        <tr>
            <th>Total </th>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["sommequantitecommande"]) || array_key_exists("sommequantitecommande", $context) ? $context["sommequantitecommande"] : (function () { throw new RuntimeError('Variable "sommequantitecommande" does not exist.', 47, $this->source); })()), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th>Quantité-restante</th>
            <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 51, $this->source); })()), "stock", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th>Titre</th>
            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 55, $this->source); })()), "title", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th>Date de début</th>
            <td>";
            // line 59
            (((isset($context["formattedStartDate"]) || array_key_exists("formattedStartDate", $context) ? $context["formattedStartDate"] : (function () { throw new RuntimeError('Variable "formattedStartDate" does not exist.', 59, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["formattedStartDate"]) || array_key_exists("formattedStartDate", $context) ? $context["formattedStartDate"] : (function () { throw new RuntimeError('Variable "formattedStartDate" does not exist.', 59, $this->source); })())), "html", null, true))) : (print ("")));
            echo "</td>
        </tr>
        <tr>
            <th>Date de fin</th>
            <td>";
            // line 63
            (((isset($context["formattedEndDate"]) || array_key_exists("formattedEndDate", $context) ? $context["formattedEndDate"] : (function () { throw new RuntimeError('Variable "formattedEndDate" does not exist.', 63, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["formattedEndDate"]) || array_key_exists("formattedEndDate", $context) ? $context["formattedEndDate"] : (function () { throw new RuntimeError('Variable "formattedEndDate" does not exist.', 63, $this->source); })())), "html", null, true))) : (print ("")));
            echo "</td>
        </tr>
        <tr>
            <th>Prix</th>
            <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 67, $this->source); })()), "price", [], "any", false, false, false, 67)), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th>Id activité</th>
            <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
        </tr>
        </tbody>
    </table>

    <div class=\"action\">
        <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_calendar_add_user", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 77, $this->source); })())]), "html", null, true);
            echo "\">Ajouter un utilisateur</a>
    </div>

    <div class=\"action\">
        <a href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_agenda");
            echo "\">Retour au calendrier</a>
        <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_activity_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\">Modifier</a>
        ";
            // line 83
            echo twig_include($this->env, $context, "admin/calendar/_delete_form.html.twig");
            echo "
    </div>

";
        } else {
            // line 87
            echo "
    <table class=\"table\">
        <tbody>
        <tr>
            <th>Titre</th>
            <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 92, $this->source); })()), "title", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <th>Date de début</th>
            <td>";
            // line 96
            (((isset($context["formattedStartDate"]) || array_key_exists("formattedStartDate", $context) ? $context["formattedStartDate"] : (function () { throw new RuntimeError('Variable "formattedStartDate" does not exist.', 96, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["formattedStartDate"]) || array_key_exists("formattedStartDate", $context) ? $context["formattedStartDate"] : (function () { throw new RuntimeError('Variable "formattedStartDate" does not exist.', 96, $this->source); })())), "html", null, true))) : (print ("")));
            echo "</td>
        </tr>
        <tr>
            <th>Date de fin</th>
            <td>";
            // line 100
            (((isset($context["formattedEndDate"]) || array_key_exists("formattedEndDate", $context) ? $context["formattedEndDate"] : (function () { throw new RuntimeError('Variable "formattedEndDate" does not exist.', 100, $this->source); })())) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["formattedEndDate"]) || array_key_exists("formattedEndDate", $context) ? $context["formattedEndDate"] : (function () { throw new RuntimeError('Variable "formattedEndDate" does not exist.', 100, $this->source); })())), "html", null, true))) : (print ("")));
            echo "</td>
        </tr>
        </tbody>
    </table>

    <div class=\"action\">
        <a href=\"";
            // line 106
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_agenda");
            echo "\">Retour au calendrier</a>
        ";
            // line 107
            if ( !(isset($context["activitie"]) || array_key_exists("activitie", $context) ? $context["activitie"] : (function () { throw new RuntimeError('Variable "activitie" does not exist.', 107, $this->source); })())) {
                // line 108
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_staff_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108)]), "html", null, true);
                echo "\">Modifier staffSchedule</a>
        ";
            }
            // line 110
            echo "        ";
            echo twig_include($this->env, $context, "admin/calendar/_delete_form.html.twig");
            echo "
    </div>

";
        }
        // line 114
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
        return array (  326 => 114,  318 => 110,  312 => 108,  310 => 107,  306 => 106,  297 => 100,  290 => 96,  283 => 92,  276 => 87,  269 => 83,  265 => 82,  261 => 81,  254 => 77,  245 => 71,  238 => 67,  231 => 63,  224 => 59,  217 => 55,  210 => 51,  203 => 47,  198 => 44,  189 => 41,  185 => 40,  181 => 39,  177 => 38,  173 => 37,  170 => 36,  166 => 35,  150 => 23,  144 => 22,  136 => 20,  133 => 19,  129 => 18,  120 => 15,  111 => 13,  107 => 12,  103 => 11,  98 => 9,  95 => 8,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.admin.html.twig' %}

{% block title %}Calendar{% endblock %}

{% block body %}
 <h2>Type de creneau  ; {{ typeCalendar }}</h2>
{% if activitie  %}

    <h1>Détail de la séance {{ calendar.title }}</h1>
   
    <h2>{{ formattedStartDate }}</h2>
    {% for staff in calendar.staffs %}
        <h2> Staff: {{ staff.fullName }} </h2>
    {% endfor %}
    <h3>Disponibilité {{ calendar.stock }}/{{ calendar.stock + sommequantitecommande }}</h3>

    <div class=\"show-detail\">
        {% for item in image %}
            {% if item.image is not null %}
                <img class=\"imgsite\" src=\"{{ item.image }}\" alt=\"Image de {{ calendar.title }}\">
            {% endif %}
        {% endfor %}
        <h2><a href=\"{{ path('admin_agenda_list_print', {'id': calendar.id}) }}\">Liste des utilisateurs à imprimer</a></h2>
    </div>

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Nom du client</th>
            <th>Quantité commandée</th>
            <th>Id client</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        {% for clientName, totals in clientTotals %}
            <tr>
                <td>{{ clientName }}</td>
                <td>{{ totals.totalQuantity }}</td>
                <td>{{ totals.userId }}</td>
                <td><a href=\"{{ path('admin_calendar_add_user', {'id': id}) }}\">Ajouter </a></td>
                <td><a href=\"{{ path('all_userid_show', {'id': totals.userId}) }}\"> ouvrir les commandes du client </a></td>
            </tr>
        {% endfor %}
        <hr>
        <tr>
            <th>Total </th>
            <td>{{ sommequantitecommande }}</td>
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
            <td>{{ formattedStartDate ? formattedStartDate|trans : '' }}</td>
        </tr>
        <tr>
            <th>Date de fin</th>
            <td>{{ formattedEndDate ? formattedEndDate|trans : '' }}</td>
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
        <a href=\"{{ path('admin_calendar_add_user', {'id': id}) }}\">Ajouter un utilisateur</a>
    </div>

    <div class=\"action\">
        <a href=\"{{ path('app_admin_agenda') }}\">Retour au calendrier</a>
        <a href=\"{{ path('admin_activity_edit', {'id': calendar.id}) }}\">Modifier</a>
        {{ include('admin/calendar/_delete_form.html.twig') }}
    </div>

{% else %}

    <table class=\"table\">
        <tbody>
        <tr>
            <th>Titre</th>
            <td>{{ calendar.title }}</td>
        </tr>
        <tr>
            <th>Date de début</th>
            <td>{{ formattedStartDate ? formattedStartDate|trans : '' }}</td>
        </tr>
        <tr>
            <th>Date de fin</th>
            <td>{{ formattedEndDate ? formattedEndDate|trans : '' }}</td>
        </tr>
        </tbody>
    </table>

    <div class=\"action\">
        <a href=\"{{ path('app_admin_agenda') }}\">Retour au calendrier</a>
        {% if not activitie %}
            <a href=\"{{ path('admin_staff_edit', {'id': calendar.id}) }}\">Modifier staffSchedule</a>
        {% endif %}
        {{ include('admin/calendar/_delete_form.html.twig') }}
    </div>

{% endif %}

{% endblock %}
", "admin/admin_agenda/detail.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\admin\\admin_agenda\\detail.html.twig");
    }
}
