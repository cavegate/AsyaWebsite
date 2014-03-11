<?php
/**
 * Created by PhpStorm.
 * User: Ehsanh
 * Date: 3/6/14
 * Time: 2:55 PM
 *
 * Description:
 * In this view, users can register their information
 * Containing:
 * 1. A form with the fields that are necessary:
 *      1.1. the first name of the user
 *      1.2. the last name of the user
 *      1.3. contact number of the user
 *      1.4. the email of the user
 *      1.5. the security code
 *      1.6. the submit button
 */
?>


<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <meta charset="utf-8">
    <title>صفحه ثبت نام</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/supersized.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body style="background: url(<?php echo base_url(); ?>img/page-bg3.jpg); background-repeat: repeat-y; background-size: 1380px">

<div class="page-container" style="margin-right: 60%">
    <form action="" method="post">
        <h1>ثبت نام</h1>
        <input type="text" name="name" style=" text-align:center;" class="name"  placeholder="نام">
        <input type="text" name="lastname" style=" text-align:center;" class="lastname"  placeholder="نام خانوادگی">
        <input type="tel" name="tel" style="text-align:center;" class="tel" placeholder="شماره تماس">
        <input type="email" name="email" style="text-align:center;" class="email" placeholder="ایمیل">
        <input type="email" name="conf_email" style="text-align:center;" class="conf_email" placeholder="تایید ایمیل">
        <input type="password" name="password" style="text-align:center;" class="password" placeholder="رمز عبور">
        <input type="password" name="conf_password" style="text-align:center;" class="conf_password"  placeholder="تایید رمز عبور">

        <button type="submit">ثبت شود</button>
        <div class="error"><span>+</span></div>
    </form>
    <div class="connect">
        <p>وارد شوید</p>
        <p>
            <a class="twitter" href=""></a>
        </p>
    </div>
</div>

<!-- Javascript -->
<script src="<?php echo base_url(); ?>js/jquery-1.8.2.min.js"></script>
<script src="<?php echo base_url(); ?>js/supersized.3.2.7.min.js"></script>
<script src="<?php echo base_url(); ?>js/supersized-init.js"></script>
<script src="<?php echo base_url(); ?>js/regScripts.js"></script>

</body>

</html>

