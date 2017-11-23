<div class="container">
    <div class="reg">
        <strong>Авторизация</strong>
    </div>
    <!-- Форма авторизации -->
    <form class="form-horizontal" method="post" action="">
        <br><br>
        <div class="form-group">
            <span id="helpBlock" class="error help-block input-sm <?php if (!$data1[3]) {echo 'invisible';} ?>"><?php echo "$data1[3]" ?></span>
            <label for="inputLogin" class="col-sm-2 col-sm-offset-3 control-label">Логин:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputLogin" name="login" placeholder="Логин">
                <span id="helpBlock" class="errorColor help-block input-sm <?php if (!$data1[1]) {echo 'invisible';} ?>"><?php echo "$data1[1]" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-2 col-sm-offset-3 control-label">Пароль:</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Пароль">
                <span id="helpBlock" class="errorColor help-block input-sm <?php if (!$data1[2]) {echo 'invisible';} ?>"><?php echo "$data1[2]" ?></span>
            </div>
        </div>
        <div>
            <input type="hidden" name="auth" value="2">
        </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-10">
                <button type="submit" class="btn btn-primary optionsBtnNewMessage">Войти</button>
            </div>
        </div>
    </form>

</div>