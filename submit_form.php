<?php require("config.php")?>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    if (empty($name) || empty($email) || empty($message)) {
        echo "لطفاً تمام فیلدها را پر کنید.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "آدرس ایمیل نامعتبر است.";
        exit;
    }

    $telegramMessage = "پیام جدید از فرم وبسایت:\n\n" .
                       "نام: $name\n" .
                       "ایمیل: $email\n" .
                       "پیام:\n$message";
    $url = "https://api.telegram.org/bot$botToken/sendMessage";
    $data = [
        'chat_id' => $chatId,
        'text' => $telegramMessage
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);
    if ($response) {
        echo "پیام شما با موفقیت ارسال شد. متشکریم!";
    } else {
        echo "خطایی در ارسال پیام رخ داد. لطفاً دوباره تلاش کنید.";
    }
} else {
    echo "درخواست نامعتبر است.";
}
?>
