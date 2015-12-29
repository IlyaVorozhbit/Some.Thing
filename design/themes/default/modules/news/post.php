<?php

$post = News::get_news_post_by_id($_GET['id']);
if (!isset($post['error'])):

?>
	<div class="news-block">
		<div class="news-title"><h1 style="position: relative; top: -10px; margin: 0px;"><?php echo $post['title'];?></h1></div>
		<div class="news-info">Дата: <?php echo date('H:i:s, d/m/Y', strtotime($post['created_at']))?> | Автор:  <?php echo $post['author_id']?> | Просмотров:  <?php echo $post['views']?></div>
		<div class="news-content">
			<p><?php echo $post['full']?></p>
		</div>
		<a href="/news">Ко всем новостям</a>
	</div>
	<div align="center" id="test" ><br>
		<div id="vk_comments"></div>
		<script type="text/javascript">
			VK.Widgets.Comments("vk_comments", {limit: 5, width: "665", attach: false});
		</script>
		<hr>
        <g:plusone></g:plusone>
	</div>
<?php

endif;

if (isset($post['error'])) {
    \MCTop\Core::f()->abort();
}
