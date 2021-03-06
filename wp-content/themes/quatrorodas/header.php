<?php
    $link_template = get_template_directory_uri();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title>Quatro Rodas</title>
    <link href='https://fonts.googleapis.com/css?family=Dosis:700|Asap:400,700' rel='stylesheet' type='text/css'>
    <link href='<?= $link_template;?>/style.css' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="<?= $link_template;?>/js/padrao.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="layer-responsiva"></div>
<header id="topo-fixed">
    <div class="container">
        <div id="publicidade-topo"><a href="#"><img src="<?= $link_template;?>/imagens/banner.png" alt="Publicidade"/></a></div>
        <nav id="menu-principal-container" class="fundo-vermelho">
            <div id="btn-lupa"></div>
            <div id="btn-menu"></div>
            <a href="#" id="logo-topo"><img src="<?= $link_template;?>/imagens/logo.png" alt="Logo Quatro Rodas"/></a>
            <div id="redes-sociais-topo">
                <a href="https://www.facebook.com/quatrorodas" target="_blank"><img src="<?= $link_template;?>/imagens/facebook.png" alt="Facebook Quatro Rodas"/></a>
                <a href="https://www.instagram.com/quatro_rodas/" target="_blank"><img src="<?= $link_template;?>/imagens/instagram.png" alt="Instagram Quatro Rodas"/></a>
                <a href="https://twitter.com/quatrorodas" target="_blank"><img src="<?= $link_template;?>/imagens/twitter.png" alt="Twitter Quatro Rodas"/></a>
                <a href="http://www.abril.com.br/" target="_blank"><img src="<?= $link_template;?>/imagens/abril.png" alt="Abril"/></a>
            </div>
            <ul class="menu-principal">
                <li class="dropdown">
                    <a href="#" class="link-menu-principal">CARROS</a>
                    <ul class="menu-dropdown menu-dropdown-carros fundo-cinza">
                        <li><a href="#">Ver todos os carros</a></li>
                        <ul class="conteudo-menu-dropdown conteudo-menu-carros fundo-cinza">
                            <li><a href="#">Audi</a></li>
                            <li><a href="#">Bentley</a></li>
                            <li><a href="#">BMW</a></li>
                            <li><a href="#">Chevrolet</a></li>
                            <li><a href="#">Chrysler</a></li>
                            <li><a href="#">Chevrolet</a></li>
                            <li><a href="#">Dodge</a></li>
                            <li><a href="#">Ferrari</a></li>
                            <li><a href="#">Fiat</a></li>
                            <li><a href="#">Ford</a></li>
                            <li><a href="#">Honda</a></li>
                            <li><a href="#">Hyundai</a></li>
                            <li><a href="#">JAC Motos</a></li>
                            <li><a href="#">Jaguar</a></li>
                            <li><a href="#">Jeep</a></li>
                            <li><a href="#">Kia</a></li>
                            <li><a href="#">Lamborghini</a></li>
                            <li><a href="#">Mercedes-Benz</a></li>
                            <li><a href="#">Mitsubishi</a></li>
                            <li><a href="#">Volkswagen</a></li>
                        </ul>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="link-menu-principal">TESTES</a>
                    <ul class="menu-dropdown menu-dropdown-testes">
                        <li>
                            <a href="#" class="link-menu-dropdown-testes link-menu-dropdown-testes-ativo">Ver tudo de testes</a>
                            <ul class="conteudo-menu-dropdown conteudo-menu-testes fundo-cinza">
                                <li>
                                    <a href="#">
                                        <img src="<?= $link_template;?>/imagens/conteudo/teste-1.png" alt="Ford Focus Fastback Titanium Plus" />
                                        <h1 class="titulo-menu-teste">Ford Focus Fastback Titanium Plus</h1>
                                        <p class="ctd-menu-teste">EcoSport ganha motor 1.6 atrelado à transmissão automatizada de 6...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?= $link_template;?>/imagens/conteudo/teste-2.png" alt="Audi A6 2.0 TFSI" />
                                        <h1 class="titulo-menu-teste">Audi A6 2.0 TFSI</h1>
                                        <p class="ctd-menu-teste">EcoSport ganha motor 1.6 atrelado à transmissão automatizada de 6...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?= $link_template;?>/imagens/conteudo/teste-3.png" alt="Ford EcoSport 1.6 Powershift" />
                                        <h1 class="titulo-menu-teste">Ford EcoSport 1.6 Powershift</h1>
                                        <p class="ctd-menu-teste">EcoSport ganha motor 1.6 atrelado à transmissão automatizada de 6...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?= $link_template;?>/imagens/conteudo/teste-4.png" alt="Audi Q3 1.4" />
                                        <h1 class="titulo-menu-teste">Audi Q3 1.4</h1>
                                        <p class="ctd-menu-teste">EcoSport ganha motor 1.6 atrelado à transmissão automatizada de 6...</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?= $link_template;?>/imagens/conteudo/teste-5.png" alt="BMW 420i Cabriolet" />
                                        <h1 class="titulo-menu-teste">BMW 420i Cabriolet</h1>
                                        <p class="ctd-menu-teste">EcoSport ganha motor 1.6 atrelado à transmissão automatizada de 6...</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#" class="link-menu-dropdown-testes">Comparativos</a></li>
                        <li><a href="#" class="link-menu-dropdown-testes">Impressões</a></li>
                        <li><a href="#" class="link-menu-dropdown-testes">Longa duração</a></li>
                        <li><a href="#" class="link-menu-dropdown-testes">Teste de pista</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="link-menu-principal">NOTÍCIAS</a></li>
                <li class="dropdown"><a href="#" class="link-menu-principal">AUTO-SERVIÇO</a></li>
                <li class="dropdown"><a href="#" class="link-menu-principal">GUIA DE COMPRAS</a></li>
                <li class="dropdown"><a href="#" class="link-menu-principal">TABELA FIPE</a></li>
                <li><a href="#" class="link-menu-principal">ASSINE</a></li>
            </ul>
            <div class="container-busca">
                <form action="#" class="form-busca">
                    <input placeholder="PESQUISAR" class="ipt-busca" type="search"/>
                    <input type="submit" value="" class="submit-busca"/>
                </form>
            </div>
            <a href="#" class="btn-assine">ASSINE</a>
            <div class="clear"></div>
        </nav>
    </div>
</header>
<div class="container">
    <nav id="menu-secundario" class="fundo-cinza">
        <a href="#">+ ACESSADOS</a>
        <a href="#">Salão do automóvel</a>
        <a href="#">RENEGADE</a>
        <a href="#">NOVO SANDERO</a>
        <a href="#">NOVO FOX</a>
        <a href="#">NOVO KA</a>
        <a href="#">duster</a>
        <a href="#">GOLF</a>
        <a href="#">COROLLA</a>
        <a href="#">CIVIC</a>
        <a href="#">| A - Z |</a>
    </nav>
</div>