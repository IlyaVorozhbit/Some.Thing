<?php if (strpos($_SERVER['HTTP_REFERER'],'vk.com') !== false) { 
	echo '...Hello world from MCTOp.vay.im';
}?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="http://vay.im/static/css/libraries/bootstrap.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="/static/css/oldschool.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="/static/css/main.css" media="screen, projection" />
        <link id="favicon" rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <script type="text/javascript" src="http://vk.com/js/api/share.js?93" charset="windows-1251"></script>
        <script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>
        <title>MCTop: Первый. Честный</title>
    </head>

    <body style="background: #fff">

	<style>
	#page-title h1 {
	 font-size:15pt;
	}

	img {
	 max-height: 100px;
	}
	</style>

        <div class="navbar">

            <div class="logo" onclick='window.location.href="/"'></div>

            <div class="links">
                <div class="brand-name"><a href="/rating">MCTop</a></div>
                <a href="/news">Новости</a>
                <a href="/rating">Рейтинг</a>
                <a href="/search?mode=server">Поиск сервера</a>
                <a href="/pages?mode=about">О сайте</a>
            </div>

        </div>

        <div class="content">
            <?php require_once(ROOT_DIR.'/design/themes/default/modules/'.$initializator->core->getModule().'/'.$initializator->core->getAction().'.php');?>

        </div>

        <div class="footer">
            Версия: <?php echo $version;?><br>

            <!-- Yandex.Metrika informer --><a href="https://metrika.yandex.ru/stat/?id=4081210&amp;from=informer"target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/4081210/3_0_FFFF20FF_FFFF00FF_0_pageviews"style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:4081210,lang:'ru'});return false}catch(e){}" /></a><!-- /Yandex.Metrika informer --> <!-- Yandex.Metrika counter --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter4081210 = new Ya.Metrika({ id:4081210, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/4081210" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->

            <!--LiveInternet counter--><script type="text/javascript">document.write("<a href='//www.liveinternet.ru/click' target=_blank><img src='//counter.yadro.ru/hit?t12.1;r" + escape(top.document.referrer) + ((typeof(screen)=="undefined")?"":";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?screen.colorDepth:screen.pixelDepth)) + ";u" + escape(document.URL) +";h"+escape(document.title.substring(0,80)) +  ";" + Math.random() + "' border=0 width=88 height=31 alt='' title='LiveInternet: показано число просмотров за 24 часа, посетителей за 24 часа и за сегодня'><\/a>")</script><!--/LiveInternet-->

            <div class="copyright">© <a href="/pages?mode=about"> MCTop.Team</a>. <br><a target="" href="/static/images/mine_serv_screen.png">30.01.2011</a> - настоящее время. </div>
        </div>

        <!-- Put this script tag to the place, where the Share button will be -->
        <script type="text/javascript"><!--
            document.write(VK.Share.button(false,{type: "button", text: "Рассказать друзьям"}));
            --></script>
    </body>
</html>
