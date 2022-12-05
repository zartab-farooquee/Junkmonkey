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

/* themes/custom/junk_monkey/template/paragraph/paragraph--accordion-section.html.twig */
class __TwigTemplate_31a0a4430a6cedd362465ee0b79b4441729921ebd12ec05f681418e4968ab382 extends \Twig\Template
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
        echo "<div class=\"about-accordion\">
    <div class=\"accordion accordion-flush\" id=\"accordionFlushExample\">
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"flush-heading";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "index", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\">
                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapse";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "index", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\" aria-expanded=\"false\" aria-controls=\"flush-collapse";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "index", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\">
               ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "
                  </button>
            </h2>
            <div id=\"flush-collapse";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "index", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-heading";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "index", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\" data-bs-parent=\"#accordionFlushExample\" >
                  <div class=\"accordion-body\">";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "</div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/junk_monkey/template/paragraph/paragraph--accordion-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  60 => 9,  54 => 6,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"about-accordion\">
    <div class=\"accordion accordion-flush\" id=\"accordionFlushExample\">
        <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"flush-heading{{ paragraph.index}}\">
                  <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapse{{ paragraph.index}}\" aria-expanded=\"false\" aria-controls=\"flush-collapse{{ paragraph.index}}\">
               {{ content.field_title}}
                  </button>
            </h2>
            <div id=\"flush-collapse{{ paragraph.index}}\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-heading{{ paragraph.index}}\" data-bs-parent=\"#accordionFlushExample\" >
                  <div class=\"accordion-body\">{{ content.field_description }}</div>
            </div>
        </div>
    </div>
</div>", "themes/custom/junk_monkey/template/paragraph/paragraph--accordion-section.html.twig", "C:\\xampp_neww\\htdocs\\NEXTGEEKS\\Junk_monkey\\themes\\custom\\junk_monkey\\template\\paragraph\\paragraph--accordion-section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4);
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
