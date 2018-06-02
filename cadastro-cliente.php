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
    	 		<div class="col-lg-4 col-sm-12   mt-4  cg" style="height: 380px;">
        	 		<div class="row">
                        <div class="col-lg-12 col-sm-12  idcss " >
                            <h3  class="textocadrasto"> <img src="ionicons/src/ios-person.svg" alt="icon chave" class="iconi3"> Login Anunciante  </h3>
                        </div>
                    </div>
                    <form method="post" id="form_login">
	                    <div class="col-sm-12">
	                        <label>Email</label>
	                        <input type="email" class="form-control" name="user_email" id="user_email">
	                    </div>
	                    <div class="col-sm-12">
	                        <label>Senha</label>
	                        <input type="password" class="form-control" id="user_password" name="user_password">
	                        <p><a href="#">Esqueci minha senha </a></p>
	                    </div>
	                    <div class="form-group adicionar">
	                        <button class="btn btn-lg" type="submit" id="entrar"> Entrar</button>
	                    </div>
                	</form>
    	 		</div>
    	 		<div class="col-lg-6 col-sm-12  mt-4  ml-2 cg">
                   <div class="row">
                        <div class="col-lg-12 col-sm-12  idcss " >
                            <h3  class="textocadrasto">  <img src="ionicons/src/ios-home.svg" alt="icon chave" class="iconi3">Ainda não tenho uma conta </h3>
                        </div>
                    </div>
                    <form method="post" id="form_cad">
                        <div class="col-sm-12">
                            <label>Nome completo</label>
                            <input type="text" class="form-control" id="nome_cad" name="nome_cad">
                        </div>
                        <div class="col-sm-12">
                            <label>E-mail</label>
                            <input type="email" class="form-control" name="email_cad" id="email_cad">
                        </div>
                        <div class="col-sm-12">
                            <label>Senha</label>
                           <input type="" class="form-control" id="senha_cad" name="senha_cad" >
                        </div>
                        <div class="col-sm-12">
                            <label>Repetir senha</label>
                            <input type="" class="form-control" id="repetirsenha_cad" name="repetirsenha_cad">
                        </div>
                        <div class="form-group adicionar mt-4">
                            <button type="submit" class="btn btn-lg" id="entrar">  Criar conta </button>
                        </div>
                   </form>
                </div>
    	 </article>
	 </div>

<?php include 'rodape.php';?>