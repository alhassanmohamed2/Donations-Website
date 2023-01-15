<?php require('partials/head.php');?>
<link rel="stylesheet" href="../../../public/css/admin.css">

<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="POST" action="/admin">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3">ايميل</label>
                        <input type="email" id="form3Example3" class="form-control form-control-lg"
                            placeholder="أدخل الإيميل الخاص بك" name="email" />

                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <label class="form-label" for="form3Example4">كلمة السر</label>
                        <input type="password" id="form3Example4" class="form-control form-control-lg"
                            placeholder="أدخل كلمة السر" name="pass" />

                    </div>



                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">تسجيل الدخول</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

<?php require('partials/footer.php'); ?>