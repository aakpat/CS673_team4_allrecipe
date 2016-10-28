<?php

/* @particles/logo.html.twig */
class __TwigTemplate_e50fccae445a34d2d19be90bf9a030023a5a5407531eeff4f36d46f383283410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/logo.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["url"] = _twig_default_filter($this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "url", array())), $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "siteUrl", array(), "method"));
        // line 5
        echo "    ";
        if (((isset($context["url"]) ? $context["url"] : null) == $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "siteUrl", array(), "method"))) {
            $context["rel"] = "rel=\"home\"";
        }
        // line 6
        echo "    ";
        $context["class"] = (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array())) ? ((("class=\"" . $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array())) . "\"")) : (""));
        // line 7
        echo "    ";
        $context["image"] = $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "image", array()));
        // line 8
        echo "
    <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "text", array()), "html", null, true);
        echo "\" ";
        echo ((array_key_exists("rel", $context)) ? (_twig_default_filter((isset($context["rel"]) ? $context["rel"] : null), "")) : (""));
        echo " ";
        echo ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "")) : (""));
        echo ">
        ";
        // line 10
        if ( !twig_test_empty($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "svg", array()))) {
            // line 11
            echo "            ";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "svg", array());
            echo "
        ";
        } elseif (        // line 12
(isset($context["image"]) ? $context["image"] : null)) {
            // line 13
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "image", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "text", array()), "html", null, true);
            echo "\" />
        ";
        } else {
            // line 15
            echo "            ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "text", array()), "Logo")) : ("Logo")), "html", null, true);
            echo "
        ";
        }
        // line 17
        echo "    </a>
";
    }

    public function getTemplateName()
    {
        return "@particles/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 17,  75 => 15,  67 => 13,  65 => 12,  60 => 11,  58 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@nucleus/partials/particle.html.twig' %}*/
/* */
/* {% block particle %}*/
/*     {% set url = url(particle.url)|default(gantry.siteUrl()) %}*/
/*     {% if (url == gantry.siteUrl()) %}{% set rel='rel="home"' %}{% endif %}*/
/*     {% set class=(particle.class ? 'class="'~ particle.class ~'"') %}*/
/*     {% set image = url(particle.image) %}*/
/* */
/*     <a href="{{ url }}" title="{{ particle.text }}" {{ rel|default('')|raw }} {{ class|default('')|raw }}>*/
/*         {% if particle.svg is not empty %}*/
/*             {{ particle.svg|raw }}*/
/*         {% elseif image %}*/
/*             <img src="{{ url(particle.image) }}" alt="{{ particle.text }}" />*/
/*         {% else %}*/
/*             {{ particle.text|default('Logo') }}*/
/*         {% endif %}*/
/*     </a>*/
/* {% endblock %}*/
/* */
