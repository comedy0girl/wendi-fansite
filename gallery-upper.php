<?php /*Template Name:upper-gallery*/ ?>

<?php get_header(); ?>
	
	<div class="gallery-container">
		<div class="row">
			<div class="eleven columns">
				<div class="images-container">
					<div class="ten columns">
						<div id="content">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php the_content(__('(more...)')); ?>
							
							<?php endwhile; else: ?>
							<?php _e('Sorry, we couldn’t find the post you are looking for.'); ?>
							<?php endif; ?>	
						</div><!-- content -->
					</div>
					
					<div class="one-two columns">
						<ul class="gallery-nav">
							<li><a href="http://wendimclendoncovey.skl.me/gallery-2/tv-shows/">TV<span class="first">SHOWS</span></a></li>
							<li><a href="http://wendimclendoncovey.skl.me/gallery-2/films/"><span class="first">FILMS</span></a></li>
							<li><a href="http://wendimclendoncovey.skl.me/gallery-2/guest-appearances/">GUEST<span class="first">APPEARANCES</span></a></li>
							<li><a href="http://wendimclendoncovey.skl.me/gallery-2/award-shows/">AWARD<span class="first">SHOWS</span></a></li>
							<li><a href="http://wendimclendoncovey.skl.me/gallery-2/premiere/">PREMIERES<span class="first">&PARTIES</span></a></li>
							<li><a href="http://wendimclendoncovey.skl.me/gallery-2/groundlings/">THE<span class="first">GROUNDLINGS</span></a></li>
							<li><a href="http://wendimclendoncovey.skl.me/gallery-2/interviews/">TALK<span class="first">SHOWS</span></a></li>
							<li><a href="http://wendimclendoncovey.skl.me/gallery-2/old-navy-summer-campaign-2012/">OLD<span class="first">NAVY</span>2012</a></li>
							<li><a href="http://wendimclendoncovey.skl.me/gallery-2/public-appearances/">PUBLIC<span class="first">APPEARANCES</span></a></li>
							<li><a href="http://wendimclendoncovey.skl.me/gallery-2/photo-shoots/">PHOTO<span class="first">SHOOTS</span></a></li>
						</ul>	
					</div>
		
				</div><!-- images container -->
			</div><!-- ten columns -->
			
			
		</div><!-- row -->
	<div><!-- gallery container -->

<?php get_footer(); ?>