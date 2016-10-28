<?php

/* forms/fields/gantry/particles.html.twig */
class __TwigTemplate_35c98cc4225420c73a3b3fac420865d51caf6998de56f0b5f52eadc0560f4654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((("forms/" . ((array_key_exists("layout", $context)) ? (_twig_default_filter((isset($context["layout"]) ? $context["layout"] : null), "field")) : ("field"))) . ".html.twig"), "forms/fields/gantry/particles.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["outline"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "outline", array())) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "outline", array())) : ($this->env->getExtension('GantryTwig')->nestedFunc((isset($context["data"]) ? $context["data"] : null), ((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "outline_field", array())))));
        // line 4
        $context["particles"] = (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "particles", array())) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "particles", array())) : ((((isset($context["outline"]) ? $context["outline"] : null)) ? ($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "outlines", array()), "getParticleInstances", array(0 => (isset($context["outline"]) ? $context["outline"] : null), 1 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "particle", array()), 2 => false), "method")) : (""))));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_label($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("label", $context, $blocks);
        echo "
    <div><span class=\"particle-label-subtype badge\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "particle", array()), "html", null, true);
        echo "</span></div>
";
    }

    // line 11
    public function block_input($context, array $blocks = array())
    {
        // line 12
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()), "html", null, true);
        echo "\">
        ";
        // line 13
        if ((isset($context["particles"]) ? $context["particles"] : null)) {
            // line 14
            echo "            <div class=\"input-group\">
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["particles"]) ? $context["particles"] : null));
            foreach ($context['_seq'] as $context["id"] => $context["particle"]) {
                // line 16
                echo "                    <label for=\"";
                echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()), ((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)))) : (((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)))) . "-") . $context["id"]), "html", null, true);
                echo "\">
                        <input
                                id=\"";
                // line 18
                echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()), ((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)))) : (((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)))) . "-") . $context["id"]), "html", null, true);
                echo "\"
                                type=\"radio\"
                                name=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
                echo "\"
                                value=\"";
                // line 21
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\"
                                required=\"required\"
                                ";
                // line 23
                if (((isset($context["value"]) ? $context["value"] : null) == $context["id"])) {
                    echo "checked=\"checked\"";
                }
                // line 24
                echo "                        />
                        <span>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["particle"], "title", array()), "html", null, true);
                echo "</span>
                        <i class=\"fa fa-info-circle fa-fw\"></i>
                    </label>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['particle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            </div>
        ";
        } else {
            // line 31
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_NO_INHERITANCE_SELECT_OUTLINE"), "html", null, true);
            echo "
        ";
        }
        // line 33
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/gantry/particles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 33,  105 => 31,  101 => 29,  91 => 25,  88 => 24,  84 => 23,  79 => 21,  75 => 20,  70 => 18,  64 => 16,  60 => 15,  57 => 14,  55 => 13,  50 => 12,  47 => 11,  41 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  19 => 1,);
    }
}
/* {% extends 'forms/' ~ layout|default('field') ~ '.html.twig' %}*/
/* */
/* {% set outline = field.outline ?: nested(data, scope ~ field.outline_field) %}*/
/* {% set particles = field.particles ?: (outline ? gantry.outlines.getParticleInstances(outline, field.particle, false)) %}*/
/* */
/* {% block label %}*/
/*     {{ parent() }}*/
/*     <div><span class="particle-label-subtype badge">{{ field.particle }}</span></div>*/
/* {% endblock %}*/
/* */
/* {% block input %}*/
/*     <div id="{{ field.id }}">*/
/*         {% if particles %}*/
/*             <div class="input-group">*/
/*                 {% for id, particle in particles %}*/
/*                     <label for="{{ field.id|default(scope ~ name) ~ '-' ~ id }}">*/
/*                         <input*/
/*                                 id="{{ field.id|default(scope ~ name) ~ '-' ~ id }}"*/
/*                                 type="radio"*/
/*                                 name="{{ (scope ~ name)|fieldName }}"*/
/*                                 value="{{ id }}"*/
/*                                 required="required"*/
/*                                 {% if value == id %}checked="checked"{% endif %}*/
/*                         />*/
/*                         <span>{{ particle.title }}</span>*/
/*                         <i class="fa fa-info-circle fa-fw"></i>*/
/*                     </label>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         {% else %}*/
/*             {{ 'GANTRY5_PLATFORM_NO_INHERITANCE_SELECT_OUTLINE'|trans }}*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
