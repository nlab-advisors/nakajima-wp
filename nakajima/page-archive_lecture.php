<?php get_header('html'); ?>

<body class="lecture">

<?php get_header(); ?>

		<div id="sub-menu">
			<ul id="sub-menuber">
				<li><a href="<MTEntriesWithSubCategories category="講演履歴"　lastn="1"><$MTEntryPermalink$></MTEntriesWithSubCategories >" id="lecture">講演履歴</a></li>
				<li><a href="./request" id="request">講演依頼</a></li>
			</ul>
		</div><!-- sub-menu -->
	
	</div><!-- menu -->
	
	<div id="content">
		<h2 class="archive-lecture">講演の一覧</h2>

		<div class="cat-archive">

			<ul class="archive-list">		
<MTEntriesWithSubCategories category="講演履歴">		<li class="<MTEntryCategories><$MTCategoryBasename$></MTEntryCategories>"><span class="archive-date"><MTEntryDate format="%x"></span><div class="archive-title"><a href="<$MTEntryPermalink$>" ><$MTEntryTitle$></a></div></li>
</MTEntriesWithSubCategories>
			</ul><!-- history-list -->	
			
		</div><!-- history -->


		<div id="topicpath">
			<a href="<$MTBlogURL$>">中島情報文化研究所</a> &gt; 講演履歴
		</div><!-- topicpath -->

<$MTInclude module="フッター"$>

</body>
</html>