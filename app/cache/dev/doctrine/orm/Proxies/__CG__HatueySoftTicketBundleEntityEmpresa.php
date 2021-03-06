<?php

namespace Proxies\__CG__\HatueySoft\TicketBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Empresa extends \HatueySoft\TicketBundle\Entity\Empresa implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Empresa' . "\0" . 'id', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Empresa' . "\0" . 'nombre', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Empresa' . "\0" . 'nombreCorto', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Empresa' . "\0" . 'direccion', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Empresa' . "\0" . 'clientePrincipal');
        }

        return array('__isInitialized__', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Empresa' . "\0" . 'id', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Empresa' . "\0" . 'nombre', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Empresa' . "\0" . 'nombreCorto', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Empresa' . "\0" . 'direccion', '' . "\0" . 'HatueySoft\\TicketBundle\\Entity\\Empresa' . "\0" . 'clientePrincipal');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Empresa $proxy) {
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
    public function setNombreCompleto($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreCompleto', array($nombre));

        return parent::setNombreCompleto($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreCompleto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreCompleto', array());

        return parent::getNombreCompleto();
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
    public function getNombreAbreviado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreAbreviado', array());

        return parent::getNombreAbreviado();
    }

    /**
     * {@inheritDoc}
     */
    public function setDireccion($direccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDireccion', array($direccion));

        return parent::setDireccion($direccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccion', array());

        return parent::getDireccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientePrincipal(\HatueySoft\SecurityBundle\Entity\User $clientePrincipal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientePrincipal', array($clientePrincipal));

        return parent::setClientePrincipal($clientePrincipal);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientePrincipal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientePrincipal', array());

        return parent::getClientePrincipal();
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
    public function getNombreCorto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreCorto', array());

        return parent::getNombreCorto();
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
