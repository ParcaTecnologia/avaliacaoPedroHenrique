<?php 
    include_once('confg.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <title><?php echo NOME_EMPRESA; ?></title>
</head>
<body>
    

    <div class="flex__direction">
        
        <div class="parte__1">
            <div class="logo-login"><img src="assets/images/logo.png" alt="login-image"></div>
            <form method="post" class="login__home">

            <div class="login-image"><img src="assets/images/login-image.png" alt="login-image"></div>

                
                <?php 
                        
                        if(isset($_POST['logar'])){
                            $email = $_POST['email'];
                            $senha = $_POST['senha'];

                            $pdo = MySql::conectar()->prepare("SELECT * FROM `tb_teste` WHERE email = ? AND senha = ?");
                            $pdo->execute([$email,$senha]);

                            if($pdo->RowCount() == 1){

                                $_SESSION["login"] = true;
                                $_SESSION["email"] = $_POST['email'];
                                $_SESSION['senha'] = $_POST['senha'];


                                header('Location: http://localhost/sistema/painel/');
                                die();
                            }else{
                                $_SESSION['login'] = false;
                            }

                        }

                ?>



                <input type="email" name="email" required placeholder="Digite seu email...">
                <input type="password" name="senha" required placeholder="Digite sua senha...">
                <input type="submit" name="logar" value="Logar!">
            </form>
        </div>

        
        <div class="parte__2"></div>

    </div><!--flex__direction-->


    


</body>
</html>