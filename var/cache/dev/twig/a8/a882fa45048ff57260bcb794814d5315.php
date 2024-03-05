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
class __TwigTemplate_48e367444105b21e2db23a076a42494f extends Template
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_agenda");
        echo " \">Séances</a>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_staff_index");
        echo " \">Staffs</a>

\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_index");
        echo " \">Catégories </a>
\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        echo " > Liste des utilisateurs</a>\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_new");
        echo "\"> Créer un utilisateur</a>

\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_category_setting_index");
        echo " \"> Réglages</a>
  </div>
   
</nav>


     <a class=\"icon\" onclick = \"myFunction()\">&#9776;</a>

</header>
 
<script>
   console.log(\"cc-menu.js\");
/*le bouton icon va permuter nav et navresponsive au click */
function myFunction() {
 var x = document.getElementById(\"navbar\");
 if (x.className === \"nav\") {
     x.className += \" responsive\";

 } else {
     x.className = \"nav\";
 }
}
</script>

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
        return array (  79 => 17,  74 => 15,  69 => 13,  64 => 11,  59 => 9,  54 => 7,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<header id=\"navbar\" class=\"nav\">
    <a class=\"navbar-brand\" href=\"/\">
\t\t\t<img src=\"{{ asset('assets/uploads/logoeolia170px.png')}}\" alt=\"char à voile Baie de Somme\"></a>
      
\t\t\t\t\t\t\t <a class=\"dropdown-item\" href=\"{{ path('app_admin_agenda')  }} \">Séances</a>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('admin_staff_index')  }} \">Staffs</a>

\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_admin_category_index')  }} \">Catégories </a>
\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href={{ path('admin_user_index') }} > Liste des utilisateurs</a>\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('admin_user_new')  }}\"> Créer un utilisateur</a>

\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_admin_category_setting_index')  }} \"> Réglages</a>
  </div>
   
</nav>


     <a class=\"icon\" onclick = \"myFunction()\">&#9776;</a>

</header>
 
<script>
   console.log(\"cc-menu.js\");
/*le bouton icon va permuter nav et navresponsive au click */
function myFunction() {
 var x = document.getElementById(\"navbar\");
 if (x.className === \"nav\") {
     x.className += \" responsive\";

 } else {
     x.className = \"nav\";
 }
}
</script>

", "_partials/_nav_admin.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\_partials\\_nav_admin.html.twig");
    }
}
