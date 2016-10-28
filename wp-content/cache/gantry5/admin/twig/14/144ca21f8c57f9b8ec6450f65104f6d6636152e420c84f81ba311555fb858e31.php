<?php

/* @gantry-admin/pages/configurations/layouts/section.html.twig */
class __TwigTemplate_a90ede19a800a0b6c9555296f33a645aa1bf1da42a2f152f6f921d5bc50bf858 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@gantry-admin/pages/configurations/layouts/particle.html.twig", "@gantry-admin/pages/configurations/layouts/section.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@gantry-admin/pages/configurations/layouts/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "name", array())), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/configurations/layouts/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@gantry-admin/pages/configurations/layouts/particle.html.twig' %}*/
/* */
/* {% block title %}*/
/*     {{ particle.name|trim }}*/
/* {% endblock %}*/
/* */
