// Функція для показу повідомлення
function showNotification(message) {
    var notification = document.getElementById("notification");
    notification.textContent = message;
    notification.style.display = "block";
    setTimeout(function () {
        notification.style.display = "none";
    }, 3000);
}

// Функція для обробки натискання кнопки "Купити"
function addToCart() {
    // Отримати поточну кількість товарів в корзині


    // Вивести повідомлення про додавання товару до корзини
    showNotification("Товар додано до корзини");
}

// Додати обробку натискання кнопки "Купити"
var buyButton = document.querySelector('.bike-card button:first-of-type');
buyButton.addEventListener('click', addToCart);

