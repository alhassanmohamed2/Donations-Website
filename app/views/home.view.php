<?php 
    require('partials/head.php'); 
   
?>
<link rel="stylesheet" href="../../../public/css/main.css">
<div class="main-image">
    <p class="main-text">معنا نحو غداً أفضل</p>
    <img src="../../public/images/children.jpg" alt="">
</div>

<hr />
<div class="center">
    <p class="products-text">منتجاتنا</p>
</div>

<div class="products container">

    <div class="row">
        <?php for($i = 0; $i < count($names); $i++): ?>
        <div class="card col-lg-3 col-md-6 col-sm-12">
            <img src="<?= $images_path[$i] ?>" class="card-img-top col">
            <div class="card-body">
                <h5 class="card-title"><?= $names[$i] ?></h5>
                <p class="card-text"></p>
                <a href="products?type=<?= $names[$i] ?>" class="btn btn-primary">اشتري</a>
            </div>
        </div>
        <?php endfor; ?>
    </div>

    <?php require('partials/footer.php'); ?>