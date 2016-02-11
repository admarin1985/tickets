<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_3f2fd034e24378f86aebe77fef00cc20a33abdcecb331d179b48c6354a6cc971 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  24 => 2,  92 => 32,  83 => 30,  78 => 22,  73 => 20,  68 => 18,  41 => 9,  98 => 34,  93 => 28,  89 => 27,  84 => 25,  66 => 25,  53 => 15,  42 => 12,  36 => 7,  26 => 3,  198 => 37,  196 => 36,  176 => 33,  164 => 30,  158 => 28,  152 => 26,  143 => 23,  126 => 20,  123 => 19,  117 => 17,  115 => 16,  87 => 25,  63 => 7,  56 => 15,  54 => 3,  27 => 4,  22 => 2,  19 => 1,  243 => 91,  239 => 83,  237 => 82,  235 => 46,  233 => 80,  231 => 79,  229 => 45,  227 => 77,  225 => 76,  222 => 74,  220 => 43,  217 => 42,  214 => 41,  211 => 40,  208 => 39,  205 => 63,  203 => 38,  201 => 61,  199 => 60,  197 => 59,  195 => 58,  193 => 35,  190 => 34,  185 => 91,  182 => 84,  179 => 56,  177 => 52,  174 => 51,  168 => 46,  165 => 45,  162 => 44,  157 => 38,  154 => 37,  149 => 25,  146 => 27,  142 => 21,  140 => 22,  137 => 19,  133 => 17,  131 => 16,  128 => 15,  122 => 40,  120 => 18,  109 => 27,  102 => 22,  97 => 18,  91 => 35,  86 => 9,  81 => 6,  69 => 9,  64 => 17,  62 => 24,  59 => 43,  51 => 13,  48 => 13,  45 => 10,  30 => 5,  118 => 32,  114 => 28,  111 => 30,  106 => 29,  104 => 15,  100 => 19,  94 => 15,  85 => 21,  80 => 24,  75 => 28,  71 => 21,  67 => 50,  61 => 17,  57 => 16,  52 => 11,  50 => 15,  46 => 14,  43 => 2,  37 => 5,  32 => 6,  79 => 29,  65 => 26,  60 => 16,  55 => 22,  44 => 13,  38 => 6,  34 => 8,  31 => 7,  28 => 6,);
    }
}
