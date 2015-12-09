<div class="news-block">
    <div class="news-info"><a href="/news/post/<?php echo $post['id'];?>"><?php echo $post['title'];?></a> | Дата: <?php echo $post['created_at'];?> | Автор: <?php echo $post['author_id'];?> | Просмотров: <?php echo $post['views']?></div>
    <div class="news-content" style="background-color: #06525E;">
        <p>
            <?php echo $post['preview'];?>
        </p>
    </div>
</div>