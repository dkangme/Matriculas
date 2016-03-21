<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Programa
 *
 * @ORM\Table(name="Programa", uniqueConstraints={@ORM\UniqueConstraint(name="codigo_UNIQUE", columns={"codigo"})})
 * @ORM\Entity
 */
class Programa
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
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=16, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="horario", type="string", length=45, nullable=true)
     */
    private $horario;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="sede", type="string", length=45, nullable=true)
     */
    private $sede;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=45, nullable=true)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="duracion", type="integer", nullable=true)
     */
    private $duracion;

    /**
     * @var integer
     *
     * @ORM\Column(name="duracion_titulo", type="integer", nullable=true)
     */
    private $duracionTitulo;



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
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Programa
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set horario
     *
     * @param string $horario
     *
     * @return Programa
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return string
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Programa
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
     * Set sede
     *
     * @param string $sede
     *
     * @return Programa
     */
    public function setSede($sede)
    {
        $this->sede = $sede;

        return $this;
    }

    /**
     * Get sede
     *
     * @return string
     */
    public function getSede()
    {
        return $this->sede;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Programa
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set duracion
     *
     * @param integer $duracion
     *
     * @return Programa
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return integer
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set duracionTitulo
     *
     * @param integer $duracionTitulo
     *
     * @return Programa
     */
    public function setDuracionTitulo($duracionTitulo)
    {
        $this->duracionTitulo = $duracionTitulo;

        return $this;
    }

    /**
     * Get duracionTitulo
     *
     * @return integer
     */
    public function getDuracionTitulo()
    {
        return $this->duracionTitulo;
    }
}
