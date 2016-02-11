<?php

/* HatueySoftSecurityBundle:Role:manager.html.twig */
class __TwigTemplate_cfab094b2b59d1254fa18ab3f92474fe176b34b769470ddf91c4b748fc5341f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@HatueySoftSecurity/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headline' => array($this, 'block_headline'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "Listado de Roles";
    }

    // line 5
    public function block_headline($context, array $blocks = array())
    {
        $this->displayBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"alert alert-warning alert-dismissable\" role=\"alert\">
        <b>Atención</b>
        Al aplicar cambios en la estructura debe generarse nuevamente la cache del sistema, esto provocará un cierre de sesión al completar la acción.
    </div>

    <div class=\"control-group table\">
        <a class=\"btn btn-primary\" data-toggle=\"modal\" href=\"#modaldiv\">
            <span class=\"glyphicon glyphicon-plus\"></span> Adicionar Rol</a>
        <button class=\"btn btn-primary delete-rol\" ><span class=\"glyphicon glyphicon-trash\"></span> Eliminar Rol</button>
    </div>
    <table class=\"records_list table table-hover table-striped table-bordered table-condensed\">
        <thead>
        <tr>
            <th class=\"center\"><input type=\"checkbox\" class=\"selectable\"></th>
            <th class=\"hidden-phone\">Usuario</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "            <tr>
                <td class=\"center\"><input type=\"checkbox\" class=\"to-delete\" id=\"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
            echo "\"></td>
                <td class=\"hidden-phone\">";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
            echo "</td>
                <td><a href=\"#edit\" class=\"btn btn-primary btn-xs\" data-content=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i> Edit</a></td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "            <tr><td colspan=\"8\">No se encontraron elementos que mostrar.</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>

<!-- Modal-->
    <div class=\"modal fade\" id=\"modaldiv\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <div class=\"alert\">
                        <a class=\"close\" data-dismiss=\"alert\" href=\"#\" aria-hidden=\"true\"></a>
                        <span class=\"msg\"></span>
                    </div>
                    <h4 class=\"modal-title\">Asignar Roles</h4>
                </div>
                <div class=\"modal-body\">
                    <form class=\"form-stacked\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">ROLE_</span>
                            <input type=\"text\" class=\"role form-control\" id=\"role\" placeholder=\"NOMBRE_DEL_ROL\"/>
                        </div>
                        <br>
                        <label for=\"jerarquia\"><span >Seleccione incluidos</span></label>
                        <fieldset id=\"jerarquia\">
                        ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 61
            echo "                            <input type=\"checkbox\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
            echo "_modal\" class=\"result-selected\" /><label for=\"";
            echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
            echo "_modal\">";
            echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
            echo "</label>
                                <br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                        </fieldset>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                    <button type=\"button\" class=\"btn btn-primary doaction\" >Aceptar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



";
    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        // line 79
        echo "<script type=\"text/javascript\" >
    \$(function(){
        \$('.doaction').click(function(){

            \$('#modaldiv').find('p.empty').detach();
            var checked = \$('fieldset :checked');
            var role = \$('#role').val();

            if(role.indexOf(\"ROLE_\")==-1)
            {
               role = \"ROLE_\"+ role;
            }

            var object = {
                role:role,
                contained:[]
            };

            checked.each(function(){
                object.contained.push({\"name\":\$(this).attr('id')});
            });

            /*Preparando los parámetros*/
            var parameters = [
                {
                    'name':'data',
                    'value': JSON.stringify(object)
                }
            ];

          if(role!=\"\")
          {

             \$aceptar = \$('<button class=\"btn btn-primary\">Aceptar</button>');

              \$aceptar.click(
                  function(){
                      //setTimeout(function(){document.location.reload()},500);

                      /*Envviando los datos al controlador*/
                      \$.get(
                          '";
        // line 120
        echo $this->env->getExtension('routing')->getPath("role_new_el");
        echo "',
                          \$.param(parameters,true) ,
                          function(data, textStatus, jqXHR)
                          {
                              if(jqXHR.status==200) {
                                  console.log(data);
                                  document.location.reload();
                              } else {
                                  console.error(data);
                              }
                          },
                          'html'
                      );
                      \$('#modaldiv').modal('hide');
                      \$.blockUI();
                  }
              );

              \$cancelar = \$('<button class=\"btn btn-primary\" data-dismiss=\"modal\">Cancelar</button>');

              \$(this).addClass('disable');
              \$('#modaldiv').find('h4.modal-title').parent().append('<p class=\"information\">Esta acción provocará el cierre de sesión</p><br/><p class=\"information\">¿Desea Continuar?</p>').append(\$aceptar).append(\$cancelar).delay(300);
          }
            else
          {
              \$('#modaldiv').find('h4.modal-title').find('p').remove();
              \$('#modaldiv').find('h4.modal-title').parent().append('<p class=\"empty\">El nombre del rol no debe estar vacío</p>').delay(300);

          }

        });

       /*Eliminar rol excepto administrador super*/
        \$('.delete-rol').click(function(){
            var checked = \$('.to-delete:checked');

            if(checked.length>0)
            {
                var object = {
                    roles:[]
                };

                checked.each(function(){

                    if(\$(this).attr('id')!='ROLE_SUPER_ADMIN')
                    {
                        object.roles.push({\"name\":\$(this).attr('id')});
                    }
                });

                /*Preparando los parámetros*/
                var parameters = [
                    {
                        'name':'data',
                        'value': JSON.stringify(object)
                    }
                ];

                    \$ventana = \$('<div class=\"modal fade\" id=\"jModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\"><div class=\"modal-dialog\"><div class=\"modal-content\"><div class=\"modal-header\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button><h4 class=\"modal-title\">Modal title</h4></div><div class=\"modal-body\"></div><div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-default acept\">Aceptar</button><button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button></div></div></div></div>');
                    \$(\$ventana).find('h4.modal-title').text('Información');
                    \$(\$ventana).find('div.modal-body').text('Esta acción provocará el cierre de sesión. ¿Desea Continuar?');
                    var \$aceptar = \$(\$ventana).find('button.btn.btn-default.acept');
                    \$aceptar.click(function(){
                        setTimeout(function(){document.location.reload()},500);

                        /*Envviando los datos al controlador*/
                        \$.get(
                                '";
        // line 187
        echo $this->env->getExtension('routing')->getPath("role_del_el");
        echo "',
                                \$.param(parameters,true) ,
                                function(response)
                                {
                                    if(response.statusCode==200)
                                    {
                                        //document.location.reload();
                                        alert(response.message);
                                        document.location.href=\"";
        // line 195
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\";
                                    }
                                },
                                'json'
                        )
                    });
                    \$('body').append(this.window);
                    \$(\$ventana).modal('show');
            }
            else
            {
              alert('Debe seleccionar al menos uno');
            }


        });

        \$('a[href=\"#edit\"]').on('click', function (event) {
            event.preventDefault();

            var role = \$(this).data('content'),
                form_name = \"hatueysoft_security_role_type\";

            \$.get(Routing.generate('role_edit', {role: role}), function (response) {
                \$('body').append(\$(response));
                var modal = \$('.modal#editModal');
                modal.modal();

                \$('button#btn_update_aceptar').on('click', function (e) {
                    \$('form#' + form_name).ajaxSubmit({
                        success: function (response) {
                            document.location.reload();
                        },
                        error: function (jqXHR) {
                            console.log(jqXHR);
                        }
                    });
                });

                modal.on('hidden.bs.modal', function () {
                    modal.remove();
                })
            });
        });

        //dataTables
        var oTable = \$('.records_list.table.table-hover.table-striped.table-bordered.table-condensed').dataTable({
            \"oLanguage\" : \$language,
            \"bLengthChange\": false,
            \"bSort\":false
        });

        /*\$('#modaldiv').on('hidden.bs.modal', function () {
            document.location.reload();
        })*/
    });
</script>

";
    }

    public function getTemplateName()
    {
        return "HatueySoftSecurityBundle:Role:manager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 195,  275 => 187,  205 => 120,  162 => 79,  159 => 78,  142 => 64,  128 => 61,  124 => 60,  98 => 36,  91 => 34,  83 => 31,  79 => 30,  75 => 29,  72 => 28,  67 => 27,  46 => 8,  43 => 7,  37 => 5,  31 => 3,);
    }
}
