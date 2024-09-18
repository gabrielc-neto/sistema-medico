<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa Rápida</title>
    <!-- Adicione os links para os arquivos CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilização para centralizar o conteúdo */
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding-bottom: 150px; /* Ajuste do espaço para o footer */
            margin-bottom: 50px; /* Espaço extra para garantir que o conteúdo não se sobreponha ao footer */
        }

        .google-logo {
            width: 30%; /* Tamanho do logo do sistema */
            max-width: 200px; /* Largura máxima do logo */
            margin-bottom: 30px;
        }

        .search-form {
            width: 100%;
            max-width: 400px; /* Largura máxima do formulário */
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .search-input {
            flex: 1;
            padding: 12px;
            border: 1px solid #dfe1e5;
            border-radius: 24px 0 0 24px;
            outline: none;
            font-size: 16px; /* Tamanho da fonte do campo de pesquisa */
        }

        .search-button {
            border: none;
            background-color: #f8f9fa;
            border-radius: 0 24px 24px 0;
            padding: 12px 20px;
            cursor: pointer;
            outline: none;
            font-size: 16px; /* Tamanho da fonte do botão de pesquisa */
        }

        .search-button:hover {
            background-color: #f0f0f0;
        }

        /* Estilos do footer */
        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
            width: 100%;
        }

        footer p {
            margin-bottom: 10px; /* Espaçamento entre os parágrafos */
            font-size: 14px; /* Tamanho da fonte do footer */
        }
    </style>
</head>
<body>
    <?php include('navbar.php'); ?>
    
    <div class="container">
        <h1>Área de Pesquisa Rápida</h1>
        <img src="img/med-logo.png" alt="Logomarca do Sistema" class="google-logo">
        <form action="" method="GET" class="search-form">
            <input type="text" name="q" class="search-input" placeholder="Pesquisar no Sistema" aria-label="Pesquisar no Google">
            <button type="submit" class="search-button">Pesquisar</button>
        </form>
    </div>

    <?php include('navfooter.php'); ?>

    <!-- Adicione o link para o arquivo JavaScript do Bootstrap, se necessário -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
