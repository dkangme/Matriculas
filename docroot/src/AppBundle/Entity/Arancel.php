<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arancel
 *
 * @ORM\Table(name="Arancel", indexes={@ORM\Index(name="fk_Arancel_Programa1_idx", columns={"Programa_id"})})
 * @ORM\Entity
 */
class Arancel
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
     * @ORM\Column(name="ano", type="integer", nullable=true)
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="valor_matricula", type="integer", nullable=true)
     */
    private $valorMatricula;

    /**
     * @var integer
     *
     * @ORM\Column(name="arancel", type="integer", nullable=true)
     */
    private $arancel;

    /**
     * @var integer
     *
     * @ORM\Column(name="costo_titulo", type="integer", nullable=true)
     */
    private $costoTitulo;

    /**
     * @var integer
     *
     * @ORM\Column(name="costo_diploma", type="integer", nullable=true)
     */
    private $costoDiploma;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=512, nullable=true)
     */
    private $observaciones;

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
     * Set ano
     *
     * @param integer $ano
     *
     * @return Arancel
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set valorMatricula
     *
     * @param integer $valorMatricula
     *
     * @return Arancel
     */
    public function setValorMatricula($valorMatricula)
    {
        $this->valorMatricula = $valorMatricula;

        return $this;
    }

    /**
     * Get valorMatricula
     *
     * @return integer
     */
    public function getValorMatricula()
    {
        return $this->valorMatricula;
    }

    /**
     * Set arancel
     *
     * @param integer $arancel
     *
     * @return Arancel
     */
    public function setArancel($arancel)
    {
        $this->arancel = $arancel;

        return $this;
    }

    /**
     * Get arancel
     *
     * @return integer
     */
    public function getArancel()
    {
        return $this->arancel;
    }

    /**
     * Set costoTitulo
     *
     * @param integer $costoTitulo
     *
     * @return Arancel
     */
    public function setCostoTitulo($costoTitulo)
    {
        $this->costoTitulo = $costoTitulo;

        return $this;
    }

    /**
     * Get costoTitulo
     *
     * @return integer
     */
    public function getCostoTitulo()
    {
        return $this->costoTitulo;
    }

    /**
     * Set costoDiploma
     *
     * @param integer $costoDiploma
     *
     * @return Arancel
     */
    public function setCostoDiploma($costoDiploma)
    {
        $this->costoDiploma = $costoDiploma;

        return $this;
    }

    /**
     * Get costoDiploma
     *
     * @return integer
     */
    public function getCostoDiploma()
    {
        return $this->costoDiploma;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Arancel
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set programa
     *
     * @param \AppBundle\Entity\Programa $programa
     *
     * @return Arancel
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
