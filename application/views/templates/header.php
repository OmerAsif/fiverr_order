
<!DOCTYPE html >

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" content="pt-br" />

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <meta name= "robots" content="all" />
            <meta name="author" content="Carta de Crédito Contemplada" />
            <meta name="title" content="Carta de Credito Contemplada Consórcio Contemplado" />
            <meta name="description" content="Consórcios Contemplados Bradesco, Itaú, Porto Seguro, Caixa, Rodobéns. Escolha a sua cota contemplada e aguarde o nosso contato. Temos Cotas Contempladas de diversos valores e administradoras." />
            <meta name="rating" content="general" />
            <meta name="googlebot" content="index, follow" />
            <meta name="audience" content="all" />
            <meta name="reply-to" content="paulorpimobiliaria@hotmail.com" />
            <meta name="company" content="Carta de Crédito Contemplada" />
            <meta property="og:title" content="Carta de Credito Contemplada Consórcio Contemplado" />
            <meta property="og:type" content="company"/>
            <meta property="og:url" content="index.html" />
            <meta property="og:image" content="index.html" />
            <meta property="og:site_name" content="Carta de Crédito Contemplada" />
            <meta property="og:description" content="Consórcios Contemplados Bradesco, Itaú, Porto Seguro, Caixa, Rodobéns. Escolha a sua cota contemplada e aguarde o nosso contato. Temos Cotas Contempladas de diversos valores e administradoras." />
            <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/layout/favicon.png "/>
            <title>Carta de Credito Contemplada Consórcio Contemplado</title>

            <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" />
            <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css" />
            <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/gneral.css" />

            <!-- HTML 5 shim, for IE6-8  support of HTML5 elements -->
            <!-- 
            [if lt IE 9]>
                    <script src="js/html5shiv.min.js"></script>
                <script src="js/respond.min.js"></script>
            [endif]
            -->
            <script>
                (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
                ga('create', 'UA-120606838-1', 'auto');
                ga('send', 'pageview');

                !function (f, b, e, v, n, t, s)
                {
                    if (f.fbq)
                        return;
                    n = f.fbq = function () {
                        n.callMethod ?
                                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                    };
                    if (!f._fbq)
                        f._fbq = n;
                    n.push = n;
                    n.loaded = !0;
                    n.version = '2.0';
                    n.queue = [];
                    t = b.createElement(e);
                    t.async = !0;
                    t.src = v;
                    s = b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t, s)
                }(window, document, 'script',
                        '//connect.facebook.net/en_US/fbevents.js');
                fbq('init', '813160875690734');
                fbq('track', 'PageView');
            </script>
            <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=813160875690734&amp;ev=PageView&amp;noscript=1" /></noscript>
    </head>
    

    <body>
        <div class="container full bgTopo">

            <div class="container">
                <div class="row ptb10">
                    <div class="col-lg-12">
                        <p class="float">
                            <em class="fa fa-envelope-square"></em> <?php echo $contact[0]['company_email']?>
                        </p>
                        <p class="floatD e18">
                            <a href="tel:<?php echo $contact[0]['contact_no']?>" rel="nofollow" target="_blank" class="lNeutro"><em class="fa fa-phone"></em> <font><?php echo $contact[0]['contact_no']?></font></a>

                            <a href="https://api.whatsapp.com/send?phone=<?php echo $contact[0]['whatsapp']?>&amp;text=Gostaria%20de%20saber%20sobre%20as%20Cartas%20Contempladas..." rel="nofollow" class="lNeutro"><em class="fa fa-phone ml15"></em> <font><?php echo $contact[0]['whatsapp']?> <em class="fa fa-whatsapp dn380 dn480"></em></font></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container full">
            <div class="container">
                <div class="row pt15 pb10">
                    <div class="col-lg-12 txtCenter">
                        <a href="index.html" title="Carta de Crédito Contemplada"><img src="<?php echo base_url()?>assets/img/layout/logo.png" border="0" id="logoTopo" title="Carta de Crédito Contemplada" alt="Carta de Crédito Contemplada" /></a>

                        <div id="menuAtivar" class="floatD cp visible-xs e20">
                            <i class="fa fa-navicon"></i>
                        </div>
                    </div>


                </div>

            </div>
        </div>

        <div class="container full bgMenu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu e16">
                            <ul>
                                <li><a href="<?php echo base_url()?>" class="atual">Home</a></li>
                                <li><a href="<?php echo base_url()?>content/cartas_de_credito_contempladas_imoveis" >Cartas de Crédito Imóveis</a></li>
                                <li><a href="<?php echo base_url()?>content/cartas_de_credito_contempladas_veiculos" >Cartas de Crédito Veículos</a></li>
                                <li><a href="<?php echo base_url()?>content/venda_de_consorcio.html" >Venda sua Cota</a></li>
                                <li><a href="<?php echo base_url()?>content/carta_de_credito_contemplada_como_funciona" >Como Funciona</a></li>
                                <li><a href="<?php echo base_url()?>content/contato" >Contato</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container full bgBranco p0 visible-lg visible-md visible-sm" id="bannerContainer">
            <div id="bannerPrincipal" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="item  active ">
                        <img src="<?php echo base_url()?>assets/img/posts/postagens/201805111702461175/800/18470329062018.jpg" width="100%" title="Carta de Crédito Contemplada" alt="Carta de Crédito Contemplada" />                    
                    </div>
                </div>


            </div>
        </div> 
