<?php
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// Criptografando a senha com MD5
$senhaCriptografada = md5($senha);

// Inclusão da conexão com o BD
include "conecta.php";

// Comando para inserção na tabela medico
$sql = "INSERT INTO medico (nome, cpf, telefone, email, senha)";
$sql .= " VALUES ('$nome', '$cpf', '$telefone', '$email', '$senhaCriptografada')";

$rs = mysqli_query($conexao, $sql);

if (!$rs){
    echo $sql;
    echo 'Problemas na gravação';
    echo '<meta http-equiv="refresh" content="10;URL=index.php"/>';
    return;
}

mysqli_close($conexao);
echo "<br>Gravação executada com sucesso!";
?>
<h3><a href="MedicosCadastrados.php">Certo!</a></h3>
