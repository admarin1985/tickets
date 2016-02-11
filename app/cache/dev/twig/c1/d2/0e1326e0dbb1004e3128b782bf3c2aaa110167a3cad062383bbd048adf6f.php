<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_c1d20e1326e0dbb1004e3128b782bf3c2aaa110167a3cad062383bbd048adf6f extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                if (el.className) {
                    el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
                }
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) {
                    el.className += \" \" + klass;
                }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  24 => 2,  92 => 32,  83 => 30,  78 => 22,  73 => 20,  68 => 18,  41 => 9,  98 => 34,  93 => 28,  89 => 27,  84 => 25,  66 => 25,  53 => 15,  42 => 12,  36 => 7,  26 => 3,  198 => 37,  196 => 36,  176 => 33,  164 => 30,  158 => 28,  152 => 26,  143 => 23,  126 => 20,  123 => 19,  117 => 17,  115 => 16,  87 => 25,  63 => 7,  56 => 15,  54 => 3,  27 => 4,  22 => 2,  19 => 1,  243 => 91,  239 => 83,  237 => 82,  235 => 46,  233 => 80,  231 => 79,  229 => 45,  227 => 77,  225 => 76,  222 => 74,  220 => 43,  217 => 42,  214 => 41,  211 => 40,  208 => 39,  205 => 63,  203 => 38,  201 => 61,  199 => 60,  197 => 59,  195 => 58,  193 => 35,  190 => 34,  185 => 91,  182 => 84,  179 => 56,  177 => 52,  174 => 51,  168 => 46,  165 => 45,  162 => 44,  157 => 38,  154 => 37,  149 => 25,  146 => 27,  142 => 21,  140 => 22,  137 => 19,  133 => 17,  131 => 16,  128 => 15,  122 => 40,  120 => 18,  109 => 27,  102 => 22,  97 => 18,  91 => 35,  86 => 9,  81 => 6,  69 => 9,  64 => 17,  62 => 24,  59 => 43,  51 => 13,  48 => 13,  45 => 10,  30 => 5,  118 => 32,  114 => 28,  111 => 30,  106 => 29,  104 => 15,  100 => 19,  94 => 15,  85 => 21,  80 => 24,  75 => 28,  71 => 21,  67 => 50,  61 => 17,  57 => 16,  52 => 11,  50 => 15,  46 => 14,  43 => 2,  37 => 5,  32 => 6,  79 => 29,  65 => 26,  60 => 16,  55 => 22,  44 => 13,  38 => 6,  34 => 8,  31 => 7,  28 => 6,);
    }
}
