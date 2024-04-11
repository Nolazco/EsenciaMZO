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

/* include/nav_item.html.twig */
class __TwigTemplate_12f91da24ee9414f3894848e0012c3ac extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "include/nav_item.html.twig"));

        // line 1
        echo "<a class=\"";
        echo twig_escape_filter($this->env, (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 2
        if ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 2, $this->source); })())) {
            echo "<i>";
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 2, $this->source); })()), "html", null, true);
            echo "</i>";
        }
        // line 3
        echo "    ";
        if ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 3, $this->source); })())) {
            echo "<span>";
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "</span>";
        }
        // line 4
        echo "</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "include/nav_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 4,  53 => 3,  47 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a class=\"{{ classes }}\" href=\"{{ url }}\">
    {% if icon %}<i>{{ icon }}</i>{% endif %}
    {% if label %}<span>{{ label }}</span>{% endif %}
</a>
", "include/nav_item.html.twig", "/home/carlos/Documentos/GitHub/Localito-API/templates/include/nav_item.html.twig");
    }
}
