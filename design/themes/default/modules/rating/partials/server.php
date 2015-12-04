<div class="server-block">
    <!--<div class="server-block-right-container">
        <div class="server-block-right">
            <div class="server-number">
                <span>pos</span>
            </div>
            <div class="server-votes">
                <p>За месяц: 444</p>
                <p>Всего: 444</p>
                <p>Очков: 44939</p>
            </div>
        </div>
    </div>-->
    <div class="server-title"><a href="/server/<?php echo $server->id;?>"><?php echo $server->title;?></a></div>
    <div class="server-banner">
        <a href="/out?mode=server&id=<?php echo $server->id;?>">
            <img src="/static/images/banner.png">
        </a>
    </div>
    <div class="server-content">
        <table cellpadding="2"></span></td></tr>
            <tr><td>Версия</td> <td><span class="green"><?php echo Servers::version($server);?></span></td></tr>
            <tr><td>Whitelist</td> <td><span class="green"><?php echo Servers::whitelist($server);?></span></td></tr>
            <tr><td>Вход</td> <td><span class="green"><?php echo Servers::client($server);?></span></td></tr>
            <tr><td>Uptime</td>  <td><span class="green"><?php echo Servers::uptime($server);?></span></td></tr>
            </tbody>
        </table>
    </div>
</div>