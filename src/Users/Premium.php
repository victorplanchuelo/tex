<?php

namespace TelefonoEroticoX\Users;

use TelefonoEroticoX\Profiles\Perfil;

class Premium
{
	protected $id;
	protected $perfiles = [];
	protected $estadoChat = 0;
	protected $estadoTelefono = 0;

	/**
	 * @param Perfil $perfil
	 */
	public function setPerfiles(Perfil $perfil) : void
	{
		array_push($this->perfiles, $perfil);
	}

	/**
	 * @return array(Perfil)
	 */
	public function getPerfiles() : array
	{
		return $this->perfiles;
	}

	/**
	 * @param int $idPerfil
	 * @return Perfil
	 */
	public function getPerfil($idPerfil) : Perfil
	{
		foreach ($this->perfiles as $perfil)
		{
			if($perfil->id === $idPerfil)
				return $perfil;
		}
	}

	/**
	 * @return int
	 */
	public function getEstadoChat(): int
	{
		return $this->estadoChat;
	}

	/**
	 * @param int $estadoChat
	 */
	public function setEstadoChat(int $estadoChat): void
	{
		$this->estadoChat = $estadoChat;
	}

	/**
	 * @return int
	 */
	public function getEstadoTelefono(): int
	{
		return $this->estadoTelefono;
	}

	/**
	 * @param int $estadoTelefono
	 */
	public function setEstadoTelefono(int $estadoTelefono): void
	{
		$this->estadoTelefono = $estadoTelefono;
	}


}