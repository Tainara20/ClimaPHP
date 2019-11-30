<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Informações Climaticas da sua cidade</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


        <script src="js/clima.js"></script>

                <!-- Tags Gerais -->
        <meta NAME="DESCRIPTION" CONTENT="Site de infrmaçoes climaticas desenvilvida por Tainara Camargo"/>
        <meta NAME="ABSTRACT" CONTENT="Fique por dentro do clima da sua região!"/>
        <meta name="keywords" content="tempo em brusque, tempo para brusque, clima de hoje para brusque, previsão do clima para brusque, tempo minímo para brusque, tempo maximo para brusque, previsão da semana para brusque, Previsão do tempo para os próximos 15 dias em Brusque, Brusque, SC Previsão do Tempo,O Tempo em Brusque, Clima Brusque, Previsão do tempo mensal para Brusque, Linha do tempo em Brusque, "/>
        <meta NAME="title" CONTENT="Site de infrmaçoes climaticas desenvilvida por Tainara Camargo" />
        <meta NAME="identifier-url" content="https://tainara-clima-senai.herokuapp.com/" />
        <meta NAME="author" content="Tainara Camargo" />
        <meta NAME="ROBOTS" CONTENT="All" />
        <meta NAME="RATING" CONTENT="general" />
        <meta NAME="DISTRIBUTION" CONTENT="global" />
        <meta NAME="LANGUAGE" CONTENT="pt-br" />
        <meta name="content-language" content="portuguese" />
        <meta name="doc-class" content="Completed" /> 
        <meta name="reply-to" content="Taay7106@gmail.com"/>
        
                <!-- Tags Para rede social Facebook -->
        <meta property="og:url" content="https://tainara-clima-senai.herokuapp.com/" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Site de infrmaçoes climaticas desenvilvida por Tainara Camargo" />
        <meta property="og:title" content="Site de infrmaçoes climaticas desenvilvida por Tainara Camargo" />
        <meta property="og:description" content="" />
        <meta property="og:image" content="https://tainara-clima-senai.herokuapp.com/img/exemplos/pordosol.png" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="120" />
        <meta property="fb:app_id" content="" />
        
                <!-- Tags Para rede social Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="Site de infrmaçoes climaticas desenvilvida por Tainara Camargo" />
        <meta name="twitter:title" content="Site de infrmaçoes climaticas desenvilvida por Tainara Camargo" />
    </head>
    <body>
        <div class="row">

            <div class="col-md-12">

                <div class="alert alert-success">
                    Alerta!!!!
                </div>
            </div>
        </div>

        <div class="jumbotron">
            <h1>Tempo para Brusque-SC | <span id="temperatura"> </span></h1>
            <p>
                <span id="situacao"></span>
                <img id="icone" src="img/icones/02d.png"/>
        </div>

    </p>
    <div class="media">

        <img class="align-self-center mr-3" src="img/exemplos/temperatura.png" alt="Imagem de exemplo genérica">

        <div class="media-body">
            <h5 class="mt-0"></h5>
        </div>
    </div>



    <div class="jumbotron">
        <h1>Umidade do ar | <span id="umidadeDoAr"> </span></h1>
        <p>
            <span id="situacao"></span>
            <img src="img/icones/02d.png"/>

    </div>  


</p>

<div class="media">

    <img class="align-self-center mr-3" src="img/exemplos/umidade.png" alt="Imagem de exemplo genérica">

    <div class="media-body">
        <h5 class="mt-0"></h5>
    </div>
</div>
<div class="jumbotron">
    <h1>Pressão do ar | <span id="pressaoDoAr"> </span></h1>
    <p>
        <span id="situacao"></span>
        <img src="img/icones/02d.png"/>


</div>

</p>

<div class="media">
    <img class="align-self-center mr-3" src="img/exemplos/velocidadedovento.png" alt="Imagem de exemplo genérica">
    <div class="media-body">
        <h5 class="mt-0"></h5>
    </div>
</div>
<div class="jumbotron">
    <h1> Velocidade do vento | <span id="velocidadeDoVento"> </span></h1>
    <p>
        <span id="situacao"></span>
        <img src="img/icones/02d.png"/>



    </p>

</div>
<img class="align-self-center mr-3" src="img/exemplos/maxima.png" alt="Imagem de exemplo genérica">
<div class="media-body">
    <h5 class="mt-0"></h5>
    <p></p>
    <p class="mb-0"></p>
</div>

<div class="jumbotron">
    <div class="jumbotron">
        <h1>temperatura máxima | <span id="temperaturaMaxima"> </span></h1>
        <p>
            <span id="situacao"></span>
            <img src="img/icones/02d.png"/>



        </p>
    </div>
</div>                   
<div class="media">
    <img class="align-self-center mr-3" src="img/exemplos/maxima.png" alt="Imagem de exemplo genérica">
    <div class="media-body">
        <h5 class="mt-0"></h5>
        <p></p>
        <p class="mb-0"></p>
    </div>
</div>
<div class="jumbotron">
    <h1> Nascer do Sol| <span id="nascerDoSol"> </span></h1>
    <p>
        <span id="situacao"></span>
        <img src="img/icones/02d.png"/>



    </p>
</div>

<img class="align-self-center mr-3" src="img/exemplos/nascerdosol.jpg" alt="Imagem de exemplo genérica">
<div class="media-body">
    <h5 class="mt-0"></h5>
    <p></p>
    <p class="mb-0"></p>
</div>

<div class="jumbotron">
    <h1> Por do sol | <span id="porDoSol"> </span></h1>
    <p>
        <span id="situacao"></span>
        <img src="img/icones/02d.png"/>



    </p>
</div> 

<img class="align-self-center mr-3" src="img/exemplos/pordosol.png" alt="Imagem de exemplo genérica">
<div class="media-body">
    <h5 class="mt-0"></h5>
    <p></p>
    <p class="mb-0"></p>
</div>





<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Botão dropdown
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Alguma ação</a>
        <a class="dropdown-item" href="#">Outra ação</a>
        <a class="dropdown-item" href="#">Alguma coisa aqui</a>
        <a class="dropdown-item" href="#">Alguma coisa aqui também</a>
    </div>
</div>






</body>
</html>
