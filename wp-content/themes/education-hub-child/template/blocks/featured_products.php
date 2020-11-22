<?php
    $i = 0;
    $j = 0;
    $products = get_field('san_pham');
?>
<section id="vb_hotproduct" class="sec_hotproduct">
    <div class="container">
        <h2 class="vb_title_section"><?php the_field('title'); ?></h2>
        <div class="vb_products">
            <div class="vb_tab">
                <?php
                    if(!empty($products)){
                        foreach ($products as $product){
                ?>
                <button class="vb_tablinks <?php echo $i == 0 ? 'active' : ''; ?>" onclick="openProduct(event, '<?php echo 'pd_'.$product->ID ?>')" <?php echo $i == 0 ? 'id="defaultOpen"' : ''; ?>>
                    <img src="<?php echo get_the_post_thumbnail_url($product->ID); ?>">
                </button>
                <?php
                            $i++;
                        }
                    }
                ?>
            </div>
            <div class="vb_tabcontent">
                <?php
                    if(!empty($products)){
                        foreach ($products as $product){
                ?>
                <div id="<?php echo 'pd_'.$product->ID ?>" class="tabcontent" style="display: <?php echo $j == 0 ? 'flex' : 'none'; ?>;">
                    <img src="<?php echo get_the_post_thumbnail_url($product->ID, 'full'); ?>" />
                    <div class="vb_tab_content">
                        <h3><?php echo $product->post_title; ?></h3>
                        <img class="vb_star" src="http://baobikimxuong.com/wp-content/uploads/2020/11/w_sanpham_ngoisao.png" />
                        <p class="vb_tab_text"><?php echo $product->post_excerpt; ?></p>
                        <a class="vb_price_link" href="#">Xem bảng giá</a>
                        <div class="block_btn_slider">
                            <a href="tel:<?php the_field('phone', 'option') ?>" class="con_btn kk_btn_slider btn_effect">
                                Gọi đặt hàng
                                <span><img class="i_button lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/icon_contact.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/icon_contact.svg" scale="0" data-was-processed="true"></span>
                            </a>
                        </div>
                        <a href="https://zalo.me/<?php the_field('zalo', 'option') ?>" class="btn_call_zalo">Gọi zalo</a>
                    </div>
                </div>
                <?php
                            $j++;
                        }
                    }
                ?>
            </div>
            <div class="vb_border_right">
            </div>
        </div>
    </div>
</section>