<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon.com. Spend less. Smile more.</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="img/icon.png" type="image/png">
</head>
<body>
    <div id="menu">
        <img src="img/logo.png" class="logo">
        <div class="pesquisa">
            <input type="text" class="buscar" placeholder="Buscar..."/>
        </div>
        <a class="perfil" href="login.php">
            Entrar
        </a>
        <a class="carrinho">
            Carrinho
        </a>
        <a class="compras">
            Compras
        </a>
    </div>
    <div id="menu-dois">
        <span class="submenu">
            <i class='bx bx-menu'></i>
                <b>Todos</b>
        </span>
        <span class="submenu">
            Ofertas do Dia
        </span>
        <span class="submenu">
            Atendimento ao Cliente
        </span>
        <span class="submenu">
            Vale-presente
        </span>
        <span class="submenu">
            Minhas Listas
        </span>
        <span class="submenu">
            Vender
        </span>
    </div>
    <div id="container">
        <div class="imagem">
            <div class="conteudo">
                <h3>Amazon Basics</h3>
                <img src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2020/May/Dashboard/Fuji_Dash_StripLighting_379x304_1X_en_US._SY304_CB418597476_.jpg" class="produto-img">
                <a href="#" target="_blank" class="link">Ver mais</a>
            </div>
            <div class="conteudo">
                <h3>Click here to shop in English</h3>
                <img src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2021/January/Fuji_Dash_ClicktoShop_EN_v3__1x._SY304_CB661258542_.jpg" class="produto-img">
                <a href="#" target="_blank" class="link">Change your language preference</a>
            </div>
            <div class="conteudo">
                <h3>Seleção de itens de beleza</h3>
                <img src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2020/May/Dashboard/Fuji_Dash_Beauty_1x._SY304_CB432774351_.jpg" class="produto-img">
                <a href="#" target="_blank" class="link">Compre agora</a>
            </div>
            <div class="conteudo">
                <h3>Saúde e cuidados pessoais</h3>
                <img src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2022/February/DashboardCards/GW_CONS_AUS_HPC_HPCEssentials_CatCard_Desktop1x._SY304_CB627424361_.jpg" class="produto-img">
                <a href="#" target="_blank" class="link">Ver mais</a>
            </div>
        </div>
    </div>
    <div id="container-dois">
        <div class="conteudo-dois">
            <h3>Encontre a sua TV ideal</h3>
            <img src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2020/May/Dashboard/Fuji_Dash_TV_2X._SY304_CB432517900_.jpg" class="produto-img">
            <a href="#" target="_blank" class="link">Ver mais</a>
        </div>
        <div class="conteudo-dois">
            <h3>Fique em forma em casa</h3>
            <img src="https://images-na.ssl-images-amazon.com/images/G/01/events/GFAH/GWDesktop_SingleImageCard_fitathome_1x._SY304_CB434924743_.jpg" class="produto-img">
            <a href="#" target="_blank" class="link">Continue explorando</a>
        </div>
        <div class="conteudo-dois">
            <h3>Eletrônicos</h3>
            <img src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2020/May/Dashboard/Fuji_Dash_Electronics_1x._SY304_CB432774322_.jpg" class="produto-img">
            <a href="#" target="_blank" class="link">Ver mais</a>
        </div>
        <div class="conteudo-dois">
            <h3>Casa e Cozinha</h3>
            <img src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2021/September/Fuji_Dash_en_US._SY304_CB641328052_.jpg" class="produto-img">
            <a href="#" target="_blank" class="link">Ver mais</a>
        </div>
    </div>
    <div id="container-dois">
        <div class="conteudo-dois">
            <h3>Comprar laptops e tablets</h3>
            <img src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2020/May/Dashboard/Fuji_Dash_Laptops_379x304_1X_en_US._SY304_CB418608471_.jpg" class="produto-img">
            <a href="#" target="_blank" class="link">Ver mais</a>
        </div>
        <div class="conteudo-dois">
            <h3>Para Animais de Estimação</h3>
            <img src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2021/September/DashboardCards/Fuji_Dash_Pets_1X._SY304_CB639746743_.jpg" class="produto-img">
            <a href="#" target="_blank" class="link">Compre agora</a>
        </div>
        <div class="conteudo-dois">
            <h3>Ofertas de ferramentas</h3>
            <img src="https://images-na.ssl-images-amazon.com/images/G/01/home/THILGMA/Holiday2022/Graphics/XCM_CUTTLE_1475305_2610205_379x304_1X_en_US._SY304_CB608600856_.jpg" class="produto-img">
            <a href="#" target="_blank" class="link">Compre agora</a>
        </div>
        <div class="conteudo-dois">
            <h3>Para suas atividades esportivas</h3>
            <img src="https://images-na.ssl-images-amazon.com/images/G/01/AmazonExports/Fuji/2021/September/DashboardCards/Fuji_Dash_Fitness_1X._SY304_CB639748186_.jpg" class="produto-img">
            <a href="#" target="_blank" class="link">Ver mais</a>
        </div>
    </div>
    <div id="rodape">
        <div class="voltar">
            <a href="#" class="link-dois">Voltar ao início</a>
        </div>
        <div class="informacoes">
            <div class="info">
                <h4>Conheça-nos</h4>
                <ul>
                    <li>
                        <a href="#" class="link-tres">Carreiras</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres">Blog</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres">Sobre a Amazon</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres">Relações do investidor</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres">Dispositivos Amazon</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres">Amazon Science</a> 
                    </li>
                </ul>
            </div>
            <div class="info">
                <h4>Ganhe dinheiro conosco</h4>
                <ul>
                    <li>
                        <a href="#" class="link-tres">Venda na Amazon</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres">Venda na Amazon Business</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres">Venda seus aplicativos na Amazon</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres">Seja um associado</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres">Anuncie seus produtos</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres">Publique seus livros</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres">Tenha um Amazon Hub</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres"><b>></b> Veja mais</a> 
                    </li>
                </ul>
            </div>
            <div class="info">
                <h4>Formas de pagamento</h4>
                <ul>
                    <li>
                        <a href="#" class="link-tres">Comprar com pontos</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres">Atualizar seu saldo</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres">Conversor de moedas da Amazon</a> 
                    </li>
                </ul>
            </div>
            <div class="info">
                <h4>Deixe-nos ajudar você</h4>
                <ul>
                    <li>
                        <a href="#" class="link-tres">Amazon e COVID-19</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres">Sua conta</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres">Seus pedidos</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres">Frete e prazo de entrega</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres">Devoluções e reembolsos</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres">Gerencie seu conteúdo e dispositivos</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres">Amazon Assistent</a> 
                    </li>
                    <li>
                        <a href="#" class="link-tres">Ajuda</a> 
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>