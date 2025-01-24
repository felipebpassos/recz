$(document).ready(function () {
    $('.selected-option').click(function (e) {
        e.stopPropagation();
        var $optionsContainer = $(this).next('.options-container');
        $('.options-container').not($optionsContainer).hide(); // Fecha todos os outros selects abertos
        $optionsContainer.toggle(); // Abre ou fecha o select atual
        $(this).toggleClass('opened');
    });

    $('.option').click(function () {
        var value = $(this).data('value'); // Obtém o valor da opção selecionada
        var text = $(this).text(); // Obtém o texto da opção selecionada
        // Atualiza o texto da opção selecionada
        $(this).closest('.select-container').find('.selected-option span').text(text);
        // Fecha o container de opções
        $(this).closest('.options-container').hide();
        // Remove a classe "opened"
        $(this).closest('.selected-option').removeClass('opened');
        // Atualiza o valor no input escondido
        $('#hiddenInputServico').val(value);
    });

    $(document).click(function () {
        $('.options-container').hide();
        $('.selected-option').removeClass('opened');
    });
});
