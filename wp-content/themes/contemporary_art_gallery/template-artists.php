<?php 
/* 
*Template Name: Artists
*/
get_header();  ?>

<div class="main">
  <div class="container container-with-background clearfix">

    <div class="content">
      <?php get_template_part( 'artist-loop', 'index' ); ?>
    </div> <!-- /,content -->

    <?php // get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>