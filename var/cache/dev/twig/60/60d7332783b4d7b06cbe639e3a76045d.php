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

/* form/user.html.twig */
class __TwigTemplate_3184a869b05fcdd9f58b64c27b13d5af extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/user.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), ["form/beer_theme.html.twig"], true);
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["id" => "user_form"]]);
        echo "
";
        // line 3
        $context["avatar"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3), "avatar", [], "any", false, false, false, 3))) ? ("user-default.svg") : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3), "avatar", [], "any", false, false, false, 3), "getPathname", [], "method", false, false, false, 3)));
        echo " 
<div class=\"grid\" style=\"display: flex; align-items: center; justify-content: center;\"> ";
        // line 5
        echo "  <div class=\"s3\">
    <a class=\"button transparent circle big\">
      <img class=\"big small-elevate responsive\" id=\"avatar_preview\" src=\"/";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["avatar"]) || array_key_exists("avatar", $context) ? $context["avatar"] : (function () { throw new RuntimeError('Variable "avatar" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\">
      ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "avatar", [], "any", false, false, false, 8), 'widget', ["attr" => ["accept" => "image/png,image/jpeg,image/gif"]]);
        echo "
    </a>
  </div>
  <div class=\"s4\">
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), 'row');
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "lastName", [], "any", false, false, false, 13), 'row');
        echo "
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "phone", [], "any", false, false, false, 14), 'row');
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), 'row');
        echo "
    <div class=\"medium-divider\"></div>
    ";
        // line 17
        if (((isset($context["new"]) || array_key_exists("new", $context) ? $context["new"] : (function () { throw new RuntimeError('Variable "new" does not exist.', 17, $this->source); })()) == false)) {
            // line 18
            echo "      <span>Campo opcional</span>
    ";
        }
        // line 20
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "password", [], "any", false, false, false, 20), 'row');
        echo "
    <div class=\"row\">
      ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "submit", [], "any", false, false, false, 22), 'widget');
        echo "
      <a class=\"button app-back fill\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back"), "html", null, true);
        echo "</a>
    </div>
  </div>
</div>
";
        // line 27
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "avatar", [], "any", false, false, false, 27), 'errors'))) {
            // line 28
            echo "  <div class=\"snackbar error top active\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "avatar", [], "any", false, false, false, 28), 'errors');
            echo "</div>
";
        }
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_end');
        echo "
<script defer type=\"module\">
  import { setup_preview } from '/assets/image_preview.js';
  import { setup_passwcheck } from '/assets/password_checker.js';
  const IMAGE_ELEMENT = document.getElementById('avatar_preview');
  const INPUT_ELEMENT = document.getElementById('user_form_avatar');
  const FORM_ELEMENT = document.getElementById('user_form');

  setup_preview(INPUT_ELEMENT, IMAGE_ELEMENT);
  setup_passwcheck(FORM_ELEMENT);
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "form/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 30,  107 => 28,  105 => 27,  98 => 23,  94 => 22,  88 => 20,  84 => 18,  82 => 17,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  58 => 8,  54 => 7,  50 => 5,  46 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form 'form/beer_theme.html.twig'  %}
{{ form_start(form, { attr: { id: 'user_form' }}) }}
{% set avatar = form.vars.value.avatar is empty? 'user-default.svg' : form.vars.value.avatar.getPathname() %} 
<div class=\"grid\" style=\"display: flex; align-items: center; justify-content: center;\"> {# Use Flexbox to center content #}
  <div class=\"s3\">
    <a class=\"button transparent circle big\">
      <img class=\"big small-elevate responsive\" id=\"avatar_preview\" src=\"/{{ avatar }}\">
      {{ form_widget(form.avatar, { attr: { accept: 'image/png,image/jpeg,image/gif' } }) }}
    </a>
  </div>
  <div class=\"s4\">
    {{ form_row(form.name) }}
    {{ form_row(form.lastName) }}
    {{ form_row(form.phone) }}
    {{ form_row(form.email) }}
    <div class=\"medium-divider\"></div>
    {% if new == false %}
      <span>Campo opcional</span>
    {% endif %}
    {{ form_row(form.password) }}
    <div class=\"row\">
      {{ form_widget(form.submit) }}
      <a class=\"button app-back fill\">{{ 'action.back'|trans }}</a>
    </div>
  </div>
</div>
{% if not form_errors(form.avatar) is empty %}
  <div class=\"snackbar error top active\">{{ form_errors(form.avatar) }}</div>
{% endif %}
{{ form_end(form) }}
<script defer type=\"module\">
  import { setup_preview } from '/assets/image_preview.js';
  import { setup_passwcheck } from '/assets/password_checker.js';
  const IMAGE_ELEMENT = document.getElementById('avatar_preview');
  const INPUT_ELEMENT = document.getElementById('user_form_avatar');
  const FORM_ELEMENT = document.getElementById('user_form');

  setup_preview(INPUT_ELEMENT, IMAGE_ELEMENT);
  setup_passwcheck(FORM_ELEMENT);
</script>
", "form/user.html.twig", "/home/carlos/Documentos/GitHub/Localito-API/templates/form/user.html.twig");
    }
}
