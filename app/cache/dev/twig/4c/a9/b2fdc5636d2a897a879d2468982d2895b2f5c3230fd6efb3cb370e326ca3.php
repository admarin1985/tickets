<?php

/* HatueySoftTicketBundle:Proyecto:new.html.twig */
class __TwigTemplate_4ca9b2fdc5636d2a897a879d2468982d2895b2f5c3230fd6efb3cb370e326ca3 extends Twig_Template
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
        echo "Proyecto creation";
    }

    // line 5
    public function block_tituloPagina($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Proyecto creation</h1>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("proyecto");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "HatueySoftTicketBundle:Proyecto:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  47 => 13,  44 => 10,  39 => 6,  36 => 5,  30 => 3,);
    }
}
