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

/* stand_edit.html.twig */
class __TwigTemplate_217d00cec9f772a18438fa2edfec857f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stand_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stand_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<main class=\"responsive\">
  <h1 class=\"center-align\">";
        // line 5
        echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source, (isset($context["stand"]) || array_key_exists("stand", $context) ? $context["stand"] : (function () { throw new RuntimeError('Variable "stand" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stand.create")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stand.edit", ["%username%" => twig_get_attribute($this->env, $this->source, (isset($context["stand"]) || array_key_exists("stand", $context) ? $context["stand"] : (function () { throw new RuntimeError('Variable "stand" does not exist.', 5, $this->source); })()), "getName", [], "method", false, false, false, 5)]))), "html", null, true);
        echo "</h1>
  ";
        // line 6
        $this->loadTemplate("form/stand.html.twig", "stand_edit.html.twig", 6)->display($context);
        // line 7
        echo "</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "stand_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  66 => 6,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig'  %}

{% block body %}
<main class=\"responsive\">
  <h1 class=\"center-align\">{{ stand.id is null? 'stand.create'|trans : 'stand.edit'|trans({'%username%': stand.getName()}) }}</h1>
  {% include 'form/stand.html.twig' %}
</main>
{% endblock %}
", "stand_edit.html.twig", "/home/carlos/Documentos/GitHub/Localito-API/templates/stand_edit.html.twig");
    }
}
