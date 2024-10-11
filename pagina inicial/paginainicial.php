<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pagina inicial</title>
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

   #carrousel {
    background-color: rgb(250, 245, 245);
    height: 600px;
    width: 1500px;

   }

   #carroseul{
    height:500px;
    width: 1800px;
    margin: 0px 50px;
   }

   #conteudo{
    background-color:rgb(250, 245, 245);
    height: 600px;
    width: 1500px;
    margin: 0px 220px;
   }

   #creditos{
    background-color:rgb(250, 245, 245);
    height: 300px;
    width: 1900px;
   }

 
   

   #titulo{

   }

  </style>
</head>

<body>

<?php
include './inc/sidebar.php'; 
?>

 
  

  <div id="carroseul">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-inner" " >
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="adote.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="conhecanossotrabalho.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="gatinho.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

  </div>


  <div id="conteudo">
    <h2 id="titulo">Conheça mais sobre a Happy Tails Addoption</h2>
    <p id="texto">O Happy Tails Adoption é um site dedicado a conectar animais abandonados e em situação de vulnerabilidade com famílias amorosas que buscam um novo amigo. Com uma interface amigável e intuitiva, o site permite que os usuários naveguem facilmente por uma variedade de perfis de animais disponíveis para adoção, incluindo cães e gatos de diferentes idades, tamanhos e temperamentos.

      Uma das grandes vantagens do Happy Tails é o compromisso com o bem-estar animal. Todos os pets disponíveis para adoção passam por um processo de avaliação e cuidados veterinários, garantindo que estejam saudáveis e prontos para iniciar uma nova fase de suas vidas. Além disso, o site oferece informações detalhadas sobre cada animal, incluindo suas características, necessidades especiais e dicas para uma adaptação suave ao novo lar.
      
      O Happy Tails também promove a conscientização sobre a importância da adoção responsável. Oferecendo recursos educativos, como guias sobre cuidados e treinamento, o site ajuda os adotantes a se prepararem para a chegada de um novo amigo de quatro patas. A comunidade do Happy Tails é vibrante e acolhedora, incentivando a interação entre adotantes, voluntários e apaixonados por animais.
      
      Ao escolher o Happy Tails Adoption, você não está apenas resgatando um animal; está transformando vidas e contribuindo para a construção de uma sociedade mais solidária e consciente. A cada adoção, um novo capítulo se inicia, e cada lar se enche de amor e alegria.
      
      Se você está pensando em adotar, visite o Happy Tails Adoption e descubra como um simples gesto pode fazer toda a diferença na vida de um animal em busca de um lar.
      
      
      
      
      
    </p>
  </div>

  <div id="creditos">

     
  </div>



  


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>