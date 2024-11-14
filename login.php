<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<style>

    #login{
        width: 450px;
        height: 600px;
        border-radius: 40px 40px 40px 40px;
        margin: 200px 700px;
        background-color:  rgb(250, 245, 245);
        box-shadow: rgb(218, 218, 218) 0px -23px 25px 0px inset, rgb(214, 214, 214) 0px -36px 30px 0px inset, rgb(214, 214, 214) 0px -79px 40px 0px inset, rgb(211, 210, 210) 0px 2px 1px, rgba(255, 255, 255, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
        box-shadow: rgb(228, 228, 228) 10px 30px 30px 10px;
    }

    #e{
       
      border: none;
      border-bottom: 2px solid rgb(223, 200, 128);
      width: 350px;
      background-color: rgb(250, 245, 245);
      outline: none;
    }
   
    #usuario{
        width: 130px ;
        height:130px;
        background-color:#e7bb91;
        opacity: 70%;
        border-radius: 50%;
        margin: 0px 155px;
        
    }

    body {
      background: linear-gradient(295deg, #e9e8e8, #c0c0c0, #dfae78, #be9673, #e7bb91);
      background-size: 360% 360%;
      animation: gradient-animation 24s ease infinite;
      height: 100vh;
    }

    @keyframes gradient-animation {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }

    #botao {
      border-radius: 20px 20px 20px 20px;
      width: 150px;
      height: 40px;
      background-color: #be9673;
      color: white;
      border-color: #be9673;
      margin: 0px 150px;
      
    }
    </style>
<body>
   
    <div id="login">
        <br>
        <br>
        
        
        

    <div id="usuario">
        
        <svg xmlns="http://www.w3.org/2000/svg" style="width:75px; color:rgb(250, 245, 245); margin: 25px 30px;" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" >
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg>
        

</div>
<br>

<h1 style="text-align: center; font-family: Chewy; color:rgb(204, 157, 95);">Login</h1>
<br>
    <form method="post">
<center>
        <label for="email"></label>
        <input type="email" id="e" name="email" placeholder="Email"><br><br>

        <label for="senha"></label>
        <input id="e" type="password" name="senha" inputmode="numeric" minlength="6" maxlength="8" size="8"  placeholder="Senha" /><br>
        </center>
        <small style="margin: 50px; opacity: 50%;">Aceitavel de 6 a 8 caracteres</small><br><br><br>
        <button type="submit" name="submit" id="botao">Enviar</button>
        <center>
        Não possui um login,<a href="" style="text-decoration:none; color:rgb(204, 157, 95);"> cadastra-se</a>
  </center>
    </form>
</div>

    <?php
    //Conexao com o banco de dados (ajuste as informaçoes de acordo com a sua configuraçao)
    include "_app/config.php";

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //echo  $email ."##".$senha;

        //preparar a consulta SQL com prepared statements para evitar SQL injection
        // $stmt = $conn->prepare("SELECT * FROM usuario WHERE email=? and senha=?");
        // if (!$stmt) {
        //     die("Erro na preparaçao da consulta: " . $conn->error);
        // }


        $sql = "SELECT * FROM usuario WHERE email='$email'";
        $result = $conn->query($sql);


       // $stmt->bind_param("ss", $email, $senha);

        
        
        // if (!$stmt->execute()) {
        //     die("Erro na execuçao da consulta: " . $stmt->error);
        // }

        //var_dump($stmt);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Login bem-sucedido!" . $row['email'] . $row['senha'];
                header("Location: http://localhost/projetointegrador/usuario/perfil.php");
            }
        } else {
            echo "Falha ao logar";
        }


       // $result = $stmt->get_result();

   

    //     if ($result->num_rows > 0) {
    //         $row = $result->fetch_assoc();


    //         //verificar senha com password_verify
    //         if (password_verify($senha, $row['senha'])) {
    //             echo "Login bem-sucedido!";
    //             //aqui inicia-se a sessão e redireciona p area restrita
    //             session_start();
    //             $_SESSION['usuario_logado'] = $row['id'];
    //             header("Location: index.php");
    //             exit();
    //         } else {
    //             echo "Senha inválida.";
    //         }
    //     } else {
    //         echo "Email inválidos.";
    //     }

    //     $stmt->close();
    
     }

    $conn->close();
    ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>