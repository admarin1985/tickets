<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/empresa')) {
            // empresa
            if (rtrim($pathinfo, '/') === '/empresa') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_empresa;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'empresa');
                }

                return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\EmpresaController::indexAction',  '_route' => 'empresa',);
            }
            not_empresa:

            // empresa_create
            if ($pathinfo === '/empresa/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_empresa_create;
                }

                return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\EmpresaController::createAction',  '_route' => 'empresa_create',);
            }
            not_empresa_create:

            // empresa_new
            if ($pathinfo === '/empresa/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_empresa_new;
                }

                return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\EmpresaController::newAction',  '_route' => 'empresa_new',);
            }
            not_empresa_new:

            // empresa_show
            if (preg_match('#^/empresa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_empresa_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_show')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\EmpresaController::showAction',));
            }
            not_empresa_show:

            // empresa_edit
            if (0 === strpos($pathinfo, '/empresa/edit') && preg_match('#^/empresa/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_empresa_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_edit')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\EmpresaController::editAction',));
            }
            not_empresa_edit:

            // empresa_update
            if (preg_match('#^/empresa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_empresa_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_update')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\EmpresaController::updateAction',));
            }
            not_empresa_update:

            // empresa_delete
            if (preg_match('#^/empresa/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_empresa_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_delete')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\EmpresaController::deleteAction',));
            }
            not_empresa_delete:

        }

        if (0 === strpos($pathinfo, '/proyecto')) {
            // proyecto
            if (rtrim($pathinfo, '/') === '/proyecto') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_proyecto;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'proyecto');
                }

                return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ProyectoController::indexAction',  '_route' => 'proyecto',);
            }
            not_proyecto:

            // proyectos
            if (rtrim($pathinfo, '/') === '/proyecto/proyectos') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_proyectos;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'proyectos');
                }

                return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ProyectoController::proyectosAction',  '_route' => 'proyectos',);
            }
            not_proyectos:

            // proyecto_create
            if ($pathinfo === '/proyecto/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_proyecto_create;
                }

                return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ProyectoController::createAction',  '_route' => 'proyecto_create',);
            }
            not_proyecto_create:

            // proyecto_new
            if (rtrim($pathinfo, '/') === '/proyecto/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_proyecto_new;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'proyecto_new');
                }

                return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ProyectoController::newAction',  '_route' => 'proyecto_new',);
            }
            not_proyecto_new:

            // proyecto_show
            if (preg_match('#^/proyecto/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_proyecto_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'proyecto_show');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'proyecto_show')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ProyectoController::showAction',));
            }
            not_proyecto_show:

            // proyecto_edit
            if (0 === strpos($pathinfo, '/proyecto/edit') && preg_match('#^/proyecto/edit/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_proyecto_edit;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'proyecto_edit');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'proyecto_edit')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ProyectoController::editAction',));
            }
            not_proyecto_edit:

            // proyecto_update
            if (preg_match('#^/proyecto/(?P<id>[^/]++)/$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_proyecto_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'proyecto_update')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ProyectoController::updateAction',));
            }
            not_proyecto_update:

            // proyecto_delete
            if (preg_match('#^/proyecto/(?P<id>[^/]++)/$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_proyecto_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'proyecto_delete')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ProyectoController::deleteAction',));
            }
            not_proyecto_delete:

        }

        if (0 === strpos($pathinfo, '/ticket')) {
            // ticket
            if (rtrim($pathinfo, '/') === '/ticket') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ticket;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ticket');
                }

                return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\TicketController::indexAction',  '_route' => 'ticket',);
            }
            not_ticket:

            // ticket_create
            if ($pathinfo === '/ticket/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ticket_create;
                }

                return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\TicketController::createAction',  '_route' => 'ticket_create',);
            }
            not_ticket_create:

            // ticket_new
            if ($pathinfo === '/ticket/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ticket_new;
                }

                return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\TicketController::newAction',  '_route' => 'ticket_new',);
            }
            not_ticket_new:

            // ticket_show
            if (preg_match('#^/ticket/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ticket_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_show')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\TicketController::showAction',));
            }
            not_ticket_show:

            // ticket_edit
            if (preg_match('#^/ticket/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ticket_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_edit')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\TicketController::editAction',));
            }
            not_ticket_edit:

            // ticket_update
            if (preg_match('#^/ticket/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_ticket_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_update')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\TicketController::updateAction',));
            }
            not_ticket_update:

            // ticket_delete
            if (preg_match('#^/ticket/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_ticket_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ticket_delete')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\TicketController::deleteAction',));
            }
            not_ticket_delete:

        }

        if (0 === strpos($pathinfo, '/respuesta')) {
            // respuesta
            if (rtrim($pathinfo, '/') === '/respuesta') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_respuesta;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'respuesta');
                }

                return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\RespuestaController::indexAction',  '_route' => 'respuesta',);
            }
            not_respuesta:

            // respuesta_create
            if ($pathinfo === '/respuesta/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_respuesta_create;
                }

                return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\RespuestaController::createAction',  '_route' => 'respuesta_create',);
            }
            not_respuesta_create:

            // respuesta_new
            if ($pathinfo === '/respuesta/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_respuesta_new;
                }

                return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\RespuestaController::newAction',  '_route' => 'respuesta_new',);
            }
            not_respuesta_new:

            // respuesta_show
            if (preg_match('#^/respuesta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_respuesta_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'respuesta_show')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\RespuestaController::showAction',));
            }
            not_respuesta_show:

            // respuesta_edit
            if (preg_match('#^/respuesta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_respuesta_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'respuesta_edit')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\RespuestaController::editAction',));
            }
            not_respuesta_edit:

            // respuesta_update
            if (preg_match('#^/respuesta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_respuesta_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'respuesta_update')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\RespuestaController::updateAction',));
            }
            not_respuesta_update:

            // respuesta_delete
            if (preg_match('#^/respuesta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_respuesta_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'respuesta_delete')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\RespuestaController::deleteAction',));
            }
            not_respuesta_delete:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/comentario')) {
                // comentario
                if (rtrim($pathinfo, '/') === '/comentario') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comentario;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'comentario');
                    }

                    return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ComentarioController::indexAction',  '_route' => 'comentario',);
                }
                not_comentario:

                // comentario_create
                if ($pathinfo === '/comentario/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_comentario_create;
                    }

                    return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ComentarioController::createAction',  '_route' => 'comentario_create',);
                }
                not_comentario_create:

                // comentario_new
                if ($pathinfo === '/comentario/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comentario_new;
                    }

                    return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ComentarioController::newAction',  '_route' => 'comentario_new',);
                }
                not_comentario_new:

                // comentario_show
                if (preg_match('#^/comentario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comentario_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comentario_show')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ComentarioController::showAction',));
                }
                not_comentario_show:

                // comentario_edit
                if (preg_match('#^/comentario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comentario_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comentario_edit')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ComentarioController::editAction',));
                }
                not_comentario_edit:

                // comentario_update
                if (preg_match('#^/comentario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_comentario_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comentario_update')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ComentarioController::updateAction',));
                }
                not_comentario_update:

                // comentario_delete
                if (preg_match('#^/comentario/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_comentario_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comentario_delete')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ComentarioController::deleteAction',));
                }
                not_comentario_delete:

            }

            if (0 === strpos($pathinfo, '/clasificador')) {
                if (0 === strpos($pathinfo, '/clasificadorticket')) {
                    // clasificadorticket
                    if (rtrim($pathinfo, '/') === '/clasificadorticket') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_clasificadorticket;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'clasificadorticket');
                        }

                        return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorTicketController::indexAction',  '_route' => 'clasificadorticket',);
                    }
                    not_clasificadorticket:

                    // clasificadorticket_create
                    if ($pathinfo === '/clasificadorticket/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_clasificadorticket_create;
                        }

                        return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorTicketController::createAction',  '_route' => 'clasificadorticket_create',);
                    }
                    not_clasificadorticket_create:

                    // clasificadorticket_new
                    if ($pathinfo === '/clasificadorticket/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_clasificadorticket_new;
                        }

                        return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorTicketController::newAction',  '_route' => 'clasificadorticket_new',);
                    }
                    not_clasificadorticket_new:

                    // clasificadorticket_show
                    if (preg_match('#^/clasificadorticket/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_clasificadorticket_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificadorticket_show')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorTicketController::showAction',));
                    }
                    not_clasificadorticket_show:

                    // clasificadorticket_edit
                    if (preg_match('#^/clasificadorticket/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_clasificadorticket_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificadorticket_edit')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorTicketController::editAction',));
                    }
                    not_clasificadorticket_edit:

                    // clasificadorticket_update
                    if (preg_match('#^/clasificadorticket/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_clasificadorticket_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificadorticket_update')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorTicketController::updateAction',));
                    }
                    not_clasificadorticket_update:

                    // clasificadorticket_delete
                    if (preg_match('#^/clasificadorticket/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_clasificadorticket_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificadorticket_delete')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorTicketController::deleteAction',));
                    }
                    not_clasificadorticket_delete:

                }

                if (0 === strpos($pathinfo, '/clasificadorprioridad')) {
                    // clasificadorprioridad
                    if (rtrim($pathinfo, '/') === '/clasificadorprioridad') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_clasificadorprioridad;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'clasificadorprioridad');
                        }

                        return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorPrioridadController::indexAction',  '_route' => 'clasificadorprioridad',);
                    }
                    not_clasificadorprioridad:

                    // clasificadorprioridad_create
                    if ($pathinfo === '/clasificadorprioridad/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_clasificadorprioridad_create;
                        }

                        return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorPrioridadController::createAction',  '_route' => 'clasificadorprioridad_create',);
                    }
                    not_clasificadorprioridad_create:

                    // clasificadorprioridad_new
                    if ($pathinfo === '/clasificadorprioridad/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_clasificadorprioridad_new;
                        }

                        return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorPrioridadController::newAction',  '_route' => 'clasificadorprioridad_new',);
                    }
                    not_clasificadorprioridad_new:

                    // clasificadorprioridad_show
                    if (preg_match('#^/clasificadorprioridad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_clasificadorprioridad_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificadorprioridad_show')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorPrioridadController::showAction',));
                    }
                    not_clasificadorprioridad_show:

                    // clasificadorprioridad_edit
                    if (preg_match('#^/clasificadorprioridad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_clasificadorprioridad_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificadorprioridad_edit')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorPrioridadController::editAction',));
                    }
                    not_clasificadorprioridad_edit:

                    // clasificadorprioridad_update
                    if (preg_match('#^/clasificadorprioridad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_clasificadorprioridad_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificadorprioridad_update')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorPrioridadController::updateAction',));
                    }
                    not_clasificadorprioridad_update:

                    // clasificadorprioridad_delete
                    if (preg_match('#^/clasificadorprioridad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_clasificadorprioridad_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificadorprioridad_delete')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorPrioridadController::deleteAction',));
                    }
                    not_clasificadorprioridad_delete:

                }

                if (0 === strpos($pathinfo, '/clasificadore')) {
                    if (0 === strpos($pathinfo, '/clasificadorestado')) {
                        // clasificadorestado
                        if (rtrim($pathinfo, '/') === '/clasificadorestado') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_clasificadorestado;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'clasificadorestado');
                            }

                            return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEstadoController::indexAction',  '_route' => 'clasificadorestado',);
                        }
                        not_clasificadorestado:

                        // clasificadorestado_create
                        if ($pathinfo === '/clasificadorestado/') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_clasificadorestado_create;
                            }

                            return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEstadoController::createAction',  '_route' => 'clasificadorestado_create',);
                        }
                        not_clasificadorestado_create:

                        // clasificadorestado_new
                        if ($pathinfo === '/clasificadorestado/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_clasificadorestado_new;
                            }

                            return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEstadoController::newAction',  '_route' => 'clasificadorestado_new',);
                        }
                        not_clasificadorestado_new:

                        // clasificadorestado_show
                        if (preg_match('#^/clasificadorestado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_clasificadorestado_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificadorestado_show')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEstadoController::showAction',));
                        }
                        not_clasificadorestado_show:

                        // clasificadorestado_edit
                        if (preg_match('#^/clasificadorestado/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_clasificadorestado_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificadorestado_edit')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEstadoController::editAction',));
                        }
                        not_clasificadorestado_edit:

                        // clasificadorestado_update
                        if (preg_match('#^/clasificadorestado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_clasificadorestado_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificadorestado_update')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEstadoController::updateAction',));
                        }
                        not_clasificadorestado_update:

                        // clasificadorestado_delete
                        if (preg_match('#^/clasificadorestado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_clasificadorestado_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificadorestado_delete')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEstadoController::deleteAction',));
                        }
                        not_clasificadorestado_delete:

                        if (0 === strpos($pathinfo, '/clasificadorestadoproyecto')) {
                            // clasificadorestadoproyecto
                            if (rtrim($pathinfo, '/') === '/clasificadorestadoproyecto') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_clasificadorestadoproyecto;
                                }

                                if (substr($pathinfo, -1) !== '/') {
                                    return $this->redirect($pathinfo.'/', 'clasificadorestadoproyecto');
                                }

                                return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEstadoProyectoController::indexAction',  '_route' => 'clasificadorestadoproyecto',);
                            }
                            not_clasificadorestadoproyecto:

                            // clasificadorestadoproyecto_create
                            if ($pathinfo === '/clasificadorestadoproyecto/') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_clasificadorestadoproyecto_create;
                                }

                                return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEstadoProyectoController::createAction',  '_route' => 'clasificadorestadoproyecto_create',);
                            }
                            not_clasificadorestadoproyecto_create:

                            // clasificadorestadoproyecto_new
                            if ($pathinfo === '/clasificadorestadoproyecto/new') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_clasificadorestadoproyecto_new;
                                }

                                return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEstadoProyectoController::newAction',  '_route' => 'clasificadorestadoproyecto_new',);
                            }
                            not_clasificadorestadoproyecto_new:

                            // clasificadorestadoproyecto_show
                            if (preg_match('#^/clasificadorestadoproyecto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_clasificadorestadoproyecto_show;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificadorestadoproyecto_show')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEstadoProyectoController::showAction',));
                            }
                            not_clasificadorestadoproyecto_show:

                            // clasificadorestadoproyecto_edit
                            if (preg_match('#^/clasificadorestadoproyecto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_clasificadorestadoproyecto_edit;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificadorestadoproyecto_edit')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEstadoProyectoController::editAction',));
                            }
                            not_clasificadorestadoproyecto_edit:

                            // clasificadorestadoproyecto_update
                            if (preg_match('#^/clasificadorestadoproyecto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'PUT') {
                                    $allow[] = 'PUT';
                                    goto not_clasificadorestadoproyecto_update;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificadorestadoproyecto_update')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEstadoProyectoController::updateAction',));
                            }
                            not_clasificadorestadoproyecto_update:

                            // clasificadorestadoproyecto_delete
                            if (preg_match('#^/clasificadorestadoproyecto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'DELETE') {
                                    $allow[] = 'DELETE';
                                    goto not_clasificadorestadoproyecto_delete;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificadorestadoproyecto_delete')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEstadoProyectoController::deleteAction',));
                            }
                            not_clasificadorestadoproyecto_delete:

                        }

                    }

                    if (0 === strpos($pathinfo, '/clasificadoretapa')) {
                        // clasificadoretapa
                        if (rtrim($pathinfo, '/') === '/clasificadoretapa') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_clasificadoretapa;
                            }

                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'clasificadoretapa');
                            }

                            return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEtapaController::indexAction',  '_route' => 'clasificadoretapa',);
                        }
                        not_clasificadoretapa:

                        // clasificadoretapa_create
                        if ($pathinfo === '/clasificadoretapa/') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_clasificadoretapa_create;
                            }

                            return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEtapaController::createAction',  '_route' => 'clasificadoretapa_create',);
                        }
                        not_clasificadoretapa_create:

                        // clasificadoretapa_new
                        if ($pathinfo === '/clasificadoretapa/new') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_clasificadoretapa_new;
                            }

                            return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEtapaController::newAction',  '_route' => 'clasificadoretapa_new',);
                        }
                        not_clasificadoretapa_new:

                        // clasificadoretapa_show
                        if (preg_match('#^/clasificadoretapa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_clasificadoretapa_show;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificadoretapa_show')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEtapaController::showAction',));
                        }
                        not_clasificadoretapa_show:

                        // clasificadoretapa_edit
                        if (preg_match('#^/clasificadoretapa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_clasificadoretapa_edit;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificadoretapa_edit')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEtapaController::editAction',));
                        }
                        not_clasificadoretapa_edit:

                        // clasificadoretapa_update
                        if (preg_match('#^/clasificadoretapa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_clasificadoretapa_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificadoretapa_update')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEtapaController::updateAction',));
                        }
                        not_clasificadoretapa_update:

                        // clasificadoretapa_delete
                        if (preg_match('#^/clasificadoretapa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_clasificadoretapa_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'clasificadoretapa_delete')), array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ClasificadorEtapaController::deleteAction',));
                        }
                        not_clasificadoretapa_delete:

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/security')) {
            if (0 === strpos($pathinfo, '/security/usuario')) {
                // security_usuario
                if (rtrim($pathinfo, '/') === '/security/usuario') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'security_usuario');
                    }

                    return array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'security_usuario',);
                }

                // security_usuario_create
                if ($pathinfo === '/security/usuario/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_security_usuario_create;
                    }

                    return array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\UsuarioController::createAction',  '_route' => 'security_usuario_create',);
                }
                not_security_usuario_create:

                // security_usuario_new
                if ($pathinfo === '/security/usuario/new') {
                    return array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\UsuarioController::newAction',  '_route' => 'security_usuario_new',);
                }

                // security_usuario_show
                if (preg_match('#^/security/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'security_usuario_show')), array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\UsuarioController::showAction',));
                }

                // security_usuario_edit
                if (preg_match('#^/security/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'security_usuario_edit')), array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\UsuarioController::editAction',));
                }

                // security_usuario_update
                if (preg_match('#^/security/usuario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_security_usuario_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'security_usuario_update')), array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\UsuarioController::updateAction',));
                }
                not_security_usuario_update:

                // security_usuario_delete
                if (preg_match('#^/security/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_security_usuario_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'security_usuario_delete')), array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\UsuarioController::deleteAction',));
                }
                not_security_usuario_delete:

            }

            if (0 === strpos($pathinfo, '/security/ro')) {
                if (0 === strpos($pathinfo, '/security/role')) {
                    // role_manager
                    if (rtrim($pathinfo, '/') === '/security/role') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'role_manager');
                        }

                        return array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\RoleController::indexAction',  '_route' => 'role_manager',);
                    }

                    // role_add_path
                    if ($pathinfo === '/security/role/role/add/path') {
                        return array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\RoleController::addAction',  '_route' => 'role_add_path',);
                    }

                    // role_edit
                    if (preg_match('#^/security/role/(?P<role>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_edit')), array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\RoleController::editAction',));
                    }

                    // role_update
                    if (preg_match('#^/security/role/(?P<role>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_role_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_update')), array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\RoleController::updateAction',));
                    }
                    not_role_update:

                    if (0 === strpos($pathinfo, '/security/role/role')) {
                        // role_delete_path
                        if ($pathinfo === '/security/role/role/delete/path') {
                            return array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\RoleController::removeAction',  '_route' => 'role_delete_path',);
                        }

                        // role_new_el
                        if ($pathinfo === '/security/role/role/new/path') {
                            return array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\RoleController::addroleAction',  '_route' => 'role_new_el',);
                        }

                        // role_del_el
                        if ($pathinfo === '/security/role/role/del/path') {
                            return array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\RoleController::delroleAction',  '_route' => 'role_del_el',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/security/role/fetch/route')) {
                        // fetch_route_role
                        if ($pathinfo === '/security/role/fetch/route/role') {
                            return array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\RoleController::fetchRouteRoleAction',  '_route' => 'fetch_route_role',);
                        }

                        // fetch_route_new
                        if ($pathinfo === '/security/role/fetch/route/new') {
                            return array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\RoleController::fetchRouteNewAction',  '_route' => 'fetch_route_new',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/security/route')) {
                    // role_grants
                    if (rtrim($pathinfo, '/') === '/security/route') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'role_grants');
                        }

                        return array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\RouteController::routeAction',  '_route' => 'role_grants',);
                    }

                    // route_delete
                    if ($pathinfo === '/security/route/route/delete') {
                        return array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\RouteController::delRouteAction',  '_route' => 'route_delete',);
                    }

                    // flush_route
                    if ($pathinfo === '/security/route/flush/route') {
                        return array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\RouteController::generalFlushAction',  '_route' => 'flush_route',);
                    }

                    if (0 === strpos($pathinfo, '/security/route/role/route')) {
                        // role_route_add
                        if ($pathinfo === '/security/route/role/route/add') {
                            return array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\RouteController::roleToRouteAction',  '_route' => 'role_route_add',);
                        }

                        // role_route_delete
                        if ($pathinfo === '/security/route/role/route/delete') {
                            return array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\RouteController::unBindRoleAction',  '_route' => 'role_route_delete',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/security/aclrules')) {
                // aclrules
                if (rtrim($pathinfo, '/') === '/security/aclrules') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'aclrules');
                    }

                    return array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\AclRuleController::indexAction',  '_route' => 'aclrules',);
                }

                // aclrules_edit
                if (preg_match('#^/security/aclrules/(?P<entity>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aclrules_edit')), array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\AclRuleController::editAction',));
                }

                // aclrules_toggle
                if (preg_match('#^/security/aclrules/(?P<entity>[^/]++)/toggle$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'aclrules_toggle')), array (  '_controller' => 'HatueySoft\\SecurityBundle\\Controller\\AclRuleController::togglePermisionAction',));
                }

            }

            if (0 === strpos($pathinfo, '/security/profile')) {
                // fos_user_profile_show
                if (rtrim($pathinfo, '/') === '/security/profile') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_profile_show;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ($pathinfo === '/security/profile/edit') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_profile_edit;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ($pathinfo === '/security/profile/change-password') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_change_password;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
                }
                not_fos_user_change_password:

            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'HatueySoft\\TicketBundle\\Controller\\ProyectoController::proyectosAction',  '_route' => 'index',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
