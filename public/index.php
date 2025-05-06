<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/user.php');

$user = new User(['name' => 'João Lindão']);
print_r($user);
echo 'fim'


?>