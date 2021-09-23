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

/* default/template/common/search.twig */
class __TwigTemplate_7a01c9533e04667b3e7ec2fa0598c284d1f28e48aa0ada7f869e27c47fdadee1 extends \Twig\Template
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
        echo "<div class=\"header-search\">
\t\t\t\t\t\t\t<div class=\"search-form\" id=\"search\">
\t\t\t\t\t\t\t\t<input  type=\"text\" name=\"search\" class=\"input search-form__input\" placeholder=\"";
        // line 3
        echo ($context["text_search"] ?? null);
        echo "\" value=\"";
        echo ($context["search"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"search-form__submit\">
\t\t\t\t\t\t\t\t\t<span class=\"icon icon-search\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "default/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/search.twig", "");
    }
}
