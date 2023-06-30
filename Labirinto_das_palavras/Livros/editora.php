<?php
include ("../Configure/funcoes.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar se os campos foram preenchidos
    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];

        if(registro_repetido($conn,'editora','nome_editora',$nome)===false){
            
            
                // Preparar a consulta SQL
            $sql_editora = "INSERT INTO editora (nome_editora) VALUES ('$nome')";


            // Executar a consulta SQL
            if ($conn->query($sql_editora) === TRUE) {

                echo "Editora cadastrado com sucesso!";
            } else {
                echo "Erro ao cadastrar o Editora: " . $conn->error;
            }
        
        }else{
            echo "Editora já cadastrado!";    
        }

            

        
    } else {
        echo "Todos os campos são obrigatórios!";
    }
}
?>
