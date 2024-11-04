<?php
include "../_app/config.php";
switch ($_REQUEST['acao']){

    case'cadastrar':
        $senha = $_POST['senha'];
        $confirma_senha = $_POST ['confirma_senha'];
        // Verifica se as senhas coincidem
        if ($senha !== $confirma_senha) {
            // As senhas não coincidem
            echo '<div class="alert alert-danger"> As senhas não coincidem. Por favor, tente novamente.<br>
            <a href="../user/create.php">Clique para voltar</a>
            </div>';
        } else {
            // Insere no banco de dados
            $sql = "INSERT INTO usuario (nome, telefone, endereco, email, cpf, cep, nascimento, senha) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssssss", $_POST ['nome'], $_POST ['telefone'], $_POST ['endereco'], $_POST ['email'], $_POST ['cpf'], $_POST ['cep'], $_POST ['nascimento'], $senha);

            if ($stmt->execute()) {
                echo '<script>alert("Cadastro com sucesso! Redirecionamento..."); window.location.href = "../usuario/perfil.php";</script>';
            } else {
                echo '<cript>alert ("Erro ao cadastrar: verifique os dados informados ou contate um administrador de site!'. $stmt->error . '"); window.location.href = "../user/create.php";</cript>';
            }
            $stmt->close();
        }
        
        // $sql = "INSERT INTO usuario (nome, nascimento, cpf, cep, telefone, senha, email, endereco) VALUES ('".$_POST['nome']." ".$_POST['nascimento']." ".$_POST['cpf']." ".$_POST['cep']." ".$_POST['telefone']." ".$_POST['senha']." ".$_POST['email']." ".$_POST['endereco']."')";

        // $res = $conn->query($sql);

        // if($res==true){
        //     print "<script>alert('Cadastro com sucesso!');</script>";
        //     print "<script>location.href='./index.php';</script>";
        // }

        // else{
        //     print"<script>alert('Nao cadastrado');</script>";
        // }
}
?>