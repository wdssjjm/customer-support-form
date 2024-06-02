<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $issue = htmlspecialchars($_POST['issue']);
    $description = htmlspecialchars($_POST['description']);

    $to = "btna-support@wizardgames.cn";
    $subject = "Yeni Müşteri Hizmetleri Talebi";
    $message = "Kullanıcı Adı: $username\nE-posta Adresi: $email\nSorun Türü: $issue\nAçıklama: $description";

    $headers = "From: no-reply@wizardgames.cn";

    if (mail($to, $subject, $message, $headers)) {
        echo "Talebiniz başarıyla gönderildi.";
    } else {
        echo "Talebinizi gönderirken bir hata oluştu.";
    }
}
?>
