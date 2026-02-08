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

//echo '<pre>';
//var_dump($user);
//echo '</pre>';

?>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Görüntülenen Kullanıcı: <b><?php echo $user['name'] ?></b></h3>
            </div>
            <div class="card-body">
                <a class="btn btn-secondary" href="update.php?id=<?php echo $user['id'] ?>">Güncelle</a>
                <form style="display: inline-block" action="delete.php" method="post">
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <button class="btn btn-danger">Sil</button>
                </form>
            </div>
            <table class="table">
                <tr>
                    <th>İsim:</th>
                    <td><?php echo $user['name'] ?></td>
                </tr>
                <tr>
                    <th>Kullanıcı Adı:</th>
                    <td><?php echo $user['username'] ?></td>
                </tr>
                <tr>
                    <th>Mail:</th>
                    <td><?php echo $user['email'] ?></td>
                </tr>
                <tr>
                    <th>Telefon Numarası:</th>
                    <td><?php echo $user['phone'] ?></td>
                </tr>
                <tr>
                    <th>Web Sitesi:</th>
                    <td>
                        <a target="_blank" href="http://<?= $user['website'] ?>"><?= $user['website'] ?></a>
                    </td>
                </tr>
            </table>
        </div>
    </div>


<?php include 'partials/footer.php'; ?>