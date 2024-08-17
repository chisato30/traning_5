<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <style>
html{
  min-height: 100%;
  position: relative;
}

footer {
    position: relative;
    bottom: 0;
    width: 100%;
    height: auto;
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
    </style>
</head>

<body>
    <footer class="footer">
        <a href="index.php">
            <img src="image/logo.png" alt="ロゴ">
        </a>
    </footer>
</body>

</html>