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
class __TwigTemplate_19a20dab5ee67dc8395285adc8ec260c extends Template
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
                 ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['App\Twig\GenerateLinkExtension']->generateCategoryLinks());
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 13
            echo "                <a class=\"asous\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agenda_by_category", ["categoryTitle" => twig_get_attribute($this->env, $this->source, $context["category"], "titleCategory", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "titleCategory", [], "any", false, false, false, 13), "html", null, true);
            echo "</a>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </div>
    </div>

         <a class=\"aderoulant\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_filter");
        echo "\">Formulaire de recherche</a>

 \t\t\t
        <a class=\"aderoulant\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_form");
        echo "\">Contact</a>
\t\t
    




\t\t";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "
\t\t\t
\t\t\t\t<a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_purchase");
            echo "\">Commandes</a>
\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t
\t\t\t\t";
            // line 36
            echo "\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
            echo "\"id=\"panier-link\">🛒
\t\t\t  \t(";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, (isset($context["cartService"]) || array_key_exists("cartService", $context) ? $context["cartService"] : (function () { throw new RuntimeError('Variable "cartService" does not exist.', 37, $this->source); })()), "total", [], "any", false, false, false, 37)), "html", null, true);
            echo ")
\t\t\t\t</a>
\t\t\t
\t\t\t";
        } else {
            // line 41
            echo "\t\t\t
\t\t\t\t<a href=\" ";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
            echo "\">Création compte</a>
\t\t\t
\t\t\t\t<a href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t
\t\t\t";
        }
        // line 47
        echo "
       <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_agenda");
        echo "\">Admin</a>




  </div>
   
</nav>


     <a class=\"icon\" onclick = \"myFunction()\">&#9776;</a>

</header>


<div id=\"slider\">
                <img class =\"imgslider\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/slide/char-accueiltitregros1500.webp"), "html", null, true);
        echo "\" alt = \"char à voile\" id=\"slide\">
           
                <div id=\"precedent\" onclick=\"ChangeSlide(-1)\">&lt;</div>
                <div id=\"suivant\" onclick=\"ChangeSlide(1)\">&gt;</div>
</div>
<div id=\"slidermobil\">
            \t<a class=\"slidera\" href=\"/\">  <img class =\"imgslider\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/slide/accueil-mobil-char.webp"), "html", null, true);
        echo "\" alt = \"char à voile\" id=\"slidemobil\">
              </a> 

                <div id=\"precedentmob\" onclick=\"ChangeSlideMob(-1)\">&lt;</div>
                <div id=\"suivantmob\" onclick=\"ChangeSlideMob(1)\">&gt;</div>
</div>
 <button class=\"consultplaning\" type=\"button\">
   <a class=\"aderoulant\" href=\"";
        // line 77
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
        return array (  181 => 77,  171 => 70,  162 => 64,  143 => 48,  140 => 47,  134 => 44,  129 => 42,  126 => 41,  119 => 37,  114 => 36,  109 => 33,  104 => 31,  100 => 29,  98 => 28,  88 => 21,  82 => 18,  77 => 15,  66 => 13,  62 => 12,  58 => 11,  49 => 5,  43 => 1,);
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
                 {% for category in generateCategoryLinks() %}
                <a class=\"asous\" href=\"{{ path('app_agenda_by_category', {'categoryTitle': category.titleCategory}) }}\">{{ category.titleCategory }}</a>
              {% endfor %}
            </div>
    </div>

         <a class=\"aderoulant\" href=\"{{ path('app_calendar_filter')}}\">Formulaire de recherche</a>

 \t\t\t
        <a class=\"aderoulant\" href=\"{{ path('app_contact_form')}}\">Contact</a>
\t\t
    




\t\t{% if app.user %}

\t\t\t
\t\t\t\t<a href=\"{{ path('app_purchase') }}\">Commandes</a>
\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t
\t\t\t\t{# CartService enregistré dans twig.yaml#}
\t\t\t\t<a href=\"{{ path('cart_index') }}\"id=\"panier-link\">🛒
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
