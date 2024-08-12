<!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>thanks</title>
        <link rel="stylesheet" href="./css/style.css">
        <style>
            header {
                background-color: #BEA574;
                position: unset;
                width: 100%;
                padding: 12px 0px;
                transition: 0.3;
            }

            #thanks_word {
                text-align: center;
                font-size: x-large;
                font-weight: bold;
                4px;
            }

            p {
                height: 1100px;
                line-height: 550px;
            }

            @media screen and (max-width: 525px) {
                p {
                    font-size: 20px;
                }
            }

            @media screen and (max-width: 440px) {
                p {
                    font-size: 16px;
                }
            }
        </style>
    </head>

    <body>
        <nav class="navigation">
            <ul class="navigation__list">
                <li class="navigation__list-item"><a href="index.php#schedule" class="navigation__link">スケジュール</a></li>
                <li class="navigation__list-item"><a href="index.php#service" class="navigation__link">アクセス</a></li>
                <li class="navigation__list-item"><a href="index.php#contact" class="navigation__link">席予約</a></li>
            </ul>
        </nav>

        <header>
            <div class="header_content">
                <a href="index.php">
                    <img src="image/logo.png" alt="ロゴ" width="100px" height="auto">
                </a>
                <ul>
                    <li>
                        <a href="index.php#schedule">スケジュール</a>
                    </li>
                    <li>
                        <a href="index.php#service">アクセス</a>
                    </li>
                    <li>
                        <a href="index.php#contact">席予約</a>
                    </li>
                </ul>
                <div class="hamburger-menu" id="js-hamburger-menu">
                    <span class="hamburger-menu__bar"></span>
                    <span class="hamburger-menu__bar"></span>
                    <span class="hamburger-menu__bar"></span>
                </div>
            </div>
        </header>
        <main>
            <div id="thanks_word">
                <p>
                    お問い合わせいただきありがとうございます。
                </p>
            </div>
        </main>
        <!-- フッター -->
        <?php include 'footer.php'; ?>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="./js/index.js"></script>
    </body>

    </html>