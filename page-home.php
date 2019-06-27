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
        <?php echo responsive_bs_menu('primary', 'right', SITENAME, 'navbar-expand-lg'); ?>
    </div>

    <?php putRevSlider( 'home-video' ); ?>

    <div class="secondary-menu">
        <?php echo non_responsive_bs_menu('secondary-menu', 'left', SITENAME, 'navbar-expand'); ?>
    </div>
</section>

<section class="home-module-2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">

                <h1>Real Estate Agency | A New Approach to Selling Your Home
                </h1>

                <h2 class="h2 expander" data-toggle="collapse" data-target="#collapse" aria-expanded="false"
                    aria-controls="collapse"><span>Real Estate Company in El Paso
                    </span></h2>

                <h3>
                    <ul id="collapse" class="expand collapse " style="">
                        <li>The best approach to home selling in El Paso</li>
                        <li>Summus houses the top real estate agents in the region</li>
                        <li>Our highly-reviewed agents offer the most value</li>
                        <li>We are dedicated to selling your house</li>
                        <li>We are not a typical or general real estate company</li>
                        <li>We guide our clients through the home buying experience</li>
                        <li>Sell your home fast with us!</li>
                        <li>Our local agents love the El Paso community</li>
                        <li>Summus provides quality home selling</li>
                        <li>Check out our positive ratings</li>
                        <li>Most experienced realtors in El Paso</li>
                        <li>Our realty company offers great services</li>
                        <li>Check out the ‘Summus guarantee’</li>
                        <li>Our realtors are reliable and trusted agents</li>
                        <li>Realtors who are experienced and dependable</li>
                        <li>Expect a quick sale with Summus</li>
                        <li>We are a top rated realty company in El Paso</li>
                        <li>We stand above our competition because we offer more value</li>
                        <li>Climb higher with Summus Realty!</li>
                        <li>We are home selling experts</li>
                        <li>For residential sales, give us a call!</li>
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
                    Summus Realty — An Innovative Approach to Home Selling
                </p>

                <p>
                    The 21st century demands new business models and a creative approach. Here at Summus Realty, we
                    climb to the top with you. Our achievement is measured by helping you obtain success through the
                    sale of your home. We specialize in listing your home and selling it quickly and effectively. When
                    putting your home on the market with the help of our team, we can offer unique services and added
                    value not offered by your typical realty company. Our efficient home listing services guarantee a
                    successful sale and offer you more value as the seller. We provide more substance, more innovation,
                    and more selling opportunities than anyone else.
                </p>

                <a href="#">
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
            <div class="col col-md-6 col-offset-6">
                <h2>
                    The Summus Methodology — Providing Value & Quality Service
                </h2>


                <p>Our goal is to serve you and guide you through the home selling process while making it easier,
                    faster, and more efficient. We take on more responsibility and go the extra mile so that your home
                    finds the right buyer quickly. And we don’t do it with cheap tricks. Instead, we choose to have the
                    most experienced and knowledgeable realtors in the industry help guide you through the typically
                    confusing process. </p>



                <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse-selling"
                    aria-expanded="false" aria-controls="collapse">
                    OUR STRATEGY</button>

                <div id="collapse-selling" class="expand collapse">
                    <p>Most agents will charge 6% of the sales price and include regular services. We do that and more
                        for
                        4%. For homes valued $150,000 and under, we can do $1,500 flat and 3% for buyers agent
                        commission.
                        Our additional services include, but are not limited to:
                    </p>
                    <ul class="list-unstyled">
                        <li>Entering property in the Multiple Listing Service (MLS) system</li>
                        <li>Professional photographs of home</li>
                        <li>Yard sign</li>
                        <li>Lockbox access</li>
                        <li>Open houses</li>
                        <li>3D virtual tour of the home</li>
                        <li>Access to the company’s largest database of leads</li>
                        <li>Weekly updates</li>
                        <li>Calls answered 7 days a week</li>
                        <li>And the guarantee that the home will be shown when an appointment is made!</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-module-4">
    <div class="container">
        <div class="row">
            <div class="col text-center col-md-6 col-md-offset-6">
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
                    <h2>A Cutting-Edge Realty Company Located in and Serving the El Paso Area</h2>
                    <p>Summus Realty serves El Paso and its surrounding areas. No other real estate company approaches
                        the market in the same way. We work in the Sun City because we love it! It’s our home. We know
                        it. We understand it. We know its people and what drives them. After all, a home is the source
                        of people’s prosperity. It’s not just houses for sale, it’s an opportunity to help someone find
                        the right home, where they will set their roots, grow their families, invest, and improve our
                        community. </p>
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
                    <h2>Our <span class="brand">Added Value</span></h2>

                    <p>Summus Realty offers services that no other realty company in El Paso offers when it comes to
                        selling your home. We make the moving and preparation of your home easier.
                    </p>
                    <button class="btn btn-primary" data-toggle="collapse" data-target="#collapse-learnmore"
                        aria-expanded="false" aria-controls="collapse">
                        LEARN MORE</button>

                    <div id="collapse-learnmore" class="expand collapse">
                        <p>
                            When selling your home, we provide the most value possible by assisting you with:
                        </p>

                        <ul class="list-unstyled">
                            <li>Entering your property in the MLS service</li>
                            <li>Professional photographs</li>
                            <li>Yard signs and open houses</li>
                            <li>Moving services</li>
                            <li>Cleaning, pool restoration, and more</li>
                            <li>Home staging</li>
                        </ul>

                        <p>
                            Our team of realtors undergoes rigorous training in order to live the Summus philosophy and
                            culture. Summus Realty puts its agents on the frontlines of the market, paving new paths and
                            creating immense opportunities. We currently have 152 agents and 77 on our Zillow team who
                            all work in El Paso and the surrounding areas.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo get_template_part('template-parts/contact-form'); ?>
<?php get_footer();?>