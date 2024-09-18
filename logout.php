<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Muito SUS - Logout</title>
    <style>
         body {
            font-family: Arial, sans-serif;
        }

        p {
            color: green;
        }
        div{
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
            text-align:center;
        }
    </style>
</head>
<body>
    <div>
        <p>Saída realizada com sucesso! Faça login novamente caso queira acessar o sistema.</p>
    </div>

    <?php
    // Destruir a sessão atual (logout)
    session_start();
    session_destroy();
    ?>

    <script src="logout/js/functions.js"></script>
</body>
</html>
