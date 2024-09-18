<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Login</title>
  <link rel="stylesheet" href="login/css/style.css">
</head>
<body>
  <div class="login-form">
    <img src="img/med-logo.png" alt="Logo do sistema" title="Página de Login do Sistema SUS"/>
    <h2>Entrar no Sistema</h2>

    <form action="validaMedico.php" method="post">
      <input type="text" name="nome" placeholder="Nome de usuário" required>
      <input type="password" name="senha" placeholder="Senha" required>

      <div class="checkbox">
        <input type="checkbox" id="keep-logged">
        <label for="keep-logged">Mantenha-me conectado</label>
      </div>
      <button type="submit">Entrar</button>
    </form>
    <div class="forgot-password">
      <a href="recuperar_acesso.php" class="recuperar">Recuperar Acesso</a>
    </div>
  </div>
</body>
</html>
