<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/user.php');

$user = new User(['name' => 'João Lindão', 'email' => 'ola@email.com']);
$user->set('email' , 'jvrocha@ola.com');
print_r($user->get('email'));

// echo '<br>';
// $user->email = 'jvrochaaaa@email.com';
// print_r($user->email);
// echo 'fim'


?>