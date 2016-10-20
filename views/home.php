<!DOCTYPE html>
<html>
    <head>
        <title>CursoPHP - Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>Esta é a view home da Galeria!!!</div>
        <a href="teste">teste</a><br>
        <?php
            foreach ($fotos as $foto) {
                echo $foto['titulo'].'<br>';
            }
        ?>
    </body>
</html>
