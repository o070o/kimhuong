<section id="vb_tagproducts">
    <div class="container">
        <div class="vb_tagproducts_flex_header">
            <div class="vb_tagproducts_flex_header_left">
                <h2 class="vb_title_section"><?php the_field('title'); ?></h2>
                <p class="vb_foot_title"><?php the_field('subtitle'); ?></p>
                <img class="vb_foot_border lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_tag_border.svg">
            </div>
            <div class="vb_tagproducts_flex_header_right">
                <div class="vb_tagproducts_hotline">
                    <p class="vb_tagproducts_hotline_title">Gọi đặt hàng</p>
                    <a href="tel:<?php the_field('phone', 'option') ?>" class="vb_tagproducts_hotline_callnow"><?php the_field('phone', 'option') ?></a>
                </div>
            </div>
        </div>
        <div class="vb_tagproducts_flex_content">
            <?php
                if( have_rows('products') ):
                    // Loop through rows.
                    while( have_rows('products') ) : the_row();
            ?>
            <div class="vb_tagproducts_flex_content_col">
                <div class="vb_tagproducts_col_title">
                    <p class="vb_tagproducts_col_title_1"><?php the_sub_field('title'); ?></p>
                </div>
                <div class="vb_tagproducts_col_content">
                    <div class="vb_tagproducts_col_list">
                        <?php the_sub_field('tags'); ?>
                    </div>
                    <a href="<?php the_field('link'); ?>" class="vb_tagproducts_col_listall">Tất cả <?php the_sub_field('title'); ?></a>
                </div>
            </div>
            <?php
                    endwhile;
                endif;
            ?>
        </div>
    </div>
</section>