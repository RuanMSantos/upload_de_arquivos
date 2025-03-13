<?php

// recebendo arquivo

$files = $_FILES['pictures'];

if (isset($_FILES['pictures'])){
    $folder = "files/";
    $folderName = $files['name'];
    $newfolderName = uniqid(); // gera id unicos semelhante ao auto_increment
    $extension = strtolower(pathinfo($folderName, PATHINFO_EXTENSION)); // pega a extensão
    $path = $folder . $newfolderName . "." . $extension;
    $itsWorking = move_uploaded_file($files['tmp_name'], $path);

    if ($itsWorking){
        include 'connection.php';

        $insert = $connection->query("INSERT INTO tb_files (name, path) VALUES('$folderName', '$path')") or die($connection->error);

        if ($insert){
            echo "<script>alert('Imagem inserida'); history.back();</script>";
        }
    } else {
        echo "Deu erro seu burro :(";
    }
}

else {
    echo "Falhou idiota";
}

?>