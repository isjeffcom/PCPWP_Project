<html>
<?php get_header(); ?>

  <title><?php bloginfo( 'name' ); echo ' - '; the_title();?></title>

    <div class='close_button'>
      <a href='<?php echo esc_url( home_url( '/' ) ); ?>'><i class="fa fa-times" aria-hidden="true"></i></a>
    </div>

      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'single'); ?>
      <?php endwhile; ?>

<?php get_footer(); ?>
