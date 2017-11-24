<div class="row">
    <div class="col-md-12">
        <!-- Установка количества сообщений на странице -->
        <div class="numberPosts">
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <label for="inputNumberPosts" class="col-sm-4 col-xs-4 control-label">Количество сообщений на странице:</label>
                    <div class="col-sm-1 col-xs-3">
                        <input type="text" class="form-control msgOnPage" id="inputNumberPosts" placeholder="10">
                    </div>
                    <div class="col-sm-1 col-xs-3">
                        <button type="submit" class="btn btn-default">Применить</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Кнопка для написания нового сообщения, открывающая форму -->
        <?php
            include 'view_button_to_write_message.php';
        ?>
        <!-- Подключаем файл, выводящий одно сообщение -->
        <?php
            for ($i=0, $num_lines=count($data1); $i<$num_lines; $i++) {
                $id_auth=$data1[$i]['id_author'];
                $timestamp = date('d.m.Y H:i:s', strtotime($data1[$i]['datetimewriting']));
                include 'view_show_message.php';
            }
        ?>
        <!-- Пагинация -->
        <div align="center">
            <ul class="pagination">
                <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>
</div>


