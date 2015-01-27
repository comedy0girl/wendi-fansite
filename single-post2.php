<?php get_header(); ?>

<div class="post-container">
	<class="row">
		<div class="eight columns">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="single-post-wrapper">
				<h5><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h5>
				<div class="cal-date">
					<span class="cal-month"><?php the_time('F') ?></span>
					<span class="cal-day"><?php the_time('j') ?></span>
					<span class="cal-year"><?php the_time('Y')?></span>
				</div><!-- date -->
				<?php $post_thumbnail_id = get_post_thumbnail_id( $post_id ); ?>
				<p><?php the_content(); ?></p>
			</div><!-- single post wrapper ends -->
		
			<div class="post-navigation">
				<div class="alignleft">
					<?php previous_post('&laquo; &laquo; %','Older News: ', 'yes'); ?>
				</div>
				<div class="alignright">
					<?php next_post('% &raquo; &raquo; ','Newest: ', 'yes'); ?>
				</div>
			</div><!-- post navigation -->
			<div class="clear"/>
		</div><!-- eight columns -->
	
		<div class ="two columns">
			<div class="latest-posts">
				<?php dynamic_sidebar('latest_news_sidebar'); ?>
			</div>
		</div>
			<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
	</div><!-- row -->
</div>
<?php get_footer(); ?>