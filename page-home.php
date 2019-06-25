<?php get_header();

/*
Template Name: Home
 */?>

<section id="home-module-1">
    <div class="primary-menu">
        <a id="header-logo" class="navbar-brand" href='<?php echo get_site_url(); ?>'><img src="<?= IMGURL; ?>logo.png"
                alt="<?php echo get_bloginfo(
                            'description'
                        ); ?>" /></a>
        <?php echo responsive_bs_menu('primary', 'right', SITENAME); ?>
    </div>

    <?php putRevSlider( 'home-video' ); ?>

    <div class="secondary-menu">
        <?php echo responsive_bs_menu('secondary-menu', 'left', SITENAME); ?>
    </div>
</section>

<section class="home-module-2">

    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">

                <h1>Real Estate Agency — A New Approach to Home Buying and Selling
                </h1>

                <h2 class="h2 expander" data-toggle="collapse" data-target="#collapse" aria-expanded="false"
                    aria-controls="collapse"><span>Real Estate Company
                    </span></h2>

                <h3>
                    <ul id="collapse" class="expand collapse " style="">
                        <li>The best all-encompassing approach to the housing market.</li>
                        <li>All of our top realtors undergo one-on-one coaching & specialty training.</li>
                        <li>Our highly reviewed agents are most qualified in providing unmatched expertise.</li>
                        <li>Summus Realty is dedicated to helping the local community prosper and thrive through the
                            housing market.</li>
                        <li>Our general philosophy emphasizes energy, coaching, and expertise.</li>
                        <li>Summus services extend beyond buying and selling; they are a guiding light through the
                            entirety of the complex process.</li>
                    </ul>
                </h3>




                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="frame align-right"><img src="<?=IMGURL?>jj-bella.jpg" alt="JJ & Bella">
                                <h2>JJ & Bella</h2>
                            </div>
                        </div>

                        <div class="col">
                            <div class="frame align-left"><img src="<?=IMGURL?>rene-preston.jpg" alt="Rene & Preston">
                                <h2>
                                    Rene & Preston
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <p>
                    Who We Are: A Synergetic Approach to Real Estate
                </p>

                <p>
                    Knowledge and determination overcome all obstacles. Momentum. Decisiveness. Proximity. These are all
                    words the Summus team embraces. Change the way you think. We teach it every day. The 21st century
                    demands new business models and approaches to progress. We climb to the top with you; our
                    achievement is measured by helping you obtain success through the purchase or sale of your home.
                </p>

                <p>
                    Composed of seven companies, Summus offers value through a fusion of expertise designed to escort
                    people through the labyrinthine process of home buying, selling, investing, and everything in
                    between. From roofing companies to lenders, to property management, residential transactions and
                    titles, to our close partnerships with home builders, Summus converges the various necessary aspects
                    of buying and selling a home into one cohesive path.
                </p>

                <p>
                    Climbing the roughest peaks in an unstable market demands a variety of disciplines, mental
                    fortitude, and study of the environment, surroundings, and proven tactics. Summus Realty understands
                    this, as we aspire to help people ascend the jagged edges of the housing market.
                </p>

                <a href="">
                    <button class="btn btn-primary btn-gradient">
                        OUR TEAM</button>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="home-module-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>
                    SELL
                </h2>


                <p>Summus Realty is dedicated to helping the local community prosper and thrive through the housing
                    market.</p>

                <a href="">
                    <button class="btn btn-primary">
                        OUR STRATEGY</button>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="home-module-4">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2><?=__('Testimonials')?></h2>
                <?php echo get_template_part('template-parts/testimonial-slider'); ?>
            </div>
        </div>
    </div>
</section>

<section class="home-module-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="extra-padding">
                    <h2>WE WORK WITH <strong>AMAZING BUILDERS</strong></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                        ut
                        laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                        tation
                        ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                        dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla
                        facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
                </div>
            </div>
            <div class="col">

            </div>
        </div>
    </div>
</section>

<section class="home-module-6">
    <div class="extra-padding">
        <div class="container">

            <div class="row">
                <div class="col">

                </div>
                <div class="col">
                    <h2><span class="brand">SUMMUS SERVICES</span> EXTEND BEYOND<br class="d-none d-lg-block">
                        BUYING & SELLING</h2>
                    <a href="">
                        <button class="btn btn-primary">
                            LEARN MORE</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-module-7 email-signup-form">
    <div class="container">
        <div class="extra-padding">
            <p>If you are currently working on getting your real estate license, sign up here<br
                    class="d-none d-lg-block">
                to register for Free Exam preparation classes!</p>
            <?php
                        echo do_shortcode('[contact-form-7 id="63" title="Email Sign Up"]');
                        ?>
        </div>
    </div>
</section>

<?php get_footer();?>