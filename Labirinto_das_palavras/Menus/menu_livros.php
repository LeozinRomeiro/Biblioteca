<?php 

include ("../Configure/funcoes.php");

cabecalho();

//Incluir o menu inicial na parte de cima ?>

<!DOCTYPE html>
<html>
<head>
    <title>Livros</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>

<body>
    <h1>Livros</h1>
    <div class="div_menu">
        <li class="li_menu"><a class="a_menu" href="../Livros/html_cadastrar_livro.php">Cadastrar Livro</a><br></li>
        <li class="li_menu"><a class="a_menu" href="../Livros/listar_livros.php">Listar Livros</a></li>
        <li class="li_menu"><a class="a_menu" href="../Livros/html_editora.php">Cadastrar Editora</a></li>
    </div>
    
</body>
</html>

<?php //hypertext reference para referenciar apos li ?>     
