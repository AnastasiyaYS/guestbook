<!DOCTYPE html>
<html lang="ru">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Гостевая книга</title>

        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>

    <body>
        <div class="container">

            <!-- Хедер -->
            <div class="page-header">
                <h2>Гостевая книга на PHP</h2>
            </div>

            <!-- условие для подключения нужного меню и вывод -->
            <?php
                include 'menu_guest.php';
            ?>

            <!-- Контент страницы-->
            <div class="jumbotron">
                <?php
                    include 'application/views/'.$content_view;
                ?>
            </div>

            <!-- Футер -->
            <footer>
                Курс "Базовый PHP" от Медиасофт. 2017
            </footer>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="/js/jquery-3.2.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
    </body>

</html>