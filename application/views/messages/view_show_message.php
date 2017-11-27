<!-- Вывод сообщения -->
<div class="thumbnail">
    <div class="caption">
        <div class="user">
            <span class="leftstr"><strong><?php if (!empty($data1[$i]['anonymity'])) {echo $data1[$i]['anonymity'];} else { echo $data1[$i]['sender_name']; } ?></strong></span>
            <span class="rightstr"><?php echo $timestamp ?></span>
        </div>
        <div class="message">
            <?php echo $data1[$i]['message']; ?>
        </div>
        <div class="btncomment">
            <form method="post" action="" class="<?php if (Session::get('user','user_status')!='admin') {echo 'invisible';} ?>">
                <div>
                    <input type="hidden" name="delete" value="<?=$data1[$i]['id_msg'] ?>">
                </div>
                <button type="submit" class="btn btn-primary btnadmin" name="del">Удалить</button>
            </form>
        </div>
    </div>
</div>