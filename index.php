<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible " content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
        if(isset($_GET['operacao'])) { 
            if($_GET['operacao'] == "adicao") {
                $x = ($_GET['x']);
                $y = ($_GET['y']);
                $adicao = $x + $y;
                echo $adicao;
            }
            else if($_GET['operacao'] == "subtracao") {
                $x = ($_GET['x']);
                $y = ($_GET['y']);
                $subtracao = $x - $y;
                echo $subtracao;
            }
            else if($_GET['operacao'] == "multiplicacao") {
                $x = ($_GET['x']);
                $y = ($_GET['y']);
                $multi = $x * $y;
                echo $multi;
            } 
            else if($_GET['operacao'] == "divisao") {
                $x = ($_GET['x']);
                $y = ($_GET['y']);
                $divisao = $x / $y;
                echo $divisao;
            }
        }

    ?>
</body>
</html>