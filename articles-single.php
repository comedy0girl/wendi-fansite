<?php 

/*
Template Name: articles-single
*/ ?>

<?php get_header(); ?>

	<div class="row">
		<div class="eleven columns">
			<div class="single-article-container">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(__('(more...)')); ?>
				
				<?php endwhile; else: ?>
				<?php _e('Sorry, we couldn’t find the post you are looking for.'); ?>
				<?php endif; ?>
			</div><!-- bio container -->
		</div><!-- eleven columns -->
	</div><!-- row -->
	
	<?php get_footer(); ?>