<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Muito SUS - Cadastro de Médicos</title>
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
    /* Estilos para o formulário (apenas para visualização) */
    .form-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-container input[type="text"],
    .form-container input[type="email"],
    .form-container input[type="tel"],
    .form-container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 4px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    .form-container input[type="submit"] {
      background-color: #4caf50;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
    }
    .form-container input[type="submit"]:hover {
      background-color: #45a049;
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
    <div id="cadastroMedico" class="form-container">
      <h2>Cadastro de Médico</h2>
      <h4>Campos com (*) são obrigatórios!</h4>
      <form action="cadastroMedico.php" method="post">
        <label for="nome">*Nome:</label>
        <input type="text" id="nome" name="nome" required placeholder="Insira nome"><br>

        <label for="cpf">*CPF:</label>
        <input type="text" id="cpf" name="cpf" required placeholder="Insira Nº de CPF"><br>

        <label for="email">*Email:</label>
        <input type="email" id="email" name="email" required placeholder="Insira e-mail"><br>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" placeholder="Insira Nº de telefone"><br>

        <label for="senha">*Senha:</label>
        <input type="password" id="senha" name="senha" required placeholder="Insira senha"><br>

        <input type="submit" value="Cadastrar">
      </form>
    </div>
  </div>
</body>
</html>
