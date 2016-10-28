<?php

/* forms/fields/container/set.html.twig */
class __TwigTemplate_ccb5ab31cb560fbaabb7f6683cd8da2d1787c3fd1e6eca6f82c4468a62bac2ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'overridable' => array($this, 'block_overridable'),
            'contents' => array($this, 'block_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((("forms/" . ((array_key_exists("layout", $context)) ? (_twig_default_filter((isset($context["layout"]) ? $context["layout"] : null), "field")) : ("field"))) . ".html.twig"), "forms/fields/container/set.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_overridable($context, array $blocks = array())
    {
    }

    // line 7
    public function block_contents($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array())) {
            // line 9
            echo "    <";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "tag", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "tag", array()), "h5")) : ("h5")), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "tag", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "tag", array()), "h5")) : ("h5")), "html", null, true);
            echo ">
    ";
        }
        // line 11
        echo "    <div";
        echo (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array())) ? (((" id=\"" . twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()))) . "\"")) : (""));
        echo ">
    ";
        // line 12
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 13
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array()));
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
            foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
                // line 14
                echo "            ";
                if ((is_string($__internal_5ddd3668c26db01ea4a16c7c008f9be0113c6c6245e34cffcda8e27d55025fce = $context["childName"]) && is_string($__internal_ecafcbf808b4a455ec79892d1fbde2c435989da732869c07c0c75907e0b2b3b5 = ".") && ('' === $__internal_ecafcbf808b4a455ec79892d1fbde2c435989da732869c07c0c75907e0b2b3b5 || 0 === strpos($__internal_5ddd3668c26db01ea4a16c7c008f9be0113c6c6245e34cffcda8e27d55025fce, $__internal_ecafcbf808b4a455ec79892d1fbde2c435989da732869c07c0c75907e0b2b3b5)))) {
                    // line 15
                    echo "                ";
                    $context["childValue"] = $this->getAttribute((isset($context["current_value"]) ? $context["current_value"] : null), twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                    // line 16
                    echo "                ";
                    $context["childDefault"] = $this->getAttribute((isset($context["default_value"]) ? $context["default_value"] : null), twig_slice($this->env, $context["childName"], 1, null), array(), "array");
                    // line 17
                    echo "                ";
                    $context["childName"] = ((isset($context["name"]) ? $context["name"] : null) . $context["childName"]);
                    // line 18
                    echo "            ";
                } else {
                    // line 19
                    echo "                ";
                    $context["childValue"] = $this->env->getExtension('GantryTwig')->nestedFunc((isset($context["data"]) ? $context["data"] : null), ((isset($context["scope"]) ? $context["scope"] : null) . $context["childName"]));
                    // line 20
                    echo "                ";
                    $context["childDefault"] = $this->env->getExtension('GantryTwig')->nestedFunc((isset($context["defaults"]) ? $context["defaults"] : null), ((isset($context["scope"]) ? $context["scope"] : null) . $context["childName"]));
                    // line 21
                    echo "            ";
                }
                // line 22
                echo "            ";
                $context["childPrefix"] = (((isset($context["prefix"]) ? $context["prefix"] : null) . $context["childName"]) . ".");
                // line 23
                echo "
            ";
                // line 24
                if ($this->getAttribute($context["child"], "type", array())) {
                    // line 25
                    echo "                ";
                    $this->loadTemplate(array(0 => (("forms/fields/" . twig_replace_filter($this->getAttribute($context["child"], "type", array()), ".", "/")) . ".html.twig"), 1 => "forms/fields/unknown/unknown.html.twig"), "forms/fields/container/set.html.twig", 25)->display(array_merge($context, array("name" =>                     // line 26
$context["childName"], "field" => $context["child"], "current_value" => (isset($context["childValue"]) ? $context["childValue"] : null), "value" => null, "default_value" => (isset($context["childDefault"]) ? $context["childDefault"] : null), "prefix" => (isset($context["childPrefix"]) ? $context["childPrefix"] : null))));
                    // line 27
                    echo "            ";
                }
                // line 28
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
        // line 30
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/container/set.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 30,  127 => 29,  113 => 28,  110 => 27,  108 => 26,  106 => 25,  104 => 24,  101 => 23,  98 => 22,  95 => 21,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  56 => 13,  54 => 12,  49 => 11,  39 => 9,  36 => 8,  33 => 7,  28 => 4,  19 => 1,);
    }
}
/* {% extends 'forms/' ~ layout|default('field') ~ '.html.twig' %}*/
/* */
/* {# Not overridable #}*/
/* {% block overridable %}*/
/* {% endblock %}*/
/* */
/* {% block contents %}*/
/*     {% if field.label %}*/
/*     <{{ field.tag|default('h5') }}>{{ field.label }}</{{ field.tag|default('h5') }}>*/
/*     {% endif %}*/
/*     <div{{ field.id ? (' id="' ~ field.id|e ~ '"')|raw }}>*/
/*     {% if field.fields %}*/
/*         {% for childName, child in field.fields %}*/
/*             {% if childName starts with '.' %}*/
/*                 {% set childValue = current_value[childName[1:]] %}*/
/*                 {% set childDefault = default_value[childName[1:]] %}*/
/*                 {% set childName = name ~ childName %}*/
/*             {% else %}*/
/*                 {% set childValue = nested(data, scope ~ childName) %}*/
/*                 {% set childDefault = nested(defaults, scope ~ childName) %}*/
/*             {% endif %}*/
/*             {% set childPrefix = prefix ~ childName ~ '.' %}*/
/* */
/*             {% if child.type %}*/
/*                 {% include ["forms/fields/" ~ child.type|replace('.', '/') ~ ".html.twig", 'forms/fields/unknown/unknown.html.twig']*/
/*                 with {name: childName, field: child, current_value: childValue, value: null, default_value: childDefault, prefix: childPrefix } %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
