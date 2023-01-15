<?php require('partials/head.php'); ?>

<link rel="stylesheet" href="../../../public/css/buy.css">
<div class="container">
    <h1>ادخل بياناتك</h1>
    <form method="POST" action="/buy-client">
        <div class="form-group">
            <label for="name">اسمك</label>
            <input type="text" class="form-control" name="cus_name" placeholder="ادخل الاسم" required />
        </div>

        <div class="form-group">
            <label for="phone">رقم هاتفك</label>
            <?php require('countrycodes.view.php') ?>
            <input type="number" class="form-control" name="phone" placeholder="رقم هاتفك" required />
        </div>
        <div class="form-group">
            <label for="type">النوع</label>
            <input type="text" name="type" value="<?= $type ?>" readonly>

        </div>

        <button type="submit" class="btn btn-primary">اشتري</button>
    </form>
</div>
<?php require('partials/footer.php'); ?>