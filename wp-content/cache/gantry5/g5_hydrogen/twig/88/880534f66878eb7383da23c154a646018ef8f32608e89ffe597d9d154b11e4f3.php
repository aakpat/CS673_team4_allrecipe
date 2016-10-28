<?php

/* bbpress.html.twig */
class __TwigTemplate_3a59d4faa130d9a8d585ca1d1a3ff7e02ff542f02c87d7ab0fddb581706ea3f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/page.html.twig", "bbpress.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["twigTemplate"] = "bbpress.html.twig";
        // line 3
        $context["scope"] = "bbpress";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"platform-content\">
        <div class=\"bbpress-content\">

            <article class=\"g-content ";
        // line 10
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "class", array());
        echo "\" id=\"content-";
        echo (isset($context["scope"]) ? $context["scope"] : null);
        echo "\">
                ";
        // line 11
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
            </article>

        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "bbpress.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  42 => 10,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  25 => 2,  11 => 1,);
    }
}
/* {% extends "partials/page.html.twig" %}*/
/* {% set twigTemplate = 'bbpress.html.twig' %}*/
/* {% set scope = 'bbpress' %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="platform-content">*/
/*         <div class="bbpress-content">*/
/* */
/*             <article class="g-content {{ post.class }}" id="content-{{ scope }}">*/
/*                 {{ content|raw }}*/
/*             </article>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
