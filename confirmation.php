<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ内容確認</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
        header {
            background-color: #BEA574;
            position: unset;
            width: 100%;
            padding: 12px 0px;
            transition: 0.3;
        }

        .confirmation-title {
            text-align: center;
            color: black;
            font-weight: bold;
            font-size: 26px;
            margin-top: 20px;
        }

        .confirmation-content {
            text-align: left;
            margin: 48px 0;
        }

        .confirmation-content p {
            margin: 48px 0;
            font-size: 18px;
            font-weight: bold;
        }

        .confirmation-content .row {
            display: flex;
            justify-content: center;
            margin: 48px 0;
        }

        .confirmation-content .row div {
            margin: 0 10px;
            font-weight: bold;
            width: 150px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 150px;
            margin-top: 48px;
        }

        .button-container button {
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        .back-button {
            margin-right: 200px;
        }

        .submit-button {
            background-color: #BEA574;
        }

        .back-button {
            background-color: lightgray;
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
        <div class="confirmation-title">お問い合わせ内容確認</div>
        <div class="confirmation-content">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = htmlspecialchars($_POST['name']);
                $prefecture = $_POST['prefecture'];
                $email = htmlspecialchars($_POST['email']);
                $tel = htmlspecialchars($_POST['tel']);

                echo "<div class='row'><div>お名前</div><div>" . $name . "</div></div>";
                echo "<div class='row'><div>席希望</div><div>" . $prefecture . "</div></div>";
                echo "<div class='row'><div>メールアドレス</div><div>" . $email . "</div></div>";
                echo "<div class='row'><div>電話番号</div><div>" . $tel . "</div></div>";
            }
            ?>
        </div>
        <div class="button-container">
            <form action="thanks.php" method="post">
                <button class="back-button" type="button" onclick="history.back()">戻る</button>
                <button class="submit-button" type="submit">送信</button>
            </form>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/index.js"></script>

</body>

</html>