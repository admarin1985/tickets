<?php

namespace HatueySoft\TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Respuesta
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="HatueySoft\TicketBundle\Entity\RespuestaRepository")
 */
class Respuesta
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
     * @ORM\Column(name="Respuesta", type="string", length=500)
     */
    private $Respuesta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @ORM\ManyToOne(targetEntity="\HatueySoft\SecurityBundle\Entity\User")
     * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     *
     */
    private $usuario;

    /**
     * @ORM\ManyToOne(targetEntity="\HatueySoft\TicketBundle\Entity\Ticket")
     * @ORM\JoinColumn(name="ticket_id", referencedColumnName="id")
     *
     */
    private $ticket;


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
     * Set Respuesta
     *
     * @param string $Respuesta
     * @return Respuesta
     */
    public function setRespuesta($Respuesta)
    {
        $this->Respuesta = $Respuesta;

        return $this;
    }

    /**
     * Get Respuesta
     *
     * @return string 
     */
    public function getRespuesta()
    {
        return $this->Respuesta;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Respuesta
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
     * Set usuario
     *
     * @param \HatueySoft\SecurityBundle\Entity\User $usuario
     * @return Respuesta
     */
    public function setUsuario(\HatueySoft\SecurityBundle\Entity\User $usuario = null)
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

    /**
     * Set ticket
     *
     * @param \HatueySoft\TicketBundle\Entity\Ticket $ticket
     * @return Respuesta
     */
    public function setTicket(\HatueySoft\TicketBundle\Entity\Ticket $ticket = null)
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Get ticket
     *
     * @return \HatueySoft\TicketBundle\Entity\Ticket 
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    public function __toString()
    {
        return $this->Respuesta;
    }
}
