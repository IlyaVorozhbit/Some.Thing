<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8" />
        <meta name="Keywords" content="Рейтинг серверов,  MINECRAFT TOP SERVERS, mctop, minecraft server, server minecraft, minecraft сервер, Minecraft Server, Сервер Minecraft, top серверов Minecraft, MCtop.su" />
        <title>MCTop: Рейтинг серверов Minecraft</title>
        <link rel="stylesheet" href="/static/css/oldschool.css" />
        <link rel="stylesheet" href="/static/css/tooltip.css" />
        <script src="/static/js/jquery.min.js" type="text/javascript"></script>
        <script src="/static/js/jquery.tools.min.js" type="text/javascript"></script>
        <script src="http://vk.com/js/api/share.js?93" charset="windows-1251"></script>
        <script src="//vk.com/js/api/openapi.js?121"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script type="text/javascript">VK.init({apiId: 5172547, onlyWidgets: true});</script>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="header">
            <div id="logo">
                <a href="/"><img src="/static/images/oldschool/logo.png"/></a>
            </div>

            <div class="top-menu">
                <a href="/news/post/15" title="Конкурс на разработку дизайна">Конкурс от MCTop</a>
                <a href="/news" title="Свежие новости рейтинга">Новости</a>
                <a href="/rating" title="Рейтинг">Рейтинг</a>
                <a href="/search" title="Поиск наиболее подходящего Вам и Вашим друзьям сервера">Поиск сервера</a>
                <a href="/cp" title="Вход в панель управления сервером">КП</a>
                <a href="/pages?mode=register" title="Добавление своего сервера на MCTop.ME">Регистрация</a>
                <a href="/pages?mode=anniversary" title="История проекта MCTop">О сайте</a>
            </div>

        </div>


        <div id="main">

            <div id="container">

                <?php

                    if(file_exists(ROOT_DIR.'/design/themes/default/modules/' . $initializator->core->module() . '/' . $initializator->core->mode() . '.php'))
                        require_once('modules/' . $initializator->core->module() . '/' . $initializator->core->mode() . '.php');
                    else
                        Core::f()->abort();
                ?>

                <h2 style="font-size: 10px; border-bottom: 1px solid #e5e5e5; color: #000000;">Нравится сайт? Нажми "Мне нравится"</h2>
                <div id="vk_like"></div>
                <script type="text/javascript">
                    VK.Widgets.Like("vk_like", {type: "button"});
                </script>

                <!--<br>
                <div id="page-numbers">
                    <div class="page">
                        <a href="index.php?start=1" class="border3" title="Текущая страница - 1"><span>1</span></a>  <a href="index.php?start=11" class="border2" title="Страница 2">2</a>  <a href="index.php?start=21" class="border2" title="Страница 3">3</a>  <a href="index.php?start=31" class="border2" title="Страница 4">4</a>  <a href="index.php?start=41" class="border2" title="Страница 5">5</a>  <a href="index.php?start=51" class="border2" title="Страница 6">6</a>  <a href="index.php?start=61" class="border2" title="Страница 7">7</a>  <a href="index.php?start=71" class="border2" title="Страница 8">8</a>  ... <a href="index.php?start=11" class="border2" title="Следующая страница">&gt;</a>  <a href="index.php?start=161" class="border2" title="Последняя страница">&gt;&gt;</a>
                    </div>
                </div>-->

            </div>

            <footer>
                <div class="footer__row">
                    <ul class="bNav">
                        <li><a href="/pages?mode=about">Об MCTop</a></li>
                        <li><a href="/pages?mode=rules">Правила</a></li>
                        <li><a href="/pages?mode=sitemap">Карта сайта</a></li>
                        <li><a target="_blank" href="https://vk.com/mctop.official">Мы ВКонтакте</a></li>
                    </ul>
                </div>
                <div class="footer__row">
                    <div class="copyright">© <a target="_blank" href="/static/images/mine_serv_screen.png">2011</a> - <?= date('Y') ?>. <a href="/pages?mode=about"> MCTop.Team</a>
                        <div class="engine" <?php if ($initializator->core->mode() != '.'): ?>style="display:none;"<?php endif ?>>
                            <a style="font-size: 10px; text-decoration: underline;" href="https://github.com/IlyaVorozhbit/Some.Thing">Версия Some.Thing: <?php echo $version; ?></a>
                        </div>
                    </div>
                    <div class="counters" <?php if ($initializator->core->mode() != '.'): ?>style="display:none;"<?php endif ?>>
                        <!-- Yandex.Metrika informer --><a href="https://metrika.yandex.ru/stat/?id=4081210&amp;from=informer"target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/4081210/3_0_FFFF20FF_FFFF00FF_0_pageviews"style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:4081210,lang:'ru'});return false}catch(e){}" /></a><!-- /Yandex.Metrika informer --> <!-- Yandex.Metrika counter --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter4081210 = new Ya.Metrika({ id:4081210, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/4081210" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
                        <!--LiveInternet counter--><script type="text/javascript">document.write("<a href='//www.liveinternet.ru/click' target=_blank><img src='//counter.yadro.ru/hit?t12.1;r" + escape(top.document.referrer) + ((typeof(screen)=="undefined")?"":";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?screen.colorDepth:screen.pixelDepth)) + ";u" + escape(document.URL) +";h"+escape(document.title.substring(0,80)) +  ";" + Math.random() + "' border=0 width=88 height=31 alt='' title='LiveInternet: показано число просмотров за 24 часа, посетителей за 24 часа и за сегодня'><\/a>")</script><!--/LiveInternet-->
                        <script>
                            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                            ga('create', 'UA-71074897-1', 'auto');
                            ga('send', 'pageview');

                        </script>
                    </div>
                </div>
                <br>
            </footer>
        </div>


        <script type="text/javascript">
            $("a[title]").tooltip({effect:'slide',opacity:0.9,offset:[30,0],position:'bottom center'});
        </script>
    </body>
</html>
