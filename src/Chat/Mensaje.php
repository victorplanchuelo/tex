<?php

namespace TelefonoEroticoX\Chat;


class Mensaje
{
	protected $id;
	protected $fecha;
	protected $texto;
	protected $origen;
	protected $destino;


	public function __construct()
	{
	}


	/**
	 * @return mixed
	 */
	public function getFecha()
	{
		return $this->fecha;
	}

	/**
	 * @param mixed $fecha
	 */
	public function setFecha($fecha): void
	{
		$this->fecha = $fecha;
	}

	/**
	 * @return mixed
	 */
	public function getTexto()
	{
		return $this->texto;
	}

	/**
	 * @param mixed $texto
	 */
	public function setTexto($texto): void
	{
		$this->texto = $texto;
	}

	/**
	 * @return mixed
	 */
	public function getOrigen()
	{
		return $this->origen;
	}

	/**
	 * @param mixed $origen
	 */
	public function setOrigen($origen): void
	{
		$this->origen = $origen;
	}

	/**
	 * @return mixed
	 */
	public function getDestino()
	{
		return $this->destino;
	}

	/**
	 * @param mixed $destino
	 */
	public function setDestino($destino): void
	{
		$this->destino = $destino;
	}


}