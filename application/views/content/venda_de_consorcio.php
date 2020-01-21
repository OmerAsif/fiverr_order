<div class="container full">
    <div class="container">
        <div class="row pt50 pb70">
            <div class="col-lg-12">
                <h1 class="txtCenter mb30 tituloConteudo">Vender Seu Consórcio</h1>                
            </div>            

            <div class="col-lg-1 col-md-1 col-sm-1"></div>

            <div class="col-lg-10 col-md-10 col-sm-10">

                <div class="p30 mb30" style="background:#fff; border:1px solid #dbdbdb;">                
                    <form action="<?php echo base_url() . "content/consortium_sold_request"; ?>" method="post" enctype="multipart/form-data" name="formContato" id="formContato" style="padding:0px;" novalidate="novalidate" class="bv-form">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group has-feedback">
                                    <label for="contatoNome" class="e16 fb">Nome <font class="fVermelho">*</font></label>
                                    <input type="text" name="contatoNome" id="contatoNome" class="form-control" placeholder="Seu nome" data-bv-field="contatoNome"><i class="form-control-feedback" data-bv-icon-for="contatoNome" style="display: none;"></i>
                                    <small data-bv-validator="notEmpty" data-bv-validator-for="contatoNome" class="help-block" style="display: none;">Insira seu nome.</small><small data-bv-validator="stringLength" data-bv-validator-for="contatoNome" class="help-block" style="display: none;">Máximo 40 caracteres.</small></div>    
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group has-feedback">
                                    <label for="contatoEmail" class="e16 fb">E-mail <font class="fVermelho">*</font></label>
                                    <input required="" type="text" name="contatoEmail" id="contatoEmail" class="form-control" placeholder="seunome@email.com" data-bv-field="contatoEmail"><i class="form-control-feedback" data-bv-icon-for="contatoEmail" style="display: none;"></i>
                                    <small data-bv-validator="notEmpty" data-bv-validator-for="contatoEmail" class="help-block" style="display: none;">Insira seu e-mail.</small><small data-bv-validator="emailAddress" data-bv-validator-for="contatoEmail" class="help-block" style="display: none;">Insira um e-mail válido.</small><small data-bv-validator="stringLength" data-bv-validator-for="contatoEmail" class="help-block" style="display: none;">Máximo de 100 caracteres.</small></div>     
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group has-feedback">
                                    <label for="contatoTelefone" class="e16 fb">Telefone <font class="fVermelho">*</font></label>
                                    <input required= type="text" name="contatoTelefone" id="contatoTelefone" class="form-control" placeholder="Seu telefone e/ou celular" data-bv-field="contatoTelefone"><i class="form-control-feedback" data-bv-icon-for="contatoTelefone" style="display: none;"></i>
                                    <small data-bv-validator="notEmpty" data-bv-validator-for="contatoTelefone" class="help-block" style="display: none;">Insira seu telefone.</small><small data-bv-validator="stringLength" data-bv-validator-for="contatoTelefone" class="help-block" style="display: none;">Entre 5 e 20 caracteres.</small></div>                    		
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group has-feedback">
                                    <label for="contatoTipo" class="e16 fb">Tipo de consórcio <font class="fVermelho">*</font></label>
                                    <select required="" name="contatoTipo" id="contatoTipo" class="form-control" data-bv-field="contatoTipo">                                	
                                        <option value="">Tipo</option>
                                        <option value="Imóveis">Imóveis</option>
                                        <option value="Veículos">Veículos</option>
                                        <option value="Motos">Motos</option>
                                        <option value="Caminhões">Caminhões</option>
                                    </select><i class="form-control-feedback" data-bv-icon-for="contatoTipo" style="display: none;"></i>
                                    <small data-bv-validator="notEmpty" data-bv-validator-for="contatoTipo" class="help-block" style="display: none;">Selecione o tipo.</small></div>    
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group has-feedback">
                                    <label for="contatoAdministradora" class="e16 fb">Administradora <font class="fVermelho">*</font></label>
                                    <input type="text" required="" name="contatoAdministradora" id="contatoAdministradora" class="form-control" placeholder="Administradora" data-bv-field="contatoAdministradora"><i class="form-control-feedback" data-bv-icon-for="contatoAdministradora" style="display: none;"></i>
                                    <small data-bv-validator="notEmpty" data-bv-validator-for="contatoAdministradora" class="help-block" style="display: none;">Insira a administradora.</small><small data-bv-validator="stringLength" data-bv-validator-for="contatoAdministradora" class="help-block" style="display: none;">Máximo 40 caracteres.</small></div>                    		
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group has-feedback">
                                    <label for="contatoGrupo" class="e16 fb">Grupo</label>
                                    <input type="text" required="" name="contatoGrupo" id="contatoGrupo" class="form-control" placeholder="Grupo da cota" data-bv-field="contatoGrupo"><i class="form-control-feedback" data-bv-icon-for="contatoGrupo" style="display: none;"></i>
                                    <small data-bv-validator="stringLength" data-bv-validator-for="contatoGrupo" class="help-block" style="display: none;">Máximo 40 caracteres.</small></div>                    		
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group has-feedback">
                                    <label for="contatoCredito" class="e16 fb">Valor do Crédito <font class="fVermelho">*</font></label>
                                    <input type="text" required="" name="contatoCredito" id="contatoCredito" class="form-control" placeholder="Digite o valor do crédito" data-bv-field="contatoCredito"><i class="form-control-feedback" data-bv-icon-for="contatoCredito" style="display: none;"></i>
                                    <small data-bv-validator="notEmpty" data-bv-validator-for="contatoCredito" class="help-block" style="display: none;">Insira o valor do crédito.</small><small data-bv-validator="stringLength" data-bv-validator-for="contatoCredito" class="help-block" style="display: none;">Máximo 20 caracteres.</small></div>    
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group has-feedback">
                                    <label for="contatoSituacao" class="e16 fb">Situação da Cota<font class="fVermelho">*</font></label>
                                    <select name="contatoSituacao"  required id="contatoSituacao" class="form-control" data-bv-field="contatoSituacao">                                	
                                        <option value="">Selecione uma opção</option>
                                        <option value="Contemplado">Contemplado</option>
                                        <option value="Não Contemplado">Não Contemplado</option>
                                    </select><i class="form-control-feedback" data-bv-icon-for="contatoSituacao" style="display: none;"></i>
                                    <small data-bv-validator="notEmpty" data-bv-validator-for="contatoSituacao" class="help-block" style="display: none;">Selecione a situação.</small></div>                    		
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group has-feedback">
                                    <label for="contatoParcelasPendentes" class="e16 fb">Qtd. Parcelas Pendentes <font class="fVermelho">*</font></label>
                                    <input  required type="text" name="contatoParcelasPendentes" id="contatoParcelasPendentes" class="form-control" placeholder="Qtd. de parcelas pendentes" data-bv-field="contatoParcelasPendentes"><i class="form-control-feedback" data-bv-icon-for="contatoParcelasPendentes" style="display: none;"></i>
                                    <small data-bv-validator="notEmpty" data-bv-validator-for="contatoParcelasPendentes" class="help-block" style="display: none;">Insira a quantidade de parcelas pendentes.</small><small data-bv-validator="stringLength" data-bv-validator-for="contatoParcelasPendentes" class="help-block" style="display: none;">Máximo 20 caracteres.</small></div>                    		
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group has-feedback">
                                    <label for="contatoParcelasPagas" class="e16 fb">Qtd. Parcelas Pagas <font class="fVermelho">*</font></label>
                                    <input required="" type="text" name="contatoParcelasPagas" id="contatoParcelasPagas" class="form-control" placeholder="Qtd. de parcelas pagas" data-bv-field="contatoParcelasPagas"><i class="form-control-feedback" data-bv-icon-for="contatoParcelasPagas" style="display: none;"></i>
                                    <small data-bv-validator="notEmpty" data-bv-validator-for="contatoParcelasPagas" class="help-block" style="display: none;">Insira a quantidade de parcelas pagas.</small><small data-bv-validator="stringLength" data-bv-validator-for="contatoParcelasPagas" class="help-block" style="display: none;">Máximo 20 caracteres.</small></div>    
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group has-feedback">
                                    <label for="contatoValorAtual" class="e16 fb">Valor Atual das Parcelas <font class="fVermelho">*</font></label>
                                    <input required="" type="text" name="contatoValorAtual" id="contatoValorAtual" class="form-control" placeholder="Valor atual das parcelas" data-bv-field="contatoValorAtual"><i class="form-control-feedback" data-bv-icon-for="contatoValorAtual" style="display: none;"></i>
                                    <small data-bv-validator="notEmpty" data-bv-validator-for="contatoValorAtual" class="help-block" style="display: none;">Insira o valor atual das parcelas.</small><small data-bv-validator="stringLength" data-bv-validator-for="contatoValorAtual" class="help-block" style="display: none;">Máximo 20 caracteres.</small></div>                    		
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group has-feedback">
                                    <label for="contatoValorPretendido" class="e16 fb">Valor Pretendido pela Cota <font class="fVermelho">*</font></label>
                                    <input required="" type="text" name="contatoValorPretendido" id="contatoValorPretendido" class="form-control" placeholder="Valor pretendido pela cota" data-bv-field="contatoValorPretendido"><i class="form-control-feedback" data-bv-icon-for="contatoValorPretendido" style="display: none;"></i>
                                    <small data-bv-validator="notEmpty" data-bv-validator-for="contatoValorPretendido" class="help-block" style="display: none;">Insira o valor pretendido pela cota.</small><small data-bv-validator="stringLength" data-bv-validator-for="contatoValorPretendido" class="help-block" style="display: none;">Máximo 20 caracteres.</small></div>                    		
                            </div>
                        </div>

                        <div class="form-group mb30 has-feedback">
                            <label for="contatoMensagem" class="e16 fb">Observações</label>
                            <textarea name="contatoMensagem" id="contatoMensagem" class="form-control" placeholder="Observações" data-bv-field="contatoMensagem"></textarea><i class="form-control-feedback" data-bv-icon-for="contatoMensagem" style="display: none;"></i>
                            <small data-bv-validator="stringLength" data-bv-validator-for="contatoMensagem" class="help-block" style="display: none;">Máximo 5000 caracteres.</small></div>  

                        <input type="submit" class="btnContato btn btn-success e20" value="Enviar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>