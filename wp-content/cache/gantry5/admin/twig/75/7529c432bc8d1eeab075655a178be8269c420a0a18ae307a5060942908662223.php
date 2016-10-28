<?php

/* ajax/filepicker/files.html.twig */
class __TwigTemplate_dd6f1cee54af3ff9089794f23894f88febaa6dd17088e41ea6c86478d9b3cb70 extends Twig_Template
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
        // line 21
        echo "
<ul class=\"g-list-labels\">
    <li>
        <span class=\"g-file-name\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_NAME"), "html", null, true);
        echo "</span>
        <span class=\"g-file-size\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_SIZE"), "html", null, true);
        echo "</span>
        <span class=\"g-file-mtime\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_LATEST_MODIFIED"), "html", null, true);
        echo "</span>
    </li>
</ul>
<ul>
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : null));
        foreach ($context['_seq'] as $context["index"] => $context["file"]) {
            // line 31
            echo "        <li data-file=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($context["file"]), "html_attr");
            echo "\" data-file-url=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "pathname", array()), "html", null, true);
            echo "\"";
            echo ((($this->getAttribute($context["file"], "pathname", array()) == (isset($context["value"]) ? $context["value"] : null))) ? (" class=\"selected\"") : (""));
            echo "
            title=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
            echo " (";
            echo $this->getAttribute($this, "bytesToSize", array(0 => $this->getAttribute($context["file"], "size", array())), "method");
            echo ")\">
            ";
            // line 33
            if ($this->getAttribute($context["file"], "isInCustom", array())) {
                // line 34
                echo "                <span class=\"g-file-delete\" data-g-file-delete data-dz-remove title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_FILE_REMOVE"), "html", null, true);
                echo "\">
                    <i class=\"fa fa-fw fa-trash-o\"></i>
                </span>
            ";
            }
            // line 38
            echo "            ";
            if ($this->getAttribute($context["file"], "isImage", array())) {
                // line 39
                echo "                <span class=\"g-file-preview\" data-g-file-preview title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_FILE_PREVIEW"), "html", null, true);
                echo "\">
                    <i class=\"fa fa-fw fa-eye\"></i>
                </span>
                <div class=\"g-thumb g-image g-image-";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "extension", array()), "html", null, true);
                echo "\">
                    <div style=\"background-image: url('";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute($context["file"], "pathname", array())), "html", null, true);
                echo "')\"></div>
                </div>
            ";
            } else {
                // line 46
                echo "                <div class=\"g-thumb\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "extension", array()), "html", null, true);
                echo "</div>
            ";
            }
            // line 48
            echo "
            <span class=\"g-file-name\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", array()), "html", null, true);
            echo "</span>
            <span class=\"g-file-size\">";
            // line 50
            echo $this->getAttribute($this, "bytesToSize", array(0 => $this->getAttribute($context["file"], "size", array())), "method");
            echo "</span>
            <span class=\"g-file-mtime\">";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["file"], "mtime", array()), "j M o"), "html", null, true);
            echo "</span>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
    ";
        // line 55
        if ((twig_length_filter($this->env, (isset($context["files"]) ? $context["files"] : null)) == 0)) {
            // line 56
            echo "        <li class=\"no-files-found\"><h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_FOLDER_EMPTY"), "html", null, true);
            echo "</h2></li>
    ";
        }
        // line 58
        echo "</ul>
";
    }

    // line 1
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            ob_start();
            // line 3
            echo "        ";
            $context["kilobyte"] = 1024;
            // line 4
            echo "        ";
            $context["megabyte"] = ((isset($context["kilobyte"]) ? $context["kilobyte"] : null) * 1024);
            // line 5
            echo "        ";
            $context["gigabyte"] = ((isset($context["megabyte"]) ? $context["megabyte"] : null) * 1024);
            // line 6
            echo "        ";
            $context["terabyte"] = ((isset($context["gigabyte"]) ? $context["gigabyte"] : null) * 1024);
            // line 7
            echo "
        ";
            // line 8
            if (((isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["kilobyte"]) ? $context["kilobyte"] : null))) {
                // line 9
                echo "            ";
                echo twig_escape_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) . " B"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 10
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["megabyte"]) ? $context["megabyte"] : null))) {
                // line 11
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["kilobyte"]) ? $context["kilobyte"] : null)), 2, ".") . " KB"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 12
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["gigabyte"]) ? $context["gigabyte"] : null))) {
                // line 13
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["megabyte"]) ? $context["megabyte"] : null)), 2, ".") . " MB"), "html", null, true);
                echo "
        ";
            } elseif ((            // line 14
(isset($context["bytes"]) ? $context["bytes"] : null) < (isset($context["terabyte"]) ? $context["terabyte"] : null))) {
                // line 15
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["gigabyte"]) ? $context["gigabyte"] : null)), 2, ".") . " GB"), "html", null, true);
                echo "
        ";
            } else {
                // line 17
                echo "            ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : null) / (isset($context["terabyte"]) ? $context["terabyte"] : null)), 2, ".") . " TB"), "html", null, true);
                echo "
        ";
            }
            // line 19
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "ajax/filepicker/files.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 19,  188 => 17,  182 => 15,  180 => 14,  175 => 13,  173 => 12,  168 => 11,  166 => 10,  161 => 9,  159 => 8,  156 => 7,  153 => 6,  150 => 5,  147 => 4,  144 => 3,  142 => 2,  130 => 1,  125 => 58,  119 => 56,  117 => 55,  114 => 54,  105 => 51,  101 => 50,  97 => 49,  94 => 48,  88 => 46,  82 => 43,  78 => 42,  71 => 39,  68 => 38,  60 => 34,  58 => 33,  52 => 32,  43 => 31,  39 => 30,  32 => 26,  28 => 25,  24 => 24,  19 => 21,);
    }
}
/* {% macro bytesToSize(bytes) -%}*/
/*     {% spaceless %}*/
/*         {% set kilobyte = 1024 %}*/
/*         {% set megabyte = kilobyte * 1024 %}*/
/*         {% set gigabyte = megabyte * 1024 %}*/
/*         {% set terabyte = gigabyte * 1024 %}*/
/* */
/*         {% if bytes < kilobyte %}*/
/*             {{ bytes ~ ' B' }}*/
/*         {% elseif bytes < megabyte %}*/
/*             {{ (bytes / kilobyte)|number_format(2, '.') ~ ' KB' }}*/
/*         {% elseif bytes < gigabyte %}*/
/*             {{ (bytes / megabyte)|number_format(2, '.') ~ ' MB' }}*/
/*         {% elseif bytes < terabyte %}*/
/*             {{ (bytes / gigabyte)|number_format(2, '.') ~ ' GB' }}*/
/*         {% else %}*/
/*             {{ (bytes / terabyte)|number_format(2, '.') ~ ' TB' }}*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {%- endmacro %}*/
/* */
/* <ul class="g-list-labels">*/
/*     <li>*/
/*         <span class="g-file-name">{{ 'GANTRY5_PLATFORM_NAME'|trans }}</span>*/
/*         <span class="g-file-size">{{ 'GANTRY5_PLATFORM_SIZE'|trans }}</span>*/
/*         <span class="g-file-mtime">{{ 'GANTRY5_PLATFORM_LATEST_MODIFIED'|trans }}</span>*/
/*     </li>*/
/* </ul>*/
/* <ul>*/
/*     {% for index,file in files %}*/
/*         <li data-file="{{ file|json_encode()|e('html_attr') }}" data-file-url="{{ file.pathname }}"{{ file.pathname == value ? ' class="selected"' : '' }}*/
/*             title="{{ file.filename }} ({{ _self.bytesToSize(file.size) }})">*/
/*             {% if file.isInCustom %}*/
/*                 <span class="g-file-delete" data-g-file-delete data-dz-remove title="{{ 'GANTRY5_PLATFORM_FILE_REMOVE'|trans }}">*/
/*                     <i class="fa fa-fw fa-trash-o"></i>*/
/*                 </span>*/
/*             {% endif %}*/
/*             {% if file.isImage %}*/
/*                 <span class="g-file-preview" data-g-file-preview title="{{ 'GANTRY5_PLATFORM_FILE_PREVIEW'|trans }}">*/
/*                     <i class="fa fa-fw fa-eye"></i>*/
/*                 </span>*/
/*                 <div class="g-thumb g-image g-image-{{ file.extension }}">*/
/*                     <div style="background-image: url('{{ url(file.pathname) }}')"></div>*/
/*                 </div>*/
/*             {% else %}*/
/*                 <div class="g-thumb">{{ file.extension }}</div>*/
/*             {% endif %}*/
/* */
/*             <span class="g-file-name">{{ file.filename }}</span>*/
/*             <span class="g-file-size">{{ _self.bytesToSize(file.size) }}</span>*/
/*             <span class="g-file-mtime">{{ file.mtime|date('j M o') }}</span>*/
/*         </li>*/
/*     {% endfor %}*/
/* */
/*     {% if files|length == 0 %}*/
/*         <li class="no-files-found"><h2>{{ 'GANTRY5_PLATFORM_FOLDER_EMPTY'|trans }}</h2></li>*/
/*     {% endif %}*/
/* </ul>*/
/* */
