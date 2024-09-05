document.addEventListener('DOMContentLoaded', function() {
    const duration = 1600; // Duração da animação em milissegundos ajustada para 2 segundos

    function animateNumber(elementId, endValue, duration) {
        const element = document.getElementById(elementId);
        if (element.dataset.animated) return; // Evita múltiplas animações
        element.dataset.animated = true;

        let startValue = 0;
        let startTime = null;

        // Função de easing para um ease-out moderado
        function easeOutQuartic(t) {
            return 1 - Math.pow(1 - t, 4);
        }

        function step(timestamp) {
            if (!startTime) startTime = timestamp;
            const elapsed = timestamp - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const easeProgress = easeOutQuartic(progress);

            const value = startValue + (endValue - startValue) * easeProgress;
            element.textContent = Math.floor(value);

            if (progress < 1) {
                window.requestAnimationFrame(step);
            } else {
                element.textContent = endValue; // Garante que o número final esteja correto
            }
        }

        window.requestAnimationFrame(step);
    }

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.querySelector('.main-number').id;
                const endValue = parseInt(entry.target.querySelector('.main-number').textContent, 10);
                animateNumber(id, endValue, duration);
                observer.unobserve(entry.target); // Desativa observador após a animação
            }
        });
    }, {
        rootMargin: "-50px 0px 0px 0px", // Configuração para começar a animar quando estiver 50px do topo
        threshold: 0.5 // Ativa quando 50% do elemento está visível
    });

    // Adiciona elementos ao observador
    document.querySelectorAll('.top').forEach(element => {
        observer.observe(element);
    });
});
