<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Visualização de Médicos Cadastrados</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
    }
    .navbar {
      background-color: #333;
      color: #fff;
      width: 200px;
      height: 100vh;
      padding-top: 20px;
    }
    .navbar ul {
      list-style: none;
      padding: 0;
    }
    .navbar li {
      margin-bottom: 10px;
    }
    .navbar a {
      text-decoration: none;
      color: #fff;
      display: block;
      padding: 8px 16px;
      transition: background-color 0.3s ease;
    }
    .navbar a:hover {
      background-color: #555;
    }
    .content {
      padding: 20px;
      flex: 1;
    }
    h1 {
      text-align: center;
      margin-bottom: 20px;
    }
    .medicos-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }
    .medico-card {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 300px;
      position: relative;
    }
    .medico-card h2 {
      margin-top: 0;
      margin-bottom: 10px;
    }
    .medico-card p {
      margin: 5px 0;
    }
    .btn-group {
      margin-top: 10px;
    }
    .btn-group button {
      margin-left: 5px;
      padding: 5px 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .btn-group button.edit {
      background-color: #3498db;
      color: #fff;
    }
    .btn-group button.delete {
      background-color: #e74c3c;
      color: #fff;
    }
    .btn-alterar {
      display: inline-block;
      padding: 3px 12px;
      background-color: #3498db;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .btn-alterar:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>
  <div class="navbar">
    <ul>
      <li><a href="cadastrarMedico.php">Cadastrar Médico</a></li>
      <li><a href="MedicosCadastrados.php">Ver Médicos Cadastrados</a></li>
    </ul>
  </div>
  <div class="content">
    <h1>Médicos Cadastrados</h1>
    <div class="medicos-container">
    <?php
        // Conexão com o banco de dados
        include('conecta.php');

        // Consulta para recuperar médicos
        $consulta = "SELECT * FROM medico";
        $resultado = mysqli_query($conexao, $consulta);

        // Exibir os médicos
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo '<div class="medico-card">';
            echo '<h2>' . $linha['nome'] . '</h2>';
            echo '<p><strong>CPF:</strong> ' . $linha['cpf'] . '</p>';
            echo '<p><strong>Email:</strong> ' . $linha['email'] . '</p>';
            echo '<p><strong>Telefone:</strong> ' . $linha['telefone'] . '</p>';
            echo '<div class="btn-group">';
            echo '<a class="btn-alterar" href="AlteraDadosMedico.php?id=' . $linha['id'] . '">Alterar Dados</a>';
            echo '<button class="delete" onclick="confirmarExclusao(' . $linha['id'] . ')">Excluir</button>';
            echo '</div></div>';
        }

        // Fechar conexão com o banco de dados
        mysqli_close($conexao);
      ?>
    </div>
  </div>

  <script>
    function confirmarExclusao(id) {
      var confirmacao = confirm('Tem certeza que deseja excluir este médico?');

      if (confirmacao) {
        window.location.href = 'excluiDadosMedico.php?id=' + id;
      }
    }
  </script>    </div>
  </div>
</body>
</html>
