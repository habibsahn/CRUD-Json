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

    if (isset($_FILES['picture'])) {
        uploadImage($_FILES['picture'], $user);
    }

    header('Location: index.php');
}


//echo '<pre>';
//var_dump($_SERVER);
//echo '</pre>';

?>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Güncellenen Kullanıcı: <b><?php echo $user['name'] ?></b></h3>
        </div>
        <div class="card-body">
            <?php include 'partials/_form.php'; ?>
        </div>
    </div>
</div>
