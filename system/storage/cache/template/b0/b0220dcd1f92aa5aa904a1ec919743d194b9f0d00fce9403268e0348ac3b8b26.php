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

/* default/template/product/category.twig */
class __TwigTemplate_73aff9d18299218fda0c386f844474707393648aec2fe368a2326e863a5673ab extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div class=\"wrapper\">
\t\t<div class=\"page-content\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t<!-- filter -->
\t\t\t\t\t<div class=\"col-md-3 col-sm-4\">
\t\t\t\t\t\t";
        // line 8
        echo ($context["filter"] ?? null);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- content -->
\t\t\t\t\t<div class=\"col-md-9 col-sm-8\">
\t\t\t\t\t\t<main class=\"content\">
\t\t\t\t\t\t\t<!-- title -->
\t\t\t\t\t\t\t<div class=\"title-wrap\">
\t\t\t\t\t\t\t\t<h1 class=\"title title_main\">Дивани</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- product-list -->
\t\t\t\t\t\t\t<div class=\"product-sort-wrap\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"breadcrumbs-list\">
                      ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 25
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"breadcrumbs-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 26);
            echo "\" class=\"breadcrumbs-item-link\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 26);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-keyboard_arrow_right\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"select-wrap\">
\t\t\t\t\t\t\t\t\t\t\t<select id=\"input-sort\" name=\"order\" class=\"input input_select\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 37
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 37) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                // line 38
                echo "              
              
              
              <option value=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 41);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 41);
                echo "</option>
              
              
              
              ";
            } else {
                // line 46
                echo "              
              
              
              <option value=\"";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 49);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 49);
                echo "</option>
              
              
              
              ";
            }
            // line 54
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product-list-wrap\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<!-- product item -->
                  ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 64
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-layout col-lg-4 col-md-6 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<figure class=\"product-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 67);
            echo "\" class=\"product-image-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 68);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 68);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<figcaption class=\"product-text-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"product-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 74
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 74);
            echo "\" class=\"product-title-link\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 74);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"product-category\">";
            // line 76
            echo twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 76);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
                        ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 78)) {
                // line 79
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-price\">
                          ";
                // line 80
                if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-price-sale\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-sale_old\">";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 82);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-sale_date\">";
                    // line 83
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "date_end", [], "any", false, false, false, 83);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"product-price-active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 86
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 86);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
                          ";
                } else {
                    // line 89
                    echo "                          <p class=\"purchase-price-active\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 90
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 90);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
                      ";
                }
                // line 93
                echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
                        ";
            }
            // line 95
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-buy\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"bttn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-add_shopping_cart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>Придбати</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"product-add-fav\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-favorite_border is-active\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</figcaption>
\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t</div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t\t\t\t\t\t\t</div>
  </div> 
     </div> 
        </div>
          </div>           
";
        // line 113
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 113,  239 => 108,  221 => 95,  217 => 93,  211 => 90,  208 => 89,  202 => 86,  196 => 83,  192 => 82,  189 => 81,  187 => 80,  184 => 79,  182 => 78,  177 => 76,  170 => 74,  159 => 68,  155 => 67,  150 => 64,  146 => 63,  136 => 55,  130 => 54,  120 => 49,  115 => 46,  105 => 41,  100 => 38,  97 => 37,  93 => 36,  85 => 30,  73 => 26,  70 => 25,  66 => 24,  47 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
