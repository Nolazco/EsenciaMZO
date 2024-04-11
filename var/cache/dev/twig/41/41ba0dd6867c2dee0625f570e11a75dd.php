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

/* order.html.twig */
class __TwigTemplate_543e5be047981b6fbf4a1687d8f38407 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order.html.twig", 1);
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
        <h2>Order #";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "</h2>
        <div class=\"row\">
          <b>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.buyer", [], "form"), "html", null, true);
        echo ":</b>
          <div class=\"max\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["buyer"]) || array_key_exists("buyer", $context) ? $context["buyer"] : (function () { throw new RuntimeError('Variable "buyer" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</div>
        </div>
        <div class=\"medium-divider\"></div>
        <div class=\"row\">
          <b>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.date", [], "form"), "html", null, true);
        echo ":</b>
          <div class=\"max\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 14, $this->source); })()), "date", [], "any", false, false, false, 14), "html", null, true);
        echo "</div>
        </div>
        <div class=\"medium-divider\"></div>
        <div class=\"row\">
          <b>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.state", [], "form"), "html", null, true);
        echo ":</b>
          <div class=\"max\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 19, $this->source); })()), "state", [], "any", false, false, false, 19), "html", null, true);
        echo "</div>
        </div>
        <div class=\"medium-divider\"></div>
        <a class=\"button app-back fill\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back"), "html", null, true);
        echo "</a>
        <a class=\"button green\" href=\"/stand/";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 23, $this->source); })()), "standId", [], "any", false, false, false, 23), "html", null, true);
        echo "/order/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "html", null, true);
        echo "/messages\">Messages</a><br><br>
        ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 24, $this->source); })()), "state", [], "any", false, false, false, 24) == "PENDING")) {
            // line 25
            echo "        <a class=\"button blue\" href=\"/stand/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 25, $this->source); })()), "standId", [], "any", false, false, false, 25), "html", null, true);
            echo "/order/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "html", null, true);
            echo "/update/";
            echo "ACCEPTED";
            echo "\">Accept</a>
        <a class=\"button red\" href=\"/stand/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 26, $this->source); })()), "standId", [], "any", false, false, false, 26), "html", null, true);
            echo "/order/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "html", null, true);
            echo "/update/";
            echo "REJECTED";
            echo "\">Reject</a>
        ";
        }
        // line 28
        echo "      </div>
    </div>

    <h4 class=\"my-mid\">Products in order</h4>
    ";
        // line 32
        if ((isset($context["productsInOrder"]) || array_key_exists("productsInOrder", $context) ? $context["productsInOrder"] : (function () { throw new RuntimeError('Variable "productsInOrder" does not exist.', 32, $this->source); })())) {
            // line 33
            echo "    <table class=\"border\" style=\"margin-top: 10px;\">
      <thead>
        <tr>
          <th>";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.image", [], "form"), "html", null, true);
            echo "</th>
          <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.name", [], "form"), "html", null, true);
            echo "</th>
          <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.price", [], "form"), "html", null, true);
            echo "</th>
          <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.quantity", [], "form"), "html", null, true);
            echo "</th>
          <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.total", [], "form"), "html", null, true);
            echo "</th>
        </tr>
      </thead>
      <tbody>
      ";
            // line 44
            $context["avatar"] = "restaurant.svg";
            // line 45
            echo "      ";
            $context["name"] = null;
            // line 46
            echo "      ";
            $context["price"] = null;
            // line 47
            echo "      ";
            $context["total"] = 0;
            // line 48
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productsInOrder"]) || array_key_exists("productsInOrder", $context) ? $context["productsInOrder"] : (function () { throw new RuntimeError('Variable "productsInOrder" does not exist.', 48, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["pio"]) {
                // line 49
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 49, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 50
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 50) == twig_get_attribute($this->env, $this->source, $context["pio"], "productId", [], "any", false, false, false, 50))) {
                        // line 51
                        echo "              ";
                        $context["avatar"] = (((twig_get_attribute($this->env, $this->source, $context["p"], "image", [], "any", false, false, false, 51) == null)) ? ("restaurant.svg") : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "image", [], "any", false, false, false, 51), "getPathname", [], "method", false, false, false, 51)));
                        // line 52
                        echo "              ";
                        $context["name"] = (((twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 52) == null)) ? (null) : (twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 52)));
                        // line 53
                        echo "              ";
                        $context["price"] = (((twig_get_attribute($this->env, $this->source, $context["p"], "price", [], "any", false, false, false, 53) == null)) ? (null) : (twig_get_attribute($this->env, $this->source, $context["p"], "price", [], "any", false, false, false, 53)));
                        // line 54
                        echo "            ";
                    }
                    // line 55
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "        ";
                $context["rowClass"] = (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 56) % 2 == 0)) ? ("even") : ("odd"));
                // line 57
                echo "        <tr class=\"";
                echo twig_escape_filter($this->env, (isset($context["rowClass"]) || array_key_exists("rowClass", $context) ? $context["rowClass"] : (function () { throw new RuntimeError('Variable "rowClass" does not exist.', 57, $this->source); })()), "html", null, true);
                echo "\">
          <td><img class=\"circle large\" src=\"/";
                // line 58
                echo twig_escape_filter($this->env, (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 58, $this->source); })()), "html", null, true);
                echo "\"></td>
          <td>";
                // line 59
                echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 59, $this->source); })()), "html", null, true);
                echo "</td>
          <td>\$";
                // line 60
                echo twig_escape_filter($this->env, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 60, $this->source); })()), "html", null, true);
                echo "</td>
          <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pio"], "productQuantity", [], "any", false, false, false, 61), "html", null, true);
                echo "</td>
          <td>\$";
                // line 62
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["pio"], "productQuantity", [], "any", false, false, false, 62) * (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 62, $this->source); })())), "html", null, true);
                echo "</td>
          ";
                // line 63
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 63, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["pio"], "productQuantity", [], "any", false, false, false, 63) * (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 63, $this->source); })())));
                // line 64
                echo "        </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>\$";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 71, $this->source); })()), "html", null, true);
            echo "</td>
        </tr>
      </tbody>
    </table>
    ";
        } else {
            // line 76
            echo "    <article class=\"border medium no-padding middle-align center-align\" style=\"margin-top: 10px;\">
      <div class=\"padding\">
        <h5>";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("table.empty"), "html", null, true);
            echo "<h5>
      </div>
    </article>
    ";
        }
        // line 82
        echo "  </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 82,  286 => 78,  282 => 76,  274 => 71,  267 => 66,  252 => 64,  250 => 63,  246 => 62,  242 => 61,  238 => 60,  234 => 59,  230 => 58,  225 => 57,  222 => 56,  216 => 55,  213 => 54,  210 => 53,  207 => 52,  204 => 51,  201 => 50,  196 => 49,  178 => 48,  175 => 47,  172 => 46,  169 => 45,  167 => 44,  160 => 40,  156 => 39,  152 => 38,  148 => 37,  144 => 36,  139 => 33,  137 => 32,  131 => 28,  122 => 26,  113 => 25,  111 => 24,  105 => 23,  101 => 22,  95 => 19,  91 => 18,  84 => 14,  80 => 13,  73 => 9,  69 => 8,  64 => 6,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
  <main class=\"responsive\">
    <div class=\"grid justify-center align-center\">
      <div class=\"s12 flex justify-center align-center text-center my-mid2\">
        <h2>Order #{{ order.id }}</h2>
        <div class=\"row\">
          <b>{{ 'input.buyer'|trans([], 'form') }}:</b>
          <div class=\"max\">{{ buyer }}</div>
        </div>
        <div class=\"medium-divider\"></div>
        <div class=\"row\">
          <b>{{ 'input.date'|trans([], 'form') }}:</b>
          <div class=\"max\">{{ order.date }}</div>
        </div>
        <div class=\"medium-divider\"></div>
        <div class=\"row\">
          <b>{{ 'input.state'|trans([], 'form') }}:</b>
          <div class=\"max\">{{ order.state }}</div>
        </div>
        <div class=\"medium-divider\"></div>
        <a class=\"button app-back fill\">{{ 'action.back'|trans }}</a>
        <a class=\"button green\" href=\"/stand/{{order.standId}}/order/{{order.id}}/messages\">Messages</a><br><br>
        {% if(order.state == 'PENDING') %}
        <a class=\"button blue\" href=\"/stand/{{order.standId}}/order/{{order.id}}/update/{{'ACCEPTED'}}\">Accept</a>
        <a class=\"button red\" href=\"/stand/{{order.standId}}/order/{{order.id}}/update/{{'REJECTED'}}\">Reject</a>
        {% endif %}
      </div>
    </div>

    <h4 class=\"my-mid\">Products in order</h4>
    {% if productsInOrder %}
    <table class=\"border\" style=\"margin-top: 10px;\">
      <thead>
        <tr>
          <th>{{ 'input.image'|trans([], 'form') }}</th>
          <th>{{ 'input.name'|trans([], 'form') }}</th>
          <th>{{ 'input.price'|trans([], 'form') }}</th>
          <th>{{ 'input.quantity'|trans([], 'form') }}</th>
          <th>{{ 'input.total'|trans([], 'form') }}</th>
        </tr>
      </thead>
      <tbody>
      {% set avatar ='restaurant.svg' %}
      {% set name = null %}
      {% set price = null %}
      {% set total = 0 %}
        {% for pio in productsInOrder %}
          {% for p in products %}
            {% if p.id == pio.productId %}
              {% set avatar = p.image == null ? 'restaurant.svg' : p.image.getPathname() %}
              {% set name = p.name == null ? null : p.name %}
              {% set price = p.price == null ? null : p.price %}
            {% endif %}
          {% endfor %}
        {% set rowClass = loop.index is even ? 'even' : 'odd' %}
        <tr class=\"{{ rowClass }}\">
          <td><img class=\"circle large\" src=\"/{{ avatar }}\"></td>
          <td>{{ name }}</td>
          <td>\${{ price }}</td>
          <td>{{ pio.productQuantity }}</td>
          <td>\${{ pio.productQuantity * price }}</td>
          {% set total = total + (pio.productQuantity * price) %}
        </tr>
        {% endfor %}
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>\${{ total }}</td>
        </tr>
      </tbody>
    </table>
    {% else %}
    <article class=\"border medium no-padding middle-align center-align\" style=\"margin-top: 10px;\">
      <div class=\"padding\">
        <h5>{{ 'table.empty'|trans }}<h5>
      </div>
    </article>
    {% endif %}
  </main>
{% endblock %}
", "order.html.twig", "/home/carlos/Documentos/GitHub/Localito-API/templates/order.html.twig");
    }
}
