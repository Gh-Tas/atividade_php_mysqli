<?php 
include_once 'conection.php';

$nome = $_POST['nome'];
$email = $_POST['email'];

$stmt = $conn->prepare("INSERT INTO alunos (nome, email) VALUES (?, ?)");
$stmt->bind_param("ss", $nome, $email);

if($stmt -> execute()){
    header("Location: index.php");
    exit();
}
?>

