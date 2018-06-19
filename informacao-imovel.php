<?php
	
    require_once 'cria-cabecalho.php';
    require_once 'class/Imovel.php';

    $id = $_GET['id'];

    $imovel = new Imovel($id);

    criaCabecalho('Informações', array('-css/informacao_imovel.css'));
?>
	<div class="container">
		<div class="row informacao_11">
			<h1>Informações do imóvel</h1>
		</div>
	</div>
	<article class="container" style="">
		<div class="row">
			<div class="col-12">
				<div class="card-group">


					<div class="card col-6 mt-4 "  style=" background: #DAD9D9;border:0;">
						
						<div class="carousel slide" data-ride="carousel" id="controleCarrosel" style="margin-top: 5px" >
                    <div class="carousel-inner">
                        <ol class="carousel-indicators">
                            <li data-target="#controleCarrosel" data-slide-to="0" class="active"></li>
                            <li data-target="#controleCarrosel" data-slide-to="1"></li>
                            <li data-target="#controleCarrosel" data-slide-to="2"></li>
                        </ol>



                        <div class="carousel-item active">
                            <img src="img/<?= $imovel->imagem ?>" class="d-block w-100">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>



                        <div class="carousel-item">
                            <img src="img/<?= $imovel->imagem ?>" class="d-block w-100">
                            <div class="carousel-caption d-none d-md-block">
 
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/<?= $imovel->imagem ?>" class="d-block w-100">
                            <div class="carousel-caption d-none d-md-block">
                       
                            </div>
                        </div>
                         <div class="carousel-item">
                            <img src="img/<?= $imovel->imagem ?>" class="d-block w-100">
                            <div class="carousel-caption d-none d-md-block">
                            	
                            </div>
                        </div>
                         <div class="carousel-item">
                            <img src="img/<?= $imovel->imagem ?>"
                                 class="d-block w-100">
                            <div class="carousel-caption d-none d-md-block">
                      
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
                <!--<div class="card-header  mt-2 card1-casa">
                	sahdhdsd
                </div>
                <div class="card-footer  mt-2   card1-casa">
                	sahdhdsd
                </div>-->
					</div>

					<div class="card mt-4">

						<div class="card-header informacao1">
							<p class="aluguepor"><?= $imovel->alugarOuVender ?></p>
							<h2 >R$ <?= $imovel->valor ?>,00</h2>

<!-- 							<span class="float-xl-right icnis" >

								&nbsp;&nbsp;&nbsp;<img src="glyph-iconset-master/svg/si-glyph-key.svg" alt="icon chave" class="" width="25px" style="opacity: 2" >&nbsp;3
								<img src="glyph-iconset-master/svg/si-glyph-bank.svg" alt="icon chave" class="" width="25px" style="opacity: 1" >&nbsp;2
								<img src="glyph-iconset-master/svg/si-glyph-shower.svg" alt="icon chave" class="" width="25px" style="opacity: 2" >&nbsp;1
							</span> -->
						</div>
						<div class="card-body informacao2">
							<p><?= $imovel->descricao ?></p>
							
							<div class="row informacao3">
								<div class="col-12">
									<table class="table table-bordered  table-hover">
										<h1>Caracteristicas </h1>
										<thead >
											<tr>
												<th>Tipo</th>
												<th>Área total </th>
												<th>Bairro</th>
											</tr>
										</thead >
										<tbody>
											<tr>
												<td scope="row"><?= $imovel->tipo ?></td>
												<td>m<sup>2</sup>:<?= $imovel->area ?></td>
												<td><?= $imovel->bairro ?></td>
											</tr>

										</tbody>
									</table>
								</div>

							</div>

							<div class="row informacao3">
								<div class="col">
									<table class="table table-bordered  table-hover">
										<h1>Informações: </h1>
										<tbody>
											<tr>
												<th>Quartos</th>
												<th>Banheiros</th>
												<th>Garagem</th>
											</tr>
											<tr>
												<td scope="row"><?= $imovel->quartos ?></td>
												<td><?= $imovel->banheiros ?></td>
												<td><?= $imovel->garagem ?></td>
											</tr>

										</tbody>
									</table>
								</div>

							</div>
						</div>
						<div class="card-footer"></div>

						
					</div>
					

					
				</div>
			</div>
		</div>
	</article>

<?php include 'rodape.php' ?>