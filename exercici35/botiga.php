<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <?php
        $file = fopen("productes.txt", "r");
        while ($line = fgets($file)) {
            echo "<input type='checkbox' name='prods[]' value='".trim($line)."'>$line</input><br>";
        }
        echo "<input type='text' name='user'></input><br>";
        echo "<input type='submit' value='enviar'>";
        
        if (isset($_POST['prods'])) {
            $user = $_POST['user'];
            $insert = fopen('comandes.txt','a');
            $comanda = $user;
            foreach ($_POST["prods"] as $producte) {
                $comanda .= ", ".$producte;
            }
            fwrite($insert,$comanda."\n");
        }
        ?>
    </form>
</body>
</html>