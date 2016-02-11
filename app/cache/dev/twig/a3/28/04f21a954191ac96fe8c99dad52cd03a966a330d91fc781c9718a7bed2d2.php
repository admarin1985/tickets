<?php

/* ::base.html.twig */
class __TwigTemplate_a32804f21a954191ac96fe8c99dad52cd03a966a330d91fc781c9718a7bed2d2 extends Twig_Template
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
            'menuLateral' => array($this, 'block_menuLateral'),
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
        // line 210
        echo "
<!-- /#wrapper -->
";
        // line 212
        $this->displayBlock('footer', $context, $blocks);
        // line 217
        echo "

";
        // line 219
        $this->env->loadTemplate("::javascripts.html.twig")->display($context);
        // line 220
        echo "
";
        // line 221
        $this->displayBlock('foot_script', $context, $blocks);
        // line 238
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
<div id=";
        // line 23
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " \"wrapper\" ";
        } else {
            echo " \"wrapper1\" ";
        }
        echo "\">

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
        echo "<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        ";
        // line 133
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 134
            echo "    ";
            $this->displayBlock('menuLateral', $context, $blocks);
            // line 178
            echo "        ";
        }
        // line 179
        echo "        <!-- /.navbar-collapse -->
    </nav>

    <div id=\"page-wrapper\">

        <div class=\"container-fluid\">

            <!-- Page Heading -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
    ";
        // line 189
        $this->displayBlock('tituloPagina', $context, $blocks);
        // line 194
        echo "     ";
        $this->displayBlock('content', $context, $blocks);
        // line 197
        echo "
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

    // line 134
    public function block_menuLateral($context, array $blocks = array())
    {
        // line 135
        echo "        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav side-nav\">
                <li>
                    <a href=\"";
        // line 138
        echo $this->env->getExtension('routing')->getUrl("empresa");
        echo "\"><i class=\"fa fa-fw fa-tasks\"></i> Empresas</a>
                </li>
                <li>
                    <a href=\"";
        // line 141
        echo $this->env->getExtension('routing')->getUrl("proyecto");
        echo "\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> Proyectos</a>
                </li>
                <li>
                    <a href=\"";
        // line 144
        echo $this->env->getExtension('routing')->getUrl("ticket");
        echo "\"><i class=\"fa fa-fw fa-table\"></i> Tickets</a>
                </li>
                <li>
                    <a href=\"";
        // line 147
        echo $this->env->getExtension('routing')->getUrl("respuesta");
        echo "\"><i class=\"fa fa-fw fa-edit\"></i> Respuestas</a>
                </li>
                <li>
                    <a href=\"";
        // line 150
        echo $this->env->getExtension('routing')->getUrl("comentario");
        echo "\"><i class=\"fa fa-fw fa-comments\"></i> Comentarios</a>
                </li>
                <li>
                    <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#demo\"><i class=\"fa fa-fw fa-arrows-v\"></i> Clasificadores <i class=\"fa fa-fw fa-caret-down\"></i></a>
                    <ul id=\"demo\" class=\"collapse\">
                        <li>
                            <a href=\"";
        // line 156
        echo $this->env->getExtension('routing')->getUrl("clasificadoretapa");
        echo "\"> Clasificador de etapas</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 159
        echo $this->env->getExtension('routing')->getUrl("clasificadorestado");
        echo "\">Estado de los tickets</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 162
        echo $this->env->getExtension('routing')->getUrl("clasificadorestadoproyecto");
        echo "\">Estado del proyecto</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getUrl("clasificadorprioridad");
        echo "\">Clasificador de prioridad</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 168
        echo $this->env->getExtension('routing')->getUrl("clasificadorticket");
        echo "\">Clasificador de ticket</a>
                        </li>
                    </ul>
                </li>
                <li>
                  <a href=\"";
        // line 173
        echo $this->env->getExtension('routing')->getUrl("security_usuario");
        echo " \"> <i class=\"fa fa-fw fa-users\"></i> Gesti&oacuten de usuarios</a>
                 </li>
            </ul>
        </div>
    ";
    }

    // line 189
    public function block_tituloPagina($context, array $blocks = array())
    {
        // line 190
        echo "                    <h1 class=\"page-header\">
                        Blank Page
                    </h1>
     ";
    }

    // line 194
    public function block_content($context, array $blocks = array())
    {
        // line 195
        echo "        Área de Trabajo
     ";
    }

    // line 212
    public function block_footer($context, array $blocks = array())
    {
        // line 213
        echo "    <footer class=\"text-center\">
        <div class=\"footer\"><a href=\"#\"><strong>HatueySoft</strong></a> versión <small>";
        // line 214
        echo "</small></div>
    </footer>
";
    }

    // line 221
    public function block_foot_script($context, array $blocks = array())
    {
        // line 222
        echo "    ";
        // line 226
        echo "    ";
        $this->displayBlock('foot_script_assetic', $context, $blocks);
        // line 229
        echo "
    ";
        // line 236
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 226
    public function block_foot_script_assetic($context, array $blocks = array())
    {
        // line 227
        echo "
    ";
    }

    // line 236
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 236,  442 => 227,  439 => 226,  434 => 236,  431 => 229,  428 => 226,  426 => 222,  423 => 221,  417 => 214,  414 => 213,  411 => 212,  406 => 195,  403 => 194,  396 => 190,  393 => 189,  384 => 173,  376 => 168,  370 => 165,  364 => 162,  358 => 159,  352 => 156,  343 => 150,  337 => 147,  331 => 144,  325 => 141,  319 => 138,  314 => 135,  311 => 134,  302 => 125,  292 => 118,  289 => 117,  286 => 116,  267 => 100,  264 => 99,  214 => 53,  200 => 41,  197 => 40,  189 => 116,  186 => 99,  184 => 40,  181 => 39,  178 => 38,  162 => 197,  159 => 194,  157 => 189,  145 => 179,  142 => 178,  139 => 134,  137 => 133,  134 => 132,  132 => 38,  126 => 35,  107 => 23,  104 => 22,  101 => 21,  96 => 16,  91 => 15,  83 => 238,  81 => 221,  78 => 220,  76 => 219,  72 => 217,  70 => 212,  66 => 210,  64 => 21,  56 => 16,  52 => 15,  47 => 13,  33 => 1,  276 => 169,  271 => 168,  268 => 167,  254 => 155,  223 => 131,  218 => 128,  211 => 124,  207 => 123,  198 => 117,  192 => 130,  188 => 112,  152 => 79,  144 => 74,  136 => 69,  106 => 42,  94 => 33,  87 => 29,  80 => 25,  73 => 21,  68 => 18,  65 => 16,  58 => 17,  55 => 12,  49 => 14,  42 => 6,  38 => 5,  35 => 4,  32 => 3,);
    }
}
