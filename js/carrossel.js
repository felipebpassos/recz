// Seleciona todos os carrosséis
const carousels = document.querySelectorAll('.custom-carousel');

carousels.forEach((customCarousel) => {

    let isDown = false;
    let startX;
    let scrollX;

    // Função para iniciar o arrasto
    const dragStart = (e) => {
        isDown = true;
        customCarousel.classList.add('active'); // Adiciona a classe para alterar o cursor
        startX = e.pageX || e.touches[0].pageX; // Posição inicial do cursor/touch
        scrollX = customCarousel.scrollLeft; // Posição de rolagem inicial
    };

    // Função para encerrar o arrasto
    const dragEnd = () => {
        isDown = false;
        customCarousel.classList.remove('active'); // Remove a classe para restaurar o cursor
    };

    // Função para mover o carrossel
    const dragMove = (e) => {
        if (!isDown) return; // Verifica se o arrasto está ativo
        e.preventDefault();
        const x = e.pageX || e.touches[0].pageX; // Posição atual do cursor/touch
        const walk = (x - startX) * 2; // Calcula a distância percorrida com um fator de sensibilidade
        customCarousel.scrollLeft = scrollX - walk; // Atualiza a posição de rolagem horizontal
    };

    // Adiciona os eventos de arrasto para o mouse
    customCarousel.addEventListener('mousedown', dragStart);
    customCarousel.addEventListener('mouseleave', dragEnd);
    customCarousel.addEventListener('mouseup', dragEnd);
    customCarousel.addEventListener('mousemove', dragMove);

    // Adiciona os eventos de arrasto para toque
    customCarousel.addEventListener('touchstart', dragStart);
    customCarousel.addEventListener('touchend', dragEnd);
    customCarousel.addEventListener('touchmove', dragMove);
});
