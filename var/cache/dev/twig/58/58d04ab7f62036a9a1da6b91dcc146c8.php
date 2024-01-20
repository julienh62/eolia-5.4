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
class __TwigTemplate_8b5bfdd347f9b058c2bd861ac51a486e extends Template
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


    <div class=\"titremobil\">
           

          <!--    <picture>
               <source srcset=\"";
        // line 16
        echo " -->


      
    </div> 

   <section class=\"titre-accueil\">

      <h1 class=\"titreh1\"> Char à Voile Baie de Somme</h1>
     <h2 class = \"titreh2\"> Fort Mahon et Quend-Plage</h2>
 

    <div class=\"activite\">
           <div class=\"activiteaccueil\">
        
              <div class=\"activitecata\">
                     <div class=\"btnactiviteaccueil\">
                          <a class=\"lienaccueil\" href=\"";
        // line 33
        echo "\"> Catamaran </a>
                    </div>
              </div>

              <div class=\"activitechar\"> 
                    <div class=\"btnactiviteaccueil\">  
                          <a class=\"lienaccueil\" href=\"/\" class=\"btn btn-secondary btn-sm\"> Char à voile</a>  
                    </div>     
              </div>
          
             <div class=\"activitekid\">
                     <div class=\"btnactiviteaccueil\">  
                          <a class=\"lienaccueilkid\" href=\"/\" class=\"btn btn-secondary btn-sm\"> Char à voile kid </a>
                     </div>
             </div>
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

    // line 77
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "          ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
         <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/menu.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 80
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
        return array (  189 => 80,  185 => 79,  180 => 78,  170 => 77,  117 => 33,  98 => 16,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseaccueil.html.twig' %}

{% block title %}Éolia!{% endblock %}


{% block body %}



    <div class=\"titremobil\">
           

          <!--    <picture>
               <source srcset=\"{#}{{ asset('assets/uploads/char-accueil.jpg')}}\" alt =\"char à voile Baie de Somme\" media=\"(orientation: portrait)\">
               <img src=\"{{ asset('assets/uploads/chardepart-tab.webp')}}\"alt =\"char à voile Baie de Somme\">
               </picture> #} -->


      
    </div> 

   <section class=\"titre-accueil\">

      <h1 class=\"titreh1\"> Char à Voile Baie de Somme</h1>
     <h2 class = \"titreh2\"> Fort Mahon et Quend-Plage</h2>
 

    <div class=\"activite\">
           <div class=\"activiteaccueil\">
        
              <div class=\"activitecata\">
                     <div class=\"btnactiviteaccueil\">
                          <a class=\"lienaccueil\" href=\"{#{{ path('app_calendar_main_cata') }}#}\"> Catamaran </a>
                    </div>
              </div>

              <div class=\"activitechar\"> 
                    <div class=\"btnactiviteaccueil\">  
                          <a class=\"lienaccueil\" href=\"/\" class=\"btn btn-secondary btn-sm\"> Char à voile</a>  
                    </div>     
              </div>
          
             <div class=\"activitekid\">
                     <div class=\"btnactiviteaccueil\">  
                          <a class=\"lienaccueilkid\" href=\"/\" class=\"btn btn-secondary btn-sm\"> Char à voile kid </a>
                     </div>
             </div>
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
