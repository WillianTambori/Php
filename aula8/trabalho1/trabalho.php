<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body >

<form>
		<label>Informe o seu nome:</label>
		<input type="text" name="nome">
		
		<br/>
		
		<label>Informe a sua idade</label>
		<input type="number" name="idade">
		
		<br/>
		
		<button type="submit">Enviar</button>		
		
	</form>

    <?php              
     if ($_GET)
     {
        echo "Olá $_GET[nome] sua idade é $_GET[idade]";
     }	?>	
    
</body>
</html>