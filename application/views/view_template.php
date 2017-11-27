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

            <!-- Меню для пользователя -->
            <div class="navbar navbar-inverse" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="home navbar-brand" href="/messages">Главная</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <?php if(Session::get('loggedIn') == true):?>
                            <li><a href="/users/profile">Профиль</a></li>
                            <li><a href="/users/logOut">Выход</a></li>
                            <?php else: ?>
                            <li><a href="/users">Вход</a></li>
                            <li><a href="/users/reg">Регистрация</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

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
        <!--<script src="/js/updating_page.js"></script>-->
    </body>

</html>