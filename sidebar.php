				<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">
						
					<ul class='social-icons'>
						<li>
							<a class='social-icon' href="https://www.stornevy.com" target="_BLANK">
								<img src="<?php echo bloginfo('template_url') ?>/library/images/storenvy-icon-sm.png">
							</a>
						</li>
						<li>
							<a class='social-icon' href="https://twitter.com/Storenvy" target="_BLANK">
								<img src="<?php echo bloginfo('template_url') ?>/library/images/twitter-icon-sm.png">
							</a>
						</li>
						<li>
							<a class='social-icon' href="http://blog.storenvy.com/" target="_BLANK">
								<img src="<?php echo bloginfo('template_url') ?>/library/images/tumblr-icon-sm.png">
							</a>
						</li>
						<li>
							<a class='social-icon' href="https://facebook.com/Storenvy" target="_BLANK">
								<img src="<?php echo bloginfo('template_url') ?>/library/images/facebook-icon-sm.png">
							</a>
						</li>
						<li>
							<a class='social-icon' href="http://instagram.com/storenvy" target="_BLANK">
								<img src="<?php echo bloginfo('template_url') ?>/library/images/instagram-icon-sm.png">
							</a>
						</li>
					</ul>

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<?php // This content shows up if there are no widgets defined in the backend. ?>

						<div class="alert alert-help">
							<p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>