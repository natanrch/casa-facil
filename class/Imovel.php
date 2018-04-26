<?php

class Imovel {
	protected $id;
	protected $proprietario;
	protected $endereco;
	protected $bairro;
	protected $area;
	protected $tipo;
	protected $valor;
	protected $imagem;
	protected $titulo;
	protected $descricao;
	//faltam demais atributos

	public function __construct($proprietario, $endereco, $bairro, $area, $tipo, $valor, $imagem, $titulo, $descricao) {
		$this->proprietario = $proprietario;
		$this->endereco = $endereco;
		$this->bairro = $bairro;
		$this->area = $area;
		$this->tipo = $tipo;
		$this->valor = $valor;
		$this->imagem = $imagem;
		$this->titulo = $titulo;
		$this->descricao = $descricao;
	}

	public function setId($id) {
	 	$this->id = $id;
	}

	public function getId() {
	 	return $this->id;
	}

	public function getProprietario() {
	 	return $this->proprietario;
	}

	public function getEndereco() {
		return $this->endereco;
	}

	public function getBairro() {
		return $this->bairro;
	}

	public function getArea() {
		return $this->area;
	}

	public function getTipo() {
		return $this->tipo;
	}

	public function getValor() {
		return $this->valor;
	}

	public function getImagem() {
		return $this->imagem;
	}

	public function getTitulo() {
		return $this->titulo;
	}

	public function getDescricao() {
		return $this->descricao;
	}
}

?>