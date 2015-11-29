<html>
    <head>
        <link rel="stylesheet" type="text/css" href="http://vay.im/static/css/libraries/bootstrap.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="/static/css/main.css" media="screen, projection" />
    </head>

    <body>

        <div class="navbar">

            <div class="logo">
                MCTop
            </div>

            <a href="/index.php?module=news&mode=index">Новости</a>
            <a href="/index.php?module=rating">Рейтинг</a>
            <a href="/index.php?module=search&mode=server">Поиск сервера</a>
            <a href="/index.php?module=search&mode=company" title="Поиск компании для игры в Minecraft">Поиск компании</a>
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