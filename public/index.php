<?php 

require_once (dirname(__FILE__, 2) . '/src/config/config.php');
// require_once (VIEW_PATH . '/login.php');

require_once(MODEL_PATH . '/Login.php');

$login = new Login([
    'email' => 'madruga@cod3r.com.br',
    'password' => 'a'
]);

try{
    $login->checkLogin();
    echo 'usuário logado com sucesso';
}catch(Exception $e){
    echo 'problema no login';
    print_r($login);
}













