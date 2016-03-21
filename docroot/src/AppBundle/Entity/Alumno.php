<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumno
 *
 * @ORM\Table(name="Alumno", uniqueConstraints={@ORM\UniqueConstraint(name="rut_UNIQUE", columns={"rut"})})
 * @ORM\Entity
 */
class Alumno
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="rut", type="integer", nullable=false)
     */
    private $rut;

    /**
     * @var string
     *
     * @ORM\Column(name="apep_paterno", type="string", length=45, nullable=true)
     */
    private $apepPaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="apep_materno", type="string", length=45, nullable=true)
     */
    private $apepMaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=45, nullable=true)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1, nullable=true)
     */
    private $sexo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="date", nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="nacionalidad", type="string", length=45, nullable=true)
     */
    private $nacionalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_pasaporte", type="string", length=45, nullable=true)
     */
    private $numeroPasaporte;



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
     * Set rut
     *
     * @param integer $rut
     *
     * @return Alumno
     */
    public function setRut($rut)
    {
        $this->rut = $rut;

        return $this;
    }

    /**
     * Get rut
     *
     * @return integer
     */
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set apepPaterno
     *
     * @param string $apepPaterno
     *
     * @return Alumno
     */
    public function setApepPaterno($apepPaterno)
    {
        $this->apepPaterno = $apepPaterno;

        return $this;
    }

    /**
     * Get apepPaterno
     *
     * @return string
     */
    public function getApepPaterno()
    {
        return $this->apepPaterno;
    }

    /**
     * Set apepMaterno
     *
     * @param string $apepMaterno
     *
     * @return Alumno
     */
    public function setApepMaterno($apepMaterno)
    {
        $this->apepMaterno = $apepMaterno;

        return $this;
    }

    /**
     * Get apepMaterno
     *
     * @return string
     */
    public function getApepMaterno()
    {
        return $this->apepMaterno;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Alumno
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Alumno
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return Alumno
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set nacionalidad
     *
     * @param string $nacionalidad
     *
     * @return Alumno
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    /**
     * Get nacionalidad
     *
     * @return string
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * Set numeroPasaporte
     *
     * @param string $numeroPasaporte
     *
     * @return Alumno
     */
    public function setNumeroPasaporte($numeroPasaporte)
    {
        $this->numeroPasaporte = $numeroPasaporte;

        return $this;
    }

    /**
     * Get numeroPasaporte
     *
     * @return string
     */
    public function getNumeroPasaporte()
    {
        return $this->numeroPasaporte;
    }
}
