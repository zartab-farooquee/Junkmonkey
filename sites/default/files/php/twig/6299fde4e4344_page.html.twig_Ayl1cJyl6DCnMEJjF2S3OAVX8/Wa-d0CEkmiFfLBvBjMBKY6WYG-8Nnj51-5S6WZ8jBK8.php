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

/* themes/custom/junk_monkey/template/layout/page.html.twig */
class __TwigTemplate_7ff0e5f1b5bbbcb9c76ea98437507af732ff6748f8850288e30e1ab16d4b6701 extends \Twig\Template
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
        echo "<header>
    <div class=\"header-top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 pb-3\">

                </div>

                <div class=\"col-lg-8\">
                    <div class=\"row header-top-content\">
                        ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar_info", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"header-top-logo\">
\t\t\t\t";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "
\t\t\t</div>
        </div>
    </div>
    <nav class=\"navbar navbar-expand-lg navbar-light header-bottom\">
        <div class=\"container\">
            <div class=\"brand-logo\">
                ";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "site_branding", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "
            </div>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\"
                aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_navbar", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"header-bottom-social-links\">
                <ul>
                    <li>
                        <a href=\"";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone_field"] ?? null), 35, $this->source), "html", null, true);
        echo "\">
                            <img src=\"/themes/custom/junk_monkey/img/header-icon-1.png\">
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email_field"] ?? null), 40, $this->source), "html", null, true);
        echo "\">
                            <img
                                src=\"/themes/custom/junk_monkey/img/header-icon-2.png\">
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 46, $this->source), "html", null, true);
        echo "\">
                            <img
                                src=\"/themes/custom/junk_monkey/img/header-icon-3.png\">
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 52, $this->source), "html", null, true);
        echo "\">
                            <img
                                src=\"/themes/custom/junk_monkey/img/header-icon-4.png\">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "

<footer>
\t<div class=\"footer-bg\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 mx-auto\">
\t\t\t\t\t";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_top", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"footer-logo\">
\t\t\t\t\t\t";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 footer-links\">
\t\t\t\t\t";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<span class=\"fixed-btn\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"https://cdn.userway.org/widgetapp/images/body_bl.svg\">
\t\t\t\t\t</a>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t<div class=\"row footer-bottom\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t";
        // line 92
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t";
        // line 95
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>";
    }

    public function getTemplateName()
    {
        return "themes/custom/junk_monkey/template/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 95,  171 => 92,  158 => 82,  152 => 79,  145 => 75,  136 => 69,  126 => 62,  113 => 52,  104 => 46,  95 => 40,  87 => 35,  79 => 30,  69 => 23,  59 => 16,  51 => 11,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <div class=\"header-top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4 pb-3\">

                </div>

                <div class=\"col-lg-8\">
                    <div class=\"row header-top-content\">
                        {{ page.topbar_info}}
                    </div>
                </div>
            </div>
            <div class=\"header-top-logo\">
\t\t\t\t{{ page.site_branding }}
\t\t\t</div>
        </div>
    </div>
    <nav class=\"navbar navbar-expand-lg navbar-light header-bottom\">
        <div class=\"container\">
            <div class=\"brand-logo\">
                {{ page.site_branding }}
            </div>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\"
                aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                {{ page.main_navbar}}
            </div>
            <div class=\"header-bottom-social-links\">
                <ul>
                    <li>
                        <a href=\"{{ phone_field }}\">
                            <img src=\"/themes/custom/junk_monkey/img/header-icon-1.png\">
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ email_field }}\">
                            <img
                                src=\"/themes/custom/junk_monkey/img/header-icon-2.png\">
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ facebook_url }}\">
                            <img
                                src=\"/themes/custom/junk_monkey/img/header-icon-3.png\">
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ instagram_url }}\">
                            <img
                                src=\"/themes/custom/junk_monkey/img/header-icon-4.png\">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
{{ page.content }}

<footer>
\t<div class=\"footer-bg\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 mx-auto\">
\t\t\t\t\t{{ page.footer_top }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"footer-logo\">
\t\t\t\t\t\t{{ page.footer_first }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t{{ page.footer_second }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 footer-links\">
\t\t\t\t\t{{ page.footer_third }}
\t\t\t\t</div>
\t\t\t\t<span class=\"fixed-btn\">
\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t<img src=\"https://cdn.userway.org/widgetapp/images/body_bl.svg\">
\t\t\t\t\t</a>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t<div class=\"row footer-bottom\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t{{ page.footer_bottom_first }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t{{ page.footer_bottom_second }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>", "themes/custom/junk_monkey/template/layout/page.html.twig", "C:\\xampp_neww\\htdocs\\NEXTGEEKS\\Junk_monkey\\themes\\custom\\junk_monkey\\template\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 11);
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
