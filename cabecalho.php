<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta nome="wiewport " content="width-device-width,initial-scale=1,shrink-to-fit=no">
	<title><?= $titulo ?></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet"  href="-css/header.css">
	<link rel="stylesheet"  href="-css/footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<?= $cssExtra ?>
</head>
<body>

	<div class="container-fluid">
		<header class="row">
			<div class="col-lg-12 col-sm-12  home1" >

				<div class="home1_categorias">
					<ul>
						<a href="publicar.php" class="alugue" >	<li > Cadastre seu imóvel</li></a>
						<a href="quensomos.php">	<li>Quem somos</li></a>
						<a href=""><li>Contato</li></a>
					</ul>
				</div>

				<div class="redes_sociais">
					<button style="background:  #3B5998;border: none; width: 30px;border-radius: 1em" class="redes_sociais_butoes" >
						<span class="fa fa-facebook-f"  ></span> 
					</button>
					
					<button style="background:  #3F729B;border: none; width: 30px;border-radius: 1em" >
						<span class="fa fa-instagram  " ></span>
					</button>
					<button style="background:   #55ACEE;border: none; width: 30px;border-radius: 1em" >
						<span class="fa fa-twitter  " ></span>
					</button>
					<a href="cadastro-cliente.php"><button class="btn cadrstese" >Cadastre-se</button></a>

				</div>	
			</div>
			
			

		</header>
		


	</div>
	<nav  class="navcabesalho" >

		<div class="navcabesalho1"  >
			<div  style="height: 600px;" >
				<div class="logoo">
				<a class="navbar-brand" href="index.php">
					<img class="d-inline-block align-top logooimg " src="img/logotipo.png"  style="" alt="Logo" >

				</a>
				</div>
				<input type="checkbox" name="" id="check">
				<label id="icone" for="check">	<img src="iconic/svg/menu.svg" alt="icon chave" class="iconi1" ></label>
				<div class="barra">
					<div class="navasub">


						<a href="cadastro-cliente.php"> <div class="linkalugue"> Alugue seu imóvel</div></a> 


						<a href="casas.php"> <div class="link"> Casa</div></a> 
						<a href="#"><div class="link">Predio </div></a> 
						<a href="#"><div class="link">Sobrados</div> </a> 
						<a href="#"><div class="link">Terrenos</div></a> 
						<a href="#"><div class="link">Rural</div></a> 


					</div>
				</div>
			</div>
		</div>

		<div class="navcabesalho2"  >
			<div class=" home2" style="height: 100px;" >


				<ul>
					<li class="tipos_imoves"><a href="#" class="home2texto">Tipos  </a>

						<ul>
							<li><a href="pesquisa.php?tipo=casa">Casa</a> </li>
							<li><a href="pesquisa.php?tipo=apartamento">Apartamento</a> </li>
						</ul>
					</li>
					<li><a href="#" class="home2texto">Bairros </a>
						<ul>
							<li><a href="pesquisa.php?busca=universidade">Universidade</a> </li>
							<li><a href="pesquisa.php?busca=buritizal">Buritizal</a> </li>
							<li><a href="pesquisa.php?busca=centro">Centro</a> </li>
							<li><a href="pesquisa.php?busca=santa rita">Santa Rita</a> </li>

						</ul>
					</li>
					<li><a href="lancamentos.php" class="home2texto2  home2texto">Lançamentos  </a>
					</li>
				</ul>

			</div>
		</div>
		<div class="navcabesalho3"  >
			<div class=" home2" style="height: 100px;" >

				<form class="pesquisa" action="pesquisa.php">


					<!--<img src="ionicons/src/android-search.svg" class="btnt">-->
					<input name="busca" type="text" id="textobusca" placeholder="Buscar..." >
					<input type="submit" name="enviar" class="btn btn-primary" value="pesquisar">

				</form>
			</div>
		</div>

	</nav>