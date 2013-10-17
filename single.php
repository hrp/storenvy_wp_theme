<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="eightcol first clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix single-view'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<?php if(has_post_thumbnail()) : ?>
									<div class='article-thumbnail'>
										<?php the_post_thumbnail('full'); ?>
									</div>
								<?php endif ; ?>
								<div class='social-icons'>
									<ul>
										<li>
											<a class='social-icon' href="https://twitter.com/Storenvy" target="_BLANK">
												<img src="<?php echo bloginfo('template_url') ?>/library/images/twitter-icon.png">
											</a>
										</li>
										<li>
											<a class='social-icon' href="http://blog.storenvy.com/" target="_BLANK">
												<img src="<?php echo bloginfo('template_url') ?>/library/images/tumblr-icon.png">
											</a>
										</li>
										<li>
											<a class='social-icon' href="https://www.facebook.com/storenvy" target="_BLANK">
												<img src="<?php echo bloginfo('template_url') ?>/library/images/facebook-icon.png">
											</a>
										</li>
									</ul>
								</div>
								<div class='article-body'>
									<header class="article-header">
										<h2 class='article-title'><?php the_title() ?></h2>
										<p class="article-author">
											By <?php echo bones_get_the_author_posts_link(); ?>
										</p>
									</header> <?php // end article header ?>

									<section class="entry-content clearfix" itemprop="articleBody">
										<?php the_content(); ?>
									</section> <?php // end article section ?>

								</div>

							</article> <?php // end article ?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</div> <?php // end #main ?>

					<?php get_sidebar(); ?>

				</div> <?php // end #inner-content ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>