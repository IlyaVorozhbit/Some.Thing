<?php $last_post = News::get_last_news();?>

<h1>Новости проекта</h1>

Последняя опубликованная новость:
<a href="/index.php?module=news&mode=post&id=<?php echo $last_post['id'];?>">
    <?php echo $last_post['preview'];?>
</a>