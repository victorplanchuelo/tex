<?php

namespace TelefonoEroticoX\Users;


class User
{
	protected $telefono;
	protected $pin;
	protected $id;

	public function __construct()
	{
	}

	/**
	 * @return mixed
	 */
	public  function getTelefono()
	{
		return $this->telefono;
	}

	/**
	 * @param mixed $telefono
	 */
	public function setTelefono($telefono): void
	{
		$this->telefono = $telefono;
	}

	/**
	 * @return mixed
	 */
	public function getPin()
	{
		return $this->pin;
	}

	/**
	 * @param mixed $pin
	 */
	public function setPin($pin): void
	{
		$this->pin = $pin;
	}
}