window.addEventListener('scroll', function() {
    const h1 = document.querySelector('.sobre h1');
    const h1Rect = h1.getBoundingClientRect();
    
    // Calcula a distância total que o elemento precisa percorrer
    const maxOffset = window.innerWidth * 1.3; // 60% da largura da tela

    // Distância total que o usuário pode rolar dentro do viewport
    const totalScrollHeight = document.documentElement.scrollHeight - window.innerHeight;

    // Define um fator de velocidade (ajuste conforme necessário)
    const speedFactor = 1; // Ajuste se necessário para a velocidade

    // Verifica se o h1 está visível no viewport
    if (h1Rect.top < window.innerHeight && h1Rect.bottom >= 0) {
        // Calcula a distância percorrida pelo usuário até o momento
        const baseOffset = window.scrollY;

        // Normaliza o deslocamento para um valor entre 0 e 1
        const normalizedOffset = Math.min(baseOffset / totalScrollHeight, 1);

        // Deslocamento final ajustado para coincidir com o scroll e a porcentagem desejada
        const finalOffset = normalizedOffset * maxOffset * speedFactor;

        h1.style.transform = `translateX(${finalOffset}px)`;
    }
});
