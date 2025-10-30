<?php
$footer_title= tr_options_field('tr_theme_options.footer_title');
    $footer_address= tr_options_field('tr_theme_options.footer_address');
    $footer_map1= tr_options_field('tr_theme_options.footer_map1');
    $footer_map2= tr_options_field('tr_theme_options.footer_map2');
 ?>

<?php wp_footer(); ?>
<footer class="footer">
        <div class="kl_container">
            <div class="footer_content">
                <div class="footer_content_address">
                    <div class="footer_content_address_title txt_24 txt_uppercase"><?= wp_kses_post($footer_title) ?></div>
                    <div class="footer_content_address_des">
                        <?= wp_kses_post($footer_address) ?>
                    </div>
                </div>
                <div class="footer_content_item">
                    <div class="footer_content_item_title color_white txt_uppercase txt_bold">chi nhánh</div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.303789168648!2d108.1526008!3d16.0497179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421937a50a8dc1%3A0x15a0459df2733132!2zNDQgxJDDoCBTxqFuLCBIb8OgIEtow6FuaCBOYW0sIExpw6puIENoaeG7g3UsIMSQw6AgTuG6tW5nIDU1MDAwMA!5e0!3m2!1svi!2s!4v1759759521542!5m2!1svi!2s" frameborder="0"></iframe>
                </div>
                <div class="footer_content_item">
                    <div class="footer_content_item_title color_white txt_uppercase txt_bold">văn phòng</div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125405.58584550304!2d106.54305299726562!3d10.817085400000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529fb27e425d9%3A0xd9d51abb5895e75f!2zQ8agIEtIw40gVOG7lE5HIEjhu6JQIE5HVVnhu4ROIEjhuqJJ!5e0!3m2!1svi!2s!4v1751117159348!5m2!1svi!2s" frameborder="0"></iframe>
                </div>
            </div>
            <div class="footer_copyright">
                <div class="footer_copyright_left color_white txt_14">Copyright © 2024 <span class="txt_uppercase txt_bold"><?= wp_kses_post($footer_title) ?></span>. Designed by Nina.vn</div>
                <div class="footer_copyright_right">
                    <div class="footer_copyright_right_item txt_14 color_white">Đang xem: 1</div>
                    <div class="footer_copyright_right_item txt_14 color_white">Ngày: 35</div>
                    <div class="footer_copyright_right_item txt_14 color_white">Tháng: 2107</div>
                    <div class="footer_copyright_right_item txt_14 color_white">Tổng truy cập: 41396</div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>