<?php get_header('html');?>
<?php get_header('article');?>
	<div id="content">
		<h2 class="series">現在の連載</h2>
		<div class="entry">
			<ul class="archive-list">
			<?php $categories = get_term_children( 28, 'category' ); ?>
			<?php foreach ($categories as $cat): ?>
			<?php $slug = get_category($cat)->slug; ?>
			<li><a href="<?php echo home_url("/category/{$slug}/"); ?>"> <?php echo get_cat_name($cat); ?></a></li>
			<?php endforeach;?>
			</ul>
		</div><!-- entry -->

		<h2 class="n-series">現在の連載</h2>
		<div class="entry">
			<ul class="archive-list">
				<?php $query = new WP_Query(array('posts_per_page' => 30,'category_name'  => 'unscheduled_list',)); ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<li><span class="archive-date"><?php echo get_the_time('Y年m月d日'); ?></span><span class="archive-media"><?php echo get_the_category()[0]->cat_name; ?></span><div class="archive-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></div></li>
				<?php endwhile ?>
			</ul>
		</div><!-- entry -->

		<div id="topicpath">
			<a href="<?php echo home_url(""); ?>">中島情報文化研究所</a> &gt; 執筆記録
		</div><!-- topicpath -->
	</div><!-- content -->
<?php get_footer(); ?>