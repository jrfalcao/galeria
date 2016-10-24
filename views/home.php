<!DOCTYPE html>
<html>
    <head>
        <title>CursoPHP - Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <fieldset>
            <legend>Adicionar uma foto</legend>
            <form method="POST" action="" enctype="multipart/form-data">
                <input type="file" name="arquivo">
                <br><br>
                <input type="submit" name="arquivo" value="Enviar Arquivo">
            </form>
        </fieldset>
        <br><br>
        <?php foreach ($fotos as $foto) :?>
            
            <img src="assets/img/galeria/<?= $foto['url'] ?>" width="300" ><br>
            <?= $foto['titulo'].'<br><br>'; ?>
        
        <?php endforeach;?>
            <br><br>
    </body>
</html>
