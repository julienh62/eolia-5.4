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

/* home/index.html.twig */
class __TwigTemplate_7aa169e45d3a9ca3e870ae8f7a4ce8f7 extends Template
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
        return "baseaccueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("baseaccueil.html.twig", "home/index.html.twig", 1);
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

        echo "Éolia!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
      ";
        // line 8
        if ((isset($context["fullName"]) || array_key_exists("fullName", $context) ? $context["fullName"] : (function () { throw new RuntimeError('Variable "fullName" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "         <h1>Bienvenue, ";
            echo twig_escape_filter($this->env, (isset($context["fullName"]) || array_key_exists("fullName", $context) ? $context["fullName"] : (function () { throw new RuntimeError('Variable "fullName" does not exist.', 9, $this->source); })()), "html", null, true);
            echo " !</h1>
      ";
        }
        // line 11
        echo "
 

   <section class=\"titre-accueil\">

      <h1 class=\"titreh1\"> Char à Voile Baie de Somme</h1>
      <h2 class = \"titreh2\"> Fort Mahon et Quend-Plage</h2>
 

      <div class=\"presentationactivities\">
             ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["titles"]) || array_key_exists("titles", $context) ? $context["titles"] : (function () { throw new RuntimeError('Variable "titles" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["title"]) {
            // line 22
            echo "                <div class=\"presentationimgettitle\"> 
                    <img class=\"imgsite\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 23, $this->source); })()), $context["key"], [], "array", false, false, false, 23))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo " Image\">
                    <h2 class=\"titreh2\"><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agenda_by_category", ["categoryTitle" => $context["title"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "</a></h2>
               </div>        
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "           
      </div>
        
   </section>




           
           
      

             <div class=\"description\">
                <div class=\"paragraphe\">
                    <p>Éolia vous propose la pratique du char à voile en baie de Somme à Fort Mahon et à Quend-plage. Sport typique en Picardie, le char à voile, sorte de « kart aéro propulsé », extrêmement maniable, léger et confortable est un loisir accessible à tous. Enfants, familles, séniors, personnes à mobilité réduite, groupes scolaires.</p>
                    <p>Au cours de votre première séance d’initiation de char à voile à Fort Mahon, après environ 1 heure d’apprentissage, selon les conditions météos, une randonnée ou balade en char à voile commence sous la conduite d’un moniteur Breveté d’État. Les coquillages craquent sous vos roues, le vent fait légèrement chasser les roues arrières dans une fine gerbe de sable…</p>
                    <p>Devant vous l’espace infini de la Baie de Somme en Picardie, EOLIA vous convie à des « Escapades Aér’O Plage », sorties inoubliables aux accents d’Air d’Eau et de Sable.</p>
                </div>
                
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d162960.58094757705!2d1.578692!3d50.343073!3m2!1i1024!2i768!4f13.1!2m1!1sEolia%20Fort%20mMahon%20et%20Quend%20Plage!5e0!3m2!1sfr!2sus!4v1639571521156!5m2!1sfr!2sus\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>  
                
    </div>

    <div class=\"p-version-tablette\">
                    <p>Devant vous l’espace infini de la Baie de Somme en Picardie, EOLIA vous convie à des « Escapades Aér’O Plage », sorties inoubliables aux accents d’Air d’Eau et de Sable.</p>
     </div>


   

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "          ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
         <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/menu.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/slider.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
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
        return array (  195 => 61,  191 => 60,  186 => 59,  176 => 58,  136 => 27,  125 => 24,  119 => 23,  116 => 22,  112 => 21,  100 => 11,  94 => 9,  92 => 8,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseaccueil.html.twig' %}

{% block title %}Éolia!{% endblock %}


{% block body %}

      {% if fullName %}
         <h1>Bienvenue, {{ fullName }} !</h1>
      {% endif %}

 

   <section class=\"titre-accueil\">

      <h1 class=\"titreh1\"> Char à Voile Baie de Somme</h1>
      <h2 class = \"titreh2\"> Fort Mahon et Quend-Plage</h2>
 

      <div class=\"presentationactivities\">
             {% for key, title in titles %}
                <div class=\"presentationimgettitle\"> 
                    <img class=\"imgsite\" src=\"{{ asset('uploads/images/' ~ images[key]) }}\" alt=\"{{ title }} Image\">
                    <h2 class=\"titreh2\"><a href=\"{{ path('app_agenda_by_category', {'categoryTitle': title}) }}\">{{ title }}</a></h2>
               </div>        
            {% endfor %}
           
      </div>
        
   </section>




           
           
      

             <div class=\"description\">
                <div class=\"paragraphe\">
                    <p>Éolia vous propose la pratique du char à voile en baie de Somme à Fort Mahon et à Quend-plage. Sport typique en Picardie, le char à voile, sorte de « kart aéro propulsé », extrêmement maniable, léger et confortable est un loisir accessible à tous. Enfants, familles, séniors, personnes à mobilité réduite, groupes scolaires.</p>
                    <p>Au cours de votre première séance d’initiation de char à voile à Fort Mahon, après environ 1 heure d’apprentissage, selon les conditions météos, une randonnée ou balade en char à voile commence sous la conduite d’un moniteur Breveté d’État. Les coquillages craquent sous vos roues, le vent fait légèrement chasser les roues arrières dans une fine gerbe de sable…</p>
                    <p>Devant vous l’espace infini de la Baie de Somme en Picardie, EOLIA vous convie à des « Escapades Aér’O Plage », sorties inoubliables aux accents d’Air d’Eau et de Sable.</p>
                </div>
                
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d162960.58094757705!2d1.578692!3d50.343073!3m2!1i1024!2i768!4f13.1!2m1!1sEolia%20Fort%20mMahon%20et%20Quend%20Plage!5e0!3m2!1sfr!2sus!4v1639571521156!5m2!1sfr!2sus\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>  
                
    </div>

    <div class=\"p-version-tablette\">
                    <p>Devant vous l’espace infini de la Baie de Somme en Picardie, EOLIA vous convie à des « Escapades Aér’O Plage », sorties inoubliables aux accents d’Air d’Eau et de Sable.</p>
     </div>


   

{% endblock %}
  \t{% block javascripts %}
          {{ encore_entry_script_tags('app') }}
         <script src=\"{{ asset('assets/js/menu.js') }}\"></script>
        <script src=\"{{ asset('assets/js/slider.js') }}\"></script>

    {% endblock %}", "home/index.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\home\\index.html.twig");
    }
}
