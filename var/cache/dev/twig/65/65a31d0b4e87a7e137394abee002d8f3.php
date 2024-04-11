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

/* form/beer_theme.html.twig */
class __TwigTemplate_15f46efe20a077f254bc0c8220accf16 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form/beer_theme.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_row' => [$this, 'block_form_row'],
                'form_label_content' => [$this, 'block_form_label_content'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_help' => [$this, 'block_form_help'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/beer_theme.html.twig"));

        // line 4
        $this->displayBlock('form_row', $context, $blocks);
        // line 16
        $this->displayBlock('form_label_content', $context, $blocks);
        // line 20
        $this->displayBlock('form_errors', $context, $blocks);
        // line 27
        $this->displayBlock('form_help', $context, $blocks);
        // line 32
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 5
        echo "<div class=\"field label border ";
        echo ((twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 5, $this->source); })()))) ? ("") : ("invalid"));
        echo "\">";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'widget');
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'label');
        // line 8
        if ( !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 8, $this->source); })()))) {
            // line 9
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'errors');
        } else {
            // line 11
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'help');
        }
        // line 13
        echo "  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_form_label_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label_content"));

        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 17, $this->source); })()), [], "form"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 20
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 21
        $context["err"] = twig_first($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 21, $this->source); })()));
        // line 22
        if ((isset($context["err"]) || array_key_exists("err", $context) ? $context["err"] : (function () { throw new RuntimeError('Variable "err" does not exist.', 22, $this->source); })())) {
            // line 23
            echo "<span class=\"error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["err"]) || array_key_exists("err", $context) ? $context["err"] : (function () { throw new RuntimeError('Variable "err" does not exist.', 23, $this->source); })()), "message", [], "any", false, false, false, 23), "html", null, true);
            echo "</span>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 27
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        // line 28
        if ( !twig_test_empty((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 28, $this->source); })()))) {
            // line 29
            echo "<span class=\"helper\">";
            $this->displayBlock("form_help_content", $context, $blocks);
            echo "</span>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "form/beer_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  146 => 29,  144 => 28,  137 => 27,  127 => 23,  125 => 22,  123 => 21,  116 => 20,  109 => 17,  102 => 16,  95 => 13,  92 => 11,  89 => 9,  87 => 8,  85 => 7,  83 => 6,  79 => 5,  72 => 4,  64 => 32,  62 => 27,  60 => 20,  58 => 16,  56 => 4,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% use 'form_div_layout.html.twig' %}
{% trans_default_domain 'form' %}

{%- block form_row -%}
  <div class=\"field label border {{errors is empty? '' : 'invalid'}}\">
    {{- form_widget(form) -}}
    {{- form_label(form) -}}
    {% if not (errors is empty) %}
      {{- form_errors(form) -}}
    {% else %}
      {{- form_help(form) -}}
    {% endif %}
  </div>
{%- endblock form_row -%}

{%- block form_label_content -%}
  {{ label|trans  }}
{%- endblock -%}

{%- block form_errors -%}
  {% set err = errors|first %}
  {%- if err -%}
    <span class=\"error\">{{ err.message }}</span>
  {%- endif -%}
{%- endblock form_errors -%}

{% block form_help -%}
  {%- if help is not empty -%}
    <span class=\"helper\">{{- block('form_help_content') -}}</span>
  {%- endif -%}
{%- endblock form_help %}

", "form/beer_theme.html.twig", "/home/carlos/Documentos/GitHub/Localito-API/templates/form/beer_theme.html.twig");
    }
}
