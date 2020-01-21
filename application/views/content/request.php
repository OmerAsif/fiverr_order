<div class="container full">

    <div class="container">
        <div class="row pt50 pb70">
            <div class="col-lg-12">
                <h1 class="txtCenter mb10 tituloConteudo">Consórcio Contemplado Imóveis Itaú</h1>
                <p class="txtCenter e18 mb30 lh26">Confira os dados dessa cota contemplada e preencha o formulário de interesse.</p>


                <div class="full dib txtCenter mb5">Compartilhe <em class="fa fa-thumbs-o-up"></em></div>
                <div class="txtCenter di"><div class="addthis_inline_share_toolbox" data-url="https://www.cartadecreditocontemplada.com.br/3254/consorcio-contemplado-imoveis/itau" data-title="Consórcio Contemplado Imóveis Itaú"></div><div class="quebra30"></div></div>                    

                <div class="visible-lg visible-md">
                    <table class="table table-responsive table-hover table-bordered table-striped">
                        <thead>
                            <?php
                            $fmt = new NumberFormatter('pt_BR', NumberFormatter::CURRENCY);
                            
                            foreach ($lists as $key => $val) {
                                ?>
                                <tr>
                                    <th align="center"><p align="center">Tipo</p></th>
                                    <th align="center"><p align="center">Crédito</p></th>
                                    <th align="center"><p align="center">Entrada</p></th>
                                    <th align="center"><p align="center">Qtd. Parcelas</p></th>
                                    <th align="center"><p align="center">Administradora</p></th>
                                    <th align="center"><p align="center">Situação</p></th>                                                                     
                                </tr>
                            </thead> 
                            <tbody class="fPreto3">
                                <tr align="center">
                                    <td align="center"><em class="fa fa-home e20"></em> <?php echo $val['property_type'] ?>
                                    </td><td><?php echo $fmt->formatCurrency($val['credit'], "BRL") ?></td>
                                    <td><?php echo $fmt->formatCurrency($val['input'], "BRL") ?></td>
                                    <td><?php echo $val['installments'] ?></td>
                                    <td align="center" ><?php echo $val['administrator'] ?></td>                           
                                    <td><?php echo $val['situation'] ?></td>
                            </tr>
                            <?php }?>

                        </tbody>                                
                    </table>
                </div>   

                <div class="visible-sm visible-xs mb30">
                    <table class="table table-responsive table-hover table-bordered table-striped">
                        <tbody class="fPreto3">
                            <tr>
                                <td>Tipo</td>
                                <td><em class="fa fa-home e20"></em> Imóveis</td>

                            </tr><tr>
                                <td>Crédito</td>
                                <td>R$ 90.000,00</td>
                            </tr>
                            <tr>
                                <td>Entrada</td>
                                <td>R$ 34.000,00</td>
                            </tr>
                            <tr>
                                <td>Qtd. Parcelas</td>
                                <td>186 X670,00</td>
                            </tr>
                            <tr>
                                <td>Administradora</td>
                                <td class="administradoraTabelaImg"><img src="img/posts/postagens/201804232123543751/200/21235423042018.jpg" title="Itaú" alt="Itaú" width="100" class="img-rounded"></td>     

                            </tr><tr>
                                <td>Situação</td>   
                                <td>Disponível</td>                                                                  
                            </tr>

                        </tbody>                                
                    </table>
                </div>   
            </div> 

            <div class="col-lg-8 col-md-8">
                <div class="mb30" style="padding:30px; background:#fff; border:1px solid #dbdbdb;">
                    <h3 class="mb20 tituloConteudo">Envie-nos o seu interesse por esse Consórcio Contemplado</h3>

                    <form action="php/cota-interesse-enviar.php" method="post" enctype="multipart/form-data" name="formInteresseCota" id="formInteresseCota">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="contatoNome" class="e16 fb">Nome</label>
                                    <input type="text" name="interesseNome" id="contatoNome" class="form-control" placeholder="Seu nome">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="contatoNome" class="e16 fb">E-mail</label>
                                    <input type="text" name="interesseEmail" id="contatoEmail" class="form-control" placeholder="exemplo@email.com.br">
                                </div>
                            </div>

                            <div class="quebra visible-lg visible-md"></div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="contatoNome" class="e16 fb">Telefone</label>
                                    <input type="text" name="interesseTelefone" id="contatoTelefone" class="form-control" placeholder="DDD + Telefone">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="contatoNome" class="e16 fb">Celular / WhatsApp</label>
                                    <input type="text" name="interesseCelular" id="contatoWhatsApp" class="form-control" placeholder="DDD + Celular">
                                </div>
                            </div>                                

                            <div class="quebra visible-lg visible-md"></div>


                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="contatoMensagem" class="e16 fb">Alguma observação ou mensagem</label>
                                    <input type="text" name="interesseMensagem" id="contatoMensagem" class="form-control" placeholder="Alguma observação, mensagem, etc...">
                                </div>
                            </div>
                        </div>


                        <div class="quebra10"></div>

                        <input type="hidden" name="cotaCodigo" value="3254">                        
                        <button type="submit" class="btn btn-success e18">Enviar Meu Interesse</button>
                    </form>
                </div>     
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="mb30" style="padding:30px; background:#fff; border:1px solid #dbdbdb;">
                    <h4 class="e26 mb30 fb">Como comprar uma <strong>Cota Contemplada</strong>?</h4>
                    <p class="e18 mb10 lh26"><font class="fb e18">1º</font> - Escolha a <strong>Cota Contemplada</strong> de seu interesse.</p>

                    <p class="e18 mb10 lh26"><font class="fb e18">2º</font> - Preencha e envie-nos o formulário de interesse da <strong>Cota Contemplada</strong> desejada</p>

                    <p class="e18 mb10 lh26"><font class="fb e18">3º</font> - Pronto, entreremos em contato e esclarecemos todas as suas dúvidas</p>
                </div>
            </div>

        </div>
    </div>
</div>