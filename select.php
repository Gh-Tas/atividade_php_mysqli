<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        h1 {
            color: #555;
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden; /* Para arredondar as bordas da tabela */
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
            font-weight: bold;
            color: #777;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        pre {
            background-color: #eee;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow-x: auto; /* Adiciona barra de rolagem horizontal se o conteúdo for muito longo */
        }
        .container {
            max-width: 800px;
            margin: 0 auto; /* Centraliza o conteúdo na página */
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Alunos</h1>
        <?php
        include_once 'conection.php';

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = 0;

            $stmt = $conn->prepare("SELECT * FROM alunos WHERE id_aluno > ?");

            $stmt->bind_param("i", $id);
            $stmt->execute();

            $results = $stmt->get_result();
            $data = $results->fetch_all(MYSQLI_ASSOC); // Fetch como array associativo para facilitar a exibição na tabela

            if (!empty($data)) {
                echo "<table>";
                echo "<thead>";
                echo "<tr>";
                foreach (array_keys($data[0]) as $column) {
                    echo "<th>" . htmlspecialchars($column) . "</th>";
                }
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                foreach ($data as $row) {
                    echo "<tr>";
                    foreach ($row as $value) {
                        echo "<td>" . htmlspecialchars($value) . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            } else {
                echo "<p>Nenhum aluno encontrado.</p>";
            }
        }
        ?>

        <h2>Dados Brutos (para debugging):</h2>
        <pre>
            <?php
            // Reinicia a consulta para mostrar os dados brutos novamente
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $results = $stmt->get_result();
            print_r($results->fetch_all());
            ?>
        </pre>
    </div>
</body>
</html>
