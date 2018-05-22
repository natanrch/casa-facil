<?php

class Usuario {
	protected $id;
	protected $nome;
	protected $email;
	protected $senha;

	public function __construct($nome, $email) {
		$this->nome = $nome;
		$this->email = $email;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getId() {
		return $this->id;
	}

	public function setSenha($senha) {
		$this->senha = $senha;
	}

	public function getSenha() {
		return $this->senha;
	}

	public function getNome() {
		return $this->nome;
	}

	public function getEmail() {
		return $this->email;
	}


}