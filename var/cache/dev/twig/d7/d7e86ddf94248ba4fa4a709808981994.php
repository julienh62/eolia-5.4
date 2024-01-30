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

/* admin/admin_calendar/show_userlist.html.twig */
class __TwigTemplate_d4308515c4c8214626c00b51f9ec534f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_calendar/show_userlist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_calendar/show_userlist.html.twig"));

        // line 1
        echo "


";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 68
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

 
    <h1>  ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), "html", null, true);
        echo " </h1>
   <h2>Date: ";
        // line 9
        ((twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 9, $this->source); })()), "start", [], "any", false, false, false, 9)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 9, $this->source); })()), "start", [], "any", false, false, false, 9), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</h2>
  <h2> ";
        // line 10
        ((twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 10, $this->source); })()), "end", [], "any", false, false, false, 10)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 10, $this->source); })()), "end", [], "any", false, false, false, 10), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo " </h2>




    <table class=\"table\">
        <tbody>


      

    
         ";
        // line 26
        echo "        

  <tr>
    <th style=\"font-size: 22px; text-align: center;\">Nom du client</th>
    <th style=\"font-size: 22px; text-align: center;\">Quantité commandée</th>
</tr>
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientTotals"]) || array_key_exists("clientTotals", $context) ? $context["clientTotals"] : (function () { throw new RuntimeError('Variable "clientTotals" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["clientName"] => $context["totals"]) {
            // line 33
            echo "    <tr>
        <td style=\"font-size: 22px; text-align: center;\">";
            // line 34
            echo twig_escape_filter($this->env, $context["clientName"], "html", null, true);
            echo "</td>
        <td style=\"font-size: 22px; text-align: center;\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["totals"], "totalQuantity", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['clientName'], $context['totals'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
<hr>

<tr>
    <th style=\"font-size: 22px; text-align: center;\">Total </th>
    <td style=\"font-size: 22px; text-align: center;\">";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["sommequantitecommande"]) || array_key_exists("sommequantitecommande", $context) ? $context["sommequantitecommande"] : (function () { throw new RuntimeError('Variable "sommequantitecommande" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "</td>
</tr>
<tr>
    <th style=\"font-size: 22px; text-align: center;\">Quantité-restante</th>
    <td style=\"font-size: 22px; text-align: center;\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 47, $this->source); })()), "stock", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>
</tr>

 

<hr>
       
      
  

       

        </tbody>
    </table>
<div class =\"show-detail\">

  <button id=\"printButton\">Imprimer</button>
</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo " 
  <script>
        document.getElementById('printButton').addEventListener('click', function() {
            // Utilisez la fonction d'impression du navigateur
            window.print();
        });

        // Cacher le bouton lors de l'impression
        window.onbeforeprint = function() {
            document.getElementById('printButton').style.display = 'none';
        };

        // Restaurer le bouton après l'impression
        window.onafterprint = function() {
            document.getElementById('printButton').style.display = 'block';
        };
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
        return "admin/admin_calendar/show_userlist.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  183 => 69,  173 => 68,  142 => 47,  135 => 43,  128 => 38,  119 => 35,  115 => 34,  112 => 33,  108 => 32,  100 => 26,  85 => 10,  81 => 9,  77 => 8,  72 => 5,  62 => 4,  52 => 68,  50 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


{% block body %}


 
    <h1>  {{ calendar.title }} </h1>
   <h2>Date: {{ calendar.start ? calendar.start|date('Y-m-d H:i:s') : '' }}</h2>
  <h2> {{ calendar.end ? calendar.end|date('Y-m-d H:i:s') : '' }} </h2>




    <table class=\"table\">
        <tbody>


      

    
         {#   <th>Quantité-commandée</th>
         
           {{ dump(calendarQuantityClient.quantity) }} 
           <td>{{ calendarQuantityClient.quantity }}</td> #}
        

  <tr>
    <th style=\"font-size: 22px; text-align: center;\">Nom du client</th>
    <th style=\"font-size: 22px; text-align: center;\">Quantité commandée</th>
</tr>
{% for clientName, totals in clientTotals %}
    <tr>
        <td style=\"font-size: 22px; text-align: center;\">{{ clientName }}</td>
        <td style=\"font-size: 22px; text-align: center;\">{{ totals.totalQuantity }}</td>
    </tr>
{% endfor %}

<hr>

<tr>
    <th style=\"font-size: 22px; text-align: center;\">Total </th>
    <td style=\"font-size: 22px; text-align: center;\">{{ sommequantitecommande }}</td>
</tr>
<tr>
    <th style=\"font-size: 22px; text-align: center;\">Quantité-restante</th>
    <td style=\"font-size: 22px; text-align: center;\">{{ calendar.stock }}</td>
</tr>

 

<hr>
       
      
  

       

        </tbody>
    </table>
<div class =\"show-detail\">

  <button id=\"printButton\">Imprimer</button>
</div>


{% endblock %}
{% block javascripts %}
 
  <script>
        document.getElementById('printButton').addEventListener('click', function() {
            // Utilisez la fonction d'impression du navigateur
            window.print();
        });

        // Cacher le bouton lors de l'impression
        window.onbeforeprint = function() {
            document.getElementById('printButton').style.display = 'none';
        };

        // Restaurer le bouton après l'impression
        window.onafterprint = function() {
            document.getElementById('printButton').style.display = 'block';
        };
    </script>
{% endblock %}", "admin/admin_calendar/show_userlist.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\admin\\admin_calendar\\show_userlist.html.twig");
    }
}
