<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) {
								echo get_the_post_thumbnail($post->ID);
								} else {
								echo main_image();
								} ?>