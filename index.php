<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button {
            background-color: #5cb85c;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 1em;
        }
        button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>

<body>
    <form action="select.php" method="get">
        <button>Mostrar Aluno</button>
    </form>

    <form action="insert.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <button>Inscrever Aluno</button>
    </form>

    <form action="delete.php" method="get">
        <label for="id">ID</label>
        <input type="number" name="id" id="id" placeholder="ID do aluno">
        <button>Deletar Aluno</button>
    </form>
</body>
</html>