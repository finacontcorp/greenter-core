<?php
/**
 * Created by PhpStorm.
 * User: Giansalex
 * Date: 07/08/2017
 * Time: 23:01.
 */

namespace Greenter\Model\FormaPago;

/**
 * Class FormaPago.
 */
class FormaPago
{
  /**
   * @var string
   */
  private $condicion;

  /**
   * @var float
   */
  protected $mtoNetoPendientePago;

  /**
   * @var CuotaDetail[]
   */
  protected $details;
  
  /**
   * @return string
   */
  public function getCondicion()
  {
    return $this->condicion;
  }

  /**
   * @param string $condicion
   *
   * @return FormaPago
   */
  public function setCondicion($condicion)
  {
    $this->condicion = $condicion;

    return $this;
  }

  /**
   * @return float
   */
  public function getMtoNetoPendientePago()
  {
    return $this->mtoNetoPendientePago;
  }

  /**
   * @param float $mtoNetoPendientePago
   *
   * @return $this
   */
  public function setMtoNetoPendientePago($mtoNetoPendientePago)
  {
    $this->mtoNetoPendientePago = $mtoNetoPendientePago;

    return $this;
  }

  /**
   * @return CuotaDetail[]
   */
  public function getDetails()
  {
    return $this->details;
  }

  /**
   * @param CuotaDetail[] $details
   *
   * @return $this
   */
  public function setDetails($details)
  {
    $this->details = $details;

    return $this;
  }
}
