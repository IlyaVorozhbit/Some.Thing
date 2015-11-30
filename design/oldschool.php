<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Keywords" content="Рейтинг серверов,  MINECRAFT TOP SERVERS, mctop, minecraft server, server minecraft, minecraft сервер, Minecraft Server, Сервер Minecraft, top серверов Minecraft, MCtop.su" />
    <title>MCTop: Рейтинг серверов Minecraft</title>
    <link href="/static/css/oldschool.css" rel="stylesheet" type="text/css" />
    <link href="/static/css/tooltip.css" rel="stylesheet" type="text/css" />
    <script src="/static/js/jquery.min.js" type="text/javascript"></script>
    <script src="/static/js/jquery.tools.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://vk.com/js/api/share.js?93" charset="windows-1251"></script>
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>
</head>
<body>

    <div id="bg">
        <div id="main">
        <div id="top-container">
            <div id="logo">
                <a href="/" title="Перейти на главную страницу рейтинга"><img src="/static/images/oldschool/logo.png" alt="Логотип MCTop.su" /></a>
            </div>
            <div id="top-menu-container">
                <div id="top-menu">
                    <ul>
                        <li><a href="/news" title="Свежие новости рейтинга">Новости</a></li>
                        <li><a href="/rating" title="Рейтинг">Рейтинг</a></li>
                        <li><a href="/search" title="Поиск">Поиск</a></li>
                        <li><a href="/cp" title="Управление сервером">КП</a></li>
                        <li><a href="/pages?mode=register" title="Регистрация">Регистрация</a></li>
                        <li><a href="/pages?mode=about" title="О сайте">О сайте</a></li>
                        <br><br>
                    </ul>
                </div>
                <div id="search">
                    <form action="index.php" method="get">
                        <table>
                            <input type="hidden" name="a" value="search" />
                            <tr><td><input type="text" name="q" size="38" value="" /></td></tr>
                            <tr><td><input type="submit" value="Поиск по сайту" /></td></tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <div id="padding"></div>

        <div id="container">

            <?php require_once(root.'/design/modules/'.$initializator->core->module().'/'.$initializator->core->mode().'.php');?>

            <!--<br>
            <div id="page-numbers">
                <div class="page">
                    <a href="index.php?start=1" class="border3" title="Текущая страница - 1"><span>1</span></a>  <a href="index.php?start=11" class="border2" title="Страница 2">2</a>  <a href="index.php?start=21" class="border2" title="Страница 3">3</a>  <a href="index.php?start=31" class="border2" title="Страница 4">4</a>  <a href="index.php?start=41" class="border2" title="Страница 5">5</a>  <a href="index.php?start=51" class="border2" title="Страница 6">6</a>  <a href="index.php?start=61" class="border2" title="Страница 7">7</a>  <a href="index.php?start=71" class="border2" title="Страница 8">8</a>  ... <a href="index.php?start=11" class="border2" title="Следующая страница">&gt;</a>  <a href="index.php?start=161" class="border2" title="Последняя страница">&gt;&gt;</a>
                </div>
            </div>-->

        </div>

        <div id="bFooter">
            <ul class="bNav">
                <li><a href="/pages?mode=about">О сайте</a></li>
                <li><a href="/pages?mode=rules">Правила</a></li>
                <li><a target="_blank" href="http://vkontakte.ru/mctop.onvay">Мы В Контакте</a></li>
            </ul>
        </div>

        <div id="bFooter">
            <div class="copyright">© <a href="/pages?mode=about"> MCTop.Team</a>.
                <br><a target="_blank" href="/static/images/mine_serv_screen.png">30.01.2011</a> - настоящее время.
            </div>
        </div>
        </div>
    </div>

    <script type="text/javascript">
        $("a[title]").tooltip({effect:'slide',opacity:0.9,offset:[30,0],position:'bottom center'});
    </script>

</body>
</html>