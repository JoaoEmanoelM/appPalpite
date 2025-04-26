<?php 

require_once("./modelo/Hero.php");

$spiderMan = new Hero("Homem-Aranha", "./img/spiderMan.jpg", "Ele adora escalar paredes.");
$ironMan = new Hero("Homem de Ferro", "./img/ironMan.jpg", "Ele é um gênio, bilionário, playboy, filantropo.");
$captainAmerica = new Hero("Capitão América", "./img/captainAmerica.jpg", "Ele luta com um escudo.");

$herois = [$spiderMan,$ironMan,$captainAmerica];

$correto = rand(1, 3);

if (!isset($_GET['palpite'])) {
    echo "<h2>Erro: Você precisa informar o parâmetro 'palpite' na URL.</h2>";
    echo "<p>Exemplo: <code>jogo.php?palpite=2</code></p>";
    exit;
}

$palpite = intval($_GET['palpite']);

if (!isset($herois[$palpite])) {
    echo "<h2>Palpite inválido! Escolha um valor entre 1 e 3.</h2>";
    exit;
}

echo "<h1>Resultado do Palpite</h1>";

if ($palpite === $correto) {
    $heroi = $herois[$correto - 1];
    echo "<h2>Parabéns! Você acertou!</h2>";
    echo "<p>Você escolheu: <strong>{$heroi->getNome()}</strong></p>";
    echo "<img src='{$heroi->getImg()}' alt='Imagem do herói' width='300'><br>";
    echo "<p>Dica: {$heroi->getDica()}</p>";
} else {
    $heroiCorreto = $herois[$correto - 1];
    echo "<h2>Que pena! Você errou.</h2>";
    echo "<p>Seu palpite foi: <strong>{$herois[$palpite]->getNome()}</strong></p>";
    echo "<p>O herói correto era: <strong>{$heroiCorreto->getNome()}</strong></p>";
    echo "<p>Dica: {$heroiCorreto->getDica()}</p>";
    echo "<img src='{$heroiCorreto->getImg()}' alt='Imagem borrada' width='300' style='filter: blur(5px);'><br>";
}
?>