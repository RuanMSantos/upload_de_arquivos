<?php

// recebendo arquivo

$arquivo = $_FILES['fotos'];

if (isset($_FILES['fotos'])){
    $pasta = "arquivos/";
    $nomeDoArquivo = $arquivo['name'];
}

?>