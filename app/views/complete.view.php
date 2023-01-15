<?php require('partials/head.php'); ?>
<link rel="stylesheet" href="../../../public/css/dashboard.css">

<div class="container">
    <h1>اتمم الصفقة بإدخالك باقى بيانات العميل</h1>
    <form method="POST" action="/done">
        <div class="form-group">
            <label for="youtube-link">رابط الفيديو الخاص بالمنتج</label>
            <input type="url" class="form-control" name="youtube-link" placeholder="ادخل رابط الفيديو" required />
        </div>
        <div class="form-group">
            <label for="price">سعر المنتج</label>
            <input type="number" class="form-control" name="price" placeholder="أدخل سعر المنتج" required />
        </div>
        <button type="submit" class="btn btn-primary" name="<?= $id ?>">اتمام</button>
    </form>
</div>
<?php require('partials/footer.php'); ?>