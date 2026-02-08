<?php
include 'partials/header.php';
require 'users/users.php';

$users = getUsers();

?>

<div class="container">
    <p>
        <a class="btn btn-success" href="create.php">Yeni Kullanıcı Oluştur</a>
    </p>
    <table class="table">
        <thead>
        <tr>
            <th>Fotoğraf</th>
            <th>İsim</th>
            <th>Kullanıcı Adı</th>
            <th>Mail</th>
            <th>Telefon</th>
            <th>Web Site</th>
            <th>#</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <?php if(isset($user['extension'])): ?>
                    <img style="width: 60px" src="<?php echo "users/images/{$user['id']}.{$user['extension']}" ?>" alt="Fotoğraf">
                    <?php endif; ?>
                </td>
                <td><?=$user['name']?></td>
                <td><?=$user['username']?></td>
                <td><?=$user['email']?></td>
                <td><?=$user['phone']?></td>
                <td>
                    <a target="_blank" href="http://<?=$user['website']?>"><?=$user['website']?></a>
                </td>
                <td>
                    <a class="btn btn-sm btn-outline-info" href="view.php?id=<?=$user['id']?>">Görüntüle</a>
                    <a class="btn btn-sm btn-outline-secondary" href="update.php?id=<?=$user['id']?>">Güncelle</a>
                    <form style="display: inline-block" action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?=$user['id']?>">
                        <button class="btn btn-sm btn-outline-danger">Sil</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'partials/footer.php'; ?>
