document.addEventListener('DOMContentLoaded', function () {
    // Отримайте всі карточки велосипедів
    var bikeCards = document.querySelectorAll('.bike-card');

    // Отримайте кнопку "Фільтрувати"
    var filterButton = document.getElementById('filterButton');

    // Отримайте всі елементи вибору параметрів фільтру
    var brandFilter = document.getElementById('brand');
    var bikeTypeFilter = document.getElementById('bikeType');
    var wheelSizeFilter = document.getElementById('wheelSize');
    var brakeTypeFilter = document.getElementById('brakeType');
    var colorFilter = document.getElementById('color');

    filterButton.addEventListener('click', filterBikes);

    function filterBikes() {
        // Отримайте значення вибраних параметрів фільтру
        var selectedBrand = brandFilter.value;
        var selectedBikeType = bikeTypeFilter.value;
        var selectedWheelSize = wheelSizeFilter.value;
        var selectedBrakeType = brakeTypeFilter.value;
        var selectedColor = colorFilter.value;

        bikeCards.forEach(function (card) {
            var brand = card.getAttribute('data-brand');
            var bikeType = card.getAttribute('data-bike-type');
            var wheelSize = card.getAttribute('data-wheel-size');
            var brakeType = card.getAttribute('data-brake-type');
            var color = card.getAttribute('data-color');

            // Перевірте, чи карточка відповідає вибраним параметрам
            var isMatching = (
                (selectedBrand === '' || brand === selectedBrand) &&
                (selectedBikeType === '' || bikeType === selectedBikeType) &&
                (selectedWheelSize === '' || wheelSize === selectedWheelSize) &&
                (selectedBrakeType === '' || brakeType === selectedBrakeType) &&
                (selectedColor === '' || color === selectedColor)
            );

            // Показати або приховати карточку зміною класу CSS
            if (isMatching) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });
    }
});
