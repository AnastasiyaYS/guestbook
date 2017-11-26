<div class="row">
    <div class="col-md-12">
        <?php
            include 'view_button_to_write_message.php';
        ?>

        <?php
            if (!empty($_GET['page'])) {
                $page = $_GET['page'];
                $shift_start = $pagSet['countMesOnPage'] * ($page-1);
                $shift_end = $shift_start + $pagSet['countMesOnPage'];
                for ($i=$shift_start; $i<$shift_end; $i++) {
                    if (array_key_exists($i, $data1)) {
                        $timestamp = date('d.m.Y H:i:s', strtotime($data1[$i]['datetimewriting']));
                        include 'view_show_message.php';
                    }
                }
            } else {
                for ($i=0; $i<$pagSet['countMesOnPage']; $i++) {
                    if (array_key_exists($i, $data1)) {
                        $timestamp = date('d.m.Y H:i:s', strtotime($data1[$i]['datetimewriting']));
                        include 'view_show_message.php';
                    }
                }
            }
        ?>

        <!-- Пагинация -->
        <div class="pagination2">
            <?php if ($pagSet['active'] != 1) { ?>
                <a class="pagSide" href="<?=$pagSet['url']?>" title="В начало">&lt;&lt;&lt;</a>
                <a class="pagSide" href="<?php if ($pagSet['active'] == 2) { ?><?=$pagSet['url']?><?php } else { ?><?=$pagSet['url_page'].($pagSet['active'] - 1)?><?php } ?>" title="Предыдущая страница">&lt;</a>
            <?php } ?>
            <?php for ($i = $pagSet['start']; $i <= $pagSet['end']; $i++) { ?>
                <?php if ($i == $pagSet['active']) { ?><span class="pagActive"><?=$i?></span><?php } else { ?><a class="pagNum" href="<?php if ($i == 1) { ?><?=$pagSet['url']?><?php } else { ?><?=$pagSet['url_page'].$i?><?php } ?>"><?=$i?></a><?php } ?>
            <?php } ?>
            <?php if ($pagSet['active'] != $pagSet['count_pages']) { ?>
                <a class="pagSide" href="<?=$pagSet['url_page'].($pagSet['active'] + 1)?>" title="Следующая страница">&gt;</a>
                <a class="pagSide" href="<?=$pagSet['url_page'].$pagSet['count_pages']?>" title="В конец">&gt;&gt;&gt;</a>
            <?php } ?>
        </div>

    </div>
</div>


