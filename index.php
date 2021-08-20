<?php
session_start();
require_once "includes/funcoes.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulario para inscrição</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

    <p>FORMULARIO PARA INSCRIÇÃO DE COMPETIDORES</p>

    <form action="script.php" method="post">
        <?php

        $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
        if (!empty($mensagemDeSucesso)) {
            echo $mensagemDeSucesso;
        }

        $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
        if (!empty($mensagemDeErro)) {
            echo $mensagemDeErro;
        }

        ?>
        <p>Seu nome: <input type="text" name="nome" id=""></p>
        <p>Sua Idade: <input type="text" name="idade" id=""></p>
        <p><input type="submit" /></p>
        <?php
        echo voltar();
        ?>

    </form>

</body>

</html>