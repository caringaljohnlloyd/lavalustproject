<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #F1F8FF;
      color: #ffffff;
    }

    .login-container {
      margin-top: 50px;
    }

    .login-form {
      background-color: #0F172B;
;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
    }

    .form-control {
      background-color: #363636;
      color: #ffffff;
      border-color: #565656;
    }

    .form-control:focus {
      background-color: #464646;
      color: #ffffff;
      border-color: #787878;
    }

    .btn-primary {
      background-color: #FEA116;
      border-color: #FEA116;
    }

    .btn-primary:hover {
      background-color: #FEA116;
      border-color: #FEA116;
    }

    a {
      color: #FEA116;
      text-decoration: none; 
    }

    a:hover {
      color: #FEA116;
    }
    .text-center {
            color: #FEA116;
        }
  </style>
</head>

<body>
  <div class="container login-container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="login-form">
          <h4 class="text-center">Login </h4>
          <?php $LAVA =& lava_instance(); ?>
          <?php echo $LAVA->form_validation->errors(); ?>    
          <?php if (isset($error_message)) { ?>
             <div class="alert alert-danger"><?php echo $error_message; ?></div>
            <?php } ?>
            <?php if (isset($success_message)) { ?>
             <div class="alert alert-success"><?php echo $success_message; ?></div>
            <?php } ?>
          <form action="<?= site_url('/index.php/validate_login'); ?>" method="post">
            <div class="form-group">
              <input type="email" class="form-control form-control-lg" placeholder="Email" name="email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control form-control-lg" placeholder="Password" name="password">
            </div>
            <div class="form-group">
              <input type="submit" value="Login" class="btn btn-primary btn-block">
            </div>
            <div class="text-center">
              <p><a href="<?= site_url('index.php/register'); ?>">Don't have an account yet? Sign up</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
