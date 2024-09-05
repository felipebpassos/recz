$(document).ready(function(){
    $('.selected-option').click(function(e){
        e.stopPropagation();
        var $optionsContainer = $(this).next('.options-container');
        $('.options-container').not($optionsContainer).hide(); // Fecha todos os outros selects abertos
        $optionsContainer.toggle(); // Abre ou fecha o select atual
        $(this).toggleClass('opened');
    });

    $('.option').click(function(){
        var value = $(this).data('value');
        var text = $(this).text();
        $(this).closest('.select-container').find('.selected-option span').text(text);
        $(this).closest('.options-container').hide();
        $(this).closest('.selected-option').removeClass('opened');
    });

    $(document).click(function(){
        $('.options-container').hide();
        $('.selected-option').removeClass('opened');
    });
});