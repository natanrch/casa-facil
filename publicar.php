<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">
  <title>Teste</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet"  href="-css/header.css">
  <link rel="stylesheet"  href="-css/footer.css">
  <style type="text/css">
  div.bg{
    background-color: #343a40;

    color: #fff;
}
div.cg{


    color: #323232;
    background: rgb(244, 244, 244);
}
body{
   background-color: rgb(212, 212, 212);
}
.idcss{
   border-top: 3px solid #B30D0D;
   background-color: #fff;
   padding: 10px;

}
.vedaseuimove{
font-style:oblique;
    font-weight: bold;
    color: #064484;
    font-size: 40px; 
}

.informacao{


 font-style:oblique;
    font-weight: bold;
    color: #064484;
}

.adicionar{
 text-align: center;
 background: #B30D0D;
}
</style>
</head>
<body>
    <div class="container-fluid">
        <header class="row">
            <div class="col-lg-12 col-sm-12  home1" >

                <div class="home1_categorias">
                    <ul>
                        <a href="publicar.html" class="alugue" >    <li > Alugue seu imóvel</li></a>
                        <a href=""> <li>Quem somos</li></a>
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
                    <a href="cadrastodousuario.html"><button class="btn cadrstese" >Cdraste-se</button></a>

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
                <label id="icone" for="check">  <img src="iconic/svg/menu.svg" alt="icon chave" class="iconi1" ></label>
                <div class="barra">
                    <div class="navasub">


                        <a href="publicar.html"> <div class="linkalugue"> Alugue seu imóvel</div></a> 


                        <a href="casas.html"> <div class="link"> Casa</div></a> 
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
                            <li><a href="casas.html">Casa</a> </li>
                            <li><a href="#">Predio </a> </li>
                            <li><a href="#">Sobrados </a> </li>
                            <li><a href="#">Terrenos</a> </li>
                            <li><a href="#">Rural</a> </li>
                        </ul>
                    </li>
                    <li><a href="#" class="home2texto">Bairros </a>

                        <ul>
                            <li><a href="bairro_universidade.html">Universidade</a> </li>
                            <li><a href="#">Cogos </a> </li>
                            <li><a href="#">Buritizal </a> </li>
                            <li><a href="#">Zerão</a> </li>
                            <li><a href="#">Brasil novos </a> </li>
                        </ul>
                    </li>
                    <li><a href="lancamentos.html" class="home2texto2">Lançamentos  </a>
                    </li>
                    

                </ul>

            </div>
        </div>
        <div class="navcabesalho3"  >
            <div class=" home2" style="height: 100px;" >

                <form class="pesquisa ">


                    <img src="ionicons/src/android-search.svg" class="btnt">
                    <input  type="text" id="textobusca" placeholder="Buscar..." >

                </form>
            </div>
        </div>

    </nav>
<div class=" container-fluid artigo" >
    <div class="row">
        <div class="col-12 mt-5 "  style="text-align: center;">
            <h2 class="vedaseuimove" >venda seu imóvel</h2>
        </div>
    </div>
    
    <!-- ///////////////////////// content  /////////////////////// -->
    

        <!-- ///////////////////////// área em branco esquerda  /////////////////////// -->
        
        <div class="row">
       
            
        
        
    <div class="col-lg-7 col-sm-12 cg" style="margin-left: 30px;margin: 5px auto">

        <form role="form">
            <div class="row">
                <div class=" col-lg-12 col-sm-12 idcss" >
            <h3 class="informacao">Informações do Imóvel</h3>
        </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label>Título</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label>Preço</label>
                        <div class="input-group">
                            <div class="input-group-addon">R$</div>
                            <input class="form-control" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Descrição</label>
                <textarea class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label>Endereço</label>
                <input class="form-control" id="address" placeholder="Entre com a localização" autocomplete="off" type="text">
                <p class="help-block">Você pode adicionar a localização</p>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-3">
                    <div class="form-group">
                        <label>Quartos</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3">
                    <div class="form-group">
                        <label>Banheiros</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3">
                    <div class="form-group">
                        <label>Área</label>
                        <div class="input-group">
                            <input class="form-control" type="text">
                            <div class="input-group-addon">M<sup>2</sup></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3">
                    <div class="btn-group">
                        <select class="dropdown-menu dropdown-select">
                            <option class="active"><input name="ptype" checked="checked" type="radio"><a href="#">Alugar</a></option>
                            <option><input name="ptype" type="radio"><a href="#">Vender</a></option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="form-group">
                        <label>Imagem da galeria</label>
                        <div class="file-input file-input-new">
                            <input type="hidden">
                            <div class="file-preview ">
                                <div class="file-preview-status text-center text-success"></div>
                                <div class="file-preview-thumbnails"></div>
                            </div>
                            <div class="btn btn-o btn-default btn-file"> <i class="glyphicon glyphicon-folder-open"></i>Adicionar Imagens <input class="file" multiple="" data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png" data-browse-class="btn btn-o btn-default" data-browse-label="Browse Images" id="1520140310030" type="file"></div>
                        </div>
                        <p class="help-block">Você pode selecionar várias imagens</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <div class="form-group">
                        <label>Ítens do Imóvel</label>
                        <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class=""></span> Garagem</label></div>
                        <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Sistema de segurança</label></div>
                        <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Ar condicionado</label></div>
                        <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Varanda</label></div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="form-group">
                        <label></label>
                        <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Poço artesiano</label></div>
                        <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Internet</label></div>
                        <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Piscina</label></div>
                        <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> TV à Cabo</label></div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="form-group">
                        <label></label>
                        <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Jardim</label></div>
                        <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Cerca elétrica</label></div>
                        <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Lage</label></div>
                    </div>
                </div>
            </div>
            <div class="form-group adicionar">
                <a href="#" class="btn btn-lg">Adicionar Imóvel</a>
            </div>
        </form>
    </div>
 </div>
 <div class="foter">
            
               <div class=" footer1  " style="flex: 1 6 10%">
            

            
        </div>
        <div class=" footer1 " style="flex: 1 6 30%">
            <h2>Mais imóveis</h2>
            <ul class="rodape">
                
                <a href=""> <li>Residencia</li></a>
                <a href=""><li>Apartamentos</li></a>
                <a href=""><li>Casas</li></a>
                <a href=""><li>Condominios</li></a>
            </ul>
        </div>
        <div  class=" footer1 " style="flex: 1 6 30%">
            <h2>Informações </h2>

            <ul class="rodape">

                <a href=""> <li>Quem somos</li></a>
                <a href=""><li>Contato</li></a>
                <a href=""><li>Alugue seu imóvel</li></a>
                
            </ul>
        </div>

        <div class=" footer1 " style="flex: 1 6 24%">
            <h1>Entre em contato</h1>
            <ol class="rodape_contatos">

                    <li>(96)991082902</li>
                <li>mateusbahia375@gmail.com</li>
                

                
            </ol>
            
            <a class="btn btn-social-icon btn-facebook" style="background:  #3B5998">
                <span class="fa fa-facebook"></span> 
            </a>

        <a class="btn btn-social-icon btn-twitter" style="background:   #55ACEE">
                <span class="fa fa-twitter"></span> 
            </a>
            <a class="btn btn-social-icon btn-instagram" style="background:   #3F729B">
                <span class="fa fa-instagram"></span> 
            </a>
            
        </div>
        
            
            
        </div>  
        <footer class="forterrodape">
            <div class="footer2 ">
                    <div  style="text-align: center;" >
<b style=" color: #fff;">Imobiliária casa facil© 2018 </b> &nbsp;&nbsp;- Todos os direitos reservados.
</div>
                </div>
        </footer>
 </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
