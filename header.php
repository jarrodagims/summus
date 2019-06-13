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
                            <li><a
                                    href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>">TEL:
                                    <?php printPhone();?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <?php if(!is_front_page() && !is_page_template('page-grid.php')) :?>
            <?php get_template_part('template-parts/page/page', 'top-banner');?>
            <?php endif; ?>