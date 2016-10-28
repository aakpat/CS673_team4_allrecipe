<?php

/* forms/override.html.twig */
class __TwigTemplate_22256756764ce4191f49be669758877382f32ee2e28456739f175dcf80075f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<input type=\"checkbox\"
       class=\"settings-param-toggle\"
       id=\"of-";
        // line 3
        echo twig_escape_filter($this->env, ((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)), "html", null, true);
        echo "\"";
        echo (((isset($context["has_value"]) ? $context["has_value"] : null)) ? (" checked=\"checked\"") : (""));
        echo "
       role=\"checkbox\"
       aria-label=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_OVERRIDE_CHECKBOX", trim(twig_title_string_filter($this->env, twig_replace_filter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)), array("." => " "))))), "html", null, true);
        echo "\"
       title=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_OVERRIDE_CHECKBOX", $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array())), "html", null, true);
        echo "\" />
<label class=\"settings-param-override\" for=\"of-";
        // line 7
        echo twig_escape_filter($this->env, ((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)), "html", null, true);
        echo "\"></label>
";
    }

    public function getTemplateName()
    {
        return "forms/override.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  34 => 6,  30 => 5,  23 => 3,  19 => 1,);
    }
}
/* <input type="checkbox"*/
/*        class="settings-param-toggle"*/
/*        id="of-{{ scope ~ name }}"{{ has_value ? ' checked="checked"' }}*/
/*        role="checkbox"*/
/*        aria-label="{{ 'GANTRY5_PLATFORM_OVERRIDE_CHECKBOX'|trans((scope ~ name)|replace({'.': ' '})|title|trim) }}"*/
/*        title="{{ 'GANTRY5_PLATFORM_OVERRIDE_CHECKBOX'|trans(field.label) }}" />*/
/* <label class="settings-param-override" for="of-{{ scope ~ name }}"></label>*/
/* */
