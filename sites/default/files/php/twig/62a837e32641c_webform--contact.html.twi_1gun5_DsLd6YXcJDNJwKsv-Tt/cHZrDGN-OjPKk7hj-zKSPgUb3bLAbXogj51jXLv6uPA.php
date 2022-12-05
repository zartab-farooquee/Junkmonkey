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

/* themes/custom/junk_monkey/template/paragraph/webform--contact.html.twig */
class __TwigTemplate_bd66514428b4e98111b667ee2d2c9229b0dc25b81125bf34829e467e52a21b04 extends \Twig\Template
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
        echo "<form";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 1, $this->source), "html", null, true);
        echo ">
    ";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 2, $this->source), "html", null, true);
        echo "
    <div class=\"row\">
        <div class=\"col-sm-6\">
            ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 5), "name", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "
        </div>
        <div class=\"col-sm-6\">
            ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 8), "email", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row my-3\">
        <div class=\"col-sm-6\">
            ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 13), "phone_number", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "
        </div>
        <div class=\"col-sm-6\">
            ";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 16), "city", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 21), "message", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row my-3\">
        <div class=\"col\">
            ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 26), "upload_file", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row text-center my-5\">
        ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "form_build_id", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "
        ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "form_token", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "
        ";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "form_id", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "
        ";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["element"] ?? null), "elements", [], "any", false, false, true, 33), "actions", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "
    </div>
    </form>";
    }

    public function getTemplateName()
    {
        return "themes/custom/junk_monkey/template/paragraph/webform--contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 33,  101 => 32,  97 => 31,  93 => 30,  86 => 26,  78 => 21,  70 => 16,  64 => 13,  56 => 8,  50 => 5,  44 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form{{ attributes }}>
    {{ title_prefix }}
    <div class=\"row\">
        <div class=\"col-sm-6\">
            {{ element.elements.name }}
        </div>
        <div class=\"col-sm-6\">
            {{ element.elements.email }}
        </div>
    </div>
    <div class=\"row my-3\">
        <div class=\"col-sm-6\">
            {{ element.elements.phone_number }}
        </div>
        <div class=\"col-sm-6\">
            {{ element.elements.city }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col\">
            {{ element.elements.message }}
        </div>
    </div>
    <div class=\"row my-3\">
        <div class=\"col\">
            {{ element.elements.upload_file }}
        </div>
    </div>
    <div class=\"row text-center my-5\">
        {{ element.form_build_id }}
        {{ element.form_token }}
        {{ element.form_id }}
        {{ element.elements.actions }}
    </div>
    </form>", "themes/custom/junk_monkey/template/paragraph/webform--contact.html.twig", "C:\\xampp\\htdocs\\NEXTGEEKS\\Junk_monkey\\themes\\custom\\junk_monkey\\template\\paragraph\\webform--contact.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 1);
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
