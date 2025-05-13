<?php 
include_once 'conection.php';

$id = $_GET['id'];

$smtm = $conn->prepare("DELETE FROM alunos WHERE id_aluno = ?");
$smtm->bind_param("i", $id);
if($smtm->execute()){
    header("Location: index.php");
    exit();
}
?>