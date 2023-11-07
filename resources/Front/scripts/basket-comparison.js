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

var addToCompareButtons = document.querySelectorAll('.bike-card button:nth-child(2)');

addToCompareButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        var bikeCard = this.closest('.bike-card');
            
        var bikeId = bikeCard.getAttribute('data-id');

        if (this.textContent === 'До порівняння') {
            this.textContent = 'Видалити з порівняння';
        } else {
            this.textContent = 'До порівняння';
        }
    });
});