<?php
// Verifica se o ID do médico foi recebido
if (isset($_GET['id'])) {
    $id_medico = $_GET['id'];

    // Conexão com o banco de dados
    include('conecta.php');

    // Query para excluir o médico pelo ID
    $query_excluir = "DELETE FROM medico WHERE id = $id_medico";
    $resultado = mysqli_query($conexao, $query_excluir);

    if ($resultado) {
        echo "Médico excluído com sucesso.";
        echo "<h5><a href='MedicosCadastrados.php'>Voltar</a></h5>";
    } else {
        echo "Erro ao excluir médico: " . mysqli_error($conexao);
    }

    // Fechar conexão com o banco de dados
    mysqli_close($conexao);
} else {
    echo "ID do médico não recebido.";
}
?>
