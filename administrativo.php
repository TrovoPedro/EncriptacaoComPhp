<?php

session_start();
if(!empty($_SESSION['id'])){
    echo "Olá ".$_SESSION['nome'].", seja bem-vindo <br>";
    echo "<a href='sair.php'>Sair<a/>";
}else{
    $_SESSION['msg'] = "Area restrita";
    header("Location: login.php");
}

?>