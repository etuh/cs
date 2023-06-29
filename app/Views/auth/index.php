<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>Sign In</title>
  <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
  <div class="container">
    <div class="login-wrap">
      <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
        <label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up">
        <!-- <a href="/register"><label for="tab-2" class="tab">Sign Up</label></a> -->
        <label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
          <div class="sign-in-htm">
            <form action="<?= route_to('check') ?>" method="post">
            <?php $validation = \Config\Services::validation(); ?>
               <?= csrf_field(); ?>
               <?php if( !empty( session()->getFlashdata('fail') ) ) : ?>
                   <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
               <?php endif ?>
               <?php if( !empty( session()->getFlashdata('success') ) ) : ?>
               <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
           <?php endif ?>
              <div class="group">
                <label>Email address</label>
              <input type="text" name="email" class="form-control" placeholder="Enter your email" value="<?= set_value('email') ?>">
              <small class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></small>
              </div>
              <div class="group">
                <div class="password-container">
                <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password" value="<?= set_value('password') ?>">
                    <small class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></small>
                </div>
                <div class="forgot-password">
                  <a href="#">Forgot password?</a>
                </div>
              </div>
              <div class="group">
                <input id="signin-remember" type="checkbox" class="check" checked>
                <label for="signin-remember"><span class="icon"></span> Keep me Signed in</label>
              </div>
              <div class="group">
                <input type="submit" class="button" value="Sign In">
              </div>
            </form>
            <div class="hr"></div>
            <div class="foot-lnk">
              <label for="tab-2">Don't have an account?</label>
            </div>
          </div>
          <div class="sign-up-htm">
            <form action="<?= route_to('create'); ?>" method="post">
            <?php $validation = \Config\Services::validation(); ?>
           
           <?= csrf_field(); ?>
           <?php if( !empty( session()->getFlashdata('fail') ) ) : ?>
               <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
           <?php endif ?>

           <?php if( !empty( session()->getFlashdata('success') ) ) : ?>
               <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
           <?php endif ?>
              <div class="group">
              <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name" value="<?= set_value('name') ?>" >
                    <small class="text-danger"><?= isset($validation) ? display_error($validation, 'name') : '' ?></small>
              </div>
              <div class="group">
              <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter your email" value="<?= set_value('email') ?>">
                    <small class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></small>
              </div>
              <div class="group">
              <label for="pass">New password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter new password" value="<?= set_value('password') ?>">
                    <small class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></small>
              <div class="group">
              <label for="pass">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" placeholder="ReType your password" value="<?= set_value('cpassword') ?>">
                    <small class="text-danger"><?= isset($validation) ? display_error($validation, 'cpassword') : '' ?></small>
              </div>
              <div class="group">
                <input type="submit" class="button" value="Sign Up">
              </div>
            </form>
            <div class="hr"></div>
            <div class="foot-lnk">
              <label for="tab-1">Already a member?</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
