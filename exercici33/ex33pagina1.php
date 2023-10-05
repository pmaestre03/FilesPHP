<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <textarea name="texto"></textarea>
        <input type="submit">
    </form>
    <?php
    if (isset($_POST["texto"])) {
        file_put_contents("ex33.txt", file_get_contents("ex33.txt") . "\n" . $_POST["texto"]);
    }
    $file = file("ex33.txt");
    foreach ($file as $paragraf) {
        echo "<p>$paragraf</p>";
    }
    ?>
</body>
</html>
