<?php

/* forms/fields/gantry/outlines.html.twig */
class __TwigTemplate_84a4b39e486ac96fff2429d089f04a05ef2b251693cf41feeb6286378de1cd7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/fields/select/selectize.html.twig", "forms/fields/gantry/outlines.html.twig", 1);
        $this->blocks = array(
            'options' => array($this, 'block_options'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/select/selectize.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_options($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("options", $context, $blocks);
        echo "
    ";
        // line 5
        if (( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "filter", array()) || twig_in_filter("default", $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "filter", array())))) {
            // line 6
            echo "        <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_GLOBAL_DEFAULTS"), "html", null, true);
            echo "\">
        <option value=\"default\"";
            // line 7
            if (("default" == (isset($context["value"]) ? $context["value"] : null))) {
                echo " selected=\"selected\"";
            }
            echo ">
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_BASE_OUTLINE"), "html", null, true);
            echo "
        </option>
    </optgroup>
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        $context["user_conf"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "outlines", array()), "user", array()), "filter", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "filter", array())), "method");
        // line 14
        echo "    ";
        if ($this->getAttribute((isset($context["user_conf"]) ? $context["user_conf"] : null), "count", array())) {
            // line 15
            echo "    <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_THEME_OUTLINES"), "html", null, true);
            echo "\">
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["user_conf"]) ? $context["user_conf"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["title"]) {
                // line 17
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\"";
                if (($context["name"] == (isset($context["value"]) ? $context["value"] : null))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                ";
                // line 18
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "
            </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </optgroup>
    ";
        }
        // line 23
        echo "
    ";
        // line 24
        $context["system_conf"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "outlines", array()), "system", array()), "filter", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "filter", array())), "method");
        // line 25
        echo "    ";
        if ($this->getAttribute((isset($context["system_conf"]) ? $context["system_conf"] : null), "count", array())) {
            // line 26
            echo "    <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_SYSTEM_OUTLINES"), "html", null, true);
            echo "\">
        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["system_conf"]) ? $context["system_conf"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["title"]) {
                // line 28
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\"";
                if (($context["name"] == (isset($context["value"]) ? $context["value"] : null))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                ";
                // line 29
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "
            </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </optgroup>
    ";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/gantry/outlines.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 32,  121 => 29,  112 => 28,  108 => 27,  103 => 26,  100 => 25,  98 => 24,  95 => 23,  91 => 21,  82 => 18,  73 => 17,  69 => 16,  64 => 15,  61 => 14,  59 => 13,  56 => 12,  49 => 8,  43 => 7,  38 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'forms/fields/select/selectize.html.twig' %}*/
/* */
/* {% block options %}*/
/*     {{ parent() }}*/
/*     {% if not field.filter or 'default' in field.filter %}*/
/*         <optgroup label="{{ 'GANTRY5_PLATFORM_GLOBAL_DEFAULTS'|trans }}">*/
/*         <option value="default"{% if 'default' == value %} selected="selected"{% endif %}>*/
/*             {{ 'GANTRY5_PLATFORM_BASE_OUTLINE'|trans }}*/
/*         </option>*/
/*     </optgroup>*/
/*     {% endif %}*/
/* */
/*     {% set user_conf = gantry.outlines.user.filter(field.filter) %}*/
/*     {% if user_conf.count %}*/
/*     <optgroup label="{{ 'GANTRY5_PLATFORM_THEME_OUTLINES'|trans }}">*/
/*         {% for name, title in user_conf %}*/
/*             <option value="{{ name }}"{% if name == value %} selected="selected"{% endif %}>*/
/*                 {{ title }}*/
/*             </option>*/
/*         {% endfor %}*/
/*     </optgroup>*/
/*     {% endif %}*/
/* */
/*     {% set system_conf = gantry.outlines.system.filter(field.filter) %}*/
/*     {% if system_conf.count %}*/
/*     <optgroup label="{{ 'GANTRY5_PLATFORM_SYSTEM_OUTLINES'|trans }}">*/
/*         {% for name, title in system_conf %}*/
/*             <option value="{{ name }}"{% if name == value %} selected="selected"{% endif %}>*/
/*                 {{ title }}*/
/*             </option>*/
/*         {% endfor %}*/
/*     </optgroup>*/
/*     {% endif %}*/
/* {% endblock %}*/
