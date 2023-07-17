<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Webleb</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="../css/login.css">
  </head>
  <body style="display:float; align-items:center; justify-content:center;">
  <div class="login-page">
      <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Webleb</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="../css/login.css">
  </head>
  <body style="display:float; align-items:center; justify-content:center;">
  <div class="login-page">
    <div class="form">
      <form class="register-form" method="POST">
        <h2><i class="fas fa-lock"></i> Register</h2>
        <input type="text" placeholder="Full Name *" required/>
        <input type="text" placeholder="Username *" required/>
        <input type="email" placeholder="Email *" required/>
        <input type="password" placeholder="Password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
        <div id="message">
            <h3>Password must contain the following:</h3>
            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
          </div>
        <button type="submit">create</button>
        <p class="message">Already registered? <a href="#">Sign In</a></p>
      </form>
      <form class="login-form" method="post">
        <h2><i class="fas fa-lock"></i> Login</h2>
        <input type="text" placeholder="Username" required />
        <input type="password" placeholder="Password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
        <div id="message">
            <h3>Password must contain the following:</h3>
            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
          </div>
        <button type="submit" name="send2">login</button>
        <p class="message">Not registered? <a href="#">Create an account</a></p>
      </form>
    </div>
  </div>
  
  <!-- <div id="message">
    <h3>Password must contain the following:</h3>
    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
    <p id="number" class="invalid">A <b>number</b></p>
    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
  </div> -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../js/login.js"></script>
  </body>
  </html>

    <div class="form">
      <form class="register-form" action="<?= route_to('create'); ?>" method="post">
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
                    <input type="password" placeholder="Password" id="psw" name="password" value="<?= set_value('password') ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
                    <small class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></small>
                    <div id="message">
                        <h3>Password must contain the following:</h3>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                    </div>              
                    <div class="group">
              <label for="pass">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" placeholder="ReType your password" value="<?= set_value('cpassword') ?>">
                    <small class="text-danger"><?= isset($validation) ? display_error($validation, 'cpassword') : '' ?></small>
              </div>
              <div class="group">
                <input type="submit" class="button" value="Sign Up">
              </div>
            </form>
        
      <form class="login-form" action="<?= route_to('check') ?>" method="post">
            <?php $validation = \Config\Services::validation(); ?>
               <?= csrf_field(); ?>
               <?php if( !empty( session()->getFlashdata('fail') ) ) : ?>
                   <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
               <?php endif ?>
               <?php if( !empty( session()->getFlashdata('success') ) ) : ?>
               <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
           <?php endif ?>
        <h2><i class="fas fa-lock"></i> Login</h2>
        <div class="group">
                <label>Email address</label>
              <input type="text" name="email" class="form-control" placeholder="Enter your email" value="<?= set_value('email') ?>">
              <small class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></small>
              </div>
              <div class="group">
                <div class="password-container">
                <label for="password">Password</label>
                  <input type="password" placeholder="Password" id="pass" name="password" value="<?= set_value('password') ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
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
            
    </div>
  </div>
  
  <!-- <div id="message">
    <h3>Password must contain the following:</h3>
    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
    <p id="number" class="invalid">A <b>number</b></p>
    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
  </div> -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../js/login.js"></script>
  </body>
  </html>
