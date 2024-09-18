<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamentos</title>
    <!-- Adicione os links para os arquivos CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="agendamentos/css/style.css">
</head>
<body>
  <?php
  include('navbar.php');
  ?>

    <div class="container">
        <h1>Lista de Agendamentos</h1>
        <div class="search-form">
            <input type="text" id="searchInput" class="search-input" placeholder="Pesquisar agendamento...">
            <button type="button" id="searchButton" class="search-button">Pesquisar</button>
        </div>

        <div class="card">
            <h5 class="card-title">Agendamento de Consulta Médica</h5>
            <p class="patient-name">Paciente: Maria da Silva</p>
            <p class="card-text"><strong>Data:</strong> 25 de Novembro, 2023</p>
            <p class="card-text"><strong>Hora:</strong> 09:30 AM</p>
            <p class="card-text"><strong>Médico:</strong> Dra. Maria Silva</p>
            <p class="card-text"><strong>Especialidade:</strong> Pediatria</p>
            <p class="card-text"><strong>Local:</strong> Hospital Central</p>
            <div class="mt-3">
                <button class="btn btn-primary btn-edit mr-2">Editar</button>
                <button class="btn btn-danger btn-delete">Excluir</button>
            </div>
        </div>
        <!-- Adicione mais cartões conforme necessário -->
    </div>

    <footer>
        <p>
            <a href="#">Fale Conosco</a> | 
            <a href="#">Reclamações</a> | 
            <a href="#">Ouvidoria</a> | 
            <a href="#">Parcerias</a> | 
            <a href="#">Nossos Produtos</a> | 
            <a href="#">Trabalhe Conosco</a>
        </p>
    </footer>

    <!-- Adicione o link para o arquivo JavaScript do Bootstrap, se necessário -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="agendamentos/js/functions.js"></script>
</body>
</html>
