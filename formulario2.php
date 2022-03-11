<?php

$file= fopen("Data_base.html","a+");
$line=sprintf("Nome =  %s \nEmpresa = %s \nTelefone = %s \n",$_POST['nome'],$_POST['empresa'],$_POST['telefone']);
fwrite($file,$line);

fclose($file);

?>


<html>
	<head>
		<title>UniSoftware ADS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">
								<header class="major">
									<h1>Suporte UniSoftware</h1>
								</header>

								<div class="container">
									<h2>Faça sua solicitação</h2>
									<form action="formulario3.php" method="POST">
                                        <div class="form-group">
                                        <label for="telefone">Tipo:</label>
                                            <select name="tipo" id="escolaridade">
                                                <option value="Ensino médio incompleto">Fábrica de Software</option>
                                                <option value="Ensino médio completo">Suporte a Sistema</option>
                                                <option value="Curso superio">Suporte Helpdesk</option>
                                                <option value="Pós graduação">Cloud Services</option>
                                            </select>
                                        </br>
                                        </div>
                                         <div class="form-group">
                                            <label for="cpf">Titulo:</label>
                                            <input type="text" name="cpf" id="cpf" placeholder="Comente" required>
                                        </div>
                                        </br>
                                        <div class="form-group">
                                            <label for="texto">Descrição:</label>
                                        <textarea name="texto" rows="10" id="texto">
                                            </textarea>
                                            </br>
                                            <div class="form-group">
                                            <input type="submit" >
                                        </div> 
						   
									</form>
								</div>
							
		</div>

	<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

</body>
</html>