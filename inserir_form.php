<?php  

//conexão com o servidor
$conect = mysqli_connect("localhost",
    "root",
    "");

// Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
if (!$conect) die ("<h1>Falha na coneco com o Banco de Dados!</h1>");

// Caso a conexão seja aprovada, então conecta o Banco de Dados.    
$db = mysqli_select_db($conect, "projeto");

$nome = $_POST["nome"]; 
$sobrenome = $_POST["sobrenome"];

$sqldados = "INSERT INTO pessoa (id,nome,sobrenome) VALUES (null,'$nome','$sobrenome')";

mysqli_query($conect, $sqldados); //Realiza a consulta

mysqli_close($conect); //fecha conexão com banco de dados 

?>