<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #fce4ec; /* Rosa claro */
        }

        .login-container {
            width: 360px;
            margin: 100px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #e91e63; /* Rosa */
        }

        input[type="text"], input[type="password"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #e91e63; /* Rosa */
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #d81b60; /* Rosa mais escuro */
        }

        label {
            color: #888;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Cadastro</h2>
        <form action="processar_cadastro.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required>

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>
