<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>doe</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Permanent+Marker&display=swap" rel="stylesheet">
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
   
  #escolha{
    width: 400px;
    height: 500px;
    border-radius: 20px;
    background-color: white;
    display: inline-block;
  
    
  }

   #escolha2{
    width: 400px;
    height: 500px;
    border-radius: 20px;
    background-color: white;
    display: inline-block;
    

   }

   #dinheiro{
    border: white ;
    background-color: transparent ;
   }

   #comida{
    border: white ;
    background-color: transparent ;
   }

   .center {
  margin: 100px 550px;
  width: 50%;
  border: transparent;
  padding: 10px;
}

  </style>
</head>

<body>


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
            <a class="nav-link active" aria-current="page" href="file:///C:/Users/ZIHARACYCELIMEAURIOQ/Desktop/projetointegrador/pagina%20inicial/paginainicial.html" style="">Voltar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Adoção</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Doação</a>
          </li>
          <li class="nav-item"></li>
            <a class="nav-link" href="#">Doe</a>
          </li>
        </ul>
        
      </div>
    </div>
 
  </nav>
 
  <div id="suasescolhas">
    <p style="color: white; font-size: large; text-align: center; margin: 0px 90px;">Para ajudar os nossos parceirinhos escolha qual sera sua forma de doação</p>
  </div>

  <div class="center">
  <div  id="escolha"><button id="dinheiro" style="height: 100px; width: 150px; margin: 220px 120px ; border-radius: 40px 40px 40px 40px" ><img src="cash-coin.svg" style="height: 90px;"></button></div>

  <div id="escolha2"><button id="comida" style="height: 100px; width: 150px; margin: 220px 120px ; border-radius: 40px 40px 40px 40px" ><img src="egg.svg" style="height: 90px;"></button></div>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>