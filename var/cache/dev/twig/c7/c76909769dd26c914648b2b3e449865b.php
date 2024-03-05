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

/* admin/admin_staff/index.html.twig */
class __TwigTemplate_ff5f659630b2ee12058ebbdcb325e3d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_staff/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_staff/index.html.twig"));

        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/admin_staff/index.html.twig", 1);
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

        echo "Staff index";
        
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
        echo "    <h1>Staff index</h1>




    
    <div class=\"onlydesktop\">
     <table class=\"tableau\">
        <thead class=\"tableau\">
            <tr>
                 <th class=\"colonnetableau\">FullName</th>
                 <th class=\"colonnetableau\">actions</th>
                 <th class=\"colonnetableau\">actions</th>
            </tr>
        </thead>
        <tbody>
          ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["staff"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["staff"]) {
            // line 23
            echo "            <tr>
                <td class=\"colonnetableaux\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["staff"], "fullName", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                
                <td class=\"colonnetableaux\">
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_staff_show", ["id" => twig_get_attribute($this->env, $this->source, $context["staff"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\"> Voir </a>
                </td>
                <td class=\"colonnetableaux\">
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_staff_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["staff"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\"> éditer </a>
                </td>
             
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "            <tr>
                <td>Aucune correspondance trouvée</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['staff'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>
  </div>

<div class=\"onlymobil\">
       ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["staff"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["staff"]) {
            // line 44
            echo "               <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["staff"], "fullName", [], "any", false, false, false, 44), "html", null, true);
            echo "</p>
                <p>
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_staff_show", ["id" => twig_get_attribute($this->env, $this->source, $context["staff"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">Voir</a>
                </p>
                <p>
                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_staff_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["staff"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\"> Éditer </a>
                </p>
       
      
            
             
               
              
           
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "           
                <p>Aucune Staff pour l'instant </p>
          
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['staff'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        
   
  </div>
       <a class=\"asous\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_staff_new");
        echo "\">Créer un nouveau staff</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/admin_staff/index.html.twig";
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
        return array (  197 => 66,  192 => 63,  183 => 59,  168 => 49,  162 => 46,  156 => 44,  151 => 43,  144 => 38,  135 => 34,  126 => 30,  120 => 27,  114 => 24,  111 => 23,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.admin.html.twig' %}

{% block title %}Staff index{% endblock %}

{% block body %}
    <h1>Staff index</h1>




    
    <div class=\"onlydesktop\">
     <table class=\"tableau\">
        <thead class=\"tableau\">
            <tr>
                 <th class=\"colonnetableau\">FullName</th>
                 <th class=\"colonnetableau\">actions</th>
                 <th class=\"colonnetableau\">actions</th>
            </tr>
        </thead>
        <tbody>
          {% for staff in staff %}
            <tr>
                <td class=\"colonnetableaux\">{{ staff.fullName }}</td>
                
                <td class=\"colonnetableaux\">
                    <a href=\"{{ path('admin_staff_show', {'id': staff.id}) }}\"> Voir </a>
                </td>
                <td class=\"colonnetableaux\">
                    <a href=\"{{ path('admin_staff_edit', {'id': staff.id}) }}\"> éditer </a>
                </td>
             
        {% else %}
            <tr>
                <td>Aucune correspondance trouvée</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
  </div>

<div class=\"onlymobil\">
       {% for staff in staff %}
               <p>{{ staff.fullName }}</p>
                <p>
                    <a href=\"{{ path('admin_staff_show', {'id': staff.id}) }}\">Voir</a>
                </p>
                <p>
                    <a href=\"{{ path('admin_staff_edit', {'id': staff.id}) }}\"> Éditer </a>
                </p>
       
      
            
             
               
              
           
        {% else %}
           
                <p>Aucune Staff pour l'instant </p>
          
        {% endfor %}
        
   
  </div>
       <a class=\"asous\" href=\"{{ path('admin_staff_new') }}\">Créer un nouveau staff</a>
{% endblock %}























", "admin/admin_staff/index.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\admin\\admin_staff\\index.html.twig");
    }
}
