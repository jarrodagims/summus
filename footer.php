<?php wp_footer();?>
<?php
/**
 *
 * DO NOT WRITE JAVASCRIPT HERE
 *
 */
?>


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

                            <ul class="list-inline social-media sm">
                                <li><a href="https://www.facebook.com/UniversalGraphicsInc/"
                                        class="facebook-button social-media-button sm square lighten external"
                                        target="_blank"><i
                                            class="fab fa-facebook-f fa-fw "><span>Facebook</span></i></a>
                                </li>
                                <li><a href="https://twitter.com/gil_the_printer"
                                        class="twitter-button social-media-button sm square lighten external"
                                        target="_blank"><i class="fab fa-twitter fa-fw "><span>Twitter</span></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/universalgraphicsinc/"
                                        class="instagram-button social-media-button sm square lighten external"
                                        target="_blank"><i
                                            class="fab fa-instagram fa-fw "><span>Instagram</span></i></a>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <p><span class="sub-title">Hours</span><br />
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