<?php
    $i = 0;
?>
<section id="vb_feedback">
    <div class="container">
        <div class="vb_feedback_header">
            <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_quote.svg" />
            <h2 class="vb_title_section"><?php the_field('title'); ?></h2>
        </div>
        <div class="vb_feedback_absolute_circle"></div>
        <div class="vb_feedback_slider">
            <img class="vb_feedback_absolute_bottom" src="https://vietbox.vn/wp-content/uploads/2019/12/absolute.svg" />
            <div class="vb_slideshow-container">
                <?php
                    if( have_rows('testimonials') ):
                        // Loop through rows.
                        while( have_rows('testimonials') ) : the_row();
                ?>
                <div class="vb_mySlides vb_fade" style="display: <?php echo $i == 0 ? 'block' : 'none' ?>;">
                    <img class="vb_mySlides_product" src="<?php the_sub_field('image'); ?>" />
                    <img class="vb_mySlides_rating" src="http://baobikimxuong.com/wp-content/uploads/2020/11/w_sanpham_ngoisao.png" />
                    <p class="vb_slide_title">
                        <?php the_sub_field('review'); ?>
                    </p>
                    <p class="vb_slide_name"><?php the_sub_field('name'); ?></p>
                    <p class="vb_slide_job"><?php the_sub_field('company'); ?></p>
                </div>
                <?php
                        $i++;
                        endwhile;
                    endif;
                ?>
            </div>

            <a class="vb_prev" onclick="vb_plusSlides(-1)">❮</a>
            <a class="vb_next" onclick="vb_plusSlides(1)">❯</a>

            <div class="vb_dot-container" style="display:none">
                <span class="vb_dot active" onclick="vb_currentSlide(1)"></span>
                <span class="vb_dot" onclick="vb_currentSlide(2)"></span>
                <span class="vb_dot" onclick="vb_currentSlide(3)"></span>
                <span class="vb_dot" onclick="vb_currentSlide(4)"></span>
            </div>

        </div>
        <a href="tel:<?php the_field('phone', 'option') ?>" class="vb_feedback_footer_button">
            Gọi đặt hàng
        </a>
    </div>
</section>