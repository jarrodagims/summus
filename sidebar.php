<div id="sidebar" class="sidebar">
    <?php if (is_page('contact-us')) : ?>
    <div id="contact-form">
        <h2>Contact Us</h2>

        <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
                echo do_shortcode('[contact-form-7 id="125" title="Contact Form"]');
            } else {
                echo do_shortcode('[contact-form-7 id="125" title="Contact Form"]');
            }
            ?>
    </div>
    <?php endif; ?>
    <?php if (!is_page('contact-us')) : ?>
    <img src="<?=IMGURL?>couple-sidebar.jpg" alt="">
    <div class="h2"><span class="brand">SUMMUS SERVICES</span> EXTEND<br />
        BEYOND BUYING & SELLING</div>
    <a href="<?=SITEURL?>/contact-us/"><button class="btn btn-primary">
            LEARN MORE</button></a>
    <?php endif; ?>
</div>