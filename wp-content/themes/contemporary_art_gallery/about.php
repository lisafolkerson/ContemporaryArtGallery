<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

<div class="main">
  <div class="container clearfix">

    <div class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->

    <?php 
    	if(have_posts()) {
    		while (have_posts()) {
    			the_post();    			
    		}
    	}
     ?>

	<?php the_content(); ?>

    <? //php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>