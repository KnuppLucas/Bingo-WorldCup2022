<?php
session_start();
header('Location:game.php');
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



/* Array de cartelas para os players */
$num = 24; /* Numero de itens da cartela */
$playerPaper = array_rand($selecoesArray, $num);
shuffle($playerPaper);
$_SESSION['playerPaper'][0] = $playerPaper[0];
$_SESSION['playerPaper'][1] = $playerPaper[1];
$_SESSION['playerPaper'][2] = $playerPaper[2];
$_SESSION['playerPaper'][3] = $playerPaper[3];
$_SESSION['playerPaper'][4] = $playerPaper[4];
$_SESSION['playerPaper'][5] = $playerPaper[5];
$_SESSION['playerPaper'][6] = $playerPaper[6];
$_SESSION['playerPaper'][7] = $playerPaper[7];
$_SESSION['playerPaper'][8] = $playerPaper[8];
$_SESSION['playerPaper'][9] = $playerPaper[9];
$_SESSION['playerPaper'][10] = $playerPaper[10];
$_SESSION['playerPaper'][11] = $playerPaper[11];
$_SESSION['playerPaper'][12] = $playerPaper[12];
$_SESSION['playerPaper'][13] = $playerPaper[13];
$_SESSION['playerPaper'][14] = $playerPaper[14];
$_SESSION['playerPaper'][15] = $playerPaper[15];
$_SESSION['playerPaper'][16] = $playerPaper[16];
$_SESSION['playerPaper'][17] = $playerPaper[17];
$_SESSION['playerPaper'][18] = $playerPaper[18];
$_SESSION['playerPaper'][19] = $playerPaper[19];
$_SESSION['playerPaper'][20] = $playerPaper[20];
$_SESSION['playerPaper'][21] = $playerPaper[21];
$_SESSION['playerPaper'][22] = $playerPaper[22];
$_SESSION['playerPaper'][23] = $playerPaper[23];



$num = 24; /* Numero de itens da cartela */
$opponentPlayer = array_rand($selecoesArray, $num);
shuffle($opponentPlayer);

$_SESSION['opponentPlayer'][0] = $opponentPlayer[0];
$_SESSION['opponentPlayer'][1] = $opponentPlayer[1];
$_SESSION['opponentPlayer'][2] = $opponentPlayer[2];
$_SESSION['opponentPlayer'][3] = $opponentPlayer[3];
$_SESSION['opponentPlayer'][4] = $opponentPlayer[4];
$_SESSION['opponentPlayer'][5] = $opponentPlayer[5];
$_SESSION['opponentPlayer'][6] = $opponentPlayer[6];
$_SESSION['opponentPlayer'][7] = $opponentPlayer[7];
$_SESSION['opponentPlayer'][8] = $opponentPlayer[8];
$_SESSION['opponentPlayer'][9] = $opponentPlayer[9];
$_SESSION['opponentPlayer'][10] = $opponentPlayer[10];
$_SESSION['opponentPlayer'][11] = $opponentPlayer[11];
$_SESSION['opponentPlayer'][12] = $opponentPlayer[12];
$_SESSION['opponentPlayer'][13] = $opponentPlayer[13];
$_SESSION['opponentPlayer'][14] = $opponentPlayer[14];
$_SESSION['opponentPlayer'][15] = $opponentPlayer[15];
$_SESSION['opponentPlayer'][16] = $opponentPlayer[16];
$_SESSION['opponentPlayer'][17] = $opponentPlayer[17];
$_SESSION['opponentPlayer'][18] = $opponentPlayer[18];
$_SESSION['opponentPlayer'][19] = $opponentPlayer[19];
$_SESSION['opponentPlayer'][20] = $opponentPlayer[20];
$_SESSION['opponentPlayer'][21] = $opponentPlayer[21];
$_SESSION['opponentPlayer'][22] = $opponentPlayer[22];
$_SESSION['opponentPlayer'][23] = $opponentPlayer[23];

/* Função para verficar os valores sorteados e Altera-los */

$num = 75; /* Numero de itens do jogo embaralhados */
$numberSorted = array_rand($selecoesArray, $num);
shuffle($numberSorted);

$_SESSION['numberSorted'][0] = $numberSorted[0];
$_SESSION['numberSorted'][1] = $numberSorted[1];
$_SESSION['numberSorted'][2] = $numberSorted[2];
$_SESSION['numberSorted'][3] = $numberSorted[3];
$_SESSION['numberSorted'][4] = $numberSorted[4];
$_SESSION['numberSorted'][5] = $numberSorted[5];
$_SESSION['numberSorted'][6] = $numberSorted[6];
$_SESSION['numberSorted'][7] = $numberSorted[7];
$_SESSION['numberSorted'][8] = $numberSorted[8];
$_SESSION['numberSorted'][9] = $numberSorted[9];
$_SESSION['numberSorted'][10] = $numberSorted[10];
$_SESSION['numberSorted'][11] = $numberSorted[11];
$_SESSION['numberSorted'][12] = $numberSorted[12];
$_SESSION['numberSorted'][13] = $numberSorted[13];
$_SESSION['numberSorted'][14] = $numberSorted[14];
$_SESSION['numberSorted'][15] = $numberSorted[15];
$_SESSION['numberSorted'][16] = $numberSorted[16];
$_SESSION['numberSorted'][17] = $numberSorted[17];
$_SESSION['numberSorted'][18] = $numberSorted[18];
$_SESSION['numberSorted'][19] = $numberSorted[19];
$_SESSION['numberSorted'][20] = $numberSorted[20];
$_SESSION['numberSorted'][21] = $numberSorted[21];
$_SESSION['numberSorted'][22] = $numberSorted[22];
$_SESSION['numberSorted'][23] = $numberSorted[23];
$_SESSION['numberSorted'][24] = $numberSorted[24];
$_SESSION['numberSorted'][25] = $numberSorted[25];
$_SESSION['numberSorted'][26] = $numberSorted[26];
$_SESSION['numberSorted'][27] = $numberSorted[27];
$_SESSION['numberSorted'][28] = $numberSorted[28];
$_SESSION['numberSorted'][29] = $numberSorted[29];
$_SESSION['numberSorted'][30] = $numberSorted[30];
$_SESSION['numberSorted'][31] = $numberSorted[31];
$_SESSION['numberSorted'][32] = $numberSorted[32];
$_SESSION['numberSorted'][33] = $numberSorted[33];
$_SESSION['numberSorted'][34] = $numberSorted[34];
$_SESSION['numberSorted'][35] = $numberSorted[35];
$_SESSION['numberSorted'][36] = $numberSorted[36];
$_SESSION['numberSorted'][37] = $numberSorted[37];
$_SESSION['numberSorted'][38] = $numberSorted[38];
$_SESSION['numberSorted'][39] = $numberSorted[39];
$_SESSION['numberSorted'][40] = $numberSorted[40];
$_SESSION['numberSorted'][41] = $numberSorted[41];
$_SESSION['numberSorted'][42] = $numberSorted[42];
$_SESSION['numberSorted'][43] = $numberSorted[43];
$_SESSION['numberSorted'][44] = $numberSorted[44];
$_SESSION['numberSorted'][45] = $numberSorted[45];
$_SESSION['numberSorted'][46] = $numberSorted[46];
$_SESSION['numberSorted'][47] = $numberSorted[47];
$_SESSION['numberSorted'][48] = $numberSorted[48];
$_SESSION['numberSorted'][49] = $numberSorted[49];
$_SESSION['numberSorted'][50] = $numberSorted[50];
$_SESSION['numberSorted'][51] = $numberSorted[51];
$_SESSION['numberSorted'][52] = $numberSorted[52];
$_SESSION['numberSorted'][53] = $numberSorted[53];
$_SESSION['numberSorted'][54] = $numberSorted[54];
$_SESSION['numberSorted'][55] = $numberSorted[55];
$_SESSION['numberSorted'][56] = $numberSorted[56];
$_SESSION['numberSorted'][57] = $numberSorted[57];
$_SESSION['numberSorted'][58] = $numberSorted[58];
$_SESSION['numberSorted'][59] = $numberSorted[59];
$_SESSION['numberSorted'][60] = $numberSorted[60];
$_SESSION['numberSorted'][61] = $numberSorted[61];
$_SESSION['numberSorted'][62] = $numberSorted[62];
$_SESSION['numberSorted'][63] = $numberSorted[63];
$_SESSION['numberSorted'][64] = $numberSorted[64];
$_SESSION['numberSorted'][65] = $numberSorted[65];
$_SESSION['numberSorted'][66] = $numberSorted[66];
$_SESSION['numberSorted'][67] = $numberSorted[67];
$_SESSION['numberSorted'][68] = $numberSorted[68];
$_SESSION['numberSorted'][69] = $numberSorted[69];
$_SESSION['numberSorted'][70] = $numberSorted[70];
$_SESSION['numberSorted'][71] = $numberSorted[71];
$_SESSION['numberSorted'][72] = $numberSorted[72];
$_SESSION['numberSorted'][73] = $numberSorted[73];
$_SESSION['numberSorted'][74] = $numberSorted[74];
echo "<pre>";
print_r($_SESSION['numberSorted']);

$_SESSION['contador'] = 0;

$_SESSION['pointsPlayer'] = 0;

$_SESSION['pointsOpponent'] = 0;

$_SESSION['cssSorteado'] = 'BLUE';

$_SESSION['valorParaSorteado'] = "X";

echo "<pre>";
print_r($_SESSION['playerPaper']);

echo "<pre>";
print_r($_SESSION['opponentPlayer']);
