<?php 

class Siswa {
	public $nama;
	public $results;

	function __construct($nama, array $results) {
		echo '<br/>Siswa ' . $nama . ": ";
		foreach ($results as $subject => $item) {
			echo '<br/>' . $subject . ': ' . $item;
		}
		echo '<hr>';
	}
}

$siswa = new Siswa('Nadia', array('matematika' => 9, 'biologi' => 8));
$siswa = new Siswa('Sonya', array('matematika' => 9, 'biologi' => 9));

class User {
	public $firstname;
	public $lastname;
}

function getFullName(User $user) {
	return $user->firstname . ' ' . $user->lastname;
}

$user1 = new User;
$user1->firstname = 'Nadia';
$user1->lastname = 'Rizky';

echo getFullName($user1);
echo '<br/>';


class SuperUser extends User {

}

$user2 = new SuperUser;
$user2->firstname = 'Sonya';
$user2->lastname = 'Luvita';

echo getFullName($user2);

/*
 *The signature of the method - the method name, 
 *the number of arguments 
 *and argument types (using control types).
*/
public function hello($time, array $user) {}
public function hello($time, User $user) {}
?>