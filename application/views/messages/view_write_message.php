<!-- Форма для написания сообщения -->
<div class="row">
    <div class="col-md-12">
        <div class="thumbnail writeMessage">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Имя:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control inputName" id="inputName" placeholder="Ввведите ваши имя и фамилию">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Опубликовать анонимно
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputMsg" class="col-sm-2 control-label">Текст:</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="3" id="inputName" placeholder="Ввведите текст сообщения"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="btnNewMessage">
                            <div class="col-md-2"></div>
                            <button type="submit" class="col-md-4 btn btn-primary optionsBtnNewMessage">Опубликовать собщение</button>
                            <a class="col-md-4 btn btn-primary optionsBtnNewMessage btnClose" href="/messages/showAll">Закрыть</a>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>
