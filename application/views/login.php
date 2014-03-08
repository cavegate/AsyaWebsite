<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 3/6/14
 * Time: 9:00 AM
 *
 *
 * Description:
 * In this view the login page must be shown
 * Containing:
 * 1. A form with the following fields that are necessary:
 *      1.1. the username
 *      1.2. the password
 *      1.3. captcha that is shown if needed
 *      1.4. the submit button
 */
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>Fullscreen Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/supersized.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="page-container">
            <h1>ورود</h1>
            <form action="" method="post">
                <input type="text" name="username" style="text-align:center;" class="username"  placeholder="نام کاربری">
                <input type="password" name="password" style="text-align:center;" class="password" placeholder="نام عبور">
                <button type="submit">وارد شدن</button>
                <div class="error"><span>+</span></div>
            </form>
            <div class="connect">
                <p>ثبت نام کنید</p>
                <p>
                    <a class="facebook" href=""></a>
                </p>
            </div>
        </div>

        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>js/jquery-1.8.2.min.js"></script>
        <script src="<?php echo base_url(); ?>js/supersized.3.2.7.min.js"></script>
        <script src="<?php echo base_url(); ?>js/supersized-init.js"></script>
        <script src="<?php echo base_url(); ?>js/scripts.js"></script>

    </body>

</html>

