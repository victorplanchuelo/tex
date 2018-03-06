<?php
/**
 * Created by PhpStorm.
 * User: victorplanchuelo
 * Date: 1/3/18
 * Time: 14:36
 */

namespace TelefonoEroticoX\Profiles;


class Perfil
{
	protected $id;
	protected $foto;
	protected $descripcion;
	protected $ciudad;
	protected $provincia;

	/**
	 * @return mixed
	 */
	public function getFoto()
	{
		return $this->foto;
	}

	/**
	 * @param mixed $foto
	 */
	public function setFoto($foto): void
	{
		$this->foto = $foto;
	}

	/**
	 * @return mixed
	 */
	public function getDescripcion()
	{
		return $this->descripcion;
	}

	/**
	 * @param mixed $descripcion
	 */
	public function setDescripcion($descripcion): void
	{
		$this->descripcion = $descripcion;
	}

	/**
	 * @return mixed
	 */
	public function getCiudad()
	{
		return $this->ciudad;
	}

	/**
	 * @param mixed $ciudad
	 */
	public function setCiudad($ciudad): void
	{
		$this->ciudad = $ciudad;
	}

	/**
	 * @return mixed
	 */
	public function getProvincia()
	{
		return $this->provincia;
	}

	/**
	 * @param mixed $provincia
	 */
	public function setProvincia($provincia): void
	{
		$this->provincia = $provincia;
	}


}