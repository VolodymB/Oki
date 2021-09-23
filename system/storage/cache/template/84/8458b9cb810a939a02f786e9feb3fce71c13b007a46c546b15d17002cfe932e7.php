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

/* default/template/common/menu.twig */
class __TwigTemplate_c216e282852037e090f735a0f1a12ddd574070458d28a89773b6ad8e09ac03cc extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- header-menu -->
\t\t\t\t<nav class=\"menu-nav\">
\t\t\t\t\t<ul class=\"menu-nav-list\">
\t\t\t\t\t\t<li class=\"menu-nav-item is-active\">
\t\t\t\t\t\t\t<a href=\"";
        // line 5
        echo ($context["about"] ?? null);
        echo "\" class=\"menu-nav-link\">";
        echo ($context["text_about"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"menu-nav-item\">
\t\t\t\t\t\t\t<a href=\"";
        // line 8
        echo ($context["manufacturer"] ?? null);
        echo "\" class=\"menu-nav-link\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
            ";
        // line 10
        if (($context["categories"] ?? null)) {
            // line 11
            echo "\t\t\t\t\t\t<li class=\"menu-nav-item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 12
            echo ($context["catalog"] ?? null);
            echo "\" class=\"menu-nav-link\">";
            echo ($context["text_catalog"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t<ul class=\"menu-nav-list_sub\">
              ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 15
                echo "\t\t\t\t\t\t\t\t<li class=\"menu-nav-item_sub\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 16);
                echo "\" class=\"menu-nav-link_sub\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 16);
                echo "</a>
\t\t\t\t\t\t\t\t</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t\t\t\t\t\t\t<li class=\"menu-nav-item_sub menu-nav-item_sub--sales\">
\t\t\t\t\t\t\t<a href=\"";
            // line 20
            echo ($context["special"] ?? null);
            echo "\" class=\"menu-nav-link_sub\">";
            echo ($context["text_special"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
            ";
        }
        // line 25
        echo "\t\t\t\t\t\t<li class=\"menu-nav-item\">
\t\t\t\t\t\t\t<a href=\"";
        // line 26
        echo ($context["affiliate"] ?? null);
        echo "\" class=\"menu-nav-link\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"menu-nav-item\">
\t\t\t\t\t\t\t<a href=\"";
        // line 29
        echo ($context["delivery"] ?? null);
        echo "\" class=\"menu-nav-link\">";
        echo ($context["text_delivery"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"menu-nav-item\">
\t\t\t\t\t\t\t<a href=\"";
        // line 32
        echo ($context["contact"] ?? null);
        echo "\" class=\"menu-nav-link\">";
        echo ($context["text_contact"] ?? null);
        echo "</a>
\t\t\t\t\t\t</li>
            
\t\t\t\t\t</ul>
\t\t\t\t</nav>
        ";
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 32,  112 => 29,  104 => 26,  101 => 25,  91 => 20,  88 => 19,  77 => 16,  74 => 15,  70 => 14,  63 => 12,  60 => 11,  58 => 10,  51 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/menu.twig", "");
    }
}
