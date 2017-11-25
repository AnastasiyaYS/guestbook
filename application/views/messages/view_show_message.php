<!-- Вывод сообщения -->
<div class="thumbnail">
    <!-- <img data-src="holder.js/300x200" alt="аватар"> -->
    <div class="caption">
        <div class="user">
            <span class="leftstr"><strong><?php if (!empty($data1[$i]['anonymity'])) {echo $data1[$i]['anonymity'];} else { echo $data1[$i]['sender_name']; } ?></strong></span>
            <span class="rightstr"><?php echo $timestamp ?></span>
        </div>
        <div class="message">
            <?php echo $data1[$i]['message']; ?>
        </div>
        <div class="btncomment">
            <a href="#" class="btn btn-primary invisible2" role="button">Комментировать</a>
        </div>
    </div>
</div>