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

/* user.html.twig */
class __TwigTemplate_e84ba4946532bf057d31f3df59438718 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user.html.twig"));

        // line 2
        $context["avatar"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 2, $this->source); })()), "getAvatarUri", [], "method", false, false, false, 2))) ? ("user-default.svg") : (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 2, $this->source); })()), "getAvatarUri", [], "method", false, false, false, 2)));
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user.html.twig", 1);
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
        echo "  <main class=\"responsive\">
    <div class=\"grid justify-center align-center text-center\">
      <div class=\"s12 flex justify-center align-center\">
        <img class=\"big circle center\" src=\"/";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\" />
      </div>
      <div class=\"s12 flex justify-center align-center text-center my-mid2\">
        <h2>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "getFullName", [], "method", false, false, false, 10), "html", null, true);
        echo "</h2>
        <div class=\"row\">
          <b>";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.name", [], "form"), "html", null, true);
        echo ":</b>
          <div class=\"max\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</div>
        </div>
        <div class=\"medium-divider\"></div>
        <div class=\"row\">
          <b>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.last_name", [], "form"), "html", null, true);
        echo ":</b>
          <div class=\"max\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "lastName", [], "any", false, false, false, 18), "html", null, true);
        echo "</div>
        </div>
        <div class=\"medium-divider\"></div>
        <div class=\"row\">
          <b>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.email", [], "form"), "html", null, true);
        echo ":</b>
          <div class=\"max\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), "html", null, true);
        echo "</div>
          <i>email</i>
        </div>
        <div class=\"medium-divider\"></div>
        <div class=\"row\">
          <b>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("input.phone", [], "form"), "html", null, true);
        echo ":</b>
          <div class=\"max\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "phone", [], "any", false, false, false, 29), "html", null, true);
        echo "</div>
          <i>phone</i>
        </div>
      </div>
      <div class=\"s12 my-mid2\">
        <a class=\"button app-back fill\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back"), "html", null, true);
        echo "</a>
        ";
        // line 35
        if ((null === (isset($context["seller"]) || array_key_exists("seller", $context) ? $context["seller"] : (function () { throw new RuntimeError('Variable "seller" does not exist.', 35, $this->source); })()))) {
            // line 36
            echo "          <a class=\"button green9\" href=\"/user/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), "html", null, true);
            echo "/makeseller\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.makeSeller"), "html", null, true);
            echo "</a>
        ";
        }
        // line 38
        echo "      </div>
    </div>
  </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 38,  130 => 36,  128 => 35,  124 => 34,  116 => 29,  112 => 28,  104 => 23,  100 => 22,  93 => 18,  89 => 17,  82 => 13,  78 => 12,  73 => 10,  67 => 7,  62 => 4,  55 => 3,  47 => 1,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% set avatar = user.getAvatarUri() is empty ? 'user-default.svg' : user.getAvatarUri() %}
{% block body %}
  <main class=\"responsive\">
    <div class=\"grid justify-center align-center text-center\">
      <div class=\"s12 flex justify-center align-center\">
        <img class=\"big circle center\" src=\"/{{ avatar }}\" />
      </div>
      <div class=\"s12 flex justify-center align-center text-center my-mid2\">
        <h2>{{ user.getFullName() }}</h2>
        <div class=\"row\">
          <b>{{ 'input.name'|trans([], 'form') }}:</b>
          <div class=\"max\">{{ user.name }}</div>
        </div>
        <div class=\"medium-divider\"></div>
        <div class=\"row\">
          <b>{{ 'input.last_name'|trans([], 'form') }}:</b>
          <div class=\"max\">{{ user.lastName }}</div>
        </div>
        <div class=\"medium-divider\"></div>
        <div class=\"row\">
          <b>{{ 'input.email'|trans([], 'form') }}:</b>
          <div class=\"max\">{{ user.email }}</div>
          <i>email</i>
        </div>
        <div class=\"medium-divider\"></div>
        <div class=\"row\">
          <b>{{ 'input.phone'|trans([], 'form') }}:</b>
          <div class=\"max\">{{ user.phone }}</div>
          <i>phone</i>
        </div>
      </div>
      <div class=\"s12 my-mid2\">
        <a class=\"button app-back fill\">{{ 'action.back'|trans }}</a>
        {% if seller is null %}
          <a class=\"button green9\" href=\"/user/{{user.id}}/makeseller\">{{ 'action.makeSeller'|trans }}</a>
        {% endif %}
      </div>
    </div>
  </main>
{% endblock %}
", "user.html.twig", "/home/carlos/Documentos/GitHub/Localito-API/templates/user.html.twig");
    }
}
