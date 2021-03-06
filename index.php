<?php //The Template for displaying home page. ?>
<?php get_header(); ?>

<div id="content" role="main">
	<div class="news-ads">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- top n -->
		<ins class="adsbygoogle"
		     style="display:inline-block;width:728px;height:90px"
		     data-ad-client="ca-pub-2030113156954700"
		     data-ad-slot="1091814663"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	
	<div id="gs-sidebar">
		<?php if (dynamic_sidebar('main_sidebar')) : else : endif; ?>
	</div>

	<div id="writing">
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<h3> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h3> <!-- post title -->
	        	<small class="post-time"><?php the_time('j<\s\u\p>S</\s\u\p> F Y \a\t g:ia') ?></small> <!-- post date and time -->
            	<?php echo do_shortcode( '[post-views]' ); ?> <!-- post views -->
				<div class="entry-home"><?php the_content("read more..."); ?></div>
			</div>
		<?php endwhile; ?>
		<?php wp_pagenavi(); ?> <!-- Pagination by "WP-page Navi" plugin -->
	</div>
</div><!-- #content .site-content -->

<?php get_footer(); ?>