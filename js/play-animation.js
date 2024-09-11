// Atualizado para afetar apenas o círculo do botão específico
$(document).on('mouseover', '.play-pause-btn', function() {
    let closeCircle = $(this).find('.ring__circle'); // Seleciona o círculo dentro do botão
    closeCircle.css('strokeDashoffset', 0); // Inicia a animação
});

$(document).on('mouseout', '.play-pause-btn', function() {
    let closeCircle = $(this).find('.ring__circle'); // Seleciona o círculo dentro do botão
    closeCircle.css('strokeDashoffset', '188.496'); // Reseta a animação
});
