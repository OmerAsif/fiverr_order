<div class="container full">
    <div class="container">
        <div class="row pt50 pb70">
            <div class="col-lg-12">
                <h1 class="txtCenter mb15 tituloConteudo">Cartas de Crédito Contempladas de Veículos</h1>
                <p class="mb30 txtCenter lh26 e18 me16"><strong class="fn">Consórcio Contemplado de Veículo</strong> de diversas administradoras. Temos <strong class="fn">Consórcios Contemplados Veículo Bradesco</strong>, <strong class="fn">Cota Contemplada Itaú Veículo</strong>, <strong class="fn">Carta de Crédito Contemplada de Veículo Porto Seguro</strong> e tantas outras. Escolha a sua <strong class="fn">cota contemplada de veículo</strong> e aguarde o nosso contato.</p>

                <table class="table table-hover table-bordered table-striped mb0">
                    <tr><th colspan="4" width="50%" class="tabelaTopoTituloBg"><p class="txtCenter e20 me16 fMax"><em class="fa fa-car"></em> Cartas de Crédito de Veículos</p></th></tr>
                </table>                      
                <div class="table-responsive bordaNone">
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
                        <!--<tbody class="fPreto3">-->
                            <?php
                            $fmt = new NumberFormatter('pt_BR', NumberFormatter::CURRENCY);
                            
                            
                            foreach ($lists as $key => $val) { //var_dump($val)
                                ?>
                                <tr class="cotaContemplada cp" 
                                    data-cotaCodigo="<?php echo $val['ID'] ?>" 
                                    data-cotaTipo="<?php echo $val['property_type'] ?>" 
                                    data-cotaCredito="<?php echo $fmt->formatCurrency(($val['credit']), "BRL"); ?>"
                                    data-cotaEntrada="<?php echo $fmt->formatCurrency(($val['input']), "BRL"); ?>" 
                                    data-cotaParcelas="<?php echo($val['installments']); ?>" 
                                    data-cotaParcelaValor="Colocar a parcela"
                                    data-cotaAdministradoraNome="<?php echo$val['administrator']; ?>"
                                    data-cotaSituacao="<?php echo $val['situation']; ?>"
                                    data-cotaObservacao="<?php echo $val['note']; ?>"
                                    >


                                    <td><?php echo $fmt->formatCurrency(($val['credit']), "BRL"); ?></td>
                                    <td class="dn380"><?php echo $fmt->formatCurrency(($val['input']), "BRL"); ?></td>
                                    <td align="center" class="visible-lg visible-md"><?php echo($val['installments']); ?></td>
                                    <td align="center" class="administradoraTabelaImg">
                                        <p><?php echo($val['administrator']); ?></p>

                                    </td>
                                    <td align="center" class="visible-lg visible-md"><?php echo($val['situation']); ?></td>
                                    <td align="center" class="visible-lg visible-md"><?php echo($val['note']); ?></td>
                                    <td align="center" class="visible-lg visible-md"><em class="fa fa-thumbs-o-up"></em><?php echo($val['interested']); ?></td>
                                </tr>
                            <?php } ?>  	      
                        </tbody>
                    </table>
                </div> 
                <div class="quebra50"></div>
            </div>

            <div class="col-lg-12">
                <a href="venda-de-consorcio.html"><img src="img/modelo/vender-consorcio-contemplado-ou-nao.jpg" width="100%" border="0" class="mb50 img-rounded" /></a>
            </div>      

        </div>

    </div>
</div>