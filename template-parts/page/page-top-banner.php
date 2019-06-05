<section class="internal-banner waypoint">
    <?php echo get_template_part('template-parts/navbar'); ?>
    <div class="jumbo-container">
        <?php echo get_template_part('template-parts/top-header'); ?>
        <div class="banner banner-internal">
            <div class="banner-content">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <div class="header">
                                <div class="header-content">
                                    <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img
                                            src="<?=IMGURL;?>logo.svg" alt="<?php echo get_bloginfo(
    'description'
); ?>" /></a>

                                    <div class="h1">Personal Injury Attorney</div>
                                    <p>Serving You With Conviction & Commitment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="secondary-nav">
            <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>
        </div>
    </div>
</section>