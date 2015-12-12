<?php

$page = (!isset($_GET['page']) || strlen($_GET['page']) == 0 || (int) $_GET['page'] <= 0) ? '1' : (int) $_GET['page'];
$servers = Servers::getServersFromMCSV($page);

if (count($servers) == 0) {
    exit('Добро пожаловать в MCTop');
}

?>

<h1>Список серверов по игре Minecraft</h1>

<div id="page-numbers">
    <div class="page">
        <a href="/servers?page=1" class="border2">1</a>
        <a href="/servers?page=2" class="border2">2</a>
        <a href="/servers?page=3" class="border2">3</a>
        <a href="/servers?page=4" class="border2">4</a>
        <a href="/servers?page=5" class="border2">5</a>
        <a href="/servers?page=6" class="border2">6</a>
        <a href="/servers?page=7" class="border2">7</a>
        <a href="/servers?page=8" class="border2">8</a>
        <a href="/servers?page=9" class="border2">9</a>
        <?php if($page>1)?>
        <a href="/servers?page=<?php echo $page+1;?>" class="border2" title="Следующая страница">-></a>
        <a href="/servers?page=200" class="border2" title="Последняя страница">X</a>
    </div>
</div>
<hr>

<table class="servers">

    <tr style="text-align: center;">
        <th>Название сервера</th>
        <th>Сайт</th>
        <th>Адрес для подключения</th>
        <th>Версия</th>
        <th>Whitelist</th>
        <th>Клиент</th>
        <th>Переходов</th>
        <th>ID проекта в MCSV</th>
    </tr>

    <tr>
        <td><hr></td>
        <td><hr></td>
        <td><hr></td>
        <td><hr></td>
        <td><hr></td>
        <td><hr></td>
        <td><hr></td>
        <td><hr></td>
    </tr>

    <?php for($i = 0; $i<=9; $i++){
        $server = $servers[$i];
        require('server_partial.php');
    }?>

</table>

<div id="page-numbers">
    <div class="page">
        <a href="/servers?page=1" class="border2">1</a>
        <a href="/servers?page=2" class="border2">2</a>
        <a href="/servers?page=3" class="border2">3</a>
        <a href="/servers?page=4" class="border2">4</a>
        <a href="/servers?page=5" class="border2">5</a>
        <a href="/servers?page=6" class="border2">6</a>
        <a href="/servers?page=7" class="border2">7</a>
        <a href="/servers?page=8" class="border2">8</a>
        <a href="/servers?page=9" class="border2">9</a>
        <?php if($page>1)?>
        <a href="/servers?page=<?php echo $page+1;?>" class="border2" title="Следующая страница">-></a>
        <a href="/servers?page=200" class="border2" title="Последняя страница">X</a>
    </div>
</div>