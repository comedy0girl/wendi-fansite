<?php

get_header(); ?>

	<div class="news-container">
		<div class="row">
			<div class=" one-half column">
				<div class="welcome-image">
					<img class="logo" src="<?php bloginfo('template_url') ?>/images/wendi-main.png"> <alt="Wendi McLendon-Covey Fansite Home">
				</div>
				
				<div style="clear:both;">
			</div>
		</div>
			<div class=" one-half column">
				<div class="welcome-greeting">
					<p>Wendi McLendon-Covey is the star of Bridesmaids, Reno 911, and can currently be seen on ABC's hit sitcom The Goldbergs.</br>
					Here you will find all the latest news, pictures, and updates.</br>
					Follow us on<a href=""> Facebook </a> and <a href=""> Twitter</a> for all the latest news.</p>
					
					<div class="wendi-social">
						<div class="follow-wendi">
							<li><h5>Follow Wendi</h5></li>
							<li><i class="fa fa-long-arrow-right fa-3x"></i></li>
						</div>
						<i class="fa fa-twitter "></i> 
						<i class="fa fa-instagram "></i> 
						<i class="fa fa-tumblr"></i> 
						<i class="fa fa-facebook"></i>
					</div>

				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="content-post">
				<div class="nine columns">
					<?php query_posts( 'posts_per_page=3' ); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="post-wrapper">
							<h5><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h5>
							<div class="cal-date">
								<span class="cal-month"><?php the_time('F') ?></span>
								<span class="cal-day"><?php the_time('j') ?></span>
								<span class="cal-year"><?php the_time('Y')?></span>
							</div>
							<div class="img-wrapper">
								<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) {
								echo get_the_post_thumbnail($post->ID);
								} else {
								echo main_image();
								} ?>
							</div>
							<p><?php the_excerpt(); ?></p>
						</div><!-- post wrapper ends -->
					<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
					<div class="clear"></div>
				</div><!-- nine columns -->
				<div class="two columns">
					<div class="instagram-feed">
						<?php dynamic_sidebar('instagram_sidebar'); ?>
					</div><!-- instagram- feed ends -->
				</div><!-- two columns ends -->
			</div><!-- content-post ends -->
				<div class="clear"></div>	
		</div><!-- row ends -->
		
		
		<div class="row">
			<div class="eight columns" style="background:#fff;">
				<div class="post-nav">
					<div class="alignleft">
						<?php previous_post('&laquo; &laquo; %','Older News: ', 'yes'); ?>
					</div>
					<div class="alignright">
						<?php next_post('% &raquo; &raquo; ','Newest: ', 'yes'); ?>
					</div>
				</div><!-- post nav ends -->
			</div><!--eight columns -->
	  </div><!-- row ends -->
    </div> <!-- news container ends -->
	  
	  <div class="row">
	  <div class="links-friends">
		<div class="three columns">
			<div class="our-friends">
				<h5>Our Friends</h5>
				<ul>
				<li><a href="">Goldnerds on Twitter</a><li>
				<li><a href="">Goldnerds Facebook</a></li>
				<li><a href="">Goldnerds Website</a></li>
				<li><a href="">Goldnerds on Instagram</a></li>
				</ul>
			</div>
		</div><!-- three columns ends -->
		<div class="three columns">
			<div class="fan-spot">
				<h5>Fan Spot</h5>
				<ul>
					<li><a href="">Youtube</a></li>
					<li><a href="">Facebook</a></li>
					<li><a href="">Twitter</a></li>
					<li><a href="">Google Plus</a></li>
				</ul>
			</div>
		</div><!-- three columns ends -->
		<div class="three columns">
			<div class="official-links">
				<h5>Official Links</h5>
				<ul>
					<li><a href="">ABC</a></li>
					<li><a href="">Twitter</a></li>
					<li><a href="">Facebook</a></li>
					<li><a href="">Instagram</a></li>
				</ul>
			</div>
		</div><!-- three columns ends -->
		<div class="three columns">
			<div class="twitter-feed">
				<?php dynamic_sidebar('twitter_sidebar'); ?>
			</div><!-- audio sidebar ends -->
		</div><!-- three columns ends -->
		</div><!-- links friends ends -->
	  </div> <!-- row ends -->
    </div> <!--container ends -->
	
<?php get_footer(); ?>
