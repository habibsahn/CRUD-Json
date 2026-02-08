<?php

include 'partials/header.php';

require __DIR__ . '/users/users.php';

if (!isset($_GET['id'])) {
    include 'partials/not_fount.php';
    exit;
}

$userId = $_GET['id'];

$user = getUserById($userId);

if (!$user) {
    include 'partials/not_fount.php';
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = updateUser($_POST, $userId);

    uploadImage($_FILES['picture'], $user);

    header('Location: index.php');
}


//echo '<pre>';
//var_dump($_SERVER);
//echo '</pre>';

?>

<?php include 'partials/_form.php'; ?>
