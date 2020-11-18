<?php
/**
 * The template for home page.
 *
 * Template Name: Home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Education_Hub
 */

get_header(); the_post(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <div class="vietbox_new">
                        <section id="vb_header" class="sec_header">
                            <div class="container">
                            <span class="vb_header_title">Công ty TNHH KIM XƯƠNG</span>
                            <div class="vb_header_flex">
                                <div class="vb_header_flex_left">
                                    <?php the_content(); ?>
                                    <div class="block_btn_slider"><a href="tel:<?php the_field('phone', 'option') ?>" class="con_btn kk_btn_slider btn_effect">Gọi đặt hàng<span><img class="i_button lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/icon_contact.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/icon_contact.svg" scale="0" data-was-processed="true"></span></a></div>
                                    <div class="vb_button_before"></div>
                                </div>
                                <div class="vb_header_flex_right">
                                    <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/banner.png" data-src="https://vietbox.vn/wp-content/uploads/2019/12/banner.png" scale="0" data-was-processed="true">
                                </div>
                            </div>
                            <div class="vb_header_absolute">
                                <div class="vb_header_absolute_circle"></div>
                                <div class="vb_header_absolute_green"></div>
                                <div class="vb_header_absolute_grey"></div>
                            </div>
                            </div>
                        </section>
                        <section id="vb_hotproduct" class="sec_hotproduct">
                            <div class="container">
                                <h2 class="vb_title_section">Sản phẩm nổi bật</h2>
                                <div class="vb_products">
                                    <div class="vb_tab">
                    <button class="vb_tablinks active" onclick="openProduct(event, 'pdthunggiay')" id="defaultOpen"><img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_box.png" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_box.png" scale="0" data-was-processed="true"></button>
                    <button class="vb_tablinks" onclick="openProduct(event, 'pdmangxophoi')"><img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_mangxophoi.jpg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_mangxophoi.jpg" scale="0" data-was-processed="true"></button>
                    <button class="vb_tablinks" onclick="openProduct(event, 'pdmangpe')"><img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_mangpe.png" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_mangpe.png" scale="0" data-was-processed="true"></button>
                    <button class="vb_tablinks" onclick="openProduct(event, 'pdtuinilong')"><img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_tui.png" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_tui.png" scale="0" data-was-processed="true"></button>
                                    </div>
                                    <div class="vb_tabcontent">
                                        <div id="pdthunggiay" class="tabcontent" style="display: flex;">
                                            <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_box.png" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_box.png" scale="0" data-was-processed="true">
                                            <div class="vb_tab_content">
                                                <h3>Thùng Giấy Carton</h3>
                                                <img class="vb_star lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_sanpham_ngoisao.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_sanpham_ngoisao.svg" scale="0" data-was-processed="true">
                                                <p class="vb_tab_text">Vinh dự là một trong TOP 10 đơn vị chuyên cung cấp thùng carton hàng đầu Việt Nam hiện nay. Công ty TNHH Kim Xương cung cấp đủ 3 loại thùng với mẫu mã đa dạng, bao gồm: Thùng giấy carton 3 lớp, 5 lớp, 7 lớp..</p>
                                                <a class="vb_price_link" href="https://vietbox.vn/thung-giay-carton-gia-re-tai-tp-hcm/">Xem bảng giá</a>
                                                <div class="block_btn_slider"><a href="tel:<?php the_field('phone', 'option') ?>" class="con_btn kk_btn_slider btn_effect">Gọi đặt hàng<span><img class="i_button lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/icon_contact.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/icon_contact.svg" scale="0" data-was-processed="true"></span></a></div>
                                                <a href="https://zalo.me/<?php the_field('zalo', 'option') ?>" class="btn_call_zalo">Gọi zalo</a>
                                            </div>
                                        </div>
                                        <div id="pdmangxophoi" class="tabcontent" style="display: none;">
                                            <img class="lazy loaded" data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" src="https://vietbox.vn/wp-content/uploads/2019/12/w_mangxophoi.jpg" scale="0">
                                            <div class="vb_tab_content">
                                                <h3>Màng Xốp Hơi</h3>
                                                <img class="vb_star lazy loaded" data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" src="https://vietbox.vn/wp-content/uploads/2019/12/w_sanpham_ngoisao.svg" scale="0">
                                                <p class="vb_tab_text">Công ty TNHH Kim Xương cung cấp màng xốp hơi dạng cuộn tròn có chứa nhiều túi khí có màu trong suốt, êm và mềm mại với đường kính bóng khí là 10mm. Kích thước đa dạng như loại 1,4m x 100m hoặc 0,7m x 100m… </p>
                                                <a class="vb_price_link" href="https://vietbox.vn/mang-xop-hoi-xop-bop-no-xop-khi/">Xem bảng giá</a>
                                                <div class="block_btn_slider"><a href="tel:<?php the_field('phone', 'option') ?>" class="con_btn kk_btn_slider btn_effect">Gọi đặt hàng<span><img class="i_button lazy" data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20%20'%3E%3C/svg%3E" src="https://vietbox.vn/wp-content/uploads/2019/12/icon_contact.svg" scale="0"></span></a></div>
                                                <a href="https://zalo.me/<?php the_field('zalo', 'option') ?>" class="btn_call_zalo">Gọi zalo</a>
                                            </div>
                                        </div>
                                        <div id="pdmangpe" class="tabcontent" style="display: none;">
                                            <img class="lazy" data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" src="https://vietbox.vn/wp-content/uploads/2019/12/w_mangpe.png" scale="0">
                                            <div class="vb_tab_content">
                                                <h3>Màng PE</h3>
                                                <img class="vb_star lazy" data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" src="https://vietbox.vn/wp-content/uploads/2019/12/w_sanpham_ngoisao.svg" scale="0">
                                                <p class="vb_tab_text">Màng PE hay màng bọc thực phẩm được Công ty TNHH Kim Xương sản xuất đủ loại kích thước với độ mỏng, dai và tính co dãn cao. 100% được làm từ nhựa PE với hai kích thước được mua nhiều từ 25cm đến 50cm…</p>
                                                <a class="vb_price_link" href="https://vietbox.vn/mang-pe/">Xem bảng giá</a>
                                                <div class="block_btn_slider"><a href="tel:<?php the_field('phone', 'option') ?>" class="con_btn kk_btn_slider btn_effect">Gọi đặt hàng<span><img class="i_button lazy" data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20%20'%3E%3C/svg%3E" src="https://vietbox.vn/wp-content/uploads/2019/12/icon_contact.svg" scale="0"></span></a></div>
                                                <a href="https://zalo.me/<?php the_field('zalo', 'option') ?>" class="btn_call_zalo">Gọi zalo</a>
                                            </div>
                                        </div>
                                        <div id="pdtuinilong" class="tabcontent" style="display: none;">
                                            <img class="lazy" data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" src="https://vietbox.vn/wp-content/uploads/2019/12/w_tui.png" scale="0">
                                            <div class="vb_tab_content">
                                                <h3>Túi ni lông</h3>
                                                <img class="vb_star data-lazy" data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" src="https://vietbox.vn/wp-content/uploads/2019/12/w_sanpham_ngoisao.svg" scale="0">
                                                <p class="vb_tab_text">Công ty TNHH Kim Xương chuyên bỏ sỉ các loại túi hột xoài HD, PE dẻo, túi đựng rác… với đầy đủ kích thước. Ngoài ra, chúng tôi còn cung cấp dịch vụ in ấn số lượng lớn với thiết kế hoàn toàn miễn phí.</p>
                                                <a class="vb_price_link" href="https://vietbox.vn/tui-ni-long/">Xem bảng giá</a>
                                                <div class="block_btn_slider"><a href="tel:<?php the_field('phone', 'option') ?>" class="con_btn kk_btn_slider btn_effect">Gọi đặt hàng<span><img class="i_button lazy" data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20%20'%3E%3C/svg%3E" src="https://vietbox.vn/wp-content/uploads/2019/12/icon_contact.svg" scale="0"></span></a></div>
                                                <a href="https://zalo.me/<?php the_field('zalo', 'option') ?>" class="btn_call_zalo">Gọi zalo</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vb_border_right">
                                    </div>
                                </div>
                            </div>
                        </section>
                    <section id="vb_ship">
                            <div class="vb_absolute_green"></div>
                            <div class="container">
                                <div class="vb_flex_ship">
                                    <div class="vb_flex_ship_left">
                                        <h2 class="vb_title_section">Quy trình đặt hàng</h2>
                                        <div class="vb_ship_row active">
                                            <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_dathang_01.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_dathang_01.svg" scale="0" data-was-processed="true">
                                            <span>01</span>
                                            <p>Tiếp nhận yêu cầu khách hàng.</p>
                                        </div>
                                        <div class="vb_ship_row">
                                            <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_dathang_02.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_dathang_02.svg" scale="0" data-was-processed="true">
                                            <span>02</span>
                                            <p>Thiết kế và in mẫu Demo (nếu khách có nhu cầu).</p>
                                        </div>
                                        <div class="vb_ship_row">
                                            <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_dathang_03.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_dathang_03.svg" scale="0" data-was-processed="true">
                                            <span>03</span>
                                            <p>Khách duyệt mẫu và ký hợp đồng.</p>
                                        </div>
                                        <div class="vb_ship_row">
                                            <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_dathang_04.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_dathang_04.svg" scale="0" data-was-processed="true">
                                            <span>04</span>
                                            <p>Tiến hành sản xuất hàng loạt (quá trình này mất khoảng 5 – 10 ngày).</p>
                                        </div>
                                        <div class="vb_ship_row">
                                            <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_dathang_05.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_dathang_05.svg" scale="0" data-was-processed="true">
                                            <span>05</span>
                                            <p>Giao tận nơi miễn phí.</p>
                                        </div>
                                    </div>
                                    <div class="vb_flex_ship_right">
                                        <div class="vb_absolute_circle"></div>
                                        <div class="vb_absolute_orange"></div>
                                        <img class="vb_blackman lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_man.png" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_man.png" scale="0" data-was-processed="true">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id="vb_whychooseus">
                            <div class="container">
                                <p class="vb_head_title">Công ty TNHH Kim Xương</p>
                                <h2 class="vb_title_section">Sản phẩm nổi bật</h2>
                                <p class="vb_foot_title">Công ty TNHH Kim Xương cam kết cung cấp bao bì giá tốt nhất thị trường. Nhưng đồng thời vẫn đảm bảo 100% chất lượng sản phẩm với số lượng cả nhỏ lẫn lớn.</p>
                                <div class="vb_border_title"></div>
                                <div class="vb_flex_whychooseus">
                                    <div class="vb_whychooseus_block">
                                        <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_camket_giatotnhat.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_camket_giatotnhat.svg" scale="0" data-was-processed="true">
                                        <p class="vb_whychooseus_block_title">Giá tốt nhất</p>
                                        <p class="vb_whychooseus_block_content"><span>Công ty TNHH Kim Xương</span> luôn là địa chỉ cung cấp bao bì giá tốt nhất thị trường. Nhưng đồng thời cũng đảm bảo về chất lượng sản phẩm.</p>
                                    </div>
                                    <div class="vb_whychooseus_block">
                                        <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_camket_100chatluong.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_camket_100chatluong.svg" scale="0" data-was-processed="true">
                                        <p class="vb_whychooseus_block_title">100% chất lượng</p>
                                        <p class="vb_whychooseus_block_content">Mỗi sản phẩm được Công ty TNHH Kim Xương đưa ra thị trường đều đã được kiểm định chất lượng nghiêm ngặt.</p>
                                    </div>
                                    <div class="vb_whychooseus_block">
                                        <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_camket_giatotnhat_soluonglon.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_camket_giatotnhat_soluonglon.svg" scale="0" data-was-processed="true">
                                        <p class="vb_whychooseus_block_title">Số lượng lớn</p>
                                        <p class="vb_whychooseus_block_content">Cung cấp cho doanh nghiệp vừa và lớn với số lượng lớn. (Từ 100 – 100.000 thùng).</p>
                                    </div>
                                    <div class="vb_whychooseus_block">
                                        <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_camket_mienphi.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_camket_mienphi.svg" scale="0" data-was-processed="true">
                                        <p class="vb_whychooseus_block_title">Miễn phí</p>
                                        <p class="vb_whychooseus_block_content">Không chỉ giao hàng tận nơi miễn phí. Công ty TNHH Kim Xương còn hỗ trợ tư vấn, thiết kế và in mẫu Demo miễn phí.</p>
                                    </div>
                                    <div class="vb_whychooseus_block">
                                        <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_camket_nhanhchong.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_camket_nhanhchong.svg" scale="0" data-was-processed="true">
                                        <p class="vb_whychooseus_block_title">Nhanh chóng</p>
                                        <p class="vb_whychooseus_block_content">Thời gian thiết kế và hoàn thành sản phẩm ngắn. Cam kết đúng Deadline khách hàng yêu cầu.</p>
                                    </div>
                                    <div class="vb_whychooseus_block">
                                        <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_camket_dongian.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_camket_dongian.svg" scale="0" data-was-processed="true">
                                        <p class="vb_whychooseus_block_title">Đơn giản</p>
                                        <p class="vb_whychooseus_block_content">Công ty TNHH Kim Xương luôn hướng đến một quy trình làm việc khoa học, đơn giản và rút ngắn được thời gian tối đa.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="vb_whychooseus_absolute_top"></div>
                            <div class="vb_whychooseus_absolute_bottom"></div>
                        </section>
                        <section id="vb_contactform">
                            <div class="container">
                                <div class="vb_contacform_flex">
                                    <img class="vb_contacform_absolute_left lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/absolute.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/absolute.svg" scale="0" data-was-processed="true">
                                    <div class="vb_contacform_flex_left">
                                        <h2 class="vb_title_section">Đặt hàng ngay</h2>
                                        <div class="vb_border_title"></div>
                                        <?php echo do_shortcode('[contact-form-7 id="20" title="Contact Home"]'); ?>
                                    </div>
                                    <div class="vb_contacform_flex_right">
                                        <div class="vb_contacform_flex_right_absolute"></div>
                                        <div class="vb_info_company">
                                            <div class="vb_info_company_row">
                                                <img class="vb_info_company_row_social lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_submitform_dienthoai.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_submitform_dienthoai.svg" scale="0" data-was-processed="true">
                                                <div class="vb_info_company_row_social_input">
                                                    <p class="active">Điện thoại</p>
                                                    <a class="active" href="tel:<?php the_field('phone', 'option') ?>"><?php the_field('phone', 'option') ?></a>
                                                </div>
                                            </div>
                                            <div class="vb_info_company_row">
                                                <img class="vb_info_company_row_social lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_submitform_facebook.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_submitform_facebook.svg" scale="0" data-was-processed="true">
                                                <div class="vb_info_company_row_social_input">
                                                    <p>Facebook</p>
                                                    <a target="_blank" href="<?php the_field('facebook', 'option') ?>" rel="noopener noreferrer"><?php the_field('facebook', 'option') ?></a>
                                                </div>
                                            </div>
                                            <div class="vb_info_company_row">
                                                <img class="vb_info_company_row_social lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_submitform_mail.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_submitform_mail.svg" scale="0" data-was-processed="true">
                                                <div class="vb_info_company_row_social_input">
                                                    <p>Email</p>
                                                    <a href="mailto:<?php the_field('email', 'option') ?>"><?php the_field('email', 'option') ?></a>
                                                </div>
                                            </div>
                                            <div class="vb_info_company_row">
                                                <img class="vb_info_company_row_social lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_submitform_diachi.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_submitform_diachi.svg" scale="0" data-was-processed="true">
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
                        <section id="vb_feedback">
                            <div class="container">
                                <div class="vb_feedback_header">
                                    <img class="lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_quote.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_quote.svg" scale="0" data-was-processed="true">
                                    <h2 class="vb_title_section">Phản hồi của khách hàng</h2>
                                </div>
                                <div class="vb_feedback_absolute_circle"></div>
                                <div class="vb_feedback_slider">
                                    <img class="vb_feedback_absolute_bottom lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/absolute.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/absolute.svg" scale="0" data-was-processed="true">
                                    <div class="vb_slideshow-container">
                                        <div class="vb_mySlides vb_fade" style="display: block;">
                                            <img class="vb_mySlides_product lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_mangpe.png" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_mangpe.png" scale="0" data-was-processed="true">
                                            <img class="vb_mySlides_rating lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_sanpham_ngoisao.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_sanpham_ngoisao.svg" scale="0" data-was-processed="true">
                                            <p class="vb_slide_title">
                                                Hôm bữa tôi có liên hệ <span>vietbox.vn</span> để đặt mua 50 cây màng PE khổ 50cm rất ưng ý.
                                                Màng khá mỏng nhưng rất dẻo, có độ co giãn cao, giá lại cực rẻ! Tôi đã liên hệ nhiều công ty nhưng chỉ có vietbox làm tôi hài lòng.
                                                Cảm ơn vietbox rất nhiều!
                                            </p>
                                            <p class="vb_slide_name">Quỳnh Phạm</p>
                                            <p class="vb_slide_job">Kinh doanh công ty thực phẩm</p>
                                        </div>

                                        <div class="vb_mySlides vb_fade" style="display: none;">
                                            <img class="vb_mySlides_product lazy loaded" data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" src="https://vietbox.vn/wp-content/uploads/2019/12/w_box.png" scale="0">
                                            <img class="vb_mySlides_rating lazy loaded" data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" src="https://vietbox.vn/wp-content/uploads/2019/12/w_sanpham_ngoisao.svg" scale="0">
                                            <p class="vb_slide_title">
                                                Thùng xốp bên vietbox có độ dày cao và rất chắc. Giá lại <span>rất rẻ</span> so với thị trường bên ngoài.
                                                Ngoài ra tôi cũng rất hài lòng về dịch vụ vận chuyển bên bạn. Đặt đơn lúc 13:00 mà 14:00 đã nhận được hàng rồi.
                                                Chắc chắn tôi sẽ mua nhiều lần nữa!
                                            </p>
                                            <p class="vb_slide_name">Thanh Bình</p>
                                            <p class="vb_slide_job">Giám đốc kho xuất nhập khẩu</p>
                                        </div>

                                        <div class="vb_mySlides vb_fade" style="display: none;">
                                            <img class="vb_mySlides_product lazy loaded" data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" src="https://vietbox.vn/wp-content/uploads/2019/12/w_mangxophoi.jpg" scale="0">
                                            <img class="vb_mySlides_rating lazy" data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" src="https://vietbox.vn/wp-content/uploads/2019/12/w_sanpham_ngoisao.svg" scale="0">
                                            <p class="vb_slide_title">
                                                Quy trình mua hàng bên Công ty TNHH Kim Xương rất nhanh! Rất thuận tiện cho những người bận rộn như chúng tôi.
                                                Chất lượng sản phẩm rất cao, <span>sử dụng bền</span>.
                                                Tôi thường gửi hàng đi đường dài và dồng xốc nên rất cần một nhà cung cấp lâu dài như vietbox!
                                            </p>
                                            <p class="vb_slide_name">Lê Cao Lộc</p>
                                            <p class="vb_slide_job">Dịch vụ Logistics</p>
                                        </div>

                                        <div class="vb_mySlides vb_fade" style="display: none;">
                                            <img class="vb_mySlides_product lazy" data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" src="https://vietbox.vn/wp-content/uploads/2019/12/w_tui.png" scale="0">
                                            <img class="vb_mySlides_rating lazy" data-src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" src="https://vietbox.vn/wp-content/uploads/2019/12/w_sanpham_ngoisao.svg" scale="0">
                                            <p class="vb_slide_title">
                                                Tôi rất hài lòng về dịch vụ in ấn túi ni lông bên bạn. Túi dẻo, rất chắc và còn được thiết kế miễn phí nữa.
                                                Tôi được trao đổi và tự mình quyết định bản thiết kế đến khi hài lòng thì thôi.
                                                Công ty TNHH Kim Xương làm ăn rất <span>uy tín</span> và đúng hẹn, cảm ơn các bạn!
                                            </p>
                                            <p class="vb_slide_name">Minh Anh</p>
                                            <p class="vb_slide_job">Shop thời trang</p>
                                        </div>

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
                        <section id="vb_partner">
                            <div class="container">
                                <p class="vb_head_title">Công ty TNHH Kim Xương</p>
                                <h2 class="vb_title_section">Đối tác chính</h2>
                                <p class="vb_foot_title">Chúng tôi dựa trên tiêu chí lấy lợi ích của khách hàng làm sự phát triển bền vững và phồn thịnh của công ty. Cảm ơn khách hàng đã luôn tin tưởng Công ty TNHH Kim Xương.</p>
                                <div class="vb_partner_flex">
                                    <?php
                                        $i = 1;
                                        $logos = get_field('client_logos', get_option('page_on_front'));
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
                        <section id="vb_tagproducts">
                            <div class="container">
                                <div class="vb_tagproducts_flex_header">
                                    <div class="vb_tagproducts_flex_header_left">
                                        <h2 class="vb_title_section">Bạn quan tâm sản phẩm nào?</h2>
                                        <p class="vb_foot_title">Bấm tên sản phẩm để xem báo giá nhé!</p>
                                        <img class="vb_foot_border lazy loaded" src="https://vietbox.vn/wp-content/uploads/2019/12/w_tag_border.svg" data-src="https://vietbox.vn/wp-content/uploads/2019/12/w_tag_border.svg" scale="0" data-was-processed="true">
                                    </div>
                                    <div class="vb_tagproducts_flex_header_right">
                                        <div class="vb_tagproducts_hotline">
                                            <p class="vb_tagproducts_hotline_title">Gọi đặt hàng</p>
                                            <a href="tel:<?php the_field('phone', 'option') ?>" class="vb_tagproducts_hotline_callnow"><?php the_field('phone', 'option') ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="vb_tagproducts_flex_content">
                                    <div class="vb_tagproducts_flex_content_col">
                                        <div class="vb_tagproducts_col_title">
                                            <p class="vb_tagproducts_col_title_1">Thùng Carton</p>
                                        </div>
                                        <div class="vb_tagproducts_col_content">
                                            <ul class="vb_tagproducts_col_list">
                                                <li><a href="https://vietbox.vn/thung-giay-carton-gia-re-tai-tp-hcm/">Hộp giày nam</a></li>
                                                <li><a href="https://vietbox.vn/thung-giay-carton-gia-re-tai-tp-hcm/">Hộp giày nữ</a></li>
                                                <li><a href="https://vietbox.vn/thung-giay-carton-gia-re-tai-tp-hcm/">Hộp ship COD</a></li>
                                                <li><a href="https://vietbox.vn/thung-giay-carton-gia-re-tai-tp-hcm/">Thùng vận chuyển nhà</a></li>
                                                <li><a href="https://vietbox.vn/thung-giay-carton-gia-re-tai-tp-hcm/">Thùng chuyển hàng</a></li>
                                                <li><a href="https://vietbox.vn/thung-giay-carton-gia-re-tai-tp-hcm/">Thùng Carton 3 lớp</a></li>
                                                <li><a href="https://vietbox.vn/thung-giay-carton-gia-re-tai-tp-hcm/">Thùng Carton 5 lớp</a></li>
                                                <li><a href="https://vietbox.vn/thung-giay-carton-gia-re-tai-tp-hcm/">Thùng Carton 7 lớp</a></li>
                                            </ul>
                                            <a href="https://vietbox.vn/thung-giay-carton-gia-re-tai-tp-hcm/" class="vb_tagproducts_col_listall">Tất cả thùng Carton</a>
                                        </div>
                                    </div>
                                    <div class="vb_tagproducts_flex_content_col">
                                        <div class="vb_tagproducts_col_title">
                                            <p class="vb_tagproducts_col_title_2">Màng xốp hơi &amp; PE</p>
                                        </div>
                                        <div class="vb_tagproducts_col_content">
                                            <ul class="vb_tagproducts_col_list">
                                                <li><a href="https://vietbox.vn/mang-pe/">Màng PE khổ 25cm</a></li>
                                                <li><a href="https://vietbox.vn/mang-pe/">Màng PE khổ 50cm</a></li>
                                                <li><a href="https://vietbox.vn/mang-xop-hoi-xop-bop-no-xop-khi/">Màng xốp hơi 1,4m x 100m</a></li>
                                                <li><a href="https://vietbox.vn/mang-xop-hoi-xop-bop-no-xop-khi/">Màng xốp hơi 0,7m x 100m</a></li>
                                                <li><a href="https://vietbox.vn/mang-xop-hoi-xop-bop-no-xop-khi/">Màng xốp hơi 380K</a></li>
                                                <li><a href="https://vietbox.vn/mang-xop-hoi-xop-bop-no-xop-khi/">Màng xốp hơi 320K</a></li>
                                                <li><a href="https://vietbox.vn/mang-xop-hoi-xop-bop-no-xop-khi/">Màng xốp hơi</a></li>
                                                <li><a href="https://vietbox.vn/mang-pe/">Màng quấn PE</a></li>
                                            </ul>
                                            <a href="https://vietbox.vn/mang-xop-hoi-xop-bop-no-xop-khi/" class="vb_tagproducts_col_listall">Tất cả màng xốp hơi</a>
                                        </div>
                                    </div>
                                    <div class="vb_tagproducts_flex_content_col">
                                        <div class="vb_tagproducts_col_title">
                                            <p class="vb_tagproducts_col_title_3">Túi ni lông</p>
                                        </div>
                                        <div class="vb_tagproducts_col_content">
                                            <ul class="vb_tagproducts_col_list">
                                                <li><a href="https://vietbox.vn/tui-ni-long/">Túi hột xoài</a></li>
                                                <li><a href="https://vietbox.vn/tui-ni-long/">Túi nhám</a></li>
                                                <li><a href="https://vietbox.vn/tui-ni-long/">Túi ni lông PE dẻo</a></li>
                                                <li><a href="https://vietbox.vn/tui-ni-long/">Túi HD</a></li>
                                                <li><a href="https://vietbox.vn/ban-tui-dung-rac-gia-re-tai-tphcm/">Túi đựng rác</a></li>
                                                <li><a href="https://vietbox.vn/tui-zipper-gia-re-tp-hcm-du-size/">Túi Zipper</a></li>
                                                <li><a href="https://vietbox.vn/tui-zipper-gia-re-tp-hcm-du-size/">Túi Zipper chỉ đỏ</a></li>
                                                <li><a href="https://vietbox.vn/tui-zipper-gia-re-tp-hcm-du-size/">Túi Zip bạc</a></li>
                                            </ul>
                                            <a href="https://vietbox.vn/tui-ni-long/" class="vb_tagproducts_col_listall">Tất cả túi ni lông</a>
                                        </div>
                                    </div>
                                    <div class="vb_tagproducts_flex_content_col">
                                        <div class="vb_tagproducts_col_title">
                                            <p class="vb_tagproducts_col_title_4">Giấy in, xi măng</p>
                                        </div>
                                        <div class="vb_tagproducts_col_content">
                                            <ul class="vb_tagproducts_col_list">
                                                <li><a href="https://vietbox.vn/mua-ban-giay-xi-mang-goi-hang-gia-re-tai-tphcm/">Giấy gói hàng</a></li>
                                                <li><a href="https://vietbox.vn/mua-ban-giay-xi-mang-goi-hang-gia-re-tai-tphcm/">Giấy xi măng</a></li>
                                                <li><a href="https://vietbox.vn/mua-ban-giay-xi-mang-goi-hang-gia-re-tai-tphcm/">Giấy xi măng bao rẻ</a></li>
                                                <li><a href="https://vietbox.vn/mua-ban-giay-xi-mang-goi-hang-gia-re-tai-tphcm/">Giấy Kraft</a></li>
                                                <li><a href="https://vietbox.vn/mua-ban-giay-xi-mang-goi-hang-gia-re-tai-tphcm/">Giấy gói hoa</a></li>
                                                <li><a href="https://vietbox.vn/giay-in-giay-photo-tp-hcm/">Giấy In Excel A3</a></li>
                                                <li><a href="https://vietbox.vn/giay-in-giay-photo-tp-hcm/">Giấy In Excel A4</a></li>
                                                <li><a href="https://vietbox.vn/giay-in-giay-photo-tp-hcm/">Giấy In Excel A5</a></li>
                                            </ul>
                                            <a href="https://vietbox.vn/mua-ban-giay-xi-mang-goi-hang-gia-re-tai-tphcm/" class="vb_tagproducts_col_listall">Tất cả Giấy in, xi măng</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div><!-- .entry-content -->

                <footer class="entry-footer">
                    <?php edit_post_link( esc_html__( 'Edit', 'education-hub' ), '<span class="edit-link">', '</span>' ); ?>
                </footer><!-- .entry-footer -->
            </article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	/**
	 * Hook - education_hub_action_sidebar.
	 *
	 * @hooked: education_hub_add_sidebar - 10
	 */
	do_action( 'education_hub_action_sidebar' );
?>

<style>
    .block_btn_slider:before {
        content: "<?php the_field('phone', 'option') ?>"
    }
</style>

<?php get_footer(); ?>