<?php
include_once("./services/conexao.php");

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Receber os dados do formulário
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $contato = $_POST['contato'];
    $cidade = $_POST['cidade'];
    $estilo_vida = $_POST['estilo_vida'];
    $espaco = $_POST['espaco'];
    $alergias = $_POST['alergias'];
    $custos = $_POST['custos'];
    $experiencia = $_POST['experiencia'];
    $motivo = $_POST['motivo'];
    $comportamento = $_POST['comportamento'];
    $plano_cuidado = $_POST['plano_cuidado'];
    $animal_id = $_POST['animal_id'];
    $compromisso = "Sim"; // Ajuste conforme necessário

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO adotantes (nome, idade, contato, cidade, estilo_vida, espaco, alergias, custos, experiencia, motivo, comportamento, plano_cuidado, compromisso, cachorro_id)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sisssssssssssi", $nome, $idade, $contato, $cidade, $estilo_vida, $espaco, $alergias, $custos, $experiencia, $motivo, $comportamento, $plano_cuidado, $compromisso, $animal_id);

    if ($stmt->execute()) {
        echo "Formulário enviado com sucesso!";
        header("Location: confirmacao.php");
        exit;
        
        exit;
    } else {
        echo "Erro ao enviar o formulário: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
    
}
?>
