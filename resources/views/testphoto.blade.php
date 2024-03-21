<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velo Details</title>
</head>
<body>
    <h1>Velo Details</h1>
    <div id="veloDetails">
        <h2>Loading...</h2>
    </div>

    <script>
        // Виконати запит до API для отримання даних про велосипед
        fetch('http://127.0.0.1:8000/api/velo/velos/{{ 1 }}')
            .then(response => response.json())
            .then(data => {
                const veloDetailsDiv = document.getElementById('veloDetails');
                veloDetailsDiv.innerHTML = `
                    <h2>${data.velos.Marka} ${data.velos.Model}</h2>
                    <p>Color: ${data.velos.Color}</p>
                    <p>Price: ${data.velos.Price}</p>
                    <p>Count: ${data.velos.Count}</p>
                    <p>Wheel Size: ${data.velos.Wheel_size}</p>
                    <p>Rama Size: ${data.velos.Rama_size}</p>
                    <!-- Додайте інші характеристики велосипеда, які ви хочете відобразити -->

                    <!-- Відобразіть фото велосипеда -->
                    <img src="${data.photo_url}" alt="Velo Photo">
                `;
            })
            .catch(error => console.error('Error fetching velo details:', error));
    </script>
</body>
</html>
