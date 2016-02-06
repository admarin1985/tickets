<?php

namespace HatueySoft\TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyecto
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="HatueySoft\TicketBundle\Entity\ProyectoRepository")
 */
class Proyecto
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
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="datetime")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="datetime")
     */
    private $fechaFin;

    /**
     * @ORM\ManyToOne(targetEntity="\HatueySoft\SecurityBundle\Entity\User")
     * @ORM\JoinColumn(name="encargado_soporte", referencedColumnName="id")
     *
     */
    private $encargadoSoporte;

    /**
     * @ORM\ManyToOne(targetEntity="\HatueySoft\TicketBundle\Entity\ClasificadorPrioridad")
     * @ORM\JoinColumn(name="prioridad_id", referencedColumnName="id")
     *
     */
    private $prioridad;

    /**
     * @ORM\ManyToOne(targetEntity="\HatueySoft\TicketBundle\Entity\ClasificadorEtapa")
     * @ORM\JoinColumn(name="etapa_id", referencedColumnName="id")
     *
     */
    private $etapa;

    /**
     * @ORM\ManyToOne(targetEntity="\HatueySoft\TicketBundle\Entity\ClasificadorEstadoProyecto")
     * @ORM\JoinColumn(name="estado_id", referencedColumnName="id")
     *
     */
    private $estado;

    /**
     * @ORM\ManyToOne(targetEntity="\HatueySoft\TicketBundle\Entity\Empresa")
     * @ORM\JoinColumn(name="empresa_id", referencedColumnName="id")
     *
     */
    private $empresa;

    /**
     * @ORM\ManyToMany(targetEntity="HatueySoft\SecurityBundle\Entity\User")
     * @ORM\JoinTable(name="usuario_proyecto",
     *      joinColumns={@ORM\JoinColumn(name="proyecto_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")}
     * )
     */
    private $usuarios;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Proyecto
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
     * Set nombreCorto
     *
     * @param string $nombreCorto
     * @return Proyecto
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
    public function getNombreCorto()
    {
        return $this->nombreCorto;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Proyecto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Proyecto
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return Proyecto
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set encargadoSoporte
     *
     * @param \HatueySoft\SecurityBundle\Entity\User $encargadoSoporte
     * @return Proyecto
     */
    public function setEncargadoSoporte(\HatueySoft\SecurityBundle\Entity\User $encargadoSoporte)
    {
        $this->encargadoSoporte = $encargadoSoporte;

        return $this;
    }

    /**
     * Get encargadoSoporte
     *
     * @return \HatueySoft\SecurityBundle\Entity\User
     */
    public function getEncargadoSoporte()
    {
        return $this->encargadoSoporte;
    }

    /**
     * Set prioridad
     *
     * @param \HatueySoft\TicketBundle\Entity\ClasificadorPrioridad $prioridad
     * @return Proyecto
     */
    public function setPrioridad(\HatueySoft\TicketBundle\Entity\ClasificadorPrioridad $prioridad)
    {
        $this->prioridad = $prioridad;

        return $this;
    }

    /**
     * Get prioridad
     *
     * @return \HatueySoft\TicketBundle\Entity\ClasificadorPrioridad
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    /**
     * Set etapa
     *
     * @param \HatueySoft\TicketBundle\Entity\ClasificadorEtapa $etapa
     * @return Proyecto
     */
    public function setEtapa(\HatueySoft\TicketBundle\Entity\ClasificadorEtapa $etapa)
    {
        $this->etapa = $etapa;

        return $this;
    }

    /**
     * Get etapa
     *
     * @return \HatueySoft\TicketBundle\Entity\ClasificadorEtapa
     */
    public function getEtapa()
    {
        return $this->etapa;
    }

    /**
     * Set estado
     *
     * @param \HatueySoft\TicketBundle\Entity\ClasificadorEstadoProyecto $etapa
     * @return Proyecto
     */
    public function setEstado(\HatueySoft\TicketBundle\Entity\ClasificadorEstadoProyecto $estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \HatueySoft\TicketBundle\Entity\ClasificadorEstadoProyecto
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set empresa
     *
     * @param \HatueySoft\TicketBundle\Entity\Empresa $empresa
     * @return Proyecto
     */
    public function setEmpresa(\HatueySoft\TicketBundle\Entity\Empresa $empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return \HatueySoft\TicketBundle\Entity\Empresa
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuarios = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add usuarios
     *
     * @param \HatueySoft\SecurityBundle\Entity\User $usuarios
     * @return Proyecto
     */
    public function addUsuario(\HatueySoft\SecurityBundle\Entity\User $usuarios)
    {
        $this->usuarios[] = $usuarios;

        return $this;
    }

    /**
     * Remove usuarios
     *
     * @param \HatueySoft\SecurityBundle\Entity\User $usuarios
     */
    public function removeUsuario(\HatueySoft\SecurityBundle\Entity\User $usuarios)
    {
        $this->usuarios->removeElement($usuarios);
    }

    /**
     * Get usuarios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }

    public function __toString()
    {
        return $this->nombre;
    }
}
