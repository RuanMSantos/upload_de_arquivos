<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de arquivos</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <p><label for="">Selecione o arquivo</label>
        <input name="fotos" type="file"></p>
        <button type="submit">Enviar arquivos</button>
    </form>
</body>
</html>