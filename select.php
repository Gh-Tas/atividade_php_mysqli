<?php 



if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = 0;

    $stmt = $conn->prepare("SELECT * FROM alunos WHERE id_aluno > ?");

    $stmt->bind_param("i", $id);
    $stmt->execute();

    $results = $stmt->get_result();
    $data = $results->fetch_all();
    echo "<pre>";
    print_r($data);
    if($stmt -> execute()){
   
    print_r($data);
    exit();
    }
}
?>