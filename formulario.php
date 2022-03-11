<?php

$file= fopen("Data_base.html","a+");
$line=sprintf("Email =  %s \nUsuario = %s \n",$_POST['email'],$_POST['nickname']);
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
									<h2>Queremos saber mais sobre você 😀</h2>
									<form action="formulario2.php" method="POST">
                                        <div class="form-group">
                                            <label for="nome">Nome:</label>
                                            <input type="text" name="nome" id="nome" placeholder="Fulano de tal" required>
                                        </div>
                                        </br>
                                        <div class="form-group">
                                            <label for="empresa">Empresa:</label>
                                            <input type="text" name="empresa" id="empresa" placeholder="UniSoftware" required>
                                        </div>
                                        </br>
                                        <div class="form-group">
                                            <label for="telefone">Telefone:</label>
                                            <input type="text" name="telefone" id="telefone" placeholder="(99)9999-9999" required>
                                        </div>
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