<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Alterar Dados do Médico</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="submit"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border-radius: 4px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #3498db;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>
  <h1>Alterar Dados do Médico</h1>

<?php
// Verifica se o ID do médico foi recebido
if (isset($_GET['id'])) {
    $id_medico = $_GET['id'];

    // Conexão com o banco de dados
    include('conecta.php');

    // Query para obter os dados do médico pelo ID
    $query_medico = "SELECT * FROM medico WHERE id = $id_medico";
    $resultado_medico = mysqli_query($conexao, $query_medico);

    if (mysqli_num_rows($resultado_medico) > 0) {
        $dados_medico = mysqli_fetch_assoc($resultado_medico);
?>

<!-- Formulário para editar os dados do médico -->
<form action="atualizaDadosMedico.php" method="post">
  <input type="hidden" name="id_medico" value="<?php echo $dados_medico['id']; ?>">

  <label for="nome">Nome:</label>
  <input type="text" id="nome" name="nome" value="<?php echo $dados_medico['nome']; ?>"><br>

  <label for="cpf">CPF:</label>
  <input type="text" id="cpf" name="cpf" value="<?php echo $dados_medico['cpf']; ?>"><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" value="<?php echo $dados_medico['email']; ?>"><br>

  <label for="telefone">Telefone:</label>
  <input type="tel" id="telefone" name="telefone" value="<?php echo $dados_medico['telefone']; ?>"><br>

  <input type="submit" value="Salvar Alterações">
</form>

<?php
    } else {
        echo "Médico não encontrado.";
    }

    // Fechar conexão com o banco de dados
    mysqli_close($conexao);
} else {
    echo "ID do médico não recebido.";
}
?>
</body>
</html>
