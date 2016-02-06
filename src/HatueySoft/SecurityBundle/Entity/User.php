<?php

namespace HatueySoft\SecurityBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use HatueySoft\SecurityBundle\Validator\Constraints\UniqueSystemUserEmail;
use HatueySoft\SecurityBundle\Validator\Constraints\UniqueSystemUserUsername;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Buseta\BusesBundle\Entity\GrupoBuses;

/**
 * @author: firomero <firomerorom4@gmail.com>
 * @author: dundivet <dundivet@emailn.de>
 *
 * @ORM\Entity(repositoryClass="HatueySoft\SecurityBundle\Entity\UserRepository")
 * @ORM\Table(name="hatueysoft_security_user")
 * @UniqueEntity(fields={"username", "email"})
 * @UniqueSystemUserUsername()
 * @UniqueSystemUserEmail()
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $email;

    /**
     * @ORM\ManyToMany(targetEntity="HatueySoft\SecurityBundle\Entity\Group")
     * @ORM\JoinTable(name="hatueysoft_security_users_groups",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;

    /**
     * @ORM\ManyToMany(targetEntity="HatueySoft\TicketBundle\Entity\Proyecto")
     * @ORM\JoinTable(name="usuario_proyecto",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="proyecto_id", referencedColumnName="id")}
     * )
     */
    private $proyectos;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=64)
     * @Assert\NotBlank
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=64, nullable=true)
     */
    private $apellidos;

    /**
     * @var \HatueySoft\UploadBundle\Entity\UploadResources
     *
     * @ORM\OneToOne(targetEntity="HatueySoft\UploadBundle\Entity\UploadResources", cascade={"persist", "remove"})
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="pin", type="string", length=4, nullable=true)
     */
    private $pin;


    function __construct()
    {
        parent::__construct();

        $this->enabled = true;
        $this->proyectos = new \Doctrine\Common\Collections\ArrayCollection();
    }


    public function isActive()
    {
        return $this->locked == false;
    }

    public function setActive($value)
    {
        $this->locked = !$value;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * @param mixed $nombres
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }

    /**
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param string $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    /**
     * @return string
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * @param string $pin
     */
    public function setPin($pin)
    {
        $this->pin = $pin;
    }

    public function getNombreCompleto()
    {
        return sprintf('%s %s', $this->getNombres(), $this->getApellidos());
    }

    /**
     * Get proyectos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProyectos()
    {
        return $this->proyectos;
    }

    /**
     * Add proyecto
     *
     * @param \HatueySoft\TicketBundle\Entity\Proyecto $proyectos
     * @return User
     */
    public function addProyecto(\HatueySoft\TicketBundle\Entity\Proyecto $proyectos)
    {
        $this->proyectos[] = $proyectos;

        return $this;
    }

    /**
     * Remove proyectos
     *
     * @param \HatueySoft\TicketBundle\Entity\Proyecto $proyectos
     */
    public function removeUsuario(\HatueySoft\TicketBundle\Entity\Proyecto $proyectos)
    {
        $this->proyectos->removeElement($proyectos);
    }
}
