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

/* admin/admin_agenda/listtoprint.html.twig */
class __TwigTemplate_0e9c87aac9d02d8e04bad2a63d8b9e94 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_agenda/listtoprint.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_agenda/listtoprint.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 1
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "

 
    <h1>  ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), "html", null, true);
        echo " </h1>
   <h2>Date: ";
        // line 6
        ((twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 6, $this->source); })()), "start", [], "any", false, false, false, 6)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 6, $this->source); })()), "start", [], "any", false, false, false, 6), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</h2>
  <h2> ";
        // line 7
        ((twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 7, $this->source); })()), "end", [], "any", false, false, false, 7)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 7, $this->source); })()), "end", [], "any", false, false, false, 7), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo " </h2>




    <table class=\"table\">
        <tbody>


      

    
         ";
        // line 23
        echo "        

  <tr>
    <th style=\"font-size: 22px; text-align: center;\">Nom du client</th>
    <th style=\"font-size: 22px; text-align: center;\">Quantité commandée</th>
</tr>
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientTotals"]) || array_key_exists("clientTotals", $context) ? $context["clientTotals"] : (function () { throw new RuntimeError('Variable "clientTotals" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["clientName"] => $context["totals"]) {
            // line 30
            echo "    <tr>
        <td style=\"font-size: 22px; text-align: center;\">";
            // line 31
            echo twig_escape_filter($this->env, $context["clientName"], "html", null, true);
            echo "</td>
        <td style=\"font-size: 22px; text-align: center;\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["totals"], "totalQuantity", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['clientName'], $context['totals'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
<hr>

<tr>
    <th style=\"font-size: 22px; text-align: center;\">Total </th>
    <td style=\"font-size: 22px; text-align: center;\">";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["sommequantitecommande"]) || array_key_exists("sommequantitecommande", $context) ? $context["sommequantitecommande"] : (function () { throw new RuntimeError('Variable "sommequantitecommande" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "</td>
</tr>
<tr>
    <th style=\"font-size: 22px; text-align: center;\">Quantité-restante</th>
    <td style=\"font-size: 22px; text-align: center;\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 44, $this->source); })()), "stock", [], "any", false, false, false, 44), "html", null, true);
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

    // line 65
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
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
        return "admin/admin_agenda/listtoprint.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  178 => 66,  168 => 65,  137 => 44,  130 => 40,  123 => 35,  114 => 32,  110 => 31,  107 => 30,  103 => 29,  95 => 23,  80 => 7,  76 => 6,  72 => 5,  67 => 2,  57 => 1,  47 => 65,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}


 
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
{% endblock %}", "admin/admin_agenda/listtoprint.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\admin\\admin_agenda\\listtoprint.html.twig");
    }
}
