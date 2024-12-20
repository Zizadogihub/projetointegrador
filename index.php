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
    #barra {
      color: rgb(204, 157, 95);


    }

    .nav-link {
     transition: transform 2s;

    }

    .nav-link:hover {
     transform: scale(1.2);

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
   


body{
  background-color:rgb(250, 245, 245);
}
   
  

   #carroseul{
    width: 1800px;
    margin: 0px 50px;
   }

   

   #creditos{
    background-color:rgb(250, 245, 245);
    height: 300px;
    width: 1900px;
   }

 
   #thick {
            border-color:rgb(204, 157, 95) ;
            border-bottom-style: solid;
            border-bottom-width: medium;
            width: 790px; 
            margin: 0px 600px;  
            opacity: 50%;         
        }

        .list-group-item{
            background-color:rgb(250, 245, 245);
            border-bottom-color: rgb(204, 157, 95);
            width: 400px;
            transition: transform 0.5s;
            
        }

        .list-group-item:hover{
            transform: scale(1.1);
        }
        .list-group {
        margin-top: 30px;
        margin-left:60px;
        position: absolute;
        }

   .a{
    color:rgb(204, 157, 95);
          text-decoration: none;
   }

   #titulo1{
    widht:500px
    height: 400px
    border: 4px solid black;
    margin: 300px 500px;

   }

   .botao{
    transition: transform 1s;
   }

   .botao:hover{
    transform: scale(1.1);
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
            <a class="nav-link active" aria-current="page" href="http://localhost/projetointegrador/paginainicial/index.php" style="">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Adoção</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/projetointegrador/paginainicial/doe.php">Doação</a>
          </li>
          <li class="nav-item"></li>
            <a class="nav-link" href="http://localhost/projetointegrador/user/login.php">login</a>
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
  
  
  <br>
  
  <div id="carroseul">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-inner" " >
          <div class="carousel-item active" data-bs-interval="10000">
          <button class="botao" style="border-radius: 20px 20px 20px 20px; width: 200px; height: 40px; opacity:80%; background-color: #be9673; color: white; border-color: #be9673;  margin: 450px 290px; position:absolute;  ">Adote</button>
            <img src="adote.png" class="d-block w-100" alt="..." style="relative;">
            
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
<br>

<div class="lista">
<ul class="list-group list-group-flush">
  <li class="list-group-item"><a class="a" href="#conheça">Conheça mais sobre a Happy Tails Addoption</a></li>
  <li class="list-group-item"><a class="a" href="#consideraçao">Considerações sobre a adoção</a></li>
  <li class="list-group-item"><a class="a" href="#antes">O que considerar antes de adotar</a></li>
  <li class="list-group-item"><a class="a" href="#comoadotar">Como adotar um cachorro online</a></li>
  
</ul>
    
      <br>
    <div id="conheça" class="titulo" style="width:800px; margin:0px 600px; font-size:40px; color:rgb(204, 157, 95);" >
    Conheça mais sobre a Happy Tails Addoption
    </div>
    <br>
<div id="thick">    
</div>
<br>
<br>
    <div  class="texto" style="width: 800px; height: 150px; margin:0px 600px; ">
    <p  >O Happy Tails Adoption é um site dedicado a conectar animais abandonados e em situação de vulnerabilidade com famílias amorosas que buscam um novo amigo. Com uma interface amigável e intuitiva, o site permite que os usuários naveguem facilmente por uma variedade de perfis de animais disponíveis para adoção, incluindo cães e gatos de diferentes idades, tamanhos e temperamentos.

      Uma das grandes vantagens do Happy Tails é o compromisso com o bem-estar animal. Todos os pets disponíveis para adoção passam por um processo de avaliação e cuidados veterinários, garantindo que estejam saudáveis e prontos para iniciar uma nova fase de suas vidas. Além disso, o site oferece informações detalhadas sobre cada animal, incluindo suas características, necessidades especiais e dicas para uma adaptação suave ao novo lar.
      
      O Happy Tails também promove a conscientização sobre a importância da adoção responsável. Oferecendo recursos educativos, como guias sobre cuidados e treinamento, o site ajuda os adotantes a se prepararem para a chegada de um novo amigo de quatro patas. A comunidade do Happy Tails é vibrante e acolhedora, incentivando a interação entre adotantes, voluntários e apaixonados por animais.
      
      Ao escolher o Happy Tails Adoption, você não está apenas resgatando um animal; está transformando vidas e contribuindo para a construção de uma sociedade mais solidária e consciente. A cada adoção, um novo capítulo se inicia, e cada lar se enche de amor e alegria.
      
      Se você está pensando em adotar, visite o Happy Tails Adoption e descubra como um simples gesto pode fazer toda a diferença na vida de um animal em busca de um lar.
    </p>
  </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div>
    <iframe style="width:560px; height:315px; margin:0px 660px;" src="https://www.youtube.com/embed/bKIBpmR4flY?si=svv2khVDUpxjEb2u" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> 
  </div>
 <br>
 <br>
 <div id="consideraçao" class="titulo" style="width:800px; margin:0px 600px; font-size:40px; color:rgb(204, 157, 95);" >
    Considerações sobre a adoção
    </div>
    <br>
<div id="thick">    
</div>
<br>
<br>
    <div  class="texto" style="width: 800px; height: 150px; margin:0px 600px; ">
    <p  >
Adotar cachorro online sem que seja necessário visitar abrigos de animais se tornou uma realidade já há alguns anos. Mas foi com a pandemia da Covid-19, em 2020, que os índices de adoção virtual aumentaram de maneira significativa.

A onda de adoções online de cachorro, e até mesmo adoção de gatos, foi motivada pela necessidade de evitar aglomerações de pessoas e de ampliar o risco de contágio por coronavírus.

O aumento também se deu pelo isolamento social, que fez com que várias pessoas ficassem em casa e sentissem falta da companhia de um “melhor amigo”.
    </p>
  </div>
    <br>
    <br>
    <div id="antes" class="titulo" style="width:800px; margin:0px 600px; font-size:40px; color:rgb(204, 157, 95);" >
    O que considerar antes de adotar
    </div>
    <br>
<div id="thick">    
</div>
<br>
<br>
    <div  class="texto" style="width: 800px; height: 150px; margin:0px 600px; ">
    <p  >
    Adotar um cachorro é uma grande responsabilidade. Afinal, o animal ficará com você por muito tempo – já que cães vivem cerca de 15 anos - e dependerá totalmente da sua família para dar carinho, ração, levar ao veterinário, etc.<br>

Por isso, antes de concluir a sua adoção, avalie alguns pontos:<br>

Você e sua família têm disponibilidade e tempo para receber um animal em casa?<br><br>

Têm condições de arcar com os custos de um novo pet? Um cachorro demanda gastos mensais, sendo o custo médio de um cachorro de R$ R$ 338,76, segundo dados do Instituto Pet Brasil.<br><br>

Sua casa tem espaço para que seu pet possa brincar e correr? Se não tiver, você tem como levá-lo à rua ou a uma praça diariamente? Principalmente cães filhotes são muito agitados e precisam gastar energia.<br><br>

Como é o seu estilo de vida? Cães necessitam de atenção, portanto, se você passa pouco tempo na sua casa ou se tem o costume de viajar bastante, ele poderá se sentir solitário e triste.
    </p>
  </div>
  <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div id="comoadotar" class="titulo" style="width:800px; margin:0px 600px; font-size:40px; color:rgb(204, 157, 95);" >
    Como adotar um cachorro online
    </div>
    <br>
<div id="thick">    
</div>
<br>
<br>
    <div  class="texto" style="width: 800px; height: 150px; margin:0px 600px; ">
    <p  >
    Existem diversos sites de ONGs e abrigos de cães e gatos que fazem a mediação entre o tutor e os animais abandonados ou resgatados das ruas. Além disso, é possível adotar animais online utilizando aplicativos para celular.<br><br>

Por esses canais, você poderá ver a foto dos animais disponíveis para adoção, além de informações sobre eles, como nome, raça, porte, se é macho ou fêmea, se testou negativo para Leishmaniose ou outras doenças.<br><br>

Para que o processo de adoção de cachorro feito à distância seja responsável e a instituição possa garantir que o novo lar do animal será confiável, são feitos alguns procedimentos – todos online, é claro.
    </p>
  </div>

  <br>
<br>
<br>
<br>
<br> 
<br>
<br> 
<br>
<br> 
<br>
<br> 
<br>
<br>
<br>
<br>
<div class="creditos1">
   
    <h1 style="font-family:Chewy; color:rgb(250, 245, 245); margin:100px 700px; position:absolute;">Happy Tails Adopption</h1>
    <h3 style="font-family:Chewy; color:rgb(250, 245, 245); margin:180px 740px; ">Agradece sua presença</h3>

</div>
<div class="creditos2">
<br>
<br>
<br>
<br>

 

<ul class="list-group list-group-horizontal" style="margin:0px 255px;  position:absolute; "> 
  <li class="list-group-item" style="text-align:center; background:transparent; font-weight:bold; border:none; "><svg xmlns="http://www.w3.org/2000/svg" style="width:76px; color:rgb(250, 245, 245); border-radius:50%; box-shadow: rgba(0, 0, 0, 0.56) 0px 30px 80px 15px;" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg><br><br>Artur Terra<br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
</svg></li>
  <li class="list-group-item" style=" text-align:center; background:transparent; font-weight:bold; border:none; "><svg xmlns="http://www.w3.org/2000/svg" style="width:76px; color:rgb(250, 245, 245); border-radius:50%; box-shadow: rgba(0, 0, 0, 0.56) 0px 30px 80px 15px; " fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg><br><br>Zihara Cyceli<br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
</svg></li>
  <li class="list-group-item" style="text-align:center; background:transparent; font-weight:bold; border:none;"><svg xmlns="http://www.w3.org/2000/svg" style="width:76px; color:rgb(250, 245, 245); border-radius:50%; box-shadow: rgba(0, 0, 0, 0.56) 0px 30px 80px 15px;" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg><br><br>Davi Guilherme<br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
  <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
</svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
</svg></li>
  
</ul>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<ul class="list-group list-group-horizontal" style="margin:0px 100px;  position:absolute; height:90px; "> 
  <li class="list-group-item" style="text-align:center; background:transparent; border:none;"><img src="logo-sobre-a-ong.png" style="width:60px;"></li>
  <li class="list-group-item" style=" text-align:center; background:transparent; border:none;"><img src="logo.png" style="width:60px;"></li>
  <li class="list-group-item" style="text-align:center; background:transparent; font-weight:bold; border:none;">Disque<br>181</li>
  <li class="list-group-item" style=" text-align:center; background:transparent; border:none;"><img src="logo3.png" style="width:60px; "></li>
</ul>
</div>



  


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>