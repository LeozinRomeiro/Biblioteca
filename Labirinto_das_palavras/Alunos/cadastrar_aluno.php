<?php
include ("../Configure/funcoes.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar se os campos foram preenchidos
    if (isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['ra'])) {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $ra = $_POST['ra'];

        if(registro_repetido($conn,'aluno','cpf',$cpf)===false){
            
            
                // Preparar a consulta SQL
            $sql_aluno = "INSERT INTO aluno (nome_aluno, cpf, ra) VALUES ('$nome', $cpf, $ra)";


            // Executar a consulta SQL
            if ($conn->query($sql_aluno) === TRUE) {

                echo "Aluno cadastrado com sucesso!";
            } else {
                echo "Erro ao cadastrar o Aluno: " . $conn->error;
            }
        
        }else{
            echo "Aluno já cadastrado!";    
        }

            

        
    } else {
        echo "Todos os campos são obrigatórios!";
    }
}
?>
