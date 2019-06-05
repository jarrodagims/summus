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
    <div class="container three-col">
        <div>

            <div class="three-columns">
                <div>
                    <div class="m-row">
                        <div class="img-container">
                            <img src="<?=IMGURL?>knees.jpg" alt="">
                        </div>

                        <div class="column-top">
                            <p>Personal Injury</p>
                        </div>
                    </div>

                </div>
                <div class="immigration-lawyer">

                    <div class="m-row">
                        <div class="img-container">
                            <img src="<?=IMGURL?>passport.jpg" alt="">
                        </div>

                        <div class="column-top">
                            <p>Immigration</p>
                        </div>
                    </div>


                </div>
                <div class="family-lawyer">

                    <div class="m-row">
                        <div class="img-container">
                            <img src="<?=IMGURL?>happy-people.jpg" alt="">
                        </div>

                        <div class="column-top">
                            <p>Family Law</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <?php endif; ?>
</div>