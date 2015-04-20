<?php $latestPosts = new WP_Query(array(
    'post_type' => 'artist', //only want artist posts
)) ?>

  <!-- the custom loop, IF STATEMENT -->
  <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>


<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large', true); ?>

<!-- do not display, but load the image -->
<img src="<?php echo $url ?>" style="display:none;" alt="">

<!-- display the title / aka artists name -->
<h2 data-img="<?php echo $url; ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><br>

      
<?php endwhile; // end the loop?>
<?php wp_reset_postdata(); ?>