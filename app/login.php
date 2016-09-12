<?php


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
                <button name="enter" id="entder" class="btn btn-success btn-lg btn-block">Belépés</button>
            </div>
        </div>';
} else {
    $login = 'Bejelentkezve: ' . $_SESSION['user_email'];
}
//unset ($_SESSION['user_email']);
if (!empty($_POST)) {
    $_SESSION['user_email'] = $_POST['user_email'];
    echo 'Bejelentkezve: ' . $_SESSION['user_email'];
}






//$login = 'ez egy login';
