<?php
$servers = Servers::get(10);
?>

<div id="page-title">
    <h1>Рейтинг серверов Minecraft <g:plusone></g:plusone></h1>
</div>

<div class="server-list">
    <?php
    foreach($servers as $server){
        require('partials/server.php');
    }
    ?>
</div>
