function updateBackgroundImage() {
    const backgroundImage = document.getElementById('background');
    const width = window.innerWidth;
    const height = window.innerHeight;
    const ratio = width / height;

    if (ratio < 1.1) {
        backgroundImage.src = './img/background-responsive.png';
    } else if (ratio < 1.8) {
        backgroundImage.src = './img/background.png';
    } else if (ratio < 2.1) {
        backgroundImage.src = './img/background-full.png';
    } else {
        backgroundImage.src = './img/background-fullest.png';
    }
}

// Atualiza a imagem ao carregar a página e ao redimensionar a janela
window.addEventListener('load', updateBackgroundImage);
window.addEventListener('resize', updateBackgroundImage);