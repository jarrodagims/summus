<?php get_header(); ?>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="<?=FULLWIDTH?>">
                <?php get_template_part('template-parts/content/content', 'archive'); ?>
            </div>
        </div>
    </div>
</section>
<?php echo get_template_part('template-parts/contact-form'); ?>
<?php get_footer(); ?>