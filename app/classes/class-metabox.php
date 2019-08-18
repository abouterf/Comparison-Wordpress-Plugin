<?php

abstract class MetaBox
{
    public static function __get_meta($value)
    {
        global $post;

        $field = get_post_meta($post->ID, $value, true);
        if (!empty($field)) {
            return is_array($field) ? stripslashes_deep($field) : stripslashes(wp_kses_decode_entities($field));
        } else {
            return false;
        }
    }

    public static function add()
    {
        add_meta_box(
            'cars_meta_box_id',          // Unique ID
            'اطلاعات خودرو', // Box title
            [self::class, '__html'],   // Content callback, must be of type callable
            'cars');                // Post type
    }

    public static function __save($post_id)
    {
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
        if (!isset($_POST['__nonce']) || !wp_verify_nonce($_POST['__nonce'], '___nonce')) return;
        if (!current_user_can('edit_post', $post_id)) return;

        if (isset($_POST['__year_']))
            update_post_meta($post_id, '__origin_', esc_attr($_POST['__origin_']));
        if (isset($_POST['__year_']))
            update_post_meta($post_id, '__year_', esc_attr($_POST['__year_']));
        if (isset($_POST['__motor_']))
            update_post_meta($post_id, '__motor_', esc_attr($_POST['__motor_']));
        if (isset($_POST['__motor_capacity_']))
            update_post_meta($post_id, '__motor_capacity_', esc_attr($_POST['__motor_capacity_']));
        if (isset($_POST['__max_power_']))
            update_post_meta($post_id, '__max_power_', esc_attr($_POST['__max_power_']));
        if (isset($_POST['__max_torque_']))
            update_post_meta($post_id, '__max_torque_', esc_attr($_POST['__max_torque_']));
        if (isset($_POST['__gear_box_']))
            update_post_meta($post_id, '__gear_box_', esc_attr($_POST['__gear_box_']));
        if (isset($_POST['__acceleration_']))
            update_post_meta($post_id, '__acceleration_', esc_attr($_POST['__acceleration_']));
        if (isset($_POST['__max_velocity_']))
            update_post_meta($post_id, '__max_velocity_', esc_attr($_POST['__max_velocity_']));
        if (isset($_POST['__weight_']))
            update_post_meta($post_id, '__weight_', esc_attr($_POST['__weight_']));
        if (isset($_POST['__size_']))
            update_post_meta($post_id, '__size_', esc_attr($_POST['__size_']));
        if (isset($_POST['__space_']))
            update_post_meta($post_id, '__space_', esc_attr($_POST['__space_']));
        if (isset($_POST['__fuel_in_']))
            update_post_meta($post_id, '__fuel_in_', esc_attr($_POST['__fuel_in_']));
        if (isset($_POST['__fuel_out_']))
            update_post_meta($post_id, '__fuel_out_', esc_attr($_POST['__fuel_out_']));
        if (isset($_POST['__fuel_mixed_']))
            update_post_meta($post_id, '__fuel_mixed_', esc_attr($_POST['__fuel_mixed_']));
        if (isset($_POST['__tank_']))
            update_post_meta($post_id, '__tank_', esc_attr($_POST['__tank_']));
        if (isset($_POST['__contaminant_']))
            update_post_meta($post_id, '__contaminant_', esc_attr($_POST['__contaminant_']));
        if (isset($_POST['__security_']))
            update_post_meta($post_id, '__security_', esc_attr($_POST['__security_']));
        if (isset($_POST['__co2_']))
            update_post_meta($post_id, '__co2_', esc_attr($_POST['__co2_']));
        if (isset($_POST['__brake_']))
            update_post_meta($post_id, '__brake_', esc_attr($_POST['__brake_']));
        if (isset($_POST['__air_bag_']))
            update_post_meta($post_id, '__air_bag_', esc_attr($_POST['__air_bag_']));
        if (isset($_POST['__sound_system_']))
            update_post_meta($post_id, '__sound_system_', esc_attr($_POST['__sound_system_']));
        if (isset($_POST['__others_']))
            update_post_meta($post_id, '__others_', esc_attr($_POST['__others_']));
    }

    public static function __html($post)
    {
        wp_nonce_field('___nonce', '__nonce'); ?>

        <p>
            <label for="__origin_"><?php _e('origin:', '_'); ?></label><br>
            <input type="text" name="__origin_" id="__origin_" value="<?php echo self::__get_meta('__origin_'); ?>">
        </p>    <p>
        <label for="__year_"><?php _e('year:', '_'); ?></label><br>
        <input type="text" name="__year_" id="__year_" value="<?php echo self::__get_meta('__year_'); ?>">
    </p>    <p>
        <label for="__motor_"><?php _e('motor:', '_'); ?></label><br>
        <input type="text" name="__motor_" id="__motor_" value="<?php echo self::__get_meta('__motor_'); ?>">
    </p>    <p>
        <label for="__motor_capacity_"><?php _e('motor_capacity:', '_'); ?></label><br>
        <input type="text" name="__motor_capacity_" id="__motor_capacity_"
               value="<?php echo self::__get_meta('__motor_capacity_'); ?>">
    </p>    <p>
        <label for="__max_power_"><?php _e('max_power:', '_'); ?></label><br>
        <input type="text" name="__max_power_" id="__max_power_"
               value="<?php echo self::__get_meta('__max_power_'); ?>">
    </p>    <p>
        <label for="__max_torque_"><?php _e('max_torque:', '_'); ?></label><br>
        <input type="text" name="__max_torque_" id="__max_torque_"
               value="<?php echo self::__get_meta('__max_torque_'); ?>">
    </p>    <p>
        <label for="__gear_box_"><?php _e('gear_box:', '_'); ?></label><br>
        <input type="text" name="__gear_box_" id="__gear_box_" value="<?php echo self::__get_meta('__gear_box_'); ?>">
    </p>    <p>
        <label for="__acceleration_"><?php _e('acceleration:', '_'); ?></label><br>
        <input type="text" name="__acceleration_" id="__acceleration_"
               value="<?php echo self::__get_meta('__acceleration_'); ?>">
    </p>    <p>
        <label for="__max_velocity_"><?php _e('max_velocity:', '_'); ?></label><br>
        <input type="text" name="__max_velocity_" id="__max_velocity_"
               value="<?php echo self::__get_meta('__max_velocity_'); ?>">
    </p>    <p>
        <label for="__weight_"><?php _e('weight:', '_'); ?></label><br>
        <input type="text" name="__weight_" id="__weight_" value="<?php echo self::__get_meta('__weight_'); ?>">
    </p>    <p>
        <label for="__size_"><?php _e('size:', '_'); ?></label><br>
        <input type="text" name="__size_" id="__size_" value="<?php echo self::__get_meta('__size_'); ?>">
    </p>    <p>
        <label for="__space_"><?php _e('space:', '_'); ?></label><br>
        <input type="text" name="__space_" id="__space_" value="<?php echo self::__get_meta('__space_'); ?>">
    </p>    <p>
        <label for="__fuel_in_"><?php _e('fuel_in:', '_'); ?></label><br>
        <input type="text" name="__fuel_in_" id="__fuel_in_" value="<?php echo self::__get_meta('__fuel_in_'); ?>">
    </p>    <p>
        <label for="__fuel_out_"><?php _e('fuel_out:', '_'); ?></label><br>
        <input type="text" name="__fuel_out_" id="__fuel_out_" value="<?php echo self::__get_meta('__fuel_out_'); ?>">
    </p>    <p>
        <label for="__fuel_mixed_"><?php _e('fuel_mixed:', '_'); ?></label><br>
        <input type="text" name="__fuel_mixed_" id="__fuel_mixed_"
               value="<?php echo self::__get_meta('__fuel_mixed_'); ?>">
    </p>    <p>
        <label for="__tank_"><?php _e('tank:', '_'); ?></label><br>
        <input type="text" name="__tank_" id="__tank_" value="<?php echo self::__get_meta('__tank_'); ?>">
    </p>    <p>
        <label for="__contaminant_"><?php _e('contaminant:', '_'); ?></label><br>
        <input type="text" name="__contaminant_" id="__contaminant_"
               value="<?php echo self::__get_meta('__contaminant_'); ?>">
    </p>    <p>
        <label for="__security_"><?php _e('security:', '_'); ?></label><br>
        <input type="text" name="__security_" id="__security_" value="<?php echo self::__get_meta('__security_'); ?>">
    </p>    <p>
        <label for="__co2_"><?php _e('co2:', '_'); ?></label><br>
        <input type="text" name="__co2_" id="__co2_" value="<?php echo self::__get_meta('__co2_'); ?>">
    </p>    <p>
        <label for="__brake_"><?php _e('brake:', '_'); ?></label><br>
        <input type="text" name="__brake_" id="__brake_" value="<?php echo self::__get_meta('__brake_'); ?>">
    </p>    <p>
        <label for="__air_bag_"><?php _e('air_bag:', '_'); ?></label><br>
        <input type="text" name="__air_bag_" id="__air_bag_" value="<?php echo self::__get_meta('__air_bag_'); ?>">
    </p>    <p>
        <label for="__sound_system_"><?php _e('sound_system:', '_'); ?></label><br>
        <input type="text" name="__sound_system_" id="__sound_system_"
               value="<?php echo self::__get_meta('__sound_system_'); ?>">
    </p>    <p>
        <label for="__others_"><?php _e('others:', '_'); ?></label><br>
        <input type="text" name="__others_" id="__others_" value="<?php echo self::__get_meta('__others_'); ?>">
    </p>
        <?php
    }
}