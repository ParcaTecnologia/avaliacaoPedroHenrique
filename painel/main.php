<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo include_path ?>assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title><?php echo NOME_EMPRESA; ?></title>
</head>
<body>

    
<div class="box-content">

<h1 class="display-5 fw-bold">Cadastrar franqueado</h1>

    <form method="post">

    <?php 

        if(isset($_POST['acao'])){
            $nome = $_POST['nome'];
            $cnpj = $_POST['cnpj'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $endereco = $_POST['endereco'];
            $numero = $_POST['numero'];
            $bairro = $_POST['bairro'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            $status = 0;

            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_teste` WHERE email = ? AND cnpj = ?");
            $sql->execute([$email,$cnpj]);

            $verifica_email = MySql::conectar()->prepare("SELECT * FROM `tb_teste` WHERE email = ?");
            $verifica_email->execute([$email]);

            $verifica_cnpj = MySql::conectar()->prepare("SELECT * FROM `tb_teste` WHERE cnpj = ?");
            $verifica_cnpj->execute([$cnpj]);

            if($verifica_email->rowCount() == 1 || $verifica_cnpj->rowCount() == 1){
                //existe, nao podemos cadastrar
                echo'<script>alert("O franqueado já existe!")</script>';
            }else if($sql->rowCount() == 0){
                //nao existe, podemos cadastrar
                $pdo = MySql::conectar()->prepare("INSERT INTO `tb_teste` VALUES(null,?,?,?,?,?,?,?,?,?,?)");
                $pdo->execute([$cnpj,$telefone,$email,$senha,$endereco,$numero,$bairro,$cidade,$estado,$status]);
                if($pdo == true){
                    echo'<script>alert("O franqueado foi cadastrado com sucesso!")</script>';
                }
            }

            
        }

        ?>
    
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>
    <div rel="cnpj" class="mb-3">
        <label for="exampleInputPassword1" class="form-label">CNPJ</label>
        <input type="text" name="cnpj" class="form-control" id="exampleInputPassword1" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Telefone</label>
        <input type="text" name="telefone" class="form-control" id="exampleInputPassword1" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputPassword1" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Senha</label>
        <input type="password" name="senha" class="form-control" id="exampleInputPassword1" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Endereço</label>
        <input type="text" name="endereco" class="form-control" id="exampleInputPassword1" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Número</label>
        <input type="text" name="numero" class="form-control" id="exampleInputPassword1" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Bairro</label>
        <input type="text" name="bairro" class="form-control" id="exampleInputPassword1" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Cidade</label>
        <input type="text" name="cidade" class="form-control" id="exampleInputPassword1" required>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Estado</label>
        <input type="text" name="estado" class="form-control" id="exampleInputPassword1" required>
    </div>

    <button type="submit" name="acao" class="btn btn-primary">Submit</button>
    </form>
     

</div>
    


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php echo include_path ?>assets/js/jquery.mask.js"></script>
<script src="<?php echo include_path ?>assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>