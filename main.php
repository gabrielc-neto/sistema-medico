<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Muito SUS - Página Inicial</title>
    <link rel="shortcut icon" href="img/logo_if.png" type="image/x-icon">
    <!-- Adicione os links para os arquivos CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <!-- Header -->
    <header>
        <img src="img/sus.png" alt="" srcset="" width="100px" height="100px">
        <h1>Projeto Muito SUS</h1>
        <button id="themeToggle" class="btn btn-primary btn-sm position-absolute top-0 start-0 m-3"
        style="width:100px;height:50px;">Alternar Tema</button>
<link rel="stylesheet" href="main/css/style.css">

    </header>

    <div class="container">
    <img src="img/med-logo.png" alt="" srcset="" width="100px" height="100px">
        <h1 class="mt-2 mb-4">Bem-Vindo ao Sistema!</h1>
        <h5 class="mb-4">Selecione uma das opções que deseja</h5>
        <div class="row">
            <?php
           include('main/botoes.php');
            ?>
        </div>
    </div>

    <!-- Rodapé -->
    <?php
    include('navfooter.php');
    ?>

    <!-- Função de alterar tema -->
    <script src="main/js/functions.js"></script>


</body>
</html>
