<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h2>Votação</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Qual a sua Idade <input type="text" name="idade"><br><br>
        <input type="submit" value="Voto">
    </form>

    <?php

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        if (!empty($_POST['idade'])) {

            $idade = $_POST['idade'];
            
            if($idade >= 16) {
                echo"<h3>Você tem $idade anos e pode votar!";
            } else {
                echo"<h3>Você tem $idade anos e não pode votar!";
            }
                
        } else {

            echo "<h3>Preencha todos os campos.</h3>";
        }
    }?>
</body>
</html>