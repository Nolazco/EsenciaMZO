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

/* stand_delete.html.twig */
class __TwigTemplate_e3ec4c1b62bd37f1fc5941ae818f7ff4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'style' => [$this, 'block_style'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stand_delete.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stand_delete.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<main class=\"responsive\">
  <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete.stand.warning", ["%username%" => twig_get_attribute($this->env, $this->source, (isset($context["stand"]) || array_key_exists("stand", $context) ? $context["stand"] : (function () { throw new RuntimeError('Variable "stand" does not exist.', 6, $this->source); })()), "name", [], "method", false, false, false, 6)]), "html", null, true);
        echo "</h1>
  <p class=\"large-text\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete.note"), "html", null, true);
        echo "</p>
  
  <nav class=\"my-mid\">
    <a class=\"button fill\" href=\"/stands\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back"), "html", null, true);
        echo "</a>
    <a class=\"button\" href=\"?confirmation=1\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete"), "html", null, true);
        echo "</a>
  </nav>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 17
        echo "<style>
  .
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "stand_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 17,  88 => 16,  77 => 11,  73 => 10,  67 => 7,  63 => 6,  60 => 5,  53 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig'  %}

{% block body %}
<main class=\"responsive\">
  <h1>{{ 'delete.stand.warning'|trans({ '%username%': stand.name() }) }}</h1>
  <p class=\"large-text\">{{ 'delete.note'|trans }}</p>
  
  <nav class=\"my-mid\">
    <a class=\"button fill\" href=\"/stands\">{{ 'action.back'|trans }}</a>
    <a class=\"button\" href=\"?confirmation=1\">{{ 'action.delete'|trans }}</a>
  </nav>
</main>
{% endblock %}

{% block style %}
<style>
  .
</style>
{% endblock %}
", "stand_delete.html.twig", "/home/carlos/Documentos/GitHub/Localito-API/templates/stand_delete.html.twig");
    }
}
