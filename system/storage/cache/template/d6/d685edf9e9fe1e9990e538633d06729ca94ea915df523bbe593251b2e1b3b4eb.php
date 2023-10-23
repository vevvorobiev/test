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

/* default/template/extension/module/category_wall.twig */
class __TwigTemplate_0bfbaa01e77d0422f2eb16d4504640c16cb2b220472256e414289b1eef530a8f extends \Twig\Template
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
        echo "<div id=\"category-wall\" data-show=\"";
        echo ($context["text_show"] ?? null);
        echo "\" data-hide=\"";
        echo ($context["text_hide"] ?? null);
        echo "\" data-height=\"";
        echo ($context["height_status"] ?? null);
        echo "\">
  <h3>";
        // line 2
        echo ($context["title"] ?? null);
        echo "</h3>
  <div class=\"row\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 5
            echo "      <div class=\"product-layout col-xs-12 col-sm-6 col-md-3 col-lg-3\">
        <div class=\"panel panel-primary category-wall-panel\">
          <div class=\"panel-heading category-wall-panel-heading\">
            <h4 class=\"panel-title category-wall-panel-title text-center\">
              <a href=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 9);
            echo "\" class=\"category-wall-panel-title-link\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 9);
            echo "</a>
            </h4>
          </div>
          <div class=\"panel-body category-wall-panel-body text-center\">
            ";
            // line 13
            if (($context["image_status"] ?? null)) {
                // line 14
                echo "            <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 14);
                echo "\" class=\"thumbnail category-wall-panel-body-link\">
              <img src=\"";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 15);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15);
                echo "\" class=\"category-wall-panel-body-image\">
            </a>
            ";
            }
            // line 18
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 18)) {
                // line 19
                echo "              <p class=\"category-wall-panel-body-description\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 19);
                echo "</p>
            ";
            }
            // line 21
            echo "          </div>
          ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 22)) {
                // line 23
                echo "            <div class=\"panel-footer category-wall-panel-footer\">
              ";
                // line 24
                if (($context["subcategory_collapse_status"] ?? null)) {
                    // line 25
                    echo "                <a class=\"btn btn-primary btn-block collapsed\" role=\"button\" data-toggle=\"collapse\" href=\"#collapseSubCategory";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 25);
                    echo "\" aria-expanded=\"false\" aria-controls=\"collapseSubCategory";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 25);
                    echo "\">
                  ";
                    // line 26
                    echo ($context["button_show_hide"] ?? null);
                    echo "
                </a>
                <div class=\"collapse\" id=\"collapseSubCategory";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 28);
                    echo "\">
              ";
                }
                // line 30
                echo "              <div class=\"list-group category-wall-list-group\">
                ";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 31));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 32
                    echo "                  <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 32);
                    echo "\" class=\"list-group-item category-wall-list-group-item\">";
                    echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 32);
                    echo "</a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "              </div>
              ";
                // line 35
                if (($context["subcategory_collapse_status"] ?? null)) {
                    // line 36
                    echo "                </div>
              ";
                }
                // line 38
                echo "            </div>
          ";
            }
            // line 40
            echo "        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "  </div>
</div>
<script>
\$(document).ready(function() {
  let categoryWall = \$('#category-wall');
  const textShow = categoryWall.attr('data-show');
  const textHide = categoryWall.attr('data-hide');

  categoryWall.on('click', 'a.btn.btn-primary.btn-block', function() {
    if (\$(this).hasClass(\"collapsed\")) {
      \$(this).text(textHide);
    } else {
      \$(this).text(textShow);
    }
  });

  if (Number(categoryWall.attr('data-height')) === 1) {
    setEqualHeight(categoryWall.find(\".product-layout\"));
    setEqualHeight(categoryWall.find(\".panel\"));
    setEqualHeight(categoryWall.find(\".panel-heading\"));
    setEqualHeight(categoryWall.find(\".panel-body\"));
    setEqualHeight(categoryWall.find(\".panel-footer\"));
  }

  function setEqualHeight(columns) {
    let block = 0;
    columns.each(function() {
      height = \$(this).outerHeight();
      if(height > block) {
        block = height;
      }
    });
    columns.css(\"min-height\", block);
  }
});
</script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/category_wall.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 43,  152 => 40,  148 => 38,  144 => 36,  142 => 35,  139 => 34,  128 => 32,  124 => 31,  121 => 30,  116 => 28,  111 => 26,  104 => 25,  102 => 24,  99 => 23,  97 => 22,  94 => 21,  88 => 19,  85 => 18,  77 => 15,  72 => 14,  70 => 13,  61 => 9,  55 => 5,  51 => 4,  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/category_wall.twig", "");
    }
}
