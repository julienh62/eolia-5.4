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

/* _partials/_footer.html.twig */
class __TwigTemplate_819f6bbedb862ba5b91e58d85a1ddcb5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_footer.html.twig"));

        // line 1
        echo "<div id=\"footer\">
            
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
            </nav>           
        </div>
\t
\t\t
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_partials/_footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"footer\">
            
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
            </nav>           
        </div>
\t
\t\t
", "_partials/_footer.html.twig", "C:\\wamp64\\www\\symfony\\eolia-5.4\\templates\\_partials\\_footer.html.twig");
    }
}
