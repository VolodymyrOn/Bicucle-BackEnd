function addToCart() {
    // Отримати поточну кількість товарів в корзині
    var cartCountElement = document.getElementById("cart-count");
    var cartCount = parseInt(cartCountElement.textContent);

    // Збільшити кількість товарів в корзині на 1
    cartCount += 1;

    // Оновити відображення кількості товарів у корзині
    cartCountElement.textContent = cartCount;

    // Вивести повідомлення про додавання товару до корзини
    showNotification("Товар додано до корзини");
}

// Додати обробку натискання кнопки "Купити"
var buyButtons = document.querySelectorAll('.bike-card-comparison button:first-of-type');
buyButtons.forEach(function(button) {
    button.addEventListener('click', addToCart);
  });