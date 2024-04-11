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

/* base.html.twig */
class __TwigTemplate_92d7baed5e0d5fe09f241cb2f30f6a10 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'js' => [$this, 'block_js'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>Localito</title>
    <link href=\"https://cdn.jsdelivr.net/npm/beercss@3.4.0/dist/cdn/beer.min.css\" rel=\"stylesheet\">
    <script type=\"module\" src=\"https://cdn.jsdelivr.net/npm/beercss@3.4.0/dist/cdn/beer.min.js\" defer></script>
    <script type=\"module\" src=\"https://cdn.jsdelivr.net/npm/material-dynamic-colors@1.0.5/dist/cdn/material-dynamic-colors.min.js\" defer></script>
    <script type=\"module\" src=\"/assets/main.js\" defer></script>
    <link href=\"/assets/main.css\" rel=\"stylesheet\">
    ";
        // line 11
        $this->displayBlock('css', $context, $blocks);
        // line 12
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 13
        echo "  </head>
  <body class=\"light\">
  ";
        // line 15
        if ( !array_key_exists("login", $context)) {
            // line 16
            echo "    <header class=\"responsive fixed\">
      <nav>
      ";
            // line 18
            if (((isset($context["rol"]) || array_key_exists("rol", $context) ? $context["rol"] : (function () { throw new RuntimeError('Variable "rol" does not exist.', 18, $this->source); })()) == "admin")) {
                // line 19
                echo "        <button class=\"circle transparent\" data-ui=\"#menu-dialog\">
          <i>menu</i>
        </button>
      ";
            }
            // line 23
            echo "        <h5 class=\"max\"><a href=\"/\">Localito</a></h5>
      <a href=\"/logout\" class=\"button transparent circle\"><i>power_settings_new</i></a>
      </nav>
    </header>
    ";
            // line 27
            if (((isset($context["rol"]) || array_key_exists("rol", $context) ? $context["rol"] : (function () { throw new RuntimeError('Variable "rol" does not exist.', 27, $this->source); })()) == "admin")) {
                // line 28
                echo "    <dialog class=\"left\" id=\"menu-dialog\">
      <header class=\"fixed\">
        <nav>
          <button class=\"transparent circle large\" data-ui=\"#menu-dialog\">
            <i>close</i>
          </button>
          <h5 class=\"max\">Localito</h5>
        </nav>
      </header>
      ";
                // line 37
                echo $this->extensions['App\Twig\NavigationExtension']->renderItem("home", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("home"), "home");
                echo "
      ";
                // line 38
                echo $this->extensions['App\Twig\NavigationExtension']->renderItem("users", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("users"), "people");
                echo "
      ";
                // line 39
                echo $this->extensions['App\Twig\NavigationExtension']->renderItem("stands", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stands"), "storefront");
                echo "
      ";
                // line 40
                echo $this->extensions['App\Twig\NavigationExtension']->renderItem("cities", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cities"), "explore");
                echo "
      ";
                // line 41
                echo $this->extensions['App\Twig\NavigationExtension']->renderItem("logout", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("logout"), "power_settings_new");
                echo "
    </dialog>
    ";
            }
            // line 44
            echo "  ";
        }
        // line 45
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "  </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 45
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 45,  146 => 12,  134 => 11,  125 => 46,  122 => 45,  119 => 44,  113 => 41,  109 => 40,  105 => 39,  101 => 38,  97 => 37,  86 => 28,  84 => 27,  78 => 23,  72 => 19,  70 => 18,  66 => 16,  64 => 15,  60 => 13,  57 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>Localito</title>
    <link href=\"https://cdn.jsdelivr.net/npm/beercss@3.4.0/dist/cdn/beer.min.css\" rel=\"stylesheet\">
    <script type=\"module\" src=\"https://cdn.jsdelivr.net/npm/beercss@3.4.0/dist/cdn/beer.min.js\" defer></script>
    <script type=\"module\" src=\"https://cdn.jsdelivr.net/npm/material-dynamic-colors@1.0.5/dist/cdn/material-dynamic-colors.min.js\" defer></script>
    <script type=\"module\" src=\"/assets/main.js\" defer></script>
    <link href=\"/assets/main.css\" rel=\"stylesheet\">
    {% block css %}{% endblock %}
    {% block js %}{% endblock %}
  </head>
  <body class=\"light\">
  {% if login is not defined %}
    <header class=\"responsive fixed\">
      <nav>
      {% if(rol == 'admin') %}
        <button class=\"circle transparent\" data-ui=\"#menu-dialog\">
          <i>menu</i>
        </button>
      {% endif %}
        <h5 class=\"max\"><a href=\"/\">Localito</a></h5>
      <a href=\"/logout\" class=\"button transparent circle\"><i>power_settings_new</i></a>
      </nav>
    </header>
    {% if(rol == 'admin') %}
    <dialog class=\"left\" id=\"menu-dialog\">
      <header class=\"fixed\">
        <nav>
          <button class=\"transparent circle large\" data-ui=\"#menu-dialog\">
            <i>close</i>
          </button>
          <h5 class=\"max\">Localito</h5>
        </nav>
      </header>
      {{ nav_item('home', 'home'|trans, 'home')|raw }}
      {{ nav_item('users', 'users'|trans, 'people')|raw }}
      {{ nav_item('stands', 'stands'|trans, 'storefront')|raw }}
      {{ nav_item('cities', 'cities'|trans, 'explore')|raw }}
      {{ nav_item('logout', 'logout'|trans, 'power_settings_new')|raw }}
    </dialog>
    {% endif %}
  {% endif %}
    {% block body %}{% endblock %}
  </body>
</html>
", "base.html.twig", "/home/carlos/Documentos/GitHub/Localito-API/templates/base.html.twig");
    }
}
