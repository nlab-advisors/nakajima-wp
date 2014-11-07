<?php get_header('html');?>
<?php get_header('lecture');?>

<?php $query = new WP_Query(array('posts_per_page' => 1,'category_name'  => 'lecture'));?>
<?php while ( $query->have_posts() ) : $query->the_post(); ?>
<div id="content">
	<h2 class="lecture"><?php the_title(); ?></h2>
	<div class="entry">
		<div class="entry-header">
			<div class="entry-title"><?php the_title(); ?></div>
			<div class="entry-date"><?php the_date('Y年m月d日'); ?></div>
		</div><!-- entry-header -->
		<div class="entry-article">
			<?php the_content(); ?>
		</div><!-- entry-article -->
	</div><!-- entry -->
	<div class="history">
		<h3 class="history-header">最近の講演</h3>
			
		<div class="archive">
		<a href="<?php echo home_url("/archive_lecture/"); ?>">過去の一覧はこちら</a>
		</div><!-- archive -->
	</div><!-- history -->

	<div id="topicpath">
		<a href="<?php echo home_url(""); ?>">中島情報文化研究所</a> &gt; <a href="<?php echo home_url("/lecture"); ?>">講演情報</a> &gt; <?php the_title(); ?>
	</div><!-- topicpath -->
</div><!-- content -->
<?php endwhile;?>
<?php get_footer(); ?>
