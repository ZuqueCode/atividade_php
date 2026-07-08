<?php

function criptografarMensagem($texto)
{
    return str_rot13($texto);
}

function descriptografarMensagem($texto)
{
    return str_rot13($texto);
}

echo "<h3>Exercício 13</h3>";

$mensagem = "Programacao em PHP";

$criptografada = criptografarMensagem($mensagem);
$descriptografada = descriptografarMensagem($criptografada);

echo "Mensagem original: $mensagem <br>";
echo "Mensagem criptografada: $criptografada <br>";
echo "Mensagem descriptografada: $descriptografada";

?>