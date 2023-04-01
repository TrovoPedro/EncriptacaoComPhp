<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Area restrita</h2>
<?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

?>
<form action="validar.php" method="post">
    <label>Usuario</label>
    <input type="text" name="usuario" placeholder="email"><br>

    <label>Senha</label>
    <input type="password" name="senha" placeholder="senha"><br>

    <input type="submit" value="Acessar" name="btnLogin">

</form>
    
</body>
</html>