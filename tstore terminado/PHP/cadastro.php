<?php
include('conexao.php');

session_start();
//verifica o formulário da tela de login
// if($_SERVER["RESQUEST_METHOD"] == 'POST'){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $numero = $_POST['telefone'];

    $sql = "INSERT INTO usuarios (nome, email, senha, telefone) VALUES ('$nome', '$email', '$senha', '$telefone')";

    $stmt = $conexao->prepare($sql);
    $stmt -> bind_param('ss' ,$email,$senha);
    $stmt ->execute();
    $resultado = $stmt->get_result();

    if($resultado->num_rows == 1) {
        //login foi efetuado com sucesso
        $_SESSION['email'] = $email;
        header("Location: ../Pagina_inicial.html");
        exit();
        
    }else{
        $error = "Credenciais inválidas. verificar seu email";
    }
// }
$conexao->close();
?>
