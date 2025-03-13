<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de arquivos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="form" action="upload.php" method="post" enctype="multipart/form-data">
        <label for="pictures" class="form__label">Selecione o arquivo</label>
        <input name="pictures" class="form__input" type="file">
        <button type="submit">Enviar arquivos</button>
    </form>
</body>
</html>