jQuery(document).ready(function ($) {
    $('#brands_1').select2()
    $('#models_1').select2()
    $('#brands_2').select2()
    $('#models_2').select2()
    $('.content').hide()
    $('.loading-img').hide()  // Hide it initially
        .ajaxStart(function() {
            $(this).show();
            $('#brands_2').prop('disabled', true);
            $('#models_2').prop('disabled', true);
            $('#brands_1').prop('disabled', true);
            $('#models_1').prop('disabled', true);
        })
        .ajaxStop(function() {
            $(this).hide();
            $('#brands_2').prop('disabled', false);
            $('#models_2').prop('disabled', false);
            $('#brands_1').prop('disabled', false);
            $('#models_1').prop('disabled', false);
        })
    ;
    $('#brands_2').prop('disabled', true);
    $('#models_2').prop('disabled', true);
    $('#brands_1').change(function () {
        select = jQuery('#brands_1').val();
        var data = {
            method: 'post',
            action: 'ajax_handler',
            security: MyAjax.security,
            select_car1: select
        };
        $.post(MyAjax.ajaxurl, data).done(function (cars1) {
            // console.log(cars1);
            cars1 = JSON.parse(cars1);
            $('#models_1').find('*').not('.stay').remove();
            cars1.forEach(function (car1) {
                $('#models_1').append('<option value="' + car1.id + '">' + car1.name + '</option>');
                console.log(cars1)
            })
        })
    })
    $('#models_1').change(function () {
        select_model = jQuery('#models_1').val();
        var model = {
            method: 'post',
            action: 'ajax_model_handler',
            security: MyAjax.security,
            selected_model: select_model
        };
        $.post(MyAjax.ajaxurl, model).done(function (car_1_data) {
            $('#brands_2').prop('disabled', false);
            $('#models_2').prop('disabled', false);
            var elmnt = document.getElementById("hidden");
            elmnt.scrollIntoView();
            car_1_data = JSON.parse(car_1_data);
            //   console.log(car_1_data)
            $('#Div1').empty()
            $('#Div1').append('<img style="width: 100%" alt="خودروی یک" id="image1" class="lazyload" src="' + car_1_data.car_img + '">')
            $('#car_name1').empty()
            $('#car_name1').append(car_1_data.car_name)
            $('#origin1').empty()
            $('#origin1').append(car_1_data.origin)
            $('#year1').empty()
            $('#year1').append(car_1_data.year)
            $('#motor1').empty()
            $('#motor1').append(car_1_data.motor)
            $('#motor_capacity1').empty()
            $('#motor_capacity1').append(car_1_data.motor_capacity)
            $('#max_power1').empty()
            $('#max_power1').append(car_1_data.max_power)
            $('#max_torque1').empty()
            $('#max_torque1').append(car_1_data.max_torque)
            $('#gear_box1').empty()
            $('#gear_box1').append(car_1_data.gear_box)
            $('#acceleration1').empty()
            $('#acceleration1').append(car_1_data.acceleration)
            $('#max_velocity1').empty()
            $('#max_velocity1').append(car_1_data.max_velocity)
            $('#weight1').empty()
            $('#weight1').append(car_1_data.weight)
            $('#size1').empty()
            $('#size1').append(car_1_data.size)
            $('#space1').empty()
            $('#space1').append(car_1_data.space)
            $('#fuel_in1').empty()
            $('#fuel_in1').append(car_1_data.fuel_in)
            $('#fuel_out1').empty()
            $('#fuel_out1').append(car_1_data.fuel_out)
            $('#fuel_mixed1').empty()
            $('#fuel_mixed1').append(car_1_data.fuel_mixed)
            $('#tank1').empty()
            $('#tank1').append(car_1_data.tank)
            $('#contaminant1').empty()
            $('#contaminant1').append(car_1_data.contaminant)
            $('#security1').empty()
            $('#security1').append(car_1_data.security)
            $('#co2_1').empty()
            $('#co2_1').append(car_1_data.co2)
            $('#brake1').empty()
            $('#brake1').append(car_1_data.brake)
            $('#air_bag1').empty()
            $('#air_bag1').append(car_1_data.air_bag)
            $('#sound_system1').empty()
            $('#sound_system1').append(car_1_data.sound_system)
            $('#others1').empty()
            $('#others1').append(car_1_data.others)
            $("img.lazyload").lazyload();
        })
    })
    $('#brands_2').change(function () {
        select = jQuery('#brands_2').val();
        var data = {
            method: 'post',
            action: 'ajax_handler',
            security: MyAjax.security,
            select_car2: select
        };
        $.post(MyAjax.ajaxurl, data).done(function (cars2) {
            // console.log(cars1);
            cars2 = JSON.parse(cars2);
            $('#models_2').find('*').not('.stay').remove();
            cars2.forEach(function (car2) {
                $('#models_2').append('<option value="' + car2.id + '">' + car2.name + '</option>');
            })
        })
    })
    $('#models_2').change(function () {
        select_model = jQuery('#models_2').val();
        var model = {
            method: 'post',
            action: 'ajax_model_handler',
            security: MyAjax.security,
            selected_model2: select_model
        };
        $.post(MyAjax.ajaxurl, model).done(function (car_2_data) {
            car_2_data = JSON.parse(car_2_data);
            $('.content').show()
            var elmnt = document.getElementById("hidden");
            elmnt.scrollIntoView();
            //  console.log(car_2_data)
            $('#Div2').empty()
            $('#Div2').append('<img style="width: 100%" alt="خودروی دو" id="image2  " class="lazyload" src="' + car_2_data.car_img + '">')
            $('#car_name2').empty()
            $('#car_name2').append(car_2_data.car_name)
            $('#origin2').empty()
            $('#origin2').append(car_2_data.origin)
            $('#year2').empty()
            $('#year2').append(car_2_data.year)
            $('#motor2').empty()
            $('#motor2').append(car_2_data.motor)
            $('#motor_capacity2').empty()
            $('#motor_capacity2').append(car_2_data.motor_capacity)
            $('#max_power2').empty()
            $('#max_power2').append(car_2_data.max_power)
            $('#max_torque2').empty()
            $('#max_torque2').append(car_2_data.max_torque)
            $('#gear_box2').empty()
            $('#gear_box2').append(car_2_data.gear_box)
            $('#acceleration2').empty()
            $('#acceleration2').append(car_2_data.acceleration)
            $('#max_velocity2').empty()
            $('#max_velocity2').append(car_2_data.max_velocity)
            $('#weight2').empty()
            $('#weight2').append(car_2_data.weight)
            $('#size2').empty()
            $('#size2').append(car_2_data.size)
            $('#space2').empty()
            $('#space2').append(car_2_data.space)
            $('#fuel_in2').empty()
            $('#fuel_in2').append(car_2_data.fuel_in)
            $('#fuel_out2').empty()
            $('#fuel_out2').append(car_2_data.fuel_out)
            $('#fuel_mixed2').empty()
            $('#fuel_mixed2').append(car_2_data.fuel_mixed)
            $('#tank2').empty()
            $('#tank2').append(car_2_data.tank)
            $('#contaminant2').empty()
            $('#contaminant2').append(car_2_data.contaminant)
            $('#security2').empty()
            $('#security2').append(car_2_data.security)
            $('#co2_2').empty()
            $('#co2_2').append(car_2_data.co2)
            $('#brake2').empty()
            $('#brake2').append(car_2_data.brake)
            $('#air_bag2').empty()
            $('#air_bag2').append(car_2_data.air_bag)
            $('#sound_system2').empty()
            $('#sound_system2').append(car_2_data.sound_system)
            $('#others2').empty()
            $('#others2').append(car_2_data.others)
            $("img.lazyload").lazyload();
        })
    })
});