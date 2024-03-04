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

/* admin/admin_agenda/index.html.twig */
class __TwigTemplate_1a76dd8fccc671190878ea0ff7913435 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_agenda/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_agenda/index.html.twig"));

        $this->parent = $this->loadTemplate("base.admin.html.twig", "admin/admin_agenda/index.html.twig", 1);
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
        echo "    
    <div id=\"calendrier\"> </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js\"></script>

console.log(\"coucou\");


  <script>
  console.log(\"coucou\");
  console.log(\"coucou\");
 // (alert('Message'))
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
                   // Récupération de la valeur de stock depuis arg.event.extendedProps
             let stockg = arg.event.extendedProps.stock;

            // Vérification si stockg est null, isnan pour verifier si c'est un chiffre si oui, affecter 0
               if (stockg === null || stockg === undefined || isNaN(stockg)) {
                 stockg = 0;
             }

            // Conversion de stockg en entier en utilisant parseInt avec base 10
             let stock = parseInt(stockg, 10);

            // Affichage du résultat de la conversion de stock dans la console
            console.log('stock', stock);

            // Récupération de la valeur de staffs depuis arg.event.extendedProps
             let staffs = arg.event.extendedProps.staffs;
                  if (staffs === null || staffs === undefined ) {
                 staffs = \"Aucun staff\";
             }
             console.log('staff', staffs);

            // Récupération de la valeur de quantityCommanded depuis arg.event.extendedProps
             let quantityCommandedg = arg.event.extendedProps.quantityCommanded;

            // Vérification si quantityCommandedg est null, si oui, affecter 0
                if (quantityCommandedg === null || quantityCommandedg === undefined || isNaN(quantityCommandedg)) {
                 quantityCommandedg = 0;
             }

            // Conversion de quantityCommandedg en entier en utilisant parseInt avec base 10
             let quantityCommanded = parseInt(quantityCommandedg, 10);

            // Affichage du résultat de la conversion de quantityCommanded dans la console
            console.log('quantityCommanded', quantityCommanded);

            // Calcul de totalPlace en ajoutant stock et quantityCommanded
             let totalPlace = stock + quantityCommanded;

            // Affichage du résultat de totalPlace dans la console
             console.log('totalplace', totalPlace);

            // Affichage du contenu de staffs dans la console
             console.log('Contenu de staffs :', staffs);


             let stockHtml = '<div class=\"event-stock\"> '  + stock + '</div>';

             let staffsHtml = '<div class=\"event-q\"> ' + ' staff :'+ staffs + '</div>';

    
             let totalPlaceHtml = '<div class=\"event-q\"> ' + totalPlace + '</div>';

             let placeHtml = '<div class=\"event-q\"> ' +  quantityCommanded + ' / ' +  totalPlace + '</div>';
     
            let quantityCommandedHtml = '';
        /*     if (isNaN(quantityCommanded)) {
               quantityCommanded = 0; 
                quantityCommandedHtml = '<div class=\"event-quantity\"> ' + ' déjà pris: 0 ' + '</div>';
            } else {
                quantityCommandedHtml = '<div class=\"event-quantity\"> ' + ' déjà pris : ' + quantityCommanded + '</div>';
            }   */
            let titleStyle = 'font-weight: bold; font-size: 20px;';
            return {
               // html:  '<div style=\"' + titleStyle + '\">' + arg.event.title + '</div>' + stockHtml + quantityCommandedHtml
                 html:  '<div style=\"' + titleStyle + '\">' + arg.event.title + '</div>' + placeHtml +  staffsHtml

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
        // line 137
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 137, $this->source); })());
        echo ",
                //editable pour glisser deposer et agrandir
                editable: true,
                //agrandir depuis le haut de la cellule
                eventResizableFromStart: true,

             
              // Créer un objet (event et oldevent(date d'origine)) à chaque fois que je clique un rendez-vous
              // convertir les caractères non-ASCII et certains caractères spéciaux en une 
              //représentation sécurisée qui peut être transmise via les URL. 
                eventClick: function(e) {
                    let id = encodeURIComponent(e.event.id);
                    let url = \"https://127.0.0.1:8000/admin/agendadetail/\" + id;
                    window.location.href = url;
                },




                // Action lors du clic sur une date
                dateClick: function(info) {
                    let clickedDate = moment(info.date).format('YYYY-MM-DD HH:mm');
                    console.log('Clicked date:', clickedDate);

                    // Définir un cookie avec la valeur de clickedDate
                    document.cookie = `clickedDate=\${encodeURIComponent(clickedDate)}; path=/; SameSite=None; Secure`;

        

               



            // Ouvrir la page de création de séance
            let baseUrl = 'https://127.0.0.1:8000/admin/';
            let path = 'createCalendarChoose';
            let url = baseUrl + encodeURIComponent(path);
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
        return "admin/admin_agenda/index.html.twig";
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
        return array (  243 => 137,  115 => 13,  105 => 12,  93 => 8,  91 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.admin.html.twig' %}

{% block title %}eoliacalendar!{% endblock %}

{% block body %}
    {# me donne le json de data #}
    {# {{dump(data)}} #}
    
    <div id=\"calendrier\"> </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js\"></script>

console.log(\"coucou\");


  <script>
  console.log(\"coucou\");
  console.log(\"coucou\");
 // (alert('Message'))
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
                   // Récupération de la valeur de stock depuis arg.event.extendedProps
             let stockg = arg.event.extendedProps.stock;

            // Vérification si stockg est null, isnan pour verifier si c'est un chiffre si oui, affecter 0
               if (stockg === null || stockg === undefined || isNaN(stockg)) {
                 stockg = 0;
             }

            // Conversion de stockg en entier en utilisant parseInt avec base 10
             let stock = parseInt(stockg, 10);

            // Affichage du résultat de la conversion de stock dans la console
            console.log('stock', stock);

            // Récupération de la valeur de staffs depuis arg.event.extendedProps
             let staffs = arg.event.extendedProps.staffs;
                  if (staffs === null || staffs === undefined ) {
                 staffs = \"Aucun staff\";
             }
             console.log('staff', staffs);

            // Récupération de la valeur de quantityCommanded depuis arg.event.extendedProps
             let quantityCommandedg = arg.event.extendedProps.quantityCommanded;

            // Vérification si quantityCommandedg est null, si oui, affecter 0
                if (quantityCommandedg === null || quantityCommandedg === undefined || isNaN(quantityCommandedg)) {
                 quantityCommandedg = 0;
             }

            // Conversion de quantityCommandedg en entier en utilisant parseInt avec base 10
             let quantityCommanded = parseInt(quantityCommandedg, 10);

            // Affichage du résultat de la conversion de quantityCommanded dans la console
            console.log('quantityCommanded', quantityCommanded);

            // Calcul de totalPlace en ajoutant stock et quantityCommanded
             let totalPlace = stock + quantityCommanded;

            // Affichage du résultat de totalPlace dans la console
             console.log('totalplace', totalPlace);

            // Affichage du contenu de staffs dans la console
             console.log('Contenu de staffs :', staffs);


             let stockHtml = '<div class=\"event-stock\"> '  + stock + '</div>';

             let staffsHtml = '<div class=\"event-q\"> ' + ' staff :'+ staffs + '</div>';

    
             let totalPlaceHtml = '<div class=\"event-q\"> ' + totalPlace + '</div>';

             let placeHtml = '<div class=\"event-q\"> ' +  quantityCommanded + ' / ' +  totalPlace + '</div>';
     
            let quantityCommandedHtml = '';
        /*     if (isNaN(quantityCommanded)) {
               quantityCommanded = 0; 
                quantityCommandedHtml = '<div class=\"event-quantity\"> ' + ' déjà pris: 0 ' + '</div>';
            } else {
                quantityCommandedHtml = '<div class=\"event-quantity\"> ' + ' déjà pris : ' + quantityCommanded + '</div>';
            }   */
            let titleStyle = 'font-weight: bold; font-size: 20px;';
            return {
               // html:  '<div style=\"' + titleStyle + '\">' + arg.event.title + '</div>' + stockHtml + quantityCommandedHtml
                 html:  '<div style=\"' + titleStyle + '\">' + arg.event.title + '</div>' + placeHtml +  staffsHtml

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

             
              // Créer un objet (event et oldevent(date d'origine)) à chaque fois que je clique un rendez-vous
              // convertir les caractères non-ASCII et certains caractères spéciaux en une 
              //représentation sécurisée qui peut être transmise via les URL. 
                eventClick: function(e) {
                    let id = encodeURIComponent(e.event.id);
                    let url = \"https://127.0.0.1:8000/admin/agendadetail/\" + id;
                    window.location.href = url;
                },




                // Action lors du clic sur une date
                dateClick: function(info) {
                    let clickedDate = moment(info.date).format('YYYY-MM-DD HH:mm');
                    console.log('Clicked date:', clickedDate);

                    // Définir un cookie avec la valeur de clickedDate
                    document.cookie = `clickedDate=\${encodeURIComponent(clickedDate)}; path=/; SameSite=None; Secure`;

        

               



            // Ouvrir la page de création de séance
            let baseUrl = 'https://127.0.0.1:8000/admin/';
            let path = 'createCalendarChoose';
            let url = baseUrl + encodeURIComponent(path);
            window.location.href = url;


           

                }
            });

         
            calendar.render();
        };
    </script>
{% endblock %}
", "admin/admin_agenda/index.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\admin\\admin_agenda\\index.html.twig");
    }
}
