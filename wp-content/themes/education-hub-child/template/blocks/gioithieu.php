<section id="vb_header" class="sec_header">
    <div class="container">
    <span class="vb_header_title"><?php the_field('title'); ?></span>
    <div class="vb_header_flex">
        <div class="vb_header_flex_left">
            <?php the_field('content'); ?>
            <div class="block_btn_slider">
                <a href="tel:<?php the_field('phone', 'option') ?>" class="con_btn kk_btn_slider btn_effect">
                    Gọi đặt hàng
                    <span>
                        <img class="i_button lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/icon_contact.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/icon_contact.svg" scale="0" data-was-processed="true">
                    </span>
                </a>
            </div>
            <div class="vb_button_before"></div>
        </div>
        <div class="vb_header_flex_right">
            <img src="<?php the_field('right_image'); ?>" />
        </div>
    </div>
    <div class="vb_header_absolute">
        <div class="vb_header_absolute_circle"></div>
        <div class="vb_header_absolute_green"></div>
        <div class="vb_header_absolute_grey"></div>
    </div>
    </div>
</section>