<?php

/* forms/fields/input/multicheckbox.html.twig */
class __TwigTemplate_6ccf61cc090bb4cbc38140a818475fdfa4caeb4927bafd7db530271a1b2b2406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/fields/input/group/group.html.twig", "forms/fields/input/multicheckbox.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
            'reset_field' => array($this, 'block_reset_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/input/group/group.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["option"]) {
            // line 5
            echo "    <label>
        <input
            ";
            // line 8
            echo "            type=\"checkbox\"
            value=\"";
            // line 9
            echo twig_escape_filter($this->env, $context["key"]);
            echo "\"
            data-multicheckbox-field=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
            echo "\"
            ";
            // line 12
            echo "            ";
            $this->displayBlock("global_attributes", $context, $blocks);
            echo "
            ";
            // line 14
            echo "            ";
            if (twig_in_filter($context["key"], (isset($context["value"]) ? $context["value"] : null))) {
                echo "checked=\"checked\" ";
            }
            // line 15
            echo "            ";
            if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
                echo "autocomplete=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), "html", null, true);
                echo "\"";
            }
            // line 16
            echo "            ";
            if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                echo "autofocus=\"autofocus\"";
            }
            // line 17
            echo "            ";
            if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                echo "disabled=\"disabled\"";
            }
            // line 18
            echo "            ";
            if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                echo "required=\"required\"";
            }
            // line 19
            echo "        />
        <span>";
            // line 20
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "</span>
    </label>
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, trim(twig_join_filter((isset($context["value"]) ? $context["value"] : null), ",")), "html", null, true);
        echo "\" />
    ";
        // line 24
        $this->displayBlock('reset_field', $context, $blocks);
    }

    public function block_reset_field($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "forms/fields/input/multicheckbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 24,  117 => 23,  100 => 20,  97 => 19,  92 => 18,  87 => 17,  82 => 16,  75 => 15,  70 => 14,  65 => 12,  61 => 10,  57 => 9,  54 => 8,  50 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'forms/fields/input/group/group.html.twig' %}*/
/* */
/* {% block input %}*/
/*     {% for key, option in field.options %}*/
/*     <label>*/
/*         <input*/
/*             {# required attribute structures #}*/
/*             type="checkbox"*/
/*             value="{{ key|e }}"*/
/*             data-multicheckbox-field="{{ (scope ~ name)|fieldName }}"*/
/*             {# global attribute structures #}*/
/*             {{ block('global_attributes') }}*/
/*             {# non-gloval attribute structures #}*/
/*             {% if key in value %}checked="checked" {% endif %}*/
/*             {% if field.autocomplete in ['on', 'off'] %}autocomplete="{{ field.autocomplete }}"{% endif %}*/
/*             {% if field.autofocus in ['on', 'true', 1] %}autofocus="autofocus"{% endif %}*/
/*             {% if field.disabled in ['on', 'true', 1] %}disabled="disabled"{% endif %}*/
/*             {% if field.required in ['on', 'true', 1] %}required="required"{% endif %}*/
/*         />*/
/*         <span>{{ option }}</span>*/
/*     </label>*/
/*     {% endfor %}*/
/*     <input type="hidden" name="{{ (scope ~ name)|fieldName }}" value="{{ value|join(',')|trim }}" />*/
/*     {% block reset_field %}{% endblock %}*/
/* {% endblock %}*/
/* */
