<?php
//realiza a conexão com mySql
$conexao = mysqli_connect("localhost","root","");
//identifica a base de dados
$bancodedados = "bdSus";
//conecta mySql e banco de dados
$bd = mysqli_select_db($conexao,$bancodedados);
if (mysqli_connect_errno()){
    printf("Falha na conexão: %s \n",
            mysqli_connect_errno());
    die();
}
?>