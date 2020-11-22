<?php

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

//Education Hub Child Theme

add_action( 'wp_enqueue_scripts', 'load_child_theme_enqueue_scripts' );
function load_child_theme_enqueue_scripts(){

    //Education Hub child theme stylesheet css file
    wp_enqueue_style('education-hub-style', get_template_directory_uri() . '/style.css' );
    //Education Hub child theme stylesheet css file
    wp_enqueue_style('child-theme-css', get_stylesheet_uri());

    //Education Hub child theme javascript js file
    wp_enqueue_script('child-theme-js', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0', true );
}

/* CUSTOM PHP CODE GOES HERE */

add_action('wp_footer', 'n2t_print_footer');
function n2t_print_footer(){
    ?>
<div class="vb_footer_new">
    <div class="container">
        <div class="vb_footer_block_1">
            <a href="tel:<?php the_field('phone', 'option') ?>" class="vb_footer_row_info">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span><?php the_field('phone', 'option') ?></span>
            </a>
            <a href="mailto:<?php the_field('email', 'option') ?>" class="vb_footer_row_info">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span><?php the_field('email', 'option') ?></span>
            </a>
            <div class="vb_footer_row_place">
                <span>Địa chỉ</span>
                <a target="_blank" href="http://maps.google.com/?q=<?php the_field('address', 'option') ?>" rel="noopener noreferrer"><?php the_field('address', 'option') ?></a>
            </div>
        </div>
        <div class="vb_footer_block_2">
            <p class="vb_footer_header_bold">Sản phẩm nổi bật</p>
            <ul class="vb_footer_list">
                <?php wp_nav_menu( array( 'items_wrap' => '%3$s', 'theme_location' => 'footer_menu_1' ) ); ?>
            </ul>
        </div>
        <div class="vb_footer_block_2">
            <p class="vb_footer_header_bold">Thông tin khác</p>
            <ul class="vb_footer_list">
                <?php wp_nav_menu( array( 'items_wrap' => '%3$s', 'theme_location' => 'footer_menu_2' ) ); ?>
            </ul>
        </div>
        <div class="vb_footer_block_2 vb_footer_block_3">
            <p class="vb_footer_header_bold">Đăng ký nhận tin</p>
            <p class="vb_footer_register_title">Đăng ký để nhận tin khuyến mãi</p>
            <div class="vb_footer_register_input">
                <input type="email" placeholder="Nhập Email của bạn..">
            </div>
            <div class="vb_footer_socials">
                <a target="_blank" href="<?php the_field('facebook', 'option') ?>" rel="noopener noreferrer">
                    <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_social_facebook.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_social_facebook.svg">
                </a>
                <a target="_blank" href="https://zalo.me/<?php the_field('phone', 'option') ?>" rel="noopener noreferrer">
                    <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_social_zalo.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_social_zalo.svg">
                </a>
            </div>
        </div>
    </div>
</div>
    <?php
}

add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register a posts block.
        acf_register_block_type(array(
            'name' => 'gioithieu',
            'title' => __('Giới Thiệu Công Ty'),
            'description' => __('About Us block.'),
            'render_template' => 'template/blocks/gioithieu.php',
            'category' => 'common',
            'mode' => 'edit'
        ));

        acf_register_block_type(array(
            'name' => 'doitac',
            'title' => __('Đối Tác'),
            'description' => __('Đối Tác block.'),
            'render_template' => 'template/blocks/doitac.php',
            'category' => 'common',
            'mode' => 'edit'
        ));

        acf_register_block_type(array(
            'name' => 'quytrinh',
            'title' => __('Quy Trình'),
            'description' => __('Quy Trình block.'),
            'render_template' => 'template/blocks/quytrinh.php',
            'category' => 'common',
            'mode' => 'edit'
        ));

        acf_register_block_type(array(
            'name' => 'products',
            'title' => __('Sản Phẩm'),
            'description' => __('Sản Phẩm block.'),
            'render_template' => 'template/blocks/products.php',
            'category' => 'common',
            'mode' => 'edit'
        ));

        acf_register_block_type(array(
            'name' => 'featured_products',
            'title' => __('Sản Phẩm Tiêu Biểu'),
            'description' => __('Sản Phẩm Tiêu Biểu block.'),
            'render_template' => 'template/blocks/featured_products.php',
            'category' => 'common',
            'mode' => 'edit'
        ));

        acf_register_block_type(array(
            'name' => 'dathang',
            'title' => __('Đặt Hàng'),
            'description' => __('Đặt Hàng block.'),
            'render_template' => 'template/blocks/dathang.php',
            'category' => 'common',
            'mode' => 'edit'
        ));

        acf_register_block_type(array(
            'name' => 'camket',
            'title' => __('Cam Kết'),
            'description' => __('Cam Kết block.'),
            'render_template' => 'template/blocks/camket.php',
            'category' => 'common',
            'mode' => 'edit'
        ));

        acf_register_block_type(array(
            'name' => 'testimonials',
            'title' => __('Testimonials'),
            'description' => __('Testimonials block.'),
            'render_template' => 'template/blocks/testimonials.php',
            'category' => 'common',
            'mode' => 'edit'
        ));
    }
}
function n2t_register_nav_menu(){
    register_nav_menus( array(
        'footer_menu_1' => __( 'Footer Menu 1', 'text_domain' ),
        'footer_menu_2'  => __( 'Footer Menu 2', 'text_domain' ),
    ) );
}
add_action( 'after_setup_theme', 'n2t_register_nav_menu' );
