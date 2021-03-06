
<?php
	require_once 'cria-cabecalho.php';
	require_once 'class/Imovel.php';

	if(isset($_GET['busca'])) {

	    $bairro = $_GET['busca'];

	    $imovel = new Imovel();
	    $lista = $imovel->listarPorBairro($bairro);
	    $resultado = $bairro;
		
	}

	if(isset($_GET['tipo'])) {

	    $tipo = $_GET['tipo'];

	    $imovel = new Imovel();
	    $lista = $imovel->listarPorTipo($tipo);
	    $resultado = $tipo;
		
	}

	criaCabecalho('Casa Fácil', array('css/promocao.css', '-css/principal.css'));
?>

	<main class="container" >
		<div>
			<div class="row">
				<div class="col-12 content_cabesalho" >
					<h1>Resultados para: <?= $resultado ?></h1>
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
								&nbsp;&nbsp;&nbsp;<img src="glyph-iconset-master/svg/si-glyph-key.svg" alt="icon chave"   >&nbsp; <?= $l['numero_de_quartos'] ?>
								<img src="glyph-iconset-master/svg/si-glyph-bank.svg" alt="icon chave" class=""  style="opacity: 1" >&nbsp; <?= $l['garagem'] ?>
								<img src="glyph-iconset-master/svg/si-glyph-shower.svg" alt="icon chave" class=""  style="opacity: 2" >&nbsp; <?= $l['numero_de_banheiros'] ?>
							</div>
						</div>
					</div>
					<?php endforeach ?>

				</div>
		</div>

	</main>

<?php include 'rodape.php' ?>
