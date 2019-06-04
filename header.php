<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes();?>> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php language_attributes();?>> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php language_attributes();?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes();?>>
<!--<![endif]-->

<head>

    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>" />

    <?php wp_head();?>

    <?php if (!empty(get_option('sherpa_schema'))): ?>

    <?=get_option('sherpa_schema')?>

    <?php endif;?>

</head>

<body <?php body_class();?>>
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
    <p class="browsehappy">Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p>
    <![endif]-->



    <div class="sidebar-container">
        <div class="d-flex d-lg-none top-header">
            <div class="container-fluid">
                <div class="v-align row">
                    <div class="col navbar-button text-center">
                        <ul class="nav navbar-nav navbar-right">
                            <li>ESPAÑOL</li>
                            <li><a href="tel:<?php printPhone();?>">TEL: <?php printPhone();?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <?php if(!is_front_page() && !is_page_template('page-grid.php')) :?>
            <section class="internal-banner waypoint">
                <?php echo get_template_part('template-parts/navbar'); ?>
                <div class="jumbo-container">
                    <?php echo get_template_part('template-parts/top-header'); ?>
                    <div class="banner banner-internal">
                        <div class="banner-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-none d-lg-flex">
                                            <?php echo non_responsive_bs_menu('secondary-menu', 'left', SITENAME); ?>
                                        </div>
                                        <div class="header">
                                            <div class="header-content">
                                                <div class="h1"><?php if(!is_home()) :
                                            echo get_the_title();
                                            else: echo 'Blog';
                                            endif; ?></div>
                                                <img src="<?=IMGURL?>find-us-on.svg" alt="Find Us On">
                                                <ul class="list-inline social-media sm">
                                                    <li><a href="https://www.facebook.com/pages/The-Law-Offices-of-Rios-Parada-PLLC/702710576472573"
                                                            class="facebook-button social-media-button sm square lighten external"
                                                            target="_blank"><i
                                                                class="fab fa-facebook-f fa-fw "><span>Facebook</span></i></a>
                                                    </li>
                                                    <li><a href="https://twitter.com/riosparadalaw"
                                                            class="twitter-button social-media-button sm square lighten external"
                                                            target="_blank"><i
                                                                class="fab fa-twitter fa-fw "><span>Twitter</span></i></a>
                                                    </li>
                                                    <li><a href="https://www.instagram.com/universalgraphicsinc/"
                                                            class="instagram-button social-media-button sm square lighten external"
                                                            target="_blank"><i
                                                                class="fab fa-instagram fa-fw "><span>Instagram</span></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php endif; ?>