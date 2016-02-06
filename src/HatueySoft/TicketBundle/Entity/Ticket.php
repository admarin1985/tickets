<?php

namespace HatueySoft\TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="HatueySoft\TicketBundle\Entity\TicketRepository")
 */
class Ticket
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
     * @ORM\Column(name="tema", type="string", length=255)
     */
    private $tema;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=500)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @ORM\ManyToOne(targetEntity="\HatueySoft\TicketBundle\Entity\ClasificadorTicket")
     * @ORM\JoinColumn(name="clasificador_ticket", referencedColumnName="id")
     *
     */
    private $clasificador;

    /**
     * @ORM\ManyToOne(targetEntity="\HatueySoft\TicketBundle\Entity\ClasificadorPrioridad")
     * @ORM\JoinColumn(name="prioridad_id", referencedColumnName="id")
     *
     */
    private $prioridad;

    /**
     * @ORM\ManyToOne(targetEntity="\HatueySoft\TicketBundle\Entity\ClasificadorEstado")
     * @ORM\JoinColumn(name="estado_ticket", referencedColumnName="id")
     *
     */
    private $estado;

    /**
     * @ORM\ManyToOne(targetEntity="\HatueySoft\TicketBundle\Entity\Proyecto")
     * @ORM\JoinColumn(name="proyecto_id", referencedColumnName="id")
     *
     */
    private $proyecto;

    /**
     * @ORM\ManyToOne(targetEntity="\HatueySoft\SecurityBundle\Entity\User")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     *
     */
    private $usuario;


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
     * Set tema
     *
     * @param string $tema
     * @return Ticket
     */
    public function setTema($tema)
    {
        $this->tema = $tema;

        return $this;
    }

    /**
     * Get tema
     *
     * @return string 
     */
    public function getTema()
    {
        return $this->tema;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Ticket
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Ticket
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set clasificador
     *
     * @param \HatueySoft\TicketBundle\Entity\ClasificadorTicket $clasificador
     * @return Ticket
     */
    public function setClasificador(\HatueySoft\TicketBundle\Entity\ClasificadorTicket $clasificador)
    {
        $this->clasificador = $clasificador;

        return $this;
    }

    /**
     * Get clasificador
     *
     * @return \HatueySoft\TicketBundle\Entity\ClasificadorTicket
     */
    public function getClasificador()
    {
        return $this->clasificador;
    }

    /**
     * Set prioridad
     *
     * @param \HatueySoft\TicketBundle\Entity\ClasificadorPrioridad $prioridad
     * @return Ticket
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
     * Set estado
     *
     * @param \HatueySoft\TicketBundle\Entity\ClasificadorEstado $estado
     * @return Ticket
     */
    public function setEstado(\HatueySoft\TicketBundle\Entity\ClasificadorEstado $estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return \HatueySoft\TicketBundle\Entity\ClasificadorEstado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set proyecto
     *
     * @param \HatueySoft\TicketBundle\Entity\Proyecto $proyecto
     * @return Ticket
     */
    public function setProyecto(\HatueySoft\TicketBundle\Entity\Proyecto $proyecto)
    {
        $this->proyecto = $proyecto;

        return $this;
    }

    /**
     * Get proyecto
     *
     * @return \HatueySoft\TicketBundle\Entity\Proyecto
     */
    public function getProyecto()
    {
        return $this->proyecto;
    }

    /**
     * Set usuario
     *
     * @param \HatueySoft\SecurityBundle\Entity\User $usuario
     * @return Ticket
     */
    public function setUsuario(\HatueySoft\SecurityBundle\Entity\User $usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \HatueySoft\SecurityBundle\Entity\User
     */
    public function getUsuario()
    {
        return $this->usuario;
    }


    public  function __toString()
    {
        return $this->tema;
    }
}
