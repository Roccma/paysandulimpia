<?php 

class Usuario{
	private $ci;
	private $contraseña;
	private $nombre;
	private $apellido;
	private $email;
	private $fotoperfil;
	private $funcionario;
	//private $enviarcorreo;

	/* Getters */
	public function getCi(){
		return $this->ci;
	}

	public function getContraseña(){
		return $this->contraseña;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function getApellido(){
		return $this->apellido;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getFotoperfil(){
		return $this->fotoperfil;
	}

	public function getFuncionario(){
		return $this->funcionario;
	}

	public function getEnviarcorreo(){
		return $this->enviarcorreo;
	}

	/* Setters */

	public function setCi($ci){
		$this->ci = $ci;
	}

	public function setContraseña($psw){
		$this->contraseña = $psw;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setFotoperfil($fotoperfil){
		$this->fotoperfil = $fotoperfil;
	}

	public function setFuncionario($funcionario){
		$this->funcionario = $funcionario;
	}

} 

?>