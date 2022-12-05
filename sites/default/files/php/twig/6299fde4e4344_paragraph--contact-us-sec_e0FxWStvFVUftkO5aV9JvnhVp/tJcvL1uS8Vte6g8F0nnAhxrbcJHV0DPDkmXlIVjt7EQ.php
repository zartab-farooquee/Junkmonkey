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

/* themes/custom/junk_monkey/template/paragraph/paragraph--contact-us-section.html.twig */
class __TwigTemplate_e9344cd136e26fb4400a2140bfec7c201a2461e5aab9579b97086c4a930b389c extends \Twig\Template
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
        echo "<section class=\"contact-us\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"contact-us-form\">
\t\t\t\t\t";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_contact_form", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<p>For junk removal service please call your local office below:</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<div class=\"contact-us-content px-3\">
\t\t\t\t\t<h6>— ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_top_text", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo " —</h6>
\t\t\t\t\t<h2>";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_heading_title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "</h2>
\t\t\t\t\t<p>";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_heading_description", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t\t<div class=\"contact-us-content-bottom\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<i class=\"fa-regular fa-clock\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h6>Our Hours .</h6>
\t\t\t\t\t\t\t<p>";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_our_hours_description", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"contact-us-icon\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container bg-white p-3\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<h5>";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_map_title", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "</h5>
\t\t\t\t<p>";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_map_summary", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"bottom-icon\">
\t\t\t\t\t<h6><i class=\"fa-solid fa-headphones\"></i> ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_map_gmail", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "</h6>
\t\t\t\t\t<h6><i class=\"fa-solid fa-envelope\"></i> ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_telephone", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "</h6>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row py-3\">
\t\t\t<div class=\"col\">
\t\t\t\t";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_map", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/junk_monkey/template/paragraph/paragraph--contact-us-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 52,  110 => 46,  106 => 45,  97 => 39,  93 => 38,  75 => 23,  65 => 16,  61 => 15,  57 => 14,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"contact-us\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"contact-us-form\">
\t\t\t\t\t{{ content.field_contact_form }}
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<p>For junk removal service please call your local office below:</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<div class=\"contact-us-content px-3\">
\t\t\t\t\t<h6>— {{ content.field_top_text }} —</h6>
\t\t\t\t\t<h2>{{ content.field_heading_title }}</h2>
\t\t\t\t\t<p>{{ content.field_heading_description }}</p>
\t\t\t\t\t<div class=\"contact-us-content-bottom\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<i class=\"fa-regular fa-clock\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h6>Our Hours .</h6>
\t\t\t\t\t\t\t<p>{{ content.field_our_hours_description }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"contact-us-icon\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container bg-white p-3\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<h5>{{ content.field_map_title }}</h5>
\t\t\t\t<p>{{ content.field_map_summary }}</p>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"bottom-icon\">
\t\t\t\t\t<h6><i class=\"fa-solid fa-headphones\"></i> {{ content.field_map_gmail }}</h6>
\t\t\t\t\t<h6><i class=\"fa-solid fa-envelope\"></i> {{ content.field_telephone}}</h6>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row py-3\">
\t\t\t<div class=\"col\">
\t\t\t\t{{ content.field_map }}
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
</section>", "themes/custom/junk_monkey/template/paragraph/paragraph--contact-us-section.html.twig", "C:\\xampp_neww\\htdocs\\NEXTGEEKS\\Junk_monkey\\themes\\custom\\junk_monkey\\template\\paragraph\\paragraph--contact-us-section.html.twig");
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
