<?php
	include 'cria-cabecalho.php';
	require_once 'class/Imovel.php';

	$bairro = 'buritizal';

	$imovel = new Imovel();
	$lista = $imovel->listarPorBairro($bairro);

	criaCabecalho('Lançamentos', array('-css/lancamentos.css'));
?>
	<div class="imgemfundo" >
		
	</div>
	<main class="artigocorpo">
		
		<div class="cabesalho-artigo">
			
		<article>
			<h1>Resultado da busca por: <?= $bairro ?></h1>

		</article>
		
		<img src="iconic/svg/menu.svg" alt="icon chave" class="iconi2">
	</div>

<?php foreach($lista as $l): ?>
<div class="artigo1">
	<div id="casas1" style="">
        <a href="informacao-imovel.php?id=<?= $l['id'] ?>">  <img src="img/<?= $l['imagem'] ?> "  ></a>
			</div>
	<div id="casas2">
		<div class="titullocasa" >
			<h1><?= $l['titulo'] ?></h1>
			<h2 class="peco"><span>R$</span> <?= $l['valor'] ?></h2>
			<span class="float-xl-right icnis" >

								&nbsp;&nbsp;&nbsp;<img src="glyph-iconset-master/svg/si-glyph-key.svg" alt="icon chave" class="" width="25px" style="opacity: 2" >&nbsp;3
								<img src="glyph-iconset-master/svg/si-glyph-bank.svg" alt="icon chave" class="" width="25px" style="opacity: 1" >&nbsp;2
								<img src="glyph-iconset-master/svg/si-glyph-shower.svg" alt="icon chave" class="" width="25px" style="opacity: 2" >&nbsp;1
							</span>
		</div>
		<p >	<?= $l['descricao'] ?></p>
	</div>
	
</div>
<?php endforeach  ?>
<div class="pagina-atual" >
	
</div>
</main>

<?php include 'rodape.php' ?>