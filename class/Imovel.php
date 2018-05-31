<?php

require_once 'class/Conexao.php';

class Imovel
{
	public $id;
	//public $proprietario; #nao ha necessidade agora
	public $endereco;
	public $bairro;
	public $area;
	public $tipo;
	public $valor;
	public $imagem;
	public $titulo;
	public $descricao;
	public $alugarOuVender;
	public $quartos;
	public $banheiros;
	public $garagem;

	public function __construct($id = false)
	{
		if ($id) {
			$this->id = $id;
			$this->carregar();
		}
	}

    public function carregar()
    {
        $conexao = Conexao::pegarConexao();
    	$query = "SELECT * FROM imoveis where id = ".$this->id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach ($lista as $linha) {
            $this->id = $linha['id'];
            $this->endereco = $linha['endereco'];
            $this->bairro = $linha['bairro'];
            $this->area = $linha['area'];
            $this->tipo = $linha['tipo'];
            $this->valor = $linha['valor'];
            $this->imagem = $linha['imagem'];
            $this->titulo = $linha['titulo'];
            $this->descricao = $linha['descricao'];
            $this->alugarOuVender = $linha['alugar_ou_vender'];
            $this->quartos = $linha['numero_de_quartos'];
            $this->banheiros = $linha['numero_de_banheiros'];
            $this->garagem = $linha['garagem'];
        }

    }

	//faltam demais atributos

	// public function __construct($proprietario, $endereco, $bairro, $area, $tipo, $valor, $imagem, $titulo, $descricao) {
	// 	$this->proprietario = $proprietario;
	// 	$this->endereco = $endereco;
	// 	$this->bairro = $bairro;
	// 	$this->area = $area;
	// 	$this->tipo = $tipo;
	// 	$this->valor = $valor;
	// 	$this->imagem = $imagem;
	// 	$this->titulo = $titulo;
	// 	$this->descricao = $descricao;
	// }

	// public function setId($id) {
	//  	$this->id = $id;
	// }

	// public function getId() {
	//  	return $this->id;
	// }

	// public function getProprietario() {
	//  	return $this->proprietario;
	// }

	// public function getEndereco() {
	// 	return $this->endereco;
	// }

	// public function getBairro() {
	// 	return $this->bairro;
	// }

	// public function getArea() {
	// 	return $this->area;
	// }

	// public function getTipo() {
	// 	return $this->tipo;
	// }

	// public function getValor() {
	// 	return $this->valor;
	// }

	// public function getImagem() {
	// 	return $this->imagem;
	// }

	// public function getTitulo() {
	// 	return $this->titulo;
	// }

	// public function getDescricao() {
	// 	return $this->descricao;
	// }
}
