<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php
 //Conexao com o banco de dados (ajuste as informaçoes de acordo com a sua configuraçao)
 include './_app/config.php';

 if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //preparar a consulta SQL com prepared statements para evitar SQL injection
    $stmt = $conn->prepare("SELECT * FROM donos WHERE email=?");
    if(!$stmt){
        die("Erro na preparaçao da consulta: " . $conn->error);

    }

    $stmt->bind_param("s", $email);
    if (!$stmt->execute()) {
        die("Erro na execuçao da consulta: " . $stmt->error);
    }
  }



$result = $stmt->get_result();

if($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  

  //verificar senha com password_verify
  if (password_verify($senha, $row['senha'])) {
    echo "Login bem-sucedido!";
    //aqui inicia-se a sessão e redireciona p area restrita
    session_start();
    $_SESSION['usuario_logado'] = $row['id'];
    header("Location: area_restrita.php");
    exit();
  } else {
echo "Email ou senha inválidos.";
  }
} else {
  echo "Email ou senha inválidos.";
}

$stmt->close();
}
$conn->close();
?>
<form method="post">








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

