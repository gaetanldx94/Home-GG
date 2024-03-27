<?php
session_start();

require 'vendor/autoload.php';

$router = new AltoRouter();

$router->map('GET', '/'         , function() { if(isLogged()) { header("Location: /home")            ; } else { include 'src/view/auth.html' ; } });
$router->map('GET', '/home'     , function() { if(isLogged()) { include 'src/view/home.php'          ; } else { header('Location: /')        ; } });
$router->map('GET', '/directory', function() { if(isLogged()) { include 'src/view/directory.php'     ; } else { header('Location: /')        ; } });
$router->map('GET', '/download' , function() { if(isLogged()) { include 'src/controller/download.php'; } else { header('Location: /')        ; } });
$router->map('GET', '/nutri'    , function() { if(isLogged()) { include 'src/view/nutri.php'         ; } else { header('Location: /')        ; } });
$router->map('GET', '/assist'   , function() { if(isLogged()) { include 'src/view/assist.php'        ; } else { header('Location: /')        ; } });

$router->map('POST', '/auth'        , function() { require 'src/controller/auth.php'      ; });
$router->map('POST', '/upload'      , function() { require 'src/controller/upload.php'    ; });
$router->map('POST', '/disconnect'  , function() { require 'src/controller/disconnect.php'; });
$router->map('POST', '/export'      , function() { require 'src/controller/export.php'    ; });

function isLogged() { return isset($_SESSION['user_id']); }

$match = $router->match();

if ($match && is_callable($match['target'])) {
	call_user_func_array($match['target'], $match['params']);
} else {
	header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
?>