<?php
require 'list.php';
require 'login.php';

if (empty($_SESSION['user_email'])) {
    $login = '<div class="panel panel-default">
            <div class="panel-heading">Bejelentkezés/Regisztráció</div>
            <div class="panel-body">
                <form method="post" action="/loc/app/login.php">
                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon1">@</span>
                        <input id="email" type="email" class="form-control" placeholder="Add meg az email címedet" aria-describedby="sizing-addon1">                       
                    </div>
                   
                </form>
                <button name="enter" id="enter" class="btn btn-success btn-lg">Belépés</button>
            </div>
        </div>';
} else {
    $login = 'Bejelentkezve: ' . $_SESSION['user_email'];
}


$template = file_get_contents(__DIR__ . '/view/home/home.html');



$template = str_replace('{{ list }}',  $list,  $template);
$template = str_replace('{{ login }}', $login, $template);