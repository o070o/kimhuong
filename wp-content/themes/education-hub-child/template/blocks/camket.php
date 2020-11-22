<section id="vb_whychooseus">
    <div class="container">
        <p class="vb_head_title"><?php the_field('subtitle'); ?></p>
        <h2 class="vb_title_section"><?php the_field('title'); ?></h2>
        <div class="vb_foot_title"><?php the_field('content'); ?></div>
        <div class="vb_border_title"></div>
        <div class="vb_flex_whychooseus">
            <?php
                if( have_rows('cam_ket') ):
                    // Loop through rows.
                    while( have_rows('cam_ket') ) : the_row();
            ?>
            <div class="vb_whychooseus_block">
                <img src="<?php the_sub_field('image') ?>" />
                <p class="vb_whychooseus_block_title"><?php the_sub_field('title') ?></p>
                <p class="vb_whychooseus_block_content">
                    <?php the_sub_field('content') ?>
                </p>
            </div>
            <?php
                    endwhile;
                endif;
            ?>
        </div>
    </div>
    <div class="vb_whychooseus_absolute_top"></div>
    <div class="vb_whychooseus_absolute_bottom"></div>
</section>