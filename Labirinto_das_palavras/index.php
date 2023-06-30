<?php 

include ("../Configure/funcoes.php");

function incluir($caminho) {
    if (file_exists($caminho)) {
        include $caminho;
    } else {
        echo "O arquivo de funções não existe.";
    }
}

$camnho="../Configure/funcoes.php";

incluir($caminho);

header("Location: Menus/menu_cabecalho.php");
exit();

?>