var compareButtons = document.querySelectorAll('.button-container-index button:nth-child(2)');
compareButtons.forEach(function(button) {
    button.addEventListener('click', addToComparison);
});

function addToComparison() {
    var comparisonCountElement = document.getElementById("cart-count-index");
    var comparisonCount = parseInt(comparisonCountElement.textContent);

    comparisonCount += 1;
    comparisonCountElement.textContent = comparisonCount;

    showNotification("Товар додано до порівняння");
}