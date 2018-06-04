
<?php
	require_once 'cria-cabecalho.php';
	require_once 'class/Imovel.php';

	$imovel = new Imovel();
	$lista = $imovel->listar();

	criaCabecalho('Casa Fácil', array('css/promocao.css','-css/header.css', '-css/principal.css'));
?>

	<div id="promocao" style="margin: 0;padding: 0">
				<div class="carousel slide" data-ride="carousel" id="controleCarrosel" >
                    <div class="carousel-inner">
                        <ol class="carousel-indicators">
                            <li data-target="#controleCarrosel" data-slide-to="0" class="active"></li>
                            <li data-target="#controleCarrosel" data-slide-to="1"></li>
                            <li data-target="#controleCarrosel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-item active">
                            <img src="img/slidere.jpg" class="d-block w-100">
                             <div class="carousel-caption d-none d-md-block ">
                            	<h3  class="slide_texto1" >Primeira casa em destaque</h3>
                            	<p class="slide_texto2">Casa para alugar no bairro congós</p>
                            </div>
                        </div>
                         <div class="carousel-item ">
                            <img src="img/slide7.jpg" class="d-block w-100">
                             <div class="carousel-caption d-none d-md-block ">
                            	<h3  class="slide_texto1" >Primeira casa em destaque</h3>
                            	<p class="slide_texto2">Casa para alugar no bairro congós</p>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="img/slide3.jpg" class="d-block w-100">
                             <div class="carousel-caption d-none d-md-block ">
                            	<h3  class="slide_texto1" >Primeira casa em destaque</h3>
                            	<p class="slide_texto2">Casa para alugar no bairro congós</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/slide4.jpg" class="d-block w-100">
                            <div class="carousel-caption d-none d-md-block ">
                            	<h3  class="slide_texto1" >Primeira casa em destaque</h3>
                            	<p class="slide_texto2">Casa para alugar no bairro buritizal</p>
                            </div>

                        </div>
                         <div class="carousel-item">
                            <img src="img/slide2.jpg" class="d-block w-100">
                            <div class="carousel-caption d-none d-md-block ">
                            	<h3  class="slide_texto1" >primeira casa em destaque</h3>
                            	<p class="slide_texto2">Casa para alugar no bairro universidade</p>
                            </div>
                        </div>
                         <div class="carousel-item">
                            <img src="img/slide1.jpg" class="d-block w-100">
                            <div class="carousel-caption d-none d-md-block ">
                            	<h3  class="slide_texto1" >primeira casa em destaque</h3>
                            	<p class="slide_texto2">Casa para alugar no bairro universidade </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/slide5.jpg" class="d-block w-100">
                            <div class="carousel-caption d-none d-md-block ">
                            	<h3  class="slide_texto1" >primeira casa em destaque</h3>
                            	<p class="slide_texto2">Casa para alugar no bairro beirol </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/slide8.jpg" class="d-block w-100">
                            <div class="carousel-caption d-none d-md-block ">
                            	<h3  class="slide_texto1" >Primeira casa em destaque</h3>
                            	<p class="slide_texto2">Casa para alugar no bairro São Lázaro </p>
                            </div>
                        </div>
                        <a href="#controleCarrosel" class="carousel-control-prev" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Voltar</span>
                        </a>

                        <a href="#controleCarrosel" class="carousel-control-next" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Avançar</span>
                        </a>
                    </div>
                </div>
	</div>
	<main class="container" >
		<div>
			<div class="row">
				<div class="col-12 content_cabesalho" >
					<h1>Imóveis em destaque</h1>
<!-- 					<button class="btn mais" style=""> Veja mais » </button>
 -->				</div>
			</div>
		</div>
		<div class="row">

			<div class="col-12">
				<div class="card-group" style="height: 100%;" >
                    <?php
                        $limite = 3;
                        $quebraLinha = 1;
                        $controle = 1;
                        foreach ($lista as $l):
                            if ($controle > $limite) {
                                echo
                                '
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card-group" >
                                ';
                            $quebraLinha++;
                            $limite = $limite*$quebraLinha;
                            }
                        $controle++;
                    ?>
					<div class="card   mt-3 "   >
						<div class="Apartamento ">
							<!--<span class="casa11" >Apartamentos</span>-->
							<span class="casa"><?= $l['tipo'] ?></span>
						</div>
						<figcaption >
						<a  href="informacao-imovel.php?id=<?= $l['id'] ?>"><img  src="img/<?= $l['imagem'] ?>" class="img_hover card__img  "   ></a>
                         </figcaption>
						<p class="idapartamentos"><?= $l['titulo'] ?><br>
							<span  class="idapartamentos1">Macapá-ap</span>
						</p>
						<div class=" card-body1 ">R$ <?= $l['valor'] ?>
							<div class="float-xl-right icnis" >
								&nbsp;&nbsp;&nbsp;<img src="glyph-iconset-master/svg/si-glyph-key.svg" alt="icon chave"   >&nbsp;<?= $l['numero_de_quartos'] ?>
								<img src="glyph-iconset-master/svg/si-glyph-bank.svg" alt="icon chave" class=""  style="opacity: 1" >&nbsp;<?= $l['garagem'] ?>
								<img src="glyph-iconset-master/svg/si-glyph-shower.svg" alt="icon chave" class=""  style="opacity: 2" >&nbsp; <?= $l['numero_de_banheiros'] ?>
							</div>
						</div>
					</div>
					<?php endforeach ?>

				</div>
			</div>
		</div>

	</main>

<?php include 'rodape.php' ?>
