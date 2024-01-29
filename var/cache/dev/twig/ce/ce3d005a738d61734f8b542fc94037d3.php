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

/* admin/user/index.html.twig */
class __TwigTemplate_eef93ae75ee6c3eac1b24e1b5e0e8249 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/user/index.html.twig", 1);
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

        echo "user index";
        
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
        echo "        <h1>user index</h1>

<!-- Recherche par email -->
<label class=\"label\" for=\"user-search-email\">Recherche par email </label>
<input type=\"text\" name=\"recherche\" id=\"user-search-email\" />
<div id=\"result-email\"></div>

<!-- Recherche par nom -->
<label class=\"label\" for=\"user-search-name\">Recherche par nom </label>
<input type=\"text\" name=\"recherchename\" id=\"user-search-name\" />
<div id=\"result-name\"></div>

<!-- Recherche par numéro de téléphone -->
<label class=\"label\" for=\"user-search-phone\">Recherche par téléphone:</label>
<input type=\"text\" name=\"recherchephone\" id=\"user-search-phone\" />
<div id=\"result-phone\"></div>

   ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 24
            echo "                
                <h3>Nom</h3>
                  <p>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "fullName", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
        
                <h3>E-mail</h3>
                 <p>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 29), "html", null, true);
            echo "</p>
            
                <h3>Role</h3>
                 <p>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 32), 0, [], "array", false, false, false, 32), "html", null, true);
            echo "</p>
                
                <h3>Afficher détail</h3>
                   <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_show", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">Afficher</a>


                   <h3>Supprimer utilisateur</h3>
           <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur et toutes ses commandes ?')\">Supprimer</a>
    
             <hr>
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo " ";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" defer></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js\" defer></script>
  ";
        // line 47
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " ";
        // line 48
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
        return "admin/user/index.html.twig";
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
        return array (  179 => 48,  176 => 47,  172 => 45,  152 => 44,  141 => 39,  134 => 35,  128 => 32,  122 => 29,  116 => 26,  112 => 24,  108 => 23,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.admin.html.twig' %}

{% block title %}user index{% endblock %}

{% block body %}
        <h1>user index</h1>

<!-- Recherche par email -->
<label class=\"label\" for=\"user-search-email\">Recherche par email </label>
<input type=\"text\" name=\"recherche\" id=\"user-search-email\" />
<div id=\"result-email\"></div>

<!-- Recherche par nom -->
<label class=\"label\" for=\"user-search-name\">Recherche par nom </label>
<input type=\"text\" name=\"recherchename\" id=\"user-search-name\" />
<div id=\"result-name\"></div>

<!-- Recherche par numéro de téléphone -->
<label class=\"label\" for=\"user-search-phone\">Recherche par téléphone:</label>
<input type=\"text\" name=\"recherchephone\" id=\"user-search-phone\" />
<div id=\"result-phone\"></div>

   {% for user in users %}
                
                <h3>Nom</h3>
                  <p>{{ user.fullName }}</p>
        
                <h3>E-mail</h3>
                 <p>{{ user.email }}</p>
            
                <h3>Role</h3>
                 <p>{{ user.roles[0]   }}</p>
                
                <h3>Afficher détail</h3>
                   <a href=\"{{ path('admin_user_show', { 'id': user.id }) }}\">Afficher</a>


                   <h3>Supprimer utilisateur</h3>
           <a href=\"{{ path('admin_user_delete', { 'id': user.id }) }}\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur et toutes ses commandes ?')\">Supprimer</a>
    
             <hr>
            
        {% endfor %}
 {% block javascripts %}
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" defer></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js\" defer></script>
  {{ parent() }} {# Cela inclura les scripts définis dans le parent (base.admin.html.twig) #}
   
    {% endblock %}
{% endblock %} 



", "admin/user/index.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\admin\\user\\index.html.twig");
    }
}
