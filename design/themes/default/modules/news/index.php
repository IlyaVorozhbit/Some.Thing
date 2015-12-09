<?php $last_post = News::get_last_news();?>
<?php $news = News::get_posts();?>

<div id="page-title">
    <h1>MCTop.Новости | Новости по Вселенной Minecraft</h1>
</div>

    <div class="news-list">

        <?php
            foreach($news as $post){
                require('partials/post.php');
            }
        ?>

    </div>