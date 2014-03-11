<?php
/**
 * Created by PhpStorm.
 * User: Ehsanh
 * Date: 3/11/14
 * Time: 11:56 AM
 */
$str = $_REQUEST['p'];
$pr = array(65000,45500,32500,26000,19500);
if($str<2)
    echo $pr[0]*$str;
else if($str<3)
    echo $pr[1]*$str;
else if($str<10)
    echo $pr[2]*$str;
else if($str<50)
    echo $pr[3]*$str;
else
    echo $pr[4]*$str;