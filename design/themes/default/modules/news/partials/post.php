<div class="news-block">
    <div class="news-title"><a href="/news/post/<?php echo $post['id'];?>"><?php echo $post['title'];?></a></div>
    <div class="news-info">Дата: <?php echo $post['created_at'];?> | Автор: <?php echo $post['author_id'];?></div>
    <div class="news-content">
        <p>
            <?php echo $post['preview'];?>
        </p>
    </div>
</div>