<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // получаем данные из формы
    $email = $_POST["email"];
    $name = $_POST["name"];
    $rating = $_POST["rating"];
    $comment = $_POST["comment"];

    // проверяем на валидность email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Неверный формат email."); //останавливаем выполнение при не соответветсвии данных
    }
    // проверяем данные на соответствие диапазону (от 0 до 10)
    if ($rating < 0 || $rating > 10) {
        die("Оценка должна быть от 0 до 10."); //останавливаем выполнение при не соответветсвии данных
    }
    if (strlen($comment)>500) {
//        echo strlen($comment);
        die("Комментарий превышает 500 символов"); //останавливаем выполнение при не соответветсвии данных
    }
    //РАБОТА С ФАЙЛОМ
    $file = fopen("otzyv.txt", "a");
    $data = "Почта: $email, Имя: $name, Оценка: $rating, Комментарий: $comment\n";
    fwrite($file, $data);
    fclose($file);

    echo "Данные успешно сохранены.";
} else {
    echo "Ошибка: Недопустимый метод запроса.";
}
