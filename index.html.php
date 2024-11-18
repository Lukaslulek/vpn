<?php require("config.php")?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="بهترین و سریع‌ترین VPN‌ها را با امنیت بالا و قیمت مناسب از ما بخرید.">
    <title>خرید VPN | امنیت و سرعت بالا</title>
    <link rel="stylesheet" href="assets/styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <h1><i class="fas fa-shield-alt"></i> خرید VPN امن و پرسرعت</h1>
            <p>به اینترنت آزاد و بدون محدودیت دسترسی پیدا کنید!</p>
            <a href="#pricing" class="btn-primary"><i class="fas fa-shopping-cart"></i> مشاهده پلن‌ها</a>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <h2><i class="fas fa-info-circle"></i> چرا VPN ما را انتخاب کنید؟</h2>
            <p>VPN‌های ما سریع، ایمن و کاملاً ناشناس هستند. با استفاده از آن‌ها می‌توانید به محتوای فیلتر شده دسترسی پیدا کنید و امنیت اطلاعات خود را تضمین کنید.</p>
        </div>
    </section>

    <section id="features">
        <div class="container">
            <h2><i class="fas fa-star"></i> ویژگی‌های ما</h2>
            <div class="features-grid">
                <div class="feature">
                    <h3><i class="fas fa-tachometer-alt"></i> سرعت بالا</h3>
                    <p>تجربه وبگردی بدون تاخیر.</p>
                </div>
                <div class="feature">
                    <h3><i class="fas fa-lock"></i> امنیت پیشرفته</h3>
                    <p>رمزگذاری قوی برای حفاظت از اطلاعات شما.</p>
                </div>
                <div class="feature">
                    <h3><i class="fas fa-globe"></i> سرورهای جهانی</h3>
                    <p>اتصال به بیش از 50 کشور.</p>
                </div>
                <div class="feature">
                    <h3><i class="fas fa-headset"></i> پشتیبانی 24/7</h3>
                    <p>همیشه کنار شما هستیم.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing">
        <div class="container">
            <h2><i class="fas fa-tags"></i> پلن‌های قیمتی</h2>
            <div class="pricing-grid">
                <div class="plan">
                    <h3><i class="fas fa-calendar-alt"></i> پلن یک ماهه</h3>
                    <p class="price">50,000 تومان</p>
                    <a href="<?php echo "https://t.me/$username" ?>" class="btn-secondary"><i class="fas fa-shopping-cart"></i> خرید در تلگرام</a>
                </div>
                <div class="plan">
                    <h3><i class="fas fa-calendar-alt"></i> پلن سه ماهه</h3>
                    <p class="price">120,000 تومان</p>
                    <a href="<?php echo "https://t.me/$username" ?>" class="btn-secondary"><i class="fas fa-shopping-cart"></i> خرید در تلگرام</a>
                </div>
                <div class="plan">
                    <h3><i class="fas fa-calendar-alt"></i> پلن سالانه</h3>
                    <p class="price">400,000 تومان</p>
                    <a href="<?php echo "https://t.me/$username" ?>" class="btn-secondary"><i class="fas fa-shopping-cart"></i> خرید در تلگرام</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <h2><i class="fas fa-envelope"></i> تماس با ما</h2>
            <form action="submit_form.php" method="post">
                <input type="text" name="name" placeholder="نام شما" required>
                <input type="email" name="email" placeholder="ایمیل شما" required>
                <textarea name="message" placeholder="پیام شما" required></textarea>
                <button type="submit" class="btn-primary"><i class="fas fa-paper-plane"></i> ارسال پیام</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>© 2024 تمام حقوق محفوظ است | <a href="privacy.php">سیاست حفظ حریم خصوصی</a></p>
        </div>
    </footer>
</body>
</html>
