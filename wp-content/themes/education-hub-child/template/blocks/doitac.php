<section id="vb_partner">
    <div class="container">
        <p class="vb_head_title"><?php the_field('subtitle'); ?></p>
        <h2 class="vb_title_section"><?php the_field('title'); ?></h2>
        <p class="vb_foot_title"><?php the_field('content'); ?></p>
        <div class="vb_partner_flex">
            <?php
            $i = 1;
                $logos = get_field('client_logos');
                if(!empty($logos)){
                    foreach ($logos as $logo){
            ?>
            <div class="vb_partner_stt<?php echo $i; ?>">
                <img src="<?php echo $logo ?>" />
            </div>
            <?php
                        $i++;
                    }
                }
            ?>
        </div>
    </div>
</section>