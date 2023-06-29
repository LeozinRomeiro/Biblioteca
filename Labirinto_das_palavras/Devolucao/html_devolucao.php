<?php
require_once 'devolucao.php';
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Devolver Livro</title>
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    
</head>
<body>
    <a class="a_menu" href="../Menus/menu_locar.php">Voltar</a>
        <h2>Devolver Livro</h2>
        <form action="locar.php" method="POST">
            <div class="div_cadastro">
                <fieldset>
                    <br>
                    <div class="div_label_input_cadastro">
                        <select class="input_cadastro" name="id_emprestimo" id="id_emprestimo" required>
                            <?php while ($row = mysqli_fetch_assoc($resultadoAlunos)): ?>
                            <option value="<?php echo $row['id_emprestimo']; ?>"><?php echo $row['nome_aluno']; ?></option>
                            <?php endwhile; ?>
                        </select>   
                        <label class="label_cadastro" for="aluno">Selecione o codigo de emprestimo:</label><br><br>
                    </div>
                    <br><br>
                    <div class="div_label_input_cadastro">
                        <input class="input_cadastro" type="date" name="data_devolucao" id="data_devolucao" required>
                        <label class="label_cadastro" for="data_devolucao">Data de Devolução:</label><br><br>
                    </div>
                    <br><br>
                    <input type="submit" value="Devolver Livro">
                </fieldset>
            </div>
        </form>
</body>
</html>