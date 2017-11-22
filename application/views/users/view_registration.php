<div class="container">
    <div class="reg">
        <strong>Регистрация</strong>
    </div>
    <!-- Форма регистрации -->
    <form class="form-horizontal" method="post" action="">
        <br><br>
        <div class="form-group">
            <label for="inputFirstName" class="col-sm-2 col-sm-offset-3 control-label">Имя:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputFirstName" name="firstname" placeholder="Имя">
            </div>
        </div>
        <div class="form-group">
            <label for="inputLastName" class="col-sm-2 col-sm-offset-3 control-label">Фамилия:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputLastName" name="lastname" placeholder="Фамилия">
            </div>
        </div>
        <div class="form-group">
            <label for="inputLogin" class="col-sm-2 col-sm-offset-3 control-label">Логин:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputLogin" name="login" placeholder="Логин">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 col-sm-offset-3 control-label">E-mail:</label>
            <div class="col-sm-4">
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-2 col-sm-offset-3 control-label">Пароль:</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Пароль">
                <span id="helpBlock" class="help-block input-sm">Пароль должен быть не менее 8 символов</span>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword2" class="col-sm-2 col-sm-offset-3 control-label">Повторите пароль:</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" id="inputPassword2" name="confirm_password" placeholder="Введите пароль ещё раз">
            </div>
        </div>
        <div class="form-group">
            <label for="male" class="col-sm-2 col-sm-offset-3 control-label">Пол:</label>
            <div class="col-sm-4">
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="man" checked>
                        Мужской  <!-- В POST ключ - name, значение value; по умолчанию: __POST('optionsRadios')='man'; -->
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="woman">
                        Женский
                    </label>
                </div>
            </div>
        </div>

        <!--
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Запомнить меня
                    </label>
                </div>
            </div>
        </div>
        -->

        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-10">
                <button type="submit" class="btn btn-primary optionsBtnNewMessage">Зарегистрироваться</button>
            </div>
        </div>
    </form>

</div>