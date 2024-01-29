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

/* activity/show.html.twig */
class __TwigTemplate_250b9a8c4ad354d70b8ead9fc595f8df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activity/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activity/show.html.twig", 1);
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

        echo "Calendar-show";
        
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
        echo "   <div class=\"milieu\">
    <h1> ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
    ";
        // line 10
        echo "    ";
        // line 14
        echo "

       <table class=\"table\">
        <tbody>
            
            <tr>
                <th>Titre</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
                
            </tr>

        

            <tr>
                <th>Début de la séance</th>
                <td>";
        // line 29
        ((twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 29, $this->source); })()), "start", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 29, $this->source); })()), "start", [], "any", false, false, false, 29), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Fin de la séance</th>
                <td>";
        // line 33
        ((twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 33, $this->source); })()), "start", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 33, $this->source); })()), "start", [], "any", false, false, false, 33), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
              <tr>
                <th>Prix</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 37, $this->source); })()), "price", [], "any", false, false, false, 37)), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quantité-disponible</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 41, $this->source); })()), "stock", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
            </tr>

               
           <!--  <tr>
                <th>quantité commandée</th>
                <td>";
        // line 47
        echo "</td>
                
            </tr> -->
      
      
  </tbody>
    </table>
     </div>   
    

";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 57, $this->source); })()), "stock", [], "any", false, false, false, 57) > 0)) {
            // line 58
            echo "     <div class=\"milieu\">
           <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">Ajouter au panier</a>
          <a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitie_index");
            echo "\">Retour à la liste</a>
    </div>
";
        } else {
            // line 63
            echo "    <div class=\"milieu\">
                 <p>Stock insuffisant</p>
                
           </div>
";
        }
        // line 68
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
        return "activity/show.html.twig";
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
        return array (  181 => 68,  174 => 63,  168 => 60,  164 => 59,  161 => 58,  159 => 57,  147 => 47,  138 => 41,  131 => 37,  124 => 33,  117 => 29,  106 => 21,  97 => 14,  95 => 10,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Calendar-show{% endblock %}

{% block body %}
   <div class=\"milieu\">
    <h1> {{ activity.title }}</h1>
    {#   {% for item in picture %}
         {#   {{ dump(picture) }}   #}
    {#       {% if item.picture is not null %}
             <!--  <img class=\"imgsite\" src=\"{#{{ item.picture }} \" alt=\"Image de {#{{ activity.title }}\">-->
           {% endif %}
       {% endfor %}  #}


       <table class=\"table\">
        <tbody>
            
            <tr>
                <th>Titre</th>
                <td>{{ activity.title }}</td>
                
            </tr>

        

            <tr>
                <th>Début de la séance</th>
                <td>{{ activity.start ? activity.start|date('Y-m-d H:i:s') : ''}}</td>
            </tr>
            <tr>
                <th>Fin de la séance</th>
                <td>{{ activity.start ? activity.start|date('Y-m-d H:i:s') : ''}}</td>
            </tr>
              <tr>
                <th>Prix</th>
                <td>{{ activity.price | amount }}</td>
            </tr>
            <tr>
                <th>Quantité-disponible</th>
                <td>{{ activity.stock }}</td>
            </tr>

               
           <!--  <tr>
                <th>quantité commandée</th>
                <td>{#}{{ sommequantitecommande }}#}</td>
                
            </tr> -->
      
      
  </tbody>
    </table>
     </div>   
    

{% if activity.stock > 0 %}
     <div class=\"milieu\">
           <a href=\"{{ path('cart_add', {'id': activity.id}) }}\">Ajouter au panier</a>
          <a href=\"{{ path('app_activitie_index') }}\">Retour à la liste</a>
    </div>
{% else %}
    <div class=\"milieu\">
                 <p>Stock insuffisant</p>
                
           </div>
{% endif %}
  
  
    
{% endblock %}
", "activity/show.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\activity\\show.html.twig");
    }
}
