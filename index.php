<?php

$categorias = [];

$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = 'Eduardo';
$idade = 26;

//var_dump($nome);
//var_dump($idade);


if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'infantil') {
            echo 'Nadador ' . $categorias[$i];
        }
    }
} elseif ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adolescente') {

            echo 'Nadador ' . $categorias[$i];
        }
    }
} else {
    echo $nome . ' é ' . 'Adulto';
}
