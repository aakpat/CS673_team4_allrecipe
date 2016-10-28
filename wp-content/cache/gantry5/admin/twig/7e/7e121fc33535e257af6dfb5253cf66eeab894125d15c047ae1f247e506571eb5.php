<?php

/* forms/input.html.twig */
class __TwigTemplate_871e1c0336956ffd354faf7b4a5accad1513320aa09bf7eb1951c9af508ef57a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
            'field' => array($this, 'block_field'),
            'contents' => array($this, 'block_contents'),
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'global_attributes' => array($this, 'block_global_attributes'),
            'reset_field' => array($this, 'block_reset_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = array();
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = "head";
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 2
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('javascript', $context, $blocks);
        $content = ob_get_clean();
        echo $assetFunction($content, $location, $priority);
        // line 9
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = array();
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = "footer";
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 10
        echo "    ";
        $this->displayBlock('javascript_footer', $context, $blocks);
        $content = ob_get_clean();
        echo $assetFunction($content, $location, $priority);
        // line 14
        $context["name"] = (((array_key_exists("name", $context) &&  !(null === (isset($context["name"]) ? $context["name"] : null)))) ? ((isset($context["name"]) ? $context["name"] : null)) : ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
        // line 15
        $context["default_value"] = (((array_key_exists("default_value", $context) &&  !(null === (isset($context["default_value"]) ? $context["default_value"] : null)))) ? ((isset($context["default_value"]) ? $context["default_value"] : null)) : ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())));
        // line 16
        $context["current_value"] = (((array_key_exists("current_value", $context) &&  !(null === (isset($context["current_value"]) ? $context["current_value"] : null)))) ? ((isset($context["current_value"]) ? $context["current_value"] : null)) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 17
        $context["has_value"] =  !(null === (isset($context["current_value"]) ? $context["current_value"] : null));
        // line 18
        $context["value"] = (((isset($context["has_value"]) ? $context["has_value"] : null)) ? ((isset($context["current_value"]) ? $context["current_value"] : null)) : ((isset($context["default_value"]) ? $context["default_value"] : null)));
        // line 20
        $this->displayBlock('field', $context, $blocks);
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        // line 6
        echo "    ";
    }

    // line 10
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 11
        echo "    ";
    }

    // line 20
    public function block_field($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        if (( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "isset", array()) ||  !(null === (isset($context["value"]) ? $context["value"] : null)))) {
            // line 22
            echo "    ";
            $this->displayBlock('contents', $context, $blocks);
            // line 48
            echo "    ";
        }
    }

    // line 22
    public function block_contents($context, array $blocks = array())
    {
        // line 23
        echo "        ";
        $this->displayBlock('group', $context, $blocks);
        // line 47
        echo "    ";
    }

    // line 23
    public function block_group($context, array $blocks = array())
    {
        // line 24
        echo "            ";
        $this->displayBlock('input', $context, $blocks);
        // line 46
        echo "        ";
    }

    // line 24
    public function block_input($context, array $blocks = array())
    {
        // line 25
        echo "                <input
                        ";
        // line 27
        echo "                        name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
        echo "\"
                        value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), ", "), "html", null, true);
        echo "\"
                        ";
        // line 30
        echo "                        ";
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 38
        echo "                        />

                ";
        // line 40
        $this->displayBlock('reset_field', $context, $blocks);
        // line 45
        echo "            ";
    }

    // line 30
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 31
        echo "                            ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array(), "any", true, true)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "class", array()), "html", null, true);
            echo "\" ";
        }
        // line 32
        echo "                            ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
            echo " id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()), "html", null, true);
            echo "\" ";
        }
        // line 33
        echo "                            ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array(), "any", true, true)) {
            echo " style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array()), "html", null, true);
            echo "\" ";
        }
        // line 34
        echo "                            ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array(), "any", true, true)) {
            echo " title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array()), "html", null, true);
            echo "\" ";
        }
        // line 35
        echo "                            ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "override_target", array(), "any", true, true)) {
            echo " data-override-target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "override_target", array()), "html_attr");
            echo "\" ";
        }
        // line 36
        echo "                            aria-label=\"";
        echo twig_escape_filter($this->env, trim(twig_title_string_filter($this->env, twig_replace_filter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)), array("." => " ")))), "html", null, true);
        echo "\"
                        ";
    }

    // line 40
    public function block_reset_field($context, array $blocks = array())
    {
        // line 41
        if (( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "reset_field", array(), "any", true, true) || twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "reset_field", array()), array(0 => "on", 1 => "true", 2 => 1)))) {
            // line 42
            echo "                        <span class=\"g-reset-field\" data-g-reset-field=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
            echo "\"><i class=\"fa  fa-fw fa-times-circle\"></i></span>
                    ";
        }
    }

    public function getTemplateName()
    {
        return "forms/input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 42,  212 => 41,  209 => 40,  202 => 36,  195 => 35,  188 => 34,  181 => 33,  174 => 32,  167 => 31,  164 => 30,  160 => 45,  158 => 40,  154 => 38,  151 => 30,  147 => 28,  142 => 27,  139 => 25,  136 => 24,  132 => 46,  129 => 24,  126 => 23,  122 => 47,  119 => 23,  116 => 22,  111 => 48,  108 => 22,  105 => 21,  102 => 20,  98 => 11,  95 => 10,  91 => 6,  88 => 5,  84 => 3,  81 => 2,  77 => 20,  75 => 18,  73 => 17,  71 => 16,  69 => 15,  67 => 14,  62 => 10,  50 => 9,  46 => 5,  43 => 4,  40 => 2,  28 => 1,);
    }
}
/* {% assets %}*/
/*     {% block stylesheets %}*/
/*     {% endblock %}*/
/* */
/*     {% block javascript %}*/
/*     {% endblock %}*/
/* {% endassets -%}*/
/* */
/* {% assets in 'footer' %}*/
/*     {% block javascript_footer %}*/
/*     {% endblock %}*/
/* {% endassets -%}*/
/* */
/* {% set name = (name ?? field.name) -%}*/
/* {% set default_value = (default_value ?? field.default) -%}*/
/* {% set current_value = (current_value ?? value) %}*/
/* {% set has_value = current_value is not null %}*/
/* {% set value = has_value ? current_value : default_value -%}*/
/* */
/* {% block field %}*/
/*     {% if not field.isset or value is not null %}*/
/*     {% block contents %}*/
/*         {% block group %}*/
/*             {% block input %}*/
/*                 <input*/
/*                         {# required attribute structures #}*/
/*                         name="{{ (scope ~ name)|fieldName }}"*/
/*                         value="{{ value|join(', ') }}"*/
/*                         {# global attribute structures #}*/
/*                         {% block global_attributes %}*/
/*                             {% if field.class is defined %} class="{{ field.class }}" {% endif %}*/
/*                             {% if field.id is defined %} id="{{ field.id }}" {% endif %}*/
/*                             {% if field.style is defined %} style="{{ field.style }}" {% endif %}*/
/*                             {% if field.title is defined %} title="{{ field.title }}" {% endif %}*/
/*                             {% if field.override_target is defined %} data-override-target="{{ field.override_target|e('html_attr') }}" {% endif %}*/
/*                             aria-label="{{ (scope ~ name)|replace({'.': ' '})|title|trim }}"*/
/*                         {% endblock %}*/
/*                         />*/
/* */
/*                 {% block reset_field -%}*/
/*                     {% if field.reset_field is not defined or field.reset_field in ['on', 'true', 1] %}*/
/*                         <span class="g-reset-field" data-g-reset-field="{{ (scope ~ name)|fieldName }}"><i class="fa  fa-fw fa-times-circle"></i></span>*/
/*                     {% endif %}*/
/*                 {%- endblock %}*/
/*             {% endblock %}*/
/*         {% endblock %}*/
/*     {% endblock %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
