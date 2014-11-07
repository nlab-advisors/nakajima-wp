<?php get_header('html');?>
<?php get_header('article');?>
<?php $is_all = isset($_GET["all"]) and ($_GET['all']==='true'); ?>
<?php global $query_string; ?>

<?php if($is_all): //一覧表示?>
<?php query_posts( $query_string . "&posts_per_page=-1"); ?>

<div id="content">
	<h2 class="<?php echo get_the_category()[0]->category_nicename; ?>"><?php the_title(); ?></h2>

	<div class="cat-archive">
		
		<h3 class="archive-header">これまでの掲載</h3>
		<?php while ( have_posts() ) : the_post(); ?>
		<ul class="archive-list">		
			<li><span class="archive-date"><?php the_date("Y年m月d日");?></span><span class="archive-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></li>
		</ul><!-- history-list -->	

<?php endwhile;?>		
	</div><!-- history -->


	<div id="topicpath">
		<a href="<?php echo home_url(""); ?>">中島情報文化研究所</a> &gt; <a href="<?php echo home_url("/article"); ?>">執筆記録</a> &gt; <?php echo get_the_category()[0]->name; ?>
	</div><!-- topicpath -->
</div><!-- content -->

<?php else: //一つのみ表示?>
<?php query_posts( $query_string . "&posts_per_page=1"); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div id="content">
	<h2 class="<?php echo get_the_category()[0]->category_nicename; ?>"><?php the_title(); ?></h2>
	<div class="entry">
		<div class="entry-header">
			<div class="entry-title"><?php the_title(); ?></div>
			<div class="entry-date"><?php the_date("Y年m月d日");?></div>
		</div><!-- entry-header -->
		<div class="entry-article">
			<?php if(is_category("キーワードで読むガイアの夜明け")): ?>
			<p class="gaia-sum"><a href="http://www.tv-tokyo.co.jp/gaia/keyword/<?php echo get_the_date("Ymd"); ?>"><img src="<?php echo get_bloginfo('template_directory') ?>/img/newspaper.gif">掲載された紙面はこちら</a></p>
			<?php endif; ?>
			<?php the_content(); ?>
		</div><!-- entry-article -->
	</div><!-- entry -->
	<div class="history">
		<h3 class="history-header">これまでの掲載</h3>
		<div class="archive">
		<a href="<?php echo home_url("/category/" . get_the_category()[0]->slug . "/?all=true"); ?>">過去の一覧はこちら</a>
		</div><!-- archive -->
	</div><!-- history -->

	<div id="topicpath">
		<a href="<?php echo home_url(""); ?>">中島情報文化研究所</a> &gt; <a href="<?php echo home_url("/article/"); ?>">執筆記録</a> &gt; <a href="<?php echo home_url("/category/" . get_the_category()[0]->slug . "/?all=true"); ?>"><?php echo get_the_category()[0]->name; ?></a> &gt; <?php the_title();?>
	</div><!-- topicpath -->
</div><!-- content -->
<?php endwhile;?>
<?php endif; ?>

<?php get_footer(); ?>
