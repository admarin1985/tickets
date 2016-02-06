<?php

namespace HatueySoft\TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Empresa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_corto", type="string", length=50)
     */
    private $nombreCorto;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @ORM\ManyToOne(targetEntity="\HatueySoft\SecurityBundle\Entity\User")
     * @ORM\JoinColumn(name="cliente_principal", referencedColumnName="id")
     *
     */
    private $clientePrincipal;

     /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreCompleto
     *
     * @param string $nombreCompleto
     * @return Empresa
     */
    public function setNombreCompleto($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombreCompleto()
    {
        return $this->nombre;
    }

    /**
     * Set nombreCorto
     *
     * @param string $nombreCorto
     * @return Empresa
     */
    public function setNombreCorto($nombreCorto)
    {
        $this->nombreCorto = $nombreCorto;

        return $this;
    }

    /**
     * Get nombreCorto
     *
     * @return string 
     */
    public function getNombreAbreviado()
    {
        return $this->nombreCorto;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Empresa
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set clientePrincipal
     *
     * @param \HatueySoft\SecurityBundle\Entity\User $clientePrincipal
     * @return Empresa
     */
    public function setClientePrincipal(\HatueySoft\SecurityBundle\Entity\User $clientePrincipal)
    {
        $this->clientePrincipal = $clientePrincipal;

        return $this;
    }

    /**
     * Get clientePrincipal
     *
     * @return integer 
     */
    public function getClientePrincipal()
    {
        return $this->clientePrincipal;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Empresa
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get nombreCorto
     *
     * @return string 
     */
    public function getNombreCorto()
    {
        return $this->nombreCorto;
    }

    public function __toString()
    {
        return $this->nombre;
    }
}
