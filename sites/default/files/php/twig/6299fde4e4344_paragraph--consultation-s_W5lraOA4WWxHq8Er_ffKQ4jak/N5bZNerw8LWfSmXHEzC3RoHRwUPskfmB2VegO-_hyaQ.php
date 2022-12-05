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

/* themes/custom/junk_monkey/template/paragraph/paragraph--consultation-strip-section.html.twig */
class __TwigTemplate_5d3e4a72c4c50716cc6e2cdb3591b6f3c3c18973fd56804b42f5148daf210755 extends \Twig\Template
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
        echo "
<section class=\"call-us\" style=\"background-image:url('";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_background_image", [], "any", false, false, true, 2), 0, [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "')\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<div class=\"call-us-content\">
\t\t\t\t\t<h2>";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div>
\t\t\t\t\t<a href=\"";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_button_1_link", [], "any", false, false, true, 12), 0, [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\" class=\"secoundary-btn\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_button_1_text", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"call-us-btn\">
\t\t\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_button_2_link", [], "any", false, false, true, 15), 0, [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "\" class=\"primary-btn\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_button_2_text", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/junk_monkey/template/paragraph/paragraph--consultation-strip-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  58 => 12,  50 => 7,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<section class=\"call-us\" style=\"background-image:url('{{ content.field_background_image.0 }}')\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-7\">
\t\t\t\t<div class=\"call-us-content\">
\t\t\t\t\t<h2>{{ content.field_title }}</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div>
\t\t\t\t\t<a href=\"{{ content.field_button_1_link.0 }}\" class=\"secoundary-btn\">{{ content.field_button_1_text }}</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"call-us-btn\">
\t\t\t\t\t<a href=\"{{ content.field_button_2_link.0 }}\" class=\"primary-btn\">{{ content.field_button_2_text }}</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>", "themes/custom/junk_monkey/template/paragraph/paragraph--consultation-strip-section.html.twig", "C:\\xampp_neww\\htdocs\\NEXTGEEKS\\Junk_monkey\\themes\\custom\\junk_monkey\\template\\paragraph\\paragraph--consultation-strip-section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
