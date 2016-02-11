<?php

/* ::javascripts.html.twig */
class __TwigTemplate_f599a8e419b58d3991405032eb3e2d8dfd6c2933db349f7f99d6ab18332f586a extends Twig_Template
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
        echo "<!-- jQuery -->
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("components/js/jquery.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("components/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("components/js/plugins/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendors/datatables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendors/datatables/js/es.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("components/js/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>

<!-- SB Admin Scripts - Include with every page -->
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("components/js/sb-admin.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("components/js/prettify.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendors/datetimepicker-bootstrap/moment-2.9.0/moment.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendors/datetimepicker-bootstrap/moment-2.9.0/locale/es.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendors/datetimepicker-bootstrap/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendors/chosen/chosen_v1.4.2/chosen.jquery.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("vendors/jquery-form/jquery.form.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

";
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "::javascripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 34,  89 => 27,  85 => 26,  80 => 24,  75 => 22,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  53 => 15,  47 => 12,  42 => 10,  38 => 9,  33 => 7,  28 => 5,  22 => 2,  19 => 1,);
    }
}
