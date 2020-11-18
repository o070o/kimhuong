<?php

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
            <img class="vb_footer_logo lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_fotter_logo.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_fotter_logo.svg" scale="0" data-was-processed="true">
            <a href="tel:<?php the_field('phone', 'option') ?>" class="vb_footer_row_info">
                <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_icon_call.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_icon_call.svg" scale="0" data-was-processed="true">
                <span><?php the_field('phone', 'option') ?></span>
            </a>
            <a href="mailto:<?php the_field('email', 'option') ?>" class="vb_footer_row_info">
                <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_icon_mail.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_icon_mail.svg" scale="0" data-was-processed="true">
                <span><?php the_field('email', 'option') ?></span>
            </a>
            <div class="vb_footer_row_place">
                <span>Địa chỉ</span>
                <a target="_blank" href="http://maps.google.com/?q=188 Hiền Vương, Phú Thạnh, Tân Phú, Hồ Chí Minh, Vietnam" rel="noopener noreferrer"><?php the_field('address', 'option') ?></a>
            </div>
        </div>
        <div class="vb_footer_block_2">
            <p class="vb_footer_header_bold">Sản phẩm nổi bật</p>
            <ul class="vb_footer_list">
                <li><a href="https://vietbox.vn/thung-giay-carton-gia-re-tai-tp-hcm/">Thùng Giấy Carton</a></li>
                <li><a href="https://vietbox.vn/mua-ban-bang-keo-gia-si-tphcm/">Băng Keo</a></li>
                <li><a href="https://vietbox.vn/mang-pe/">Màng PE</a></li>
                <li><a href="https://vietbox.vn/tui-ni-long/">Túi Ni Lông</a></li>
                <li><a href="https://vietbox.vn/mang-xop-hoi-xop-bop-no-xop-khi/">Màng Xốp Hơi</a></li>
            </ul>
        </div>
        <div class="vb_footer_block_2">
            <p class="vb_footer_header_bold">Thông tin khác</p>
            <ul class="vb_footer_list">
                <li><a href="https://vietbox.vn/in-thung-carton-gia-re-tphcm/">In Thùng Carton</a></li>
                <li><a href="https://vietbox.vn/in-tui-nilon-gia-re-tphcm/">In Túi Ni Lông</a></li>
                <li><a href="https://vietbox.vn/category/tin-tuc/">Tin Tức</a></li>
                <li><a href="https://vietbox.vn/thanh-toan/">Thanh Toán</a></li>
                <li><a href="https://vietbox.vn/lien-he/">Liên Hệ</a></li>
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
                    <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_social_facebook.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_social_facebook.svg" scale="0" data-was-processed="true">
                </a>
                <a target="_blank" href="https://zalo.me/<?php the_field('phone', 'option') ?>" rel="noopener noreferrer">
                    <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_social_zalo.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_social_zalo.svg" scale="0" data-was-processed="true">
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
    }
}
				