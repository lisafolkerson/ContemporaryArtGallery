<?php 
/* 
* Template Name: Page with Background
*/
get_header();  ?>

<div class="main">
  <div class="container container-with-background clearfix">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php // displays featured image as background ?>
        <?php $static = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large', true); ?>

            <img src="<?php echo $static ?>" style="display:none;" alt="">

            <h2 class="static-page-bg" data-img="<?php echo $static; ?>"></h2>
            <?php //$title= get_the_title() ?>


        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>