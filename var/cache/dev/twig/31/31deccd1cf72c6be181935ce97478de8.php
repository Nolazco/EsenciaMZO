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

/* stand.html.twig */
class __TwigTemplate_15efd5ee27de08e63db23d624a47aca8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stand.html.twig"));

        // line 2
        $context["avatar"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["stand"]) || array_key_exists("stand", $context) ? $context["stand"] : (function () { throw new RuntimeError('Variable "stand" does not exist.', 2, $this->source); })()), "getImageUri", [], "method", false, false, false, 2))) ? ("restaurant.svg") : (twig_get_attribute($this->env, $this->source, (isset($context["stand"]) || array_key_exists("stand", $context) ? $context["stand"] : (function () { throw new RuntimeError('Variable "stand" does not exist.', 2, $this->source); })()), "getImageUri", [], "method", false, false, false, 2)));
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "stand.html.twig", 1);
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
  <div class=\"grid\">
  <div class=\"s12 flex justify-center align-center\">
    <img class=\"big circle center\" src=\"/";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\" />
  </div>
    <div class=\"s8\">
      <h2 class=\"my-mid\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stand"]) || array_key_exists("stand", $context) ? $context["stand"] : (function () { throw new RuntimeError('Variable "stand" does not exist.', 10, $this->source); })()), "getName", [], "method", false, false, false, 10), "html", null, true);
        echo "</h2>
      <div class=\"row\">
        <b>";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.tag", [], "form"), "html", null, true);
        echo ":</b>
        <div class=\"max\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stand"]) || array_key_exists("stand", $context) ? $context["stand"] : (function () { throw new RuntimeError('Variable "stand" does not exist.', 13, $this->source); })()), "tag", [], "any", false, false, false, 13), "html", null, true);
        echo "</div>
      </div>
      <div class=\"medium-divider\"></div>
      <div class=\"row\">
        <b>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.owner", [], "form"), "html", null, true);
        echo ":</b>
        <div class=\"max\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["seller"]) || array_key_exists("seller", $context) ? $context["seller"] : (function () { throw new RuntimeError('Variable "seller" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</div>
      </div>
      <div class=\"medium-divider\"></div>
      <div class=\"row\" style=\"word-break: break-word;\">
        <b>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.info", [], "form"), "html", null, true);
        echo ":</b>
        <div class=\"max\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stand"]) || array_key_exists("stand", $context) ? $context["stand"] : (function () { throw new RuntimeError('Variable "stand" does not exist.', 23, $this->source); })()), "info", [], "any", false, false, false, 23), "html", null, true);
        echo "</div>
      </div>
      <div class=\"medium-divider\"></div>
      <div class=\"row\">
        <b>";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.city", [], "form"), "html", null, true);
        echo ":</b>
        <div class=\"max\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 28, $this->source); })()), "getName", [], "method", false, false, false, 28), "html", null, true);
        echo "</div>
      </div>
      <div class=\"medium-divider\"></div>
      <a class=\"button app-back\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back"), "html", null, true);
        echo "</a>

      <h4 class=\"my-mid\">";
        // line 33
        echo "Products";
        echo "</h4>
      <a class=\"button\" href=\"/stand/";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stand"]) || array_key_exists("stand", $context) ? $context["stand"] : (function () { throw new RuntimeError('Variable "stand" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "html", null, true);
        echo "/newproduct\">
        <i>";
        // line 35
        echo "add";
        echo "</i>
        <span>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.new"), "html", null, true);
        echo "</span>
      </a>
      ";
        // line 38
        if ((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 38, $this->source); })())) {
            // line 39
            echo "      <table class=\"border\" style=\"margin-top: 10px;\">
        <thead>
          <tr>
            <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.image", [], "form"), "html", null, true);
            echo "</th>
            <th>";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.name", [], "form"), "html", null, true);
            echo "</th>
            <th>";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.price", [], "form"), "html", null, true);
            echo "</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 49, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 50
                echo "          ";
                $context["avatar"] = (((twig_get_attribute($this->env, $this->source, $context["p"], "image", [], "any", false, false, false, 50) == null)) ? ("restaurant.svg") : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "image", [], "any", false, false, false, 50), "getPathname", [], "method", false, false, false, 50)));
                // line 51
                echo "          ";
                $context["rowClass"] = (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 51) % 2 == 0)) ? ("even") : ("odd"));
                // line 52
                echo "          <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["rowClass"]) || array_key_exists("rowClass", $context) ? $context["rowClass"] : (function () { throw new RuntimeError('Variable "rowClass" does not exist.', 52, $this->source); })()), "html", null, true);
                echo "\">
            <td><img class=\"circle large\" src=\"/";
                // line 53
                echo twig_escape_filter($this->env, (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 53, $this->source); })()), "html", null, true);
                echo "\"></td>
            <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
            <td>\$";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "price", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
            <td>
              <nav class=\"right-align\">
                <a href=\"/stand/";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stand"]) || array_key_exists("stand", $context) ? $context["stand"] : (function () { throw new RuntimeError('Variable "stand" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58), "html", null, true);
                echo "/product/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 58), "html", null, true);
                echo "\" class=\"button info circle medium\"><i>";
                echo "visibility";
                echo "</i></a>
                <a href=\"/stand/";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stand"]) || array_key_exists("stand", $context) ? $context["stand"] : (function () { throw new RuntimeError('Variable "stand" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59), "html", null, true);
                echo "/product/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 59), "html", null, true);
                echo "/edit\" class=\"button warning circle medium\"><i>";
                echo "edit";
                echo "</i></a>
                <a href=\"/stand/";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stand"]) || array_key_exists("stand", $context) ? $context["stand"] : (function () { throw new RuntimeError('Variable "stand" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60), "html", null, true);
                echo "/product/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 60), "html", null, true);
                echo "/delete\" class=\"button danger circle medium\"><i>";
                echo "delete";
                echo "</i></a>
              </nav>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "        </tbody>
      </table>
      ";
        } else {
            // line 68
            echo "      <article class=\"border medium no-padding middle-align center-align\" style=\"margin-top: 10px;\">
        <div class=\"padding\">
          <h5>";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("table.empty"), "html", null, true);
            echo "<h5>
        </div>
      </article>
      ";
        }
        // line 74
        echo "    </div>

    <!-- orders column -->

    <div class=\"s4\">
      <h4 class=\"my-mid\">";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stand"]) || array_key_exists("stand", $context) ? $context["stand"] : (function () { throw new RuntimeError('Variable "stand" does not exist.', 79, $this->source); })()), "getName", [], "method", false, false, false, 79), "html", null, true);
        echo " orders</h4>
      ";
        // line 80
        if ((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 80, $this->source); })())) {
            // line 81
            echo "      <table class=\"border\" style=\"margin-top: 10px;\">
        <thead>
          <tr>
            <th>";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.buyer", [], "form"), "html", null, true);
            echo "</th>
            <th>";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.date", [], "form"), "html", null, true);
            echo "</th>
            <th>";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.state", [], "form"), "html", null, true);
            echo "</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 91, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
                // line 92
                echo "          ";
                $context["rowClass"] = (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 92) % 2 == 0)) ? ("even") : ("odd"));
                // line 93
                echo "          <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["rowClass"]) || array_key_exists("rowClass", $context) ? $context["rowClass"] : (function () { throw new RuntimeError('Variable "rowClass" does not exist.', 93, $this->source); })()), "html", null, true);
                echo "\">
            <td>
            ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 95, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                    // line 96
                    echo "              ";
                    if ((twig_get_attribute($this->env, $this->source, $context["o"], "buyerId", [], "any", false, false, false, 96) == twig_get_attribute($this->env, $this->source, $context["u"], "id", [], "any", false, false, false, 96))) {
                        // line 97
                        echo "                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["u"], "getFullName", [], "method", false, false, false, 97), "html", null, true);
                        echo "
              ";
                    }
                    // line 99
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "            </td>
            <td>";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "date", [], "any", false, false, false, 101), "html", null, true);
                echo "</td>
            <td>";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "state", [], "any", false, false, false, 102), "html", null, true);
                echo "</td>
            <td>
              <nav class=\"right-align\">
                <a href=\"/stand/";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stand"]) || array_key_exists("stand", $context) ? $context["stand"] : (function () { throw new RuntimeError('Variable "stand" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105), "html", null, true);
                echo "/order/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "id", [], "any", false, false, false, 105), "html", null, true);
                echo "\" class=\"button info circle medium\"><i>";
                echo "visibility";
                echo "</i></a>
              </nav>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "        </tbody>
      </table>
      ";
        } else {
            // line 113
            echo "      <article class=\"border medium no-padding middle-align center-align\" style=\"margin-top: 10px;\">
        <div class=\"padding\">
          <h5>";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("table.empty"), "html", null, true);
            echo "<h5>
        </div>
      </article>
      ";
        }
        // line 119
        echo "    </div>
  </div>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "stand.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 119,  387 => 115,  383 => 113,  378 => 110,  355 => 105,  349 => 102,  345 => 101,  342 => 100,  336 => 99,  330 => 97,  327 => 96,  323 => 95,  317 => 93,  314 => 92,  297 => 91,  289 => 86,  285 => 85,  281 => 84,  276 => 81,  274 => 80,  270 => 79,  263 => 74,  256 => 70,  252 => 68,  247 => 65,  224 => 60,  216 => 59,  208 => 58,  202 => 55,  198 => 54,  194 => 53,  189 => 52,  186 => 51,  183 => 50,  166 => 49,  158 => 44,  154 => 43,  150 => 42,  145 => 39,  143 => 38,  138 => 36,  134 => 35,  130 => 34,  126 => 33,  121 => 31,  115 => 28,  111 => 27,  104 => 23,  100 => 22,  93 => 18,  89 => 17,  82 => 13,  78 => 12,  73 => 10,  67 => 7,  62 => 4,  55 => 3,  47 => 1,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% set avatar = stand.getImageUri() is empty ? 'restaurant.svg' : stand.getImageUri() %}
{% block body %}
<main class=\"responsive\">
  <div class=\"grid\">
  <div class=\"s12 flex justify-center align-center\">
    <img class=\"big circle center\" src=\"/{{ avatar }}\" />
  </div>
    <div class=\"s8\">
      <h2 class=\"my-mid\">{{ stand.getName() }}</h2>
      <div class=\"row\">
        <b>{{ 'input.tag'|trans([], 'form') }}:</b>
        <div class=\"max\">{{ stand.tag }}</div>
      </div>
      <div class=\"medium-divider\"></div>
      <div class=\"row\">
        <b>{{ 'input.owner'|trans([], 'form') }}:</b>
        <div class=\"max\">{{ seller }}</div>
      </div>
      <div class=\"medium-divider\"></div>
      <div class=\"row\" style=\"word-break: break-word;\">
        <b>{{ 'input.info'|trans([], 'form') }}:</b>
        <div class=\"max\">{{ stand.info }}</div>
      </div>
      <div class=\"medium-divider\"></div>
      <div class=\"row\">
        <b>{{ 'input.city'|trans([], 'form') }}:</b>
        <div class=\"max\">{{ city.getName() }}</div>
      </div>
      <div class=\"medium-divider\"></div>
      <a class=\"button app-back\">{{ 'action.back'|trans }}</a>

      <h4 class=\"my-mid\">{{ 'Products' }}</h4>
      <a class=\"button\" href=\"/stand/{{ stand.id }}/newproduct\">
        <i>{{ 'add' }}</i>
        <span>{{ 'action.new'|trans }}</span>
      </a>
      {% if products %}
      <table class=\"border\" style=\"margin-top: 10px;\">
        <thead>
          <tr>
            <th>{{ 'input.image'|trans([], 'form') }}</th>
            <th>{{ 'input.name'|trans([], 'form') }}</th>
            <th>{{ 'input.price'|trans([], 'form') }}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          {% for p in products %}
          {% set avatar = p.image == null ? 'restaurant.svg' : p.image.getPathname() %}
          {% set rowClass = loop.index is even ? 'even' : 'odd' %}
          <tr class=\"{{ rowClass }}\">
            <td><img class=\"circle large\" src=\"/{{ avatar }}\"></td>
            <td>{{ p.name }}</td>
            <td>\${{ p.price }}</td>
            <td>
              <nav class=\"right-align\">
                <a href=\"/stand/{{ stand.id }}/product/{{ p.id }}\" class=\"button info circle medium\"><i>{{ 'visibility' }}</i></a>
                <a href=\"/stand/{{ stand.id }}/product/{{ p.id }}/edit\" class=\"button warning circle medium\"><i>{{ 'edit' }}</i></a>
                <a href=\"/stand/{{ stand.id }}/product/{{ p.id }}/delete\" class=\"button danger circle medium\"><i>{{ 'delete' }}</i></a>
              </nav>
            </td>
          </tr>
          {% endfor %}
        </tbody>
      </table>
      {% else %}
      <article class=\"border medium no-padding middle-align center-align\" style=\"margin-top: 10px;\">
        <div class=\"padding\">
          <h5>{{ 'table.empty'|trans }}<h5>
        </div>
      </article>
      {% endif %}
    </div>

    <!-- orders column -->

    <div class=\"s4\">
      <h4 class=\"my-mid\">{{ stand.getName() }} orders</h4>
      {% if orders %}
      <table class=\"border\" style=\"margin-top: 10px;\">
        <thead>
          <tr>
            <th>{{ 'input.buyer'|trans([], 'form') }}</th>
            <th>{{ 'input.date'|trans([], 'form') }}</th>
            <th>{{ 'input.state'|trans([], 'form') }}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          {% for o in orders %}
          {% set rowClass = loop.index is even ? 'even' : 'odd' %}
          <tr class=\"{{ rowClass }}\">
            <td>
            {% for u in users %}
              {% if o.buyerId == u.id %}
                {{ u.getFullName() }}
              {% endif %}
            {% endfor %}
            </td>
            <td>{{ o.date }}</td>
            <td>{{ o.state }}</td>
            <td>
              <nav class=\"right-align\">
                <a href=\"/stand/{{ stand.id }}/order/{{ o.id }}\" class=\"button info circle medium\"><i>{{ 'visibility' }}</i></a>
              </nav>
            </td>
          </tr>
          {% endfor %}
        </tbody>
      </table>
      {% else %}
      <article class=\"border medium no-padding middle-align center-align\" style=\"margin-top: 10px;\">
        <div class=\"padding\">
          <h5>{{ 'table.empty'|trans }}<h5>
        </div>
      </article>
      {% endif %}
    </div>
  </div>
</main>
{% endblock %}
", "stand.html.twig", "/home/carlos/Documentos/GitHub/Localito-API/templates/stand.html.twig");
    }
}
