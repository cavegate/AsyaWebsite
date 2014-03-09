<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 3/6/14
 * Time: 8:30 AM
 *
 * Description:
 * in this view, the welcome page must be shown
 * contains:
 * 1. download product
 * 2. price plans
 * 3. the login status:
 *     3.1 if the user is logged in
 *         3.1.1 say hello user
 *         3.1.2 link them to the dashboard controller
 *         3.1.3 by clicking the product plans, the user is directed to the factor settings controller
 *         3.2 if the user is not logged in
 *         3.2.1 say please login
 *         3.2.2 link them to the login controller
 *         3.2.3 have a link for registration controller
 *         3.2.4 the price plans are off
*/
?>

<div class="eight columns">
    <h1><?php echo $welcome_content_header;?></h1>
    <h2><?php echo $welcome_content_description;?></h2>
    <p><?php echo $welcome_content;?></p>
    <span class="action">
        <a href="<?php echo base_url()."registerproduct/index"?>">
            <button type="button"><strong><?php echo $welcome_button_buy;?></strong> <?php echo $welcome_button_product;?></button>
        </a> 
        <span class="or"><?php echo $welcome_or;?></span> 
        <a href="<?php echo base_url()."index.php/demo"?>">
            <button type="button" class="learn-more"><?php echo $welcome_button_learnmore;?></button>
        </a>
    </span>
</div>