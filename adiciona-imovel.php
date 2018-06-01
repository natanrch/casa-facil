<?php

require_once 'class/Imovel.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//trata arquivo imagem
$imagem = $_FILES['imagem'];
$nomeImagem = $imagem['name'];
$nomeTempImagem = $imagem['tmp_name'];
move_uploaded_file($nomeTempImagem, 'img/'.$nomeImagem);



$imovel = new Imovel();

$imovel->proprietario = 1;

$imovel->titulo = $_POST['titulo'];
$imovel->tipo = $_POST['tipo'];
$imovel->valor = $_POST['valor'];
$imovel->descricao = $_POST['descricao'];
$imovel->endereco = $_POST['endereco'];
$imovel->bairro = $_POST['bairro'];
$imovel->quartos = $_POST['quartos'];
$imovel->banheiros = $_POST['banheiros'];
$imovel->garagem = $_POST['garagem'];
$imovel->area = $_POST['area'];
$imovel->alugarOuVender = $_POST['alugar_ou_vender'];
$imovel->imagem = $nomeImagem;

var_dump($imovel);

$imovel->inserir();
header("Location: index.php");