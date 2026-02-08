<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php
                if ($user['id']): ?>
                    Güncellenen Kullanıcı: <b><?php echo $user['name'] ?></b>
                <?php else: ?>
                    Yeni Kullanıcı Ekle:
                <?php endif; ?>
            </h3>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>İsim</label>
                    <input type="text" name="name" value="<?= $user['name'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Kullanıcı Adı</label>
                    <input type="text" name="username" value="<?= $user['username'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mail</label>
                    <input type="email" name="email" value="<?= $user['email'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Telefon Numarası</label>
                    <input type="text" name="phone" value="<?= $user['phone'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Web Sitesi</label>
                    <input type="text" name="website" value="<?= $user['website'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Fotoğraf</label>
                    <input type="file" name="picture" class="form-control">
                </div>

                <button class="btn btn-success">Gönder</button>
            </form>
        </div>
    </div>
</div>
