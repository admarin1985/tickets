<?php

namespace Proxies\__CG__\HatueySoft\TicketBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Proyecto extends \HatueySoft\TicketBundle\Entity\Proyecto implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'id', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'nombre', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'nombreCorto', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'descripcion', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'fechaInicio', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'fechaFin', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'encargadoSoporte', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'prioridad', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'etapa', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'estado', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'empresa', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'usuarios');
        }

        return array('__isInitialized__', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'id', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'nombre', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'nombreCorto', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'descripcion', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'fechaInicio', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'fechaFin', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'encargadoSoporte', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'prioridad', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'etapa', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'estado', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'empresa', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Proyecto' . "\0" . 'usuarios');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Proyecto $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombreCorto($nombreCorto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreCorto', array($nombreCorto));

        return parent::setNombreCorto($nombreCorto);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreCorto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreCorto', array());

        return parent::getNombreCorto();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', array($descripcion));

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', array());

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaInicio($fechaInicio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaInicio', array($fechaInicio));

        return parent::setFechaInicio($fechaInicio);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaInicio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaInicio', array());

        return parent::getFechaInicio();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaFin($fechaFin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaFin', array($fechaFin));

        return parent::setFechaFin($fechaFin);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaFin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaFin', array());

        return parent::getFechaFin();
    }

    /**
     * {@inheritDoc}
     */
    public function setEncargadoSoporte(\HatueySoft\SecurityBundle\Entity\User $encargadoSoporte)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEncargadoSoporte', array($encargadoSoporte));

        return parent::setEncargadoSoporte($encargadoSoporte);
    }

    /**
     * {@inheritDoc}
     */
    public function getEncargadoSoporte()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEncargadoSoporte', array());

        return parent::getEncargadoSoporte();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrioridad(\HatueySoft\TicketBundle\Entity\ClasificadorPrioridad $prioridad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrioridad', array($prioridad));

        return parent::setPrioridad($prioridad);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrioridad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrioridad', array());

        return parent::getPrioridad();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtapa(\HatueySoft\TicketBundle\Entity\ClasificadorEtapa $etapa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtapa', array($etapa));

        return parent::setEtapa($etapa);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtapa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtapa', array());

        return parent::getEtapa();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado(\HatueySoft\TicketBundle\Entity\ClasificadorEstadoProyecto $estado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', array($estado));

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', array());

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmpresa(\HatueySoft\TicketBundle\Entity\Empresa $empresa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmpresa', array($empresa));

        return parent::setEmpresa($empresa);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmpresa()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmpresa', array());

        return parent::getEmpresa();
    }

    /**
     * {@inheritDoc}
     */
    public function addUsuario(\HatueySoft\SecurityBundle\Entity\User $usuarios)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUsuario', array($usuarios));

        return parent::addUsuario($usuarios);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUsuario(\HatueySoft\SecurityBundle\Entity\User $usuarios)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUsuario', array($usuarios));

        return parent::removeUsuario($usuarios);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuarios()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuarios', array());

        return parent::getUsuarios();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
