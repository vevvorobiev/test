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

/* extension/module/ocn_category_wall_pro.twig */
class __TwigTemplate_3421940a096d22d9b6fc4bb2a88da1d18cf0f56a3a2d7495d14cebb43f7f7e28 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_apply"] ?? null);
        echo "\" class=\"btn btn-success\" name=\"apply\" value=\"1\"><i class=\"fa fa-save\"></i></button>
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 8
        echo ($context["url_cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["success"] ?? null)) {
            // line 19
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 23
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 24
            echo "    <div class=\"alert alert-danger alert-dismissible\">
      <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 25
            echo ($context["error_warning"] ?? null);
            echo " <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      ";
            // line 26
            if ((((((((($context["error_title"] ?? null) || ($context["error_name"] ?? null)) || ($context["error_width"] ?? null)) || ($context["error_height"] ?? null)) || ($context["error_length"] ?? null)) || ($context["error_limit"] ?? null)) || ($context["error_categories_selected_minimum"] ?? null)) || ($context["error_categories_custom_minimum"] ?? null))) {
                // line 27
                echo "        <ul>
          ";
                // line 28
                if (($context["error_title"] ?? null)) {
                    // line 29
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["error_title"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
                        // line 30
                        echo "              <li class=\"text-muted\">";
                        echo $context["title"];
                        echo "</li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "          ";
                }
                // line 33
                echo "          ";
                if (($context["error_name"] ?? null)) {
                    // line 34
                    echo "            <li class=\"text-muted\">";
                    echo ($context["error_name"] ?? null);
                    echo "</li>
          ";
                }
                // line 36
                echo "          ";
                if (($context["error_width"] ?? null)) {
                    // line 37
                    echo "            <li class=\"text-muted\">";
                    echo ($context["error_width"] ?? null);
                    echo "</li>
          ";
                }
                // line 39
                echo "          ";
                if (($context["error_height"] ?? null)) {
                    // line 40
                    echo "            <li class=\"text-muted\">";
                    echo ($context["error_height"] ?? null);
                    echo "</li>
          ";
                }
                // line 42
                echo "          ";
                if (($context["error_length"] ?? null)) {
                    // line 43
                    echo "            <li class=\"text-muted\">";
                    echo ($context["error_length"] ?? null);
                    echo "</li>
          ";
                }
                // line 45
                echo "          ";
                if (($context["error_limit"] ?? null)) {
                    // line 46
                    echo "            <li class=\"text-muted\">";
                    echo ($context["error_limit"] ?? null);
                    echo "</li>
          ";
                }
                // line 48
                echo "          ";
                if (($context["error_categories_selected_minimum"] ?? null)) {
                    // line 49
                    echo "            <li class=\"text-muted\">";
                    echo ($context["error_categories_selected_minimum"] ?? null);
                    echo "</li>
          ";
                }
                // line 51
                echo "          ";
                if (($context["error_categories_custom_minimum"] ?? null)) {
                    // line 52
                    echo "            <li class=\"text-muted\">";
                    echo ($context["error_categories_custom_minimum"] ?? null);
                    echo "</li>
          ";
                }
                // line 54
                echo "        </ul>
      ";
            }
            // line 56
            echo "    </div>
    ";
        }
        // line 58
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 60
        echo ($context["text_edit"] ?? null);
        echo " ";
        echo ($context["data_extension_name"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 63
        echo ($context["url_action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 65
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-category\" data-toggle=\"tab\">";
        // line 66
        echo ($context["tab_category"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-subcategory\" data-toggle=\"tab\">";
        // line 67
        echo ($context["tab_subcategory"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-info\" data-toggle=\"tab\">";
        // line 68
        echo ($context["tab_info"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane fade in active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 73
        echo ($context["entry_name"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"name\" value=\"";
        // line 75
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 76
        if (($context["error_name"] ?? null)) {
            // line 77
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                  ";
        }
        // line 79
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 82
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    <option value=\"1\" ";
        // line 85
        if ((($context["status"] ?? null) == 1)) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                    <option value=\"0\" ";
        // line 86
        if ((($context["status"] ?? null) == 0)) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-height-status\">";
        // line 91
        echo ($context["entry_height_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"module_ocn_category_wall_pro_height_status\" id=\"input-height-status\" class=\"form-control\">
                    <option value=\"1\" ";
        // line 94
        if ((($context["module_ocn_category_wall_pro_height_status"] ?? null) == 1)) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                    <option value=\"0\" ";
        // line 95
        if ((($context["module_ocn_category_wall_pro_height_status"] ?? null) == 0)) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                  </select>
                </div>
              </div>
              <hr>
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 102
            echo "                  <li ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 102)) {
                echo "class=\"active\"";
            }
            echo "><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 102);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 102);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 102);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 102);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 102);
            echo "</a></li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 107
            echo "                <div class=\"tab-pane ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 107)) {
                echo "active";
            }
            echo "\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 107);
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-title--";
            // line 109
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 109);
            echo "\">";
            echo ($context["entry_title"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_ocn_category_wall_pro_title[";
            // line 111
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 111);
            echo "][title]\" value=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["module_ocn_category_wall_pro_title"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 111)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["title"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" id=\"input-title--";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 111);
            echo "\" class=\"form-control\">
                      ";
            // line 112
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_title"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 112)] ?? null) : null)) {
                // line 113
                echo "                        <div class=\"text-danger\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_title"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 113)] ?? null) : null);
                echo "</div>
                      ";
            }
            // line 115
            echo "                    </div>
                  </div>
                </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "              </div>
            </div>
            <div class=\"tab-pane fade\" id=\"tab-category\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image-status\">";
        // line 123
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"module_ocn_category_wall_pro_image_status\" id=\"input-image-status\" class=\"form-control\">
                    <option value=\"1\" ";
        // line 126
        if ((($context["module_ocn_category_wall_pro_image_status"] ?? null) == 1)) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                    <option value=\"0\" ";
        // line 127
        if ((($context["module_ocn_category_wall_pro_image_status"] ?? null) == 0)) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                  </select>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-image-width\">";
        // line 132
        echo ($context["entry_image_width"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"module_ocn_category_wall_pro_image_width\" value=\"";
        // line 134
        echo ($context["module_ocn_category_wall_pro_image_width"] ?? null);
        echo "\" placeholder=\"220\" id=\"input-image-width\" class=\"form-control\">
                  ";
        // line 135
        if (($context["error_width"] ?? null)) {
            // line 136
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
                  ";
        }
        // line 138
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-image-height\">";
        // line 141
        echo ($context["entry_image_height"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"module_ocn_category_wall_pro_image_height\" value=\"";
        // line 143
        echo ($context["module_ocn_category_wall_pro_image_height"] ?? null);
        echo "\" placeholder=\"220\" id=\"input-image-height\" class=\"form-control\">
                  ";
        // line 144
        if (($context["error_height"] ?? null)) {
            // line 145
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
                  ";
        }
        // line 147
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-description-status\">";
        // line 150
        echo ($context["entry_description"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"module_ocn_category_wall_pro_description_status\" id=\"input-description-status\" class=\"form-control\">
                    <option value=\"1\" ";
        // line 153
        if ((($context["module_ocn_category_wall_pro_description_status"] ?? null) == 1)) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                    <option value=\"0\" ";
        // line 154
        if ((($context["module_ocn_category_wall_pro_description_status"] ?? null) == 0)) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                  </select>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-description-length\">";
        // line 159
        echo ($context["entry_description_length"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"module_ocn_category_wall_pro_description_length\" value=\"";
        // line 161
        echo ($context["module_ocn_category_wall_pro_description_length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["placeholder_limit_cancel"] ?? null);
        echo "\" id=\"input-description-length\" class=\"form-control\">
                  ";
        // line 162
        if (($context["error_length"] ?? null)) {
            // line 163
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_length"] ?? null);
            echo "</div>
                  ";
        }
        // line 165
        echo "                </div>
              </div>
              <div class=\"form-group\" id=\"form-group-categories-type\">
                <label class=\"col-sm-2 control-label\" for=\"input-categories-type\">";
        // line 168
        echo ($context["entry_category_type"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"module_ocn_category_wall_pro_categories_type\" class=\"form-control\" id=\"input-categories-type\">
                    <option value=\"all\" ";
        // line 171
        if ((($context["module_ocn_category_wall_pro_categories_type"] ?? null) == "all")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_category_type_all"] ?? null);
        echo "</option>
                    <option value=\"selected\" ";
        // line 172
        if ((($context["module_ocn_category_wall_pro_categories_type"] ?? null) == "selected")) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_category_type_selected"] ?? null);
        echo "</option>
                    <option value=\"custom\" ";
        // line 173
        if ((($context["module_ocn_category_wall_pro_categories_type"] ?? null) == "custom")) {
            echo "selected=\"custom\"";
        }
        echo ">";
        echo ($context["text_category_type_custom"] ?? null);
        echo "</option>
                  </select>
                  <i class=\"text-info\" data-type=\"all\">";
        // line 175
        echo ($context["help_categories_type_all"] ?? null);
        echo "</i>
                  <i class=\"text-info\" data-type=\"selected\">";
        // line 176
        echo ($context["help_categories_type_selected"] ?? null);
        echo "</i>
                  <i class=\"text-info\" data-type=\"custom\">";
        // line 177
        echo ($context["help_categories_type_custom"] ?? null);
        echo "</i>
                </div>
              </div>
              <div class=\"form-group\" id=\"form-group-categories-selected\">
                <label class=\"col-sm-2 control-label\">";
        // line 181
        echo ($context["entry_category_parent"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["parent_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 185
            echo "                      <div class=\"checkbox\">
                        <label>
                          <input type=\"checkbox\" name=\"module_ocn_category_wall_pro_categories_selected[]\" value=\"";
            // line 187
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 187);
            echo "\" ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 187), ($context["module_ocn_category_wall_pro_categories_selected"] ?? null))) {
                echo "checked=\"checked\"";
            }
            echo ">
                          ";
            // line 188
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 188);
            echo "
                        </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "                  </div>
                  <i class=\"text-info\" data-text=\"";
        // line 193
        echo ($context["help_categories_selected"] ?? null);
        echo "\" data-count=\"true\"></i>
                  ";
        // line 194
        if (($context["error_categories_selected_minimum"] ?? null)) {
            // line 195
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_categories_selected_minimum"] ?? null);
            echo "</div>
                  ";
        }
        // line 197
        echo "                </div>
              </div>
              <div class=\"form-group\"  id=\"form-group-categories-custom\">
                <label class=\"col-sm-2 control-label\" for=\"form-group-categories-input\"><span data-toggle=\"tooltip\" title=\"";
        // line 200
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category_custom"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" placeholder=\"";
        // line 202
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"form-group-categories-input\" class=\"form-control\"/>
                  <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 205
            echo "                      <div class=\"checkbox\">
                        <label id=\"product-category";
            // line 206
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 206);
            echo "\">
                          <i class=\"fa fa-minus-circle\"></i> ";
            // line 207
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 207);
            echo "
                          <input type=\"checkbox\" class=\"hidden\" name=\"module_ocn_category_wall_pro_categories_custom[]\" value=\"";
            // line 208
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 208);
            echo "\" checked=\"checked\">
                        </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                  </div>
                  <i class=\"text-info\" data-text=\"";
        // line 213
        echo ($context["help_categories_selected"] ?? null);
        echo "\" data-count=\"true\"></i>
                  ";
        // line 214
        if (($context["error_categories_custom_minimum"] ?? null)) {
            // line 215
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_categories_custom_minimum"] ?? null);
            echo "</div>
                  ";
        }
        // line 217
        echo "                </div>
              </div>
            </div>
            <div class=\"tab-pane fade\" id=\"tab-subcategory\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-subcategory-status\">";
        // line 222
        echo ($context["entry_subcategory"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"module_ocn_category_wall_pro_subcategory_status\" id=\"input-subcategory-status\" class=\"form-control\">
                    <option value=\"1\" ";
        // line 225
        if ((($context["module_ocn_category_wall_pro_subcategory_status"] ?? null) == 1)) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                    <option value=\"0\" ";
        // line 226
        if ((($context["module_ocn_category_wall_pro_subcategory_status"] ?? null) == 0)) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                  </select>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-subcategory-limit\">";
        // line 231
        echo ($context["entry_subcategory_limit"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"module_ocn_category_wall_pro_subcategory_limit\" value=\"";
        // line 233
        echo ($context["module_ocn_category_wall_pro_subcategory_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["placeholder_limit_cancel"] ?? null);
        echo "\" id=\"input-subcategory-limit\" class=\"form-control\">
                  ";
        // line 234
        if (($context["error_limit"] ?? null)) {
            // line 235
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_limit"] ?? null);
            echo "</div>
                  ";
        }
        // line 237
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-subcategory-collapse-status\">";
        // line 240
        echo ($context["entry_collapse"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"module_ocn_category_wall_pro_subcategory_collapse_status\" id=\"input-subcategory-collapse-status\" class=\"form-control\">
                    <option value=\"1\" ";
        // line 243
        if ((($context["module_ocn_category_wall_pro_subcategory_collapse_status"] ?? null) == 1)) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_enabled"] ?? null);
        echo "</option>
                    <option value=\"0\" ";
        // line 244
        if ((($context["module_ocn_category_wall_pro_subcategory_collapse_status"] ?? null) == 0)) {
            echo "selected=\"selected\"";
        }
        echo ">";
        echo ($context["text_disabled"] ?? null);
        echo "</option>
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane fade\" id=\"tab-info\">
              <div class=\"row\">
                <div class=\"col-sm-12 col-md-6\">
                  <table class=\"table table-striped table-hover\">
                    <tbody>
                    <tr>
                      <td>";
        // line 255
        echo ($context["text_extension_name"] ?? null);
        echo ":</td>
                      <td><a href=\"";
        // line 256
        echo ($context["data_support_extension"] ?? null);
        echo "\" target=\"_blank\">";
        echo ($context["data_extension_name"] ?? null);
        echo "</a></td>
                    </tr>
                    <tr>
                      <td>";
        // line 259
        echo ($context["text_author"] ?? null);
        echo ":</td>
                      <td><a href=\"";
        // line 260
        echo ($context["data_support_author"] ?? null);
        echo "\" target=\"_blank\">";
        echo ($context["data_author"] ?? null);
        echo "</a></td>
                    </tr>
                    <tr>
                      <td>";
        // line 263
        echo ($context["text_version_current"] ?? null);
        echo ":</td>
                      <td>v";
        // line 264
        echo ($context["data_current_version"] ?? null);
        echo "</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <div class=\"col-sm-12 col-md-6\">
                  <table class=\"table table-striped table-hover\">
                    <tbody>
                    <tr>
                      <td>";
        // line 273
        echo ($context["text_repository_name"] ?? null);
        echo ":</td>
                      <td><a href=\"";
        // line 274
        echo ($context["data_repository_extension"] ?? null);
        echo "\" target=\"_blank\">";
        echo ($context["data_repository"] ?? null);
        echo "</a></td>
                    </tr>
                    <tr>
                      <td>";
        // line 277
        echo ($context["text_repository_author"] ?? null);
        echo ":</td>
                      <td id=\"repository-author\"><a href=\"";
        // line 278
        echo ($context["data_repository_author"] ?? null);
        echo "\" target=\"_blank\">";
        echo ($context["data_author_repository"] ?? null);
        echo "</a></td>
                    </tr>
                    <tr>
                      <td>";
        // line 281
        echo ($context["text_version_actual"] ?? null);
        echo ":</td>
                      <td id=\"repository-version\" data-url=\"";
        // line 282
        echo ($context["url_extension_update"] ?? null);
        echo "\" data-version=\"";
        echo ($context["data_current_version"] ?? null);
        echo "\">
                        <button type=\"button\" class=\"btn btn-info btn-sm\" id=\"check-update\">
                          <i class=\"fa fa-refresh\" aria-hidden=\"true\"></i>
                          ";
        // line 285
        echo ($context["button_check_new"] ?? null);
        echo "
                        </button>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class=\"panel-footer\">";
        // line 297
        echo ($context["data_extension_name"] ?? null);
        echo " v";
        echo ($context["data_current_version"] ?? null);
        echo "</div>
    </div>
  </div>
</div>
<script>
\$(window).on('load', function () {
  checkType()
  countCategories()

  \$('#check-update').on('click',checkUpdates);
  \$('#input-categories-type').on('change', checkType);
  \$('#form-group-categories-selected input').on('change', countCategories);
  \$('#form-group-categories-custom input').on('change', countCategories);

  function checkType() {
    \$('#form-group-categories-selected').removeClass('required');
    \$('#form-group-categories-custom').removeClass('required');

    if (\$('#input-categories-type').val() == 'all') {
      \$('#form-group-categories-type i.text-info[data-type=\"all\"]').removeClass('hidden');
    } else {
      \$('#form-group-categories-type i.text-info[data-type=\"all\"]').addClass('hidden');
    }

    if (\$('#input-categories-type').val() == 'selected') {
      \$('#form-group-categories-selected').addClass('required');
      \$('#form-group-categories-type i.text-info[data-type=\"selected\"]').removeClass('hidden');
    } else {
      \$('#form-group-categories-type i.text-info[data-type=\"selected\"]').addClass('hidden');
    }

    if (\$('#input-categories-type').val() == 'custom') {
      \$('#form-group-categories-custom').addClass('required');
      \$('#form-group-categories-type i.text-info[data-type=\"custom\"]').removeClass('hidden');
    } else {
      \$('#form-group-categories-type i.text-info[data-type=\"custom\"]').addClass('hidden');
    }

    countCategories();
  }

  function countCategories() {
    let counterSelected = \$('#form-group-categories-selected input:checked').length;
    let counterCustom = \$('#form-group-categories-custom input:checked').length;
    let textSelected = \$('#form-group-categories-selected i.text-info').attr('data-text') + counterSelected;
    let textCustom = \$('#form-group-categories-custom i.text-info').attr('data-text') + counterCustom;
    \$('#form-group-categories-selected i[data-count=true]').text(textSelected);
    \$('#form-group-categories-custom i[data-count=true]').text(textCustom);

    if (counterSelected < 1 && \$('#input-categories-type').val() == 'selected') {
      \$('#form-group-categories-selected i[data-count=true]').addClass('text-danger');
    } else {
      \$('#form-group-categories-selected i[data-count=true]').removeClass('text-danger');
      \$('#form-group-categories-selected div.text-danger').remove();
      \$('#form-group-categories-selected').removeClass('has-error');
    }
    if (counterCustom < 1 && \$('#input-categories-type').val() == 'custom') {
      \$('#form-group-categories-custom i[data-count=true]').addClass('text-danger');
    } else {
      \$('#form-group-categories-custom i[data-count=true]').removeClass('text-danger');
      \$('#form-group-categories-custom div.text-danger').remove();
      \$('#form-group-categories-custom').removeClass('has-error');
    }
  }

  // Category
  \$('input#form-group-categories-input').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 366
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['name'],
              value: item['category_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('#form-group-categories-custom-input').val('');
      \$('#product-category' + item['value']).parent().remove();
      \$('#product-category').append('<div class=\"checkbox\"><label id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"checkbox\" name=\"module_ocn_category_wall_pro_categories_custom[]\" value=\"' + item['value'] + '\" class=\"hidden\" checked=\"checked\"></label></div>');
      countCategories();
    }
  });

  \$('#product-category').delegate('.fa-minus-circle', 'click', function() {
    \$(this).parent().parent().remove();
    countCategories();
  });

  function checkUpdates() {
    let buttonCheckUpdate = \$('#check-update');
    let url = \$('#repository-version').attr('data-url');
    let current = \$('#repository-version').attr('data-version');

    buttonCheckUpdate.prop('disabled', true);
    buttonCheckUpdate.find('i.fa').removeClass('fa-refresh').addClass('fa-spinner fa-pulse');

    \$.ajax({
      type: 'get',
      url: url,
      dataType: 'json',
      success: function(response) {
        let author = '<a href=\"' + response.author.html_url + '\" target=\"_blank\">' + response.author.login + '</a>';
        let version = '<a href=\"' + response.html_url + '\" target=\"_blank\">' + response.name + '</a>';
        \$('#repository-author').html(author);
        \$('#repository-version').html(version);
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      },
      complete: function() {
        buttonCheckUpdate.prop('disabled', false);
        buttonCheckUpdate.find('i.fa').removeClass('fa-spinner fa-pulse').addClass('fa-refresh');
      }
    });
  }
});
</script>
";
        // line 420
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/ocn_category_wall_pro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1021 => 420,  964 => 366,  890 => 297,  875 => 285,  867 => 282,  863 => 281,  855 => 278,  851 => 277,  843 => 274,  839 => 273,  827 => 264,  823 => 263,  815 => 260,  811 => 259,  803 => 256,  799 => 255,  781 => 244,  773 => 243,  767 => 240,  762 => 237,  756 => 235,  754 => 234,  748 => 233,  743 => 231,  731 => 226,  723 => 225,  717 => 222,  710 => 217,  704 => 215,  702 => 214,  698 => 213,  695 => 212,  685 => 208,  681 => 207,  677 => 206,  674 => 205,  670 => 204,  665 => 202,  658 => 200,  653 => 197,  647 => 195,  645 => 194,  641 => 193,  638 => 192,  628 => 188,  620 => 187,  616 => 185,  612 => 184,  606 => 181,  599 => 177,  595 => 176,  591 => 175,  582 => 173,  574 => 172,  566 => 171,  560 => 168,  555 => 165,  549 => 163,  547 => 162,  541 => 161,  536 => 159,  524 => 154,  516 => 153,  510 => 150,  505 => 147,  499 => 145,  497 => 144,  493 => 143,  488 => 141,  483 => 138,  477 => 136,  475 => 135,  471 => 134,  466 => 132,  454 => 127,  446 => 126,  440 => 123,  434 => 119,  417 => 115,  411 => 113,  409 => 112,  399 => 111,  392 => 109,  382 => 107,  365 => 106,  361 => 104,  332 => 102,  315 => 101,  302 => 95,  294 => 94,  288 => 91,  276 => 86,  268 => 85,  262 => 82,  257 => 79,  251 => 77,  249 => 76,  243 => 75,  238 => 73,  230 => 68,  226 => 67,  222 => 66,  218 => 65,  213 => 63,  205 => 60,  201 => 58,  197 => 56,  193 => 54,  187 => 52,  184 => 51,  178 => 49,  175 => 48,  169 => 46,  166 => 45,  160 => 43,  157 => 42,  151 => 40,  148 => 39,  142 => 37,  139 => 36,  133 => 34,  130 => 33,  127 => 32,  118 => 30,  113 => 29,  111 => 28,  108 => 27,  106 => 26,  102 => 25,  99 => 24,  96 => 23,  88 => 19,  86 => 18,  80 => 14,  69 => 12,  65 => 11,  60 => 9,  54 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/ocn_category_wall_pro.twig", "");
    }
}
