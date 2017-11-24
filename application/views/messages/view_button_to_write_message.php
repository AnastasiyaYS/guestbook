<!-- Кнопка для написания нового сообщения, открывающая форму -->
<div>
    <form method="post" action="" class="btnNewMessage">
        <button type="submit" class="btn btn-primary optionsBtnNewMessage" name='newMessage'>Написать новое сообщение</button>
    </form>
    <?php
    if(isset($_POST['newMessage'])){
        include 'view_write_message.php';
    }
    ?>
</div>