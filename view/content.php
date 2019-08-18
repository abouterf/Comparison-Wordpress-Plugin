<div class="row">
    <div class="col">
        <h6>خودروی اول</h6>
        <hr>
        <div class="row">
            <div class="col-md-1 col-sm-1 col-xs-1"><span>برند:</span></div>
            <div class="col-sm-11 col-md-11 col-xs-11">
                <?php echo '<select name="brands_1" id="brands_1">';
                $args = [
                    'taxonomy' => 'car-models',
                    'hide_empty' => true,
                    'orderby' => 'name'
                ];
                $categories = get_terms($args);
                ?>
                <option selected disabled>برند خودرو را وارد کنید.</option>
                <?php
                foreach ($categories as $category) :

                    echo '<option value="' . $category->term_id . '">' . $category->name . '</option>';

                endforeach;

                echo '</select>';
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 col-sm-1 col-xs-1"><span>خودرو:</span></div>
            <div class="col-sm-11 col-md-11 col -xs-11">
                <select name="models_1" id="models_1">
                    <option selected disabled class="stay" value="0">مدل خودرو را وارد کنید.</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col">
        <h6>خودروی دوم</h6>
        <hr>
        <div class="hidden" id="hidden"></div>
        <div class="row">
            <div class="col-md-1 col-sm-1 col-xs-1"><span>برند:</span></div>
            <div class="col-sm-11 col-md-11 col -xs-11">
                <?php echo '<select name="brands_2" id="brands_2">';

                $categories = get_categories($args);
                ?>
                <option selected disabled>برند خودرو را وارد کنید.</option>
                <?php
                foreach ($categories as $category) :

                    echo '<option value="' . $category->term_id . '">' . $category->name . '</option>';

                endforeach;

                echo '</select>';
                ?>
            </div>
        </div>
        <div class="row select - model">
            <div class="col-md-1 col-sm-1 col-xs-1"><span>خودرو:</span></div>
            <div class="col-sm-11 col-md-11 col -xs-11">
                <select name="models_2" id="models_2">
                    <option selected disabled class="stay" value="0">مدل خودرو را وارد کنید.</option>
                </select>
            </div>
        </div>
    </div>

</div>
<div class="loading-img" style="text-align: center ">
    <img style="width: 80px" src="<?php echo PLUGIN_URL ?>assets/img/loading.gif" alt="loading">
    <h6 style="margin-top: 0;text-align: center position: absolute">لطفا صبر کنید...</h6>
</div>



<div class="content">

    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="row top-padding">
                <div class="col-md-12">
                    <div id="Div1">

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="row top-padding">
                <div class="col-md-12">
                    <div id="Div2">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <tbody>
                <td class="title" colspan="2">
            <span>
                <h4 class="info-head"><i class="fa fa-angle-double-left" style="color:#EA0253"></i> خودرو</h4>
            </span>
                </td>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        نام خودرو:
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span class="car_name1" id="car_name1"></span>
                </td>
                <td class="col-left">
                <span class="car_name2" id="car_name2">

                </span>
                </td>
            </tr>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        کشور سازنده
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                <span id="origin1">

                </span>
                </td>
                <td class="col-left">
                <span id="origin2">

                </span>
                </td>
            </tr>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        سال (طراحی)
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="year1"></span>
                </td>
                <td class="col-left">
                    <span id="year2"></span>
                </td>
            </tr>
                <td class="title" colspan="2">
            <span>
                <h4 class="info-head"><i class="fa fa-angle-double-left" style="color:#EA0253"></i> مشخصات فنی</h4>
            </span>
                </td>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        موتور
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="motor1"></span>
                </td>
                <td class="col-left">
                    <span id="motor2"></span>
                </td>
            </tr>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        حجم موتور
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="motor_capacity1"></span>
                </td>
                <td class="col-left">
                    <span id="motor_capacity2"></span>
                </td>
            </tr>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        حداکثر قدرت
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="max_power1"></span>
                </td>
                <td class="col-left">
                    <span id="max_power2"></span>
                </td>
            </tr>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        حداکثر گشتاور
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="max_torque1"></span>
                </td>
                <td class="col-left">
                    <span id="max_torque2"></span>
                </td>
            </tr>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        جعبه دنده
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="gear_box1"></span>
                </td>
                <td class="col-left">
                    <span id="gear_box2"></span>
                </td>
            </tr>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        شتاب 0 تا 100
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="acceleration1"></span>
                </td>
                <td class="col-left">
                    <span id="acceleration2"></span>
                </td>
            </tr>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        حداکثر سرعت
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="max_velocity1"></span>
                </td>
                <td class="col-left">
                    <span id="max_velocity2"></span>
                </td>
            </tr>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        وزن
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="weight1"></span>
                </td>
                <td class="col-left">
                    <span id="weight2"></span>
                </td>
            </tr>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        اندازه (میلیمتر)
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="size1"></span>
                </td>
                <td class="col-left">
                    <span id="size2"></span>
                </td>
            </tr>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        فاصله بین دو محور
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="space1"></span>
                </td>
                <td class="col-left">
                    <span id="space2"></span>
                </td>
            </tr>
                <td class="title" colspan="2">
            <span>
                <h4 class="info-head"><i class="fa fa-angle-double-left" style="color:#EA0253"></i> مصرف سوخت و استاندارد ها</h4>
            </span>
                </td>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        مصرف سوخت داخل شهر
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="fuel_in1"></span>
                </td>
                <td class="col-left">
                    <span id="fuel_in2"></span>
                </td>
            </tr>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        مصرف سوخت خارج از شهر
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="fuel_out1"></span>
                </td>
                <td class="col-left">
                    <span id="fuel_out2"></span>
                </td>
            </tr>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        مصرف سوخت ترکیبی
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="fuel_mixed1"></span>
                </td>
                <td class="col-left">
                    <span id="fuel_mixed2"></span>
                </td>
            </tr>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        حجم باک
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="tank1"></span>
                </td>
                <td class="col-left">
                    <span id="tank2"></span>
                </td>
            </tr>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        استاندارد آلایندگی
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="contaminant1"></span>
                </td>
                <td class="col-left">
                    <span id="contaminant2"></span>
                </td>
            </tr>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        استاندارد امنیت
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="security1"></span>
                </td>
                <td class="col-left">
                    <span id="security2"></span>
                </td>
            </tr>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        میزان تولید CO2
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="co2_1"></span>
                </td>
                <td class="col-left">
                    <span id="co2_2"></span>
                </td>
            </tr>
                <td class="title" colspan="2">
            <span>
                <h4 class="info-head"><i class="fa fa-angle-double-left" style="color:#EA0253"></i> تجهیزات و امکانات</h4>
            </span>
                </td>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        ترمز و پایداری
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="brake1"></span>
                </td>
                <td class="col-left">
                    <span id="brake2"></span>
                </td>
            </tr>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        کیسه هوا
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="air_bag1"></span>
                </td>
                <td class="col-left">
                    <span id="air_bag2"></span>
                </td>
            </tr>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        سیستم صوتی
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="sound_system1"></span>
                </td>
                <td class="col-left">
                    <span id="sound_system2"></span>
                </td>
            </tr>
            <tr class="table-active">
                <td class="title" colspan="2">
                    <h6 class="info-heading">
                        دیگر تجهیزات
                    </h6>
                </td>
            </tr>
            <tr>
                <td class="col-right">
                    <span id="others1"></span>
                </td>
                <td class="col-left">
                    <span id="others2"></span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

