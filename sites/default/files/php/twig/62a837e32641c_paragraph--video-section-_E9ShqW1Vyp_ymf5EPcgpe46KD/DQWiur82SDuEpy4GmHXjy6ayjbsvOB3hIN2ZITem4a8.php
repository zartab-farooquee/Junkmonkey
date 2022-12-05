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

/* themes/custom/junk_monkey/template/paragraph/paragraph--video-section-2.html.twig */
class __TwigTemplate_337291b81bab14825fa099eaef85816b1e5c6388baf80add7af2b372df0bea84 extends \Twig\Template
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
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"text-center py-3\">
                <h6>";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_top_text", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</h6>
                <h2>";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</h2>
            </div>
            <div class=\"col-lg-6\">
               
                <div class=\"video-section-img\" style=\"background-image:url('";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_video_thumbnail", [], "any", false, false, true, 10), 0, [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "')\">
                    <div class=\"youtube-placeholder\">
                        <i class=\"fa-regular fa-circle-play fa-3x\" data-video=";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_video_url", [], "any", false, false, true, 12), 0, [], "any", false, false, true, 12)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#url"] ?? null) : null), 12, $this->source), "html", null, true);
        // line 13
        echo "></i>
                    </div>
                </div>
            </div>
            ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_video_description", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/junk_monkey/template/paragraph/paragraph--video-section-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  65 => 13,  63 => 12,  58 => 10,  51 => 6,  47 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"video-section\" style=\"background-image:url('{{ content.field_background_image.0 }}')\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"text-center py-3\">
                <h6>{{ content.field_top_text }}</h6>
                <h2>{{ content.field_title }}</h2>
            </div>
            <div class=\"col-lg-6\">
               
                <div class=\"video-section-img\" style=\"background-image:url('{{ content.field_video_thumbnail.0 }}')\">
                    <div class=\"youtube-placeholder\">
                        <i class=\"fa-regular fa-circle-play fa-3x\" data-video={{ content.field_video_url.0['#url']
                            }}></i>
                    </div>
                </div>
            </div>
            {{ content.field_video_description }}
        </div>
    </div>
</section>", "themes/custom/junk_monkey/template/paragraph/paragraph--video-section-2.html.twig", "C:\\xampp\\htdocs\\NEXTGEEKS\\Junk_monkey\\themes\\custom\\junk_monkey\\template\\paragraph\\paragraph--video-section-2.html.twig");
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
