function updateBackgroundImage() {
    const backgroundImage = document.getElementById('background');
    const mainContent = document.getElementById('main-content');
    const footer = document.getElementById('footer');
    const loading = document.getElementById('loading-main');
    const width = window.innerWidth;
    const height = window.innerHeight;
    const ratio = width / height;

    // Define a imagem com base na proporção da tela
    if (ratio < 0.5) {
        backgroundImage.src = './img/background-r3.png';
    } else if (ratio < 0.6) {
        backgroundImage.src = './img/background-r2.png';
    } else if (ratio < 1.1) {
        backgroundImage.src = './img/background-r1.png';
    } else if (ratio < 1.8) {
        backgroundImage.src = './img/background.png';
    } else if (ratio < 2.1) {
        backgroundImage.src = './img/background-full.png';
    } else {
        backgroundImage.src = './img/background-fullest.png';
    }

    // Quando a imagem for carregada, esconda o loading e mostre o conteúdo
    backgroundImage.onload = () => {
        loading.style.display = 'none';  // Esconde o loading
        mainContent.classList.remove('hidden-content');
        mainContent.classList.add('visible-content');
        footer.classList.remove('hidden-content');
        footer.classList.add('visible-content');
    };

    // Mostra o background apenas após o carregamento completo
    backgroundImage.style.display = 'block';
}

// Atualiza a imagem ao carregar a página e ao redimensionar a janela
window.addEventListener('load', updateBackgroundImage);
window.addEventListener('resize', updateBackgroundImage);
