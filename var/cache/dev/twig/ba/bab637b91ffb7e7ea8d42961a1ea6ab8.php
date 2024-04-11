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

/* city.html.twig */
class __TwigTemplate_250b017ac133084db28c281e64dd89c6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "city.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "city.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <main class=\"responsive\">
    <div class=\"grid justify-center align-center\">
      <div class=\"s12 flex justify-center align-center text-center my-mid2\">
        <h2>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 6, $this->source); })()), "getName", [], "method", false, false, false, 6), "html", null, true);
        echo "</h2>
        <div class=\"row\">
          <b>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.country_code", [], "form"), "html", null, true);
        echo ":</b>
          <div class=\"max\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 9, $this->source); })()), "countryCode", [], "any", false, false, false, 9), "html", null, true);
        echo "</div>
        </div>
        <div class=\"medium-divider\"></div>
        <div class=\"row\">
          <b>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.name", [], "form"), "html", null, true);
        echo ":</b>
          <div class=\"max\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "</div>
        </div>
        <div class=\"medium-divider\"></div>
        <div class=\"row\">
          <b>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.longitude", [], "form"), "html", null, true);
        echo ":</b>
          <div class=\"max\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 19, $this->source); })()), "longitude", [], "any", false, false, false, 19), "html", null, true);
        echo "</div>
        </div>
        <div class=\"medium-divider\"></div>
        <div class=\"row\">
          <b>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.latitude", [], "form"), "html", null, true);
        echo ":</b>
          <div class=\"max\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 24, $this->source); })()), "latitude", [], "any", false, false, false, 24), "html", null, true);
        echo "</div>
        </div>
        <div class=\"medium-divider\"></div>
        <a class=\"button app-back fill\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back"), "html", null, true);
        echo "</a>
      </div>
    </div>
  </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "city.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 27,  106 => 24,  102 => 23,  95 => 19,  91 => 18,  84 => 14,  80 => 13,  73 => 9,  69 => 8,  64 => 6,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
  <main class=\"responsive\">
    <div class=\"grid justify-center align-center\">
      <div class=\"s12 flex justify-center align-center text-center my-mid2\">
        <h2>{{ city.getName() }}</h2>
        <div class=\"row\">
          <b>{{ 'input.country_code'|trans([], 'form') }}:</b>
          <div class=\"max\">{{ city.countryCode }}</div>
        </div>
        <div class=\"medium-divider\"></div>
        <div class=\"row\">
          <b>{{ 'input.name'|trans([], 'form') }}:</b>
          <div class=\"max\">{{ city.name }}</div>
        </div>
        <div class=\"medium-divider\"></div>
        <div class=\"row\">
          <b>{{ 'input.longitude'|trans([], 'form') }}:</b>
          <div class=\"max\">{{ city.longitude }}</div>
        </div>
        <div class=\"medium-divider\"></div>
        <div class=\"row\">
          <b>{{ 'input.latitude'|trans([], 'form') }}:</b>
          <div class=\"max\">{{ city.latitude }}</div>
        </div>
        <div class=\"medium-divider\"></div>
        <a class=\"button app-back fill\">{{ 'action.back'|trans }}</a>
      </div>
    </div>
  </main>
{% endblock %}
", "city.html.twig", "/home/carlos/Documentos/GitHub/Localito-API/templates/city.html.twig");
    }
}
