document.querySelectorAll('.custom-carousel').forEach(carousel => {
    // Selecionar os itens do carrossel
    const items = carousel.querySelectorAll('.custom-carousel-item');
    
    // Definir o primeiro item como ativo inicialmente
    if (items.length > 0) {
        items[0].classList.add('ativo');
    }

    items.forEach(item => {
        item.addEventListener('mouseenter', () => {
            // Remove a classe 'ativo' de todos os itens no carrossel
            items.forEach(i => i.classList.remove('ativo'));
            
            // Adiciona a classe 'ativo' ao item atual
            item.classList.add('ativo');
        });
    });
});
