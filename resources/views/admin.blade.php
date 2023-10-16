<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles/Authorization.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сторінка авторизації</title>
</head>
<body>
    <div class="container">
        <h2>Авторизація</h2>
        <form>
            <div class="form-group">
                <label for="email">Електронна пошта:</label>
                <input type="email" id="email" name="email" placeholder="Введіть електронну пошту" required>
            </div>
            <div class="form-group">
                <label for="password">Пароль:</label>
                <div class="password-input">
                    <input type="password" id="password" name="password" placeholder="Введіть пароль" required>
                    <span class="toggle-password">👁️</span>
                </div>
            </div>
            <div class="button">
                <button type="submit">Увійти</button>
            </div>
        </form>
    </div>
    <script src="scripts/Authorization.js"></script>
</body>
</html>