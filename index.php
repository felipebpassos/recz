<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Felipe Passos | Landing Page desenvolvida por Simplify Web">
    <meta name="keywords" content="Recz, filmagem, reels, instagram, produtora, Aracaju, aracaju, Sergipe, Melhor produtora de Aracaju, Melhor produtora de Sergipe, Melhor produtora do Nordeste, Melhor produtora do Brasil, filmaker, edição de vídeos, gravações, filmagens">
    <meta name="robots" content="index,follow">

    <meta property="og:image" content="./img/logo_recz.png">
    <meta property="og:title" content="Recz Films | Autoridade em Produção e Edição de Vídeos">
    <meta property="og:description" content="">

    <title>Recz Films | Autoridade em Produção e Edição de Vídeos</title>

    <link rel="icon" href="./img/favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

</head>

<body>

    <?php
    if (isset($_GET['success'])) {
        // Exibe um alerta Bootstrap com a mensagem de sucesso
        echo '<div id="success-alert" class="alert alert-success fixed-alert" role="alert">' . $_GET['success'] . '</div>';
    } else if (isset($_GET['error'])) {
        // Exibe um alerta Bootstrap com a mensagem de erro
        echo '<div id="error-alert" class="alert alert-danger fixed-alert" role="alert">' . $_GET['error'] . '</div>';
    }
    ?>

    <main>

        <!-- Capa -->
        <section class="capa" id="capa">
            <img id="background" src="./img/background-fullest.png" alt="Background Image">
            <img id="time" src="./img/recz_time.webp" alt="Time Recz Image">
            <img id="logo" src="./img/logo.png" alt="Recz Logo">
            <div class="fade-bottom"></div>
            <div class="texto fade-in-element">
                <h2>Sua empresa com <span style="color: var(--red);">conteúdo de cinema</span></h2>
                <p>Transfomamos ideias em videos virais. Especialistas em criação de conteúdo. Mais de 50 milhões de visualizações para clientes.</p>
            </div>
            <a href="#contato"><button class="btn-primario fade-in-element">QUERO FAZER PARTE</button></a>
            <div class="redes-sociais">
                <a href="https://www.instagram.com/reczfilms/" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </section>

        <div class="numeros font1 fade-in-element">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 numero">
                        <div class="top">
                            +<span class="main-number" id="number1">70</span>Milhões
                        </div>
                        <div class="bottom">
                            DE VISUALIZAÇÕES PARA CLIENTES
                        </div>
                    </div>
                    <div class="col-md-4 numero">
                        <div class="top">
                            +<span class="main-number" id="number2">312</span>Reels
                        </div>
                        <div class="bottom">
                            ENTREGUES EM 2024
                        </div>
                    </div>
                    <div class="col-md-4 numero">
                        <div class="top">
                            +<span class="main-number" id="number3">7</span>Anos
                        </div>
                        <div class="bottom">
                            NO MERCADO AUDIOVISUAL
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sobre a Recz -->
        <section class="sobre" id="sobre">
            <h1>QUEM SOMOS</h1>
            <div class="container">
                <div class="row">
                    <!-- Coluna de imagem -->
                    <div class="col-md-6">

                    </div>
                    <!-- Coluna de texto -->
                    <div class="col-md-6">
                        <p class="fade-in-element">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p class="fade-in-element">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clientes/Brands Section -->
        <section class="clientes" id="clientes">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 brand-item">
                        <img src="./img/brands/ambev.webp" alt="Cervejaria Ambev">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 brand-item">
                        <img src="./img/brands/dominos.webp" alt="Domino's Pizza">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 brand-item">
                        <img src="./img/brands/track.webp" alt="Track & Field">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 brand-item">
                        <img src="./img/brands/carapreta.webp" alt="Cara Preta">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 brand-item">
                        <img src="./img/brands/acai_aju.webp" alt="Açaí Aju">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 brand-item">
                        <img src="./img/brands/julima.webp" alt="Chefe Ju Lima">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 brand-item">
                        <img src="./img/brands/otto.webp" alt="OTTO">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 brand-item">
                        <img src="./img/brands/sarauzin.webp" alt="Sarauzin">
                    </div>
                </div>
            </div>
        </section>

        <!-- Cases de sucesso | Portfolio -->
        <section class="cases" id="cases">
            <h1 class="fade-in-element">CASES</h1>

            <!-- Carrossel para Eventos -->
            <div class="carousel-section fade-in-element">
                <h2><span><img src="./img/red_dot.png" alt="Rec"></span>Eventos</h2>
                <div class="custom-carousel">
                    <div class="custom-carousel-wrapper">
                        <div class="custom-carousel-item" data-video-src="./videos/Eventos/Sarauzin2.M4V">
                            <img src="./img/thumbnails/evento01.png" alt="Thumbnail 1" draggable="false">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                            <div class="degrade"><span>Ver vídeo</span></div>
                        </div>
                        <div class="custom-carousel-item" data-video-src="./videos/Eventos/michelle_pontes.M4V">
                            <img src="./img/thumbnails/evento02.png" alt="Thumbnail 2" draggable="false">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                            <div class="degrade"><span>Ver vídeo</span></div>
                        </div>
                        <div class="custom-carousel-item" data-video-src="./videos/Eventos/Sarauzin.M4V">
                            <img src="./img/thumbnails/evento03.png" alt="Thumbnail 3" draggable="false">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                            <div class="degrade"><span>Ver vídeo</span></div>
                        </div>
                        <div class="custom-carousel-item" data-video-src="./videos/Eventos/aftermovie.MOV">
                            <img src="./img/thumbnails/evento04.jpeg" alt="Thumbnail 1" draggable="false">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                            <div class="degrade"><span>Ver vídeo</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carrossel para Gastronomia -->
            <div class="carousel-section fade-in-element">
                <h2><span><img src="./img/red_dot.png" alt="Rec"></span>Gastronomia</h2>
                <div class="custom-carousel">
                    <div class="custom-carousel-wrapper">
                        <div class="custom-carousel-item" data-video-src="./videos/Gastronomia/acucena.mov">
                            <img src="./img/thumbnails/gastronomia01.png" alt="Thumbnail 1" draggable="false">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                            <div class="degrade"><span>Ver vídeo</span></div>
                        </div>
                        <div class="custom-carousel-item" data-video-src="./videos/Gastronomia/madi.mov">
                            <img src="./img/thumbnails/gastronomia02.png" alt="Thumbnail 2" draggable="false">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                            <div class="degrade"><span>Ver vídeo</span></div>
                        </div>
                        <div class="custom-carousel-item" data-video-src="./videos/Gastronomia/otto.m4v">
                            <img src="./img/thumbnails/gastronomia03.png" alt="Thumbnail 3" draggable="false">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                            <div class="degrade"><span>Ver vídeo</span></div>
                        </div>
                        <div class="custom-carousel-item" data-video-src="./videos/Gastronomia/pescatore.mp4">
                            <img src="./img/thumbnails/gastronomia04.png" alt="Thumbnail 1" draggable="false">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                            <div class="degrade"><span>Ver vídeo</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carrossel para Imóveis -->
            <div class="carousel-section fade-in-element">
                <h2><span><img src="./img/red_dot.png" alt="Rec"></span>Imóveis</h2>
                <div class="custom-carousel">
                    <div class="custom-carousel-wrapper">
                        <div class="custom-carousel-item" data-video-src="./videos/Imoveis/dicon.mov">
                            <img src="./img/thumbnails/imovel01.png" alt="Thumbnail 1" draggable="false">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                            <div class="degrade"><span>Ver vídeo</span></div>
                        </div>
                        <div class="custom-carousel-item" data-video-src="./videos/Imoveis/exito.mov">
                            <img src="./img/thumbnails/imovel02.png" alt="Thumbnail 2" draggable="false">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                            <div class="degrade"><span>Ver vídeo</span></div>
                        </div>
                        <div class="custom-carousel-item" data-video-src="./videos/Imoveis/arq_felipe.mov">
                            <img src="./img/thumbnails/imovel03.png" alt="Thumbnail 3" draggable="false">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                            <div class="degrade"><span>Ver vídeo</span></div>
                        </div>
                        <div class="custom-carousel-item" data-video-src="./videos/Imoveis/corretor_matheus.mov">
                            <img src="./img/thumbnails/imovel04.png" alt="Thumbnail 1" draggable="false">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                            <div class="degrade"><span>Ver vídeo</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carrossel para Outros -->
            <div class="carousel-section fade-in-element">
                <h2><span><img src="./img/red_dot.png" alt="Rec"></span>Campanhas</h2>
                <div class="custom-carousel">
                    <div class="custom-carousel-wrapper">
                        <div class="custom-carousel-item" data-video-src="./videos/Campanhas/lea.M4V">
                            <img src="./img/thumbnails/campanha01.png" alt="Thumbnail 1" draggable="false">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                            <div class="degrade"><span>Ver vídeo</span></div>
                        </div>
                        <div class="custom-carousel-item" data-video-src="./videos/Campanhas/michelle_pontes.m4v">
                            <img src="./img/thumbnails/campanha02.png" alt="Thumbnail 2" draggable="false">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                            <div class="degrade"><span>Ver vídeo</span></div>
                        </div>
                        <div class="custom-carousel-item" data-video-src="./videos/Campanhas/lacy.mov">
                            <img src="./img/thumbnails/campanha03.png" alt="Thumbnail 3" draggable="false">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                            <div class="degrade"><span>Ver vídeo</span></div>
                        </div>
                        <div class="custom-carousel-item" data-video-src="./videos/Campanhas/beach_tennis.M4V">
                            <img src="./img/thumbnails/campanha04.png" alt="Thumbnail 1" draggable="false">
                            <div class="play-icon"><i class="fas fa-play"></i></div>
                            <div class="degrade"><span>Ver vídeo</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Por que contratar a Recz? 
        <section class="vantagens" id="vantagens">
        </section> -->

        <!-- Seção de Time -->
        <section class="equipe" id="equipe">
            <h1 class="fade-in-element">EQUIPE</h1>
            <div class="container">
                <div class="row">
                    <!-- Primeiro membro do time -->
                    <div class="col-md-6 col-sm-12 team-member fade-in-element">
                        <div class="team-img-wrapper">
                            <img src="./img/thomaz.png" alt="Membro 1" class="team-img img-fluid">
                            <div class="fade-bottom"></div>
                        </div>
                        <h2>Thomaz (Pai do Rec)</h2>
                        <p class="team-role">CEO & Fundador</p>
                    </div>

                    <!-- Segundo membro do time -->
                    <div class="col-md-6 col-sm-12 team-member fade-in-element">
                        <div class="team-img-wrapper">
                            <img src="./img/leo.png" alt="Membro 2" class="team-img img-fluid">
                            <div class="fade-bottom"></div>
                        </div>
                        <h2>Léo Tavares</h2>
                        <p class="team-role">Filmaker & Editor</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contato -->
        <section class="contato" id="contato">
            <h1>FALE CONOSCO!</h1>
            <div class="container">
                <form action="contato.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputName" maxlength="100" name="nome" placeholder="Seu nome*" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="inputEmail" maxlength="80" name="email" placeholder="Email*" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" id="inputWhatsapp" name="whatsapp" placeholder="WhatsApp* (+DDD)" maxlength="11" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputEmpresa" name="nomeEmpresa" maxlength="30" placeholder="Instagram da sua empresa*" required>
                    </div>
                    <div class="select-container" id="select-servico">
                        <div class="selected-option">
                            <span>No que está interessado?*</span>
                            <svg width="12" height="8" viewBox="0 0 42 25">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7"
                                    stroke-linecap="round"></path>
                            </svg>
                        </div>
                        <div class="options-container">
                            <div class="option" data-value="1">Vídeo único/pontual</div>
                            <div class="option" data-value="2">Pacote mensal</div>
                            <div class="option" data-value="3">Estou aberto a opções</div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <textarea class="form-control" id="inputMessage" rows="3" maxlength="500" name="mensagem" placeholder="Fale sobre seu projeto" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">ENVIAR<i class="fa-solid fa-circle-right"></i></button>
                </form>
            </div>
        </section>

    </main>

    <footer>
        <div class="copyright">
            &copy; 2024, Recz Films | Desenvolvido por <a href="https://www.instagram.com/simplifyweb/" target="_blank">Simplify Web</a>
        </div>
    </footer>

    <!-- Modal -->
    <div id="custom-modal" class="modal">
        <img id="logo-modal" src="./img/logo.png" alt="Recz Logo">
        <span class="close">&times;</span>
        <div class="modal-content">
            <div class="modal-body">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="./js/background-img.js"></script>
    <script src="./js/fade-in-element.js"></script>
    <script src="./js/numbers.js"></script>
    <script src="./js/titulo-move-scroll.js"></script>
    <script src="./js/toggle-menu.js"></script>
    <script src="./js/scroll-to-section.js"></script>
    <script src="./js/thumb-ativa.js"></script>
    <script src="./js/modal-video.js"></script>
    <script src="./js/carrossel.js"></script>
    <script src="./js/simple-select.js"></script>
    <script src="./js/inputs.js"></script>

</body>

</html>