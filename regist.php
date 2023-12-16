<?php
header('Content-Type: application/json');

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Отримайте дані з форми
    $login = $_POST["login"];
    $password = $_POST["password"];

    // Хешування пароля
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // З'єднання з базою даних
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kyr";

    // Підключення до бази даних
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // Перевірка з'єднання
    if ($conn->connect_error) {
        $response['status'] = 'error';
        $response['message'] = "Connection failed: " . $conn->connect_error;
    } else {
        // Підготовка SQL-запиту для вставки даних в базу
        $sql = "INSERT INTO reg (login, password) VALUES ('$login', '$hashedPassword')";

        // Виконання запиту
        if ($conn->query($sql) === TRUE) {
            $response['status'] = 'success';
            $response['message'] = "Реєстрація успішна!";
            $response['redirect'] = "index.html";
        } else {
            $response['status'] = 'error';
            $response['message'] = "Помилка при реєстрації: " . $conn->error;
        }

        // Закриття з'єднання
        $conn->close();
    }

    // Повертаємо відповідь у форматі JSON
    echo json_encode($response);

    // Зупинити виконання коду
    exit();
}
?>
