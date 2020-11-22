<?php
    $i = 1;
?>
<section id="vb_ship">
    <div class="vb_absolute_green"></div>
    <div class="container">
        <div class="vb_flex_ship">
            <div class="vb_flex_ship_left">
                <h2 class="vb_title_section"><?php the_field('title'); ?></h2>
                <?php
                    if( have_rows('steps') ):

                        // Loop through rows.
                        while( have_rows('steps') ) : the_row();
                ?>
                <div class="vb_ship_row <?php echo $i == 1 ? 'active' : ''; ?>">
                    <img src="<?php the_sub_field('image') ?>" />
                    <span>0<?php echo $i; ?></span>
                    <p><?php the_sub_field('title') ?></p>
                </div>
                <?php
                        $i++;
                        endwhile;
                    endif;
                ?>

            </div>
            <div class="vb_flex_ship_right">
                <div class="vb_absolute_circle"></div>
                <div class="vb_absolute_orange"></div>
                <img class="vb_blackman" src="<?php the_field('right_image'); ?>">
            </div>
        </div>
    </div>
</section>