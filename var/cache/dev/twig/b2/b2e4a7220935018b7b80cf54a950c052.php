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

/* _partials/_nav.html.twig */
class __TwigTemplate_a591e5d41f0fd669d6c3ac234ddb552e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav.html.twig"));

        // line 1
        echo "
<header id=\"navbar\" class=\"nav\">
    <a class=\"navbar-brand\" href=\"/\">
\t\t\t<img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/logoeolia170px.png"), "html", null, true);
        echo "\" alt=\"char à voile Baie de Somme\"></a>
     

     <div class=\"dropdown-1\">
        <button>Consulter le planning</button> 
            <div class=\"content\">
              <a class=\"asous\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agenda");
        echo "\"> Toutes les activités</a>
              <a class=\"asous\" href=\"/ \"> Char à voile</a>
\t\t\t\t<a class=\"asous\" href=\"/\"> Catamaran</a>
\t\t\t\t<a class=\"asous\" href=\"/\"> Char à voile Kid</a>
            </div>
    </div>


\t    <a class=\"aderoulant\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_activitie_index");
        echo "\">Formulaire de recherche</a>
 \t\t
\t
\t\t\t<a class=\"aderoulant\" href=\"/\">Contact</a>
\t\t
\t\t
\t\t
\t\t\t


\t\t";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "
\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\"/\">Commandes</a>
\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\"/\">Déconnexion</a>
\t\t\t
\t\t\t\t";
            // line 36
            echo "\t\t\t\t<a class=\"aderoulant\" href=\"/ \"id=\"panier-link\">🛒
        (";
            // line 37
            echo ")
\t\t\t\t</a>
\t\t\t
\t\t\t";
        } else {
            // line 41
            echo "\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\" ";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
            echo "\">Création compte</a>
\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t
\t\t\t";
        }
        // line 47
        echo "

       <a href=\"/\">Admin</a>



  </div>
   
</nav>


     <a class=\"icon\" onclick = \"myFunction()\">&#9776;</a>

</header>

";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "  ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
  ";
        // line 65
        echo "                                              

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_partials/_nav.html.twig";
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
        return array (  156 => 65,  151 => 63,  132 => 62,  115 => 47,  109 => 44,  104 => 42,  101 => 41,  95 => 37,  92 => 36,  84 => 29,  82 => 28,  69 => 18,  58 => 10,  49 => 4,  44 => 1,);
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
              <a class=\"asous\" href=\"{{ path('app_agenda')}}\"> Toutes les activités</a>
              <a class=\"asous\" href=\"/ \"> Char à voile</a>
\t\t\t\t<a class=\"asous\" href=\"/\"> Catamaran</a>
\t\t\t\t<a class=\"asous\" href=\"/\"> Char à voile Kid</a>
            </div>
    </div>


\t    <a class=\"aderoulant\" href=\"{{ path('app_admin_activitie_index') }}\">Formulaire de recherche</a>
 \t\t
\t
\t\t\t<a class=\"aderoulant\" href=\"/\">Contact</a>
\t\t
\t\t
\t\t
\t\t\t


\t\t{% if app.user %}

\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\"/\">Commandes</a>
\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\"/\">Déconnexion</a>
\t\t\t
\t\t\t\t{# CartService enregistré dans twig.yaml#}
\t\t\t\t<a class=\"aderoulant\" href=\"/ \"id=\"panier-link\">🛒
        ({#{{ cartService.total | amount }}#})
\t\t\t\t</a>
\t\t\t
\t\t\t{% else %}
\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\" {{ path('app_registration')  }}\">Création compte</a>
\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\"{{ path('app_login') }}\">Connexion</a>
\t\t\t
\t\t\t{% endif %}


       <a href=\"/\">Admin</a>



  </div>
   
</nav>


     <a class=\"icon\" onclick = \"myFunction()\">&#9776;</a>

</header>

{% block javascripts %}
  {{ encore_entry_link_tags('app') }}
  {# <script src=\"{{ asset('assets/js/cartamount.js') }}\"></script> #}
                                              

{% endblock %}", "_partials/_nav.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\_partials\\_nav.html.twig");
    }
}
