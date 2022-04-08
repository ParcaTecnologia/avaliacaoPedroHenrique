<?php 

    include('../confg.php');


    if(Painel::logado() == true){
        include('main.php');
    }else{
        header('Location: http://localhost/sistema');
        die();
    }

?>