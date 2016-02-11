<?php

/* @HatueySoftSecurity/Usuario/_form.html.twig */
class __TwigTemplate_6ddb4377abbca004704d6d1a62b08a085d764b96a554897e03df6a1cb279471b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'row');
        echo "
";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombres"), 'row');
        echo "
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellidos"), 'row');
        echo "
";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), 'row');
        echo "
";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pin"), 'row');
        echo "
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles"), 'row');
        echo "
";
        // line 10
        echo "
<br/>
<div class=\"btn-actions\">
    <button class=\"btn btn-primary\" type=\"submit\"><span class=\"glyphicon glyphicon-save\"></span> Aceptar</button>

    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("security_usuario");
        echo "\" class=\"btn btn-default\">
        <span class=\"glyphicon glyphicon-arrow-left\"></span> Volver
    </a>
</div>
";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@HatueySoftSecurity/Usuario/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 19,  58 => 15,  51 => 10,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 4,  27 => 3,  23 => 2,  19 => 1,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
