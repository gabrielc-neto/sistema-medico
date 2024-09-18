<?php
include('conecta.php');

if (empty($_POST['nome']) || empty($_POST['senha'])) {
    header('Location: login.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['nome']);
$senha = mysqli_real_escape_string($conexao, md5($_POST['senha']));

$query = "SELECT id, nome FROM medico WHERE nome='$usuario' AND senha='$senha'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if ($row == 1) {
    header('Location: main.php');
    exit();
} else {
    header('Location: login.php');
    exit();
}
?>
