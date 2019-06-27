<div class="top-header">
    <div class="container-fluid">
        <div class="v-align row">
            <div class="col navbar-button text-center">
                <div class="primary-menu">
                    <a id="header-logo" class="navbar-brand" href='<?php echo get_site_url(); ?>'><img
                            src="<?= IMGURL; ?>logo.png" alt="<?php echo get_bloginfo(
                            'description'
                        ); ?>" /></a>
                    <?php echo responsive_bs_menu('primary', 'right', SITENAME, 'navbar-expand-lg'); ?>
                </div>


            </div>
        </div>
    </div>
</div>