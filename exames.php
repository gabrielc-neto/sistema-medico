<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muito SUS - Upload de Resultados de Exames</title>
    <!-- Adicione os links para os arquivos CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/navfooter.css">
    <link rel="stylesheet" href="exames/css/style.css">
</head>
<body>
    <!-- Navbar -->
    <?php
    include('navbar.php');
    ?>
    </nav>

    <div class="container">
        <!-- Área de pesquisa -->
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Pesquisar dados...">
        </div>

        <!-- Cartões de upload de resultados de exames -->
        <div class="patient-card">
            <div class="patient-details">
                <div class="patient-name">Nome do Paciente 1</div>
                <div class="patient-sus">Nº SUS: 123456789</div>
                <div>
                    <input type="file" class="file-input" id="fileInput1">
                    <label for="fileInput1" class="custom-upload-button">Upload de Exame</label>
                </div>
                <div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input attended-checkbox" id="attendedCheck1" name="attendedCheck1">
                        <label class="form-check-label" for="attendedCheck1">Paciente Atendido</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input absent-checkbox" id="absentCheck1" name="absentCheck1">
                        <label class="form-check-label" for="absentCheck1">Paciente Não Compareceu</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="patient-card">
            <div class="patient-details">
                <div class="patient-name">Nome do Paciente 2</div>
                <div class="patient-sus">Nº SUS: 987654321</div>
                <div>
                    <input type="file" class="file-input" id="fileInput2">
                    <label for="fileInput2" class="custom-upload-button">Upload de Exame</label>
                </div>
                <div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input attended-checkbox" id="attendedCheck2" name="attendedCheck2">
                        <label class="form-check-label" for="attendedCheck2">Paciente Atendido</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input absent-checkbox" id="absentCheck2" name="absentCheck2">
                        <label class="form-check-label" for="absentCheck2">Paciente Não Compareceu</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Adicione mais cartões conforme necessário -->
    </div>

    <!-- Rodapé de Navegação -->
   <?php
   include('navfooter.php');
   ?>

    <!-- Adicione o link para o arquivo JavaScript do Bootstrap, se necessário -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="exames/js/functions.js"></script>
</body>
</html>
