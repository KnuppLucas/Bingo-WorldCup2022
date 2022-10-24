<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BINGO</title>
</head>
<body>
<header>
            <div class="home-link">
                <p><a href="index.php">HOME</a></p>
            </div>
            <div class="game-link">
                <p><a href="game.php">GAME</a></p>
            </div>
            <div class="cadastro-link">
                <p><a href="login.php">LOGIN</a></p>
            </div>
    </header>

    <div id="main-content">
        <img src="background/qatar.jpg" height="730px">

        

        <div class="messages">

            <p>
                Cada jogador pode usar de 1 a 4 cartelas de 24 números aleatórios de 1 a 75. 
                A cada rodada um número é sorteado e o jogador verifica se ele está na sua cartela. 
                O jogador completa sua(s) cartela(s) marcando os números sorteados. 
                O objetivo é completar linhas, colunas ou diagonais, de acordo com o padrão da fase.
            </p>
            <br><br>
            <p>
                No nosso jogo você vai jogar o modo de cartela completa, ou seja. Você deve marcar
                todos os ícones da cartela.
            </p>
            <br><br>
            <p>
                Se você quer jogar o jogo por favor clique no botão abaixo para fazer o login ou se cadastrar! Bom jogo!
            </p>
            <center><a href="login.php"><button class="buttonToLogin">FAZER LOGIN OU CADASTRAR</button></a></center>
        </div>
        
    </div>

</body>
</html>