<div class="container">
    <div class="reg">
        <strong>Редактирование профиля</strong>
    </div>
    <!-- Форма регистрации -->
    <form class="form-horizontal" method="post" action="">
        <br><br>
        <div class="form-group">
            <span id="helpBlock" class="error help-block input-sm authreg <?php if (!$data1[0]) {echo 'invisible';} ?>"><?php echo "$data1[0]" ?></span>
            <label for="inputFirstName" class="col-sm-2 col-sm-offset-3 control-label">Имя:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputFirstName" name="firstname2" placeholder="Имя" value="<?php if(!empty($data2[1])) { echo $data2[1]; } else { echo Session::get('user','firstname'); } ?>">
                <span id="helpBlock" class="errorColor help-block input-sm <?php if (!$data1[1]) {echo 'invisible';} ?>"><?php echo $data1[1]?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="inputLastName" class="col-sm-2 col-sm-offset-3 control-label">Фамилия:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputLastName" name="lastname2" placeholder="Фамилия" value="<?php if(!empty($data2[2])) { echo $data2[2]; } else { echo Session::get('user','lastname'); } ?>" >
                <span id="helpBlock" class="errorColor help-block input-sm <?php if (!$data1[2]) {echo 'invisible';} ?>"><?php echo "$data1[2]" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 col-sm-offset-3 control-label">E-mail:</label>
            <div class="col-sm-4">
                <input type="email" class="form-control" id="inputEmail" name="email2" placeholder="Email" value="<?php if(!empty($data2[3])) { echo $data2[3]; } else { echo Session::get('user','email'); } ?> " >
                <span id="helpBlock" class="errorColor help-block input-sm <?php if (!$data1[5]) {echo 'invisible';} ?>"><?php echo "$data1[5]" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-2 col-sm-offset-3 control-label">Старый пароль:</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" id="inputPassword" name="old_password" placeholder="Старый пароль">
                <span id="helpBlock" class="errorColor help-block input-sm <?php if (!$data1[7]) {echo 'invisible';} ?>"><?php echo "$data1[7]" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword2" class="col-sm-2 col-sm-offset-3 control-label">Новый пароль:</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" id="inputPassword2" name="new_password" placeholder="Новый пароль">
                <span id="helpBlock" class="errorColor help-block input-sm <?php if (!$data1[6]) {echo 'invisible';} ?>"><?php echo "$data1[6]" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword2" class="col-sm-2 col-sm-offset-3 control-label">Повторите пароль:</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" id="inputPassword2" name="confirm_new_password" placeholder="Введите пароль ещё раз">
                <span id="helpBlock" class="errorColor help-block input-sm <?php if (!$data1[8]) {echo 'invisible';} ?>"><?php echo "$data1[8]" ?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="male" class="col-sm-2 col-sm-offset-3 control-label">Пол:</label>
            <div class="col-sm-4">
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios2" id="optionsRadios1" value="мужской" <?php if(!empty($data2[4])) { $data2[4]=="мужской"?print"checked":false; } elseif ($data2[4]=="женский") {false;} else { Session::get('user','gender')=="мужской" ? print "checked" : false; } //if($data2[5]=="мужской"){print "checked";} if(empty($_POST["optionsRadios"])){print "checked";} ?> >
                        Мужской
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios2" id="optionsRadios2" value="женский" <?php if(!empty($data2[4])) { $data2[4]=="женский"?print"checked":false; } elseif ($data2[4]=="мужской") {false;} else { Session::get('user','gender')=="женский" ? print "checked" : false; } //$data2[5]=="женский" ? print "checked" : false;?> >
                        Женский
                    </label>
                </div>
            </div>
        </div>
        <div>
            <input type="hidden" name="edit" value="5">
        </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-10">
                <button type="submit" class="btn btn-primary optionsBtnNewMessage">Сохранить</button>
            </div>
        </div>
    </form>

</div>