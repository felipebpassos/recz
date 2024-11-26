document.querySelectorAll('.custom-carousel').forEach(carousel => {
    // Selecionar os itens do carrossel
    const items = carousel.querySelectorAll('.custom-carousel-item');
    
    // Definir o primeiro item como ativo inicialmente
    if (items.length > 0) {
        items[0].classList.add('ativo');
    }

    items.forEach(item => {
        const activateItem = () => {
            // Remove a classe 'ativo' de todos os itens no carrossel
            items.forEach(i => i.classList.remove('ativo'));
            
            // Adiciona a classe 'ativo' ao item atual
            item.classList.add('ativo');
        };

        // Evento para desktop
        item.addEventListener('mouseenter', activateItem);

        // Eventos para touch em dispositivos móveis
        item.addEventListener('touchstart', (e) => {
            // Evita que o evento de toque provoque scroll na página
            activateItem();
        });

        // Para garantir que funcione em alguns navegadores que esperam o 'touchend' para confirmar a interação
        item.addEventListener('touchend', (e) => {
            activateItem();
        });
    });
});
