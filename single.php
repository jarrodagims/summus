<?php get_header(); ?>
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php get_template_part('template-parts/content/content', 'single'); ?>
            </div>
        </div>
    </div>
</section>
<?php echo get_template_part('template-parts/contact-form'); ?>
<?php get_footer(); ?>