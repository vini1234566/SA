<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
</style>

// Obtém todos os botões de adicionar e remover
const addButtons = document.querySelectorAll('.add-btn');
const removeButtons = document.querySelectorAll('.remove-btn');

// Para cada botão de adicionar, adiciona um evento de clique
addButtons.forEach(function (button) {
  button.addEventListener('click', function () {
    const parent = button.parentNode;
    const input = parent.querySelector('.quantity-input');
    let quantity = parseInt(input.value);
    quantity++;
    input.value = quantity;
  });
});

// Para cada botão de remover, adiciona um evento de clique
removeButtons.forEach(function (button) {
  button.addEventListener('click', function () {
    const parent = button.parentNode;
    const input = parent.querySelector('.quantity-input');
    let quantity = parseInt(input.value);
    if (quantity > 0) {
      quantity--;
      input.value = quantity;
    }
  });
});

