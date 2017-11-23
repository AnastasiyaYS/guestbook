<div class="container">
    <div class="reg">
        <strong>Регистрация</strong>
    </div>
    <!-- Форма регистрации -->
    <form class="form-horizontal" method="post" action="">
        <br><br>
        <div class="form-group">
            <span id="helpBlock" class="error help-block input-sm <?php if (!$data1[0]) {echo 'invisible';} ?>"><?php echo "$data1[0]" ?></span>
            <span id="helpBlock" class="error help-block input-sm <?php if (!$data1[3]) {echo 'invisible';} ?>"><?php echo "$data1[3]" ?></span>
            <label for="inputFirstName" class="col-sm-2 col-sm-offset-3 control-label">Имя:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputFirstName" name="firstname" placeholder="Имя" value=<?php echo "$data2[1]" ?> >
                <span id="helpBlock" class="errorColor help-block input-sm <?php if (!$data1[1]) {echo 'invisible';} ?>"><?php echo "$data1[1]" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="inputLastName" class="col-sm-2 col-sm-offset-3 control-label">Фамилия:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputLastName" name="lastname" placeholder="Фамилия" value=<?php echo "$data2[2]" ?>>
                <span id="helpBlock" class="errorColor help-block input-sm <?php if (!$data1[2]) {echo 'invisible';} ?>"><?php echo "$data1[2]" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="inputLogin" class="col-sm-2 col-sm-offset-3 control-label">Логин:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputLogin" name="login" placeholder="Логин" value=<?php echo "$data2[3]" ?>>
                <span id="helpBlock" class="errorColor help-block input-sm <?php if (!$data1[3]) {echo 'invisible';} ?>"><?php echo "$data1[3]" ?></span>
                <span id="helpBlock" class="errorColor help-block input-sm <?php if (!$data1[4]) {echo 'invisible';} ?>"><?php echo "$data1[4]" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 col-sm-offset-3 control-label">E-mail:</label>
            <div class="col-sm-4">
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" value=<?php echo "$data2[4]" ?>>
                <span id="helpBlock" class="errorColor help-block input-sm <?php if (!$data1[5]) {echo 'invisible';} ?>"><?php echo "$data1[5]" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-2 col-sm-offset-3 control-label">Пароль:</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Пароль">
                <span id="helpBlock" class="help-block input-sm <?php if ($data1[6]) {echo 'invisible';} ?>">Пароль должен быть не менее 8 символов</span>
                <span id="helpBlock" class="errorColor help-block input-sm <?php if (!$data1[6]) {echo 'invisible';} ?>"><?php echo "$data1[6]" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword2" class="col-sm-2 col-sm-offset-3 control-label">Повторите пароль:</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" id="inputPassword2" name="confirm_password" placeholder="Введите пароль ещё раз">
                <span id="helpBlock" class="errorColor help-block input-sm <?php if (!$data1[7]) {echo 'invisible';} ?>"><?php echo "$data1[7]" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="male" class="col-sm-2 col-sm-offset-3 control-label">Пол:</label>
            <div class="col-sm-4">
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="man" <?php if($data2[5]=="man"){print "checked";} if(empty($_POST["optionsRadios"])){print "checked";} ?> >
                        Мужской
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="woman" <?php $data2[5]=="woman" ? print "checked" : false;?> >
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
        <div>
            <input type="hidden" name="reg" value="1">
        </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-10">
                <button type="submit" class="btn btn-primary optionsBtnNewMessage">Зарегистрироваться</button>
            </div>
        </div>
    </form>

</div>