<?php
session_start();

$name = $_POST['name'];
$tel = $_POST['tel'];

$subject = "Заказ обратного звонка";
$message = "Потенциальный клиент " . $name . " просит перезвонить на номер " . $tel;

// Получаем emails
$additional_emails = get_theme_mod('mytheme_additional_emails');

// Отправляем на  emails
if (!empty($additional_emails)) {
    $emails = explode("\n", $additional_emails);
    
    foreach ($emails as $email) {
        $email = trim($email);
        if (!empty($email)) {
            mail($email, $subject, $message);
        }
    }
}

$_SESSION['win'] = 1;
$_SESSION['recaptcha'] = '<p class="text-light">Спасибо, что Вы обратились именно к нам. Мы свяжемся с Вами в ближайшее время.</p>';

header("Location: " . $_SERVER['HTTP_REFERER']);
?>