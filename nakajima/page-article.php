<?php get_header('html');?>
<body class="writing">
<?php get_header();?>
<$MTInclude module="定期連載ヘッダー"$>
	
	</div><!-- menu -->

	<div id="content">
		<h2 class="series">現在の連載</h2>
		<div class="entry">
			<ul class="archive-list">
<MTCategories><MTIfIsDescendant parent="定期連載">
			<li><a href="<MTCategoryArchiveLink>"><$MTCategoryLabel$></a></li>
</MTIfIsDescendant></MTCategories>
			</ul>
		</div><!-- entry -->

		<h2 class="n-series">現在の連載</h2>
		<div class="entry">
			<ul class="archive-list">
<MTEntriesWithSubCategories lastn="30" category="不定期掲載">
				<li><span class="archive-date"><$MTEntryDate format="%x"$></span><span class="archive-media"><$MTEntryCategory$></span><div class="archive-title"><a href="<$MTEntryPermalink$>"><$MTEntryTitle$></a></div></li>
</MTEntriesWithSubCategories>
			</ul>
		</div><!-- entry -->

		<div id="topicpath">
			<a href="<$MTBlogURL$>">中島情報文化研究所</a> &gt; 執筆記録
		</div><!-- topicpath -->

<$MTInclude module="フッター"$>

</body>
</html>