<?php
// Настройки подключения к базе данных
$host = 'mysql'; // Имя сервиса MySQL
$dbname = 'exampledb'; // Имя вашей базы данных
$user = 'exampleuser'; // Имя пользователя базы данных
$password = 'examplepass'; // Пароль пользователя базы данных

// Создаем подключение
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);
    echo "Подключение к базе данных успешно!";
} catch (PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
}
