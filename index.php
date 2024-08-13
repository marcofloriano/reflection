<?php 

include 'User.php';

// $user = new User;

// if($user->isLoggedIn()) {
// 	echo 'You are logged in';
// }

$rc = new ReflectionClass('Acme\User');

// echo '<pre>' . print_r(get_class_methods($rc), true);

// if($rc->hasMethod('isLoggedIn'))
// 	echo 'Has method isLoggedIn';

echo $rc->getName();

?>