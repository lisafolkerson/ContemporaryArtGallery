<?php get_header();  ?>


  
<div class="main">
  <div id="bgimage" class="container container-with-background clearfix">

    <div class="content">
    <?php $latestPosts = new WP_Query(array(
        'post_type' => 'artist', //only want portfolio posts
    )) ?>

        <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>


      <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large', true); ?>

      <img src="<?php echo $url ?>" style="display:none;" alt="">

      <h2 data-img="<?php echo $url; ?>"><?php the_title(); ?></h2>
      <?php $title= get_the_title() ?>
     

            
      <?php endwhile; // end the loop?>
      <?php wp_reset_postdata(); ?>
    </div> <!-- /,content -->

    <?php // get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>