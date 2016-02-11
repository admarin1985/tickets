<?php

/* HatueySoftTicketBundle::layout.html.twig */
class __TwigTemplate_edf8556b70a0e3e88a9a46b0f91bff9bc60e9770207eea04a092c475b10c578c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'title' => array($this, 'block_title'),
            'menuLateral' => array($this, 'block_menuLateral'),
            'tituloPagina' => array($this, 'block_tituloPagina'),
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

    // line 4
    public function block_header($context, array $blocks = array())
    {
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_menuLateral($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->displayParentBlock("menuLateral", $context, $blocks);
        echo "
";
    }

    // line 14
    public function block_tituloPagina($context, array $blocks = array())
    {
        // line 15
        echo "    <h1>Ticket edit</h1>
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "    Área de Trabajo
";
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "HatueySoftTicketBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  69 => 19,  66 => 18,  61 => 15,  58 => 14,  51 => 11,  48 => 10,  41 => 7,  38 => 6,  33 => 4,);
    }
}
