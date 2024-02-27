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
        echo "<!-- page accueil -->

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
            echo "                 ";
            // line 14
            echo "                <a class=\"asous\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agenda_by_category", ["categoryTitle" => twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["category"], "titleCategory", [], "any", false, false, false, 14))]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "titleCategory", [], "any", false, false, false, 14), "html", null, true);
            echo "</a>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </div>
              ";
        // line 18
        echo "
    </div>

         <a class=\"aderoulant\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calendar_filter");
        echo "\">Formulaire de recherche</a>

 \t\t\t
        <a class=\"aderoulant\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_form");
        echo "\">Contact</a>
\t\t
    




\t\t";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) {
            // line 32
            echo "
\t\t\t
\t\t\t\t<a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_purchase");
            echo "\">Commandes</a>
\t\t\t
\t\t\t\t<a class=\"aderoulant\" href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
\t\t\t
\t\t\t\t";
            // line 39
            echo "\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
            echo "\"id=\"panier-link\">🛒
\t\t\t  \t(";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AmountExtension']->amount(twig_get_attribute($this->env, $this->source, (isset($context["cartService"]) || array_key_exists("cartService", $context) ? $context["cartService"] : (function () { throw new RuntimeError('Variable "cartService" does not exist.', 40, $this->source); })()), "total", [], "any", false, false, false, 40)), "html", null, true);
            echo ")
\t\t\t\t</a>
\t\t\t
\t\t\t";
        } else {
            // line 44
            echo "\t\t\t
\t\t\t\t<a href=\" ";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
            echo "\">Création compte</a>
\t\t\t
\t\t\t\t<a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t\t
\t\t\t";
        }
        // line 50
        echo "
       <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_agenda");
        echo "\">Admin</a>




  </div>
   
</nav>


     <a class=\"icon\" onclick = \"myFunction()\">&#9776;</a>

</header>


<div id=\"slider\">
                <img class=\"imgslider\" alt=\"char à voile\" id=\"slide\">

           
                <div id=\"precedent\" onclick=\"ChangeSlide(-1)\">&lt;</div>
                <div id=\"suivant\" onclick=\"ChangeSlide(1)\">&gt;</div>
</div>
<!--<div id=\"slidermobil\">
           ";
        // line 75
        echo "              </a> 

                <div id=\"precedentmob\" onclick=\"ChangeSlideMob(-1)\">&lt;</div>
                <div id=\"suivantmob\" onclick=\"ChangeSlideMob(1)\">&gt;</div>
</div> -->
 <button class=\"consultplaning\" type=\"button\">
   <a class=\"aderoulant\" href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_presentation");
        echo "\">Réserver et Consulter le planing</a>
  </button>
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
// Récupérer l'élément du lien du panier
let panierLink = document.getElementById(\"panier-link\");

// Récupérer le montant du panier
let montantPanier = parseFloat(panierLink.innerText.match(/([0-9.]+)/)[0]);

// Vérifier si le montant est différent de 0.00 €
if (montantPanier !== 0.0) {
  // Créer un nouvel élément de texte
  var texteFinaliserCommande = document.createTextNode(
    \"Finalisez votre commande\"
  );

  // Ajouter le texte à l'élément du lien du panier
  panierLink.appendChild(texteFinaliserCommande);

  // Appliquer le style rouge au texte ajouté
  panierLink.style.color = \"red\";
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
        return array (  182 => 81,  174 => 75,  148 => 51,  145 => 50,  139 => 47,  134 => 45,  131 => 44,  124 => 40,  119 => 39,  114 => 36,  109 => 34,  105 => 32,  103 => 31,  93 => 24,  87 => 21,  82 => 18,  79 => 16,  68 => 14,  66 => 13,  62 => 12,  58 => 11,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- page accueil -->

<header id=\"navbar\" class=\"nav\">
    <a class=\"navbar-brand\" href=\"/\">
\t\t\t<img src=\"{{ asset('assets/uploads/logoeolia170px.png')}}\" alt=\"char à voile Baie de Somme\"></a>
     

     <div class=\"dropdown-1\">
        <button>Consulter le planning</button> 
            <div class=\"content\">
             <a href=\"{{ path('app_agenda') }}\"> Toutes les activités</a> 
                 {% for category in generateCategoryLinks() %}
                 {#url_encode Twig convertit tous les caractères spéciaux et les caractères non sécurisés en leur équivalent codé en pourcentage (également appelé URL encoding).#}
                <a class=\"asous\" href=\"{{ path('app_agenda_by_category', {'categoryTitle': category.titleCategory|url_encode}) }}\">{{ category.titleCategory }}</a>
              {% endfor %}
            </div>
              {#{{ category.titleCategory|e }} #}

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
                <img class=\"imgslider\" alt=\"char à voile\" id=\"slide\">

           
                <div id=\"precedent\" onclick=\"ChangeSlide(-1)\">&lt;</div>
                <div id=\"suivant\" onclick=\"ChangeSlide(1)\">&gt;</div>
</div>
<!--<div id=\"slidermobil\">
           {#} \t<a class=\"slidera\" href=\"/\">  <img class =\"imgslider\" src=\"{{ asset('assets/uploads/slide/accueil-mobil-char.webp')}}\" alt = \"char à voile\" id=\"slidemobil\">#}
              </a> 

                <div id=\"precedentmob\" onclick=\"ChangeSlideMob(-1)\">&lt;</div>
                <div id=\"suivantmob\" onclick=\"ChangeSlideMob(1)\">&gt;</div>
</div> -->
 <button class=\"consultplaning\" type=\"button\">
   <a class=\"aderoulant\" href=\"{{ path('app_presentation') }}\">Réserver et Consulter le planing</a>
  </button>
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
// Récupérer l'élément du lien du panier
let panierLink = document.getElementById(\"panier-link\");

// Récupérer le montant du panier
let montantPanier = parseFloat(panierLink.innerText.match(/([0-9.]+)/)[0]);

// Vérifier si le montant est différent de 0.00 €
if (montantPanier !== 0.0) {
  // Créer un nouvel élément de texte
  var texteFinaliserCommande = document.createTextNode(
    \"Finalisez votre commande\"
  );

  // Ajouter le texte à l'élément du lien du panier
  panierLink.appendChild(texteFinaliserCommande);

  // Appliquer le style rouge au texte ajouté
  panierLink.style.color = \"red\";
}
</script>
", "_partials/_navaccueil.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\_partials\\_navaccueil.html.twig");
    }
}
