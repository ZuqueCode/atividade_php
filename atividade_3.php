<?php

function mascararCpf($cpf) {
   
    $cpf = preg_replace('/[^0-9]/', '', $cpf);
 
    $ultimosQuatro = substr($cpf, -4);
    $mascarado = str_repeat('*', strlen($cpf) - 4) . $ultimosQuatro;
 
    return $mascarado;
}
 
echo "Exercício 03\n";
echo mascararCpf("123.456.789-10") . "\n\n";