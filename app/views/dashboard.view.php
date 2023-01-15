<?php require('partials/head.php'); ?>
<link rel="stylesheet" href="../../../public/css/dashboard.css">

<div class="container">
    <h1>ادخال بيانات عملاء سابقين</h1>
    <form method="POST" action="/dashboard">
        <div class="form-group">
            <label for="name">الاسم</label>
            <input type="text" class="form-control" name="name" placeholder="ادخل الاسم" required />
        </div>
        <div class="form-group">
            <label for="type">نوع المنتج</label>
            <input type="text" class="form-control" name="type" placeholder="ادخل النوع" required />
        </div>
        <div class="form-group">
            <label for="youtube-link">رابط الفيديو الخاص بالمنتج</label>
            <input type="url" class="form-control" name="youtube-link" placeholder="ادخل رابط الفيديو" required />
        </div>
        <div class="form-group">
            <label for="price">سعر المنتج</label>
            <input type="number" class="form-control" name="price" placeholder="أدخل سعر المنتج" required />
        </div>
        <div class="form-group">

            <label for="phone">رقم هاتفك</label>
            <?php require('countrycodes.view.php') ?>
            <input type="number" class="form-control" name="phone" placeholder="رقم هاتفك" required />
        </div>


        <button type="submit" class="btn btn-primary">تسجيل</button>
    </form>
</div>
<?php if (!$showDatabase) { ?>


<form action="/tables" method="post" style="width: 20%;">
    <button type="submit" class="btn btn-primary">إنشاء الجداول المطلوبة فى قاعدة البيانات</button>
</form>
<?php } ?>

<?php if ($showDatabase && count($new_clients_data) !== 0) { ?>
<h1>طلبات العملاء المعلقة</h1>


<table class="table container">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">اسم</th>
            <th scope="col">نوع المنتج</th>
            <th scope="col">الهاتف</th>
            <th scope="col">الحذف</th>
            <th scope="col">تم</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($new_clients_data as $client) : ?>
        <tr>
            <th scope="row"><?= $client->id  ?></th>
            <td><?= $client->name ?></td>
            <td><?= $client->fal_type ?></td>
            <td>
                <a
                    href="https://api.whatsapp.com/send?phone=<?= $client->phone ?>&text=<?= $messageToClient ?>"><?= $client->phone ?></a>
            </td>
            <td>
                <form action="/delete-client" method="post" style="padding: 0; width: 48%;">
                    <input type="submit" value="احذف" class="btn btn-primary" name="<?= $client->id  ?>" />
                </form>
            </td>
            <td>
                <form action="/complete-client" method="post" style="padding: 0; width: 48%;">
                    <input type="submit" value="تم" class="btn btn-primary" name="<?= $client->id ?>" />
                </form>
            </td>
        </tr>
        <?php endforeach ?>
</table>
<?php } ?>
<br>
<?php if ($showDatabase && count($old_clients_data) !== 0) { ?>
<h1>العملاء السابقين من قاعدة البيانات</h1>
<table class="table container">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">اسم</th>
            <th scope="col">نوع المنتج</th>
            <th scope="col">السعر</th>
            <th scope="col">الحذف</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($old_clients_data as $client) : ?>
        <tr>
            <th scope="row"><?= $client->id  ?></th>
            <td><?= $client->name ?></td>
            <td><?= $client->fal_type ?></td>
            <td><?= $client->price ?></td>
            <td>
                <form action="/delete-client" method="post" style="padding: 0; width: 48%;">
                    <input type="submit" value="احذف" class="btn btn-primary" name="<?= $client->id  ?>" />
                </form>
            </td>
        </tr>
        <?php endforeach ?>
</table>
<?php } ?>

<?php require('partials/footer.php'); ?>