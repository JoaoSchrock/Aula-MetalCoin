<?php
require('../conn.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$password = $_POST['password'];

if(empty($nome) && empty($email) && empty($password)){
    echo "Digite os campos corretamente";
} else {
    $cad_usuario = $pdo->prepare("INSERT INTO usuarios (nome, email, password) VALUES (:nome , :email , :password)");
    $cad_usuario->execute(array(':nome' => $nome, ':email' => $email, ':password' => $password));
}


?>
