<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $role = htmlspecialchars($_POST['role']);
    $tool = htmlspecialchars($_POST['tool']);
    $os = htmlspecialchars($_POST['os']);
    $level = htmlspecialchars($_POST['level']);
    $field = htmlspecialchars($_POST['field']);

    $filename = "survey/" . date("Y-m-d_H-i-s") . ".txt";
    $content = "Ім'я: $name\nEmail: $email\nРоль: $role\nІнструмент: $tool\nОС: $os\nРівень: $level\nГалузь: $field";

    if (!file_exists('survey')) {
        mkdir('survey', 0777, true);
    }

    file_put_contents($filename, $content);

    echo "<h1>Дякуємо за заповнення анкети!</h1>";
    echo "<p>Дата заповнення: " . date("Y-m-d H:i:s") . "</p>";
} else {
    echo "Форма має бути надіслана методом POST.";
}
?>
