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
include './inc/sidebar.php'; 
?>

<form action="function.php" method="post">
 <h1>Cadastro</h1>

 <input type="hidden" name="acao" value="cadastrar">  

 <label for="nome">Nome:</label>
 <input type="text" id="nome" name="nome"><br><br>
  
 <label for="email">Email:</label>
 <input type="text" id="email" name="email"><br><br> 
 <div>
 <label for="nascimento">Data de Nascimento:</label>
 <input type="date" id="nascimento" name="nascimento" min="1950-01-01" max="2006-01-01" required/>
 <span class="validity"></span>
 </div><br><br>
  
 <label for="cpf">CPF:</label>
 <input type="text" id="cpf" name="cpf" \ required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \ placeholder="xxx.xxx.xxx-xx">
 <span class="validity"></span><br><br>

 <label for="cep">CEP:</label>
 <input type="text" id="cep" name="cep" \ required pattern="\d{5}\.\d{3}" \ placeholder="xxxxx-xxx">
 <span class="validity"></span><br><br>

 <label for="endereco">Endereço:</label>
 <input type="text" id="endereco" name="endereco"><br><br>

 <label for="telefone">Numero de telefone:</label>
 <input type="tel"  id="telefone" required pattern="\d{2} \d{5} \d{4}"/ placeholder="45 99999-9999">
 <span class="validity"></span><br><br>

 <label for="senha">Senha:</label>
 <input id="senha" type="password" id="senha" name="senha" inputmode="numeric" minlength="6" maxlength="8" size="8" /><br>
<small>Aceitavel de 6 a 8 caracteres</small><br><br>

 <input type="submit" value="Cadastrar">
</form>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>