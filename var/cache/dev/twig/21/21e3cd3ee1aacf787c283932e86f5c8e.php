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
    <title>MZO</title>
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
    <header>
      <nav>
        <button class=\"circle transparent\">
          <i>arrow_back</i>
        </button>
        <h5 class=\"max\">Escencia de Manzanillo</h5>
      </nav>
    </header>
    ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
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

    // line 23
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

    public function getDebugInfo()
    {
        return array (  107 => 23,  95 => 12,  83 => 11,  74 => 24,  72 => 23,  60 => 13,  57 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>MZO</title>
    <link href=\"https://cdn.jsdelivr.net/npm/beercss@3.4.0/dist/cdn/beer.min.css\" rel=\"stylesheet\">
    <script type=\"module\" src=\"https://cdn.jsdelivr.net/npm/beercss@3.4.0/dist/cdn/beer.min.js\" defer></script>
    <script type=\"module\" src=\"https://cdn.jsdelivr.net/npm/material-dynamic-colors@1.0.5/dist/cdn/material-dynamic-colors.min.js\" defer></script>
    <script type=\"module\" src=\"/assets/main.js\" defer></script>
    <link href=\"/assets/main.css\" rel=\"stylesheet\">
    {% block css %}{% endblock %}
    {% block js %}{% endblock %}
  </head>
  <body class=\"light\">
    <header>
      <nav>
        <button class=\"circle transparent\">
          <i>arrow_back</i>
        </button>
        <h5 class=\"max\">Escencia de Manzanillo</h5>
      </nav>
    </header>
    {% block body %}{% endblock %}
  </body>
</html>
", "base.html.twig", "/home/carlos/Documentos/GitHub/EsenciaMZO/templates/base.html.twig");
    }
}
