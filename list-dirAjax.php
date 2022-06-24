<?php

if ($_POST){
    
    //atualiza a listagem das imagens no diretório
    $diretorio = dir("./img/");
    while($arquivo = $diretorio -> read()){

        echo "<a href='img/{$arquivo}' target='_blank'>{$arquivo}</a><br>";
    }
    $diretorio -> close();
}