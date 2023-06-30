<?php

include ("../Configure/funcoes.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar se o formulário foi enviado
    if (isset($_POST['id_emprestimo'])) {
        $id_emprestimo = $_POST['id_emprestimo'];

        // Consultar o banco de dados para obter as informações do empréstimo
        $consulta_emprestimo = "SELECT * FROM emprestimo_livro WHERE id_emprestimo_livro = $id_emprestimo";
        $resultado_emprestimo = mysqli_query($conn, $consulta_emprestimo);

        // Verificar se o empréstimo existe
        if (mysqli_num_rows($resultado_emprestimo) > 0) {
            // Remover o empréstimo da tabela emprestimo_livro
            $remover_emprestimo = "DELETE FROM emprestimo_livro WHERE id_emprestimo_livro = $id_emprestimo";
            $resultadoRemover = mysqli_query($conn, $removerEmprestimo);

            if ($resultado_remover) {
                echo "Devolução realizada com sucesso.";
            } else {
                echo "Ocorreu um erro ao realizar a devolução: " . mysqli_error($conn);
            }
        } else {
            echo "Empréstimo não encontrado.";
        }
    } else {
        echo "ID do empréstimo não especificado.";
    }
}

// Obte a lista de alunos do banco de dados
$consulta_todos_emprestimos="SELECT * FROM emprestimo_livro";
$resultado_todos_emprestimos= mysqli_query($conn, $consulta_todos_emprestimos);

?>