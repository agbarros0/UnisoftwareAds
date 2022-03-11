<?php


$file= fopen("Data_base.html","a+");
$cpf = $_POST['cpf'];
$rg = $_POST['texto'];
$line=sprintf("Titulo =  %s \nDescricao = %s \nTipo = %s \n\n",$cpf,$rg,$_POST['tipo']);
fwrite($file,$line);

fclose($file);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso</title>
</head>

<body>
    <div class="container">
        <h2>Sua requisição foi registrada, em breve entraremos em contato, desde já agradecemos!</h2>
        <a href="index.html">Voltar ao inicio</a>
    </div>
</body>

</html>