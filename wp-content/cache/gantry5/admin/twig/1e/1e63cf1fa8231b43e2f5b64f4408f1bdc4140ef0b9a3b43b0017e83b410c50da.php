<?php

/* @gantry-admin/ajax/filepicker.html.twig */
class __TwigTemplate_524344a4801cc23aab29467ab3fe2fda5ac28dd535e78f6bea8d38f7c6f1b01d extends Twig_Template
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
        echo "<div class=\"g-particles-header filepicker-header settings-block clearfix\">
    <div class=\"float-right files-mode\">
        <div class=\"file-mode active\" data-files-mode=\"thumbnails\"><i class=\"fa fa-th-large\"></i></div>
        <div class=\"file-mode\" data-files-mode=\"list\"><i class=\"fa fa-th-list\"></i></div>
    </div>
</div>
<div class=\"g-particles-main icons-wrapper g-grid\">
    <div class=\"folders g-block size-30\">
        <ul class=\"g-bookmarks\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bookmarks"]) ? $context["bookmarks"] : null));
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
        foreach ($context['_seq'] as $context["index"] => $context["bookmark"]) {
            // line 11
            echo "                <li class=\"g-bookmark";
            echo ((twig_in_filter($context["index"], (isset($context["active"]) ? $context["active"] : null))) ? (" selected") : (""));
            echo "\">
                    <span class=\"g-bookmark-title\" title=\"";
            // line 12
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo " <i class=\"g-bookmark-collapse fa fa-fw fa-minus\"></i></span>
                    <ul class=\"g-folders fa-ul\">
                        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["bookmark"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 15
                echo "                            <li";
                echo ((twig_in_filter($context["folder"], (isset($context["active"]) ? $context["active"] : null))) ? (" class=\"selected active\"") : (""));
                echo " data-folder=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter(array("pathname" => $context["folder"])), "html_attr");
                echo "\">
                                <i class=\"fa-li fa fa-folder-o\"></i> <span class=\"path\" title=\"";
                // line 16
                echo twig_escape_filter($this->env, $context["folder"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["folder"], "html", null, true);
                echo "</span>
                            </li>
                            ";
                // line 18
                $this->loadTemplate("ajax/filepicker/subfolders.html.twig", "@gantry-admin/ajax/filepicker.html.twig", 18)->display(array_merge($context, array("folder" => $this->getAttribute($this->getAttribute((isset($context["folders"]) ? $context["folders"] : null), $context["index"]), $context["folder"]), "active" => (isset($context["active"]) ? $context["active"] : null))));
                // line 19
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                    </ul>
                </li>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['bookmark'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            ";
        // line 26
        echo "        </ul>
    </div>
    <div class=\"g-files g-block g-filemode-thumbnails\">
        ";
        // line 29
        $this->loadTemplate("ajax/filepicker/files.html.twig", "@gantry-admin/ajax/filepicker.html.twig", 29)->display(array_merge($context, array("files" => (isset($context["files"]) ? $context["files"] : null), "value" => (isset($context["value"]) ? $context["value"] : null))));
        // line 30
        echo "    </div>
</div>
";
        // line 33
        echo "<div class=\"g-particles-footer settings-block clearfix\">
    <div class=\"float-left footer-upload-info font-small\">
        ";
        // line 35
        echo $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_FILEPICKER_UPLOAD_DESC");
        echo "
        <br/>
        ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_FILEPICKER_CURRENT_FILTERS"), "html", null, true);
        echo " ";
        echo (((isset($context["filter"]) ? $context["filter"] : null)) ? ((("<code>" . (isset($context["filter"]) ? $context["filter"] : null)) . "</code>")) : ((("<strong>" . $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_FILEPICKER_NO_FILTER")) . "</strong>")));
        // line 38
        echo "
    </div>
    <div class=\"float-right\">
        <button href=\"#\" class=\"button button-primary\" data-select=\"\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_SELECT"), "html", null, true);
        echo "</button>
        <button href=\"#\" class=\"button g5-dialog-close\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "</button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/ajax/filepicker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 42,  153 => 41,  148 => 38,  144 => 37,  139 => 35,  135 => 33,  131 => 30,  129 => 29,  124 => 26,  122 => 23,  106 => 20,  92 => 19,  90 => 18,  83 => 16,  76 => 15,  59 => 14,  52 => 12,  47 => 11,  30 => 10,  19 => 1,);
    }
}
/* <div class="g-particles-header filepicker-header settings-block clearfix">*/
/*     <div class="float-right files-mode">*/
/*         <div class="file-mode active" data-files-mode="thumbnails"><i class="fa fa-th-large"></i></div>*/
/*         <div class="file-mode" data-files-mode="list"><i class="fa fa-th-list"></i></div>*/
/*     </div>*/
/* </div>*/
/* <div class="g-particles-main icons-wrapper g-grid">*/
/*     <div class="folders g-block size-30">*/
/*         <ul class="g-bookmarks">*/
/*             {% for index,bookmark in bookmarks %}*/
/*                 <li class="g-bookmark{{ (index in active) ? ' selected' : '' }}">*/
/*                     <span class="g-bookmark-title" title="{{ index }}">{{ index }} <i class="g-bookmark-collapse fa fa-fw fa-minus"></i></span>*/
/*                     <ul class="g-folders fa-ul">*/
/*                         {% for folder in bookmark %}*/
/*                             <li{{ (folder in active) ? ' class="selected active"' : '' }} data-folder="{{ {pathname: folder}|json_encode|e('html_attr') }}">*/
/*                                 <i class="fa-li fa fa-folder-o"></i> <span class="path" title="{{ folder }}">{{ folder }}</span>*/
/*                             </li>*/
/*                             {% include 'ajax/filepicker/subfolders.html.twig' with {'folder': attribute(attribute(folders, index), folder), 'active': active } %}*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </li>*/
/*             {% endfor %}*/
/*             {#{% for index,folder in folders %}*/
/*                 <li data-folder="{{ folder|json_encode()|e('html_attr') }}">{{ folder.filename }}</li>*/
/*             {% endfor %}#}*/
/*         </ul>*/
/*     </div>*/
/*     <div class="g-files g-block g-filemode-thumbnails">*/
/*         {% include 'ajax/filepicker/files.html.twig' with {'files': files, 'value': value } %}*/
/*     </div>*/
/* </div>*/
/* {#<div class="g-breadcrumbs">{{ base }}</div>#}*/
/* <div class="g-particles-footer settings-block clearfix">*/
/*     <div class="float-left footer-upload-info font-small">*/
/*         {{ 'GANTRY5_PLATFORM_FILEPICKER_UPLOAD_DESC'|trans|raw }}*/
/*         <br/>*/
/*         {{ 'GANTRY5_PLATFORM_FILEPICKER_CURRENT_FILTERS'|trans }} {{ filter ? ('<code>' ~ filter ~ '</code>')|raw :*/
/*         ('<strong>' ~ 'GANTRY5_PLATFORM_FILEPICKER_NO_FILTER'|trans ~ '</strong>')|raw }}*/
/*     </div>*/
/*     <div class="float-right">*/
/*         <button href="#" class="button button-primary" data-select="">{{ 'GANTRY5_PLATFORM_SELECT'|trans }}</button>*/
/*         <button href="#" class="button g5-dialog-close">{{ 'GANTRY5_PLATFORM_CANCEL'|trans }}</button>*/
/*     </div>*/
/* </div>*/
/* */
