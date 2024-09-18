<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Muito Sus</title>
    <!-- Adicione os links para os arquivos CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para remover marcadores de lista e adicionar hover */
        ul.navbar-nav li {
            list-style-type: none; /* Remove os marcadores de lista */
        }

        ul.navbar-nav li a {
            color: #333; /* Cor padrão do texto */
            transition: color 0.3s ease; /* Transição suave para a mudança de cor */
        }

        ul.navbar-nav li a:hover {
            color: #ff6600; /* Cor diferente no hover */
        }

        /* Estilizando o nome do projeto */
        .navbar-brand {
            color: #ff6600; /* Cor diferente para destacar */
            font-size: 24px; /* Tamanho da fonte aumentado */
            margin-right: 30px; /* Afastamento dos links da navbar */
        }

        /* Aumentando o tamanho da fonte da navbar */
        .navbar {
            font-size: 18px; /* Tamanho da fonte da navbar aumentado */
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="img/sus.png" height="30px" width="30px"> Projeto Muito SUS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <?php
                    $menu = array(
                        "Principal" => "main.php",
                        "Agendamentos" => "agendamentos.php",
                        "Resultados de Exames" => "exames.php",
                        "Marcar Exame" => "marca.php"
                    );
                    foreach ($menu as $nome => $link) {
                        echo "<li class='nav-item'><a class='nav-link' href='" . $link . "'>" . $nome . "</a></li>";
                    }
                    ?>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisa Rápida" aria-label="Pesquisa">
                    <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit">Pesquisar</button>
                    <a class='btn btn-outline-danger my-2 my-sm-0' href='logout.php'>Sair</a>
                </form>
            </div>
        </nav>
    </header>

    <!-- Adicione o link para o arquivo JavaScript do Bootstrap, se necessário -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
