<?php 

    session_start();
    
    $autoload = function($class){
		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);
	


    define('include_path','http://localhost/sistema/');
    define('include_path_painel','http://localhost/sistema/painel');

    define('user','root');
    define('password','');
    define('databese','sistema');
    define('host','localhost');

    //nome da empresa 
    define('NOME_EMPRESA','Parça serviços financeiros');

?>