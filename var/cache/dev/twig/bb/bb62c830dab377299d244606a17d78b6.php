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

/* emails/purchase_success.html.twig */
class __TwigTemplate_086b5f0fd8a04931c5fe476adb4b1725 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/purchase_success.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/purchase_success.html.twig"));

        // line 1
        echo "<h1> Votre commande n° ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo " est bien enregistrée et payée </h1>

 <p> Merci à vous ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "fullName", [], "any", false, false, false, 3), "html", null, true);
        echo " </p>
<table>
  <thead>
    <th> Activité </th>
    <th> Quantité  </th>
    <th> Prix.Unitaire  </th>
    <th>  Total </th>
    
  </thead>

  <tbody>
     ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 14, $this->source); })()), "purchaseItems", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "       <tr>
        
          <td> ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "activityName", [], "any", false, false, false, 17), "html", null, true);
            echo "  </td>
         <td> ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 18), "html", null, true);
            echo "  </td>
         <td> ";
            // line 19
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "activityPrice", [], "any", false, false, false, 19) / 100), "html", null, true);
            echo " € </td>
         <td> ";
            // line 20
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 20) / 100), "html", null, true);
            echo "  € </td>
            
       </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  </tbody>

  <tfoot>  
   

  <tr>
    <th>Total</th>
    <th>Date et heure début de la séance</th>
    <th>Date et heure fin de la séance</th>
  </tr>
  <tr>
    <td>";
        // line 35
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["purchase"]) || array_key_exists("purchase", $context) ? $context["purchase"] : (function () { throw new RuntimeError('Variable "purchase" does not exist.', 35, $this->source); })()), "total", [], "any", false, false, false, 35) / 100), "html", null, true);
        echo " € </td>
    <td> ";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["start"]) || array_key_exists("start", $context) ? $context["start"] : (function () { throw new RuntimeError('Variable "start" does not exist.', 36, $this->source); })()), "Y-m-d H:i:s"), "html", null, true);
        echo " </td>
    <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["end"]) || array_key_exists("end", $context) ? $context["end"] : (function () { throw new RuntimeError('Variable "end" does not exist.', 37, $this->source); })()), "Y-m-d H:i:s"), "html", null, true);
        echo " </td>
  </tr>




  </tfoot>
</table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "emails/purchase_success.html.twig";
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
        return array (  114 => 37,  110 => 36,  106 => 35,  93 => 24,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  67 => 15,  63 => 14,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1> Votre commande n° {{ purchase.id  }} est bien enregistrée et payée </h1>

 <p> Merci à vous {{ user.fullName }} </p>
<table>
  <thead>
    <th> Activité </th>
    <th> Quantité  </th>
    <th> Prix.Unitaire  </th>
    <th>  Total </th>
    
  </thead>

  <tbody>
     {% for item in purchase.purchaseItems %}
       <tr>
        
          <td> {{ item.activityName }}  </td>
         <td> {{ item.quantity }}  </td>
         <td> {{ item.activityPrice / 100 }} € </td>
         <td> {{ item.total / 100  }}  € </td>
            
       </tr>
      {% endfor %}
  </tbody>

  <tfoot>  
   

  <tr>
    <th>Total</th>
    <th>Date et heure début de la séance</th>
    <th>Date et heure fin de la séance</th>
  </tr>
  <tr>
    <td>{{ purchase.total / 100 }} € </td>
    <td> {{ start|date('Y-m-d H:i:s') }} </td>
    <td>{{ end|date('Y-m-d H:i:s') }} </td>
  </tr>




  </tfoot>
</table>", "emails/purchase_success.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\emails\\purchase_success.html.twig");
    }
}
