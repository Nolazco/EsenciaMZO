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

/* home.html.twig */
class __TwigTemplate_865014d3027b2851667188afe3bd9199 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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
        echo "<main class=\"responsive\">
  <article class=\"no-padding card center\">
    <img class=\"responsive medium\" src=\"https://previews.123rf.com/images/normaals/normaals2003/normaals200300029/141856997-joy-concept-flat-tiny-person-vector-illustration-happy-people-jumping-and-waving-with-hands-joyful.jpg\">
    <div class=\"absolute bottom left right padding bottom-shadow white-text\">
      <nav>
        <h5>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("users"), "html", null, true);
        echo "</h5>
        <div class=\"max\"></div>
        <a href=\"/users\" class=\"circle transparent\">
          <i>arrow_forward</i>
        </a>
      </nav>
    </div>
  </article>
  <article class=\"no-padding card center\">
    <img class=\"responsive medium\" src=\"https://st3.depositphotos.com/12889260/34452/v/1600/depositphotos_344527910-stock-illustration-eastern-bazaar-street-market-flat.jpg\">
    <div class=\"absolute bottom left right padding bottom-shadow white-text\">
      <nav>
        <h5>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stands"), "html", null, true);
        echo "</h5>
        <div class=\"max\"></div>
        <a href=\"/stands\" class=\"circle transparent\">
          <i>arrow_forward</i>
        </a>
      </nav>
    </div>
  </article>
  <article class=\"no-padding card center\">
    <img class=\"responsive medium\" src=\"https://as1.ftcdn.net/v2/jpg/01/75/91/74/1000_F_175917470_3xJZ6JrUpb8aticmUZwAfpeu8RshPwKI.jpg\">
    <div class=\"absolute bottom left right padding bottom-shadow white-text\">
      <nav>
        <h5>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cities"), "html", null, true);
        echo "</h5>
        <div class=\"max\"></div>
        <a href=\"/cities\" class=\"circle transparent\">
          <i>arrow_forward</i>
        </a>
      </nav>
    </div>
  </article>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 32,  81 => 20,  66 => 8,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<main class=\"responsive\">
  <article class=\"no-padding card center\">
    <img class=\"responsive medium\" src=\"https://previews.123rf.com/images/normaals/normaals2003/normaals200300029/141856997-joy-concept-flat-tiny-person-vector-illustration-happy-people-jumping-and-waving-with-hands-joyful.jpg\">
    <div class=\"absolute bottom left right padding bottom-shadow white-text\">
      <nav>
        <h5>{{ 'users'|trans }}</h5>
        <div class=\"max\"></div>
        <a href=\"/users\" class=\"circle transparent\">
          <i>arrow_forward</i>
        </a>
      </nav>
    </div>
  </article>
  <article class=\"no-padding card center\">
    <img class=\"responsive medium\" src=\"https://st3.depositphotos.com/12889260/34452/v/1600/depositphotos_344527910-stock-illustration-eastern-bazaar-street-market-flat.jpg\">
    <div class=\"absolute bottom left right padding bottom-shadow white-text\">
      <nav>
        <h5>{{ 'stands'|trans }}</h5>
        <div class=\"max\"></div>
        <a href=\"/stands\" class=\"circle transparent\">
          <i>arrow_forward</i>
        </a>
      </nav>
    </div>
  </article>
  <article class=\"no-padding card center\">
    <img class=\"responsive medium\" src=\"https://as1.ftcdn.net/v2/jpg/01/75/91/74/1000_F_175917470_3xJZ6JrUpb8aticmUZwAfpeu8RshPwKI.jpg\">
    <div class=\"absolute bottom left right padding bottom-shadow white-text\">
      <nav>
        <h5>{{ 'cities'|trans }}</h5>
        <div class=\"max\"></div>
        <a href=\"/cities\" class=\"circle transparent\">
          <i>arrow_forward</i>
        </a>
      </nav>
    </div>
  </article>
</main>
{% endblock %}
", "home.html.twig", "/home/carlos/Documentos/GitHub/Localito-API/templates/home.html.twig");
    }
}
