<?php include ('header.php'); ?>
<?php include('slide.php'); ?>

<?php
    include('include/function.php');
	//get lastest 5 post from drama
	$slug = $_GET['slug'];
	$content = file_get_contents($api_url.'/get_tag_posts?slug='.$slug.'&count=30');
	if(!$content) notfound();
	$return = json_decode($content, true);
	$tag = $return['tag'];
	$posts = $return['posts'];
?>
<div class='category_text'>
	<h1 class='YellowText'><img src="/img/price_tag.png" /> <?=$tag['title']?></h1>
	<br>
	<div id="tags-other">other tags: </div>
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

<?php loop_post($posts); ?>

<script type="text/javascript">
	$(document).ready(function() {
		$.getJSON('<?=$api_url?>/get_tag_index/').done(function(data) {
			var str = '';
			console.log(data);
			$.each(data.tags, function(key, item) {
				str += ' <span class="tag"><a href="/tag/'+item.slug+'">'+item.title+'</a></span>,';
			});
			str = str.substring(0, str.length-1);
			$('#tags-other').append(str);
		})
	})
</script>
<?php include ('footer.php'); ?>