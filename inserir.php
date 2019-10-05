<!DOCTYPE html>
<html>
<head>
	<title>TI - Inserir</title>
	<style type="text/css">
		*{margin: 0; padding: 0; font-family:Arial, Helvetica, sans-serif;}
		form{
			display: block;
			margin: 0 auto;
			text-align: center;
			padding: 20px; 
		}
		div{
			margin: 0 auto;
			width: 280px;
			display: block;
			padding: 5px;
			text-align: left;
		}
		#sobrenome{
			width: 130px;
		}
		.button{
			text-align: center;
		}
	</style>
</head>
<body>
	<form action="inserir_form.php" method="post">
		<h1> Formulário </h1>
		<br>
		<div>
	        <label for="nome">Nome:</label>
	        <input type="text" name="nome" id="nome" />
    	</div>
		<div>
	        <label for="nome">Sobrenome:</label>
	        <input type="text" name="sobrenome" id="sobrenome" />
    	</div>
    	<div class="button">
        	<button type="submit">Enviar</button>
    	</div>
	</form>
</body>
</html>