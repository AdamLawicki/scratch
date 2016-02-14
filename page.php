<!-- This is for pages, not single posts. And it does not have a widget. You can enable the widget by removing the comment below. -->
<?php get_header(); ?>

	<div class="row">

		<div class="col-sm-8">

			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content', get_post_format() );
  
				endwhile; endif; 
			?>

		</div> <!-- /.col -->
<!-- Add a widget here!-->
	</div> <!-- /.row -->

<?php get_footer(); ?>