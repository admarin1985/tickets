<?php

namespace HatueySoft\TicketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClasificadorPrioridad
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="HatueySoft\TicketBundle\Entity\ClasificadorPrioridadRepository")
 */
class ClasificadorPrioridad
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
     * @ORM\Column(name="prioridad", type="string", length=255)
     */
    private $prioridad;


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
     * Set prioridad
     *
     * @param string $prioridad
     * @return ClasificadorPrioridad
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;

        return $this;
    }

    /**
     * Get prioridad
     *
     * @return string 
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }

    public function __toString()
    {
        return $this->prioridad;
    }
}
