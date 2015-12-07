
    <?php if(isset($_REQUEST['id']) && strlen($_REQUEST['id'])>0):?>

        <?php $server = Servers::get_servers_by_id($_REQUEST['id']);?>

            <?php if(isset($server->id)):?>

                <div id="page-title">
                    <h1><?php Servers::pure($server->title)?>: Выход с Рейтинга <g:plusone></g:plusone></h1>
                    <?php
                    echo '<a href="'.$server->url.'">Совершить переход на сайт проекта '.$server->title.'</a>';
                ?>
                </div>

        <?php endif?>

    <?php endif?>

    <?php if(!isset($_REQUEST['id']) || strlen($_REQUEST['id'])==0):?>
        <div class="alert alert-error">Error 400</div>
    <?php endif?>


