<?php get_header('html'); ?>
<?php get_header('request'); ?>
<div id="content">
	<?php while ( have_posts() ) : the_post(); ?>
	
	<h2 class="request">講演依頼</h2>
	<div class="entry">
		<div class="entry-article">
			<div id="msg"></div>
			<?php the_content(); ?>
		</div><!-- entry-article -->
	</div><!-- entry -->
	<div id="topicpath">
		<a href="<?php echo home_url(""); ?>">中島情報文化研究所</a> &gt; <a href="<?php echo home_url("/archive_lecture"); ?>">講演情報</a> &gt; 講演依頼
	</div><!-- topicpath -->
	<?php endwhile; ?>
</div><!-- content -->
<?php get_footer(); ?>