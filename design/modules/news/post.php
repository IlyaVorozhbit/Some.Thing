<?php $post = News::get_news_post_by_id($_GET['id'])?>
<?php //var_dump($post)?>

<h1><?php echo $post['title'];?></h1><hr>
<?php echo $post['full']?><br>
ID Авторa: <?php echo $post['author_id']?><br>
Создано: в <?php echo date('H:i:s, d/y', strtotime($post['created_at']))?><br>
<hr>
MCTop, будь с нами.