<?php /*Template Name:upper-gallery*/ ?>

<?php get_header(); ?>
	
	<div class="row">
		<div class="gallery-container">
				<div class="eleven columns">
					<ul class="gallery-top">
					<li><a href="http://wendimclendoncovey.skl.me/gallery-2/tv-shows/">TV SHOWS</a></li>
					<li><a href="http://wendimclendoncovey.skl.me/gallery-2/films/">FILMS</a></li>
					<li><a href="http://wendimclendoncovey.skl.me/gallery-2/guest-appearances/">GUEST APPEARANCES</a></li>
					<li><a href="http://wendimclendoncovey.skl.me/gallery-2/award-shows/">AWARD SHOWS</a></li>
					<li><a href="http://wendimclendoncovey.skl.me/gallery-2/premiere/">PREMIERES & PARTIES</a></li>
					<li><a href="http://wendimclendoncovey.skl.me/gallery-2/groundlings/">THE GROUNDLINGS</a></li>
					<li><a href="http://wendimclendoncovey.skl.me/gallery-2/interviews/">INTERVIEWS</a></li>
					<li><a href="http://wendimclendoncovey.skl.me/gallery-2/old-navy-summer-campaign-2012/">OLD NAVY 2012</a></li>
					<li><a href="http://wendimclendoncovey.skl.me/gallery-2/public-appearances/">PUBLIC APPEARANCES</a></li>
					<li><a href="http://wendimclendoncovey.skl.me/gallery-2/photo-shoots/">PHOTO SHOOTS</a></li>
					</ul>	
					
					<div class="images-container">
						<div id="content">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php the_content(__('(more...)')); ?>
							
							<?php endwhile; else: ?>
							<?php _e('Sorry, we couldn’t find the post you are looking for.'); ?>
							<?php endif; ?>	
						</div>
					</div><!-- images container -->
				</div><!-- ten columns -->
		</div><!-- gallery container -->
	
	</div><!-- row -->

	<script>
	$( document ).ready(function() {
		$('.wp-caption-text').hide();
	});
	
	$( ".attachment-thumbnail" ).hover(function() {
			$('.wp-caption-text').show();
			
		});
	</script>
	
<?php get_footer(); ?>