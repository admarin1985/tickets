<?php

/* ::frontend.html.twig */
class __TwigTemplate_8f53dbfc0e825b41bfd1059d7b36853406370d2ae1740f91c80c5076f2fad046 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'menuSuperior' => array($this, 'block_menuSuperior'),
            'mensajes' => array($this, 'block_mensajes'),
            'alerta' => array($this, 'block_alerta'),
            'usuario' => array($this, 'block_usuario'),
            'tituloPagina' => array($this, 'block_tituloPagina'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'foot_script' => array($this, 'block_foot_script'),
            'foot_script_assetic' => array($this, 'block_foot_script_assetic'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">


    ";
        // line 13
        $this->env->loadTemplate("::stylesheets.html.twig")->display($context);
        // line 14
        echo "
    <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo " | Sistema de Gestión de Tickets</title>
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
</head>

<body>
";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 169
        echo "
<!-- /#wrapper -->
";
        // line 171
        $this->displayBlock('footer', $context, $blocks);
        // line 176
        echo "

";
        // line 178
        $this->env->loadTemplate("::javascripts.html.twig")->display($context);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('foot_script', $context, $blocks);
        // line 197
        echo "
</body>

</html>
";
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "
<div id=\"wrapper1\">

    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("index");
        echo "\">Tickets</a>
        </div>
<!-- Top Menu Items -->
    ";
        // line 38
        $this->displayBlock('menuSuperior', $context, $blocks);
        // line 132
        echo "    </nav>

    <div id=\"page-wrapper\">

        <div class=\"container-fluid\">

            <!-- Page Heading -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
    ";
        // line 141
        $this->displayBlock('tituloPagina', $context, $blocks);
        // line 146
        echo "     ";
        $this->displayBlock('content', $context, $blocks);
        // line 149
        echo "                    <ol class=\"breadcrumb\">
                        <li>
                            <i class=\"fa fa-dashboard\"></i>  <a href=\"index.html\">Dashboard</a>
                        </li>
                        <li class=\"active\">
                            <i class=\"fa fa-file\"></i> Blank Page
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
";
    }

    // line 38
    public function block_menuSuperior($context, array $blocks = array())
    {
        // line 39
        echo "        <ul class=\"nav navbar-right top-nav\">
            ";
        // line 40
        $this->displayBlock('mensajes', $context, $blocks);
        // line 99
        echo "            ";
        $this->displayBlock('alerta', $context, $blocks);
        // line 116
        echo "            ";
        $this->displayBlock('usuario', $context, $blocks);
        // line 130
        echo "        </ul>
    ";
    }

    // line 40
    public function block_mensajes($context, array $blocks = array())
    {
        // line 41
        echo "            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-envelope\"></i> <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu message-dropdown\">

                    <li class=\"message-preview\">
                        <a href=\"#\">
                            <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"\" alt=\"\">
                                    </span>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">
                                        <strong>";
        // line 53
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "nombres", array(), "any", true, true)) ? ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nombres") . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "apellidos"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"))), "html", null, true);
        echo "</strong>
                                    </h5>
                                    <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class=\"message-preview\">
                        <a href=\"#\">
                            <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"\" alt=\"\">
                                    </span>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">
                                        <strong>John Smith</strong>
                                    </h5>
                                    <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class=\"message-preview\">
                        <a href=\"#\">
                            <div class=\"media\">
                                    <span class=\"pull-left\">
                                        <img class=\"media-object\" src=\"\" alt=\"\">
                                    </span>
                                <div class=\"media-body\">
                                    <h5 class=\"media-heading\">
                                        <strong>John Smith</strong>
                                    </h5>
                                    <p class=\"small text-muted\"><i class=\"fa fa-clock-o\"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class=\"message-footer\">
                        <a href=\"#\">Read All New Messages</a>
                    </li>
                </ul>
            </li>
            ";
    }

    // line 99
    public function block_alerta($context, array $blocks = array())
    {
        // line 100
        echo "            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bell\"></i> <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu alert-dropdown\">
                    <li>
                        <a href=\"#\">Alert Name <span class=\"label label-default\">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href=\"#\">Alert Name <span class=\"label label-primary\">Alert Badge</span></a>
                    </li>
                    <li class=\"divider\"></li>
                    <li>
                        <a href=\"#\">View All</a>
                    </li>
                </ul>
            </li>
            ";
    }

    // line 116
    public function block_usuario($context, array $blocks = array())
    {
        // line 117
        echo "            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> ";
        // line 118
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "nombres", array(), "any", true, true)) ? ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nombres") . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "apellidos"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"))), "html", null, true);
        echo " <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-user\"></i> Profile</a>
                    </li>
                    <li class=\"divider\"></li>
                    <li>
                        <a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                    </li>
                </ul>
            </li>
            ";
    }

    // line 141
    public function block_tituloPagina($context, array $blocks = array())
    {
        // line 142
        echo "                    <h1 class=\"page-header\">
                        Blank Page
                    </h1>
     ";
    }

    // line 146
    public function block_content($context, array $blocks = array())
    {
        // line 147
        echo "        Área de Trabajo
     ";
    }

    // line 171
    public function block_footer($context, array $blocks = array())
    {
        // line 172
        echo "    <footer class=\"text-center\">
        <div class=\"footer\"><a href=\"#\"><strong>HatueySoft</strong></a> versión <small>";
        // line 173
        echo "</small></div>
    </footer>
";
    }

    // line 180
    public function block_foot_script($context, array $blocks = array())
    {
        // line 181
        echo "    ";
        // line 185
        echo "    ";
        $this->displayBlock('foot_script_assetic', $context, $blocks);
        // line 188
        echo "
    ";
        // line 195
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 185
    public function block_foot_script_assetic($context, array $blocks = array())
    {
        // line 186
        echo "
    ";
    }

    // line 195
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 195,  347 => 186,  344 => 185,  339 => 195,  336 => 188,  333 => 185,  331 => 181,  328 => 180,  322 => 173,  319 => 172,  316 => 171,  311 => 147,  308 => 146,  301 => 142,  298 => 141,  289 => 125,  279 => 118,  276 => 117,  273 => 116,  254 => 100,  251 => 99,  201 => 53,  187 => 41,  184 => 40,  179 => 130,  176 => 116,  173 => 99,  171 => 40,  168 => 39,  165 => 38,  142 => 149,  139 => 146,  137 => 141,  126 => 132,  124 => 38,  118 => 35,  103 => 22,  100 => 21,  95 => 16,  90 => 15,  82 => 197,  80 => 180,  77 => 179,  75 => 178,  71 => 176,  69 => 171,  65 => 169,  63 => 21,  57 => 17,  55 => 16,  51 => 15,  48 => 14,  46 => 13,  32 => 1,);
    }
}
