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

/* admin/staffplanning/main.html.twig */
class __TwigTemplate_b6352acec4efc8bafbc4c5c79bd44d80 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/staffplanning/main.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/staffplanning/main.html.twig"));

        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/staffplanning/main.html.twig", 1);
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

        echo "eoliacalendar!";
        
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
        echo "    ";
        // line 7
        echo "    ";
        // line 8
        echo "    <div id=\"calendrier\"> mon calendrier-staff</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js\"></script>




  <script>
        let calendarElt = document.querySelector(\"#calendrier\");

        let mediaQuery = window.matchMedia(\"(max-width: 1000px)\");
        let calendar;

        function updateCalendarDuration() {
          if (mediaQuery.matches) {
          //  console.log(\"Setting calendar duration to 3 days\");
            calendar.changeView('timeGridThreeDay');
          } else {
         //   console.log(\"Setting calendar duration to 7 days\");
            calendar.changeView('timeGridWeek');
          }
        }

        window.onload = () => {
          calendar = new FullCalendar.Calendar(calendarElt, {

         eventContent: function (arg) {
    let stock = arg.event.extendedProps.stock;
    let staffs = arg.event.extendedProps.staffs;
    let quantityCommanded = arg.event.extendedProps.quantityCommanded;

     //  console.log pour afficher le contenu de staffs
      console.log('Contenu de staffs :', staffs);


    // Vérifiez si quantityCommanded est null, et si c'est le cas, affectez 0
    if (quantityCommanded === null) {
        quantityCommanded = 0;
    }

    let stockHtml = '<div class=\"event-stock\"> ' + 'Il reste : '  + stock + ' places' + '</div>'; 

   let staffsHtml = '<div class=\"event-q\"> ' + ' staff :'+ staffs + '</div>';

    let quantityCommandedHtml = '';
    if (quantityCommanded === 0) {
        quantityCommandedHtml = '<div class=\"event-quantity\"> ' + ' déjà pris: 0 ' + '</div>';
    } else {
        quantityCommandedHtml = '<div class=\"event-quantity\"> ' + ' déjà pris : ' + quantityCommanded + '</div>';
    }
    let titleStyle = 'font-weight: bold; font-size: 20px;';
    return {
       // html:  '<div style=\"' + titleStyle + '\">' + arg.event.title + '</div>' + stockHtml + quantityCommandedHtml 
        html:  '<div style=\"' + titleStyle + '\">' + arg.event.title + '</div>' +  staffsHtml
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
      
                //probleme secu avec raw?
                events: ";
        // line 94
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 94, $this->source); })());
        echo ",
                //editable pour glisser deposer et agrandir
                editable: true,
                //agrandir depuis le haut de la cellule
                eventResizableFromStart: true,

                //crée un objet (event et oldevent(date d'origine)) à chaque fois que je clique un rdv
                eventClick: function(e) {
                    let id = e.event.id;
                   // let url = \"https://127.0.0.1:8000/admin/calendarstaff/\" + id + \"/edit/\";
                   let url = \"https://127.0.0.1:8000/admin/staffplanningshow/\" + id ;
                    window.location.href = url;
                },




                // Action lors du clic sur une date
                dateClick: function(info) {
                    let clickedDate = moment(info.date).format('YYYY-MM-DD HH:mm');
                    console.log('Clicked date:', clickedDate);

                     // Définir un cookie avec la valeur de clickedDate
                 document.cookie = `clickedDate=\${encodeURIComponent(clickedDate)}; path=/`;


                      // Ouvrir la page de création de séance 
              var url = 'https://127.0.0.1:8000/admin/calendarstaff/new';
          window.location.href = url;





                  
                }
            });

            calendar.render();
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
        return "admin/staffplanning/main.html.twig";
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
        return array (  200 => 94,  114 => 12,  104 => 11,  93 => 8,  91 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.admin.html.twig' %}

{% block title %}eoliacalendar!{% endblock %}

{% block body %}
    {# me donne le json de data #}
    {# {{dump(data)}} #}
    <div id=\"calendrier\"> mon calendrier-staff</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js\"></script>




  <script>
        let calendarElt = document.querySelector(\"#calendrier\");

        let mediaQuery = window.matchMedia(\"(max-width: 1000px)\");
        let calendar;

        function updateCalendarDuration() {
          if (mediaQuery.matches) {
          //  console.log(\"Setting calendar duration to 3 days\");
            calendar.changeView('timeGridThreeDay');
          } else {
         //   console.log(\"Setting calendar duration to 7 days\");
            calendar.changeView('timeGridWeek');
          }
        }

        window.onload = () => {
          calendar = new FullCalendar.Calendar(calendarElt, {

         eventContent: function (arg) {
    let stock = arg.event.extendedProps.stock;
    let staffs = arg.event.extendedProps.staffs;
    let quantityCommanded = arg.event.extendedProps.quantityCommanded;

     //  console.log pour afficher le contenu de staffs
      console.log('Contenu de staffs :', staffs);


    // Vérifiez si quantityCommanded est null, et si c'est le cas, affectez 0
    if (quantityCommanded === null) {
        quantityCommanded = 0;
    }

    let stockHtml = '<div class=\"event-stock\"> ' + 'Il reste : '  + stock + ' places' + '</div>'; 

   let staffsHtml = '<div class=\"event-q\"> ' + ' staff :'+ staffs + '</div>';

    let quantityCommandedHtml = '';
    if (quantityCommanded === 0) {
        quantityCommandedHtml = '<div class=\"event-quantity\"> ' + ' déjà pris: 0 ' + '</div>';
    } else {
        quantityCommandedHtml = '<div class=\"event-quantity\"> ' + ' déjà pris : ' + quantityCommanded + '</div>';
    }
    let titleStyle = 'font-weight: bold; font-size: 20px;';
    return {
       // html:  '<div style=\"' + titleStyle + '\">' + arg.event.title + '</div>' + stockHtml + quantityCommandedHtml 
        html:  '<div style=\"' + titleStyle + '\">' + arg.event.title + '</div>' +  staffsHtml
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
      
                //probleme secu avec raw?
                events: {{ data|raw }},
                //editable pour glisser deposer et agrandir
                editable: true,
                //agrandir depuis le haut de la cellule
                eventResizableFromStart: true,

                //crée un objet (event et oldevent(date d'origine)) à chaque fois que je clique un rdv
                eventClick: function(e) {
                    let id = e.event.id;
                   // let url = \"https://127.0.0.1:8000/admin/calendarstaff/\" + id + \"/edit/\";
                   let url = \"https://127.0.0.1:8000/admin/staffplanningshow/\" + id ;
                    window.location.href = url;
                },




                // Action lors du clic sur une date
                dateClick: function(info) {
                    let clickedDate = moment(info.date).format('YYYY-MM-DD HH:mm');
                    console.log('Clicked date:', clickedDate);

                     // Définir un cookie avec la valeur de clickedDate
                 document.cookie = `clickedDate=\${encodeURIComponent(clickedDate)}; path=/`;


                      // Ouvrir la page de création de séance 
              var url = 'https://127.0.0.1:8000/admin/calendarstaff/new';
          window.location.href = url;





                  
                }
            });

            calendar.render();
        };
    </script>
{% endblock %}
", "admin/staffplanning/main.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\admin\\staffplanning\\main.html.twig");
    }
}
