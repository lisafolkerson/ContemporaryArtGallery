<?php get_header();  ?>
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
<div class="main">
  <div class="container container-with-background clearfix" style="background-image: url(<?php echo $url ?>)">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php //the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php // get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>