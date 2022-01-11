<?php
require '/OpenServer/domains/SFAdTech/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заказчик
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/main-page/style.css">
    <link rel="stylesheet" href="/customer/customer.css">
    
    <script src="/customer/script.js"></script>
</head>

<body>
    <header>
        <div class="logo" onClick="window.location.reload();">
            <img src="/img/buki-logo.svg" class="logo-img">
            <h1> BUKI</h1>
            </img>
        </div>
        <a href="/redirect.php">
            <img src="/img/back.svg" alt="back" class="back">
        </a>
        <p style="text-align: center; font-size:20px">Добро пожаловать, <?php $qq = R::findlast('users');
                                                                        echo $qq->login ?></р>
    </header>
    <main style="text-align: center; ">
        <form class="form-container form-popup" id="myForm" action="/customer/customer-main.php" method="POST">
           

            <label for="name"><b>Название</b></label>
            <input type="text" id="input_name" placeholder="Название offer-a" name="name" required>

            <label for="number"><b>Стоимость перехода</b></label>
            <input type="number" id="input_number" placeholder="Стоимость перехода" name="number" required>

            <label for="url"><b>URL сайта</b></label>
            <input type="url" id="input_url" placeholder="URL сайта" name="url" required>

            <label for="name"><b>Тема сайта</b></label>
            <input type="text" id="input_topic" placeholder="Тема сайта" name="topic" required>

            <button type="submit" class="btn" name="do_send">Отправить</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Закрыть</button>
        </form>
        <button class="open-button" onclick="openForm()">Добавить offer</button>

        <p>Списов ваших <i>offer-ов</i>:</p>
        <?php include '/OpenServer/domains/SFAdTech/customer/customer-offers.php' ?>
    </main>

</body>

</html>