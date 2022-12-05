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

/* themes/custom/junk_monkey/template/paragraph/paragraph--video-section-1.html.twig */
class __TwigTemplate_cd45817ef515e6e2057f4d41c73ba10413b2164e82cf527ac8b7dd8f6b92391d extends \Twig\Template
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
        echo "<section class=\"video-section\" style=\"background-image:url('";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_background_image", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "')\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"text-center py-3\">
\t\t\t\t<h2>";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</h2>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<p>";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</p>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"video-section-img\" style=\"background-image:url('";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_thumbnail", [], "any", false, false, true, 12), 0, [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "')\" >
\t\t\t\t\t<div class=\"youtube-placeholder\">
\t\t\t\t\t\t<i class=\"fa-regular fa-circle-play fa-3x\" data-video=";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_video_url", [], "any", false, false, true, 14), 0, [], "any", false, false, true, 14)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null), 14, $this->source), "html", null, true);
        echo "></i>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/junk_monkey/template/paragraph/paragraph--video-section-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  60 => 12,  53 => 8,  47 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"video-section\" style=\"background-image:url('{{ content.field_background_image.0 }}')\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"text-center py-3\">
\t\t\t\t<h2>{{ content.field_title}}</h2>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<p>{{ content.field_description }}</p>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"video-section-img\" style=\"background-image:url('{{ content.field_thumbnail.0 }}')\" >
\t\t\t\t\t<div class=\"youtube-placeholder\">
\t\t\t\t\t\t<i class=\"fa-regular fa-circle-play fa-3x\" data-video={{ content.field_video_url.0['#url'] }}></i>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
", "themes/custom/junk_monkey/template/paragraph/paragraph--video-section-1.html.twig", "C:\\xampp\\htdocs\\NEXTGEEKS\\Junk_monkey\\themes\\custom\\junk_monkey\\template\\paragraph\\paragraph--video-section-1.html.twig");
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
