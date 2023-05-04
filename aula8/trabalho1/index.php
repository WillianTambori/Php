<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>trabalho</title>
</head>
<body>
    <header>
        <section>

        </section>
        <section>
            <h1>CalcTec</h1>
        </section>
    </header>
    <nav>
        <h3>Sobre</h3>
        <h3>Calculadora</h3>
        <h3>Temperatura</h3>
        <h3>Conversão</h3>
    </nav>
    <article>
    <section></section>
    <section class="temperatura">
        <form>
            <label>Digite uma temperatura</label><br>
            <input type="number" name="temperatura"><br>
            <select name="opt">
                <option value="1" >Celsius para Fahrenheit</option>
                <option value="2" >Fahrenheit para Celsius</option>
            </select><br>
            <button type="submit" >Calcular</button>
            <?php
                  
                  
                if($_GET["opt"]=="1"){
                    echo  "1"; 
                }
                elseif($_GET["opt"]=="2"){
                    echo "2";
                }
                     
            ?>
        </form>
    </section>
    </article>
    <footer>
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistemas</p>
        <p>"Feliz é aquele que programa" </p>
        <p>Copyriight © 2023 - Todos os direitos reservados 2023</p>
    </footer>
</body>
</html>