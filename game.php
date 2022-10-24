<?php ob_start(); session_start();?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="js/jquery-3.6.1.min.js"></script>
    <!-- <script src="js/script.js"></script> -->
    <title>Atividade BINGO</title>
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
        
        <div id="main-content-game">

        <?php 

            /* Array de seleções para randomicamente sortear os valores */
            $selecoesArray = array("Brasil", "Alemanha", "Itália", "Argentina", "México", "Espanha",
            "França", "Inglaterra", "Bélgica", "Uruguai", "Sérvia", "Suíça ", "Suécia", "Coreia do Sul", 
            "Estados Unidos", "Rússia", "Holanda", "Polônia", "Hungria", "Rep. Tcheca", "Chile", "Portugal",
            "Escócia", "Camarões", "Paraguai", "Japão", "Bulgária", "Romênia", "Áustria", "Austrália", 
            "Arábia Saudita", "Costa Rica", "Croácia", "Irã", "Tunísia", "Colômbia", "Nigéria", "Dinamarca",
            "Marrocos", "Peru", "Gana", "Equador", "Argélia", "Costa do Marfim", "Senegal", "Noruega", "Honduras",
            "Grécia ", "Irlanda do Norte", "Irlanda", "África do Sul", "Egito", "Bolívia", "Canadá", "País de Gales", 
            "Turquia", "Coreia do Norte", "El Salvador", "Nova Zelândia", "Eslovênia", "Cuba", "Indonésia", 
            "Israel", "RD Congo", "Haiti", "Kuwait", "Bósnia e Herzegovina", "Ucrânia", "Panamá", "Islândia",
            "Suécia", "Emirados Árabes", "Jamaica", "Catar", "Trindade e Tobago");

            $num = 24; /* Numero de itens da cartela */
            $i = 0;
            $j = 0;
            $column = 5;
            $row = 5;
            $key = 0;

            $sortedSelection = array_rand($selecoesArray, $num);

            /* Array de contador para players, para poder saber quantas cartelas serão montadas */

            $countPlayer = array();

        ?>

            <!-- CARTELA DO PLAYER -->
            <div class="player-paper">
            <?php
                echo "<h2>Cartela do jogador!</h2>";
            ?>
            <table class="table-game" border="2">
                <tr>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][0].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][1].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][2].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][3].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][4].".png' width='100px' height='100px'>";?></td>
                </tr>
                <tr>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][5].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][6].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][7].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][8].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][9].".png' width='100px' height='100px'>";?></td>
                </tr>
                <tr>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][10].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][11].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/X.png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][12].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][13].".png' width='100px' height='100px'>";?></td>
                </tr>
                <tr>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][14].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][15].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][16].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][17].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][18].".png' width='100px' height='100px'>";?></td>
                </tr>
                <tr>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][19].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][20].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][21].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][22].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["playerPaper"][23].".png' width='100px' height='100px'>";?></td>
                </tr>
            </table>
            </div>
            <div class="middle">
                <div class="result-number">
                    <h3>Resultado do número</h3>
                    <?php 
                        $_SESSION['contador'];
                        $cssSorteado = 'nSorteado';
                        $pointsPlayer = 0;
                        $pointsOpponent = 0;
                        $sortedSelections = array();
                        $key;

                        function somaU() {
                            if ($_SESSION['contador'] <= 73){
                                $_SESSION['contador']++;
                            } else {
                                echo "O jogo acabou!";
                                return;
                            }
                            return $_SESSION['contador'];
                        }

                        function compareResults() {
                            if (in_array($_SESSION['numberSorted'][$_SESSION['contador']], $_SESSION['playerPaper']) && in_array($_SESSION['numberSorted'][$_SESSION['contador']], $_SESSION['opponentPlayer'])){
                                echo "<br><h3>Sorteado para ambos</h3>";
                                $_SESSION['pointsPlayer']++;
                                $_SESSION['pointsOpponent']++;
                            } else if (in_array($_SESSION['numberSorted'][$_SESSION['contador']], $_SESSION['opponentPlayer'])){
                                echo "<br><h3>Sorteado para o oponente!</h3>";
                                $_SESSION['pointsOpponent']++;
                            } else if (in_array($_SESSION['numberSorted'][$_SESSION['contador']], $_SESSION['playerPaper'])){
                                echo "<br><h3>Sorteado, que sorte!</h3>";
                                $_SESSION['pointsPlayer']++;
                            }
                        }

                        function alwaysReplace() {
                            if (in_array($_SESSION['numberSorted'][$_SESSION['contador']], $_SESSION['playerPaper']) && in_array($_SESSION['numberSorted'][$_SESSION['contador']], $_SESSION['playerPaper'])){
                                $indiceRepetido = array_search($_SESSION['numberSorted'][$_SESSION['contador']], $_SESSION['playerPaper']); 
                                str_replace($_SESSION['playerPaper'][$indiceRepetido], "X", $_SESSION['playerPaper']);
                                $_SESSION['playerPaper'][$indiceRepetido] = "X";
                                $indiceRepetido = array_search($_SESSION['numberSorted'][$_SESSION['contador']], $_SESSION['opponentPlayer']); 
                                str_replace($_SESSION['opponentPlayer'][$indiceRepetido], "X", $_SESSION['opponentPlayer']);
                                $_SESSION['opponentPlayer'][$indiceRepetido] = "X";
                            } else if (in_array($_SESSION['numberSorted'][$_SESSION['contador']], $_SESSION['opponentPlayer'])){
                                $indiceRepetido = array_search($_SESSION['numberSorted'][$_SESSION['contador']], $_SESSION['opponentPlayer']); 
                                str_replace($_SESSION['opponentPlayer'][$indiceRepetido], "X", $_SESSION['opponentPlayer']);
                                $_SESSION['opponentPlayer'][$indiceRepetido] = "X";

                            } else if (in_array($_SESSION['numberSorted'][$_SESSION['contador']], $_SESSION['playerPaper'])){
                                $indiceRepetido = array_search($_SESSION['numberSorted'][$_SESSION['contador']], $_SESSION['playerPaper']); 
                                str_replace($_SESSION['playerPaper'][$indiceRepetido], "X", $_SESSION['playerPaper']);
                                $_SESSION['playerPaper'][$indiceRepetido] = "X";
                            }
                        }

                        function winnerFunction(){
                            if ($_SESSION['pointsPlayer'] == 24 && $_SESSION['pointsOpponent'] == 23) {
                                echo "<h2>O jogo empatou, resete a página para jogar novamenete!</h2>";
                                exit();
                                return;
                            } else if ($_SESSION['pointsOpponent'] == 23) {
                                echo "<h2>Que pena, o seu oponente ganhou o jogo!</h2>";
                                exit();
                                return;
                            } else if ($_SESSION['pointsPlayer'] == 24) {
                                echo "<h2>Parabéns, você ganhou o jogo!!</h2>";
                                exit();
                                return;
                            }
                        }

                        if(isset($_POST['btnSorteio'])) {
                            echo "<center><img src='js/".$_SESSION['numberSorted'][$_SESSION['contador']].".png' width='100px' height='100px'><br></center>";
                            compareResults();
                            alwaysReplace();
                            winnerFunction();
                            somaU($_SESSION['contador']); 
                        }
                    ?>
        
                <!-- RESULTADO DO NÚMERO -->
                <h3> 
                </h3>
                </div>
                <!-- Ativação da função no click do botao Sortear -->
                <div class="button-start">
                    <form id="formulario" method="post" action="game.php">
                    <input class="buttonStart" type="submit" value="SORTEAR" name="btnSorteio">
                    </form>
                </div>
            </div>
            <!-- CARTELA DO OPONENTE -->
            <?php 
            
            ?>
            <div class="opponent-paper">
                <table class="table-game" border="2">
                <tr>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][0].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][1].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][2].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][3].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][4].".png' width='100px' height='100px'>";?></td>
                </tr>
                <tr>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][5].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][6].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][7].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][8].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][9].".png' width='100px' height='100px'>";?></td>
                </tr>
                <tr>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][10].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][11].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/X.png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][12].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][13].".png' width='100px' height='100px'>";?></td>
                </tr>
                <tr>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][14].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][15].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][16].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][17].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][18].".png' width='100px' height='100px'>";?></td>
                </tr>
                <tr>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][19].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][20].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][21].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][22].".png' width='100px' height='100px'>";?></td>
                    <td align="center"><?php echo "<img src='js/".$_SESSION["opponentPlayer"][23].".png' width='100px' height='100px'>";?></td>
                </tr>
                </table>
                </div>
        </div>
        
    </body>
</html>
<?php ob_end_flush(); ?>