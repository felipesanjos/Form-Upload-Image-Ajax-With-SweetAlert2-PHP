<?php
//Valida se recebeu um $_FILES
if($_FILES){
    
    //É obrigatório o envio da imagem
    if($_FILES['upload']['tmp_name']){
        
        //copia imagem enviada para a pasta destino
        copy($_FILES['upload']['tmp_name'],"./img/{$_FILES['upload']['name']}");
        
        //Retorna sucesso total
        echo 'success';
    }else{
        
        //Se não localizar o caminho da imagem
        echo 'error';
    }
}