<section id="vb_contactform">
    <div class="container">
        <div class="vb_contacform_flex">
            <img class="vb_contacform_absolute_left" src="<?php echo get_stylesheet_directory_uri() ?>/images/absolute.svg" />
            <div class="vb_contacform_flex_left">
                <h2 class="vb_title_section"><?php the_field('title'); ?></h2>
                <div class="vb_border_title"></div>
                <?php the_field('content'); ?>
            </div>
            <div class="vb_contacform_flex_right">
                <div class="vb_contacform_flex_right_absolute"></div>
                <div class="vb_info_company">
                    <div class="vb_info_company_row">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div class="vb_info_company_row_social_input">
                            <p class="active">Điện thoại</p>
                            <a class="active" href="tel:<?php the_field('phone', 'option') ?>"><?php the_field('phone', 'option') ?></a>
                        </div>
                    </div>
                    <div class="vb_info_company_row">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <div class="vb_info_company_row_social_input">
                            <p>Facebook</p>
                            <a target="_blank" href="<?php the_field('facebook', 'option') ?>" rel="noopener noreferrer"><?php the_field('facebook', 'option') ?></a>
                        </div>
                    </div>
                    <div class="vb_info_company_row">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <div class="vb_info_company_row_social_input">
                            <p>Email</p>
                            <a href="mailto:<?php the_field('email', 'option') ?>"><?php the_field('email', 'option') ?></a>
                        </div>
                    </div>
                    <div class="vb_info_company_row">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <div class="vb_info_company_row_social_input">
                            <p>Địa chỉ</p>
                            <a target="_blank" href="#" rel="noopener noreferrer"><?php the_field('address', 'option') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>