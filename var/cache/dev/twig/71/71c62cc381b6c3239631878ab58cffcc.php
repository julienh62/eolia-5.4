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

/* agenda/cataAll.html.twig */
class __TwigTemplate_7041749b46d59134ad5e01676cdbbc38 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agenda/cataAll.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agenda/cataAll.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "agenda/cataAll.html.twig", 1);
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

        echo "eoliacalendarcata!";
        
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

        // line 8
        echo "<h1> Calendrier des séances catamaran</h1>



<div class=\"calendaraccueil\"> 
<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/miniature-cata-accueil1.jpg"), "html", null, true);
        echo "\" alt=\"char à voile Baie de Somme\">
<div class=\"milieu\">
<p class=\"milieu\" >Prix par personne/ 60€ </p>
<p class=\"milieu\" > 48€ pour les moins de 25 ans</p>
<p class=\"milieu\" > A partir de 11 ans et 1,40 m</p>
</div>
</div>
<p class=\"milieu\" >Cliquez sur la séance où vous souhaitez réserver. </p>





<div id=\"calendrier\"> </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        let calendarElt = document.querySelector(\"#calendrier\");

        let mediaQuery = window.matchMedia(\"(max-width: 1000px)\");
        let calendar;

        function updateCalendarDuration() {
          if (mediaQuery.matches) {
          //  console.log(\"CategoryColorSetting calendar duration to 3 days\");
            calendar.changeView('timeGridThreeDay');
          } else {
         //   console.log(\"CategoryColorSetting calendar duration to 7 days\");
            calendar.changeView('timeGridWeek');
          }
        }

        window.onload = () => {
          calendar = new FullCalendar.Calendar(calendarElt, {

             eventContent: function (arg) {
              let stock = arg.event.extendedProps.stock;
              let quantitecommande = arg.event.extendedProps.quantityCommanded;
              let stockHtml = '<div class=\"event-stock\"> ' + 'Il reste : '  + stock + ' places' + '</div>'; 
             // let quantitecommandeHtml = '<div class=\"event-q\"> ' + 'place déja prise :'+ quantitecommande + '</div>';
             //  let idHtml = '<div class=\"event-stock\"> ' + arg.event.id + '</div>';

              return {
                html:  arg.event.title + stockHtml   
              //html: stockHtml + quantitecommandeHtml + arg.event.title + idHtml 
              };

            },

            initialView: 'timeGridWeek',
            views: {
              timeGridThreeDay: {
                type: 'timeGrid',
                duration: { days: 3 }
              },
              timeGridWeek: {
                type: 'timeGrid',
                duration: { days: 7 }
              }
            },
            locale: 'fr',
            timeZone: 'Europe/Paris',
            headerToolbar: {
              start: 'prev,next today',
              center: 'title',
              end: 'dayGridMonth,timeGridThreeDay,timeGridWeek'
            },
            buttonText: {
              today: 'Aujourd\\'hui',
              month: 'Mois',
              timeGridThreeDay: '3 jours',
              timeGridWeek: '7 jours'
            },
            events: ";
        // line 88
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 88, $this->source); })());
        echo ",
          });

          calendar.on('eventClick', (e) => {
            let donnees = {
              \"id\": e.event.id
            };
            let id = donnees.id;
         let url = \"https://127.0.0.1:8000/calendar/\" + id;
             window.location.href = url;
          });

          calendar.render();
          updateCalendarDuration(); // Appel initial pour mettre à jour la durée du calendrier
        };

        mediaQuery.addEventListener('change', () => {
       //   console.log(\"Media query changed\");
          updateCalendarDuration();
        });
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
        return "agenda/cataAll.html.twig";
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
        return array (  193 => 88,  131 => 30,  121 => 29,  96 => 13,  89 => 8,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}eoliacalendarcata!{% endblock %}

{% block body %}
{#me donne kle json de data#}
{#{{dump(data)}}  #}
<h1> Calendrier des séances catamaran</h1>



<div class=\"calendaraccueil\"> 
<img src=\"{{ asset('assets/uploads/miniature-cata-accueil1.jpg')}}\" alt=\"char à voile Baie de Somme\">
<div class=\"milieu\">
<p class=\"milieu\" >Prix par personne/ 60€ </p>
<p class=\"milieu\" > 48€ pour les moins de 25 ans</p>
<p class=\"milieu\" > A partir de 11 ans et 1,40 m</p>
</div>
</div>
<p class=\"milieu\" >Cliquez sur la séance où vous souhaitez réserver. </p>





<div id=\"calendrier\"> </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        let calendarElt = document.querySelector(\"#calendrier\");

        let mediaQuery = window.matchMedia(\"(max-width: 1000px)\");
        let calendar;

        function updateCalendarDuration() {
          if (mediaQuery.matches) {
          //  console.log(\"CategoryColorSetting calendar duration to 3 days\");
            calendar.changeView('timeGridThreeDay');
          } else {
         //   console.log(\"CategoryColorSetting calendar duration to 7 days\");
            calendar.changeView('timeGridWeek');
          }
        }

        window.onload = () => {
          calendar = new FullCalendar.Calendar(calendarElt, {

             eventContent: function (arg) {
              let stock = arg.event.extendedProps.stock;
              let quantitecommande = arg.event.extendedProps.quantityCommanded;
              let stockHtml = '<div class=\"event-stock\"> ' + 'Il reste : '  + stock + ' places' + '</div>'; 
             // let quantitecommandeHtml = '<div class=\"event-q\"> ' + 'place déja prise :'+ quantitecommande + '</div>';
             //  let idHtml = '<div class=\"event-stock\"> ' + arg.event.id + '</div>';

              return {
                html:  arg.event.title + stockHtml   
              //html: stockHtml + quantitecommandeHtml + arg.event.title + idHtml 
              };

            },

            initialView: 'timeGridWeek',
            views: {
              timeGridThreeDay: {
                type: 'timeGrid',
                duration: { days: 3 }
              },
              timeGridWeek: {
                type: 'timeGrid',
                duration: { days: 7 }
              }
            },
            locale: 'fr',
            timeZone: 'Europe/Paris',
            headerToolbar: {
              start: 'prev,next today',
              center: 'title',
              end: 'dayGridMonth,timeGridThreeDay,timeGridWeek'
            },
            buttonText: {
              today: 'Aujourd\\'hui',
              month: 'Mois',
              timeGridThreeDay: '3 jours',
              timeGridWeek: '7 jours'
            },
            events: {{ data|raw }},
          });

          calendar.on('eventClick', (e) => {
            let donnees = {
              \"id\": e.event.id
            };
            let id = donnees.id;
         let url = \"https://127.0.0.1:8000/calendar/\" + id;
             window.location.href = url;
          });

          calendar.render();
          updateCalendarDuration(); // Appel initial pour mettre à jour la durée du calendrier
        };

        mediaQuery.addEventListener('change', () => {
       //   console.log(\"Media query changed\");
          updateCalendarDuration();
        });
    </script>
{% endblock %}
", "agenda/cataAll.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\agenda\\cataAll.html.twig");
    }
}
