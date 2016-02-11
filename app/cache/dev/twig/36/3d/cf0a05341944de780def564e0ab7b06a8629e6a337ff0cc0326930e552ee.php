<?php

/* HatueySoftTicketBundle:ClasificadorEstado:edit.html.twig */
class __TwigTemplate_363dcf0a05341944de780def564e0ab7b06a8629e6a337ff0cc0326930e552ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@HatueySoftTicket/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'tituloPagina' => array($this, 'block_tituloPagina'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@HatueySoftTicket/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "ClasificadorEstado edit";
    }

    // line 5
    public function block_tituloPagina($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>ClasificadorEstado edit</h1>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

    <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("clasificadorestado");
        echo "\" class=\"btn btn-default\">
        <span class=\"glyphicon glyphicon-arrow-left\"></span> Volver
    </a>
    <br>
    <br>

";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "

";
    }

    public function getTemplateName()
    {
        return "HatueySoftTicketBundle:ClasificadorEstado:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 19,  52 => 13,  47 => 11,  44 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
