<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #F1F8FF;
            color: #ffffff;
        }

        .auth-container {
            margin-top: 50px;
        }

        .auth-form {
            background-color: #0F172B;
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
    <div class="container auth-container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="auth-form">
                    <h4 class="text-center">Sign up</h4>
                    <?php $LAVA =& lava_instance(); ?>
                    <?php echo $LAVA->form_validation->errors(); ?>
                    <?php if (isset($error_message)) { ?>
                        <div class="alert alert-danger"><?php echo $error_message; ?></div>
                    <?php } ?>
                    <form action="<?= site_url('index.php/validate_reg'); ?> " method="post">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" name="username" placeholder="Username" value="" size="50">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg" name="email" placeholder="Email" value="" size="50">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" value="" size="50">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg" name="confpassword" placeholder="Confirm Password" value="" size="50">
                        </div>
                        <div class="mt-3 d-flex justify-content-center">
                            <input type="submit" value="Sign Up" class="btn btn-primary btn-block" />
                        </div>
                        <div class="text-center">
                            <p><a href="<?= site_url('/login'); ?>">Already Have an Account, Signin</a></p>
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
