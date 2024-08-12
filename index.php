<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/style.css">

    <style>
              html{
  min-height: 100%;
  position: relative;
}

footer {
    position: relative;
    bottom: 0;
    width: 100%;
}

        .footer {
            width: 100%;
            height: 50px;
            background-color: #BEA574;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative; 
            bottom: 0;
            z-index: 1000;
            position: absolute;
            bottom: -550px;
        }

        .footer img {
            width: 100px;
            height: auto;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        main {
            flex: 1;
        }
        img {
            max-width: 100%;
            height: auto;
        }

        .swiper-button-prev {
            background-size: contain;
            background-repeat: no-repeat;
            width: 60px;
            height: 60px;
            color: #BEA574;
            border-radius: 50%;
            background-image: url('./image/slide-btn-prev.svg');
        }

        .swiper-button-next {
            background-size: contain;
            background-repeat: no-repeat;
            width: 60px;
            height: 60px;
            color: #BEA574;
            border-radius: 50%;
            background-image: url('./image/slide-btn-next.svg');
        }

        .swiper-button-prev:after {
            content: "";
        }

        .swiper-button-next:after {
            content: ""; 
        }

        .swiper-pagination-bullet {
            position: relative;
            margin-bottom: 20px;
            bottom: var(--swiper-pagination-bottom, 10px);
        }

        .swiper-pagination-bullet::before,
        .swiper-pagination-bullet::after {
            content: '';
            display: block;
            position: absolute;
            width: 8px;
            height: 8px;
            background-color: gray;
            border-radius: 50%;
            background-color: #BEA574;
        }

        header {
            position: relative;
            z-index: 1000;
        }

        .swiper-container {
            margin-top: auto;
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        .header_content {
            width: 100%;
            height: 30px;
            background-color: #BEA574;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .header_content img {
            width: 100px;
            height: auto;
        }

        .service {
            cursor: pointer;
        }

        @media (max-width: 690px) {
            .header_content img {
                width: 80px;
                height: auto;
            }
        }
    </style>
</head>

<body>
    <nav class="navigation">
        <ul class="navigation__list">
            <li class="navigation__list-item"><a href="#schedule" class="navigation__link">スケジュール</a></li>
            <li class="navigation__list-item"><a href="#service" class="navigation__link">アクセス</a></li>
            <li class="navigation__list-item"><a href="#contact" class="navigation__link">席予約</a></li>
        </ul>
    </nav>
    <header>
        <div class="header_content">
            <a href="">
                <img src="image/logo.png" alt="ロゴ" width="100px">
            </a>
            <ul>
                <li>
                    <a href="#schedule">スケジュール</a>
                </li>
                <li>
                    <a href="#service">アクセス</a>
                </li>
                <li>
                    <a href="#contact">席予約</a>
                </li>
            </ul>
            <div class="hamburger-menu" id="js-hamburger-menu">
                <span class="hamburger-menu__bar"></span>
                <span class="hamburger-menu__bar"></span>
                <span class="hamburger-menu__bar"></span>
            </div>
        </div>

    </header>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="image/slide_1.jpg" alt="スライド1"></div>
            <div class="swiper-slide"><img src="image/slide_2.jpg" alt="スライド2"></div>
            <div class="swiper-slide"><img src="image/slide_3.jpg" alt="スライド3"></div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </div>
    <main>
        <div class="key_visual">
        </div>
        <div class="about_content section">
            <p class="about_text">今年も始まる<span>夏休み</span></p>
        </div>
        <div class="service_content section" id="schedule">
            <p class="title">スケジュール</p>
            <div class="service_flex">
                <div class="service active" id="web">
                    <p>9月1日</p>
                </div>
                <div class="service" id="seo">
                    <p>9月2日</p>
                </div>
                <div class="service" id="app">
                    <p>9月3日</p>
                </div>
            </div>

            <div class="description">
                <p class="description_text active" id="web_text">
                    9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容
                </p>
                <p class="description_text" id="seo_text">
                    9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容</p>
                <p class="description_text" id="app_text">
                    9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容</p>
            </div>
            <div class="service_content section" id="service">
                <p class="title">アクセス</p>
                <p>〒771-1154 徳島県徳島市応神町東貞方南川淵</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3301.1234567890123!2d134.559123456789!3d34.1234567890123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1234567890abcdef%3A0x1234567890abcdef!2z44CSNzcxLTExNTQg5b6z5bO255yM5b6z5bO25biC5b6z5bO25biC5b6z5bO25biC5b6z5bO25biC!5e0!3m2!1sja!2sjp!4v1234567890123&q=%E7%89%B9%E5%B3%B6%E7%9C%8C%E5%BE%B3%E5%B3%B6%E5%B8%82%E5%BF%9C%E7%A5%9E%E7%94%BA%E6%9D%B1%E8%B2%9E%E6%96%B9%E5%8D%97%E5%B7%9D%E6%B7%B5"
                    width="600" height="450" style="border:0; margin:0 auto;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="contact about_content section" id="contact">
                <p class="title">席予約</p>
                <form action="./confirmation.php" method="post" id="myForm">
                    <div class="form_content">
                        <label for="name">お名前<span class="required">*必須</span></label>
                        <input type="text" name="name" placeholder="例）田中太郎" required>
                    </div>
                    <div class="form_content">
                        <label for="prefecture">席の場所<span class="required">*必須</span></label>
                        <select name="prefecture" required>
                            <option value="">---</option>
                            <option value="SS席">SS席</option>
                            <option value="S席">S席</option>
                            <option value="A席">A席</option>
                            <option value="B席">B席</option>
                            <option value="C席">C席</option>
                        </select>
                        <p class="prefecture_varidation" style="display: none;">お席は必須入力です。</p>
                    </div>
                    <div class="form_content">
                        <label for="email">メールアドレス<span class="required">*必須</span></label>
                        <input type="email" name="email" placeholder="例）abcd1234@example.com" required>
                    </div>
                    <div class="form_content">
                        <label for="tel">電話番号<span>*任意</span></label>
                        <input type="tel" name="tel" placeholder="例）12345678901">
                        <p class="tel_varidation" style="display: none;">番号が誤っています。</p>
                    </div>
                    <input type="submit" value="送信" id="submitButton" disabled>
                </form>
            </div>
    </main>
    <footer class="footer">
        <a href="index.php">
            <img src="image/logo.png" alt="ロゴ">
        </a>
    </footer>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            centeredSlides:true,
            // slidesPerView: 1
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/index.js"></script>
</body>

</html>