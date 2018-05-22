<?php
    include 'cria-cabecalho.php';
    criaCabecalho('Cadastre-se', array('-css/cadrasto_cliente.css'));
?>

	   <div class="container-fluid">
    	 	<div class="row">
    	 		<div class="col-lg-3 col-sm-12 ">
    	 		</div>
    	 		<div class="col-lg-6 col-sm-12  mt-4">
        	 		<h1 class="loginh1">Faça seu login ou crie uma conta gratuita </h1>
        	 		<p class="loginp">Veja todos os seus anúncios em um só lugar. Alugue seus<br> imóveis de forma rápida e fácil, altere seu perfil com segurança</p>
    	 		</div>
    	 		<div class="col-lg-3 col-sm-12 ">
    	 		</div>
    	 	</div>

    	 	<article class="row">
    	 		<div class="col-lg-1 col-sm-12"></div>
    	 		<div class="col-lg-4 col-sm-12   mt-4  cg" style="height: 320px;">
        	 		<div class="row">
                        <div class="col-lg-12 col-sm-12  idcss " >
                            <h3  class="textocadrasto"> <img src="ionicons/src/ios-person.svg" alt="icon chave" class="iconi3"> Login Anunciante  </h3>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label>Email</label>
                        <input type="email" class="form-control" name="user_email" id="user_email">
                    </div>
                    <div class="col-sm-12">
                        <label>Senha</label>
                        <input type="" class="form-control" id="user_name" name="user_name">
                        <p><a href="#">Esqueci minha senha </a></p>
                    </div>
                    <div class="form-group adicionar">
                        <a href="#" class="btn btn-lg">Entrar</a>
                    </div>
    	 		</div>
    	 		<div class="col-lg-6 col-sm-12  mt-4  ml-2 cg">
                   <div class="row">
                        <div class="col-lg-12 col-sm-12  idcss " >
                            <h3  class="textocadrasto">  <img src="ionicons/src/ios-home.svg" alt="icon chave" class="iconi3">Ainda não tenho uma conta </h3>
                        </div>
                    </div>
                     <div class="col-sm-12">
                        <label>Nome completo</label>
                        <input type="" class="form-control" id="user_name" name="user_name">
                    </div>
                    <div class="col-sm-12">
                        <label>E-mail</label>
                        <input type="email" class="form-control" name="user_email" id="user_email">
                    </div>
                    <div class="col-sm-12">
                        <label>Senha</label>
                       <input type="" class="form-control" id="user_phone" name="user_phone" >
                       <p>Minimo 5 caracteres </p>
                    </div>
                    <div class="col-sm-12">
                        <label>Repetir senha</label>
                        <input type="" class="form-control" id="user_phone" name="user_phone" >
                    </div>
                   <div class="form-group adicionar mt-4">
                        <a href="#" class="btn btn-lg">Criar conta </a>
                   </div>
                </div>
    	 </article>
	 </div>

<?php include 'rodape.php'; ?>