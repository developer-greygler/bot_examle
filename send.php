<?php
// Очищаем поле "Комментарий" от html-тегов
$comment = stripslashes(htmlspecialchars($_POST['comment']));

// Переменная с текстом
$text=urlencode("Поступила заявка:\n<b>Имя</b>: <i>{$_POST['name']}</i>\n<b>Телефон</b>: <i>{$_POST['phone']}</i>\n<b>Комментарий</b>: <i>{$comment}</i>";

 // Код отправки
file_get_contents("https://api.telegram.org/bot[ТОКЕН БОТА]/sendmessage?chat_id=[ID чата]&parse_mode=html&text={$text}");


// Перенаправляем на страницу "СПАСИБО"
header('Location: thanks.html');

?>
