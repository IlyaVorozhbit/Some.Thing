
    <?php if(isset($_GET['id']) && strlen($_GET['id'])>0):?>

        <?php $server = Servers::get_servers_by_id($_GET['id']);?>

            <?php if(isset($server->id)):?>

                <div id="page-title">
                    <h1>Выход с рейтинга</h1>
                    <?php
                    echo '<a href="'.$server->url.'">Совершить переход на сайт проекта '.$server->title.'</a>';
                ?>
                </div>

        <?php endif?>

    <?php endif?>

    <?php if(!isset($_GET['id']) || strlen($_GET['id'])==0):?>
        <div class="alert alert-error">Error 400</div>
    <?php endif?>

