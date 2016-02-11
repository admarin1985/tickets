<?php

/* HatueySoftTicketBundle:Empresa:edit.html.twig */
class __TwigTemplate_baa3195a948d4356373400db4ad6809a315687fc282ed2938209a7b8730b4ee8 extends Twig_Template
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
        echo "Empresa edit";
    }

    // line 5
    public function block_tituloPagina($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Empresa edit</h1>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
    <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("empresa");
        echo "\" class=\"btn btn-default\">
        <span class=\"glyphicon glyphicon-arrow-left\"></span> Volver
    </a>
    <br>
    <br>
";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "HatueySoftTicketBundle:Empresa:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  51 => 12,  47 => 11,  44 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
