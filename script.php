<?php
session_start();

$categorias = [];

$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
sizeof($categorias);
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);

if (empty($nome)) {

    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, preencha o campo';
    header('location: index.php');
} else if (strlen($nome) < 3 || strlen($nome) > 30) {

    $_SESSION['mensagem-de-erro'] = 'O nome não pode conter menos de tres caracteres';
    header('location: index.php');
} else if (!is_string($nome)) {
    echo 'Nome invalido, tente novamente apenas com letras';
    return;
} else if (!is_numeric($idade)) {
    $_SESSION['mensagem-de-erro'] = 'idade incorreta';
    header('location: index.php');
}

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'infantil') {

            $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . " compete na categoria " . $categorias[$i] . "!";
            header('location: index.php');
            return;
        }
    }
} elseif ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adolescente') {

            $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . " compete na categoria " . $categorias[$i] . "!";
            header('location: index.php');
            return;
        }
    }
} elseif ($idade > 59 && $idade <= 90) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'idoso') {

            $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . " compete na categoria " . $categorias[$i] . "!";
            header('location: index.php');
            return;
        }
    }
} else {
    if ($idade > 18 && $idade <= 59) {
        for ($i = 0; $i <= count($categorias); $i++) {
            if ($categorias[$i] == 'adulto') {
                $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . " compete na categoria " . $categorias[$i] . "!";
                header('location: index.php');
                return;
            }
        }
    }
}
