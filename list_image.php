<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar imagem</title>
</head>
<body>
   <h1>Lista de arquivos</h1>
   <table border="1" cellpadding="10">
        <thead>
            <th>Preview</th>
            <th>Arquivo</th>
            <th>Data e envio</th>
        </thead>
        <tbody>
            <?php
                include "connection.php";
                $sql_query = $connection->query("SELECT * FROM tb_files");
                while($file = $sql_query->fetch_assoc()){
                ?>
                <tr>
                    <td><img height="50" src="<?php echo $file['path']; ?>"></td>
                    <td><a target="_blank" href="<?php echo $file['path']?>"> <?php echo $file['name']; ?></a></td>
                    <td><?php echo date("d/m/Y H:i", strtotime($file['date_upload'])); ?></td>
                </tr>
                <?php
                }
                ?>
        </tbody>
   </table> 
</body>
</html>