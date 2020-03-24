<?php
/**
 * Created by PhpStorm.
 * User: Giansalex
 * Date: 07/08/2017
 * Time: 23:01.
 */

namespace Greenter\Model\Sale;

/**
 * Class Transport.
 */
class DetractionTransport
{
	/**
	 * @var string
	 */
	private $destinoUbigueo;
	
	/**
	 * @var string
	 */
	private $destinoDireccion;
	
	/**
	 * @var string
	 */
	private $detalle;
	
	/**
	 * @var string
	 */
	private $origenUbigueo;
	
	/**
	 * @var string
	 */
	private $origenDireccion;
	
	/**
	 * @var float
	 */
	protected $mtoImpServicio;
	
	/**
	 * @var float
	 */
	protected $mtoBaseCargaEfectiva;
	
	/**
	 * @var float
	 */
	protected $mtoBaseCum;
	
	/**
	 * @var string
	 */
	private $descripcionTramo;
	
	/**
	 * @var float
	 */
	protected $mtoBaseCargaEfectivaOriginal;
	
	/**
	 * @var string
	 */
	private $configuracionVehicular;
	
	/**
	 * @var float
	 */
	protected $mtoReferencialTM;
	
	/**
	 * @var string
	 */
	private $cargaUtilTM;
	
	/**
	 * @var string
	 */
	private $cargaEfectivaTM;
	
	/**
	 * @return string
	 */
	public function getDestinoUbigueo()
	{
		return $this->destinoUbigueo;
	}
	
	/**
	 * @param string $destinoUbigueo
	 *
	 * @return Transport
	 */
	public function setDestinoUbigueo($destinoUbigueo)
	{
		$this->destinoUbigueo = $destinoUbigueo;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getDestinoDireccion()
	{
		return $this->destinoDireccion;
	}
	
	/**
	 * @param string $destinoDireccion
	 *
	 * @return Transport
	 */
	public function setDestinoDireccion($destinoDireccion)
	{
		$this->destinoDireccion = $destinoDireccion;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getDetalle()
	{
		return $this->detalle;
	}
	
	/**
	 * @param string $detalle
	 *
	 * @return Transport
	 */
	public function setDetalle($detalle)
	{
		$this->detalle = $detalle;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getOrigenUbigueo()
	{
		return $this->origenUbigueo;
	}
	
	/**
	 * @param string $origenUbigueo
	 *
	 * @return Transport
	 */
	public function setOrigenUbigueo($origenUbigueo)
	{
		$this->origenUbigueo = $origenUbigueo;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getOrigenDireccion()
	{
		return $this->origenDireccion;
	}
	
	/**
	 * @param string $origenDireccion
	 *
	 * @return Transport
	 */
	public function setOrigenDireccion($origenDireccion)
	{
		$this->origenDireccion = $origenDireccion;
		
		return $this;
	}
	
	/**
	 * @return float
	 */
	public function getMtoImpServicio()
	{
		return $this->mtoImpServicio;
	}
	
	/**
	 * @param float $mtoImpServicio
	 *
	 * @return $this
	 */
	public function setMtoImpServicio($mtoImpServicio)
	{
		$this->mtoImpServicio = $mtoImpServicio;
		
		return $this;
	}
	
	/**
	 * @return float
	 */
	public function getMtoBaseCargaEfectiva()
	{
		return $this->mtoBaseCargaEfectiva;
	}
	
	/**
	 * @param float $mtoBaseCargaEfectiva
	 *
	 * @return $this
	 */
	public function setMtoBaseCargaEfectiva($mtoBaseCargaEfectiva)
	{
		$this->mtoBaseCargaEfectiva = $mtoBaseCargaEfectiva;
		
		return $this;
	}
	
	/**
	 * @return float
	 */
	public function getMtoBaseCum()
	{
		return $this->mtoBaseCum;
	}
	
	/**
	 * @param float $mtoBaseCum
	 *
	 * @return $this
	 */
	public function setMtoBaseCum($mtoBaseCum)
	{
		$this->mtoBaseCum = $mtoBaseCum;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getDescripcionTramo()
	{
		return $this->descripcionTramo;
	}
	
	/**
	 * @param string $descripcionTramo
	 *
	 * @return Transport
	 */
	public function setDescripcionTramo($descripcionTramo)
	{
		$this->descripcionTramo = $descripcionTramo;
		
		return $this;
	}
	
	/**
	 * @return float
	 */
	public function getMtoBaseCargaEfectivaOriginal()
	{
		return $this->mtoBaseCargaEfectivaOriginal;
	}
	
	/**
	 * @param float $mtoBaseCargaEfectivaOriginal
	 *
	 * @return $this
	 */
	public function setMtoBaseCargaEfectivaOriginal($mtoBaseCargaEfectivaOriginal)
	{
		$this->mtoBaseCargaEfectivaOriginal = $mtoBaseCargaEfectivaOriginal;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getConfiguracionVehicular()
	{
		return $this->configuracionVehicular;
	}
	
	/**
	 * @param string $configuracionVehicular
	 *
	 * @return Transport
	 */
	public function setConfiguracionVehicular($configuracionVehicular)
	{
		$this->configuracionVehicular = $configuracionVehicular;
		
		return $this;
	}
	
	/**
	 * @return float
	 */
	public function getMtoReferencialTM()
	{
		return $this->mtoReferencialTM;
	}
	
	/**
	 * @param float $mtoReferencialTM
	 *
	 * @return $this
	 */
	public function setMtoReferencialTM($mtoReferencialTM)
	{
		$this->mtoReferencialTM = $mtoReferencialTM;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getCargaUtilTM()
	{
		return $this->cargaUtilTM;
	}
	
	/**
	 * @param string $cargaUtilTM
	 *
	 * @return Transport
	 */
	public function setCargaUtilTM($cargaUtilTM)
	{
		$this->cargaUtilTM = $cargaUtilTM;
		
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getCargaEfectivaTM()
	{
		return $this->cargaEfectivaTM;
	}
	
	/**
	 * @param string $cargaEfectivaTM
	 *
	 * @return Transport
	 */
	public function setCargaEfectivaTM($cargaEfectivaTM)
	{
		$this->cargaEfectivaTM = $cargaEfectivaTM;
		
		return $this;
	}
}
