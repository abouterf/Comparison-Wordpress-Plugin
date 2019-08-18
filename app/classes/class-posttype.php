<?php

class PostType
{
    public static function register_cars_post_type()
    {
        $labels = array(
            'name' => 'خودروها',
            'singular_name' => 'خودرو',
            'menu_name' => 'خودرو',
            'name_admin_bar' => 'خودرو',
            'add_new' => 'افزودن',
            'add_new_item' => 'افزودن',
            'new_item' => 'خودرو جدید',
            'edit_item' => 'ویرایش خودرو',
            'view_item' => 'نمایش خودرو',
            'all_items' => 'همه موارد',
            'search_items' => 'جستجوی موارد',
            'parent_item_colon' => 'خودروهای والد',
            'not_found' => 'خودروی یافت نشد.',
            'not_found_in_trash' => 'خودروی در سطل زباله یافت نشد.',
            'featured_image' => 'تصویر خودرو',
            'set_featured_image' => 'تنظیم تصویر خودرو',
            'remove_featured_image' => 'حذف تصویر خودرو',
            'use_featured_image' => __('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
            'archives' => 'آرشیو خودروها',
            'insert_into_item' => 'افزودن موارد',
            'uploaded_to_this_item' => __('Uploaded to this item', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
            'filter_items_list' => 'فیلتر کردن لیست خودروها',
            'items_list_navigation' => 'هدایت لیست خودروها',
            'items_list' => 'لیست خودروها',
        );
        $args = array(
            'label' => __('خودروها', 'twentythirteen'),
            'labels' => $labels,
            // Features this CPT supports in Post Editor
            'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
            // You can associate this CPT with a taxonomy or custom taxonomy.
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'show_in_admin_bar' => true,
            'menu_position' => 3,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'page',
            'menu_icon' => PLUGIN_URL . "assets/img/car.png",
        );

        register_post_type('cars', $args);
    }

    public static function register_cars_taxonomy()
    {
        register_taxonomy('car-models', 'cars', array('label' => 'مدل ماشین'));
    }

    public static function default_columns_head($columns)
    {
        $columns['brand'] = 'برند';
        return $columns;
    }

    public static function default_columns_content($columns, $post_id)
    {
        if ($columns == 'brand') {
            $terms = wp_get_post_terms($post_id, 'car-models', array("fields" => "names"));
            echo $terms[0];
        }
    }

    public static function remove_post_type_support()
    {
        remove_post_type_support( 'cars', 'editor' );
    }

}