<?php

$categorias = [];

$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);

if (empty($nome)) {

    echo 'O Nome não pode ser vazio';
}

if (strlen($nome) < 3 || strlen($nome) > 30) {

    echo 'O nome é inválido';
    exit;
}
if (!is_string($nome)) {
    echo 'Nome invalido, tente novamente apenas com letras';
    return;
}
if (!is_numeric($idade)) {
    echo 'Idade INVALIDA';
    return;
}

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
