<?php
/**
 * Created by PhpStorm.
 * User: Giansalex
 * Date: 07/08/2017
 * Time: 21:42.
 */

namespace Greenter\Model\Despatch;

/**
 * Class DespatchDetail.
 */
class DespatchDetail
{
    /**
     * @var string
     */
    private $codigo;
    /**
     * @var string
     */
    private $descripcion;
    /**
     * @var string
     */
    private $unidad;
    /**
     * @var float
     */
    private $cantidad;
    /**
     * Codigo de Producto - SUNAT.
     *
     * @var string
     */
    private $codProdSunat;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $codigoGTIN;

    /**
     * @var string
     */
    private $nameConcepto;

    /**
     * @var string
     */
    private $codigoConcepto;

    /**
     * @var string
     */
    private $partidaArencelaria;

    /**
     * @var string
     */
    private $indicadorNormalizado;

    /**
     * @var string
     */
    private $numDAMDS;

    /**
     * @var string
     */
    private $numSerieDAMDS;


  /**
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param string $codigo
     *
     * @return DespatchDetail
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param string $descripcion
     *
     * @return DespatchDetail
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * @return string
     */
    public function getUnidad()
    {
        return $this->unidad;
    }

    /**
     * @param string $unidad
     *
     * @return DespatchDetail
     */
    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * @return float
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * @param float $cantidad
     *
     * @return DespatchDetail
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * @return string
     */
    public function getCodProdSunat()
    {
        return $this->codProdSunat;
    }

    /**
     * @param string $codProdSunat
     *
     * @return DespatchDetail
     */
    public function setCodProdSunat($codProdSunat)
    {
        $this->codProdSunat = $codProdSunat;

        return $this;
    }

  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * @param string $name
   *
   * @return DespatchDetail
   */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * @return string
   */
  public function getCodigoGTIN()
  {
    return $this->codigoGTIN;
  }

  /**
   * @param string $codigoGTIN
   *
   * @return DespatchDetail
   */
  public function setCodigoGTIN($codigoGTIN)
  {
    $this->codigoGTIN = $codigoGTIN;

    return $this;
  }

  /**
   * @return string
   */
  public function getNameConcepto()
  {
    return $this->nameConcepto;
  }

  /**
   * @param string $nameConcepto
   *
   * @return DespatchDetail
   */
  public function setNameConcepto($nameConcepto)
  {
    $this->nameConcepto = $nameConcepto;

    return $this;
  }

  /**
   * @return string
   */
  public function getCodigoConcepto()
  {
    return $this->codigoConcepto;
  }

  /**
   * @param string $codigoConcepto
   *
   * @return DespatchDetail
   */
  public function setCodigoConcepto($codigoConcepto)
  {
    $this->codigoConcepto = $codigoConcepto;

    return $this;
  }

  /**
   * @return string
   */
  public function getPartidaArencelaria()
  {
    return $this->partidaArencelaria;
  }

  /**
   * @param string $partidaArencelaria
   *
   * @return DespatchDetail
   */
  public function setPartidaArencelaria($partidaArencelaria)
  {
    $this->partidaArencelaria = $partidaArencelaria;

    return $this;
  }

  /**
   * @return string
   */
  public function getIndicadorNormalizado()
  {
    return $this->indicadorNormalizado;
  }

  /**
   * @param string $indicadorNormalizado
   *
   * @return DespatchDetail
   */
  public function setIndicadorNormalizado($indicadorNormalizado)
  {
    $this->indicadorNormalizado = $indicadorNormalizado;

    return $this;
  }

  /**
   * @return string
   */
  public function getNumDAMDS()
  {
    return $this->numDAMDS;
  }

  /**
   * @param string $numDAMDS
   *
   * @return DespatchDetail
   */
  public function setNumDAMDS($numDAMDS)
  {
    $this->numDAMDS = $numDAMDS;

    return $this;
  }

  /**
   * @return string
   */
  public function getNumSerieDAMDS()
  {
    return $this->numSerieDAMDS;
  }

  /**
   * @param string $numSerieDAMDS
   *
   * @return DespatchDetail
   */
  public function setNumSerieDAMDS($numSerieDAMDS)
  {
    $this->numSerieDAMDS = $numSerieDAMDS;

    return $this;
  }
}
