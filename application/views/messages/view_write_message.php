<!-- Форма для написания сообщения -->
<div class="row">
    <div class="col-md-12">
        <div class="thumbnail writeMessage">
                <form class="form-horizontal" role="form" method="post" action="/">
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Имя:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control inputName" id="inputName" name="username" placeholder="Введите ваше имя и фамилию" value="<?php echo "$data3[1]"; if(isset($_POST['newMessage']) && (isset($_SESSION))) {echo Session::get('user','firstname').' '.Session::get('user','lastname');} ?>">
                            <span id="helpBlock" class="error help-block input-sm <?php if (!$data2[3]) {echo 'invisible';} ?>"><?php echo "$data2[3]"; ?></span>
                            <span id="helpBlock" class="error help-block input-sm <?php if (!$data2[1]) {echo 'invisible';} ?>"><?php echo "$data2[1]"; ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="(анонимное сообщение)" name="boxAnonym" <?php $data3[2]=="(анонимное сообщение)" ? print "checked" : false;?>> Опубликовать анонимно
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputMsg" class="col-sm-2 control-label">Текст:</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="3" id="inputName" name="utext" placeholder="Введите текст сообщения"><?php echo "$data3[3]"; ?></textarea>
                            <span id="helpBlock" class="error help-block input-sm <?php if (!$data2[0]) {echo 'invisible';} ?>"><?php echo "$data2[0]"; ?></span>
                            <span id="helpBlock" class="error help-block input-sm <?php if (!$data2[2]) {echo 'invisible';} ?>"><?php echo "$data2[2]"; ?></span>
                        </div>
                    </div>
                    <div>
                        <input type="hidden" name="writeMessage" value="3">
                    </div>
                    <div class="form-group">
                        <div id="update" class="btnNewMessage">
                            <div class="col-md-2"></div>
                            <button type="submit" class="col-md-4 btn btn-primary optionsBtnNewMessage" name='newMessage'>Отправить сообщение</button>
                            <a class="col-md-4 btn btn-primary optionsBtnNewMessage btnClose" href="/">Закрыть</a>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>
