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

/* modules/contrib/webform/templates/webform-help-video-youtube.html.twig */
class __TwigTemplate_399b5fc85579de184ba258343799ac94e8d9c9156fec6c69cac0a9ad61950e35 extends \Twig\Template
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
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("webform/webform.help"), "html", null, true);
        echo "
<div class=\"webform-help-video-youtube\">
  <div class=\"webform-help-video-youtube--container\">
    <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_id"] ?? null), 15, $this->source), "html", null, true);
        echo "?rel=0&modestbranding=1";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["autoplay"] ?? null)) ? ("&autoplay=1") : ("")));
        echo "\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["autoplay"] ?? null)) ? ("allow=\"autoplay\"") : ("")));
        echo " frameborder=\"0\" allowfullscreen></iframe>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-help-video-youtube.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 15,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme implementation for webform help video using YouTube.
 *
 * Available variables
 * - youtube_id: YouTube video id.
 *
 * @ingroup themeable
 */
#}
{{ attach_library('webform/webform.help') }}
<div class=\"webform-help-video-youtube\">
  <div class=\"webform-help-video-youtube--container\">
    <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/{{ youtube_id }}?rel=0&modestbranding=1{{ autoplay ? '&autoplay=1' : '' }}\"{{ autoplay ? 'allow=\"autoplay\"' : '' }} frameborder=\"0\" allowfullscreen></iframe>
  </div>
</div>
", "modules/contrib/webform/templates/webform-help-video-youtube.html.twig", "C:\\xampp_neww\\htdocs\\NEXTGEEKS\\Junk_monkey\\modules\\contrib\\webform\\templates\\webform-help-video-youtube.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 12);
        static $functions = array("attach_library" => 12);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['attach_library']
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
