<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Página Protegida</title>
  <link rel="stylesheet" href="inicio.css">

  <style>
    .sair{
      padding: 10px;
      color: black;
      background-color:white;
      border-radius: 90px;
      position: relative;
      top: 1px;
      font-size: 19px;
      font-family: Arial, sans-serif;
      text-decoration: none;
    }

      .rodape-fixo {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: #222;
  color: white;
  text-align: center;
  padding: 15px;
  font-family: Arial, sans-serif;
  font-size: 14px;
  z-index: 999;
  border-radius: 90px;
}


  </style>

</head>
<body>
    
  

    <div class="rodape-fixo">
  <a href="logout.php" class="sair" >SAIR</a>
</div>



  <div class="galeria-img">
        
          <button class="f1"><img src="img/A Autópsia de Jane Doe.webp" alt=""></button>
        <img src="img/A Entidade.jpg" alt="">
        <img src="img/A Freira.webp" alt="">
        <img src="img/A Morte do Demônio.webp" alt="">
        <img src="img/A_Bruxa_de_Blair_1999.webp" alt="">
        <img src="img/alien.jpg" alt="">
        <img src="img/bebe rosemary.jpg" alt="">
        <img src="img/Corra!.webp" alt="">
        <img src="img/corrent do mal.webp" alt="">
        <img src="img/halloween.jpg" alt="">
        <img src="img/Hereditário.jpg" alt="">
        <img src="img/invocaçao do mal.jpg" alt="">
        <img src="img/It A Coisa.jpg" alt="">
        <img src="img/O Babadook.jpg" alt="">
        <img src="img/O Chamado.webp" alt="">
        <img src="img/o exorcista.webp" alt="">
        <img src="img/o iluminado.jpg" alt="">
        <img src="img/O Orfanato.jpg" alt="">
        <img src="img/O-colecionador-de-ossos.webp" alt="">
        <img src="img/o-massacre-da-serra-eletrica-min.png" alt="">
        <img src="img/os outros.webp" alt="">
        <img src="img/profecia.jpg" alt="">
        <img src="img/psicose.jpg" alt="">
        <img src="img/Sobrenatural.jpg" alt="">
        <img src="img/Um Lugar Silencioso.jpg" alt="">
        
    </div>
    

</body>
</html>
