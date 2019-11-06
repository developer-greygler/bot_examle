<?php
// Очищаем поле "Комментарий" от html-тегов
$comment = stripslashes(htmlspecialchars($_POST['comment']));

// Переменная с текстом
$text="Поступила заявка:%0A<b>Имя</b>: <i>{$_POST['name']}</i>%0A<b>Телефон</b>: <i>{$_POST['phone']}</i>%0A<b>Комментарий</b>: <i>{$comment}</i>";

 // Код отправки
file_get_contents("https://api.telegram.org/bot[ТОКЕН БОТА]/sendmessage?chat_id=[ID чата]&parse_mode=html&text={$text}");


// Перенаправляем на страницу "СПАСИБО"
header('Location: thanks.html');

?>
