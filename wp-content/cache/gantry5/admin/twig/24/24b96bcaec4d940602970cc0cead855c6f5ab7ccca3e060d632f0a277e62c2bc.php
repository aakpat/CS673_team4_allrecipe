<?php

/* @gantry-admin/partials/inline.html.twig */
class __TwigTemplate_bc0a990c445f4a9cc3aafb1e16d15e077f3250f4658c0b1d77ae2bf4c6d5663f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@gantry-admin/partials/page.html.twig", "@gantry-admin/partials/inline.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'content' => array($this, 'block_content'),
            'gantry_content_wrapper' => array($this, 'block_gantry_content_wrapper'),
            'gantry' => array($this, 'block_gantry'),
            'footer_section' => array($this, 'block_footer_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@gantry-admin/partials/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("gantry-admin://assets/css-compiled/admin.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("gantry-admin://assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_javascript($context, array $blocks = array())
    {
        // line 10
        echo "    <script type=\"text/javascript\" async=\"async\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc("gantry-admin://assets/js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 11
        $this->loadTemplate("@gantry-admin/partials/js-translations.html.twig", "@gantry-admin/partials/inline.html.twig", 11)->display($context);
        // line 12
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayBlock('gantry_content_wrapper', $context, $blocks);
    }

    public function block_gantry_content_wrapper($context, array $blocks = array())
    {
        // line 17
        echo "        <div data-g5-content-wrapper=\"\">
            <div class=\"g-grid\">
                <div class=\"g-block\">
                    <div class=\"g-content\" data-g5-content=\"\">
                        ";
        // line 21
        $this->displayBlock('gantry', $context, $blocks);
        // line 24
        echo "                    </div>
                </div>
            </div>
        </div>
    ";
    }

    // line 21
    public function block_gantry($context, array $blocks = array())
    {
        // line 22
        echo "                            ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
                        ";
    }

    // line 31
    public function block_footer_section($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/inline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 31,  97 => 22,  94 => 21,  86 => 24,  84 => 21,  78 => 17,  71 => 16,  68 => 15,  61 => 12,  59 => 11,  54 => 10,  51 => 9,  45 => 6,  41 => 5,  36 => 4,  33 => 3,  11 => 1,);
    }
}
/* {% extends "@gantry-admin/partials/page.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ url('gantry-admin://assets/css-compiled/admin.css') }}" type="text/css" />*/
/*     <link rel="stylesheet" href="{{ url('gantry-admin://assets/css/font-awesome.min.css') }}" type="text/css" />*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/*     <script type="text/javascript" async="async" src="{{ url('gantry-admin://assets/js/main.js') }}"></script>*/
/*     {% include "@gantry-admin/partials/js-translations.html.twig" %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {% block gantry_content_wrapper %}*/
/*         <div data-g5-content-wrapper="">*/
/*             <div class="g-grid">*/
/*                 <div class="g-block">*/
/*                     <div class="g-content" data-g5-content="">*/
/*                         {% block gantry %}*/
/*                             {{ content|raw }}*/
/*                         {% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
/* {% block footer_section %}*/
/* {% endblock %}*/
/* */
