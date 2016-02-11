<?php

/* HatueySoftSecurityBundle:Usuario:edit.html.twig */
class __TwigTemplate_ff5a3b662d2d672aea7e7972d2ff92376f7075b2865e8baedc949682f12debb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@HatueySoftSecurity/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headline' => array($this, 'block_headline'),
            'tituloPagina' => array($this, 'block_tituloPagina'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@HatueySoftSecurity/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Usuario edit";
    }

    // line 5
    public function block_headline($context, array $blocks = array())
    {
        $this->displayBlock("title", $context, $blocks);
    }

    // line 7
    public function block_tituloPagina($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Edit user</h1>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        $this->env->loadTemplate("@HatueySoftSecurity/Usuario/_form.html.twig")->display(array_merge($context, array("form" => (isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")))));
    }

    public function getTemplateName()
    {
        return "HatueySoftSecurityBundle:Usuario:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  51 => 11,  46 => 8,  43 => 7,  37 => 5,  31 => 3,);
    }
}
