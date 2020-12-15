<?php
/**
 * Created by PhpStorm.
 * User: Giansalex
 * Date: 07/08/2017
 * Time: 23:01.
 */

namespace Greenter\Model\FormaPago;

use DateTimeInterface;

/**
 * Class CuotaDetail.
 */
class CuotaDetail
{
  /**
   * @var string
   */
  private $cuotaFormato;

  /**
   * @var float
   */
  protected $mtoPagoUnicoCuotas;

  /**
   * @var DateTimeInterface
   */
  protected $fechaVencimiento;
  
  /**
   * @return string
   */
  public function getCuotaFormato()
  {
    return $this->cuotaFormato;
  }

  /**
   * @param string $cuotaFormato
   *
   * @return CuotaDetail
   */
  public function setCuotaFormato($cuotaFormato)
  {
    $this->cuotaFormato = $cuotaFormato;

    return $this;
  }

  /**
   * @return float
   */
  public function getMtoPagoUnicoCuotas()
  {
    return $this->mtoPagoUnicoCuotas;
  }

  /**
   * @param float $mtoPagoUnicoCuotas
   *
   * @return $this
   */
  public function setMtoPagoUnicoCuotas($mtoPagoUnicoCuotas)
  {
    $this->mtoPagoUnicoCuotas = $mtoPagoUnicoCuotas;

    return $this;
  }

  /**
   * @return DateTimeInterface
   */
  public function getFechaVencimiento()
  {
    return $this->fechaVencimiento;
  }

  /**
   * @param DateTimeInterface $fechaVencimiento
   *
   * @return $this
   */
  public function setFechaVencimiento(DateTimeInterface $fechaVencimiento)
  {
    $this->fechaVencimiento = $fechaVencimiento;

    return $this;
  }
}
