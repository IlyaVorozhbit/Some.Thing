<?php use \MCTop\Core; ?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8" />
        <meta name="Keywords" content="Рейтинг серверов,  MINECRAFT TOP SERVERS, mctop, minecraft server, server minecraft, minecraft сервер, Minecraft Server, Сервер Minecraft, top серверов Minecraft, MCtop.su" />
        <title><?php echo $initializator::settings()['app_name']?> - <?php echo Core::get('html_title')?></title>
        <link rel="stylesheet" href="http://vay.im/static/css/main_styles/concepts/main.css" />
        <link rel="stylesheet" href="/static/css/me.css" />
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
                <a href="/"><img style="max-height: 100px;" src="/static/images/mctop.jpg"/></a>
            </div>

            <div class="disclaimer">
                <div class="title"> Дисклаймер</div>
                <div class="image">
                    <img style="max-height: 70px;" src="/static/images/DISCLAIMER.png"/>
                </div>
                <div class="text">
                    MCTop находится в стадии возрождения.<br>
                    Нет ни правых, ни виноватых.<br>
                    Мы просто восстанавливаем проект. <br>
                    Потерпите еще чуть-чуть, если терпели 5(!) лет<hr>
                    С любовью, MCTop.Team<br>
                    <!-- VK Widget -->
                    <div id="vk_subscribe"></div>
                    <script type="text/javascript">
                        VK.Widgets.Subscribe("vk_subscribe", {mode: 2, soft: 1}, -73169187);
                    </script>
                </div>
            </div>

            <div class="top-menu">
                <a href="/news/post/15" title="Конкурс на разработку дизайна">MCTop.Дизайн</a> |
                <a href="/servers" title="Список серверов Minecraft от MCTop.me">Сервера Minecraft</a> |
                <!--<a href="/social" title="Вход на Mine-Russia.Social">Войти</a>-->
                <a href="/pages?mode=register" title="Добавление своего сервера на MCTop.me">Регистрация</a> |
                <a href="/pages?mode=about" title="Идея, цель и преимущества проекта MCTop.me">О сайте</a> |
                <a href="/pages?mode=anniversary" title="История проекта MCTop">История</a>
            </div>

        </div>


        <div id="main">

            <div id="container">

                <?php

                    if(file_exists(ROOT_DIR.'/design/themes/default/modules/' . $initializator->core->getModule() . '/' . $initializator->core->getAction() . '.php'))
                        require_once('modules/' . $initializator->core->getModule() . '/' . $initializator->core->getAction() . '.php');
                    else
                        Core::f()->abort();
                ?>

                <!--<h2 style="font-size: 10px; border-bottom: 1px solid #e5e5e5; color: #000000;">Нравится сайт? Нажми "Мне нравится"</h2>
                <div id="vk_like"></div>
                <script type="text/javascript">
                    VK.Widgets.Like("vk_like", {type: "button"});
                </script>-->

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
                        <li><a href="/pages?mode=anniversary">История</a></li>
                        <li><a href="/pages?mode=developers" title="Разработчикам и всем тем, кому интересно развитие MCTop">Разработчикам</a></li>
                        <li><a href="/pages?mode=rules">Правила</a></li>
                        <li><a href="/pages?mode=sitemap">Карта сайта</a></li>
                        <li><a target="_blank" href="https://vk.com/mctop.official">Мы ВКонтакте</a></li>
                    </ul>
                </div>
                <div class="footer__row">
                    <div class="copyright">© <a title="Появление первой версии проекта по адресу mine-serv.do.am" target="_blank" href="/static/images/mine_serv_screen.png">2011</a> - <?= date('Y') ?>. <a title="Первый. Верный" href="/pages?mode=about"> MCTop.Team</a>
                        <div class="engine" <?php if ($initializator->core->getAction() != '.'): ?>style="display:none;"<?php endif ?>>
                            <a style="font-size: 10px; text-decoration: underline;" href="https://github.com/IlyaVorozhbit/Some.Thing">Версия Some.Thing: <?php echo $version; ?></a>
                        </div>
                    </div>
                    <div class="counters" <?php if ($initializator->core->getAction() != '.'): ?>style="display:none;"<?php endif ?>>
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
                    <br><br>
                </div>
                <br>
            </footer>
        </div>


        <script type="text/javascript">
            $("a[title]").tooltip({effect:'slide',opacity:0.9,offset:[30,0],position:'bottom center'});
        </script>
    </body>
</html>
