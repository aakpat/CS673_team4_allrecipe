<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_1ac4834c952b08029720c11ad7ff836a99a073476ebe7e7f22e64cc9acd72df0 extends Twig_Template
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
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_1e7a2971e9dea81ca5f8ff000a7b95f50d66dd2f132cbe2f3108432216dfa549 = (isset($context["php_version"]) ? $context["php_version"] : null)) && is_string($__internal_6a9e2d5181446d9d02610c09f5e84226e978d615c441f1a1f77dc58623079eb0 = "5.4") && ('' === $__internal_6a9e2d5181446d9d02610c09f5e84226e978d615c441f1a1f77dc58623079eb0 || 0 === strpos($__internal_1e7a2971e9dea81ca5f8ff000a7b95f50d66dd2f132cbe2f3108432216dfa549, $__internal_6a9e2d5181446d9d02610c09f5e84226e978d615c441f1a1f77dc58623079eb0)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", (isset($context["php_version"]) ? $context["php_version"] : null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set php_version = constant('PHP_VERSION') %}*/
/* */
/* {% if php_version starts with '5.4' %}*/
/* <div class="g-grid">*/
/*     <div class="g-block alert alert-warning g-php-outdated">*/
/*         {{ 'GANTRY5_PLATFORM_PHP54_WARNING'|trans(php_version)|raw }}*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
