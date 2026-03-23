<?php 

use Core\App;
use Core\Database;
use Core\Validator;

// devo controllare le robe messe nel form
$db = App::resolve(Database::class);

$errors = [];

if (! Validator::validateEmail($_POST['email'])) {
    $errors['email'] = 'A valid email is required.';
}

if (! Validator::validatePassword($_POST['password'])) {
    $errors['password'] = 'A password of at least 6 characters is required.';
}

if (! empty($errors)) {
    return view("sessions/create.view.php", [
        'errors' => $errors
    ]);
}

$user = $db->query('SELECT * FROM users WHERE email = :email', [
    'email' => $_POST['email']
])->find();


if ($user && password_verify($_POST['password'], $user['password'])) {
    login([
        'email' => $user['email']
    ]);
    header('location: /');
    exit();
    
}

return view('session/create.view.php', [
    'errors' => [
        'email' => 'No matching account found for that email address and password.'
    ]
]);
