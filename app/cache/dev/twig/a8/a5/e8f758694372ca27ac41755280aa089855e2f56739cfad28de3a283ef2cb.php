<?php

/* HatueySoftTicketBundle:ClasificadorEtapa:show.html.twig */
class __TwigTemplate_a8a5e8f758694372ca27ac41755280aa089855e2f56739cfad28de3a283ef2cb extends Twig_Template
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
        echo "ClasificadorEtapa";
    }

    // line 5
    public function block_tituloPagina($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>ClasificadorEtapa</h1>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<h1>ClasificadorEtapa</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("clasificadoretapa");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clasificadoretapa_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "HatueySoftTicketBundle:ClasificadorEtapa:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 36,  80 => 32,  72 => 27,  62 => 20,  55 => 16,  47 => 10,  44 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
