<?php get_header('html'); ?>
<body class="lecture">
<?php get_header(); ?>
	<div id="sub-menu">
		<ul id="sub-menuber">
			<li><a href="<?php echo home_url("/lecture/"); ?>" id="lecture">講演履歴</a></li>
			<li><a href="<?php echo home_url("/request/"); ?>" id="request">講演依頼</a></li>
		</ul>
	</div><!-- sub-menu -->
</div><!-- menu -->
	<div id="content">
		<h2 class="archive-lecture">講演の一覧</h2>

		<div class="cat-archive">

			<ul class="archive-list">
<?php $query = new WP_Query(array('posts_per_page' => -1,'category_name'  => 'lecture'));?>
<?php while ( $query->have_posts() ) : $query->the_post(); ?>	
<li class="<?php echo get_the_category()[0]->category_nicename;?>"><span class="archive-date"><?php echo get_the_date('Y年m月d日');?></span><div class="archive-title"><a href="<?php the_permalink(); ?>" ><?php the_title();?></a></div></li>
<?php endwhile; ?>
			</ul><!-- history-list -->	
			
		</div><!-- history -->


		<div id="topicpath">
			<a href="<?php echo home_url(""); ?>" >中島情報文化研究所</a> &gt; 講演履歴
		</div><!-- topicpath -->

	</div><!-- content -->
<?php get_footer(); ?>