<!-- Hero Section -->
<section class="hero-section-inner">
    <div class="container hero-shell">
    <div class="row align-items-center g-5">
        <div class="col-lg-6">

            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <div class="hero-copy-block">
                    <?php get_template_part( 'partials/common/_breadcrumb' ); ?>

                    <h1 class="hero-title"><?php the_title(); ?></h1>
                    <?php the_field('hero_description'); ?>

                    <div class="hero-actions">
                        <a class="btn btn-amw btn-amw-primary" href="<?php echo home_url(); ?>/contact/">Book a Strategy Call</a>
                        <a class="btn btn-amw btn-amw-secondary" href="<?php echo home_url(); ?>/services/">Explore Services</a>
                    </div>

                </div>

            <?php endwhile;?>
            <?php else : ?> 
            <?php endif; ?>    

        </div>

        <div class="col-lg-6 d-flex justify-content-lg-end">
        <div class="hero-image-panel">
            <img
            class="hero-image"
            src="<?php echo get_the_post_thumbnail_url(null, 'full'); ?>"
            alt="Anvaya Media Works homepage hero visual"
            >
        </div>
        </div>
    </div>
    </div>
</section>