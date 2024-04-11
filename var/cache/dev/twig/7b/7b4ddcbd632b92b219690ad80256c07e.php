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

/* product.html.twig */
class __TwigTemplate_ab41bd147539608075c36c74b41f8f83 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product.html.twig"));

        // line 2
        $context["avatar"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), "getImageUri", [], "method", false, false, false, 2))) ? ("restaurant.svg") : (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), "getImageUri", [], "method", false, false, false, 2)));
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product.html.twig", 1);
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
        echo "  <main class=\"responsive full-height\">
    <div class=\"center-container\">
    <div class=\"s12 flex justify-center align-center\">
      <img class=\"big circle center\" src=\"/";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\" />
    </div>
      <div class=\"s5 text-center\">
        <h2 class=\"my-mid2\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        echo "</h2>
        <div class=\"row\">
          <b>";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.info", [], "form"), "html", null, true);
        echo ":</b>
          <div class=\"max\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "info", [], "any", false, false, false, 13), "html", null, true);
        echo "</div>
        </div>
        <div class=\"medium-divider\"></div>
        <div class=\"row\">
          <b>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.StandName", [], "form"), "html", null, true);
        echo ":</b>
          <div class=\"max\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stand"]) || array_key_exists("stand", $context) ? $context["stand"] : (function () { throw new RuntimeError('Variable "stand" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</div>
        </div>
        <div class=\"medium-divider\"></div>
        <div class=\"row\">
          <b>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.price", [], "form"), "html", null, true);
        echo ":</b>
          <div class=\"max\">\$";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "price", [], "any", false, false, false, 23), "html", null, true);
        echo "</div>
        </div>
        <a class=\"button app-back fill\" style=\"margin-top: 2em;\">";
        // line 25
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
        return "product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 25,  104 => 23,  100 => 22,  93 => 18,  89 => 17,  82 => 13,  78 => 12,  73 => 10,  67 => 7,  62 => 4,  55 => 3,  47 => 1,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% set avatar = product.getImageUri() is empty ? 'restaurant.svg' : product.getImageUri() %}
{% block body %}
  <main class=\"responsive full-height\">
    <div class=\"center-container\">
    <div class=\"s12 flex justify-center align-center\">
      <img class=\"big circle center\" src=\"/{{ avatar }}\" />
    </div>
      <div class=\"s5 text-center\">
        <h2 class=\"my-mid2\">{{ product.name }}</h2>
        <div class=\"row\">
          <b>{{ 'input.info'|trans([], 'form') }}:</b>
          <div class=\"max\">{{ product.info }}</div>
        </div>
        <div class=\"medium-divider\"></div>
        <div class=\"row\">
          <b>{{ 'input.StandName'|trans([], 'form') }}:</b>
          <div class=\"max\">{{ stand.name }}</div>
        </div>
        <div class=\"medium-divider\"></div>
        <div class=\"row\">
          <b>{{ 'input.price'|trans([], 'form') }}:</b>
          <div class=\"max\">\${{ product.price }}</div>
        </div>
        <a class=\"button app-back fill\" style=\"margin-top: 2em;\">{{ 'action.back'|trans }}</a>
      </div>
    </div>
  </main>
{% endblock %}
", "product.html.twig", "/home/carlos/Documentos/GitHub/Localito-API/templates/product.html.twig");
    }
}
