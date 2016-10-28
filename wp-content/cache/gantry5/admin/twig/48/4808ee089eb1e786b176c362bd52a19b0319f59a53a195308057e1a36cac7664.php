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
        if ((is_string($__internal_d00a1226d84d9d9d7fc48378913ecb8a2b00d6f47a90dde582d5a1143289bd55 = (isset($context["php_version"]) ? $context["php_version"] : null)) && is_string($__internal_b222b657dfac03089a6109f5d50b694a2bf75c80ac1242dc1499d62434b2b4b7 = "5.4") && ('' === $__internal_b222b657dfac03089a6109f5d50b694a2bf75c80ac1242dc1499d62434b2b4b7 || 0 === strpos($__internal_d00a1226d84d9d9d7fc48378913ecb8a2b00d6f47a90dde582d5a1143289bd55, $__internal_b222b657dfac03089a6109f5d50b694a2bf75c80ac1242dc1499d62434b2b4b7)))) {
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
