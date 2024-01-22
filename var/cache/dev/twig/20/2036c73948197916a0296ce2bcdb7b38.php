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

/* baseaccueil.html.twig */
class __TwigTemplate_5cde8d6c87297766be49f5757b918964 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseaccueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseaccueil.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\"> 

    



    
\t
\t\t
\t\t";
        // line 17
        echo "     

 ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
       


    </head>


\t<body>

\t\t";
        // line 34
        $this->loadTemplate("_partials/_navaccueil.html.twig", "baseaccueil.html.twig", 34)->display($context);
        echo " 
\t\t  
\t\t
\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["rubrique"] => $context["messages"]) {
            // line 38
            echo "\t\t\t<main class=\"container\">
\t\t\t\t<div class=\"alert alert-";
            // line 39
            echo twig_escape_filter($this->env, $context["rubrique"], "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 41
                echo "\t\t\t\t\t\t<p>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t\t</div>
     
          </main>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rubrique'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t
\t\t
\t<main class=\"container\">  
\t\t
\t\t";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "</main> 
\t\t  <div id=\"footer\">
            ";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        // line 68
        echo "        </div>
\t
\t\t";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "\t</body>
   
  
     


\t
</html>




";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Éolia";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "                ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
      \t";
        // line 22
        echo "        \t    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css'>";
        // line 23
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 56
        echo " <div class=\"reseaux\">
                <a href=\"https://www.facebook.com/charavoilepicardie\" target=\"_blank\" class=\"fab fa-facebook-square\"></a>
                <a href=\"https://www.youtube.com/watch?v=suYScmKY7os\" target=\"_blank\" class=\"fab fa-youtube-square\"></a>
                <a href=\"https://www.instagram.com/eoliapicardie/?hl=fr\" target=\"_blank\" class=\"fab fa-instagram-square\"></a>
            </div>
            <nav class=\"navfooter\">
                <ul class=\"légales\">
                    <li><a href=\"politique-confidentialite.php\">POLITIQUE DE CONFIDENTIALITÉ</a></li>
                    <li><a href=\"mentions-legales.php\">MENTIONS LÉGALES</a></li>
                    <li><a href=\"cgv.php\">CGV</a></li>
                </ul>
            </nav>            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "          ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
         <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/menu.js"), "html", null, true);
        echo "\"></script>
         <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/slider.js"), "html", null, true);
        echo "\" defer> </script> 
         ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "baseaccueil.html.twig";
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
        return array (  283 => 73,  279 => 72,  274 => 71,  264 => 70,  243 => 56,  233 => 55,  214 => 52,  203 => 23,  201 => 22,  196 => 20,  186 => 19,  167 => 5,  145 => 75,  143 => 70,  139 => 68,  137 => 55,  133 => 53,  131 => 52,  125 => 48,  115 => 43,  106 => 41,  102 => 40,  98 => 39,  95 => 38,  91 => 37,  85 => 34,  74 => 25,  72 => 19,  68 => 17,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Éolia{% endblock %}</title>

    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.css\" integrity=\"sha256-uq9PNlMzB+1h01Ij9cx7zeE2OR2pLAfRw3uUUOOPKdA=\" crossorigin=\"anonymous\"> 

    



    
\t
\t\t
\t\t{# feuille de style #}
     

 {% block stylesheets %}
                {{encore_entry_link_tags(\"app\")}}
      \t{#<link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\"> #}
        \t    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css'>{# pour charger icone facebook #}

        {% endblock %}

       


    </head>


\t<body>

\t\t{% include \"_partials/_navaccueil.html.twig\" %} 
\t\t  
\t\t
\t\t\t{% for rubrique, messages in app.flashes  %}
\t\t\t<main class=\"container\">
\t\t\t\t<div class=\"alert alert-{{ rubrique }}\">
\t\t\t\t\t{% for message in messages %}
\t\t\t\t\t\t<p>{{ message }}</p>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
     
          </main>

\t\t\t{% endfor %}
\t\t
\t\t
\t<main class=\"container\">  
\t\t
\t\t{% block body %}    {% endblock %}
</main> 
\t\t  <div id=\"footer\">
            {% block footer %}
 <div class=\"reseaux\">
                <a href=\"https://www.facebook.com/charavoilepicardie\" target=\"_blank\" class=\"fab fa-facebook-square\"></a>
                <a href=\"https://www.youtube.com/watch?v=suYScmKY7os\" target=\"_blank\" class=\"fab fa-youtube-square\"></a>
                <a href=\"https://www.instagram.com/eoliapicardie/?hl=fr\" target=\"_blank\" class=\"fab fa-instagram-square\"></a>
            </div>
            <nav class=\"navfooter\">
                <ul class=\"légales\">
                    <li><a href=\"politique-confidentialite.php\">POLITIQUE DE CONFIDENTIALITÉ</a></li>
                    <li><a href=\"mentions-legales.php\">MENTIONS LÉGALES</a></li>
                    <li><a href=\"cgv.php\">CGV</a></li>
                </ul>
            </nav>            {% endblock %}
        </div>
\t
\t\t{% block javascripts %}
          {{ encore_entry_script_tags('app') }}
         <script src=\"{{ asset('assets/js/menu.js') }}\"></script>
         <script src=\"{{ asset('assets/js/slider.js') }}\" defer> </script> 
         {% endblock %}
\t</body>
   
  
     


\t
</html>




", "baseaccueil.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\baseaccueil.html.twig");
    }
}
