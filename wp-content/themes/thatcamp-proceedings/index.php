<?php get_header(); ?>
   
<div class="main thatcamp-stream">

<ul class="subscribe">
	<li><a href="<?php echo site_url(); ?>/feed" class="subscribe-rss" title="Subscribe with RSS" alt="Subscribe with RSS"><?php _e( 'Subscribe with RSS', 'thatcamp' ); ?></a></li>
	<li><a href="" class="subscribe-email" title="Subscribe by Email" alt="Subscribe by Email"><?php _e( 'Subscribe by Email', 'thatcamp' ); ?></a></li>
</ul>

<h1 class="post-title">THATCamp Posts by Favorite</h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="post-avatar">
							<span class="img-wrapper floatright"><?php echo get_avatar( get_the_author_meta( 'user_email' ), '50' ); ?></span>
					</div>
					<div class="post-meta">
						<header class="post-header">
							<?php
								// Sitewide Tags keeps the original post permalink in postmeta
								$permalink = get_post_meta( get_the_ID(), 'permalink' );
								if ( ! $permalink ) {
									$permalink = get_permalink();
								}

								// We need some data about the source blog
								$source_blog_url = $source_blog_name = $source_blog_link = '';
								$source_blog_id = get_post_meta( get_the_ID(), 'blogid', true );
								if ( $source_blog_id ) {
									$source_blog_url  = get_blog_option( $source_blog_id, 'home', true );
									$source_blog_name = get_blog_option( $source_blog_id, 'blogname', true );
									$source_blog_link = '<a href="' . $source_blog_url . '">' . $source_blog_name . '</a>';
								}
							?>
							<h3 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'thatcamp'), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" class="postlink"><?php the_title(); ?></a></h3>
						</header>
						<span class="meta-author"><?php printf( _x( 'By %s', 'Post written by...', 'thatcamp' ), bp_core_get_userlink( $post->post_author ) ); ?></span>
						<?php if ( $source_blog_link ) : ?>
							<span class="meta-source"><?php printf( _x( 'at %s', 'From the blog...', 'thatcamp' ), $source_blog_link ) ?></span>												
						<?php endif ?>
						<span class="meta-date"><?php echo get_the_date(); ?></span>	
						<span class="meta-cat"><?php echo "Categorized: " ?><?php the_category(', '); ?></span>
						<span class="meta-tags"><?php the_tags('Tagged: ', ', ', '<br />'); ?></span>									
						<span class="excerpt"><?php the_excerpt(); ?></span>
						<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'thatcamp'), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" class="readmore postlink">Read more on the original site...</a>							
					</div>
				</article>

<!--
<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

<?php the_excerpt(); ?>

<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'thatcamp'), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" class="readmore postlink">Read more...</a> 
-->
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts were found.'); ?></p>
<?php endif; ?>

<div class="navigation"><?php posts_nav_link('<span class="break"> </span>', "Previous", "More"); ?></div>

</div>

<div class="sidebar">
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>