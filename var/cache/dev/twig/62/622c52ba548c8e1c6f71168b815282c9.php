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

/* _partials/_nav_nav.html.twig */
class __TwigTemplate_d8c69c4a4cdef1372dcd79c5b9b9b104 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav_nav.html.twig"));

        // line 1
        echo "<header id=\"navbar\" class=\"nav\">
    <div class=\"dropdown-1\">
        <button>Nos activités-nav-nav</button> 
            <div class=\"content\">
               <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_index");
        echo "\">Toutes les séances</a>
               <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_all_char");
        echo "\">Char à voile</a>
\t\t\t\t<a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cataAll_show");
        echo "\">Catamaran</a>
\t\t\t\t<a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("charkidAll_show");
        echo "\">Char à voile kid</a>
            </div>
    </div>
     <div class=\"dropdown-1\">
        <button>Consulter le planning</button> 
            <div class=\"content\">
              <a class=\"asous\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_main");
        echo " \"> Toutes les activités</a>
              <a class=\"asous\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_main_char");
        echo " \"> Char à voile</a>
\t\t\t\t<a class=\"asous\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_main_cata");
        echo " \"> Catamaran</a>
\t\t\t\t<a class=\"asous\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_main_kid");
        echo " \"> Char à voile Kid</a>
            </div>
    </div>



 \t\t
\t
\t\t\t<a class=\"aderoulant\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_form");
        echo "\">Contact</a>
\t\t

\t\t





\t\t";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34)) {
            // line 35
            echo "
\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_purchase");
            echo "\">Commandes</a>
\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t





\t\t\t\t";
            // line 47
            echo "\t\t\t\t<a class=\"aderoulant\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
            echo " \"id=\"panier-link\">🛒
       (";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, (isset($context["cartService"]) || array_key_exists("cartService", $context) ? $context["cartService"] : (function () { throw new RuntimeError('Variable "cartService" does not exist.', 48, $this->source); })()), "total", [], "any", false, false, false, 48)), "html", null, true);
            echo ")
\t\t\t\t</a>
\t\t\t
\t\t\t";
        } else {
            // line 52
            echo "\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\" ";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
            echo "\">Création Compte</a>
\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t
\t\t\t";
        }
        // line 58
        echo "





  </div>
   
</nav>


     <a class=\"icon\" onclick = \"myFunction()\">&#9776;</a>

</header>


<div id=\"slider\">
                <img class =\"imgslider\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/slide/char-accueiltitregros1500.webp"), "html", null, true);
        echo "\" alt = \"char à voile\" id=\"slide\">
           
                <div id=\"precedent\" onclick=\"ChangeSlide(-1)\">&lt;</div>
                <div id=\"suivant\" onclick=\"ChangeSlide(1)\">&gt;</div>
</div>
 <button class=\"consultplaning\" type=\"button\">
   <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_presentation");
        echo "\">Réserver et Consulter le planing</a>
  </button>


\t";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
        echo "





\t";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo " 
 <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/cartamount.js"), "html", null, true);
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
        return "_partials/_nav_nav.html.twig";
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
        return array (  219 => 87,  216 => 86,  206 => 85,  190 => 90,  188 => 85,  181 => 81,  172 => 75,  153 => 58,  147 => 55,  142 => 53,  139 => 52,  132 => 48,  127 => 47,  117 => 39,  112 => 37,  108 => 35,  106 => 34,  94 => 25,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  62 => 8,  58 => 7,  54 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"navbar\" class=\"nav\">
    <div class=\"dropdown-1\">
        <button>Nos activités-nav-nav</button> 
            <div class=\"content\">
               <a href=\"{{ path('app_calendar_index') }}\">Toutes les séances</a>
               <a href=\"{{ path('calendar_all_char') }}\">Char à voile</a>
\t\t\t\t<a href=\"{{ path('cataAll_show') }}\">Catamaran</a>
\t\t\t\t<a href=\"{{ path('charkidAll_show') }}\">Char à voile kid</a>
            </div>
    </div>
     <div class=\"dropdown-1\">
        <button>Consulter le planning</button> 
            <div class=\"content\">
              <a class=\"asous\" href=\"{{ path('app_calendar_main') }} \"> Toutes les activités</a>
              <a class=\"asous\" href=\"{{ path('app_calendar_main_char') }} \"> Char à voile</a>
\t\t\t\t<a class=\"asous\" href=\"{{ path('app_calendar_main_cata') }} \"> Catamaran</a>
\t\t\t\t<a class=\"asous\" href=\"{{ path('app_calendar_main_kid') }} \"> Char à voile Kid</a>
            </div>
    </div>



 \t\t
\t
\t\t\t<a class=\"aderoulant\" href=\"{{ path('app_contact_form') }}\">Contact</a>
\t\t

\t\t





\t\t{% if app.user %}

\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\"{{ path('app_purchase') }}\">Commandes</a>
\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
\t\t\t





\t\t\t\t{# CartService enregistré dans twig.yaml#}
\t\t\t\t<a class=\"aderoulant\" href=\"{{ path('cart_index') }} \"id=\"panier-link\">🛒
       ({{ cartService.total | amount }})
\t\t\t\t</a>
\t\t\t
\t\t\t{% else %}
\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\" {{ path('app_registration')  }}\">Création Compte</a>
\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\"{{ path('app_login') }}\">Connexion</a>
\t\t\t
\t\t\t{% endif %}






  </div>
   
</nav>


     <a class=\"icon\" onclick = \"myFunction()\">&#9776;</a>

</header>


<div id=\"slider\">
                <img class =\"imgslider\" src=\"{{ asset('assets/uploads/slide/char-accueiltitregros1500.webp')}}\" alt = \"char à voile\" id=\"slide\">
           
                <div id=\"precedent\" onclick=\"ChangeSlide(-1)\">&lt;</div>
                <div id=\"suivant\" onclick=\"ChangeSlide(1)\">&gt;</div>
</div>
 <button class=\"consultplaning\" type=\"button\">
   <a href=\"{{ path('app_presentation') }}\">Réserver et Consulter le planing</a>
  </button>


\t{% block javascripts %}
 
 <script src=\"{{ asset('assets/js/cartamount.js') }}\"></script>

{% endblock %}






\t", "_partials/_nav_nav.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\_partials\\_nav_nav.html.twig");
    }
}
