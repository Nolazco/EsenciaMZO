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

/* form/stand.html.twig */
class __TwigTemplate_1bed4662f70a0c30ab55ee98e36abb03 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/stand.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), ["form/beer_theme.html.twig"], true);
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["id" => "stand_form"]]);
        echo "
";
        // line 3
        $context["image"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3), "image", [], "any", false, false, false, 3))) ? ("restaurant.svg") : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "value", [], "any", false, false, false, 3), "image", [], "any", false, false, false, 3), "getPathname", [], "method", false, false, false, 3)));
        echo " 
<div class=\"grid\" style=\"display: flex; justify-content: center; align-items: center;\">
  <div class=\"s3\">
    <a class=\"button transparent circle big\">
      <img class=\"big small-elevate responsive\" id=\"avatar_preview\" src=\"/";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\">
      ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "image", [], "any", false, false, false, 8), 'widget', ["attr" => ["accept" => "image/png,image/jpeg,image/gif"]]);
        echo "
    </a>
  </div>
<div class=\"grid\" style=\"display: flex; justify-content: center; align-items: center;\">
  <div class=\"s4\">
  ";
        // line 13
        if (((isset($context["rol"]) || array_key_exists("rol", $context) ? $context["rol"] : (function () { throw new RuntimeError('Variable "rol" does not exist.', 13, $this->source); })()) == "admin")) {
            // line 14
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "sellerId", [], "any", false, false, false, 14), 'row');
            echo "
  ";
        }
        // line 16
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "tag", [], "any", false, false, false, 16), 'row');
        echo "
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), 'row');
        echo "
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "city", [], "any", false, false, false, 18), 'row');
        echo "
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "category", [], "any", false, false, false, 19), 'row');
        echo "
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "info", [], "any", false, false, false, 20), 'row', ["attr" => ["style" => "width: 20em; height: 10em;"]]);
        echo "
    <div class=\"row\" style=\"justify-content: center; margin-top: 10em;\">
      ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "submit", [], "any", false, false, false, 22), 'widget');
        echo "
      <a class=\"button app-back fill\" style=\"margin-left: 10px;\">";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back"), "html", null, true);
        echo "</a>
    </div>
  </div>
</div>
";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
        echo "
<script defer type=\"module\">
  import { setup_preview } from '/assets/image_preview.js';
  const IMAGE_ELEMENT = document.getElementById('avatar_preview');
  const INPUT_ELEMENT = document.getElementById('stand_form_image');
  const FORM_ELEMENT = document.getElementById('stand_form');

  setup_preview(INPUT_ELEMENT, IMAGE_ELEMENT);
  setup_passwcheck(FORM_ELEMENT);
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "form/stand.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 27,  99 => 23,  95 => 22,  90 => 20,  86 => 19,  82 => 18,  78 => 17,  73 => 16,  67 => 14,  65 => 13,  57 => 8,  53 => 7,  46 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form 'form/beer_theme.html.twig' %}
{{ form_start(form, { attr: { id: 'stand_form' } }) }}
{% set image = form.vars.value.image is empty? 'restaurant.svg' : form.vars.value.image.getPathname() %} 
<div class=\"grid\" style=\"display: flex; justify-content: center; align-items: center;\">
  <div class=\"s3\">
    <a class=\"button transparent circle big\">
      <img class=\"big small-elevate responsive\" id=\"avatar_preview\" src=\"/{{ image }}\">
      {{ form_widget(form.image, { attr: { accept: 'image/png,image/jpeg,image/gif' } }) }}
    </a>
  </div>
<div class=\"grid\" style=\"display: flex; justify-content: center; align-items: center;\">
  <div class=\"s4\">
  {% if(rol == 'admin') %}
    {{ form_row(form.sellerId) }}
  {% endif %}
    {{ form_row(form.tag) }}
    {{ form_row(form.name ) }}
    {{ form_row(form.city) }}
    {{ form_row(form.category) }}
    {{ form_row(form.info, { 'attr': {'style': 'width: 20em; height: 10em;'} }) }}
    <div class=\"row\" style=\"justify-content: center; margin-top: 10em;\">
      {{ form_widget(form.submit) }}
      <a class=\"button app-back fill\" style=\"margin-left: 10px;\">{{ 'action.back'|trans }}</a>
    </div>
  </div>
</div>
{{ form_end(form) }}
<script defer type=\"module\">
  import { setup_preview } from '/assets/image_preview.js';
  const IMAGE_ELEMENT = document.getElementById('avatar_preview');
  const INPUT_ELEMENT = document.getElementById('stand_form_image');
  const FORM_ELEMENT = document.getElementById('stand_form');

  setup_preview(INPUT_ELEMENT, IMAGE_ELEMENT);
  setup_passwcheck(FORM_ELEMENT);
</script>
", "form/stand.html.twig", "/home/carlos/Documentos/GitHub/Localito-API/templates/form/stand.html.twig");
    }
}
