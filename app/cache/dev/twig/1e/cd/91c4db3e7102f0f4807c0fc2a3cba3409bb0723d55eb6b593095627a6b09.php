<?php

/* HatueySoftTicketBundle:Proyecto:show.html.twig */
class __TwigTemplate_1ecd91c4db3e7102f0f4807c0fc2a3cba3409bb0723d55eb6b593095627a6b09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@HatueySoftTicket/layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'tituloPagina' => array($this, 'block_tituloPagina'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("components/css/github_2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("components/css/github_1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Proyecto show";
    }

    // line 12
    public function block_tituloPagina($context, array $blocks = array())
    {
        // line 13
        echo "    <h1>Proyecto: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
        echo "</h1>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "<table class=\"table table-list-cell\">
        <tr>
            <th>Nombre corto</th>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreCorto"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Descripci&oacuten</th>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Fecha de inicio</th>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaInicio"), "Y-m-d"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Fecha de fin</th>
            <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaFin"), "Y-m-d"), "html", null, true);
        echo "</td>
        </tr>

    </table>


    <div class=\"issues-listing\" data-pjax=\"\">

        <div class=\"subnav\" data-pjax=\"\">
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getUrl("ticket_new");
        echo "\" class=\"btn btn-primary right\" role=\"button\" tabindex=\"0\" data-hotkey=\"c\">
                Nuevo ticket
            </a>


            <div class=\"left subnav-spacer-right\" role=\"search\">
                 <div class=\"left select-menu js-menu-container js-select-menu subnav-search-context\">
                    <button class=\"btn\" type=\"button\" aria-haspopup=\"true\">
                        Buscar
                    </button>

                </div>

                <form accept-charset=\"UTF-8\" action=\"/buscar\" class=\"subnav-search left\" data-pjax=\"true\" method=\"get\">
                    <div style=\"margin:0;padding:0;display:inline\"><input name=\"utf8\" value=\"\" type=\"hidden\"></div>
                    <input name=\"q\" value=\"\" class=\"subnav-search-input input-contrast\" placeholder=\"Buscar tickets\" aria-label=\"Buscar tickets\" type=\"text\">
                </form>
            </div>
        </div>

        <div class=\"table-list-header\" id=\"js-issues-toolbar\">

            <div class=\"table-list-filters\">

                <div class=\"table-list-header-toggle states left\">
                    <a href=\"https://github.com/Haehnchen/idea-php-symfony2-plugin/issues?q=is%3Aopen+is%3Aissue\" class=\"btn-link selected\">
                        <svg aria-hidden=\"true\" class=\"octicon octicon-issue-opened\" height=\"16\" role=\"img\" version=\"1.1\" viewBox=\"0 0 14 16\" width=\"14\"><path d=\"M7 2.3c3.14 0 5.7 2.56 5.7 5.7S10.14 13.7 7 13.7 1.3 11.14 1.3 8s2.56-5.7 5.7-5.7m0-1.3C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7S10.86 1 7 1z m1 3H6v5h2V4z m0 6H6v2h2V10z\"></path></svg>
                        ";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["ticketsAbiertos"]) ? $context["ticketsAbiertos"] : $this->getContext($context, "ticketsAbiertos")), "html", null, true);
        echo " Abiertos
                    </a>

                    <a href=\"https://github.com/Haehnchen/idea-php-symfony2-plugin/issues?q=is%3Aopen+is%3Aissue\" class=\"btn-link selected\">
                        <svg aria-hidden=\"true\" class=\"octicon octicon-checklist\" height=\"16\" role=\"img\" version=\"1.1\" viewBox=\"0 0 14 16\" width=\"14\"><path d=\"M7 2.3c3.14 0 5.7 2.56 5.7 5.7S10.14 13.7 7 13.7 1.3 11.14 1.3 8s2.56-5.7 5.7-5.7m0-1.3C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7S10.86 1 7 1z m1 3H6v5h2V4z m0 6H6v2h2V10z\"></path></svg>
                        ";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["ticketsEnProceso"]) ? $context["ticketsEnProceso"] : $this->getContext($context, "ticketsEnProceso")), "html", null, true);
        echo " En proceso
                    </a>

                    <a href=\"https://github.com/Haehnchen/idea-php-symfony2-plugin/issues?q=is%3Aissue+is%3Aclosed\" class=\"btn-link \">
                        <svg aria-hidden=\"true\" class=\"octicon octicon-check\" height=\"16\" role=\"img\" version=\"1.1\" viewBox=\"0 0 12 16\" width=\"12\"><path d=\"M12 5L4 13 0 9l1.5-1.5 2.5 2.5 6.5-6.5 1.5 1.5z\"></path></svg>
                        ";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["ticketsTerminados"]) ? $context["ticketsTerminados"] : $this->getContext($context, "ticketsTerminados")), "html", null, true);
        echo " Cerrados
                    </a>
                </div>


                <div class=\"table-list-header-toggle right\">
                    <div class=\"left select-menu js-menu-container js-select-menu js-load-contents\" data-contents-url=\"\">
                        <button class=\"btn-link select-menu-button js-menu-target\" type=\"button\" aria-haspopup=\"true\" data-hotkey=\"u\">
                            Autor
                        </button>

                        <div class=\"select-menu-modal-holder js-menu-content js-navigation-container\" aria-hidden=\"true\">

                            <div class=\"select-menu-modal\">
                                <div class=\"select-menu-header\">
                                    <span class=\"select-menu-title\">Filtrado por autor</span>
                                </div>

                                <div class=\"js-select-menu-deferred-content\"></div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <ul class=\"table-list table-list-bordered table-list-issues js-navigation-container js-active-navigation-container\">
            ";
        // line 109
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 110
            echo "            <li id=\"issue_668\" class=\"read table-list-item js-navigation-item js-issue-row\">


                <div class=\"table-list-cell table-list-cell-type\">
                    <a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("proyecto_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" aria-label=\"Ver todos los tickets\" class=\"tooltipped tooltipped-n\">
                        <svg aria-hidden=\"true\" class=\"octicon octicon-issue-opened open\" height=\"16\" role=\"img\" version=\"1.1\" viewBox=\"0 0 14 16\" width=\"14\"><path d=\"M7 2.3c3.14 0 5.7 2.56 5.7 5.7S10.14 13.7 7 13.7 1.3 11.14 1.3 8s2.56-5.7 5.7-5.7m0-1.3C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7S10.86 1 7 1z m1 3H6v5h2V4z m0 6H6v2h2V10z\"></path></svg>
                    </a>  </div>

                <div class=\"table-list-cell issue-title\">

                    <a href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ticket_show", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id"))), "html", null, true);
            echo "\" class=\"issue-title-link js-navigation-open\">
                        ";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "tema"), "html", null, true);
            echo "
                    </a>
                 <div class=\"issue-meta\">
      <span class=\"issue-meta-section opened-by\">
        #";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id"), "html", null, true);
            echo "
        Abierto hace <time title=\"";
            // line 126
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "fecha"), "Y-m-d"), "html", null, true);
            echo "\" datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "fecha"), "Y-m-d"), "html", null, true);
            echo "\" is=\"relative-time\">";
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "fecha"), "Y")), "html", null, true);
            echo " años</time> por
        ";
            // line 128
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("ticket_show", array("id" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "id"))), "html", null, true);
            echo "\" aria-label=\"View all issues opened by Blackskyliner\" class=\"tooltipped tooltipped-s muted-link\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : $this->getContext($context, "ticket")), "usuario"), "html", null, true);
            echo "</a>
      </span>


      <span class=\"issue-meta-section css-truncate issue-milestone\">
      </span>


                    </div>
                </div>

                <div class=\"table-list-cell table-list-cell-avatar\">
                </div>

                <div class=\"table-list-cell issue-comments\">
                    <a href=\"https://github.com/Haehnchen/idea-php-symfony2-plugin/issues/668\" class=\"muted-link \">
                        <svg aria-hidden=\"true\" class=\"octicon octicon-comment\" height=\"16\" role=\"img\" version=\"1.1\" viewBox=\"0 0 14 16\" width=\"14\"><path d=\"M13 2H1c-0.55 0-1 0.45-1 1v8c0 0.55 0.45 1 1 1h2v3.5l3.5-3.5h6.5c0.55 0 1-0.45 1-1V3c0-0.55-0.45-1-1-1z m0 9H6L4 13V11H1V3h12v8z\"></path></svg>
                        2
                    </a>
                </div>
            </li>


            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "        </ul>


        <div class=\"paginate-container\">

            <div class=\"pagination\"><span class=\"previous_page disabled\">Previous</span> <em class=\"current\">1</em> <a rel=\"next\" href=\"#\">2</a> <a href=\"#\">3</a> <a href=\"#\">4</a> <a href=\"#\">5</a> <span class=\"gap\">â¦</span> <a href=\"#\">8</a> <a href=\"#\">9</a> <a class=\"next_page\" rel=\"next\" href=\"#\">Next</a></div>
        </div>


    </div>
";
    }

    // line 164
    public function block_javascripts($context, array $blocks = array())
    {
        // line 165
        echo "    <link as=\"script\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("components/js/frameworks.js"), "html", null, true);
        echo "\" rel=\"preload\">
    <link as=\"script\" href=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("components/js/github.js"), "html", null, true);
        echo "\" rel=\"preload\">
";
    }

    public function getTemplateName()
    {
        return "HatueySoftTicketBundle:Proyecto:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 166,  277 => 165,  274 => 164,  260 => 152,  227 => 128,  219 => 126,  215 => 125,  208 => 121,  204 => 120,  195 => 114,  189 => 110,  185 => 109,  152 => 79,  144 => 74,  136 => 69,  106 => 42,  94 => 33,  87 => 29,  80 => 25,  73 => 21,  68 => 18,  65 => 16,  58 => 13,  55 => 12,  49 => 10,  42 => 6,  38 => 5,  35 => 4,  32 => 3,);
    }
}
