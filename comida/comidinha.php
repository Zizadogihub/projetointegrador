<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login do animal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Permanent+Marker&display=swap" rel="stylesheet">
  <style>
   
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

    #formulario {
      background-color: rgb(250, 245, 245);
      width: 1200px;
      height: 600px;
      color: black;
      border-radius: 50px;
      position: absolute;
      left: 400px;
      top: 200px;
      box-shadow: rgb(218, 218, 218) 0px -23px 25px 0px inset, rgb(214, 214, 214) 0px -36px 30px 0px inset, rgb(214, 214, 214) 0px -79px 40px 0px inset, rgb(211, 210, 210) 0px 2px 1px, rgba(255, 255, 255, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
      box-shadow: rgb(228, 228, 228) 10px 30px 30px 10px;
    }

    #cachorro {
      text-align: center;
      float: right;
      margin: 30PX;
    }


    h1 {
      margin: 30px 30px;
      text-align: center;
      font-family: Chewy;
    }

    #login {
      margin: 50px 50px
    }

    #frase {

      text-align: center;
      font-family: Chewy;
    }

    #i {
      border: none;
      border-bottom: 2px solid rgb(223, 200, 128);
      width: 550px;
      background-color: rgb(250, 245, 245);
      outline: none;
    }

    #botao {
      border-radius: 20px 20px 20px 20px;
      width: 150px;
      height: 40px;
      background-color: #be9673;
      color: white;
      border-color: #be9673;
      margin: 0px 190px;
    }

    
   
  </style>
</head>

<body>
<?php
include './inc/sidebar.php'; 
?>

  
,
  <br>
  <br>
  <br>
  <br>
  <br>



  <div id="formulario">

    <img src="" id="cachorro">


    <form action="functions.php" method="post">
      <div class="fullwith">
        <h1>Doação de ração</h1>


        <div id="frase">
          <h6>Doe pacotes de ração e ajude-nos a sustentar os animaizinhos!</h6>
        </div>
      </div>
      <div id="login">

        <input type="hidden" name="acao" value="cadastrar" id="i">

        <label for="marca"></label>
        <input type="select" id="i" name="raça" placeholder="Marca da ração:"><br><br>

        <label for="idade"></label>
        <input type="number" id="i" name="idade" placeholder="Tamanho da ração:"><br><br>

        <label for="cor"></label>
        <input type="text" id="i" name="cor" placeholder="Tipo da ração:"><br><br>

        <label for="deficiencia"></label>
        <input type="text" id="i" name="deficiencia" placeholder="Quantidade de pacotes:"><br><br>

        <br>
        <button id="botao">Enviar</button>

        <div id="login">
    </form>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>