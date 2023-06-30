<?php
require_once 'cadastrar_livro.php';
?>


<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Editora</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body>
    <a class="a_menu" href="../Menus/menu_livros.php">Voltar</a>
    <h1>Cadastro de Editora</h1>

    <form action="editora.php" method="POST">
        <div class="div_cadastro">
            <fieldset>
                <br><br>
                <div class="div_label_input_cadastro">
                    <input class="input_cadastro" type="text" id="nome_editora" name="nome" oninput="formatarNome(this)" required>
                    <label class="label_cadastro" for="nome_editora">Nome da Editora:</label>
                </div>
                <br>
                <input class="submit_cadastro" type="submit" value="Cadastrar Editora">
                <br><br>

            </fieldset>
        </div>
    </form>
</body>
</html>

<?php //label ano_publicacao Restringe o campo ano para apenas 4 digitos numericos?>

<script>
document.getElementById('ano').addEventListener('keydown', function(event) {
    // Obter o código da tecla pressionada
    var key = event.which || event.keyCode;

    // Verificar se a tecla pressionada é uma letra
    if ((key >= 65 && key <= 90) || (key >= 97 && key <= 122)) {
        event.preventDefault(); // Bloquear a digitação de letras
    }
});
</script>