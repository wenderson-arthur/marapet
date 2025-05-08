<?php
require_once('html_header.php');
require_once('header.php');
?>
<body>
<main id="main">
    <!--==========================
            Intro Section
        ============================-->


    <div id="carouselExampleControls" class="carousel" data-ride="carousel">
        <!-- <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
        </ol> -->
        <div class="carousel-inner">
            <div id="intro" class="carousel-item active">
                <div class="slider-banner">
                    <div class="intro-container wow fadeIn">
                        <h1>V MARAPET</h1>

                        <h2 style="color: white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, pariatur enim. Molestias consequatur velit magnam distinctio dolorum placeat, ea beatae pariatur, reiciendis quis ipsa quasi expedita exercitationem quos eum provident.</h2>
                        
                        <a href="#about-event" class="about-btn text-decoration-none">
                          <b>Sobre o evento</b>
                        </a>
                    </div>
                </div>
            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                <span class="visually-hidden"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="false"></span>
                <span class="visually-hidden"></span>
            </a> -->
        </div>
    </div>

    <!--==========================
            About Section
        ============================-->
    <section id="about">
        <div class="container">
            <div class="row">
                <center>
                    <div class="col-lg-12">
                        <h2>Temática</h2>
                        <p>
                          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates similique quam eaque id qui eius saepe exercitationem rerum dolorum architecto repellat non quibusdam, rem dolor! Sapiente fuga rem delectus distinctio?
                        </p>
                    </div>
                </center>
            </div>
        </div>
    </section>


    <section id="about-event" class="wow fadeInUp section-with-bg" style="visibility: visible; animation-name: fadeInUp;">

      <div class="container ">
        <div class="section-header">
          <h1 class="black">SOBRE O EVENTO</h1>
        </div>
      </div>
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="black">Objetivo</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque sed, sunt et quia quasi quo eligendi obcaecati mollitia officia voluptatem velit a impedit soluta hic ipsam beatae quas, numquam placeat.
            </p>
          </div>
        </div>
      </div>

      <div class="container text-center">
        <div class="row">
          <div class="col-lg-12">
            <h2 class="black">Histórico ou Destaques do Evento</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt aliquam quos doloribus corrupti sunt omnis cumque, reprehenderit distinctio eum consectetur sapiente veritatis minima quam, neque laudantium quibusdam quidem similique saepe.
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta voluptates explicabo perferendis, facilis autem aperiam est officiis dolores corporis vel magni laborum doloribus modi odio error dignissimos fuga culpa assumenda.
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae consequatur doloribus ipsa! Quam eum quo numquam, ut nesciunt, consequuntur ratione, esse ex harum optio laboriosam aut modi exercitationem veniam aliquam.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Sobre o evento -->
    <!--====================
            Organização
        ======================-->
    <section id="supporters" class="wow fadeInUp section-with-bg">
    <div class="container ">
            <div class="section-header">
                <h2 class="color: black">REALIZAÇÃO</h2>
            </div>
            <div class="supporter-logo2">
              <a href="#" target="_blank">
                <img src="img/supporters/logo_ppgst.png" class="img-fluid" alt="">
              </a>
            </div>

            <div class="section-header">
                <h2 class="color: black">PATROCÍNIO</h2>
            </div>
            <div class="patrocinio-container">
            <div class="supporter-logo3">
              <a href="https://www.fapema.br/" target="_blank">
                <img src="img/supporters/logo_fapema.png" class="img-fluid" alt="">
              </a>
              <a href="https://portalpadrao.ufma.br/ageufma" target="_blank">
                <img src="img/supporters/logo_ageufma.png" class="img-fluid" alt="">
              </a>
            </div>
            </div>

        <div class="container ">
            <div class="section-header">
                <h2 class="color: black">APOIO</h2>
            </div>



            
                            <div class="row no-gutters supporters-wrap clearfix">

                <div class="col-lg-5 col-md-6 col-xs-14">
                <div class="supporter-logo">
                    <a href="https://www.gov.br/capes/pt-br" target="_blank">
                    <img src="img/supporters/logo_capes.png" class="img-fluid" alt="">
                    </a>
                </div>
        </div>
    </section>

</main>

<?php
require_once('footer.php');
require_once('html_footer.php');
?>
</body>