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

/* themes/custom/junk_monkey/template/menu/menu--main.html.twig */
class __TwigTemplate_6292b88281b75c1c09732f645f289303b73530abdd8352d355f889b8df8c6af8 extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "
";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0, ((($context["classes"] ?? null)) ? (($context["classes"] ?? null)) : ([0 => "menu", 1 => ("menu--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 66, $this->source))), 2 => "nav"])), ((($context["dropdown_classes"] ?? null)) ? (($context["dropdown_classes"] ?? null)) : ([0 => "dropdown-menu"]))], 66, $context, $this->getSourceContext()));
        echo "
";
    }

    // line 22
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__classes__ = null, $__dropdown_classes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "classes" => $__classes__,
            "dropdown_classes" => $__dropdown_classes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 23
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 24
                echo "    <ul class=\"navbar-nav header-bottom-links\">
    ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 26
                    echo "      ";
                    // line 27
                    $context["item_classes"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 27), "getOption", [0 => "container_attributes"], "method", false, false, true, 27), "class", [], "any", false, false, true, 27), 27, $this->source), " ");
                    // line 29
                    echo "      ";
                    // line 30
                    $context["item_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,                     // line 31
$context["item"], "is_expanded", [], "any", false, false, true, 31) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 31))) ? ("expanded dropdown") : ("")), 1 => ((twig_get_attribute($this->env, $this->source,                     // line 32
$context["item"], "in_active_trail", [], "any", false, false, true, 32)) ? ("active active-trail") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 33
$context["loop"], "first", [], "any", false, false, true, 33)) ? ("first") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 34
$context["loop"], "last", [], "any", false, false, true, 34)) ? ("last") : (""))];
                    // line 37
                    echo "      <li class=\"nav-item active\">
        ";
                    // line 38
                    $context["link_title"] = twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 38);
                    // line 39
                    echo "        ";
                    $context["link_attributes"] = twig_get_attribute($this->env, $this->source, $context["item"], "link_attributes", [], "any", false, false, true, 39);
                    // line 40
                    echo "        ";
                    if ((((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 40)) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 40))) {
                        // line 41
                        echo "          ";
                        ob_start();
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null), 41, $this->source), "html", null, true);
                        echo " <span class=\"caret\"></span>";
                        $context["link_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 42
                        echo "          ";
                        $context["link_attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", [0 => "dropdown-toggle"], "method", false, false, true, 42), "setAttribute", [0 => "data-toggle", 1 => "dropdown"], "method", false, false, true, 42);
                        // line 43
                        echo "        ";
                    }
                    // line 44
                    echo "        ";
                    // line 45
                    echo "        ";
                    // line 46
                    $context["link_class"] = [0 => ((twig_get_attribute($this->env, $this->source,                     // line 47
$context["item"], "in_active_trail", [], "any", false, false, true, 47)) ? ("active-trail") : ("")), 1 => "nav-link"];
                    // line 51
                    echo "        ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null), 51, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 51), 51, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["link_attributes"] ?? null), "addClass", [0 => ($context["link_class"] ?? null)], "method", false, false, true, 51), 51, $this->source)), "html", null, true);
                    echo "
        ";
                    // line 52
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 52)) {
                        // line 53
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["_self"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 53), twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 53), (($context["menu_level"] ?? null) + 1), ($context["classes"] ?? null), ($context["dropdown_classes"] ?? null)], 53, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 55
                    echo "      </li>
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/junk_monkey/template/menu/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 57,  144 => 55,  138 => 53,  136 => 52,  131 => 51,  129 => 47,  128 => 46,  126 => 45,  124 => 44,  121 => 43,  118 => 42,  112 => 41,  109 => 40,  106 => 39,  104 => 38,  101 => 37,  99 => 34,  98 => 33,  97 => 32,  96 => 31,  95 => 30,  93 => 29,  91 => 27,  89 => 26,  72 => 25,  69 => 24,  66 => 23,  49 => 22,  43 => 66,  40 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a menu.
 *
 * Available variables:
 * - classes: A list of classes to apply to the top level <ul> element.
 * - dropdown_classes: A list of classes to apply to the dropdown <ul> element.
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *
 * @ingroup templates
 *
 * Define a custom macro that will render all menu trees.
 */
#}
{% macro menu_links(items, attributes, menu_level, classes, dropdown_classes) %}
  {% if items %}
    <ul class=\"navbar-nav header-bottom-links\">
    {% for item in items %}
      {%
        set item_classes = item.url.getOption('container_attributes').class | split(\" \")
      %}
      {%
        set item_classes = [
          item.is_expanded and item.below ? 'expanded dropdown',
          item.in_active_trail ? 'active active-trail',
          loop.first ? 'first',
          loop.last ? 'last',
        ]
      %}
      <li class=\"nav-item active\">
        {% set link_title = item.title %}
        {% set link_attributes = item.link_attributes %}
        {% if menu_level == 0 and item.is_expanded and item.below %}
          {% set link_title %}{{ link_title }} <span class=\"caret\"></span>{% endset %}
          {% set link_attributes = link_attributes.addClass('dropdown-toggle').setAttribute('data-toggle', 'dropdown') %}
        {% endif %}
        {# Must use link() here so it triggers hook_link_alter(). #}
        {%
          set link_class = [
            item.in_active_trail ? 'active-trail',
            'nav-link',
          ]
        %}
        {{ link(link_title, item.url, link_attributes.addClass(link_class)) }}
        {% if item.below %}
          {{ _self.menu_links(item.below, attributes.removeClass(classes), menu_level + 1, classes, dropdown_classes) }}
        {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}

{#
  Invoke the custom macro defined above. If classes were provided, use them.
  This allows the template to be extended without having to also duplicate the
  code above. @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ _self.menu_links(items, attributes, 0, classes ?: ['menu', 'menu--' ~ menu_name|clean_class, 'nav'], dropdown_classes ?: ['dropdown-menu']) }}
", "themes/custom/junk_monkey/template/menu/menu--main.html.twig", "C:\\xampp_neww\\htdocs\\NEXTGEEKS\\Junk_monkey\\themes\\custom\\junk_monkey\\template\\menu\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("macro" => 22, "if" => 23, "for" => 25, "set" => 27);
        static $filters = array("clean_class" => 66, "split" => 27, "escape" => 41);
        static $functions = array("link" => 51);

        try {
            $this->sandbox->checkSecurity(
                ['macro', 'if', 'for', 'set', 'import'],
                ['clean_class', 'split', 'escape'],
                ['link']
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
