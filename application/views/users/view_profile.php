<div class="congrats">
    <h3>Здравствуйте, <?php echo Session::get('user', 'lastname')." ".Session::get('user', 'firstname')."!"; ?></h3><br>
    <h3><strong>Ваши данные:</strong></h3><br>
    <p><strong>Имя:</strong> <?php echo Session::get('user', 'firstname'); ?><br></p>
    <p><strong>Фамилия:</strong> <?php echo Session::get('user', 'lastname'); ?><br></p>
    <p><strong>Логин:</strong> <?php echo Session::get('user', 'login'); ?><br></p>
    <p><strong>E-mail:</strong> <?php echo Session::get('user', 'email'); ?><br></p>
    <p><strong>Пароль:</strong> ••••••••••••• <br></p>
    <p><strong>Пол:</strong> <?php echo Session::get('user', 'gender'); ?><br><br></p>
    <button type="submit" class="btn btn-primary optionsBtnNewMessage">Редактировать</button>
</div>