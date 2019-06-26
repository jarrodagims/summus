<?php wp_footer();?>

<footer id="footer">
    <img src="<?=IMGURL?>logo.png" class="d-none d-lg-block" alt="Summus Realty" height="47">

    <div class="container">

        <div class="row">

            <div class="col col-get-in-touch">
                <div class="extra-padding">
                    <img src="<?=IMGURL?>logo.png" class="d-block d-lg-none" alt="Summus Realty" height="47">

                    <span class="h2">
                        <span class="brand">CONTACT</span> US TODAY
                    </span>

                    <p>Let us guide you through the process of selling your home.
                        <br />Call us at <a href="tel:9154949069">915-494-9069</a> today and ask
                        us about our services, our agents,<br /> or realtor training.
                    </p>

                    <div class="columns">
                        <div>

                            <p>
                                <strong><em>Location</em></strong><br /><br />
                                2077 N. Zaragoza Ste. B203<br />
                                El Paso, TX 79938<br />
                                <a href="tel:9154949069"><strong>915.494.9069</strong></a>
                            </p>


                        </div>

                        <div></div>

                    </div>

                    <div class="flex-col">
                        <div>
                            <p>
                                <strong>Hours:</strong> open 24 hours
                            </p>
                            <div>
                                <ul class="list-inline social-media sm">
                                    <li><a href="https://www.facebook.com/SummusRealty/"
                                            class="facebook-button social-media-button sm square lighten external"
                                            target="_blank"><i
                                                class="fab fa-facebook-f fa-fw "><span>Facebook</span></i></a>
                                    </li>
                                    <li><a href="https://twitter.com/summusrealty"
                                            class="twitter-button social-media-button sm square lighten external"
                                            target="_blank"><i
                                                class="fab fa-twitter fa-fw "><span>Twitter</span></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div>
                            <img src="<?=IMGURL?>three-best-rated.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13568.374392871005!2d-106.262516!3d31.767932999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x947b10620b4561cb!2sSummus+Realty!5e0!3m2!1sen!2sus!4v1561130994140!5m2!1sen!2sus"
                    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>

    </div>
</footer>

<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>
            </div>
            <div class="col">
                <p>
                    &copy; <?php echo date('Y'); ?> <?php echo get_bloginfo( 'name' ); ?> | All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</div>
</body>

</html>