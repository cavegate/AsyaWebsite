<?php
/**
 * Created by PhpStorm.
 * User: Ehsanh
 * Date: 3/9/14
 * Time: 4:34 PM
 */
?>
<div class="row center-block" style="width:940px; height: 225px; border:5px solid orange; margin-top:530px; padding: 2px 2px 2px 2px">
    <p class="alert alert-info center-block" style="width:920px; height: 30px;text-align: center; padding-top: 3px">لیست قیمت پکیج ها</p>
    <div class="center-block" style="margin-bottom: 10px">
        <div class="panel panel-primary pull-right col-md-2" style="width: 184px; margin-bottom: 3px">
            <div class="panel-heading">پکيج شماره 1</div>
            <div class="panel-body">
                <p>تعداد محصول : 1</p>
                <p>قيمت 65000 تومان</p>
            </div>
        </div>

        <div class="panel panel-primary pull-right col-md-2" style="width: 184px">
            <div class="panel-heading">پکيج شماره 2</div>
            <div class="panel-body">
                <p>تعداد محصول : 2</p>
                <p>قيمت 91000 تومان</p>
            </div>
        </div>

        <div class="panel panel-primary pull-right col-md-2" style="width: 184px">
            <div class="panel-heading">پکيج شماره 3</div>
            <div class="panel-body">
                <p>تعداد محصول : 3</p>
                <p>قيمت 97500 تومان</p>
            </div>
        </div>

        <div class="panel panel-primary pull-right col-md-2" style="width: 184px">
            <div class="panel-heading">پکيج شماره 4</div>
            <div class="panel-body">
                <p>تعداد محصول : 10</p>
                <p>قيمت 260000 تومان</p>
            </div>
        </div>

        <div class="panel panel-primary pull-right col-md-2" style="width: 190px">
            <div class="panel-heading">پکيج شماره 5</div>
            <div class="panel-body">
                <p>تعداد محصول : 50</p>
                <p>قيمت 975000 تومان</p>
            </div>
        </div>
    </div>
</div>

<div class="row center-block" style="width:465px; height: 240px; border:5px solid orange; padding: 2px 2px 2px 2px">
    <p class="alert alert-info center-block" style="width:448px; height: 45px;text-align: center; padding-top: 10px">محاسبه قيمت پکيج ها</p>
    <label>تعداد پکيج</label>
    <input type="text" onkeyup="getCat(this.value)">
    <p><label>قيمت پکيج</label> <span id="ajaxresult"></span></p>
</div>

