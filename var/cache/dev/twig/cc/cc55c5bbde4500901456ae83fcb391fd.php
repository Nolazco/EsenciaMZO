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

/* stands.html.twig */
class __TwigTemplate_b834f9aa8dd01e46d0ef95b21f90f2ad extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stands.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "stands.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("stands"), "html", null, true);
        echo "</h1>
    ";
        // line 6
        if ((isset($context["stands"]) || array_key_exists("stands", $context) ? $context["stands"] : (function () { throw new RuntimeError('Variable "stands" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "      <table class=\"border striped responsive\">
        <thead>
          <tr>
            <th class=\"bold\">";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.name", [], "form"), "html", null, true);
            echo "</th>
            <th class=\"bold\">";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.tag", [], "form"), "html", null, true);
            echo "</th>
            <th class=\"bold\">";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.seller", [], "form"), "html", null, true);
            echo "</th>
            <th class=\"bold\">";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.city", [], "form"), "html", null, true);
            echo "</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stands"]) || array_key_exists("stands", $context) ? $context["stands"] : (function () { throw new RuntimeError('Variable "stands" does not exist.', 18, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 19
                echo "            ";
                $context["rowClass"] = (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 19) % 2 == 0)) ? ("even") : ("odd"));
                // line 20
                echo "            <tr class=\"flex ";
                echo twig_escape_filter($this->env, (isset($context["rowClass"]) || array_key_exists("rowClass", $context) ? $context["rowClass"] : (function () { throw new RuntimeError('Variable "rowClass" does not exist.', 20, $this->source); })()), "html", null, true);
                echo "\">
              <td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>
              <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "tag", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
              <td>
                ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["sellers"]) || array_key_exists("sellers", $context) ? $context["sellers"] : (function () { throw new RuntimeError('Variable "sellers" does not exist.', 24, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["sl"]) {
                    // line 25
                    echo "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 25, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                        // line 26
                        echo "                    ";
                        if (((twig_get_attribute($this->env, $this->source, $context["s"], "sellerId", [], "any", false, false, false, 26) == twig_get_attribute($this->env, $this->source, $context["sl"], "id", [], "any", false, false, false, 26)) && (twig_get_attribute($this->env, $this->source, $context["sl"], "userId", [], "any", false, false, false, 26) == twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 26)))) {
                            // line 27
                            echo "                      ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "getFullName", [], "method", false, false, false, 27), "html", null, true);
                            echo "
                    ";
                        }
                        // line 29
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sl'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "              </td>
              <td>
                ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) || array_key_exists("cities", $context) ? $context["cities"] : (function () { throw new RuntimeError('Variable "cities" does not exist.', 33, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 34
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["s"], "city", [], "any", false, false, false, 34) == twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 34))) {
                        // line 35
                        echo "                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getName", [], "method", false, false, false, 35), "html", null, true);
                        echo "
                  ";
                    }
                    // line 37
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "              </td>
              <td>
                <div class=\"button-group\">
                  <a href=\"/stand/";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 41), "html", null, true);
                echo "\" class=\"button info circle\"><i>visibility</i></a>
                  <a href=\"/stand/";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "/edit\" class=\"button warning circle\"><i>edit</i></a>
                  <a href=\"/stand/";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "/delete\" class=\"button danger circle\"><i>delete</i></a>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 51
            echo "      <article class=\"border medium no-padding middle-align center-align\">
        <div class=\"padding\">
          <h5>";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("table.empty"), "html", null, true);
            echo "<h5>
        </div>
      </article>
    ";
        }
        // line 57
        echo "
    <nav class=\"pagination\">
      ";
        // line 59
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 59, $this->source); })()) > 1)) {
            // line 60
            echo "        <a href=\"?page=";
            echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 60, $this->source); })()) - 1), "html", null, true);
            echo "\" class=\"button transparent circle\"><i>chevron_left</i></a>
      ";
        } else {
            // line 62
            echo "        <a disabled class=\"button transparent circle\"><i>chevron_left</i></a>
      ";
        }
        // line 64
        echo "      ";
        echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "
      <a href=\"?page=";
        // line 65
        echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 65, $this->source); })()) + 1), "html", null, true);
        echo "\" class=\"button transparent circle\"><i>chevron_right</i></a>
      <div class=\"my-mid\">
        <a class=\"button success\" href=\"/stand/new\">
          <i>add</i>
          <span>";
        // line 69
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
        return "stands.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 69,  249 => 65,  244 => 64,  240 => 62,  234 => 60,  232 => 59,  228 => 57,  221 => 53,  217 => 51,  212 => 48,  193 => 43,  189 => 42,  185 => 41,  180 => 38,  174 => 37,  168 => 35,  165 => 34,  161 => 33,  157 => 31,  151 => 30,  145 => 29,  139 => 27,  136 => 26,  131 => 25,  127 => 24,  122 => 22,  118 => 21,  113 => 20,  110 => 19,  93 => 18,  85 => 13,  81 => 12,  77 => 11,  73 => 10,  68 => 7,  66 => 6,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
  <main class=\"responsive mb-small\">
    <h1 class=\"center-align\">{{ 'stands'|trans }}</h1>
    {% if stands %}
      <table class=\"border striped responsive\">
        <thead>
          <tr>
            <th class=\"bold\">{{ 'input.name'|trans([], 'form') }}</th>
            <th class=\"bold\">{{ 'input.tag'|trans([], 'form') }}</th>
            <th class=\"bold\">{{ 'input.seller'|trans([], 'form') }}</th>
            <th class=\"bold\">{{ 'input.city'|trans([], 'form') }}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          {% for s in stands %}
            {% set rowClass = loop.index is even ? 'even' : 'odd' %}
            <tr class=\"flex {{ rowClass }}\">
              <td>{{ s.name }}</td>
              <td>{{ s.tag }}</td>
              <td>
                {% for sl in sellers %}
                  {% for u in users %}
                    {% if s.sellerId == sl.id and sl.userId == u.id %}
                      {{ u.getFullName() }}
                    {% endif %}
                  {% endfor %}
                {% endfor %}
              </td>
              <td>
                {% for c in cities %}
                  {% if s.city == c.id %}
                    {{ c.getName() }}
                  {% endif %}
                {% endfor %}
              </td>
              <td>
                <div class=\"button-group\">
                  <a href=\"/stand/{{ s.id }}\" class=\"button info circle\"><i>visibility</i></a>
                  <a href=\"/stand/{{ s.id }}/edit\" class=\"button warning circle\"><i>edit</i></a>
                  <a href=\"/stand/{{ s.id }}/delete\" class=\"button danger circle\"><i>delete</i></a>
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
        <a class=\"button success\" href=\"/stand/new\">
          <i>add</i>
          <span>{{ 'action.new'|trans }}</span>
        </a>
      </div>
    </nav>
  </main>
{% endblock %}
", "stands.html.twig", "/home/carlos/Documentos/GitHub/Localito-API/templates/stands.html.twig");
    }
}
