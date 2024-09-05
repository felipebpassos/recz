// Obtém a referência do elemento de entrada do WhatsApp
var inputWhatsapp = document.getElementById('inputWhatsapp');

// Seleciona todos os campos de entrada com a classe 'form-control'
var inputs = document.querySelectorAll('.form-control');

// Adiciona um ouvinte de evento de entrada ao campo de entrada do WhatsApp
inputWhatsapp.addEventListener('input', function () {
    // Remove caracteres não numéricos do valor de entrada
    this.value = this.value.replace(/\D/g, '');
});

// Itera sobre cada campo de entrada
inputs.forEach(function(input) {
    // Adiciona um ouvinte de evento de entrada para cada campo
    input.addEventListener('input', function() {
        // Verifica se o comprimento do valor atual excede o limite definido pelo atributo 'maxlength'
        if (this.value.length > parseInt(this.getAttribute('maxlength'))) {
            // Se exceder, corta o valor para o comprimento máximo
            this.value = this.value.slice(0, parseInt(this.getAttribute('maxlength')));
        }
    });
});