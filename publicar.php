<?php
    $titulo = 'Página inicial';
    $cssExtra = '<link rel="stylesheet"  href="-css/publicar.css">';
    include 'cabecalho.php';
?>
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
<?php include 'rodape.php' ?>