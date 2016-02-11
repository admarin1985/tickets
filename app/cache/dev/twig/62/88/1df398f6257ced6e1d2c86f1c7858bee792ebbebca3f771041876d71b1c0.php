<?php

/* HatueySoftTicketBundle:Proyecto:proyectos.html.twig */
class __TwigTemplate_62881df398f6257ced6e1d2c86f1c7858bee792ebbebca3f771041876d71b1c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HatueySoftTicketBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headline' => array($this, 'block_headline'),
            'tituloPagina' => array($this, 'block_tituloPagina'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HatueySoftTicketBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Proyecto list";
    }

    // line 5
    public function block_headline($context, array $blocks = array())
    {
        $this->displayBlock("Proyecto list", $context, $blocks);
    }

    // line 7
    public function block_tituloPagina($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Proyecto list</h1>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<table class=\"records_list table table-hover table-striped table-bordered table-condensed\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Nombrecorto</th>
                <th>Descripcion</th>
                <th>Fechainicio</th>
                <th>Fechafin</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")));
        foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
            // line 28
            echo "            <tr>
                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_show", array("id" => $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "nombre"), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "nombreCorto"), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "descripcion"), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "fechaInicio")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "fechaInicio"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "fechaFin")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "fechaFin"), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>

                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_show", array("id" => $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_edit", array("id" => $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>
 ";
        // line 50
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 51
            echo "        <ul>
        <li>
            <a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("proyecto_new");
            echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
";
        }
        // line 59
        echo "    ";
    }

    public function getTemplateName()
    {
        return "HatueySoftTicketBundle:Proyecto:proyectos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 59,  138 => 53,  134 => 51,  132 => 50,  128 => 48,  116 => 42,  110 => 39,  100 => 34,  94 => 33,  90 => 32,  86 => 31,  82 => 30,  76 => 29,  73 => 28,  69 => 27,  54 => 14,  51 => 11,  46 => 8,  43 => 7,  37 => 5,  31 => 3,);
    }
}
