<html>
    <head>
        <link rel="stylesheet" type="text/css" href="http://vay.im/static/css/libraries/bootstrap.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="/static/css/main.css" media="screen, projection" />
        <link id="favicon" rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <title>MCTop: Первый. Честный</title>
    </head>

    <body>

        <div class="navbar">

            <div class="logo"></div>

            <div class="links">
                <div class="brand-name"><a href="/rating">МКТоп</a></div>
                <a href="/news">Новости</a>
                <a href="/rating">Рейтинг</a>
                <a href="/search?mode=server">Поиск сервера</a>
                <a href="/search?mode=company" title="Поиск компании для игры в Minecraft">Поиск компании</a>
            </div>

        </div>

        <div class="content">
            <!--<?php echo $motd;?><br>

            <?php echo $initializator->core->module();?><br>
            <?php echo $initializator->core->mode();?><br>-->

            <?php require_once(root.'/design/modules/'.$initializator->core->module().'/'.$initializator->core->mode().'.php');?>

        </div>

        <div class="footer">
            Версия: <?php echo $version;?>
        </div>

    </body>
</html>