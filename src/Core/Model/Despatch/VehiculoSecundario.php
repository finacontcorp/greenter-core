<?php
/**
 * Created by PhpStorm.
 * User: Giansalex
 * Date: 07/08/2017
 * Time: 21:42.
 */

namespace Greenter\Model\Despatch;

/**
 * Class VehiculoSecundario.
 */
class VehiculoSecundario
{

  /**
   * Veiculo del numero placa.
   *
   * @var string
   */
  private $numPlacaVehiculo;

  /**
   * Veiculo del Tarjeta de Circulacion.
   *
   * @var string
   */
  private $tarjetaUnicaCirculacionVehicular;

  /**
   * Veiculo del Entidad Emisora.
   *
   * @var string
   */
  private $codigoEntidadEmisora;

  /**
   * Veiculo del Especial.
   *
   * @var string
   */
  private $entidadEmidAutoEspecial;

  /**
   * @return string
   */
  public function getNumPlacaVehiculo()
  {
    return $this->numPlacaVehiculo;
  }

  /**
   * @param string $numPlacaVehiculo
   *
   * @return Shipment
   */
  public function setNumPlacaVehiculo($numPlacaVehiculo)
  {
    $this->numPlacaVehiculo = $numPlacaVehiculo;

    return $this;
  }

  /**
   * @return string
   */
  public function getTarjetaUnicaCirculacionVehicular()
  {
    return $this->tarjetaUnicaCirculacionVehicular;
  }

  /**
   * @param string $tarjetaUnicaCirculacionVehicular
   *
   * @return Shipment
   */
  public function setTarjetaUnicaCirculacionVehicular($tarjetaUnicaCirculacionVehicular)
  {
    $this->tarjetaUnicaCirculacionVehicular = $tarjetaUnicaCirculacionVehicular;

    return $this;
  }

  /**
   * @return string
   */
  public function getCodigoEntidadEmisora()
  {
    return $this->codigoEntidadEmisora;
  }

  /**
   * @param string $codigoEntidadEmisora
   *
   * @return Shipment
   */
  public function setCodigoEntidadEmisora($codigoEntidadEmisora)
  {
    $this->codigoEntidadEmisora = $codigoEntidadEmisora;

    return $this;
  }

  /**
   * @return string
   */
  public function getEntidadEmidAutoEspecial()
  {
    return $this->entidadEmidAutoEspecial;
  }

  /**
   * @param string $entidadEmidAutoEspecial
   *
   * @return Shipment
   */
  public function setEntidadEmidAutoEspecial($entidadEmidAutoEspecial)
  {
    $this->entidadEmidAutoEspecial = $entidadEmidAutoEspecial;

    return $this;
  }
}
