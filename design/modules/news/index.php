<?php $last_post = News::get_last_news();?>
<?php $news = News::get_posts();?>

<h1>Новости проекта</h1>

    <div class="news-list">

        Последняя опубликованная новость:
        <a href="/index.php?module=news&mode=post&id=<?php echo $last_post['id'];?>">
            <?php echo $last_post['title'];?>
        </a>

        <hr>

        <h2>Остальные новости #MCTop</h2>

        <?php
            foreach($news as $post){
                require('partials/post.php');
            }
        ?>

    </div>