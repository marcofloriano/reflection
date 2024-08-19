<?php 

include 'User.php';

$user = new Acme\User;

// if($user->isLoggedIn()) {
// 	echo 'You are logged in';
// }

// $rc = new ReflectionClass('Acme\User');
// $rm = new ReflectionMethod('Acme\User', 'getData');
// $rp = new ReflectionProperty('Acme\User', 'data');
// $rpm = new ReflectionParameter(['Acme\User', 'setData'], 0);
$ro = new ReflectionObject($user);
echo $ro->getFileName();

// echo '<pre>' . print_r(get_class_methods($rc), true);
// echo '<pre>' . print_r(get_class_methods($rm), true);
// echo $rpm->isOptional();
// echo '<pre>';
// echo '<pre>' . print_r(get_class_methods($rpm), true);
echo '<pre>' . print_r(get_class_methods($ro), true);
// $rp->setAccessible(true);
// print_r($rp->getValue($user));
// echo '<pre>' . print_r(get_class_methods($rp), true);
// echo $rm->isConstructor();
// $user = new Acme\User;
// $foobar = $rm->invokeArgs($user, ['hello world']);
// echo $foobar;

// if($rc->hasMethod('isLoggedIn'))
// 	echo 'Has method isLoggedIn';

// echo $rc->getShortName();

?>