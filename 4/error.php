<?php 

function onErrorFunc() {
	echo 'Enter correct value';
}

set_error_handler('onErrorFunc');

class User {

}

function getFullName(User $user) {

}

$user1 = new User;

echo getFullName($user1);
echo getFullName('string');

?>