<?php

/* HatueySoftTicketBundle:Ticket:edit.html.twig */
class __TwigTemplate_0c959d338751bdc1c5de4147c99a04089502457ef1cb247249f7a2858da2dc5f extends Twig_Template
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
        echo "Ticket edit";
    }

    // line 5
    public function block_tituloPagina($context, array $blocks = array())
    {
        // line 6
        echo "     <h1>Ticket edit</h1>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

    <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("ticket");
        echo "\" class=\"btn btn-default\">
            <span class=\"glyphicon glyphicon-arrow-left\"></span> Volver
        </a>
    <br>
    <br>

";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "

";
    }

    public function getTemplateName()
    {
        return "HatueySoftTicketBundle:Ticket:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 20,  52 => 14,  47 => 12,  44 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
