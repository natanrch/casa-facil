<?php

require_once 'class/Conexao.php';

class Usuario
{
	public $id;
	public $nome;
	public $email;
	public $senha;

	function logar($email)
	{
		$conexao = Conexao::pegarConexao();
    	$query = "SELECT * FROM usuarios where email = '".$email."'";
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach ($lista as $l) {
            $this->id = $l['id'];
            $this->email = $l['email'];
            $this->senha = $l['senha'];
            $this->nome = $l['nome'];
        }
	}


	public function inserir()
	{
		$query = "INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES 
		(NULL, 
		'".$this->nome."', 
		'".$this->email."', 
		'".$this->senha."')";
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);

	}

	// public function __construct($nome, $email) {
	// 	$this->nome = $nome;
	// 	$this->email = $email;
	// }

	// public function setId($id) {
	// 	$this->id = $id;
	// }

	// public function getId() {
	// 	return $this->id;
	// }

	// public function setSenha($senha) {
	// 	$this->senha = $senha;
	// }

	// public function getSenha() {
	// 	return $this->senha;
	// }

	// public function getNome() {
	// 	return $this->nome;
	// }

	// public function getEmail() {
	// 	return $this->email;
	// }


}