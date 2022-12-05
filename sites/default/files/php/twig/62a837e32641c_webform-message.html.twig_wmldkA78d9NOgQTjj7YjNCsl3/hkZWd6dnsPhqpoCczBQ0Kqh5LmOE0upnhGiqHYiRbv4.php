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

/* modules/contrib/webform/templates/webform-message.html.twig */
class __TwigTemplate_b0bfa6ed49714add8dbb07cb8f0a692289b6a83e3e5e361a1e38525eca7ecda1 extends \Twig\Template
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
        // line 20
        $context["classes"] = [0 => ((        // line 21
($context["has_parent"] ?? null)) ? ("js-form-wrapper") : ("")), 1 => ((        // line 22
($context["has_parent"] ?? null)) ? ("form-wrapper") : (""))];
        // line 25
        if ( !($context["closed"] ?? null)) {
            // line 26
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 26), 26, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 26, $this->source), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 26,  43 => 25,  41 => 22,  40 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation of a Webform message container.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - message: The rendered status_messages elements.
 * - has_parent: A flag to indicate that the container has one or more parent
 *    containers.
 * - closed: A flag to indicate that the message has been been closed and should
 *    not be displayed.
 *
 * @see template_preprocess_webform_message()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    has_parent ? 'js-form-wrapper',
    has_parent ? 'form-wrapper',
  ]
%}
{% if not closed %}
  <div{{ attributes.addClass(classes) }}>{{ message }}</div>
{% endif %}
", "modules/contrib/webform/templates/webform-message.html.twig", "C:\\xampp\\htdocs\\NEXTGEEKS\\Junk_monkey\\modules\\contrib\\webform\\templates\\webform-message.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 20, "if" => 25);
        static $filters = array("escape" => 26);
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
