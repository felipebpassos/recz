var fundoLoader = document.getElementById("fundo-loader");
var loader = document.getElementById("loader");

function applyZoom() {
    if (window.innerWidth > 2050) {
        document.body.style.zoom = '125%';  // Aplica 125% de zoom se a largura da tela for maior que 2500px
    } else if (window.innerWidth > 1800) {
        document.body.style.zoom = '110%';  // Aplica 110% de zoom se a largura da tela for maior que 1700px
    } else {
        document.body.style.zoom = '100%';  // Remove o zoom se a largura da tela for menor que 1700px
    }
}

function onLoadingComplete() {
    // Ação para executar após o loading ser concluído
    startFadeInElements();
    
    // Aplica o zoom com base na largura da tela
    applyZoom();
}

// Verifica se o tamanho da tela foi alterado e aplica ou desfaz o zoom
window.addEventListener('resize', applyZoom);

setTimeout(function() {
    loader.style.transition = "opacity 1s"; // Adiciona uma transição de 1 segundo para suavizar a mudança de opacidade
    loader.style.opacity = "0";

    // Após a transição, defina o display para "none"
    setTimeout(function() {
        loader.style.display = "none";
        fundoLoader.style.display = "none";

        // Restaurar overflow padrão no body
        document.body.style.overflow = "auto";

        // Executar números e fade-in após o loading
        startFadeInElements(); // Chamar a função do fade-in-element.js
        startNumbersAnimation(); // Chamar a função do numbers.js

        // Agora chama a função de zoom
        onLoadingComplete(); // Garantir que o zoom será aplicado após o loading
    }, 700);
}, 1600); // Espera 1600 milissegundos para começar a ocultar o loader e o fundo
