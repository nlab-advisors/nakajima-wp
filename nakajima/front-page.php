<?php get_header('html');?>
<body class="top">
<?php get_header();?>
  </div><!-- menu -->
    <div id="content">
      <div id="left-menu">
        <ul>
          <li><a href="<?php echo home_url("/representative/"); ?>" class="menu-about">組織概要</a></li>
          <li><a href="<?php echo home_url("/profile/"); ?>" class="menu-profile">代表略歴</a></li>
          <li><a href="<?php echo home_url("/lecture/"); ?>" class="menu-lecture">講演情報</a></li>
          <li><a href="<?php echo home_url("/archive_article/"); ?>" class="menu-writing">執筆記録</a></li>
          <li><a href="<?php echo home_url("/kotoshuri/"); ?>" class="menu-link">リンク</a></li>
        <ul>
          <li><a href="http://nakaji.co.jp/" class="links">エヌラボ</a></li>
          <li><a href="http://kotoshuri.com/" class="links">沖縄料理　古都首里</a></li>
          <li><a href="http://miyakojima.tv/" class="links">宮古島.tv</a></li>
          <li><a href="http://churaho.com/" class="links">ちゅらほドットコム</a></li>
        </ul>
      </div>
      
      <h2 class="index">最新情報</h2>
      <div class="new">
        
        <div class="new-list">
          <span class="new-series">[中島洋の新刊情報]</span><br>
          <span class="new-date">2009年08月31日&nbsp;-&nbsp;</span><span class="new-title"><a href="http://www.amazon.co.jp/exec/obidos/ASIN/4915933210/nlab0c-22/ref=nosim/"><img src="<?php echo home_url("/cloud.png"); ?>" border="0" /></a></span>
        </div>

        <?php
        $query = new WP_Query(array(
            'posts_per_page' => 4,
            'category_name'  => "article",
            )
        );
        ?>
        <?php while ( $query->have_posts() ) : $query->the_post();?>

        <div class="new-list">
            <span class="new-series">[<?php echo get_the_category()[0]->name; ?>]</span><br />
            <span class="new-date"><?php echo get_the_time('Y年m月d日');?>&nbsp;-&nbsp;</span><span class="new-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
          </div><!-- new-list -->
        <?php endwhile; ?>
      </div><!-- new -->
      
      
      <!-- 
      <h2 class="gaia">キーワードで読むガイアの夜明け</h2>
      <div class="new">
        <MTEntries lastn="1" category="キーワードで読むガイアの夜明け"><div class="new-list">
          <span class="new-date"><MTEntryDate format="%x"></span> - <span class="new-title"><a href="<$MTEntryPermalink$>"><$MTEntryTitle$></a></span></div>
          <div class="new-comment">
            <$MTEntryBody$>
          </div>
        </MTEntries>
      </div>
       -->
      </div><!-- content -->
      <?php get_footer();?>