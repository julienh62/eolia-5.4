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

/* admin/admin_category_setting/index.html.twig */
class __TwigTemplate_1677bf4b609178104cbe7bfc83b7ca1e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_category_setting/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_category_setting/index.html.twig"));

        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/admin_category_setting/index.html.twig", 1);
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

        echo "CategorySetting index";
        
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
        echo "    <h1>CategorySetting </h1>

       <div class=\"onlydesktop\">
     <table class=\"tableau\">
        <thead class=\"tableau\">
            <tr>
                <th class=\"colonnetableau\">Title</th>
                <th class=\"colonnetableau\">TextColor</th>
                <th class=\"colonnetableau\">BackGroundColor</th>
                <th class=\"colonnetableau\">action</th>
                <th class=\"colonnetableau\">action</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category_settings"]) || array_key_exists("category_settings", $context) ? $context["category_settings"] : (function () { throw new RuntimeError('Variable "category_settings" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category_setting"]) {
            // line 21
            echo "            <tr>
                 <td class=\"colonnetableaux\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category_setting"], "titleCategorySetting", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
             <td class=\"colonnetableaux\" style=\"background-color: ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category_setting"], "textColor", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category_setting"], "textColor", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
            <td class=\"colonnetableaux\" style=\"background-color: ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category_setting"], "backGroundColor", [], "any", false, false, false, 24), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category_setting"], "backGroundColor", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>

                <td class=\"colonnetableaux\">
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_setting_show", ["id" => twig_get_attribute($this->env, $this->source, $context["category_setting"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">show</a>
                </td>
                   <td class=\"colonnetableaux\">
                    <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_setting_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["category_setting"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">modifier</a>
                </td>
            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_setting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>
</div>

   

<div class=\"onlymobil\">
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category_settings"]) || array_key_exists("category_settings", $context) ? $context["category_settings"] : (function () { throw new RuntimeError('Variable "category_settings" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["category_setting"]) {
            // line 46
            echo "               <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category_setting"], "titleCategorySetting", [], "any", false, false, false, 46), "html", null, true);
            echo " </p>
               <p>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category_setting"], "textColor", [], "any", false, false, false, 47), "html", null, true);
            echo " </p>
               <p>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category_setting"], "textColor", [], "any", false, false, false, 48), "html", null, true);
            echo " </p>
               <p>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category_setting"], "backGroundColor", [], "any", false, false, false, 49), "html", null, true);
            echo " </p>
               
                <p>
                  <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_setting_show", ["id" => twig_get_attribute($this->env, $this->source, $context["category_setting"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">show</a>

                </p>
                <p>
                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_setting_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["category_setting"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">modifier</a>

                </p>
       
      
            
             
               
              
           
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "           
                <p>Aucune Catégorie pour l'instant </p>
          
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_setting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        
   
  </div>
       <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_setting_new");
        echo "\">Créer </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/admin_category_setting/index.html.twig";
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
        return array (  224 => 74,  219 => 71,  210 => 67,  194 => 56,  187 => 52,  181 => 49,  177 => 48,  173 => 47,  168 => 46,  163 => 45,  154 => 38,  145 => 34,  136 => 30,  130 => 27,  122 => 24,  116 => 23,  112 => 22,  109 => 21,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.admin.html.twig' %}

{% block title %}CategorySetting index{% endblock %}

{% block body %}
    <h1>CategorySetting </h1>

       <div class=\"onlydesktop\">
     <table class=\"tableau\">
        <thead class=\"tableau\">
            <tr>
                <th class=\"colonnetableau\">Title</th>
                <th class=\"colonnetableau\">TextColor</th>
                <th class=\"colonnetableau\">BackGroundColor</th>
                <th class=\"colonnetableau\">action</th>
                <th class=\"colonnetableau\">action</th>
            </tr>
        </thead>
        <tbody>
        {% for category_setting in category_settings %}
            <tr>
                 <td class=\"colonnetableaux\">{{ category_setting.titleCategorySetting }}</td>
             <td class=\"colonnetableaux\" style=\"background-color: {{ category_setting.textColor }}\">{{ category_setting.textColor }}</td>
            <td class=\"colonnetableaux\" style=\"background-color: {{ category_setting.backGroundColor }}\">{{ category_setting.backGroundColor }}</td>

                <td class=\"colonnetableaux\">
                    <a href=\"{{ path('app_admin_category_setting_show', {'id': category_setting.id}) }}\">show</a>
                </td>
                   <td class=\"colonnetableaux\">
                    <a href=\"{{ path('app_admin_category_setting_edit', {'id': category_setting.id}) }}\">modifier</a>
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
        {% for category_setting in category_settings %}
               <p>{{ category_setting.titleCategorySetting }} </p>
               <p>{{ category_setting.textColor }} </p>
               <p>{{ category_setting.textColor }} </p>
               <p>{{ category_setting.backGroundColor }} </p>
               
                <p>
                  <a href=\"{{ path('app_admin_category_setting_show', {'id': category_setting.id}) }}\">show</a>

                </p>
                <p>
                    <a href=\"{{ path('app_admin_category_setting_edit', {'id': category_setting.id}) }}\">modifier</a>

                </p>
       
      
            
             
               
              
           
        {% else %}
           
                <p>Aucune Catégorie pour l'instant </p>
          
        {% endfor %}
        
   
  </div>
       <a href=\"{{ path('app_admin_category_setting_new') }}\">Créer </a>
{% endblock %}
", "admin/admin_category_setting/index.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\admin\\admin_category_setting\\index.html.twig");
    }
}
