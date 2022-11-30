<?php
/**
 * Created by PhpStorm.
 * User: Giansalex
 * Date: 07/08/2017
 * Time: 23:56.
 */

namespace Greenter\Model\Despatch;

/**
 * Class Direction.
 */
class Direction
{
    /**
     * @var string
     */
    private $ubigueo;

    /**
     * Direccion completa y detallada.
     *
     * @var string
     */
    private $direccion;

  /**
   * @var string
   */
  private $numRucAsociado;

  /**
   * @var string
   */
  private $codigoEstablecimientoPunto;

  /**
   * @var string
   */
  private $longitud;

  /**
   * @var string
   */
  private $latitud;

    /**
     * Direction constructor.
     *
     * @param string $ubigueo
     * @param string $direccion
     */
    public function __construct($ubigueo, $direccion, $numRucAsociado = null, $codigoEstablecimientoPunto = null, $longitud = null, $latitud = null)
    {
        $this->ubigueo = $ubigueo;
        $this->direccion = $direccion;
        $this->numRucAsociado = $numRucAsociado;
        $this->codigoEstablecimientoPunto = $codigoEstablecimientoPunto;
        $this->longitud = $longitud;
        $this->latitud = $latitud;
    }

    /**
     * @return string
     */
    public function getUbigueo()
    {
        return $this->ubigueo;
    }

    /**
     * @param string $ubigueo
     *
     * @return Direction
     */
    public function setUbigueo($ubigueo)
    {
        $this->ubigueo = $ubigueo;

        return $this;
    }

    /**
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param string $direccion
     *
     * @return Direction
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }



  /**
   * @return string
   */
  public function getNumRucAsociado()
  {
    return $this->numRucAsociado;
  }

  /**
   * @param string $numRucAsociado
   *
   * @return Direction
   */
  public function setNumRucAsociado($numRucAsociado)
  {
    $this->numRucAsociado = $numRucAsociado;

    return $this;
  }

  /**
   * @return string
   */
  public function getCodigoEstablecimientoPunto()
  {
    return $this->codigoEstablecimientoPunto;
  }

  /**
   * @param string $codigoEstablecimientoPunto
   *
   * @return Direction
   */
  public function setCodigoEstablecimientoPunto($codigoEstablecimientoPunto)
  {
    $this->codigoEstablecimientoPunto = $codigoEstablecimientoPunto;

    return $this;
  }

  /**
   * @return string
   */
  public function getLongitud()
  {
    return $this->longitud;
  }

  /**
   * @param string $longitud
   *
   * @return Direction
   */
  public function setLongitud($longitud)
  {
    $this->longitud = $longitud;

    return $this;
  }

  /**
   * @return string
   */
  public function getLatitud()
  {
    return $this->latitud;
  }

  /**
   * @param string $latitud
   *
   * @return Direction
   */
  public function setLatitud($latitud)
  {
    $this->latitud = $latitud;

    return $this;
  }
}
