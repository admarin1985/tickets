<?php

/* @HatueySoftSecurity/layout.html.twig */
class __TwigTemplate_dd78c9c0eeaf458df6f549e76fc1e17e200d9526291d3495d1ce0d6f0222444d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'title' => array($this, 'block_title'),
            'header_superior_logo' => array($this, 'block_header_superior_logo'),
            'left_menu_items' => array($this, 'block_left_menu_items'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_header_superior_logo($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        // line 11
        echo "    ";
        $this->env->loadTemplate("@HatueySoftSecurity/Extras/header.html.twig")->display($context);
    }

    // line 14
    public function block_left_menu_items($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        // line 17
        echo "    <nav class=\"navbar-default navbar-static-side\" role=\"navigation\">
        <div class=\"sidebar-collapse\">

            <!-- /#side-menu -->
        </div>
        <!-- /.sidebar-collapse -->
    </nav>
";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "    Área de Trabajo
";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@HatueySoftSecurity/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 30,  79 => 27,  76 => 26,  65 => 17,  63 => 16,  61 => 15,  58 => 14,  53 => 11,  51 => 10,  48 => 9,  41 => 6,  38 => 5,  33 => 3,);
    }
}
