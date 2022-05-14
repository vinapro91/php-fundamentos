<?php

$nome = "Vinicius";
$idade = 30;
$casada = true;

echo "A variavel nome é do tipo: ";
echo gettype($nome);

$nome = false;

echo "<br>A variavel nome é do tipo: ";
echo gettype($nome);