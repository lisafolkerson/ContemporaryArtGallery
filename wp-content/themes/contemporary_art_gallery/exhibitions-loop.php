    <?php $latestPosts = new WP_Query(array(
        'post_type' => 'exhibition', //only want exhibition posts
    )) ?>

        <?php if($latestPosts->have_posts()) while($latestPosts->have_posts()) : $latestPosts->the_post() ?>


      <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large', true); ?>

      <img src="<?php echo $url ?>" style="display:none;" alt="">

      <h2 data-img="<?php echo $url; ?>"><a href="#"><?php the_title(); ?></a></h2><?php the_content(); ?>
      <?php //$title= get_the_title() ?>
            
      <?php endwhile; // end the loop?>
      <?php wp_reset_postdata(); ?>