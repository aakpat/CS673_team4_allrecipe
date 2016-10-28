<?php

/* forms/fields/gantry/widget.html.twig */
class __TwigTemplate_a83576552ee746307b2db156740d3aa56409d04d2616b2f5e4253245943d7ced extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((isset($context["default"]) ? $context["default"] : null)) ? ("partials/field.html.twig") : ((("forms/" . ((array_key_exists("layout", $context)) ? (_twig_default_filter((isset($context["layout"]) ? $context["layout"] : null), "field")) : ("field"))) . ".html.twig"))), "forms/fields/gantry/widget.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"settings-block\"><div class=\"input-group\">
                ";
        // line 5
        $context["label"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "picker_label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "picker_label", array()), $this->env->getExtension('GantryTwig')->transFilter("Pick a Widget"))) : ($this->env->getExtension('GantryTwig')->transFilter("Pick a Widget")));
        // line 6
        echo "                ";
        $context["alt_label"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "picker_label_alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "picker_label_alt", array()), $this->env->getExtension('GantryTwig')->transFilter("Edit Widget"))) : ($this->env->getExtension('GantryTwig')->transFilter("Edit Widget")));
        // line 7
        echo "                ";
        $context["value_array"] = ((((isset($context["value"]) ? $context["value"] : null) && twig_test_iterable((isset($context["value"]) ? $context["value"] : null)))) ? ((isset($context["value"]) ? $context["value"] : null)) : ($this->env->getExtension('GantryTwig')->jsonDecodeFilter((isset($context["value"]) ? $context["value"] : null))));
        // line 8
        echo "                ";
        $context["value_json"] = ((((isset($context["value"]) ? $context["value"] : null) && twig_test_iterable((isset($context["value"]) ? $context["value"] : null)))) ? (twig_jsonencode_filter((isset($context["value"]) ? $context["value"] : null))) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 9
        echo "                <span class=\"g-instancepicker-title\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["value_array"]) ? $context["value_array"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["value_array"]) ? $context["value_array"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "</span><button class=\"button\" data-g-instancepicker=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("type" => "widget", "field" => $this->env->getExtension('GantryTwig')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))))), "html_attr");
        echo "\" data-g-instancepicker-text=\"";
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
        echo "\" data-g-instancepicker-alttext=\"";
        echo twig_escape_filter($this->env, (isset($context["alt_label"]) ? $context["alt_label"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (((isset($context["value"]) ? $context["value"] : null)) ? ((isset($context["alt_label"]) ? $context["alt_label"] : null)) : ((isset($context["label"]) ? $context["label"] : null))), "html", null, true);
        echo "</button>
                <input
                        type=\"hidden\"
                        name=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
        echo "\"
                        ";
        // line 14
        echo "                        value=\"";
        echo twig_escape_filter($this->env, (isset($context["value_json"]) ? $context["value_json"] : null), "html_attr");
        echo "\"
                        ";
        // line 16
        echo "                        ";
        $this->displayBlock("global_attributes", $context, $blocks);
        echo "
                        ";
        // line 18
        echo "                        ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "disabled=\"disabled\"";
        }
        // line 19
        echo "                        ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 20
        echo "                        />

                <span class=\"g-reset-field\" data-g-reset-field=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
        echo "\"><i class=\"fa  fa-fw fa-times-circle\"></i></span>
            </div></div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/gantry/widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  83 => 20,  78 => 19,  73 => 18,  68 => 16,  63 => 14,  59 => 12,  44 => 9,  41 => 8,  38 => 7,  35 => 6,  33 => 5,  30 => 4,  27 => 3,  18 => 1,);
    }
}
/* {% extends default ? "partials/field.html.twig" : 'forms/' ~ layout|default('field') ~ '.html.twig' %}*/
/* */
/* {% block input %}*/
/*     <div class="settings-block"><div class="input-group">*/
/*                 {% set label = field.picker_label|default('Pick a Widget'|trans) %}*/
/*                 {% set alt_label = field.picker_label_alt|default('Edit Widget'|trans) %}*/
/*                 {% set value_array = value and value is iterable ? value : value|json_decode %}*/
/*                 {% set value_json = value and value is iterable ? value|json_encode : value %}*/
/*                 <span class="g-instancepicker-title">{{ value_array.title|default('') }}</span><button class="button" data-g-instancepicker="{{ { type: 'widget', field: (scope ~ name)|fieldName }|json_encode|e('html_attr') }}" data-g-instancepicker-text="{{ label }}" data-g-instancepicker-alttext="{{ alt_label }}">{{ value ? alt_label : label }}</button>*/
/*                 <input*/
/*                         type="hidden"*/
/*                         name="{{ (scope ~ name)|fieldName }}"*/
/*                         {# value="{{ value ? value|json_encode(constant('JSON_UNESCAPED_UNICODE')) }}" #}*/
/*                         value="{{ value_json|e('html_attr') }}"*/
/*                         {# global attribute structures #}*/
/*                         {{ block('global_attributes') }}*/
/*                         {# non-gloval attribute structures #}*/
/*                         {% if field.disabled in ['on', 'true', 1] %}disabled="disabled"{% endif %}*/
/*                         {% if field.required in ['on', 'true', 1] %}required="required"{% endif %}*/
/*                         />*/
/* */
/*                 <span class="g-reset-field" data-g-reset-field="{{ (scope ~ name)|fieldName }}"><i class="fa  fa-fw fa-times-circle"></i></span>*/
/*             </div></div>*/
/* {% endblock %}*/
/* */
