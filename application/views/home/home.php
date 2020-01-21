

<div class="container full">
    <div class="container">
        <div class="row pt30">

            <div class="col-lg-12">
                <h1 class="pt30 txtCenter mb15 tituloConteudo">Cartas de Crédito Contempladas</h1>
                <p class="mb30 txtCenter lh26 e18 me16"><strong class="fn">Consórcios Contemplados</strong> Bradesco, Itaú, Porto Seguro, Caixa, Rodobéns.<br />Escolha a sua <strong class="fn">cota contemplada</strong> e aguarde o nosso contato.</p>

                <table class="table table-hover table-bordered table-striped mb0">
                    <tr><th colspan="4" width="50%" class="tabelaTopoTituloBg"><p class="txtCenter e20 me16 fMax"><em class="fa fa-home"></em> Cartas de Crédito de Imóveis</p></th></tr>
                </table>                      
                <div class="table-responsive bordaNone mb5">
                    <table id="tbCotasImoveis" class="table table-responsive table-hover table-bordered table-striped mb50">
                        <thead>
                            <tr>
                                <th>Crédito</th>
                                <th class="dn380">Entrada</th>
                                <th class="visible-lg visible-md">Parcelas</th>
                                <th>Administradora</th>
                                <th class="visible-lg visible-md">Situação</th>
                                <th class="visible-lg visible-md">Observação</th>
                                <th class="visible-lg visible-md">Estou interessado</th>
                            </tr>
                        </thead> 
                        <tbody class="fPreto3" data-toggle="modal" data-target="#cotaInteresseModal">
                            <?php
                            $fmt = new NumberFormatter('pt_BR', NumberFormatter::CURRENCY);


                            foreach ($lists as $key => $val) { //var_dump($val)
                                ?>
                                <tr 
                                    class="cotaContemplada cp"
                                    data-cotaCodigo="3256"
                                    data-cotaTipo="Imóveis" 
                                    data-cotaCredito="<?php echo $fmt->formatCurrency(($val['credit']), "BRL"); ?>" 
                                    data-cotaEntrada="<?php echo $fmt->formatCurrency(($val['input']), "BRL"); ?>" 
                                    data-cotaParcelas="<?php echo($val['installments']); ?>" 
                                    data-cotaParcelaValor="Colocar a parcela" 
                                    data-cotaAdministradoraNome="<?php echo$val['administrator']; ?>"
                                    data-cotaAdministradoraImg="<?php echo $val['administrator']; ?>"
                                    data-cotaAdministradoraImg="<?php echo $val['administrator']; ?>"
                                    data-cotaSituacao="<?php echo $val['situation']; ?>"
                                    data-cotaObservacao="<?php echo $val['note']; ?>"
                                    
                                    
                                    > 
                            <td><?php echo $fmt->formatCurrency(($val['credit']), "BRL"); ?></td>
                            <td class="dn380"><?php echo $fmt->formatCurrency(($val['input']), "BRL"); ?></td>
                            <td align="center" class="visible-lg visible-md"><?php echo($val['installments']); ?></td>
                            <td align="center" class="administradoraTabelaImg"><p class=""><?php echo($val['administrator']); ?></p></th>
                            <td align="center" class="visible-lg visible-md"><?php echo($val['situation']); ?></td>
                            <td align="center" class="visible-lg visible-md"><?php echo($val['note']); ?></td>
                            <td align="center" class="visible-lg visible-md"><em class="fa fa-thumbs-o-up"></em><?php echo($val['interested']); ?></td>
                            </tr>
                        <?php } ?>       

                        </tbody>       	                        
                    </table>                        
                </div> 
                <p class="txtCenter"><a href="<?php echo base_url()?>content/cartas_de_credito_contempladas_imoveis" class="lSimples">Ver todas as cartas contempladas de imóveis</a></p>
                <div class="quebra50"></div>
                <table class="table table-hover table-bordered table-striped mb0">
                    <tr><th colspan="4" class="tabelaTopoTituloBg"><p class="txtCenter e20 me16 fMax"><em class="fa fa-car"></em> Cartas de Crédito de Veículos</p></th></tr>
                </table>                    
                <div class="table-responsive bordaNone mb5">                    
                    <table id="tbCotasVeiculos" class="table table-responsive table-hover table-bordered table-striped mb50">
                        <thead>
                            <tr>
                                <th>Crédito</th>
                                <th class="dn380">Entrada</th>
                                <th class="visible-lg visible-md">Parcelas</th>
                                <th>Administradora</th>
                                <th class="visible-lg visible-md">Situação</th>
                                <th class="visible-lg visible-md">Observação</th>
                                <th class="visible-lg visible-md">Estou interessado</th>
                            </tr>
                        </thead>                            
                        <tbody class="fPreto3" data-toggle="modal" data-target="#cotaInteresseModal">
                            <?php
                                foreach ($lists1 as $key => $val) {
                                    //var_dump($val)
                                    ?>
                            <!--<tr class="cotaContemplada cp" data-cotaCodigo="3280" data-cotaTipo="Veículos" data-cotaCredito="R$ 90.000,00" data-cotaEntrada="R$ 38.000,00" data-cotaParcelas="40 x 2.157,00" data-cotaParcelaValor="Colocar a parcela" data-cotaAdministradoraNome="Porto Seguro" data-cotaAdministradoraImg="assets/img/posts/postagens/201804232124041365/200/21240423042018.jpg" data-cotaSituacao="<?php echo($val['situation']); ?>" data-cotaObservacao="" data-cotaLink="3280/consorcio-contemplado-veiculos/porto-seguro">-->

                                
                            <tr class="cotaContemplada cp" data-cotaCodigo="3256" data-cotaTipo="Imóveis" data-cotaCredito="<?php echo $fmt->formatCurrency(($val['credit']), "BRL"); ?>" data-cotaEntrada="<?php echo $fmt->formatCurrency(($val['input']), "BRL"); ?>" data-cotaParcelas="<?php echo($val['installments']); ?>" data-cotaParcelaValor="Colocar a parcela" data-cotaAdministradoraNome="<?php echo$val['administrator']; ?>" data-cotaAdministradoraImg="<?php echo $val['administrator']; ?>" data-cotaSituacao="<?php echo($val['situation']); ?>" >
                            <td><?php echo $fmt->formatCurrency(($val['credit']), "BRL"); ?></td>
                            <td class="dn380"><?php echo $fmt->formatCurrency(($val['input']), "BRL"); ?></td>
                            <td align="center" class="visible-lg visible-md"><?php echo($val['installments']); ?></td>
                            <td align="center" class="administradoraTabelaImg"><p><?php echo($val['administrator']); ?></p></td>
                            <td align="center" class="visible-lg visible-md"><?php echo($val['situation']); ?></td>
                            <td align="center" class="visible-lg visible-md"><?php echo($val['note']); ?></td>
                            <td align="center" class="visible-lg visible-md"><em class="fa fa-thumbs-o-up"></em><?php echo($val['interested']); ?></td>
                            </tr>
                        <?php } ?>     
                        </tbody>                            
                    </table>
                </div>
                <p class="txtCenter"><a href="<?php echo base_url()?>content/cartas_de_credito_contempladas_veiculos" class="lSimples">Ver todas as cartas contempladas de veículos</a></p>
                <div class="quebra50"></div>
            </div>

            <div class="col-lg-12">
                <a href="venda-de-consorcio.html"><img src="img/modelo/vender-consorcio-contemplado-ou-nao.jpg" width="100%" border="0" class="mb50 img-rounded" /></a>
            </div>            
        </div>
    </div>
</div>

<div class="container full">
    <div class="container">
        <div class="row ptb50 txtCenter">
            <div class="col-lg-4 col-md-4">
                <p class="mb10 e22 fb fMax"><em class="fa fa-heart fCliente"></em> Responsabilidade</p>
                <p class="lh26 e14 mb30">Não somos representantes ou extensão da administradora de consórcios citada nesse site. As negociações de cotas dão-se mediante transferência e com a anuência da respectiva administradora de consórcio, que tem seu nome mencionado em atenção aos artigos 30 e 31 da Lei 8.078/90 - CDC.</p>
            </div>

            <div class="col-lg-4 col-md-4">
                <p class="mb10 e22 fb fMax"><em class="fa fa-exclamation-triangle fCliente"></em> Atenção</p>
                <p class="lh26 e14 mb30">Antes de fechar negócio ou transferir valores, certifique-se de que os dados da cota e sua procedência coincidem com o conteúdo anunciado.</p>
            </div>

            <div class="col-lg-4 col-md-4">
                <p class="mb10 e22 fb fMax"><em class="fa fa-money fCliente"></em> Pagamento de Sinal</p>
                <p class="lh26 e14 mb30">Na negociação de cotas, o sinal e princípio de pagamento serve como reserva de cota e fechamento do negócio. Assim, a desistência do comprador implicará na perda do sinal, nos termos do artigo 418 do Código Civil.</p>
            </div>
        </div>
    </div>
</div>
