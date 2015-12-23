<?php
	include('header.php');	
?>
<?php
	include('include/function.php');
	$slug = $_GET['slug'];
	$content = file_get_contents($api_url.'/get_author_posts?slug='.$slug.'&count=10');
	if(!$content) notfound();
	$return = json_decode($content, true);
	$author = $return['author'];
	$posts = $return['posts'];
?>
<h1 class="RedText"><?=$author['nickname']?></h1>
<div class="spacer"></div>
<div class="user_table">
	<div class="user_table_content">
		<div class="td">Author</div>
		<div class="td">
			<a href="/author/<?=$author['slug']?>"><?=$author['nickname']?></a>
		</div>
	</div>
	<div class="user_table_content">
		<div class="td">Bio</div>
		<div class="td"><?=$author['description']?></div>
	</div>
	<div class="user_table_content">
		<div class="td">Website</div>
		<div class="td"><?=$author['url']?></div>
	</div>
</div>
<h4>recent post by user: </h4>

<div class='ExploitTable'>
	<div class='ExploitTableHead'>
		<div>-::DATE</div>
		<div>-::DESCRIPTION</div>
		<div>-::HITS</div>
		<div>-::TAG</div>
		<div>-::AUTHOR</div>
	</div>
</div>
<?php loop_post($posts); ?>

<?php include('footer.php'); ?>