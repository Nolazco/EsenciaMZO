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
  <article class=\"blur\" style=\"background: url('https://programadestinosmexico.com/wp-content/uploads/2023/09/MANZANILLO-5.jpg'); background-size: cover; color: #821264; font-weight: bold;\">
    <article class=\"blur\">
      <h5>Esencia de Manzanillo</h5>
      <p>El lugar donde encontraras lo más emocinante de este puerto</p>
    </article>
    <nav class=\"right-align\">
      <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120649.74663885737!2d-104.41908161928305!3d19.094289482947413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8424d43417bb3e19%3A0xddb3e9aae7750d4b!2sManzanillo%2C%20Col.!5e0!3m2!1ses!2smx!4v1714370146091!5m2!1ses!2smx\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
    </nav>
  </article>
  <div class=\"small-divider\"></div>
  <div>Gastronomia</div>
  <div class=\"small-divider\"></div>
  <div class=\"grid center\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gastro"]) || array_key_exists("gastro", $context) ? $context["gastro"] : (function () { throw new RuntimeError('Variable "gastro" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 18
            echo "      <div class=\"s12 m6 l3\">
        <article class=\"no-padding border round\">
          <img class=\"responsive small top-round\" src=\"https://uxwing.com/wp-content/themes/uxwing/download/food-and-drinks/meal-food-icon.png\">
          <div class=\"padding\">
            <h5>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "</h5>
            <p>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["g"], "desc", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
            <nav>
              <button>Ver más</button>
            </nav>
          </div>
        </article>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </div>
  <div class=\"small-divider\"></div>
  <div>Turismo</div>
  <div class=\"small-divider\"></div>
  <div class=\"grid center\">
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["turismo"]) || array_key_exists("turismo", $context) ? $context["turismo"] : (function () { throw new RuntimeError('Variable "turismo" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 37
            echo "      <div class=\"s12 m6 l3\">
        <article class=\"no-padding border round\">
          <img class=\"responsive small top-round\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnS1NrYqeF7LQhCJFQQnCIjbOkiX0DrQYhL5XCMvHLEg&s\">
          <div class=\"padding\">
            <h5>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "</h5>
            <p>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "desc", [], "any", false, false, false, 42), "html", null, true);
            echo "</p>
            <nav>
              <button>Ver más</button>
            </nav>
          </div>
        </article>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "  </div>
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
        return array (  138 => 50,  124 => 42,  120 => 41,  114 => 37,  110 => 36,  103 => 31,  89 => 23,  85 => 22,  79 => 18,  75 => 17,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<main class=\"responsive\">
  <article class=\"blur\" style=\"background: url('https://programadestinosmexico.com/wp-content/uploads/2023/09/MANZANILLO-5.jpg'); background-size: cover; color: #821264; font-weight: bold;\">
    <article class=\"blur\">
      <h5>Esencia de Manzanillo</h5>
      <p>El lugar donde encontraras lo más emocinante de este puerto</p>
    </article>
    <nav class=\"right-align\">
      <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120649.74663885737!2d-104.41908161928305!3d19.094289482947413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8424d43417bb3e19%3A0xddb3e9aae7750d4b!2sManzanillo%2C%20Col.!5e0!3m2!1ses!2smx!4v1714370146091!5m2!1ses!2smx\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
    </nav>
  </article>
  <div class=\"small-divider\"></div>
  <div>Gastronomia</div>
  <div class=\"small-divider\"></div>
  <div class=\"grid center\">
    {% for g in gastro %}
      <div class=\"s12 m6 l3\">
        <article class=\"no-padding border round\">
          <img class=\"responsive small top-round\" src=\"https://uxwing.com/wp-content/themes/uxwing/download/food-and-drinks/meal-food-icon.png\">
          <div class=\"padding\">
            <h5>{{g.name}}</h5>
            <p>{{g.desc}}</p>
            <nav>
              <button>Ver más</button>
            </nav>
          </div>
        </article>
      </div>
    {% endfor %}
  </div>
  <div class=\"small-divider\"></div>
  <div>Turismo</div>
  <div class=\"small-divider\"></div>
  <div class=\"grid center\">
    {% for t in turismo %}
      <div class=\"s12 m6 l3\">
        <article class=\"no-padding border round\">
          <img class=\"responsive small top-round\" src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnS1NrYqeF7LQhCJFQQnCIjbOkiX0DrQYhL5XCMvHLEg&s\">
          <div class=\"padding\">
            <h5>{{t.name}}</h5>
            <p>{{t.desc}}</p>
            <nav>
              <button>Ver más</button>
            </nav>
          </div>
        </article>
      </div>
    {% endfor %}
  </div>
</main>
{% endblock %}
", "home.html.twig", "/home/carlos/Documentos/GitHub/EsenciaMZO/templates/home.html.twig");
    }
}
