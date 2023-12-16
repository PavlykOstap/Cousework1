<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="icon.js"></script>
</head>
<body>

    <header>
        <h1>Ласкаво просимо в магазин взуття Anomalys!</h1>
        <nav>
            <a href="#" class="menu-item">Бренди</a>
            <a href="#" class="menu-item">Новини</a>
            <a href="#" class="menu-item sale-btn">SALE</a>
        </nav>
    </header>

    <div class="container">
        <div class="toggle-container">
            <div class="toggle" onclick="toggleForm('login')">
                <img src="/img/login.jpg" alt="" id="loginIcon" width="50px">
            </div>
        </div>
        <div class="form-container" id="registrationForm" style="display: none;">
            <div id="loginForm">
                <h2>Форма входу</h2>
                <form action="regist.php" method="post">
                    <label for="login">Логін:                           </label>
                    <input type="text" id="login" name="login" required><br>

                    <label for="password">Пароль:</label>
                    <input type="password" id="password" name="password" required><br>

                    <input type="submit" value="Увійти">
                </form>
                <p>Не маєш аккаунта? <a href="#" onclick="toggleForm('register')">Зареєструватися</a></p>
            </div>
            <div id="registerForm" style="display: none;">
                <h2>Форма реєстрації</h2>
                <form action="regist.php" method="post">
                    <label for="registerLogin">Логін:</label>
                    <input type="text" id="registerLogin" name="login" required><br>

                    <label for="registerPassword">Пароль:</label>
                    <input type="password" id="registerPassword" name="password" required><br>

                    <input type="submit" value="Зареєструватися">
                </form>
                <p>Маєш аккаунт? <a href="#" onclick="toggleForm('login')">Увійти</a></p>
            </div>
            <div id="successMessage" style="display: none;">
              <p>Реєстрація успішна!</p>
          </div>
        </div>
  
    <div class="container">
        <!-- Заміна Взуття на Каталог товарів -->
        <h2 class="catalog-header">Каталог товарів</h2>

        <!-- Змінений рядок для товарів -->
        <section id="shoes" class="active-section row">
            <?php
            // Include the PHP code
            include 'image.php';

            if ($result) {
                while ($product = mysqli_fetch_assoc($result)) {
                    echo '<div class="product">';
                    echo '<img src="/img/' . $product['photo_path'] . '" alt="' . $product['name'] . '">';
                    echo '<p>' . $product['name'] . '</p>';
                    echo '<p>Ціна: $' . $product['price'] . '</p>';
                    echo '</div>';
                }
            } else {
                echo '<p>No products available</p>';
            }
            ?>
        </section>
    </div>

    <footer>
        <p>&copy; 2023 Anomalys Магазин взуття</p>
    </footer>

    <script src="tensec.js"></script>
</body>
</html>
