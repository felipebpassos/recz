<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Felipe Passos | Landing Page desenvolvida por Simplify Web">
    <meta name="keywords" content="produtora, Aracaju, Sergipe, Melhor produtora de Aracaju, Melhor produtora de Sergipe, Melhor produtora do Nordeste, Melhor produtora do Brasil, filmaker, edição de vídeos, gravações, filmagens">
    <meta name="robots" content="index,follow">

    <meta property="og:image" content="./img/logo.png">
    <meta property="og:title" content="Recz Filmes | Autoridade em Produção e Edição de Vídeos">
    <meta property="og:description" content="">

    <title>Recz Filmes | Autoridade em Produção e Edição de Vídeos</title>

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
            <img id="time" src="./img/recz_time.png" alt="Time Recz Image">
            <img id="logo" src="./img/logo.png" alt="Recz Logo">
            <div class="fade-bottom"></div>
            <div class="texto fade-in-element">
                <h2>Sua empresa com <span style="color: var(--red);">conteúdo de cinema</span></h2>
                <p>Transfomamos ideias em videos virais. Especialistas em criação de conteúdo. Mais de 50 milhões de visualizações para clientes.</p>
            </div>
            <a href="#contato"><button class="btn-primario fade-in-element">QUERO FAZER PARTE</button></a>
            <div class="redes-sociais">
                <a href="https://www.instagram.com" target="_blank">
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
                        <img src="https://via.placeholder.com/500" alt="Descrição da imagem" class="img-fluid">
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

        <!-- Cases de sucesso | Portfolio -->
        <section class="cases" id="cases">
            <h1 class="fade-in-element">CASES</h1>

            <!-- Carrossel para Eventos -->
            <div class="carousel-section fade-in-element">
                <h2>Eventos</h2>
                <div class="custom-carousel">
                    <div class="custom-carousel-wrapper">
                        <div class="custom-carousel-item"><img src="./img/evento01_thumb.png" alt="Thumbnail 1" draggable="false"></div>
                        <div class="custom-carousel-item"><img src="./img/evento02_thumb.png" alt="Thumbnail 2" draggable="false"></div>
                        <div class="custom-carousel-item"><img src="./img/evento03_thumb.png" alt="Thumbnail 3" draggable="false"></div>
                        <div class="custom-carousel-item"><img src="./img/evento04_thumb.jpeg" alt="Thumbnail 1" draggable="false"></div>
                    </div>
                </div>
            </div>

            <!-- Carrossel para Gastronomia -->
            <div class="carousel-section fade-in-element">
                <h2>Gastronomia</h2>
                <div class="custom-carousel">
                    <div class="custom-carousel-wrapper">
                        <div class="custom-carousel-item"><img src="./img/gastronomia01_thumb.png" alt="Thumbnail 1" draggable="false"></div>
                        <div class="custom-carousel-item"><img src="./img/gastronomia02_thumb.png" alt="Thumbnail 2" draggable="false"></div>
                        <div class="custom-carousel-item"><img src="./img/gastronomia03_thumb.png" alt="Thumbnail 3" draggable="false"></div>
                        <div class="custom-carousel-item"><img src="./img/gastronomia04_thumb.png" alt="Thumbnail 1" draggable="false"></div>
                    </div>
                </div>
            </div>

            <!-- Carrossel para Imóveis -->
            <div class="carousel-section fade-in-element">
                <h2>Imóveis</h2>
                <div class="custom-carousel">
                    <div class="custom-carousel-wrapper">
                        <div class="custom-carousel-item"><img src="./img/imovel01_thumb.png" alt="Thumbnail 1" draggable="false"></div>
                        <div class="custom-carousel-item"><img src="./img/imovel02_thumb.png" alt="Thumbnail 2" draggable="false"></div>
                        <div class="custom-carousel-item"><img src="./img/imovel03_thumb.png" alt="Thumbnail 3" draggable="false"></div>
                        <div class="custom-carousel-item"><img src="./img/imovel04_thumb.png" alt="Thumbnail 1" draggable="false"></div>
                    </div>
                </div>
            </div>

            <!-- Carrossel para Outros -->
            <div class="carousel-section fade-in-element">
                <h2>Outros</h2>
                <div class="custom-carousel">
                    <div class="custom-carousel-wrapper">
                        <div class="custom-carousel-item"><img src="./img/outros01_thumb.png" alt="Thumbnail 1" draggable="false"></div>
                        <div class="custom-carousel-item"><img src="./img/outros02_thumb.png" alt="Thumbnail 2" draggable="false"></div>
                        <div class="custom-carousel-item"><img src="./img/outros03_thumb.png" alt="Thumbnail 3" draggable="false"></div>
                        <div class="custom-carousel-item"><img src="./img/outros04_thumb.png" alt="Thumbnail 1" draggable="false"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Por que contratar a Recz? -->
        <section class="vantagens" id="vantagens">
        </section>

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

        <!-- Clientes/Brands Section -->
        <section class="clientes" id="clientes">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 brand-item">
                        <img src="./img/brands/julima.png" alt="Cliente 1">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 brand-item">
                        <img src="./img/brands/dominos.jpg" alt="Cliente 2">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 brand-item">
                        <img src="./img/brands/track.png" alt="Cliente 3">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 brand-item">
                        <img src="./img/brands/sarauzin.jpg" alt="Cliente 4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 brand-item">
                        <img src="./img/brands/acai_aju.png" alt="Cliente 5">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 brand-item">
                        <img src="./img/brands/lea.png" alt="Cliente 6">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 brand-item">
                        <img src="./img/brands/otto.png" alt="Cliente 7">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12 brand-item">
                        <img src="./img/brands/michelle_pontes.png" alt="Cliente 8">
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
                            <div class="option" data-value="3">Aberto a sugestões</div>
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
            &copy; 2024, Recz Filmes | Desenvolvido por <a href="https://www.instagram.com/simplifyweb/" target="_blank">Simplify Web</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="./js/fade-in-element.js"></script>
    <script src="./js/numbers.js"></script>
    <script src="./js/titulo-move-scroll.js"></script>
    <script src="./js/toggle-menu.js"></script>
    <script src="./js/scroll-to-section.js"></script>
    <script src="./js/carrossel.js"></script>
    <script src="./js/simple-select.js"></script>
    <script src="./js/inputs.js"></script>

</body>

</html>