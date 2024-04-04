<?php
session_start();

$_SESSION['nome_do_livro'] = "nome_do_livro"



?>


<!DOCTYPE html>

<html>

<body>
    <h2>Cadastro de livros</h2>


    <form action="visualizar.php" method="GET">


    <label>Nome do livro:</label>
        <input type="text" name="nome_do_livro" placeholder="Nome do livro" required> <br> <br> 
        

        <label>Gênero:</label>
        <input type="text" name="$genero" placeholder="Gênero" required> <br> <br>

        <label>Numeros de páginas:</label>
        <input type="number" name="numero_de_paginas" placeholder="Numeros de páginas" required> <br> <br>

        <label>Nome do autor:</label>
        <input type="text" name="nome_do_autor" placeholder="Nome do autor" required> <br> <br>

        <label>Data de chegada:</label>
        <input type="date"> <br> <br>

        <label>Código de barras:</label>
        <input type="number" name="codigo_de_barras" placeholder="Digite o código de barras" required><br> <br>

        <label>Responsálvel:</label>
        <input type="text" name="responsavel" placeholder="Responsável"> <br><br>
        <input type="submit" value="Cadastrar">


    </form>


</body>

</html>