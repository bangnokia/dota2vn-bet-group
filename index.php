<?php include('header.php'); ?>
<?php include('slide.php'); ?>
<?php include('include/function.php'); ?>

<div class='category_text'>
	<center>
		<h1 class='YellowText' style="text-align: center; color: rgb(255, 0, 45)">dota2vn bet group wikiperama</h1>
	</center>
	<br>
</div>
<?php
	//get lastest 5 post from drama
	$content = file_get_contents($api_url.'/get_category_posts?slug=drama&count=6');
	$return = json_decode($content, true);
	$posts = $return['posts'];
?>
<div class='category_title'>
	<h2 class='RedText'>[ <a href='/<?=$return['category']['slug']?>' ><?=$return['category']['title']?></a> ]  </h2>
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

<?php
	//get lastest 5 post from drama
	$content = file_get_contents($api_url.'/get_category_posts?slug=news&count=9');
	$return = json_decode($content, true);
	$posts = $return['posts'];
?>
<div class='category_title'>
	<h2 class=''>[ <a href='/<?=$return['category']['slug']?>' ><?=$return['category']['title']?></a> ]  </h2>
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

<?php include( 'footer.php'); ?>