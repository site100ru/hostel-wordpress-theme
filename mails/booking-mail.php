<?php
session_start();

if ($_POST) {
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $patronymic = $_POST['patronymic'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $guests = $_POST['guests'];
    $apartment = $_POST['apartment'];

    $message = "Новая заявка на бронирование:\n\n";
    $message .= "ФИО: " . $surname . " " . $name . " " . $patronymic . "\n";
    $message .= "Телефон: " . $tel . "\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Дата приезда: " . $checkin . "\n";
    $message .= "Дата отъезда: " . $checkout . "\n";
    $message .= "Количество гостей: " . $guests . "\n";
    $message .= "Номер: " . $apartment;

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
    $_SESSION['recaptcha'] = '<p class="text-light">Спасибо за заявку! Мы свяжемся с Вами в ближайшее время.</p>';
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
