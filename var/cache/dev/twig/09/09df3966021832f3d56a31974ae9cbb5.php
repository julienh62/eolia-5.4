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

/* agenda/agenda.html.twig */
class __TwigTemplate_0205a1cc4a0d319b24f97fead5ad28b2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agenda/agenda.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "agenda/agenda.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "agenda/agenda.html.twig", 1);
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

        echo "eoliacalendarchar!";
        
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
        echo "    <h1> Calendrier des séances ";
        echo twig_escape_filter($this->env, (isset($context["categoryTitle"]) || array_key_exists("categoryTitle", $context) ? $context["categoryTitle"] : (function () { throw new RuntimeError('Variable "categoryTitle" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</h1>

    <div class=\"calendaraccueil\"> 
        <img class=\"imgsite\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 11, $this->source); })()), "image", [], "array", false, false, false, 11))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["categoryTitle"]) || array_key_exists("categoryTitle", $context) ? $context["categoryTitle"] : (function () { throw new RuntimeError('Variable "categoryTitle" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " Baie de Somme\">
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

    // line 23
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
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
                    let eventData = ";
        // line 46
        echo json_encode(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 46, $this->source); })()), "events", [], "any", false, false, false, 46));
        echo ";
                    calendar = new FullCalendar.Calendar(calendarElt, {
                        events: eventData,
                        eventContent: function (arg) {
                            // ... (votre code eventContent)
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
                    updateCalendarDuration();
                };

                mediaQuery.addEventListener('change', () => {
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
        return "agenda/agenda.html.twig";
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
        return array (  159 => 46,  133 => 24,  123 => 23,  100 => 11,  93 => 8,  91 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}eoliacalendarchar!{% endblock %}

{% block body %}
    {# Affiche le JSON de data #}
    {# {{dump(data)}} #}
    <h1> Calendrier des séances {{ categoryTitle }}</h1>

    <div class=\"calendaraccueil\"> 
        <img class=\"imgsite\" src=\"{{ asset('uploads/images/' ~ image['image']) }}\" alt=\"{{ categoryTitle }} Baie de Somme\">
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
                    let eventData = {{ data.events|json_encode|raw }};
                    calendar = new FullCalendar.Calendar(calendarElt, {
                        events: eventData,
                        eventContent: function (arg) {
                            // ... (votre code eventContent)
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
                    updateCalendarDuration();
                };

                mediaQuery.addEventListener('change', () => {
                    updateCalendarDuration();
                });
            } else {
                console.error('Calendar element not found!');
            }
        });
    </script>
{% endblock %}
", "agenda/agenda.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\agenda\\agenda.html.twig");
    }
}
