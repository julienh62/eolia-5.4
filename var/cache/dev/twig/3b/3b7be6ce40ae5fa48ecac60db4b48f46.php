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

/* _partials/_nav_admin.html.twig */
class __TwigTemplate_1965481674f45e72ffc4f00c883d57d8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav_admin.html.twig"));

        // line 1
        echo "

<header id=\"navbar\" class=\"nav\">
    <a class=\"navbar-brand\" href=\"/\">
\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/logoeolia170px.png"), "html", null, true);
        echo "\" alt=\"char à voile Baie de Somme\"></a>
      
\t\t\t\t\t\t\t <a class=\"dropdown-item\" href=\"";
        // line 7
        echo " \">Séances</a>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_staff_index");
        echo " \">Staffs</a>
\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/\"> Liste des utilisateurs</a>\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/\"> Créer un utilisateur</a>

\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/\"> Réglages</a>
  </div>
   
</nav>


     <a class=\"icon\" onclick = \"myFunction()\">&#9776;</a>

</header>
 


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_partials/_nav_admin.html.twig";
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
        return array (  58 => 9,  54 => 7,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<header id=\"navbar\" class=\"nav\">
    <a class=\"navbar-brand\" href=\"/\">
\t\t\t<img src=\"{{ asset('assets/uploads/logoeolia170px.png')}}\" alt=\"char à voile Baie de Somme\"></a>
      
\t\t\t\t\t\t\t <a class=\"dropdown-item\" href=\"{#{{ path('admin_main_calendar')  }}#} \">Séances</a>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_admin_staff_index')  }} \">Staffs</a>
\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/\"> Liste des utilisateurs</a>\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/\"> Créer un utilisateur</a>

\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/\"> Réglages</a>
  </div>
   
</nav>


     <a class=\"icon\" onclick = \"myFunction()\">&#9776;</a>

</header>
 


", "_partials/_nav_admin.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\_partials\\_nav_admin.html.twig");
    }
}
