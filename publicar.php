<?php
    include 'cria-cabecalho.php';
    criaCabecalho('Cadastrar Imóvel', array('-css/publicar.css'));
?>
<div class=" container-fluid artigo" >
    <div class="row">
        <div class="col-12 mt-5 "  style="text-align: center;">
            <h2 class="vedaseuimove" >Cadastre seu imóvel</h2>
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
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label>Título</label>
                        <input class="form-control" type="text" name="titulo">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="form-group">
                        <label>Tipo</label>
                        <select class="form-control" name="tipo">
                            <option value="casa">Casa</option>
                            <option value="apartamento">Apartamento</option>
                            <option value="terreno">Terreno</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="form-group">
                        <label>Preço</label>
                        <div class="input-group">
                            <div class="input-group-addon">R$</div>
                            <input class="form-control" type="number">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Descrição</label>
                <textarea class="form-control" rows="4" name="descricao"></textarea>
            </div>
            <div class="form-group">
                <label>Endereço</label>
                <input class="form-control" id="address" placeholder="Entre com a localização" autocomplete="off" type="text" name="endereco">
                <p class="help-block">Você pode adicionar a localização</p>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-3">
                    <div class="form-group">
                        <label>Quartos</label>
                        <input class="form-control" type="number" name="quartos">
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3">
                    <div class="form-group">
                        <label>Banheiros</label>
                        <input class="form-control" type="number" name="banheiros">
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3">
                    <div class="form-group">
                        <label>Garagem</label>
                        <input class="form-control" type="number" name="garagem">
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3">
                    <div class="form-group">
                        <label>Área</label>
                        <div class="input-group">
                            <input class="form-control" type="number" step="0.01" name="area">
                            <div class="input-group-addon">M<sup>2</sup></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-3">
                    <div class="btn-group">
                        <input type="radio" name="alugar_ou_vender" value="alugar" class="form-control" />
                        <label>Alugar</label>
                        <input type="radio" name="alugar_ou_vender" value="vender" class="form-control" /> 
                        <label>Vender</label>
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
                        <label>Itens do Imóvel</label>
                        <!--<div class="checkbox custom-checkbox"><label><input type="checkbox"><span class=""></span> Garagem</label></div>-->
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
                        <!--<div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> TV à Cabo</label></div>-->
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

<?php include 'rodape.php' ?>