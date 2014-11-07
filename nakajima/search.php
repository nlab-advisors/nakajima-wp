<?php get_header('html'); ?>
<body class="top">
<?php get_header(); ?>
<?php
global $query_string;
query_posts($query_string . "&post_type=post");
?>

<div id="content">

		<h2 class="search">検索結果</h2>
			<div class="entry">

				<form method="post" action="<?php echo home_url( '/' ); ?>" id="search-form">
					<!-- <input type="hidden" name="IncludeBlogs" value="<$MTSearchIncludeBlogs$>" />-->
					<input type="text" size="30" name="s" id="search" value="<?php the_search_query(); ?>" />
					<input type="submit" id="searchsubmit" value="検索" />
				</form>

<?php while ( have_posts() ) : the_post(); ?>

			<div class="new-list">
				<span class="new-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a><span class="search-media">&nbsp;:&nbsp;<?php echo get_the_category()[0]->name; ?></span></span>
			</div><!-- list -->
			
			<div class="new-comment">
				<p><?php echo get_the_category()[0]->name; ?><br /><?php the_excerpt(); ?></p>
				<div class="search-result"><a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a> - <?php echo get_the_date("Y年m月d日"); ?></div>
			</div><!-- comment -->

<?php endwhile; ?>


			<div class="new-list">検索方法</div><!-- list -->
			<div class="new-comment">
<p>すべての言葉が含まれるページを検索します。言葉を検索するときは、引用符で囲んでください。<br />
<p>"中島　洋"</p>
<p>以下のように検索条件を AND、OR、NOT を使って指定することもできます。</p>
<p>検索条件1 OR 検索条件2<br />検索条件1 NOT 検索条件2</p>


			</div><!-- comment -->
		</div><!-- entry -->			
	</div><!-- content -->

<?php get_footer(); ?>