<?php
$Mail=$_POST['Mail'];
$Name=$_POST['Name'];
$message=$_POST['message'];

$subject="Тема: Обратная связь";
$mestext="Ожидайте ответа";
$headers="От: Magic Bug";
mail($adress, $subject, $mestext, $headers);
$mainpage = "../index.html";
header("Refresh: 4; url='$mainpage'");

echo "<p aligh='center'><b>Сообщение отправлено!</b><br>
Через 4 сек. Вы будете перенаправлены
<a href='$mainpage'>на главную страницу</a></p>";
?>