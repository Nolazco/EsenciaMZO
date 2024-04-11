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

/* messages.html.twig */
class __TwigTemplate_e235a59300354ed27406b44fb27df603 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "messages.html.twig", 1);
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
      <h2 class=\"s12\">Order #";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        echo " chat - Buyer: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["buyer"]) || array_key_exists("buyer", $context) ? $context["buyer"] : (function () { throw new RuntimeError('Variable "buyer" does not exist.', 5, $this->source); })()), "getFullName", [], "method", false, false, false, 5), "html", null, true);
        echo " </h2>
      <a class=\"button app-back fill\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back"), "html", null, true);
        echo "</a>
      <div class=\"grid border s12\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 9
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["m"], "userFrom", [], "any", false, false, false, 9) == twig_get_attribute($this->env, $this->source, (isset($context["buyer"]) || array_key_exists("buyer", $context) ? $context["buyer"] : (function () { throw new RuntimeError('Variable "buyer" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9))) {
                // line 10
                echo "          <article class=\"s4\">
            <h5>";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "body", [], "any", false, false, false, 11), "html", null, true);
                echo "</h5>
            <p>";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "messageTimestamp", [], "any", false, false, false, 12), "html", null, true);
                echo "</p>
          </article>
          <div class=\"s8\"></div>
          ";
            } else {
                // line 16
                echo "          <div class=\"s8\"></div>
            <article class=\"green3 s4\">
            <h5>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "body", [], "any", false, false, false, 18), "html", null, true);
                echo "</h5>
            <p>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "messageTimestamp", [], "any", false, false, false, 19), "html", null, true);
                echo "</p>
          </article>
        ";
            }
            // line 22
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "      </div>
    </div>
  </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 23,  109 => 22,  103 => 19,  99 => 18,  95 => 16,  88 => 12,  84 => 11,  81 => 10,  78 => 9,  74 => 8,  69 => 6,  63 => 5,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
  <main class=\"responsive\">
    <div class=\"grid justify-center align-center\">
      <h2 class=\"s12\">Order #{{order.id}} chat - Buyer: {{buyer.getFullName()}} </h2>
      <a class=\"button app-back fill\">{{ 'action.back'|trans }}</a>
      <div class=\"grid border s12\">
        {% for m in messages %}
          {% if m.userFrom == buyer.id %}
          <article class=\"s4\">
            <h5>{{m.body}}</h5>
            <p>{{m.messageTimestamp}}</p>
          </article>
          <div class=\"s8\"></div>
          {% else %}
          <div class=\"s8\"></div>
            <article class=\"green3 s4\">
            <h5>{{m.body}}</h5>
            <p>{{m.messageTimestamp}}</p>
          </article>
        {% endif %}
        {% endfor %}
      </div>
    </div>
  </main>
{% endblock %}
", "messages.html.twig", "/home/carlos/Documentos/GitHub/Localito-API/templates/messages.html.twig");
    }
}
