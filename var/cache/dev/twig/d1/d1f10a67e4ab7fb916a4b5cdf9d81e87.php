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

/* _partials/_navaccueil.html.twig */
class __TwigTemplate_8e8732ea11d41b48c5524a4f74b54eb3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_navaccueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_navaccueil.html.twig"));

        // line 1
        echo "

<header id=\"navbar\" class=\"nav\">
    <a class=\"navbar-brand\" href=\"/\">
\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/logoeolia170px.png"), "html", null, true);
        echo "\" alt=\"char à voile Baie de Somme\"></a>
     

     <div class=\"dropdown-1\">
        <button>Consulter le planning</button> 
            <div class=\"content\">
             <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agenda");
        echo "\"> Toutes les activités</a> 
             <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agenda_char");
        echo " \"> Char à voile</a>
\t\t\t\t\t\t <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agenda_cata");
        echo "\"> Catamaran </a>
\t\t\t\t<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agenda_char_kid");
        echo "\"> Char à voile Kid</a>
        
            </div>
    </div>

         <a class=\"aderoulant\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_filter");
        echo "\">Formulaire de recherche</a>

 \t\t\t
        <a class=\"aderoulant\" href=\"/\">Contact</a>
\t\t
    




\t\t";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
            // line 30
            echo "
\t\t\t
\t\t\t\t<a href=\"/\">Commandes</a>
\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t
\t\t\t\t";
            // line 37
            echo "\t\t\t\t<a href=\"/ \"id=\"panier-link\">🛒
\t\t\t  \t(";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, (isset($context["cartService"]) || array_key_exists("cartService", $context) ? $context["cartService"] : (function () { throw new RuntimeError('Variable "cartService" does not exist.', 38, $this->source); })()), "total", [], "any", false, false, false, 38)), "html", null, true);
            echo ")
\t\t\t\t</a>
\t\t\t
\t\t\t";
        } else {
            // line 42
            echo "\t\t\t
\t\t\t\t<a href=\" ";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
            echo "\">Création compte</a>
\t\t\t
\t\t\t\t<a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t
\t\t\t";
        }
        // line 48
        echo "
       <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_agenda");
        echo "\">Admin</a>




  </div>
   
</nav>


     <a class=\"icon\" onclick = \"myFunction()\">&#9776;</a>

</header>


<div id=\"slider\">
                <img class =\"imgslider\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/slide/char-accueiltitregros1500.webp"), "html", null, true);
        echo "\" alt = \"char à voile\" id=\"slide\">
           
                <div id=\"precedent\" onclick=\"ChangeSlide(-1)\">&lt;</div>
                <div id=\"suivant\" onclick=\"ChangeSlide(1)\">&gt;</div>
</div>
<div id=\"slidermobil\">
            \t<a class=\"slidera\" href=\"/\">  <img class =\"imgslider\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/slide/accueil-mobil-char.webp"), "html", null, true);
        echo "\" alt = \"char à voile\" id=\"slidemobil\">
              </a> 

                <div id=\"precedentmob\" onclick=\"ChangeSlideMob(-1)\">&lt;</div>
                <div id=\"suivantmob\" onclick=\"ChangeSlideMob(1)\">&gt;</div>
</div>
 <button class=\"consultplaning\" type=\"button\">
   <a class=\"aderoulant\" href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_presentation");
        echo "\">Réserver et Consulter le planing</a>
  </button>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_partials/_navaccueil.html.twig";
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
        return array (  169 => 78,  159 => 71,  150 => 65,  131 => 49,  128 => 48,  122 => 45,  117 => 43,  114 => 42,  107 => 38,  104 => 37,  99 => 34,  93 => 30,  91 => 29,  78 => 19,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<header id=\"navbar\" class=\"nav\">
    <a class=\"navbar-brand\" href=\"/\">
\t\t\t<img src=\"{{ asset('assets/uploads/logoeolia170px.png')}}\" alt=\"char à voile Baie de Somme\"></a>
     

     <div class=\"dropdown-1\">
        <button>Consulter le planning</button> 
            <div class=\"content\">
             <a href=\"{{ path('app_agenda') }}\"> Toutes les activités</a> 
             <a href=\"{{ path('app_agenda_char') }} \"> Char à voile</a>
\t\t\t\t\t\t <a href=\"{{ path('app_agenda_cata')}}\"> Catamaran </a>
\t\t\t\t<a href=\"{{ path('app_agenda_char_kid')}}\"> Char à voile Kid</a>
        
            </div>
    </div>

         <a class=\"aderoulant\" href=\"{{ path('app_calendar_filter')}}\">Formulaire de recherche</a>

 \t\t\t
        <a class=\"aderoulant\" href=\"/\">Contact</a>
\t\t
    




\t\t{% if app.user %}

\t\t\t
\t\t\t\t<a href=\"/\">Commandes</a>
\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t
\t\t\t\t{# CartService enregistré dans twig.yaml#}
\t\t\t\t<a href=\"/ \"id=\"panier-link\">🛒
\t\t\t  \t({{ cartService.total | amount }})
\t\t\t\t</a>
\t\t\t
\t\t\t{% else %}
\t\t\t
\t\t\t\t<a href=\" {{ path('app_registration')  }}\">Création compte</a>
\t\t\t
\t\t\t\t<a href=\"{{ path('app_login') }}\">Connexion</a>
\t\t\t
\t\t\t{% endif %}

       <a href=\"{{ path('app_admin_agenda') }}\">Admin</a>




  </div>
   
</nav>


     <a class=\"icon\" onclick = \"myFunction()\">&#9776;</a>

</header>


<div id=\"slider\">
                <img class =\"imgslider\" src=\"{{ asset('assets/uploads/slide/char-accueiltitregros1500.webp')}}\" alt = \"char à voile\" id=\"slide\">
           
                <div id=\"precedent\" onclick=\"ChangeSlide(-1)\">&lt;</div>
                <div id=\"suivant\" onclick=\"ChangeSlide(1)\">&gt;</div>
</div>
<div id=\"slidermobil\">
            \t<a class=\"slidera\" href=\"/\">  <img class =\"imgslider\" src=\"{{ asset('assets/uploads/slide/accueil-mobil-char.webp')}}\" alt = \"char à voile\" id=\"slidemobil\">
              </a> 

                <div id=\"precedentmob\" onclick=\"ChangeSlideMob(-1)\">&lt;</div>
                <div id=\"suivantmob\" onclick=\"ChangeSlideMob(1)\">&gt;</div>
</div>
 <button class=\"consultplaning\" type=\"button\">
   <a class=\"aderoulant\" href=\"{{ path('app_presentation') }}\">Réserver et Consulter le planing</a>
  </button>
{# {% block javascripts %}
   <script src=\"{{ asset('assets/js/cartamount.js') }}\"></script>
{% endblock %} #}
", "_partials/_navaccueil.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\_partials\\_navaccueil.html.twig");
    }
}
