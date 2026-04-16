<?php /* Template Name: Home */ get_header(); ?>

<?php $t=time(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/home.css?v=<?php echo($t); ?>">

<main id="top" class="page-shell">

<?php
  get_template_part( 'partials/home/_section', 'hero' );
  get_template_part( 'partials/home/_section', 'impact' );
  get_template_part( 'partials/home/_section', 'capabilities' );
  get_template_part( 'partials/home/_section', 'about' );
  //get_template_part( 'partials/home/_section', 'work' );
  get_template_part( 'partials/home/_section', 'industries' );
  //get_template_part( 'partials/home/_section', 'blog' );
?>

</main>

<?php get_footer(); ?>
