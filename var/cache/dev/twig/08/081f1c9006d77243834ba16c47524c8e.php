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

/* cities.html.twig */
class __TwigTemplate_a5229921463b4ef320b039099256b2f5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cities.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cities.html.twig", 1);
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
        echo "  <main class=\"responsive mb-small\">
    <h1 class=\"center-align\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cities"), "html", null, true);
        echo "</h1>
    ";
        // line 6
        if ((isset($context["cities"]) || array_key_exists("cities", $context) ? $context["cities"] : (function () { throw new RuntimeError('Variable "cities" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "      <table class=\"border striped responsive\">
        <thead>
          <tr>
            <th class=\"bold\">";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.country_code", [], "form"), "html", null, true);
            echo "</th>
            <th class=\"bold\">";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.name", [], "form"), "html", null, true);
            echo "</th>
            <th class=\"bold\">";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.longitude", [], "form"), "html", null, true);
            echo "</th>
            <th class=\"bold\">";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.latitude", [], "form"), "html", null, true);
            echo "</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) || array_key_exists("cities", $context) ? $context["cities"] : (function () { throw new RuntimeError('Variable "cities" does not exist.', 18, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 19
                echo "            ";
                $context["rowClass"] = (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 19) % 2 == 0)) ? ("even") : ("odd"));
                // line 20
                echo "            <tr class=\"flex ";
                echo twig_escape_filter($this->env, (isset($context["rowClass"]) || array_key_exists("rowClass", $context) ? $context["rowClass"] : (function () { throw new RuntimeError('Variable "rowClass" does not exist.', 20, $this->source); })()), "html", null, true);
                echo "\">
              <td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "countryCode", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>
              <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "cityName", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
              <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "longitude", [], "any", false, false, false, 23), "html", null, true);
                echo "</td>
              <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "latitude", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
              <td>
                <div class=\"button-group\">
                  <a href=\"/city/";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 27), "html", null, true);
                echo "\" class=\"button info circle medium\"><i>visibility</i></a>
                  <a href=\"/city/";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 28), "html", null, true);
                echo "/edit\" class=\"button warning circle medium\"><i>edit</i></a>
                  <a href=\"/city/";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 29), "html", null, true);
                echo "/delete\" class=\"button danger circle medium\"><i>delete</i></a>
                </div>
              </td>
            </tr>
          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 37
            echo "      <article class=\"border medium no-padding middle-align center-align\">
        <div class=\"padding\">
          <h5>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("table.empty"), "html", null, true);
            echo "<h5>
        </div>
      </article>
    ";
        }
        // line 43
        echo "
    <nav class=\"pagination\">
      ";
        // line 45
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 45, $this->source); })()) > 1)) {
            // line 46
            echo "        <a href=\"?page=";
            echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 46, $this->source); })()) - 1), "html", null, true);
            echo "\" class=\"button transparent circle\"><i>chevron_left</i></a>
      ";
        } else {
            // line 48
            echo "        <a disabled class=\"button transparent circle\"><i>chevron_left</i></a>
      ";
        }
        // line 50
        echo "      ";
        echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "
      <a href=\"?page=";
        // line 51
        echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 51, $this->source); })()) + 1), "html", null, true);
        echo "\" class=\"button transparent circle\"><i>chevron_right</i></a>
      <div class=\"my-mid\">
        <a class=\"button success\" href=\"/city/new\">
          <i>add</i>
          <span>";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.new"), "html", null, true);
        echo "</span>
        </a>
      </div>
    </nav>
  </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "cities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 55,  200 => 51,  195 => 50,  191 => 48,  185 => 46,  183 => 45,  179 => 43,  172 => 39,  168 => 37,  163 => 34,  144 => 29,  140 => 28,  136 => 27,  130 => 24,  126 => 23,  122 => 22,  118 => 21,  113 => 20,  110 => 19,  93 => 18,  85 => 13,  81 => 12,  77 => 11,  73 => 10,  68 => 7,  66 => 6,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
  <main class=\"responsive mb-small\">
    <h1 class=\"center-align\">{{ 'Cities'|trans }}</h1>
    {% if cities %}
      <table class=\"border striped responsive\">
        <thead>
          <tr>
            <th class=\"bold\">{{ 'input.country_code'|trans([], 'form') }}</th>
            <th class=\"bold\">{{ 'input.name'|trans([], 'form') }}</th>
            <th class=\"bold\">{{ 'input.longitude'|trans([], 'form') }}</th>
            <th class=\"bold\">{{ 'input.latitude'|trans([], 'form') }}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          {% for c in cities %}
            {% set rowClass = loop.index is even ? 'even' : 'odd' %}
            <tr class=\"flex {{ rowClass }}\">
              <td>{{ c.countryCode }}</td>
              <td>{{ c.cityName }}</td>
              <td>{{ c.longitude }}</td>
              <td>{{ c.latitude }}</td>
              <td>
                <div class=\"button-group\">
                  <a href=\"/city/{{ c.id }}\" class=\"button info circle medium\"><i>visibility</i></a>
                  <a href=\"/city/{{ c.id }}/edit\" class=\"button warning circle medium\"><i>edit</i></a>
                  <a href=\"/city/{{ c.id }}/delete\" class=\"button danger circle medium\"><i>delete</i></a>
                </div>
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    {% else %}
      <article class=\"border medium no-padding middle-align center-align\">
        <div class=\"padding\">
          <h5>{{ 'table.empty'|trans }}<h5>
        </div>
      </article>
    {% endif %}

    <nav class=\"pagination\">
      {% if page > 1 %}
        <a href=\"?page={{ page - 1}}\" class=\"button transparent circle\"><i>chevron_left</i></a>
      {% else %}
        <a disabled class=\"button transparent circle\"><i>chevron_left</i></a>
      {% endif %}
      {{ page }}
      <a href=\"?page={{ page + 1 }}\" class=\"button transparent circle\"><i>chevron_right</i></a>
      <div class=\"my-mid\">
        <a class=\"button success\" href=\"/city/new\">
          <i>add</i>
          <span>{{ 'action.new'|trans }}</span>
        </a>
      </div>
    </nav>
  </main>
{% endblock %}
", "cities.html.twig", "/home/carlos/Documentos/GitHub/Localito-API/templates/cities.html.twig");
    }
}
