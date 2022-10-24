<?php session_start();?>
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
        <h1>Bem vindo a página de cadastro do nosso jogo de BINGO</h1>
        
        <div class="camp-to-login">
            <div class="login-up">
                <p>Se você já tem cadastro, preencha os dados abaixo: </p>
                <form action="sessionPlayers.php" method="post">
                    <p> Nome de usuário: </p><input type="text" name="userName" id="userName" placeholder="Digite seu nome">
                    <p> Senha: </p><input type="password" name="password" id="password" placeholder="Digite sua senha">
                    <p> Seleção: </p><input type="text" name="selecao" id="selecao" placeholder="Digite sua seleção favorita">
                    <input class="buttonStart" type="submit" value="CONCLUIR LOGIN" name="btnSessions">
                </form>
            </div>

            <div class="register">
                <p>Se não tem, preencha os dados abaixo: </p>
                <form action="sessionPlayers.php" method="post">
                    <p> Nome de usuário: </p><input type="text" name="userName" id="userName" placeholder="Digite seu nome">
                    <p> E-mail: </p><input type="email" name="email" id="email" placeholder="Digite seu email">
                    <p> Senha: </p><input type="password" name="password" id="password" placeholder="Digite sua senha">
                    <input class="buttonStart" type="submit" value="CONCLUIR LOGIN" name="btnSessions">
                </form>
                <?php 
                    if(isset($_POST['btnSessions'])) {
                        header('refresh: 1; url=/knuppejessica/sessionsPlayers.php/');
                    }
                ?>
                
            </div>
        </div>
        
    </div>

</body>
</html>