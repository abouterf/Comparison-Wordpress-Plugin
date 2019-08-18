<?php

class Ajax
{

    public static function ajax_img($id)
    {
        $ImageSrc = get_the_post_thumbnail_url($id,'custom-size');

        if($ImageSrc === false){
            $ImageSrc = PLUGIN_URL . "assets/img/default.jpg";
            return $ImageSrc;
        }else return $ImageSrc;


    }

    public static function ajax_array($id)
    {
        $array = [
            'car_img' => self::ajax_img($id),
            'car_name' => get_post($id)->post_title,
            'origin' => get_post_meta($id, '__origin_', true),
            'year' => get_post_meta($id, '__year_', true),
            'motor' => get_post_meta($id, '__motor_', true),
            'motor_capacity' => get_post_meta($id, '__motor_capacity_', true),
            'max_power' => get_post_meta($id, '__max_power_', true),
            'max_torque' => get_post_meta($id, '__max_torque_', true),
            'gear_box' => get_post_meta($id, '__gear_box_', true),
            'acceleration' => get_post_meta($id, '__acceleration_', true),
            'max_velocity' => get_post_meta($id, '__max_velocity_', true),
            'weight' => get_post_meta($id, '__weight_', true),
            'size' => get_post_meta($id, '__size_', true),
            'space' => get_post_meta($id, '__space_', true),
            'fuel_in' => get_post_meta($id, '__fuel_in_', true),
            'fuel_out' => get_post_meta($id, '__fuel_out_', true),
            'fuel_mixed' => get_post_meta($id, '__fuel_mixed_', true),
            'tank' => get_post_meta($id, '__tank_', true),
            'contaminant' => get_post_meta($id, '__contaminant_', true),
            'security' => get_post_meta($id, '__security_', true),
            'co2' => get_post_meta($id, '__co2_', true),
            'brake' => get_post_meta($id, '__brake_', true),
            'air_bag' => get_post_meta($id, '__air_bag_', true),
            'sound_system' => get_post_meta($id, '__sound_system_', true),
            'others' => get_post_meta($id, '__others_', true),
            'price' => get_post_meta($id, '__price_', true),
            'last_updated' => get_post_meta($id, '__last_updated_', true),
            'delegation' => get_post_meta($id, '__delegation_', true)
        ];
        return $array;
    }

    public static function ajax_handler()
    {
        check_ajax_referer('my-special-string', 'security');
        if (isset($_POST['select_car1'])) {
            $category_id_1 = $_POST['select_car1'];
            $cars_1 = get_posts(array(
                'post_type' => 'cars',
                'orderby' => 'title',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'car-models',
                        'field' => 'id',
                        'terms' => $category_id_1
                    )
                )
            ));
            foreach ($cars_1 as $car_1) {
                $cars1[] = [
                    'id' => $car_1->ID,
                    'name' => $car_1->post_title
                ];
            }
            echo json_encode($cars1);
            wp_die();
        } else if (isset($_POST['select_car2'])) {
            $category_id_2 = $_POST['select_car2'];
            $cars_2 = get_posts(array(
                'post_type' => 'cars',
                'orderby' => 'title',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'car-models',
                        'field' => 'id',
                        'terms' => $category_id_2
                    )
                )
            ));
            foreach ($cars_2 as $car_2) {
                $cars2[] = [
                    'id' => $car_2->ID,
                    'name' => $car_2->post_title
                ];
            }
            echo json_encode($cars2);
            wp_die();
        }
    }

    public static function ajax_model_handler()
    {
        check_ajax_referer('my-special-string', 'security');
        if (isset($_POST['selected_model'])) {
            $car_1_id = $_POST['selected_model'];
            $car_1_data = self::ajax_array($car_1_id);
            echo json_encode($car_1_data);
            wp_die();
        } else if ($_POST['selected_model2']) {
            $car_2_id = $_POST['selected_model2'];
            $car_2_data = self::ajax_array($car_2_id);
            echo json_encode($car_2_data);
            wp_die();
        }
    }

}



