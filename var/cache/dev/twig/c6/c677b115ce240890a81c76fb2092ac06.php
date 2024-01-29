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

/* calendarFilter/index.html.twig */
class __TwigTemplate_ebf55517a77131d0414bfd24b3bb61ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendarFilter/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendarFilter/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "calendarFilter/index.html.twig", 1);
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

        echo "calendar index";
        
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
        echo "<div id=\"search\">
    <form action='";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filter");
        echo "' method=\"get\">

      <div id=\"formsearch\">
         <div>
            <label for=\"valeurMin\">Nombre de place recherché minimum:</label>
            <input type=\"number\" id=\"min-price\" name=\"min\" min=\"0\" value=\"1\" max=\"100\" step=\"1\">

              <label for=\"calendar-select\">Choisis une activité:</label>
              <select name=\"category\" id=\"calendar-select\">
                  <option value=\"all\" selected>Toutes les activités</option>
                  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 21
            echo "                     ";
            if (twig_get_attribute($this->env, $this->source, $context["categorie"], "activity", [], "any", false, false, false, 21)) {
                // line 22
                echo "                       <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "title", [], "any", false, false, false, 22), "html", null, true);
                echo "\">
                         ";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "title", [], "any", false, false, false, 23), "html", null, true);
                echo "
                      </option>
                     ";
            }
            // line 26
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "              </select>    

         </div>
         <div>
              <label for=\"begin\">Date début recherche</label>
             ";
        // line 33
        echo "              <input type=\"date\" id=\"begin\" name=\"begin\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\">
             
         </div>

         <div>
            <label for=\"end\">Date fin de recherche</label>
            ";
        // line 39
        $context["nextDay"] = twig_date_modify_filter($this->env, "now", "+15 day");
        // line 40
        echo "            ";
        // line 41
        echo "              <input type=\"date\" id=\"end\" name=\"end\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["nextDay"]) || array_key_exists("nextDay", $context) ? $context["nextDay"] : (function () { throw new RuntimeError('Variable "nextDay" does not exist.', 41, $this->source); })()), "Y-m-d"), "html", null, true);
        echo "\">
         </div>
         <div>
            <button class =\"button\" type=\"submit\">Valider</button>
         </div>
        <!--    <label for=\"valeurMax\">Valeur Maximale :</label>
            <input type=\"number\" id=\"max-price\" name=\"max\" min=\"0\" value=\"30\" max=\"500\" step=\"0.1\"> -->
        <br>
      </div>
    </form>
</div>
 <!--  <label class=\"label\" for=\"recherche\">Cliquez dans la barre de recherche ci dessous pour trouver la date de votre séance: </label><!-- Notre champ de recherche avec un id
          <input type=\"date\" id=\"meeting-time\"
       name=\"meeting-time\" value=\"
       ";
        // line 56
        echo "-->
    <div class=\"onlydesktop\">

      <table class=\"tableau\">
        <thead class=\"tableau\">
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Catégorie</th>
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
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calendars"]) || array_key_exists("calendars", $context) ? $context["calendars"] : (function () { throw new RuntimeError('Variable "calendars" does not exist.', 75, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["calendar"]) {
            // line 76
            echo "            <tr>
                <td class=\"tableau\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "id", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                <td class=\"tableau\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "title", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                <td class=\"tableau\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "category", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                <td class=\"tableau\">  ";
            // line 80
            ((twig_get_attribute($this->env, $this->source, $context["calendar"], "formattedStartDate", [], "any", false, false, false, 80)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["calendar"], "formattedStartDate", [], "any", false, false, false, 80)), "html", null, true))) : (print ("")));
            echo "</td>
                <td class=\"tableau\">";
            // line 81
            ((twig_get_attribute($this->env, $this->source, $context["calendar"], "formattedEndDate", [], "any", false, false, false, 81)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["calendar"], "formattedEndDate", [], "any", false, false, false, 81)), "html", null, true))) : (print ("")));
            echo "</td>

                <td class=\"tableau\">";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, $context["calendar"], "price", [], "any", false, false, false, 83)), "html", null, true);
            echo "</td>
                <td class=\"tableau\">";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "stock", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                <td class=\"tableau\">
                    <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitie_show", ["id" => twig_get_attribute($this->env, $this->source, $context["calendar"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\">détails</a>
                </td>
                 <td class=\"tableau\">
                    <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["calendar"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\">ajouter au panier</a>
                </td>

            </tr>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 94
            echo "                 <tr>
                     <td>Aucune correspondance trouvée</td>
                 </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "          
        </tbody>
      </table>
    </div>
    <div class=\"onlymobil\">
        ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["calendars"]) || array_key_exists("calendars", $context) ? $context["calendars"] : (function () { throw new RuntimeError('Variable "calendars" does not exist.', 103, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["calendar"]) {
            // line 104
            echo "

            <h3>Catégorie</h3>
            <p>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "category", [], "any", false, false, false, 107), "html", null, true);
            echo "</p>

            <h3>Start</h3>
            <p>";
            // line 110
            ((twig_get_attribute($this->env, $this->source, $context["calendar"], "start", [], "any", false, false, false, 110)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "start", [], "any", false, false, false, 110), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</p>

            <h3>End</h3>
            <p>";
            // line 113
            ((twig_get_attribute($this->env, $this->source, $context["calendar"], "end", [], "any", false, false, false, 113)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "end", [], "any", false, false, false, 113), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</p>

            <h3>Prix</h3>
            <p>";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, $context["calendar"], "price", [], "any", false, false, false, 116)), "html", null, true);
            echo "</p>

            <h3>Stock</h3>
            <p>";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["calendar"], "stock", [], "any", false, false, false, 119), "html", null, true);
            echo "</p>





            <hr>



        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 130
            echo "
            <p>Aucune correspondance trouvée</p>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
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
        return "calendarFilter/index.html.twig";
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
        return array (  321 => 134,  312 => 130,  296 => 119,  290 => 116,  284 => 113,  278 => 110,  272 => 107,  267 => 104,  262 => 103,  255 => 98,  246 => 94,  236 => 89,  230 => 86,  225 => 84,  221 => 83,  216 => 81,  212 => 80,  208 => 79,  204 => 78,  200 => 77,  197 => 76,  192 => 75,  171 => 56,  153 => 41,  151 => 40,  149 => 39,  139 => 33,  132 => 27,  126 => 26,  120 => 23,  115 => 22,  112 => 21,  108 => 20,  95 => 10,  92 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}calendar index{% endblock %}

{% block body %}
    <h1>Les séances</h1>

{#  {{ dump(calendars) }}#}
<div id=\"search\">
    <form action='{{ path('filter') }}' method=\"get\">

      <div id=\"formsearch\">
         <div>
            <label for=\"valeurMin\">Nombre de place recherché minimum:</label>
            <input type=\"number\" id=\"min-price\" name=\"min\" min=\"0\" value=\"1\" max=\"100\" step=\"1\">

              <label for=\"calendar-select\">Choisis une activité:</label>
              <select name=\"category\" id=\"calendar-select\">
                  <option value=\"all\" selected>Toutes les activités</option>
                  {% for categorie in categories %}
                     {% if categorie.activity %}
                       <option value=\"{{ categorie.title }}\">
                         {{ categorie.title }}
                      </option>
                     {% endif %}
                  {% endfor %}
              </select>    

         </div>
         <div>
              <label for=\"begin\">Date début recherche</label>
             {#} <input type=\"datetime-local\" id=\"begin\" name=\"begin\" value=\"{{ \"now\"|date(\"Y-m-d\\\\TH:i\") }}\"> #}
              <input type=\"date\" id=\"begin\" name=\"begin\" value=\"{{ \"now\"|date(\"Y-m-d\") }}\">
             
         </div>

         <div>
            <label for=\"end\">Date fin de recherche</label>
            {% set nextDay = \"now\"|date_modify(\"+15 day\") %}
            {#}<input type=\"datetime-local\" id=\"end\" name=\"end\" value=\"{{ nextDay|date(\"Y-m-d\\\\TH:i\") }}\"> #}
              <input type=\"date\" id=\"end\" name=\"end\" value=\"{{ nextDay|date(\"Y-m-d\") }}\">
         </div>
         <div>
            <button class =\"button\" type=\"submit\">Valider</button>
         </div>
        <!--    <label for=\"valeurMax\">Valeur Maximale :</label>
            <input type=\"number\" id=\"max-price\" name=\"max\" min=\"0\" value=\"30\" max=\"500\" step=\"0.1\"> -->
        <br>
      </div>
    </form>
</div>
 <!--  <label class=\"label\" for=\"recherche\">Cliquez dans la barre de recherche ci dessous pour trouver la date de votre séance: </label><!-- Notre champ de recherche avec un id
          <input type=\"date\" id=\"meeting-time\"
       name=\"meeting-time\" value=\"
       {#}<?= date('Y-m-d H:i:s') ?>\"  required pattern=\"\\d{4}-\\d{2}-\\d{2}\"/> #}
-->
    <div class=\"onlydesktop\">

      <table class=\"tableau\">
        <thead class=\"tableau\">
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Catégorie</th>
                <th>Start</th>
                <th>End</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>action</th>
                 <th>action</th>

            </tr>
        </thead>
        <tbody>
          {% for  calendar in calendars %}
            <tr>
                <td class=\"tableau\">{{ calendar.id }}</td>
                <td class=\"tableau\">{{ calendar.title }}</td>
                <td class=\"tableau\">{{ calendar.category }}</td>
                <td class=\"tableau\">  {{ calendar.formattedStartDate ? calendar.formattedStartDate| trans : '' }}</td>
                <td class=\"tableau\">{{ calendar.formattedEndDate ? calendar.formattedEndDate| trans : '' }}</td>

                <td class=\"tableau\">{{ calendar.price | amount }}</td>
                <td class=\"tableau\">{{ calendar.stock }}</td>
                <td class=\"tableau\">
                    <a href=\"{{ path('app_activitie_show', {'id': calendar.id}) }}\">détails</a>
                </td>
                 <td class=\"tableau\">
                    <a href=\"{{ path('cart_add', {'id': calendar.id}) }}\">ajouter au panier</a>
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
        {% for calendar in calendars %}


            <h3>Catégorie</h3>
            <p>{{ calendar.category }}</p>

            <h3>Start</h3>
            <p>{{ calendar.start ? calendar.start|date('Y-m-d H:i:s') : '' }}</p>

            <h3>End</h3>
            <p>{{ calendar.end ? calendar.end|date('Y-m-d H:i:s') : '' }}</p>

            <h3>Prix</h3>
            <p>{{ calendar.price | amount }}</p>

            <h3>Stock</h3>
            <p>{{ calendar.stock }}</p>





            <hr>



        {% else %}

            <p>Aucune correspondance trouvée</p>

        {% endfor %}

    </div>

{% endblock %}
", "calendarFilter/index.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\calendarFilter\\index.html.twig");
    }
}
