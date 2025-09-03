<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/estilo/index.css">
    <title>Uninho Top</title>
</head>
<body>
    <h1>Opa Amigo Teste</h1>
</body>
<script src="funcoes/index.js"></script>
</html>

<?php 
include 'funcoes/conexao.php';

$query = "SELECT id, usuario_id, nome_personagem, nivel from fichas";
$resultado = $conn->query($query);


if ($resultado->num_rows > 0) {
    while ($linha = $resultado->fetch_assoc()){
        echo "ID: " . $linha["id"] . " - Nome: " . $linha["nome"];
    }
} else {
    echo "Nenhum dado encontrado";
}
$conexao->close()

?>