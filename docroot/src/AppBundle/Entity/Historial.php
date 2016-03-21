<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historial
 *
 * @ORM\Table(name="Historial", indexes={@ORM\Index(name="fk_Historial_Programa_idx", columns={"Programa_id"}), @ORM\Index(name="fk_Historial_Alumno1_idx", columns={"Alumno_id"})})
 * @ORM\Entity
 */
class Historial
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
     * @ORM\Column(name="ano_ingreso", type="integer", nullable=true)
     */
    private $anoIngreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="semestre_ingreso", type="integer", nullable=true)
     */
    private $semestreIngreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="semestres_suspension", type="integer", nullable=true)
     */
    private $semestresSuspension;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estudiante_titulo", type="boolean", nullable=false)
     */
    private $estudianteTitulo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ano_matricula", type="integer", nullable=false)
     */
    private $anoMatricula = '2010';

    /**
     * @var \AppBundle\Entity\Alumno
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Alumno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Alumno_id", referencedColumnName="id")
     * })
     */
    private $alumno;

    /**
     * @var \AppBundle\Entity\Programa
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Programa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Programa_id", referencedColumnName="id")
     * })
     */
    private $programa;



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
     * Set anoIngreso
     *
     * @param integer $anoIngreso
     *
     * @return Historial
     */
    public function setAnoIngreso($anoIngreso)
    {
        $this->anoIngreso = $anoIngreso;

        return $this;
    }

    /**
     * Get anoIngreso
     *
     * @return integer
     */
    public function getAnoIngreso()
    {
        return $this->anoIngreso;
    }

    /**
     * Set semestreIngreso
     *
     * @param integer $semestreIngreso
     *
     * @return Historial
     */
    public function setSemestreIngreso($semestreIngreso)
    {
        $this->semestreIngreso = $semestreIngreso;

        return $this;
    }

    /**
     * Get semestreIngreso
     *
     * @return integer
     */
    public function getSemestreIngreso()
    {
        return $this->semestreIngreso;
    }

    /**
     * Set semestresSuspension
     *
     * @param integer $semestresSuspension
     *
     * @return Historial
     */
    public function setSemestresSuspension($semestresSuspension)
    {
        $this->semestresSuspension = $semestresSuspension;

        return $this;
    }

    /**
     * Get semestresSuspension
     *
     * @return integer
     */
    public function getSemestresSuspension()
    {
        return $this->semestresSuspension;
    }

    /**
     * Set estudianteTitulo
     *
     * @param boolean $estudianteTitulo
     *
     * @return Historial
     */
    public function setEstudianteTitulo($estudianteTitulo)
    {
        $this->estudianteTitulo = $estudianteTitulo;

        return $this;
    }

    /**
     * Get estudianteTitulo
     *
     * @return boolean
     */
    public function getEstudianteTitulo()
    {
        return $this->estudianteTitulo;
    }

    /**
     * Set anoMatricula
     *
     * @param integer $anoMatricula
     *
     * @return Historial
     */
    public function setAnoMatricula($anoMatricula)
    {
        $this->anoMatricula = $anoMatricula;

        return $this;
    }

    /**
     * Get anoMatricula
     *
     * @return integer
     */
    public function getAnoMatricula()
    {
        return $this->anoMatricula;
    }

    /**
     * Set alumno
     *
     * @param \AppBundle\Entity\Alumno $alumno
     *
     * @return Historial
     */
    public function setAlumno(\AppBundle\Entity\Alumno $alumno = null)
    {
        $this->alumno = $alumno;

        return $this;
    }

    /**
     * Get alumno
     *
     * @return \AppBundle\Entity\Alumno
     */
    public function getAlumno()
    {
        return $this->alumno;
    }

    /**
     * Set programa
     *
     * @param \AppBundle\Entity\Programa $programa
     *
     * @return Historial
     */
    public function setPrograma(\AppBundle\Entity\Programa $programa = null)
    {
        $this->programa = $programa;

        return $this;
    }

    /**
     * Get programa
     *
     * @return \AppBundle\Entity\Programa
     */
    public function getPrograma()
    {
        return $this->programa;
    }
}
