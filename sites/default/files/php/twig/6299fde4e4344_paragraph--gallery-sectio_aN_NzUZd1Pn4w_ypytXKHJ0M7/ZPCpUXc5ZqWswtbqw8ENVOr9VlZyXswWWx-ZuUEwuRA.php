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

/* themes/custom/junk_monkey/template/paragraph/paragraph--gallery-section.html.twig */
class __TwigTemplate_2bfba62677cd5e689bddf158ca1ec531d111659f1516e84e1815ef2af741d0c5 extends \Twig\Template
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
        echo "<section class=\"galary\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_inner_gallery_section", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "
\t\t</div>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/junk_monkey/template/paragraph/paragraph--gallery-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"galary\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t{{ content.field_inner_gallery_section }}
\t\t</div>
\t</div>
</section>", "themes/custom/junk_monkey/template/paragraph/paragraph--gallery-section.html.twig", "C:\\xampp_neww\\htdocs\\NEXTGEEKS\\Junk_monkey\\themes\\custom\\junk_monkey\\template\\paragraph\\paragraph--gallery-section.html.twig");
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
