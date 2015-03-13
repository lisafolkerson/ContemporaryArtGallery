<?php get_header();  ?>


  
<div class="main">
  <div id="nanana" class="container container-with-background clearfix" style="background-image: url(<?php echo $url; ?>)">

    <div class="content">
    <?php $latestPosts = new WP_Query(array(
        'post_type' => 'artist'
    )) ?>

        <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>


      <h2><?php the_title(); ?></h2>
      <?php $title= get_the_title() ?>
     

    <div class="postPhoto">
    <?php the_post_thumbnail('full'); ?>
    </div>

      
        
        
      <?php endwhile; // end the loop?>
      <?php wp_reset_postdata(); ?>
    </div> <!-- /,content -->

    <?php // get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>