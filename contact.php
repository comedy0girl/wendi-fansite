<?php 

/*
Template Name: contact
*/ ?>

<?php get_header(); ?>

	<div class="row">
		<div class="eleven columns">
			<div class="contact-container">
				<div class="contact-form">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(__('(more...)')); ?>
				
				<?php endwhile; else: ?>
				<?php _e('Sorry, we couldn’t find the post you are looking for.'); ?>
				<?php endif; ?>
				</div>
			</div><!-- contact container -->
		</div><!-- eleven columns -->
	</div><!-- row -->
	
	<?php get_footer(); ?>