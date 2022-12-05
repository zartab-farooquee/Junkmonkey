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

/* themes/custom/junk_monkey/template/paragraph/paragraph--choose-us-section.html.twig */
class __TwigTemplate_2dcca1a39bfb5722f194503f6d68c682117a871177611c803b5f4e7e025448a9 extends \Twig\Template
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
        echo "<section class=\"thumbnail\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"thumbnail-top\">
                    <h2>";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h2>
                    <p>";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"thumbnail-left\">
                    ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_choose_us_inner_section", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"thumbnail-between\">
                    ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_center_image", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"thumbnail-right\">
                    ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_choose_us_inner_right", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
                </div>
            </div>
        </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/junk_monkey/template/paragraph/paragraph--choose-us-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 24,  68 => 19,  60 => 14,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"thumbnail\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"thumbnail-top\">
                    <h2>{{ content.field_title}}</h2>
                    <p>{{ content.field_description }}</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"thumbnail-left\">
                    {{ content.field_choose_us_inner_section }}
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"thumbnail-between\">
                    {{ content.field_center_image }}
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"thumbnail-right\">
                    {{ content.field_choose_us_inner_right }}
                </div>
            </div>
        </div>
</section>", "themes/custom/junk_monkey/template/paragraph/paragraph--choose-us-section.html.twig", "C:\\xampp\\htdocs\\NEXTGEEKS\\Junk_monkey\\themes\\custom\\junk_monkey\\template\\paragraph\\paragraph--choose-us-section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6);
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
