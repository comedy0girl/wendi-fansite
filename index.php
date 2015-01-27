<?php

get_header(); ?>

	<div class="news-container">
		<div class="row">
			<div class=" one-half column">
				<div class="welcome-image">
					<img class="logo" src="<?php bloginfo('template_url') ?>/images/wendi-main.png"> <alt="Wendi McLendon-Covey Fansite Home">
					
				</div><!-- welcome image -->
				<div class="clear"/>
			</div><!-- one half column -->
		</div><!-- row-->
		
		<div class=" one-half column">
			<div class="welcome-greeting">
				<p><span class="first-name">Wendi</span><span class="last-name">McLendon-Covey</span><br><br>is an actress, producer, improvisor and the star of 
				the hit film Bridesmaids, the television show Reno 911, and can currently be seen on ABC's critically acclaimed sitcom The Goldbergs.</br>
				Here you will find all the latest news, pictures, and media.</br>
				Follow us on<a href=""> Facebook </a> and <a href=""> Twitter</a> for all the latest updates.
				</p>
				
				<div class="wendi-social">
					<div class="follow-wendi">
						<li><h5>Follow Wendi</h5></li>
						<li><i class="fa fa-long-arrow-right fa-3x"></i></li>
					</div>
					<a href="https://twitter.com/wendimclendonco"><i class="fa fa-twitter "></a></i> 
					<a href="http://instagram.com/wendi_mclendon_covey/"><i class="fa fa-instagram "></a></i> 
					<a href="http://wendimc.tumblr.com/"><i class="fa fa-tumblr"></a></i> 
					<a href="https://www.facebook.com/wendi.mclendoncovey"><i class="fa fa-facebook"></a></i>
				</div><!-- wendi social -->
			</div><!-- welcome greeting -->
		</div><!-- one half column -->
		
	
			<div class="one-half column">
				<div class="content-post">
					<?php query_posts( 'posts_per_page=6' ); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="post-wrapper">
							<h5><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h5>
							<div class="cal-date">
								<span class="cal-month"><?php the_time('F') ?></span>
								<span class="cal-day"><?php the_time('j') ?></span>
								<span class="cal-year"><?php the_time('Y')?></span>
							</div><!-- date -->
							<?php
								if (! $featured = get_the_post_thumbnail()) {
									$featured = get_the_content();
								}
								
								// extract post thumbnail URI
								preg_match('/<img.*(src)="([^"]*)"/i', $featured, $matches);
								$thumb = $matches[2]; ?>

							<?php if (!empty($thumb)) : ?>
							
								<a href="<?php echo get_permalink(); ?>" class="img-wrapper">
									<img src="<?php echo $thumb; ?>" alt="">
								</a>
								
								<p><?php $words = str_word_count(get_the_excerpt(), 1);
										  echo implode(' ', array_slice($words, 0, 25)); ?><a href="<?php echo get_permalink(); ?>">...MORE</a></p>
								
							<?php else : ?>
								
								<p><?php $words = str_word_count(strip_tags(get_the_content()), 1);
										  echo implode(' ', array_slice($words, 0, 50)); ?><a href="<?php echo get_permalink(); ?>">...MORE</a></p>
							
							<?php endif; ?>
						</div><!-- post wrapper ends -->
					<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div><!-- content post -->

				<div class="post-nav">
					<div class="alignleft">
						<?php previous_post('&laquo; &laquo; %','Older News: ', 'yes'); ?>
					</div>
					<div class="alignright">
						<?php next_post('% &raquo; &raquo; ','Newest: ', 'yes'); ?>
					</div>
				</div><!--post nav-->
			</div><!-- nine columns all-->
		
		
			<div class="one-half column">
				<div class="instagram-feed">
					<?php dynamic_sidebar('instagram_sidebar'); ?>
				</div><!-- instagram- feed ends -->
				<div class="twitter-feed">
					<?php dynamic_sidebar('twitter_sidebar'); ?>
				</div>
			</div><!-- one half columns -->
	<div class="clear"/>	
	</div><!-- news container -->
	
	
	
	

<?php get_footer(); ?>

