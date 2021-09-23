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

/* default/template/common/header.twig */
class __TwigTemplate_073bd731ab86e595a764323861b1e26edba2f18e54bda20b97053b49d2a222c9 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
<!-- Styles -->
\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/owl-carousel/owl.carousel.min.css\">
\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/slick-slider/slick.css\">
\t<link rel=\"stylesheet\" href=\"catalog/view/javascript/magnific-popup/magnific-popup.css\">
\t<link rel=\"stylesheet\" href=\"catalog/view/theme/default/stylesheet/style.css\">
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 32
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 32);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 32);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 32);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 35
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 39
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 39);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 39);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 42
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "</head>
<body>
<header class='header'>
<!-- header-top -->
\t\t<div class=\"header-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t<div class=\"header-logo\">
            ";
        // line 53
        if (($context["logo"] ?? null)) {
            // line 54
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo ($context["home"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"header-logo-link\">
\t\t\t\t\t\t\t\t<picture>
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 56
            echo ($context["logo"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"header-logo-image\">
\t\t\t\t\t\t\t\t</picture>
\t\t\t\t\t\t\t</a>";
        } else {
            // line 59
            echo "              <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
              ";
        }
        // line 61
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t";
        // line 64
        echo ($context["search"] ?? null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<div class=\"header-phone-wrap\">
\t\t\t\t\t\t\t<div class=\"header-phone\">
\t\t\t\t\t\t\t\t<a href=\"tel:+";
        // line 69
        echo ($context["active_phone"] ?? null);
        echo "\" class=\"phone-link\">";
        echo ($context["telephone"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t<span class=\"icon icon-phone\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"phone-time\">";
        // line 72
        echo ($context["open"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"#callback\" class=\"bttn bttn-cta bttn-cta__header popup-bttn\">
\t\t\t\t\t\t\t\t<span class=\"icon icon-phone\"></span>
\t\t\t\t\t\t\t\t<span>";
        // line 76
        echo ($context["text_callback"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
  ";
        // line 84
        echo "  <!-- header-bottom -->
\t\t<div class=\"header-bottom\">
\t\t\t<div class=\"container\">
\t\t\t\t<!-- header-menu -->
\t\t\t\t";
        // line 88
        echo ($context["menu"] ?? null);
        echo "
\t\t\t\t<!-- header-shop-user -->
\t\t\t\t<div class=\"shopping-wrap\">
\t\t\t\t\t<ul class=\"shopping-list\">
\t\t\t\t\t\t<li class=\"shopping-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"shopping-link\">
\t\t\t\t\t\t\t\t<span class=\"icon icon-favorite\"></span>
\t\t\t\t\t\t\t\t<span class=\"shopping-counter is-added\">19</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"shopping-item\">
\t\t\t\t\t\t\t";
        // line 99
        echo ($context["cart"] ?? null);
        echo "
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
</header>

";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 99,  243 => 88,  237 => 84,  227 => 76,  220 => 72,  212 => 69,  204 => 64,  199 => 61,  191 => 59,  183 => 56,  175 => 54,  173 => 53,  162 => 44,  154 => 42,  150 => 41,  139 => 39,  135 => 38,  132 => 37,  123 => 35,  119 => 34,  106 => 32,  102 => 31,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
