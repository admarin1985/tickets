<?php

/* HatueySoftSecurityBundle:Usuario:index.html.twig */
class __TwigTemplate_f446a88aff228545f3e0385124874916aeceff6d64d86e0b4f2ca8ad7f2e8fe8 extends Twig_Template
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
        echo "Usuario list";
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
        echo "    <h1>Users list</h1>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("security_usuario_new");
        echo "\" class=\"btn btn-primary\" style=\"margin-bottom: 8px;\"><span class=\"glyphicon glyphicon-plus\"></span> Adicionar</a>

    <table class=\"records_list table table-hover table-striped table-bordered table-condensed\">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Email</th>
                <th>Nombre completo</th>
                <th>Estado</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 27
            echo "            <tr>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("security_usuario_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "email"), "-")) : ("-")), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombreCompleto", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombreCompleto"), "-")) : ("-")), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enabled")) ? ("<span class=\"glyphicon glyphicon-ok\" title=\"Activo\"></span>") : ("<span class=\"glyphicon glyphicon-remove\" title=\"Deshabilitado\"></span>"));
            echo "</td>
                <td>
                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("security_usuario_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-default btn-sm\">
                        <span class=\"glyphicon glyphicon-eye-open\"></span> Ver</a>
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("security_usuario_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">
                        <span class=\"glyphicon glyphicon-pencil\"></span> Editar</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "        <tr><td colspan=\"8\">No se encontraron elementos que mostrar.</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "HatueySoftSecurityBundle:Usuario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 42,  113 => 40,  103 => 35,  98 => 33,  93 => 31,  89 => 30,  85 => 29,  79 => 28,  76 => 27,  71 => 26,  54 => 13,  51 => 11,  46 => 8,  43 => 7,  37 => 5,  31 => 3,);
    }
}
