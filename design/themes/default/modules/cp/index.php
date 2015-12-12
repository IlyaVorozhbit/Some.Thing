<?php

if (isset($_GET['code'])) {
    $answer = file_get_contents_curl('https://oauth.vk.com/access_token?client_id=' . APP_ID . '&client_secret=' . APP_SHARED_SECRET . '&redirect_uri=http://some.thing/cp&code=' . $_GET['code']);
    $answer = json_decode($answer);

    if (!isset($answer->error)) {
        $url = 'https://api.vk.com/method/users.get?user_id=' . $answer->user_id . '&fields=bdate&access_token=' . $answer->access_token;
        $answer = json_decode(file_get_contents_curl($url));
        $user = $answer->response[0]; // uid, first_name, last_name, bdate

        $time = strtotime($user->bdate);
        echo date("Y-m-d H:i:s", $time);
    } else {
        echo '<p style="position: relative; top: -10px; bottom: -7px; color: #fff; padding: 9px; background-color: #ff696e;">Вам необходимо нажать на кнопку "Разрешить" на странице авторизации во ВКонтакте</p>';
    }
}

if (isset($_GET['error_description']) && $_GET['error_description'] == 'User denied your request') {
    echo '<p style="position: relative; top: -10px; bottom: -7px; color: #fff; padding: 9px; background-color: #ff696e;">Вам необходимо нажать на кнопку "Разрешить" на странице авторизации во ВКонтакте</p>';
}

function file_get_contents_curl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Устанавливаем параметр, чтобы curl возвращал данные, вместо того, чтобы выводить их в браузер.
    curl_setopt($ch, CURLOPT_URL, $url);
    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

?>


<div id="page-title">
    <h1>Контрольная панель</h1>
</div>

<a style="border-radius: 3px; position:relative; top: 7px; padding: 7px; background-color: #5F83AA; color: #fff;" href="https://oauth.vk.com/authorize?client_id=4585317&display=page&redirect_uri=http://some.thing/cp&response_type=code&v=5.40">Войти через ВКонтакте</a>
<br><br><hr>

<form class="form-inline">

    <div class="form-group">
        <label class="sr-only" for="exampleInputEmail3">Логин </label>
        <input class="form-control" placeholder="Введите Ваш логин">
    </div>

    <br>

    <div class="form-group">
        <label class="sr-only" for="exampleInputPassword3">Пароль</label>
        <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Введите Ваш пароль">
    </div>
    <!--<div class="checkbox">
        <label>
            <input type="checkbox"> Remember me
        </label>
    </div>-->
    <br>
    <button type="submit" class="btn btn-default">Войти на сайт, как администратор</button>
</form>