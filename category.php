<?php include ('header.php'); ?>
<?php include('slide.php'); ?>

<?php
    include('include/function.php');
	//get lastest 5 post from drama
	$slug = $_GET['slug'];
	$content = file_get_contents($api_url.'/get_category_posts?slug='.$slug.'&count=30');
	if(!$content) notfound();
	$return = json_decode($content, true);
	$category = $return['category'];
	$posts = $return['posts'];
?>
<div class='category_text'>
	<center>
		<h1 class='YellowText'><?=$category['title']?></h1>
	</center>
	<br>
	<div class="category_description"><?=$category['description']?></div>
</div>

<div class='ExploitTable'>
	<div class='ExploitTableHead'>
		<div>-::DATE</div>
		<div>-::DESCRIPTION</div>
		<div>-::HITS</div>
		<div>-::TAG</div>
		<div>-::AUTHOR</div>
	</div>
</div>
<?php
	loop_post($posts);
?>	
<?php include ('footer.php'); ?>