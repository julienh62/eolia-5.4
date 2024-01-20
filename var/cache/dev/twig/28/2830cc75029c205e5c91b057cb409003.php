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

/* activitie/index.html.twig */
class __TwigTemplate_00218136ef49fb755a1310c2f6236629 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitie/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitie/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activitie/index.html.twig", 1);
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

        echo "activitie index";
        
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

         ";
        // line 28
        echo "
         </div>
         <div>
              <label for=\"begin\">Date début recherche</label>
              <input type=\"datetime-local\" id=\"begin\" name=\"begin\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d\\TH:i"), "html", null, true);
        echo "\">
         </div>

         <div>
            <label for=\"end\">Date fin de recherche</label>
            ";
        // line 37
        $context["nextDay"] = twig_date_modify_filter($this->env, "now", "+15 day");
        // line 38
        echo "            <input type=\"datetime-local\" id=\"end\" name=\"end\" value=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["nextDay"]) || array_key_exists("nextDay", $context) ? $context["nextDay"] : (function () { throw new RuntimeError('Variable "nextDay" does not exist.', 38, $this->source); })()), "Y-m-d\\TH:i"), "html", null, true);
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
        // line 54
        echo "-->
    <div class=\"onlydesktop\">

      <table class=\"tableau\">
        <thead class=\"tableau\">
            <tr>
                <th>Id</th>
                <th>Titre</th>
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
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 72, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activitie"]) {
            // line 73
            echo "            <tr>
                <td class=\"tableau\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitie"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                <td class=\"tableau\">";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitie"], "title", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                <td class=\"tableau\">  ";
            // line 76
            ((twig_get_attribute($this->env, $this->source, $context["activitie"], "formattedStartDate", [], "any", false, false, false, 76)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["activitie"], "formattedStartDate", [], "any", false, false, false, 76)), "html", null, true))) : (print ("")));
            echo "</td>
                <td class=\"tableau\">";
            // line 77
            ((twig_get_attribute($this->env, $this->source, $context["activitie"], "formattedEndDate", [], "any", false, false, false, 77)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["activitie"], "formattedEndDate", [], "any", false, false, false, 77)), "html", null, true))) : (print ("")));
            echo "</td>

                <td class=\"tableau\">";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, $context["activitie"], "price", [], "any", false, false, false, 79)), "html", null, true);
            echo "</td>
                <td class=\"tableau\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitie"], "stock", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                <td class=\"tableau\">
                    <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitie_show", ["id" => twig_get_attribute($this->env, $this->source, $context["activitie"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\">détails</a>
                </td>
                 <td class=\"tableau\">
                    <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["activitie"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\">ajouter au panier</a>
                </td>

            </tr>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "                 <tr>
                     <td>Aucune correspondance trouvée</td>
                 </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activitie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "          
        </tbody>
      </table>
    </div>
    <div class=\"onlymobil\">
        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activities"]) || array_key_exists("activities", $context) ? $context["activities"] : (function () { throw new RuntimeError('Variable "activities" does not exist.', 99, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activitie"]) {
            // line 100
            echo "

          

            <h3>Start</h3>
            <p>";
            // line 105
            ((twig_get_attribute($this->env, $this->source, $context["activitie"], "start", [], "any", false, false, false, 105)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitie"], "start", [], "any", false, false, false, 105), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</p>

            <h3>End</h3>
            <p>";
            // line 108
            ((twig_get_attribute($this->env, $this->source, $context["activitie"], "end", [], "any", false, false, false, 108)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitie"], "end", [], "any", false, false, false, 108), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</p>

            <h3>Prix</h3>
            <p>";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, $context["activitie"], "price", [], "any", false, false, false, 111)), "html", null, true);
            echo "</p>

            <h3>Stock</h3>
            <p>";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitie"], "stock", [], "any", false, false, false, 114), "html", null, true);
            echo "</p>





            <hr>



        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 125
            echo "
            <p>Aucune correspondance trouvée</p>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activitie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
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
        return "activitie/index.html.twig";
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
        return array (  281 => 129,  272 => 125,  256 => 114,  250 => 111,  244 => 108,  238 => 105,  231 => 100,  226 => 99,  219 => 94,  210 => 90,  200 => 85,  194 => 82,  189 => 80,  185 => 79,  180 => 77,  176 => 76,  172 => 75,  168 => 74,  165 => 73,  160 => 72,  140 => 54,  121 => 38,  119 => 37,  111 => 32,  105 => 28,  95 => 10,  92 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}activitie index{% endblock %}

{% block body %}
    <h1>Les séances</h1>

{#  {{ dump(activities) }}#}
<div id=\"search\">
    <form action='{{ path('filter') }}' method=\"get\">

      <div id=\"formsearch\">
         <div>
            <label for=\"valeurMin\">Nombre de place recherché minimum:</label>
            <input type=\"number\" id=\"min-price\" name=\"min\" min=\"0\" value=\"1\" max=\"100\" step=\"1\">

         {#}    <label for=\"activitie-select\">Choisis une activité:</label>
              <select name=\"category\" id=\"activitie-select\">
                  <option value=\"all\" selected>Toutes les activités</option>
                  {% for categorie in categories %}
                     {% if categorie.activitie %}
                       <option value=\"{{ categorie.title }}\">
                         {{ categorie.title }}
                      </option>
                     {% endif %}
                  {% endfor %}
              </select>     #}

         </div>
         <div>
              <label for=\"begin\">Date début recherche</label>
              <input type=\"datetime-local\" id=\"begin\" name=\"begin\" value=\"{{ \"now\"|date(\"Y-m-d\\\\TH:i\") }}\">
         </div>

         <div>
            <label for=\"end\">Date fin de recherche</label>
            {% set nextDay = \"now\"|date_modify(\"+15 day\") %}
            <input type=\"datetime-local\" id=\"end\" name=\"end\" value=\"{{ nextDay|date(\"Y-m-d\\\\TH:i\") }}\">

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
                <th>Start</th>
                <th>End</th>
                <th>Prix</th>
                <th>Stock</th>
                <th>action</th>
                 <th>action</th>

            </tr>
        </thead>
        <tbody>
          {% for  activitie in activities %}
            <tr>
                <td class=\"tableau\">{{ activitie.id }}</td>
                <td class=\"tableau\">{{ activitie.title }}</td>
                <td class=\"tableau\">  {{ activitie.formattedStartDate ? activitie.formattedStartDate| trans : '' }}</td>
                <td class=\"tableau\">{{ activitie.formattedEndDate ? activitie.formattedEndDate| trans : '' }}</td>

                <td class=\"tableau\">{{ activitie.price | amount }}</td>
                <td class=\"tableau\">{{ activitie.stock }}</td>
                <td class=\"tableau\">
                    <a href=\"{{ path('app_activitie_show', {'id': activitie.id}) }}\">détails</a>
                </td>
                 <td class=\"tableau\">
                    <a href=\"{{ path('cart_add', {'id': activitie.id}) }}\">ajouter au panier</a>
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
        {% for activitie in activities %}


          

            <h3>Start</h3>
            <p>{{ activitie.start ? activitie.start|date('Y-m-d H:i:s') : '' }}</p>

            <h3>End</h3>
            <p>{{ activitie.end ? activitie.end|date('Y-m-d H:i:s') : '' }}</p>

            <h3>Prix</h3>
            <p>{{ activitie.price | amount }}</p>

            <h3>Stock</h3>
            <p>{{ activitie.stock }}</p>





            <hr>



        {% else %}

            <p>Aucune correspondance trouvée</p>

        {% endfor %}

    </div>

{% endblock %}
", "activitie/index.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\activitie\\index.html.twig");
    }
}
