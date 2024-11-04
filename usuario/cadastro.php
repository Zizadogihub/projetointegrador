<!doctype html>
<html lang="en">
  <head>

  <style>
#barra {
      color: rgb(204, 157, 95);


    }


    #parte {
      border-radius: 10px 10px 10px 10px;
      height: 90px;
      width: 1400px;
      margin: 40px 290px;
      box-shadow: rgba(59, 59, 59, 0.56) 0px 22px 70px 4px;
      font-family:Concert One ;
      font-size: 20px;
    }

    #palavras{
    margin: 0px 200px;

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

   #palavras{
    margin: 0px 300px;

   }

  </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <style>
      #barra{
        color: rgb(199, 152, 81);
      }

      .row{
        justify-content: space-between;

      }
    </style>

<nav class="navbar navbar-expand-lg bg-body-tertiary" id="parte" >
   
   <div class="container-fluid" id="palavras">
    
     <a class="navbar-brand" id="barra" style="font-family:Chewy; font-size: xx-large;">Happy Tail Adoption</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
       aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNav" >
       <ul class="navbar-nav">
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="#" style="">Inicio</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Adoção</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Doação</a>
         </li>
         <li class="nav-item"></li>
           <a class="nav-link" href="file:///C:/Users/ZIHARACYCELIMEAURIOQ/Desktop/projetointegrador/pagina%20inicial/doe.html">Doe</a>
         </li>
         <li class="nav-item"></li>
           <a class="nav-link" href="#">Cadastre-se</a>
         </li>
         <nav class="navbar bg-body-tertiary" >
           <div class="container-fluid" >
             <form class="d-flex" role="search">
               <input class="form-control me-2" type="search" placeholder="Pesquisar" style="font-family:Concert One; width: 160px;">
               <button class="btn btn-outline-success" type="submit" style="background-color:transparent; border-color:transparent; width:100px;  "><img src="search-heart.svg" style=" height:30px;" ></button>
             </form>
           </div>
         </nav>
       </ul>
       
     </div>
   </div>

 </nav>
 
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
 <input type="text" id="cep" name="cep" \ required pattern="\d{5}\-\d{3}" \ placeholder="xxxxx-xxx">
 <span class="validity"></span><br><br>

 <label for="endereco">Endereço:</label>
 <input type="text" id="endereco" name="endereco"><br><br>

 <label for="telefone">Numero de telefone:</label>
 <input type="tel"  id="telefone" name="telefone" \ required pattern="\d{2} \d{5}\- \d{4}"\ placeholder="45 99999-9999">
 <span class="validity"></span><br><br>

 <label for="senha">Senha:</label>
 <input id="senha" type="password" name="senha" inputmode="numeric" minlength="6" maxlength="8" size="8" /><br>
<small>Aceitavel de 6 a 8 caracteres</small><br><br>

<label for="senha">Comfirmar senha:</label>
 <input id="confirma_senha" type="password" name="confirma_senha" inputmode="numeric" minlength="6" maxlength="8" size="8" /><br>
<small>Aceitavel de 6 a 8 caracteres</small><br><br>


 <input type="submit" value="Cadastrar">
</form>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>