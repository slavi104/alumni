<?php
require_once "controller.php";
if(isset($_POST['name']) && !empty($_POST['name'])) {
	$name = trim($_POST['name']);

	$active_users = fRecordSet::buildFromSQL('User','SELECT users.* FROM users');
	foreach ($active_users as $user) {
        $name_from_db = $user->getUserName();
        //var_dump($name);
        //var_dump($name_from_db);
        if ($name_from_db == $name) {
            echo '0';
            die();
        }
    }
    echo '1';
}

if(isset($_POST['email']) && !empty($_POST['email'])) {
	$email = trim($_POST['email']);
	
	$active_users = fRecordSet::buildFromSQL('User','SELECT users.* FROM users');
	foreach ($active_users as $user) {
        $email_from_db = $user->getEmail();
        if ($email_from_db == $email) {
            echo '0';
            die();
        }
    }
    echo '1';
}
?>