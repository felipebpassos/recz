// Obtendo o modal, o botão de fechar, e os elementos body e main
const modal = document.getElementById("custom-modal");
const closeModalBtn = document.querySelector(".modal .close");
const body = document.body;
const main = document.querySelector("main"); // Selecionando o main
let videoElement = null; // Variável para armazenar o elemento de vídeo

// Função para abrir o modal e carregar o vídeo com controles personalizados
function openModal(videoSrc) {
    modal.style.display = "flex"; // Mostrar o modal
    body.classList.add('no-scroll'); // Desativar rolagem do body
    main.classList.add('no-scroll'); // Desativar rolagem do main

    // Inserir o vídeo e os controles personalizados no modal
    const modalBody = document.querySelector(".modal-body");
    modalBody.innerHTML = `
    <div id="loading" style="display: flex; justify-content: center; align-items: center; height: 100%;">
      <img src="./img/loading.gif" alt="Loading" />
    </div>
    <video id="modal-video" autoplay style="display:none;">
      <source src="${videoSrc}" type="video/mp4">
      Seu navegador não suporta a tag de vídeo.
    </video>
    <div class="custom-controls" style="display:none;">
      <div class="controls-container">
        <div class="left-controls">
          <button class="play-pause-btn"><i class="fas fa-pause"></i></button>
          <button class="volume-btn"><i class="fas fa-volume-up"></i></button>
        </div>
        <div class="right-controls">
          <button class="fullscreen-btn"><i class="fa-solid fa-up-right-and-down-left-from-center"></i></button>
        </div>
      </div>
      <div class="progress-container">
        <div class="progress-bar">
          <div class="progress"></div>
        </div>
      </div>
    </div>
  `;

    videoElement = document.getElementById("modal-video");
    const controls = document.querySelector(".custom-controls");
    const loading = document.getElementById("loading");

    // Exibir os controles e ocultar o GIF de loading quando o vídeo estiver pronto
    videoElement.addEventListener("loadeddata", function () {
        loading.style.display = "none"; // Ocultar o GIF de loading
        videoElement.style.display = "block"; // Mostrar o vídeo
        controls.style.display = "block"; // Mostrar os controles
    });

    // Controles personalizados
    const playPauseBtn = document.querySelector(".play-pause-btn");
    const volumeBtn = document.querySelector(".volume-btn");
    const fullscreenBtn = document.querySelector(".fullscreen-btn");
    const progressBar = document.querySelector(".progress-bar .progress");

    // Play/Pause
    playPauseBtn.addEventListener("click", function () {
        if (videoElement.paused) {
            videoElement.play();
            playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
        } else {
            videoElement.pause();
            playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
        }
    });

    // Volume/Mute
    volumeBtn.addEventListener("click", function () {
        if (videoElement.muted) {
            videoElement.muted = false;
            volumeBtn.innerHTML = '<i class="fas fa-volume-up"></i>';
        } else {
            videoElement.muted = true;
            volumeBtn.innerHTML = '<i class="fas fa-volume-mute"></i>';
        }
    });

    // Fullscreen
    fullscreenBtn.addEventListener("click", function () {
        if (videoElement.requestFullscreen) {
            videoElement.requestFullscreen();
        } else if (videoElement.mozRequestFullScreen) { // Para Firefox
            videoElement.mozRequestFullScreen();
        } else if (videoElement.webkitRequestFullscreen) { // Para Chrome, Safari e Opera
            videoElement.webkitRequestFullscreen();
        } else if (videoElement.msRequestFullscreen) { // Para IE/Edge
            videoElement.msRequestFullscreen();
        }
    });

    // Atualizar a barra de progresso
    videoElement.addEventListener("timeupdate", function () {
        const progressPercentage = (videoElement.currentTime / videoElement.duration) * 100;
        progressBar.style.width = progressPercentage + "%";
    });
}

// Função para fechar o modal e limpar o conteúdo do vídeo
function closeModal() {
    modal.style.display = "none"; // Esconder o modal
    body.classList.remove('no-scroll'); // Restaurar a rolagem do body
    main.classList.remove('no-scroll'); // Restaurar a rolagem do main

    // Limpar o conteúdo do modal
    const modalBody = document.querySelector(".modal-body");
    modalBody.innerHTML = '';
}

// Adicionando eventos aos itens do carrossel
document.querySelectorAll(".custom-carousel-item").forEach(item => {
    item.addEventListener("click", function () {
        const videoSrc = item.getAttribute('data-video-src'); // Pegar o vídeo associado
        openModal(videoSrc); // Abrir o modal com o vídeo correspondente
    });
});

// Adicionando evento para fechar o modal ao clicar no "X"
closeModalBtn.addEventListener("click", function () {
    closeModal();
});
