<?php wp_footer();?>
<?php
/**
 *
 * DO NOT WRITE JAVASCRIPT HERE
 *
 */
?>

<section id="home-module-8" class="home-module-8">
    <div class="secondary-nav">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13568.019099696785!2d-106.4767735!3d31.7703557!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc130c1d7046c2add!2sThe+Law+Offices+of+Rios+%26+Parada%2C+PLLC!5e0!3m2!1sen!2sus!4v1559235322722!5m2!1sen!2sus"
            width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>
    </div>
</section>

<footer id="footer">
    <div class="container">

        <div class="row">

            <div class="col col-get-in-touch">
                <div class="extra-padding">
                    <span class="h2">
                        Get In Touch
                    </span>

                    <span class="blurb">The Law Offices of Rios & Parada, PLLC</span><br />

                    <div class="columns">
                        <div>

                            <p>1505 E Missouri Ave<br />
                                El Paso, TX 79902
                            </p>

                            <p>T: <a href="915532-2333">(915) 532-2333</a><br />
                                F: <a href="915532-3279">(915) 532-3279</a>
                            </p>

                            <ul class="d-none d-lg-flex list-inline social-media sm">
                                <li><a href="https://www.facebook.com/pages/The-Law-Offices-of-Rios-Parada-PLLC/702710576472573"
                                        class="facebook-button social-media-button sm square lighten external"
                                        target="_blank"><i
                                            class="fab fa-facebook-f fa-fw "><span>Facebook</span></i></a>
                                </li>
                                <li><a href="https://twitter.com/riosparadalaw"
                                        class="twitter-button social-media-button sm square lighten external"
                                        target="_blank"><i class="fab fa-twitter fa-fw "><span>Twitter</span></i></a>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <p><span class="sub-title">Hours</span>
                                Monday - Friday: 8:30 a.m. - 5:30 p.m.<br />
                                Saturday - Sunday: Closed</p>

                            <img src="<?=IMGURL?>three-best-rated.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="extra-padding">
                    <span class="h2">Schedule A Consultation</span>

                    <div id="contact-form">
                        <?php if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
    echo do_shortcode('[contact-form-7 id="62" title="Contact Form"]');
} else {
    echo do_shortcode('[contact-form-7 id="62" title="Contact Form"]');
}
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="sub-footer">
    &copy; <?php echo date('Y'); ?> <?php echo get_bloginfo( 'name' ); ?> | All Rights Reserved
</div>

</div>
</div>
</body>

</html>