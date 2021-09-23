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

/* default/template/extension/module/filter.twig */
class __TwigTemplate_1bb0805a40a597f4250f6db092c340ddca72002cbc24d457912b42652b77c626 extends \Twig\Template
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
        echo "
    <aside class=\"filter-wrap\">
        <div id=\"main-filter\" class=\"filter\">
            <!-- add here checked labels -->

            <!-- end checked labels -->
            <div class=\"filter-list\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 9
            echo "                <!-- filter item -->
                <div class=\"filter-item\">
                    <div class=\"filter-item-head\">
                        <p class=\"filter-item-title\">";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 12);
            echo "</p>
                    </div>
                    <!-- type furniture -->
                    <div class=\"filter-item-content\">
                        <ul class=\"check-box\">
                            <ul class=\"check-box\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 19
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"filter[]\" id=\"filter";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 20);
                echo "\" class=\"input_checkbox\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 20);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 20), ($context["filter_active"] ?? null))) {
                    echo "checked";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"filter";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 21);
                echo "\" class=\"input_label-checkbox\">";
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 21);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
                        </ul>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </div>
        </div>
        <div class=\"panel-footer text-right\">
    <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\">";
        // line 32
        echo ($context["button_filter"] ?? null);
        echo "</button>
  </div>
        <button class=\"bttn_small bttn_filter\">
            <span>Показати фільтр</span>
            <span class=\"hidden\">Сховати фільтр</span>
        </button>
    </aside>
    <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tfilter = [];

\t\$('input[name^=\\'filter\\']:checked').each(function(element) {
\t\tfilter.push(this.value);
\t});

\tlocation = '";
        // line 47
        echo ($context["action"] ?? null);
        echo "&filter=' + filter.join(',');
});
//--></script> 
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 47,  107 => 32,  102 => 29,  92 => 24,  81 => 21,  71 => 20,  68 => 19,  64 => 18,  55 => 12,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/filter.twig", "");
    }
}
