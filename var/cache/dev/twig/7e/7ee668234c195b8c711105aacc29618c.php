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

/* users.html.twig */
class __TwigTemplate_be963385563cb16c28cb27e59732907d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("users"), "html", null, true);
        echo "</h1>
    ";
        // line 6
        if ((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 6, $this->source); })())) {
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.email", [], "form"), "html", null, true);
            echo "</th>
            <th class=\"bold\">";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.phone", [], "form"), "html", null, true);
            echo "</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 17, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                // line 18
                echo "            ";
                $context["rowClass"] = (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 18) % 2 == 0)) ? ("even") : ("odd"));
                // line 19
                echo "            <tr class=\"flex ";
                echo twig_escape_filter($this->env, (isset($context["rowClass"]) || array_key_exists("rowClass", $context) ? $context["rowClass"] : (function () { throw new RuntimeError('Variable "rowClass" does not exist.', 19, $this->source); })()), "html", null, true);
                echo "\">
              <td>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "getFullName", [], "method", false, false, false, 20), "html", null, true);
                echo "</td>
              <td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "email", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>
              <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "phone", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
              <td>
                <div class=\"button-group\">
                  <a href=\"/user/";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 25), "html", null, true);
                echo "\" class=\"button info circle\"><i>visibility</i></a>
                  <a href=\"/user/";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "/edit\" class=\"button warning circle\"><i>edit</i></a>
                  <a href=\"/user/";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 27), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 35
            echo "      <article class=\"border medium no-padding middle-align center-align\">
        <div class=\"padding\">
          <h5>";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("table.empty"), "html", null, true);
            echo "<h5>
        </div>
      </article>
    ";
        }
        // line 41
        echo "
    <nav class=\"pagination\">
      ";
        // line 43
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 43, $this->source); })()) > 1)) {
            // line 44
            echo "        <a href=\"?page=";
            echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 44, $this->source); })()) - 1), "html", null, true);
            echo "\" class=\"button transparent circle\"><i>chevron_left</i></a>
      ";
        } else {
            // line 46
            echo "        <a disabled class=\"button transparent circle\"><i>chevron_left</i></a>
      ";
        }
        // line 48
        echo "      ";
        echo twig_escape_filter($this->env, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "
      <a href=\"?page=";
        // line 49
        echo twig_escape_filter($this->env, ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 49, $this->source); })()) + 1), "html", null, true);
        echo "\" class=\"button transparent circle\"><i>chevron_right</i></a>
      <div class=\"my-mid\">
        <a class=\"button success\" href=\"/user/new\">
          <i>add</i>
          <span>";
        // line 53
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
        return "users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 53,  192 => 49,  187 => 48,  183 => 46,  177 => 44,  175 => 43,  171 => 41,  164 => 37,  160 => 35,  155 => 32,  136 => 27,  132 => 26,  128 => 25,  122 => 22,  118 => 21,  114 => 20,  109 => 19,  106 => 18,  89 => 17,  81 => 12,  77 => 11,  73 => 10,  68 => 7,  66 => 6,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
  <main class=\"responsive mb-small\">
    <h1 class=\"center-align\">{{ 'users'|trans }}</h1>
    {% if users %}
      <table class=\"border striped responsive\">
        <thead>
          <tr>
            <th class=\"bold\">{{ 'input.name'|trans([], 'form') }}</th>
            <th class=\"bold\">{{ 'input.email'|trans([], 'form') }}</th>
            <th class=\"bold\">{{ 'input.phone'|trans([], 'form') }}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          {% for u in users %}
            {% set rowClass = loop.index is even ? 'even' : 'odd' %}
            <tr class=\"flex {{ rowClass }}\">
              <td>{{ u.getFullName() }}</td>
              <td>{{ u.email }}</td>
              <td>{{ u.phone }}</td>
              <td>
                <div class=\"button-group\">
                  <a href=\"/user/{{ u.id }}\" class=\"button info circle\"><i>visibility</i></a>
                  <a href=\"/user/{{ u.id }}/edit\" class=\"button warning circle\"><i>edit</i></a>
                  <a href=\"/user/{{ u.id }}/delete\" class=\"button danger circle\"><i>delete</i></a>
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
        <a class=\"button success\" href=\"/user/new\">
          <i>add</i>
          <span>{{ 'action.new'|trans }}</span>
        </a>
      </div>
    </nav>
  </main>
{% endblock %}
", "users.html.twig", "/home/carlos/Documentos/GitHub/Localito-API/templates/users.html.twig");
    }
}
