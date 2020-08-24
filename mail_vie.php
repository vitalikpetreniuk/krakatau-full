<?php
$email = "hello@krakatau.pro";
$site = "http://ninesquares.biz/m_content/krakatau";
$adminemail = "admin@krakatau.com";
// Отсылаем письмо
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= "From: ".$site."<".$adminemail.">\r\n";
$subject = "Заявка с сайта ".$site;
$cont = "Здравствуйте!<br><br>С сайта ".$site." поступила новая заявка.<br>Язык: Вьетнамский<br>".
"Данные заявки: <br><br>".
((!empty($_GET['name']))?"<b>Имя:&nbsp;</b>".$_GET['name']."<br><br>":"").
((!empty($_GET['telegram']))?"<b>Telegram:&nbsp;</b>".$_GET['telegram']."<br><br>":"").
((!empty($_GET['whatsapp']))?"<b>Whatsapp:&nbsp;</b>".$_GET['whatsapp']."<br><br>":"").
((!empty($_GET['messenger']))?"<b>Messenger:&nbsp;</b>".$_GET['messenger']."<br><br>":"").
((!empty($_GET['instagram']))?"<b>Instagram:&nbsp;</b>".$_GET['instagram']."<br><br>":"").
((!empty($_GET['skype']))?"<b>Skype:&nbsp;</b>".$_GET['skype']."<br><br>":"").
((!empty($_GET['email']))?"<b>Email:&nbsp;</b>".$_GET['email']."<br><br>":"").
((!empty($_GET['link']))?"<b>Ссылка на канал:&nbsp;</b>".$_GET['link']."<br><br>":"");

// Отправляем письмо
mail($email, $subject, $cont, $headers);

