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

/* agenda/index.html.twig */
class __TwigTemplate_f93da0c2d148a21fc6ed6b47b8b861c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agenda/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agenda/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "agenda/index.html.twig", 1);
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

        echo "Hello AgendaController!";
        
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
        echo "    <h1>Calendrier de toutes les séances </h1>
    <div id=\"calendrier\"> </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            // Your code that interacts with the DOM goes here
            // For instance, initializing a FullCalendar instance

            let calendarElt = document.getElementById('calendrier');
            let calendar; // Define calendar in the outer scope
            if (calendarElt) {
                let mediaQuery = window.matchMedia(\"(max-width: 1000px)\");

                function updateCalendarDuration() {
                    if (calendar && mediaQuery.matches) {
                        calendar.changeView('timeGridThreeDay');
                    } else if (calendar) {
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
                            console.log('calendar', calendar);

                            // Conversion de stockg en entier en utilisant parseInt avec base 10
                            let stock = parseInt(stockg, 10);

                            // Affichage du résultat de la conversion de stock dans la console
                            console.log('stock', stock);


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


                            let stockHtml = '<div class=\"event-stock\"> ' + 'Il reste : '  + stock + ' places' + '</div>';
                            //   let fullNameHtml = '<div class=\"event-q\"> ' + ' staff :'+ fullName + '</div>';
                            // let quantitecommandeHtml = '<div class=\"event-q\"> ' + 'place déja prise :'+ quantitecommande + '</div>';
                            //  let idHtml = '<div class=\"event-stock\"> ' + arg.event.id + '</div>';

                            let titleStyle = 'font-weight: bold; font-size: 20px;';

                            return {
                                html:  '<div style=\"' + titleStyle + '\">' + arg.event.title + '</div>' + stockHtml
                                //  html:  '<div style=\"' + titleStyle + '\">' + arg.event.title + '</div>' + stockHtml + quantityCommandedHtml
                                //html: stockHtml + quantitecommandeHtml + arg.event.title + idHtml
                            };

                        },
                      
                        initialView: 'timeGridWeek',
                        views: {
                            timeGridThreeDay: {
                                type: 'timeGrid',
                                duration: {days: 3}
                            },
                            timeGridWeek: {
                                type: 'timeGrid',
                                duration: {days: 7}
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
        // line 105
        echo (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 105, $this->source); })());
        echo " ,
                        ";
        // line 107
        echo "
                    });

                    calendar.on('eventClick', (e) => {
                        let donnees = {
                            \"id\": e.event.id
                        };
                        let id = donnees.id;
                        let url = \"https://127.0.0.1:8000/activitieshow/\" + id;
                        window.location.href = url;
                    });

                    calendar.render();
                    updateCalendarDuration(); // Initial call to set the calendar duration

                    // console.log('Page loaded');
                };

                mediaQuery.addEventListener('change', () => {
                    //  console.log('Media query change event:', mediaQuery.matches);
                    updateCalendarDuration();
                });
            } else {
                console.error('Calendar element not found!');
            }
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
        return "agenda/index.html.twig";
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
        return array (  213 => 107,  209 => 105,  111 => 11,  101 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AgendaController!{% endblock %}

{% block body %}
    <h1>Calendrier de toutes les séances </h1>
    <div id=\"calendrier\"> </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            // Your code that interacts with the DOM goes here
            // For instance, initializing a FullCalendar instance

            let calendarElt = document.getElementById('calendrier');
            let calendar; // Define calendar in the outer scope
            if (calendarElt) {
                let mediaQuery = window.matchMedia(\"(max-width: 1000px)\");

                function updateCalendarDuration() {
                    if (calendar && mediaQuery.matches) {
                        calendar.changeView('timeGridThreeDay');
                    } else if (calendar) {
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
                            console.log('calendar', calendar);

                            // Conversion de stockg en entier en utilisant parseInt avec base 10
                            let stock = parseInt(stockg, 10);

                            // Affichage du résultat de la conversion de stock dans la console
                            console.log('stock', stock);


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


                            let stockHtml = '<div class=\"event-stock\"> ' + 'Il reste : '  + stock + ' places' + '</div>';
                            //   let fullNameHtml = '<div class=\"event-q\"> ' + ' staff :'+ fullName + '</div>';
                            // let quantitecommandeHtml = '<div class=\"event-q\"> ' + 'place déja prise :'+ quantitecommande + '</div>';
                            //  let idHtml = '<div class=\"event-stock\"> ' + arg.event.id + '</div>';

                            let titleStyle = 'font-weight: bold; font-size: 20px;';

                            return {
                                html:  '<div style=\"' + titleStyle + '\">' + arg.event.title + '</div>' + stockHtml
                                //  html:  '<div style=\"' + titleStyle + '\">' + arg.event.title + '</div>' + stockHtml + quantityCommandedHtml
                                //html: stockHtml + quantitecommandeHtml + arg.event.title + idHtml
                            };

                        },
                      
                        initialView: 'timeGridWeek',
                        views: {
                            timeGridThreeDay: {
                                type: 'timeGrid',
                                duration: {days: 3}
                            },
                            timeGridWeek: {
                                type: 'timeGrid',
                                duration: {days: 7}
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
                        events: {{ data|raw }} ,
                        {#   events: {{ dump(data|raw) }}, #}

                    });

                    calendar.on('eventClick', (e) => {
                        let donnees = {
                            \"id\": e.event.id
                        };
                        let id = donnees.id;
                        let url = \"https://127.0.0.1:8000/activitieshow/\" + id;
                        window.location.href = url;
                    });

                    calendar.render();
                    updateCalendarDuration(); // Initial call to set the calendar duration

                    // console.log('Page loaded');
                };

                mediaQuery.addEventListener('change', () => {
                    //  console.log('Media query change event:', mediaQuery.matches);
                    updateCalendarDuration();
                });
            } else {
                console.error('Calendar element not found!');
            }
        });
    </script>
{% endblock %}
", "agenda/index.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\agenda\\index.html.twig");
    }
}
