<?php
    include ("conn.php");
    $consulta = "SELECT * FROM livros";
    $con = $mysqli->query($consulta) or die($mysqli->error);
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arthur Lima</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script src="https://unpkg.com/scrollreveal"></script>
    
  </head>
  <body>

    <!--=======Scroll to top button=======-->

    <!--=======Light/Dark theme button=======-->

    <!--=======Header=======-->
    <header>
        <div class="nav-bar">
            <a href="#" class="logo">Arthur Lima</a>
            <div class="navigation">
                <div class="nav-items">
                    <div class="nav-close-btn"></div>
                     <a href="#home">Home</a>
                     <a href="#about">Sobre</a>
                     <a href="#portfolio">Contos</a>
                </div>
            </div>
            <div class="nav-menu-btn"></div>
        </div>
    </header>
    <!--=======Home section=======-->
    <section class="home flex-center" id="home">
        <div class="home-container">
            <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="info">
                <h2>Olá, Sou o Arthur</h2>
                <h3>Contador de Historias</h3>
                <p>Eu por meio desse site quero te contar minhas historias.</p>
                <a href="#portfolio" class="btn">Leia alguns de meus contos. <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <div class="home-img">
                <img src="images/main-img.png" alt="">
            </div>
        </div>
        <a href="#sobre" class="scroll-down">Descer mais <i class="fas fa-arrow-down"></i> </a>
    </section>

    <!--=======About section=======-->
    <section class="about section" id="about">
        <div class="container flex-center">
            <h1 class="section-title-01">Sobre mim</h1>
            <h2 class="section-title-02">Sobre mim</h2>
            <div class="content flex-center">
                <div class="about-img">
                    <img src="images/about-img.png" alt="" srcset="">
                </div>
                <div class="about-info">
                    <div class="description">
                        <h3>Arthur Lima</h3>
                        <h4>Paixão por <span>contar histórias</span>.</h4>
                        <p>Sempre <span>gostei de contar histórias</span>, mas nesse último ano <span>aprendi muito mais sobre a arte por trás de cada palavra</span> de um autor e me apaixonei. Por isso <span>estou dando o meu melhor</span> para espalhar a paixão por essa arte. Eu sendo um autor de um livro era <span>um sonho distante agora está cada vez mais próximo</span>, dou o meu melhor para alcançar esse sonho, tenho certeza que quem sabe o caminho que segue uma hora vai alcançar seu objetivo.</p>
                    </div>
                    <ul class="writen">
                        <li class="list-item">
                            <h3>O fantasma do nazismo</h3>
                            <span>Drama</span>
                        </li>
                        <li class="list-item">
                            <h3>Antes do sol</h3>
                            <span>Ficçao cientifica</span>
                        </li>
                    </ul>
                    <a href="AntesDoSol.pdf" download="AntesDoSol.pdf" type="aplication/pdf" class="btn">Antes do sol <i class="fas fa-download"></i> </a>
                </div>
            </div>
        </div>
    </section>

    <!--=======Skills section=======-->

    <!--=======Services section=======-->

    <!--=======Portfolio section=======-->
    <section class="portfolio section" id="portfolio">

        <div class="container flex-center">

            <h1 class="section-title-01">Contos</h1>
            <h1 class="section-title-02">Contos</h1>

            <div class="content">

                <div class="portfolio-list">
                     <!-- Começo do laço de repetição -->
                     <?php while($dado = $con->fetch_array()){ ?>
                    <div class="img-card-container">

                        <div class="img-card">

                        <div class="overlay"></div>

                            <div class="info">
                                <h3><?= $dado["titulo"];?></h3>
                                <span><?= $dado["categoria"];?></span>
                                </div>
                                <img src="cImg/<?= $dado["foto"];?>" alt="">
                        </div>
                        <div class="portfolio-model flex-center">
                            <div class="portfolio-model-body">
                                <i class="fas fa-times portfolio-close-btn"></i>
                                <h3><?= $dado["titulo"];?></h3>
                                <img src="cImg/<?= $dado["foto"];?>" alt="" srcset="">
                                <p><?= $dado["sinopse"];?></p>
                                <a href="view.php?id=<?= $dado["id"];?>"><button class="btn-go">Ir até</button></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- Fim do laço de repetição -->


                </div>
            </div>
        </div>
    </section>
      <!--=======Get-in-touct=======-->
      
      <!--=======Our Clients=======-->

    <!--=======Contact section=======-->

    <!--=======Footer=======-->
    <footer>
        <div class="footer-container">
            <div class="about group">
                <h2>Arthur Lima</h2>
                <p>Contador de historias</p>
               
            </div>
 
            <div class="hr"></div>
                <div class="follow group">
                    <h3>Me siga nas redes sociais</h3>
                    <ul>
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="hr"></div>
                <div class="copy">
                <p>&copy; Arthur Lima. Todos os direitos reservados.</p>
                </div>
        </div>
    </footer>

    <!--=======External scripts=======-->
    <script src="js/main.js"></script>

  </body>
</html>
