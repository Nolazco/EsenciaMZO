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

/* form/product.html.twig */
class __TwigTemplate_352f929d9bb63391e7c1a3882898472b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/product.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), ["form/beer_theme.html.twig"], true);
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["id" => "product_form"]]);
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
  <div class=\"s4\">
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "standId", [], "any", false, false, false, 12), 'row');
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), 'row');
        echo "
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "price", [], "any", false, false, false, 14), 'row');
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "info", [], "any", false, false, false, 15), 'row', ["attr" => ["style" => "width: 20em; height: 10em;"]]);
        echo "
    <div class=\"row\" style=\"justify-content: center; margin-top: 10em;\">
      ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "submit", [], "any", false, false, false, 17), 'widget');
        echo "
      <a class=\"button app-back fill\" style=\"margin-left: 2em;\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.back"), "html", null, true);
        echo "</a>
    </div>
  </div>
</div>
";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_end');
        echo "
<script defer type=\"module\">
  import { setup_preview } from '/assets/image_preview.js';
  const IMAGE_ELEMENT = document.getElementById('avatar_preview');
  const INPUT_ELEMENT = document.getElementById('product_form_image');
  const FORM_ELEMENT = document.getElementById('product_form');

  setup_preview(INPUT_ELEMENT, IMAGE_ELEMENT);
  setup_passwcheck(FORM_ELEMENT);
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "form/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 22,  85 => 18,  81 => 17,  76 => 15,  72 => 14,  68 => 13,  64 => 12,  57 => 8,  53 => 7,  46 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form 'form/beer_theme.html.twig' %}
{{ form_start(form, { attr: { id: 'product_form' } }) }}
{% set image = form.vars.value.image is empty? 'restaurant.svg' : form.vars.value.image.getPathname() %} 
<div class=\"grid\" style=\"display: flex; justify-content: center; align-items: center;\">
  <div class=\"s3\">
    <a class=\"button transparent circle big\">
      <img class=\"big small-elevate responsive\" id=\"avatar_preview\" src=\"/{{ image }}\">
      {{ form_widget(form.image, { attr: { accept: 'image/png,image/jpeg,image/gif' } }) }}
    </a>
  </div>
  <div class=\"s4\">
    {{ form_row(form.standId) }}
    {{ form_row(form.name) }}
    {{ form_row(form.price) }}
    {{ form_row(form.info, { 'attr': {'style': 'width: 20em; height: 10em;'} }) }}
    <div class=\"row\" style=\"justify-content: center; margin-top: 10em;\">
      {{ form_widget(form.submit) }}
      <a class=\"button app-back fill\" style=\"margin-left: 2em;\">{{ 'action.back'|trans }}</a>
    </div>
  </div>
</div>
{{ form_end(form) }}
<script defer type=\"module\">
  import { setup_preview } from '/assets/image_preview.js';
  const IMAGE_ELEMENT = document.getElementById('avatar_preview');
  const INPUT_ELEMENT = document.getElementById('product_form_image');
  const FORM_ELEMENT = document.getElementById('product_form');

  setup_preview(INPUT_ELEMENT, IMAGE_ELEMENT);
  setup_passwcheck(FORM_ELEMENT);
</script>
", "form/product.html.twig", "/home/carlos/Documentos/GitHub/Localito-API/templates/form/product.html.twig");
    }
}
