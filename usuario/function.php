<?php

include ("../config.php");

switch ($_REQUEST['acao']){

    case'cadastrar':
        $sql = "INSERT INTO cadastro (nome, nascimento, cpf, cep, telefone, senha, endereco) VALUES ('".$_POST['nome']." ".$_POST['nascimento']." ".$_POST['cpf']." ".$_POST['cep']." ".$_POST['endereco']." ".$_POST['telefone']." ".$_POST['senha']." ".$_POST['email']."')";

        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastro com sucesso!');</script>";
            print "<script>location.href='./index.php';</script>";
        }

        else{
            print"<script>alert('Nao cadastrado');</script>";
        }
}
?>