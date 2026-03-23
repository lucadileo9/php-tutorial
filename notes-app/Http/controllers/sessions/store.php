<?php 

use Core\Authenticator;

$authenticator = new Authenticator();
$result = $authenticator->attempt($_POST['email'], $_POST['password']);

if ($result['success']) {
    redirect('/');
}

return view('sessions/create.view.php', [
    'errors' => $result['errors']
]);
