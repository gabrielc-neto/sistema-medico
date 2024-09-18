<?php
// Verifica se os dados do formulário foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos necessários foram preenchidos
    if (isset($_POST['id_medico']) && isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['email']) && isset($_POST['telefone'])) {
        // Recebe os dados do formulário
        $id_medico = $_POST['id_medico'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        // Conexão com o banco de dados
        include('conecta.php');

        // Query para atualizar os dados do médico no banco de dados
        $query_atualiza = "UPDATE medico SET nome = '$nome', cpf = '$cpf', email = '$email', telefone = '$telefone' WHERE id = $id_medico";

        if (mysqli_query($conexao, $query_atualiza)) {
            echo "Dados do médico atualizados com sucesso.";
            echo "<h5><a href='MedicosCadastrados.php'>Voltar</a></h5>";
        } else {
            echo "Erro ao atualizar os dados do médico: " . mysqli_error($conexao);
            echo "<h5><a href='MedicosCadastrados.php'>Voltar</a></h5>";
        }

        // Fechar conexão com o banco de dados
        mysqli_close($conexao);
    } else {
        echo "Todos os campos do formulário devem ser preenchidos.";
    }
} else {
    echo "Erro no envio dos dados do formulário.";
}
?>
