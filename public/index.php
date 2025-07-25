<?php 

require_once (dirname(__FILE__, 2) . '/src/config/config.php');
require_once (dirname(__FILE__, 2) . '/src/models/User.php');


$user = new User([
    'name' => 'John Doe',
    'password' => 'securepassword',
    'email' => 'gp@.com']);
    print_r($user->email);
    print_r($user->email = 'alterado@.com'); 

echo ('<br>' . $user->getSelect(['name' => 'John Doe'], 'name, email'));
echo "User model initialized successfully.";









