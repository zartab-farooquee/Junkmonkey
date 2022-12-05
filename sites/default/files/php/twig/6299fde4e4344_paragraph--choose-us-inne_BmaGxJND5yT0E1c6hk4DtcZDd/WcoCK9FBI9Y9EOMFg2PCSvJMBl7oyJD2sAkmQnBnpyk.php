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

/* themes/custom/junk_monkey/template/paragraph/paragraph--choose-us-inner-section.html.twig */
class __TwigTemplate_daf305a5aecdb89ab7b4b554fc2ec026b583d244ac2627783d865592a8416d7b extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["position"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_icon_position", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1);
        // line 2
        echo "
<div class=\"thumbnail-left-content\" >
    ";
        // line 4
        if (twig_in_filter("Right", ($context["position"] ?? null))) {
            // line 5
            echo "        <div data-abc=\"1\" data-position=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 5, $this->source), "html", null, true);
            echo ">
            <h6><a href=\"#\">";
            // line 6
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_choose_us_title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "</a></h6>
            <p>";
            // line 7
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_choose_us_summery", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "</p>
        </div>
        <div>
            ";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_choose_us_icon", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 13
            echo "        <div data-position=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 13, $this->source), "html", null, true);
            echo ">
            ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_choose_us_icon", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "
        </div>
        <div>
            <h6><a href=\"#\">";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_choose_us_title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</a></h6>
            <p>";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_choose_us_summery", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        // line 21
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/junk_monkey/template/paragraph/paragraph--choose-us-inner-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  83 => 18,  79 => 17,  73 => 14,  68 => 13,  62 => 10,  56 => 7,  52 => 6,  47 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set position = content.field_icon_position.0 %}

<div class=\"thumbnail-left-content\" >
    {% if 'Right' in position %}
        <div data-abc=\"1\" data-position={{ position }}>
            <h6><a href=\"#\">{{ content.field_choose_us_title }}</a></h6>
            <p>{{ content.field_choose_us_summery}}</p>
        </div>
        <div>
            {{ content.field_choose_us_icon}}
        </div>
    {% else %}
        <div data-position={{ position }}>
            {{ content.field_choose_us_icon }}
        </div>
        <div>
            <h6><a href=\"#\">{{ content.field_choose_us_title }}</a></h6>
            <p>{{ content.field_choose_us_summery }}</p>
        </div>
    {% endif %}
</div>", "themes/custom/junk_monkey/template/paragraph/paragraph--choose-us-inner-section.html.twig", "C:\\xampp_neww\\htdocs\\NEXTGEEKS\\Junk_monkey\\themes\\custom\\junk_monkey\\template\\paragraph\\paragraph--choose-us-inner-section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 4);
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
